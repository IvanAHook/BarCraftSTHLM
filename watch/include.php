<?php

function currentstream() {

	$streams = array(  // Note: Two streams Cannot have the same name!
		"Dreamhack" => "dreamhacktv",
		"Dreamhack SC2" => "dreamhacksc2",
		"Dreamhack SC2b" => "dreamhacksc2b",
		"WCS Europe" => "wcs_europe",
		"WCS Europe 2" => "wcs_europe2",
		"Univesity SL" => "universitysl",
		"Esport SM" => "esportsm",
		"Fragbite" => "fragbitelive",
		"WCS Korea GSL" => "wcs_gsl",
		"WCS Korea OSL" => "wcs_osl",
		"WCS Korea OSL2" => "wcs_osl2",
		"WCS" => "wcs",
		"GOMTV" => "gomtv_en",
		"WCS America" => "wcs_america",
		"Proleague" => "sc2proleague",
		"MLG" => "mlgsc2",
		"MLG 2" => "nasltv",
		"IEM" => "esltv_sc2",
		"Homestory Cup" => "taketv"
	);


	$filename = "twitch-status-current.temp";

	if (file_exists($filename)) {
		$LastModified = filemtime($filename);
		if ($LastModified+600 <= time()) {
			unlink($filename);	
		}
	}

	clearstatcache();

	if (!file_exists($filename)) {

		$json_data = array();

		$imploded_streams = implode(",", array_values($streams));

		$json_file = @file_get_contents("http://api.justin.tv/api/stream/list.json?channel={$imploded_streams}", 0, null, null);
		$json_array = json_decode($json_file, true);

		if (!empty($json_array)) {

				

				foreach ($json_array as $json_stream) {
					$username = $json_stream["channel"]["title"];
					$streamimage = $json_stream["channel"]["screen_cap_url_huge"];

					$json_data[$username] = $streamimage;
				}

				// print_r($json_data);

		}

		$someone_online = false;

		foreach ($streams as $stream_title => $stream_username) {
			
			if (isset($json_data[$stream_username])) {

				$username = $stream_username;
				$title = $stream_title;
				$image_url = $json_data[$stream_username];

				$link_url = "http://barcraftsthlm.se/watch/";

				$someone_online = true;

				break;
			}
		}

		if (!$someone_online) {
			$link_url = "http://twitch.tv/directory/all";
			$title = "E-sport";
			$image_url = "http://www.barcraftsthlm.se/watch/twitch-default-thumb.jpg";
		}

		$fh = fopen($filename, 'w') or die();
		fwrite($fh, $username.";".$title.";".$image_url.";".$link_url);
		fclose($fh);
	}

	if (!isset($username)) {
		if (file_exists($filename)) {
			$filecontents = explode(";",file_get_contents($filename));
			$username = $filecontents[0];
			$title = $filecontents[1];
			$image_url = $filecontents[2];
			$link_url = $filecontents[3];
		} else {
			$title = "TwitchTV";
			$image_url = "http://www.barcraftsthlm.se/twitch-default-thumb.jpg";
			$link_url = "http://twitch.tv/directory/all";
		}
	}

	$data["username"] = $username;
	$data["link_url"] = $link_url;
	$data["title"] = $title;
	$data["image_url"] = $image_url;

	return $data;
}

?>