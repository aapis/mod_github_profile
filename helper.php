<?php
	
	include("includes/github.php");

	abstract class ModSample {
		static public function getData($params){
			//Defaults to my username if none is provided (yet)
			$username = $params->get("username", "aapis");
			$auth = new GithubAPICredentials();

			if($auth->id != "" || $auth->secret != ""){
				$url = sprintf("https://api.github.com/users/%s?client_id=%s&client_secret=%s", $username, $auth->id, $auth->secret);
			}else {
				$url = sprintf("https://api.github.com/users/%s?access_token=%s", $username, $auth->token);
			}

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