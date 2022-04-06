<?php

declare(strict_types=1);

namespace FirstComposerPluginTest\Test;

use FirstComposerPluginTest\FirstComposerPluginTest;

class FirstComposerPluginTestTest extends TestCase
{
    public function testGetHello()
    {
        $object = \Mockery::mock(FirstComposerPluginTest::class);
        $object->shouldReceive('getHello')->passthru();

        $this->assertSame('Hello, World!', $object->getHello());
    }
}
