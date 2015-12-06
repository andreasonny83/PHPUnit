<?php
/**
 * Simple Money class for testing purpose
 */
Class Money {
  private $val;

  function __construct( $val = 0 ) {
    $this->val = $val;
  }

  public function getVal() {
    return $this->val;
  }
  public function setVal($val) {
    $this->val = $val;
  }
}
?>
