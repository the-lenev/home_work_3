<?php
class Model_Main extends Model {
	public function get_data() {
		// create curl resource
		if( $curl = curl_init() ) {
			// set url
			curl_setopt($curl, CURLOPT_URL, 'http://samples.openweathermap.org/data/2.5/find?q=London&units=metric&appid=b1b15e88fa797225412429c1c50c122a1');
			//return the transfer as a string
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			// $output contains the output string
			$out = json_decode(curl_exec($curl), true);
			// close curl resource to free up system resources
			curl_close($curl);

			return $out['list'][0];
		}
	}
}
