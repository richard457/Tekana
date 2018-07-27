<?php 
use PHPUnit\Framework\TestCase;

/**
*  Corresponding Class to test YourClass class
*
*  For each class in your library, there should be a corresponding Unit-Test for it
*  Unit-Tests should be as much as possible independent from other test going on.
*
*  @author yourname
*/
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
