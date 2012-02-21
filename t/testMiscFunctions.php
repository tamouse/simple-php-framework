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
	function testGetDirectoriesCWD() {
		global $Messages, $Errors;
		$this->assertTrue(function_exists("get_directories"));
		$dirs = get_directories();
		$this->assertTrue(is_array($dirs));
		$this->assertTrue(in_array("simpletest",$dirs));
		$this->assertFalse(in_array(".",$dirs));
		$this->assertFalse(in_array("..",$dirs));
		$this->assertFalse(in_array(basename(__FILE__),$dirs));
		echo "<h3>directories:</h3><ul>".implode("<li>",$dirs)."</ul>";
		echo "<ul>".implode("<li>",$Messages)."</ul>";
	}
	function testGetDirectoriesCWD2() {
		global $Messages, $Errors;
		$this->assertTrue(function_exists("get_directories"));
		$dirs = get_directories(dirname(__FILE__));
		$this->assertTrue(is_array($dirs));
		$this->assertTrue(in_array("simpletest",$dirs));
		$this->assertFalse(in_array(".",$dirs));
		$this->assertFalse(in_array("..",$dirs));
		$this->assertFalse(in_array("basename(__FILE__)",$dirs));
		echo "<h3>directories:</h3><ul>".implode("<li>",$dirs)."</ul>";
		echo "<ul>".implode("<li>",$Messages)."</ul>";
	}
	function testGetDirectoriesParent() {
		global $Messages, $Errors;
		$this->assertTrue(function_exists("get_directories"));
		$dirs = get_directories(dirname(dirname(__FILE__)));
		$this->assertTrue(is_array($dirs));
		$this->assertTrue(in_array("configs",$dirs));
		$this->assertFalse(in_array(".",$dirs));
		$this->assertFalse(in_array("..",$dirs));
		$this->assertFalse(in_array("index.php",$dirs));
		echo "<h3>directories:</h3><ul>".implode("<li>",$dirs)."</ul>";
		echo "<ul>".implode("<li>",$Messages)."</ul>";
	}
	function testIsDir() {
		$this->assertTrue(is_dir(dirname(__FILE__)));
		$this->assertTrue(is_dir(APP_ROOT));
		$this->assertTrue(is_dir(APP_ROOT.'/configs'));
	}
}