<?php


namespace eschwartz\AliceIssue181;


use eschwartz\AliceIssue181\DataProvider\MyProvider;
use Nelmio\Alice\Loader\Yaml as YamlLoader;

class Main {

	public static function run() {
		$loader = new YamlLoader('en_US', [
			new MyProvider()
		]);

		$fixtures = $loader->load(__DIR__ . '/Fixture/fixtures.yml');

		print_r($fixtures);
	}

}