<?php

namespace app\models;

use Yii;
use yii\validators\FilterValidator;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $name
 * @property string $price
 * @property int $created_at
 */
class Product extends \yii\db\ActiveRecord
{
    const SCENARIO_UPDATE = 'update';
    const SCENARIO_CREATE = 'create';
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'price', 'created_at'], 'required'],
            ['name', 'string', 'length' => [1, 20]],
            /*['name', function($name) {
                //return trim(strip_tags($name));
                $name = trim($name);
                $name = strip_tags($name);
                return $name;
            }],*/
            ['name', 'filter', 'filter' => 'trim'],
            ['name', 'filter', 'filter' => 'strip_tags'],
            ['name', ],
            ['price', 'integer', 'max' => 1000, 'min' => 0],
            [['created_at'], 'integer'],
            [['name', 'price'], 'string', 'max' => 50],
        ];
    }

    public function scenarios()
    {
        return [
            self::SCENARIO_DEFAULT => ['name'],
            self::SCENARIO_CREATE => ['name', 'price'],
            self::SCENARIO_UPDATE => ['price']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'price' => 'Price',
            'created_at' => 'Created At',
        ];
    }
}
