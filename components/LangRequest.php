<?php

declare(strict_types=1);

namespace app\components;

use app\models\Lang;
use yii\base\InvalidConfigException;
use yii\web\Request;

class LangRequest extends Request
{
    public ?string $web = '';
    private ?string $_lang_url = null;

    public function getBaseUrl()
    {
        return str_replace($this->web, "", parent::getBaseUrl());
    }

    /**
     * @throws InvalidConfigException
     */
    public function getLangUrl(): ?string
    {
        if ($this->_lang_url === null) {
            $this->_lang_url = $this->getUrl();
            $url_list = explode('/', $this->_lang_url);
            $lang_url = $url_list[1] ?? null;
            Lang::setCurrent($lang_url);
            if ($lang_url !== null && $lang_url === Lang::getCurrent()->url &&
                strpos($this->_lang_url, Lang::getCurrent()->url) === 1) {
                $this->_lang_url = substr($this->_lang_url, strlen(Lang::getCurrent()->url) + 1);
            }
        }
        return $this->_lang_url;
    }

    protected function resolvePathInfo(): string
    {
        $pathInfo = $this->getLangUrl();
        if (($pos = strpos($pathInfo, '?')) !== false) {
            $pathInfo = substr($pathInfo, 0, $pos);
        }
        $pathInfo = urldecode($pathInfo);
        if (!preg_match('%^(?:
            [\x09\x0A\x0D\x20-\x7E]              # ASCII
            | [\xC2-\xDF][\x80-\xBF]             # non-overlong 2-byte
            | \xE0[\xA0-\xBF][\x80-\xBF]         # excluding overlongs
            | [\xE1-\xEC\xEE\xEF][\x80-\xBF]{2}  # straight 3-byte
            | \xED[\x80-\x9F][\x80-\xBF]         # excluding surrogates
            | \xF0[\x90-\xBF][\x80-\xBF]{2}      # planes 1-3
            | [\xF1-\xF3][\x80-\xBF]{3}          # planes 4-15
            | \xF4[\x80-\x8F][\x80-\xBF]{2}      # plane 16
            )*$%xs', $pathInfo)
        ) {
            $pathInfo = utf8_encode($pathInfo);
        }
        $scriptUrl = $this->getScriptUrl();
        $baseUrl = $this->getBaseUrl();
        if (str_starts_with($pathInfo, $scriptUrl)) {
            $pathInfo = substr($pathInfo, strlen($scriptUrl));
        } elseif ($baseUrl === '' || str_starts_with($pathInfo, $baseUrl)) {
            $pathInfo = substr($pathInfo, strlen($baseUrl));
        } elseif (isset($_SERVER['PHP_SELF']) && str_starts_with($_SERVER['PHP_SELF'], $scriptUrl)) {
            $pathInfo = substr($_SERVER['PHP_SELF'], strlen($scriptUrl));
        } else {
            throw new InvalidConfigException('Unable to determine the path info of the current request.');
        }

        if (isset($pathInfo[0]) && $pathInfo[0] === '/') {
            $pathInfo = substr($pathInfo, 1);
        }

        return $pathInfo;
    }
}
