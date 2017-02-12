<?php
// Наследуем от базового класса
class Controller_Main extends Controller {

	// Переопределяем конструктор
	function __construct() {
		// Подключаем модель
		$this->model = new Model_Main();
		$this->view = new View();
	}

	// Переопределяем действие по умолчанию
	function action_index() {
		// Получаем данные из модели
		$data = $this->model->get_data();
		// Создаем представление страницы
		$this->view->generate('main_view.php', 'template_view.php', $data);
	}
}
