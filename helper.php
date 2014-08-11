<?php
	
	include("includes/github.php");

	abstract class ModSample {
		static public function getData($params){
			//Defaults to my username if none is provided (yet)
			$username = $params->get("username", "aapis");
			$auth = new GithubAPICredentials();
			$url = sprintf("https://api.github.com/users/%s?client_id=%s&client_secret=%s", $username, $auth->id, $auth->secret);

			$curl = curl_init();
			curl_setopt_array($curl, array(
				CURLOPT_RETURNTRANSFER => 1,
				CURLOPT_URL => $url,
				CURLOPT_USERAGENT => $username, //required by Github API guidelines
			));

			$response = curl_exec($curl);
			
			return json_decode($response);
		}
	}

?>