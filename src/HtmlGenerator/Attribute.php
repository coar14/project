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

    public function __toString(): string
    {
        return "{$this->name}=\"{$this->value}\"";
    }
}
