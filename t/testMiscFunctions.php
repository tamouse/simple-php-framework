<?php
require_once(dirname(__FILE__) . '/simpletest/autorun.php');
require_once(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'config.inc.php');
require_once(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'miscfunctions.php');

class TestMiscFunctions extends UnitTestCase {
	function setUp() {
		global $Messages, $Errors;
		$Messages=array();
		$Errors=array();
	}
    function testDisplay() {
		$this->assertTrue(function_exists('display'));
		ob_start();
		display("default");
		$output = ob_get_clean();
		$this->assertTrue(preg_match("/It works!/",$output));
		echo "<pre>".htmlentities($output),"</pre>";
    }
	function testMessages() {
		global $Messages;
		$Messages[]='Test Message 1';
		$Messages[]='Test Message 2';
		ob_start();
		display("_messages");
		$output = ob_get_clean();
		$this->assertTrue(preg_match("/Test Message 1/",$output));
		$this->assertTrue(preg_match("/Test Message 2/",$output));
		echo "<pre>".htmlentities($output),"</pre>";
	}
	function testErrors() {
		global $Errors;
		$Errors[]='Test Error 1';
		$Errors[]='Test Error 2';
		ob_start();
		display("_messages");
		$output = ob_get_clean();
		$this->assertTrue(preg_match("/Test Error 1/",$output));
		$this->assertTrue(preg_match("/Test Error 2/",$output));
		echo "<pre>".htmlentities($output)."</pre>";
	}
	function testMessagesAndErrors() {
		global $Messages, $Errors;
		$Messages[]='Test Message 1';
		$Messages[]='Test Message 2';
		$Errors[]='Test Error 1';
		$Errors[]='Test Error 2';
		ob_start();
		display("_messages");
		$output = ob_get_clean();
		$this->assertTrue(preg_match("/Test Message 1/",$output));
		$this->assertTrue(preg_match("/Test Message 2/",$output));
		$this->assertTrue(preg_match("/Test Error 1/",$output));
		$this->assertTrue(preg_match("/Test Error 2/",$output));
		echo "<pre>".htmlentities($output),"</pre>";

	}
}