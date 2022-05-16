<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%lang}}`.
 */
class m220516_181738_create_lang_table extends Migration
{
    public const TABLE_NAME = 'lang';

    private string $table = '{{%' . self::TABLE_NAME . '}}';

    public function safeUp()
    {
        $this->createTable($this->table, [
            'id' => $this->primaryKey()->comment('ID'),
            'url' => $this->string(255)->comment('Url'),
            'local' => $this->string(255)->comment('Local'),
            'name' => $this->string(255)->comment('Название'),
            'default' => $this->smallInteger(6)->defaultValue(0)->comment('Default'),
            'createdAt' => $this->dateTime()->null(),
            'updatedAt' => $this->dateTime()->null(),
        ]);
        $this->batchInsert('lang', ['url', 'local', 'name', 'default', 'createdAt', 'updatedAt'], [
            ['en', 'en-EN', 'English', 0, date('Y-m-d H:i:s'), date('Y-m-d H:i:s')],
            ['ru', 'ru-RU', 'Русский', 1, date('Y-m-d H:i:s'), date('Y-m-d H:i:s')],
        ]);
    }

    public function safeDown()
    {
        $this->dropTable($this->table);
    }
}
