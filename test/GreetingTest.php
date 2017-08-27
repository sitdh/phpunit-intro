<?php

use PHPUnit\Framework\TestCase;

use Grading\Greeting;

final class GreetingTest extends TestCase {

    public function testCanBeCreateGreeting(): void {
        $this->assertInstanceOf(
            Greeting::class,
            Greeting::fromName('John Doe')
        );
    }

    public function testShouldGreetingToUser(): void {
        $greeting = Greeting::fromName('John Doe');

        $this->assertEquals(
            'Hello, John Doe',
            "{$greeting}"
        );
    }
}
