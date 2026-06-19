<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%car_item}}`.
 */
class m260619_185620_create_car_item_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%carItem}}', [
            'id' => $this->primaryKey(),
            'brand' => $this->string()->notNull(),
            'priority' =>$this->boolean()->notNull(),
            'price' =>$this->integer()->notNull(),
            'isPurchased'=>$this->boolean()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%car_item}}');
    }
}
