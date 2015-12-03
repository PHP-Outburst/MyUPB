<?php
class PHPUnit extends PHPUnit_Framework_TestCase
{
    public function testOfPhingConfiguration()
    {
        // Arrange
        $a = 1;

        // Act
        $b = 1;

        // Assert
        $this->assertEquals($a,$b);
    }
}