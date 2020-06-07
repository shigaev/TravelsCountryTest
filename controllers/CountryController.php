<?php


namespace app\controllers;
// Связываем контроллер с моделью City
use app\models\City;
use yii\web\Controller;

/**
 * Class CountryController
 * @package app\controllers
 * Страны
 */
class CountryController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index', compact('cities'));
    }

    public function actionView($id)
    {
        $countCities = new City();
        $countCities = $countCities->getCitiesFromCountries($id);
        return $this->renderPartial('view', compact('countCities'));
    }
}