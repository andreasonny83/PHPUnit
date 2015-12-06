<?php
require 'classes/money.php';

Class MoneyTest extends PHPUnit_Framework_TestCase {

  /**
   * Some mock data to reuse accross the test routine
   * @var [Array]
   */
  public $mock_answer = [
    0,
    1,
    3,
    30000000,
    -200,
    'pippo'
  ];

  /**
   * Make sure PHPUnit is working before proceeding
   */
  public function PHPUnitTest() {
    $this->assertEquals(1, 1);
  }

  /**
   * Test getVal
   */
  public function testGetVal() {

    foreach ( $this->mock_answer as $value ) {
      $money = new Money( $value );

      // echo "\ntesting: $value, returns: " . $money->getVal();
      $this->assertEquals( $value, $money->getVal() );
    }
  }

  /**
   * Test setVal
   */
  public function testSetVal() {

    $money = new Money();

    foreach ( $this->mock_answer as $value ) {

      $money->setVal( $value );
      // echo "\ntesting: $value, returns: " . $money->getVal();
      $this->assertEquals( $value, $money->getVal() );
    }
  }

}
?>
