<?php

namespace yiiunit\extensions\debug;

use yii\debug\LogTarget;
use yii\debug\Module;

class LogTargetTest extends TestCase
{
    public function testGetRequestTime()
    {
        $logTarget = new LogTarget(new Module('debug'));
        $actual = $this->invoke($logTarget, 'getRequestTime');
        $this->assertTrue(is_float($actual));
    }

    protected function setUp()
    {
        parent::setUp();
        $this->mockWebApplication();
    }
}