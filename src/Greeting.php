<?php namespace Grading;

class Greeting {

    private $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public static function fromName(string $name): self {
        return new self($name);
    }

    public function __toString(): string {
        return "Hello, {$this->name}";
    }

    public function greeting(): string {
        return "Hello, {$this->name}";
    }

}
