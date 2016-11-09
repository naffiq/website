<?php

use yii\db\Migration;

/**
 * Handles the creation of table `projects`.
 */
class m161109_130327_create_projects_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%projects}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'description' => $this->text()->notNull(),
            'image' => $this->string(),
            'link' => $this->string(),
            'is_active' => $this->boolean(),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%projects}}');
    }
}
