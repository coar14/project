<?php

namespace HtmlGenerator;

class Element
{
    protected $tag;
    protected $attributes = [];
    protected $content = [];

    public function __construct(string $tag)
    {
        $this->tag = $tag;
    }

    public function setAttribute(string $name, string $value): self
    {
        $this->attributes[] = new Attribute($name, $value);
        return $this;
    }

    public function addContent(Element $element): self
    {
        $this->content[] = $element;
        return $this;
    }

    public function setText(string $text): self
    {
        $this->content[] = $text;
        return $this;
    }

    public function render(): string
    {
        $attributes = '';
        foreach ($this->attributes as $attribute) {
            $attributes .= ' ' . $attribute;
        }

        $html = "<{$this->tag}{$attributes}>";
        foreach ($this->content as $content) {
            $html .= (string)$content;
        }
        $html .= "</{$this->tag}>";

        return $html;
    }

    public function __toString(): string
    {
        return $this->render();
    }
}
