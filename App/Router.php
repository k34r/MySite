<?php

namespace App;

class Router {

    public static $list = [];

	public static function Page($uri, $page_name) {
	self::$list[] = ['uri'=>$uri, 'page'=>$page_name];
	}

    public static function enable(){

	    $query = $_GET['q'] ?? 'MySite';

		foreach (self::$list as $elem) {

			if($query === $elem['page']){
			require_once $elem['uri'];
		    }
		}
    }
}

