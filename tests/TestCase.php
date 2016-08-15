<?php

use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    public function getMockForTrait(
        $traitName,
        array $arguments = array(),
        $mockClassName = '',
        $callOriginalConstructor = true,
        $callOriginalClone = true,
        $callAutoload = true,
        $mockedMethods = array(),
        $cloneArguments = false
    ) {
        $mock = parent::getMockForTrait($traitName, $arguments, $mockClassName, $callOriginalConstructor,
            $callOriginalClone, $callAutoload, $mockedMethods, $cloneArguments);

        $mock->expects($this->any())->method('path')->willReturn('path/to/package');
        $mock->expects($this->any())->method('name')->willReturn('ac_me');

        return $mock;
    }

}