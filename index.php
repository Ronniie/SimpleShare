<?php
	$settings_validator = "True";
	$settings = include("settings.php");
	$file_directory = $settings['file_directory'];
	$directory = $settings['directory'];
	$template_directory = $settings['template_directory'];

	$ss_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$explode = explode('/', $_SERVER['REQUEST_URI']);
	$file_type = "404";
	
	if($directory == "NONE" ){
		$ids = array(0 => $explode[1], 1 => strtok($explode[1], "."));
	} else {
		$ids = array(0 => $explode[2], 1 => strtok($explode[2], "."));
	}

	foreach($ids as $loc => $id){
		$id = str_replace("*", "", $id);
		$id = str_replace("%7C", "", $id);
		$id = str_replace("__", "", $id);
		$id = str_replace("?", "", $id);
		$id = str_replace("%20", "", $id);
		$ids[$loc] = $id;
	}

	if(empty($ids[0]) && empty($ids[1])){
		include("$template_directory/home.php");
	} else {
		$fileswithexention = glob("$file_directory" . $ids[0]);
		$files = glob("$file_directory" . $ids[1] . ".*");
		if(count($fileswithexention) == 1){
			$file = $fileswithexention[0];
			$id = $ids[1];
			$info = pathinfo($file);
			$validator = 1;
			$extensions = $info["extension"];
			$file_size = floor(log(filesize($file), 1024));
			$file_size = round(filesize($file) / pow(1024, $file_size), [0,0,2,2,3][$file_size]).['B', 'kB', 'MB', 'GB', 'TB'][$file_size];
			$file_time = date('d-m-Y H:i (T O)', filemtime($file));
		} else {
			if($settings['files'] == "strict" && count($files) == 1 || $settings['files'] == "soft" && count($files) > 0){
				foreach ($files as $file){
					$id = $ids[1];
					$info = pathinfo($file);
					$validator = 1;
					$extensions = $info["extension"];
					$file_size = floor(log(filesize($file), 1024));
					$file_size = round(filesize($file) / pow(1024, $file_size), [0,0,2,2,3][$file_size]).['B', 'kB', 'MB', 'GB', 'TB'][$file_size];
					$file_time = date('d-m-Y H:i (T O)', filemtime($file));
				}
			} else {
				$validator = 0;
			}
		}
		if($validator == 0){
			$file_type = "404";
		} else {
			if(empty($extensions)){
				$file_type = "404";
			} else {
				if(in_array(strtolower($extensions), array('png', 'jpg', 'jpeg', 'gif'))){
					$file_type = "image";
				}
				if(in_array(strtolower($extensions), array('txt', 'md', 'log'))){
					$file_type = "text";
				}
				if(in_array(strtolower($extensions), array('mp4', 'mov', 'mp3'))){
					$file_type = "video";
				}
			}
		}
		include("$template_directory/$file_type.php");
	}
?>