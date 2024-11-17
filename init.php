<?php
class Auto_close_article extends Plugin {

	private $host;

	function about() {
		return array(1.0,
			"Automatically closes the article view if the article list is scrolled.",
			"wolfgang");
	}

	function init($host) {
	}

	function get_js() {
		return file_get_contents(dirname(__FILE__) . "/autoclosearticle.js");
	}

	function api_version() {
		return 2;
	}

}
?>
