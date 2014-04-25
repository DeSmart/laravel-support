<?php

if(false === function_exists('bool')) {

  /**
   * Wrapper for filter_var() converting values to boolean
   *
   * If given string can't be converted (@see FILTER_NULL_ON_FAILURE) InvalidArgumentException will be thrown
   *
   * @param string $value
   * @return boolean
   * @throws \InvalidArgumentException
   */
  function bool($value) {
    $flags = FILTER_NULL_ON_FAILURE;
    $bool = filter_var($value, FILTER_VALIDATE_BOOLEAN, compact('flags'));

    if(null === $bool) {
      throw new \InvalidArgumentException('This values seems to be a non-boolean');
    }

    return $bool;
  }

}
