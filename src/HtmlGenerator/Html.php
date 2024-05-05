<?php

namespace HtmlGenerator;

class Html{
    public function __call($name, $arguments)
    {
        return new Element($name);
    }
}
