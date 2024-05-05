<?php

namespace HtmlGenerator;

class Attribute
{
    protected $name;
    protected $value;

    public function __construct(string $name, string $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return "{$this->name}=\"{$this->value}\"";
    }
}

class EventAttribute extends Attribute
{
    public function __toString(): string
    {
        return "on{$this->name}=\"{$this->value}\"";
    }
}

class DataAttribute extends Attribute
{
    public function __toString(): string
    {
        return "data-{$this->name}=\"{$this->value}\"";
    }
}
