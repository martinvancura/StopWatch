<?php

namespace mvan\stopwatch;

class StopWatch {
  private $start;
  private $stop;
  private $result;

  const IN_SECONDS = 1;
  const IN_MINUTES = 2;

  /**
   * Sets start of measuring time
   */
  public function start() {
    $this->start = microtime(TRUE);
  }

  /**
   * Stops a stopwatch
   */
  public function stop() {
    $this->stop = microtime(TRUE);
  }

  /**
   * Returns time in seconds, rounded on two decimals
   * @return float
   */
  public function getResult($returnUnit=self::IN_SECONDS) {
    if (!$this->result) {
      $this->result = $this->stop - $this->start;
    }

    $return = null;

    if($returnUnit == self::IN_SECONDS) {
      $return = round($this->result,2);
    } elseif($returnUnit == self::IN_MINUTES) {
      $return = round($this->result/60,2);
    }

    return $return;
  }
}