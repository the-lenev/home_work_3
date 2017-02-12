<?php
class Controller {
	public $model;
	public $view;

	// Конструктор
	function __construct() {
		$this->view = new View();
	}

	// Действие, вызываемое по умолчанию, переопределяется при создании классов потомков
	function action_index() {}
}
