<?php


namespace app\models;


use yii\db\ActiveRecord;
use Yii;

/**
 * Class City
 * @package app\models
 * Города
 */
class City extends ActiveRecord
{
    /**
     * @return string
     * Обращаемся к таблице city базы данных
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * Получаем все города из таблицы city
     */
    public function getAllCities()
    {
        // Перед выводом данных проверяем есть ли данные в кеше
        $cities = Yii::$app->cache->get('cities');
        if (!$cities) {
            $cities = City::find()->asArray()->all();
            Yii::$app->cache->set('cities', $cities, 30); // 10 сек.
        }

        return $cities;
    }


    public function getCitiesFromCountries($id)
    {
        $countCities = Yii::$app->cache->get('country');
        if (!$countCities) {
            $countCities = City::find()->where(['country' => $id])->asArray()->all();
        }

        return $countCities;
    }
}