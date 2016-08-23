<?php
	function get_ip(){

		if(!empty($_SERVER['HTTP_CLIENT_IP']))
		{
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		}elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}elseif (!empty($_SERVER['HTTP_X_FORWARDED'])) {
			$ip = $_SERVER['HTTP_X_FORWARDED'];
		}elseif (!empty($_SERVER['HTTP_FORWARDED_FOR'])) {
			$ip = $_SERVER['HTTP_FORWARDED_FOR'];
		}elseif(!empty($_SERVER['HTTP_FORWARDED'])){
			$ip = $_SERVER['HTTP_FORWARDED'];
		}elseif (!empty($_SERVER['REMOTE_ADDR'])) {
			$ip = $_SERVER['REMOTE_ADDR'];
		}else{
			$ip = null;
		}
		return $ip;

	}


	function get_location($ip){
		//http://www.geoplugin.net/php.gp?ip=$ip
		$geoData = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$ip"));

	echo "<tr>";
	echo "<th>city</th>";
	echo "<td>",$geoData['geoplugin_city'],"</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>Region</th>";
		echo "<td>",$geoData['geoplugin_region'],"</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>Region name</th>";
			echo "<td>",$geoData['geoplugin_regionName'],"</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>Country</th>";
			echo "<td>",$geoData['geoplugin_countryName'],"</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>Country Code</th>";
			echo "<td>",$geoData['geoplugin_countryCode'],"</td>";
	echo "</tr>";	
	echo "<tr>";
	echo "<th>Continent Code</th>";
			echo "<td>",$geoData['geoplugin_continentCode'],"</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>Currency Code</th>";
			echo "<td>",$geoData['geoplugin_currencyCode'],"</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>Currency Symbol</th>";
			echo "<td>",$geoData['geoplugin_currencySymbol'],"</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>Latitude</th>";
			echo "<td>",$geoData['geoplugin_latitude'],"</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>Longitude</th>";
			echo "<td>",$geoData['geoplugin_longitude'],"</td>";
	echo "</tr>";

	}

?>