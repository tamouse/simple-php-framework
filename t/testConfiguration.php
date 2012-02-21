<?php
require_once(dirname(__FILE__) . '/simpletest/autorun.php');
require_once(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'config.inc.php');
class TestConfiguration extends UnitTestCase {
    function testConfigLoad() {
		global $smarty;
		$this->assertNotNull(APP_ROOT);
		$this->assertNotNull(APP_URL);
		$this->assertNotNull($smarty);
    }
}