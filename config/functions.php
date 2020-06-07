<?php

/**
 * @param $var
 * Функция для более аккуратного и понятного отображения проверяемого кода
 */
function debug($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}