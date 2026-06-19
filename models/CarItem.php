<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "carItem".
 *
 * @property int $id
 * @property string $brand
 * @property bool $priority
 * @property int $price
 * @property bool $isPurchased
 */
class CarItem extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'carItem';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['brand', 'priority', 'price', 'isPurchased'], 'required'],
            [['priority', 'isPurchased'], 'boolean'],
            [['price'], 'integer', 'min' => 0, 'tooSmall' => 'Az ár nem lehet negatív'],
            [['brand'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Azonosító',
            'brand' => 'Márka',
            'priority' => 'Prioritás',
            'price' => 'Ár',
            'isPurchased' => 'Megvásárolt',
        ];
    }

}
