<?php


namespace app\models;

use yii\db\ActiveRecord;

class Country extends ActiveRecord
{
    public static function tableName()
    {
        return 'country';
    }

    // Вытаскиваем все страны из базы
    public function getCountries()
    {
        return Country::find()->asArray()->all();
    }
}