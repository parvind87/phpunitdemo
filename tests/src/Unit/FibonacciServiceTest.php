<?php

namespace Drupal\Tests\phpunitdemo\Unit;

use Drupal\Tests\UnitTestCase;
use Drupal\phpunitdemo\FibonacciService;

/**
 * Our main test class for the fibonacci service.
 */
class FibonacciServiceTest extends UnitTestCase {

  public function testSixthFibonacciNumber() {
    $fibonacciService = new FibonacciService();
    $fibonacciSequence = $fibonacciService->calcSomeFibos(6);
    $this->assertEquals(
      $fibonacciSequence[5],
      5
    );
  }
  public function testTenthFibonacciNumber() {
    $fibonacciService = new FibonacciService();
    $fibonacciSequence = $fibonacciService->calcSomeFibos(9);
    $this->assertEquals(
      $fibonacciSequence[8],
      21
    );
  }

}