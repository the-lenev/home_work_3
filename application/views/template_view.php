<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Прогноз погоды</title>
	<link rel="icon" type="image/png" href="OWM.png" />
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
	<script src="/js/jquery-1.12.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<?php
			// Подключаем внутренний шаблон для текущей страницы
			include 'application/views/'.$content_view;
		?>
	</div>
</body>
</html>
