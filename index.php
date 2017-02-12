<?php
// Отображаем ошибки
ini_set('display_errors', 1);

// Подключаем базовые классы
require_once 'application/model.php';
require_once 'application/view.php';
require_once 'application/controller.php';

// Подключаем запускаем маршрутизатор
require_once 'route.php';
Route::start();
