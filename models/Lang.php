<?php

declare(strict_types=1);

namespace app\models;

use Carbon\Carbon;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%lang}}".
 *
 * @property int $id ID
 * @property string|null $url Url
 * @property string|null $local Local
 * @property string|null $name Название
 * @property int|null $default Default
 * @property string|null $createdAt
 * @property string|null $updatedAt
 */
class Lang extends \yii\db\ActiveRecord
{

    public static ?Lang $current = null;

    public function behaviors(): array
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::class,
                'attributes' => [
                    self::EVENT_BEFORE_INSERT => ['createdAt', 'updatedAt'],
                    self::EVENT_BEFORE_UPDATE => ['updatedAt']
                ],
                'value' => function () {
                    $carbon = new Carbon();
                    $carbon->format('Y-m-d H:i:s');
                    return $carbon->toDateTimeString();
                }
            ],
        ];
    }

    public static function tableName(): string
    {
        return '{{%lang}}';
    }

    public function rules(): array
    {
        return [
            [['default'], 'integer'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['url', 'local', 'name'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels(): array
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'url' => Yii::t('app', 'Url'),
            'local' => Yii::t('app', 'Local'),
            'name' => Yii::t('app', 'Название'),
            'default' => Yii::t('app', 'Default'),
            'createdAt' => Yii::t('app', 'Created At'),
            'updatedAt' => Yii::t('app', 'Updated At'),
        ];
    }

    public static function getCurrent(): ?self
    {
        if( self::$current === null ){
            self::$current = self::getDefaultLang();
        }

        return self::$current;
    }

    public static function setCurrent(?string $url = null): void
    {
        $language = self::getLangByUrl($url);
        self::$current = ($language === null) ? self::getDefaultLang() : $language;
        Yii::$app->language = self::$current->local;
    }

    public static function getDefaultLang(): ?self
    {
        return Lang::findOne(['default' => 1]);
    }

    public static function getLangByUrl(?string $url = null): ?Lang
    {
        if ($url === null) {
            return null;
        } else {
            return Lang::findOne(['url' => $url]);
        }
    }
}
