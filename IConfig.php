<?php

abstract class AbstractConfig {

		const AUTH_ENDPOINT  = "https://accounts.google.com/o/oath2/auth";
		const TOKEN_ENDPOINT = "https://accounts.google.com/o/oath2/token";

		abstract public function getApiKey();
		abstract public function getClientId();
		abstract public function getOAuthToken($userid);

}