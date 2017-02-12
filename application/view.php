<?php
class View {
	//метод generate предназначен для формирования вида. В него передаются:
	// 1. $content_file — виды отображающие контент страниц;
	// 2. $template_file — общий для всех страниц шаблон;
	// 3. $data — массив, содержащий элементы контента страницы.
	function generate($content_view, $template_view, $data = null) {
		include 'application/views/'.$template_view;
	}
}
