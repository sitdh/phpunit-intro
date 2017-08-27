<?php

use PHPUnit\Framework\TestCase;

final class GreetingTest extends TestCase {

    public function testCanBeCreateGreeting(): void {
        $this->assertInstanceOf(
            Greeting::class,
            Greeting::fromName('John Doe')
        );
    }
}
