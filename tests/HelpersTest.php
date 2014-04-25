<?php

class HelpersTest extends PHPUnit_Framework_TestCase {

  /**
   * @dataProvider boolFunctionProvider
   */
  public function testBoolFunction($value, $expected) {
    $this->assertSame($expected, bool($value));
  }

  public function boolFunctionProvider() {
    return array(
      array(true, true),
      array('true', true),
      array('1', true),
      array('on', true),
      array('yes', true),
      array(false, false),
      array('false', false),
      array('0', false),
      array('off', false),
      array('no', false),
      array('', false),
    );
  }

  public function testBoolFunctionThrowsException() {
    $this->setExpectedException('InvalidArgumentException');
    bool('yolo');
  }

}
