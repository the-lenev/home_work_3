<?php
class Model_Main extends Model {
	// Функция получения данных
	public function get_data() {
		// Инициализируем сеанс cURL
		if( $curl = curl_init() ) {
			// Устанавливаем параметр URL
			curl_setopt($curl, CURLOPT_URL, 'http://samples.openweathermap.org/data/2.5/find?q=London&units=metric&appid=b1b15e88fa797225412429c1c50c122a1');
			// Устанавливаем параметр возврата значения в виде строки
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			// Выполняем запрос и декодируем его в массив
			$out = json_decode(curl_exec($curl), true);
			// Закрываем сеанс
			curl_close($curl);
			// Возвращаем результат запроса, исключая системную информацию
			return $out['list'][0];
		}
	}
}
