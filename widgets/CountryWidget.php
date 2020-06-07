<?php


namespace app\widgets;

use app\models\Country;
use yii\base\Widget;

class CountryWidget extends Widget
{
    public $data;

    public function run()
    {
        // Создаем объект модели Country
        $this->data = new Country();
        // Перезаписываем свойство data и обращаемся к методу getCountries
        $this->data = $this->data->getCountries();
        $this->data = $this->countryToTemplate($this->data);
        return $this->data;
    }

    public function countryToTemplate($data)
    {
        // Подключаем шаблон виджета
        ob_start();
        include __DIR__ . '/template/countrywidget.php';
        return ob_get_clean();
    }
}