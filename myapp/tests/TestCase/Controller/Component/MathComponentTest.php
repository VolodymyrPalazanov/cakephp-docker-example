<?php
namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\MathComponent;
use Cake\Controller\Controller;
use Cake\TestSuite\TestCase;

class MathComponentTest extends TestCase {
    public $Math;

    public function setUp() {
        parent::setUp();
        $controller = new Controller();
        $registry = $controller->components();
        $this->Math = new MathComponent($registry);
    }

    public function testAdd() {
        $result = $this->Math->add(2, 3);
        $this->assertEquals(5, $result);
    }
}
