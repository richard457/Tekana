<?php 
use PHPUnit\Framework\TestCase;


class YourClassTest extends TestCase
{
	

  public function testIsThereAnySyntaxError()
  {
	$var = new Tekana\Auth\TekanaAuth;
	$this->assertTrue(is_object($var));
	unset($var);
  }

  public function testMethod1()
  {
	$var = new Tekana\Auth\TekanaAuth;
	$this->assertTrue($var->getRedirectLoginHelper("hey") == 'hey');
	unset($var);
  } 
}
