<?php

namespace HtmlGenerator;

class Html
{
    protected $content = '';

    public function html(): self
    {
        $this->content .= "<!DOCTYPE html>\n<html lang=\"en\">\n";
        return $this;
    }

    public function head(): self
    {
        $this->content .= "<head>\n";
        return $this;
    }

    public function meta(): self
    {
        $this->content .= "<meta";
        return $this;
    }

    public function link(): self
    {
        $this->content .= "<link";
        return $this;
    }

    public function title(): self
    {
        $this->content .= "<title>";
        return $this;
    }

    public function body(): self
    {
        $this->content .= "<body>\n";
        return $this;
    }

    public function h1(): self
    {
        $this->content .= "<h1";
        return $this;
    }

    public function h2(): self
    {
        $this->content .= "<h2>";
        return $this;
    }

    public function h3(): self
    {
        $this->content .= "<h3>";
        return $this;
    }

    public function h4(): self
    {
        $this->content .= "<h4>";
        return $this;
    }

    public function h5(): self
    {
        $this->content .= "<h5>";
        return $this;
    }

    public function h6(): self
    {
        $this->content .= "<h6>";
        return $this;
    }

    public function p(): self
    {
        $this->content .= "<p>";
        return $this;
    }
    public function a(): self
    {
        $this->content .= "<a";
        return $this;
    }

    public function strong(): self
    {
        $this->content .= "<strong>";
        return $this;
    }

    public function em(): self
    {
        $this->content .= "<em>";
        return $this;
    }

    public function textarea(): self
    {
        $this->content .= "<textarea>";
        return $this;
    }

    public function img(): self
    {
        $this->content .= "<img";
        return $this;
    }

    public function span(): self
    {
        $this->content .= "<span>";
        return $this;
    }

    public function button(): self
    {
        $this->content .= "<button>";
        return $this;
    }

    public function div(): self
    {
        $this->content .= "<div";
        return $this;
    }

    public function ul(): self
    {
        $this->content .= "<ul>";
        return $this;
    }
    public function li(): self
    {
        $this->content .= "<li>";
        return $this;
    }
    public function ol(): self
    {
        $this->content .= "<ol>";
        return $this;
    }
    public function br(): self
    {
        $this->content .= "<br>\n";
        return $this;
    }
    

    public function section(): self
    {
        $this->content .= "<section";
        return $this;
    }

    public function abbr(): self
    {
        $this->content .= "<abbr>";
        return $this;
    }

    public function cite(): self
    {
        $this->content .= "<cite>";
        return $this;
    }

    public function code(): self
    {
        $this->content .= "<code>";
        return $this;
    }

    public function dn(): self
    {
        $this->content .= "<dn>";
        return $this;
    }

    public function samp(): self
    {
        $this->content .= "<samp>";
        return $this;
    }

    public function var(): self
    {
        $this->content .= "<var>";
        return $this;
    }

    public function address(): self
    {
        $this->content .= "<address";
        return $this;
    }

    public function blockquote(): self
    {
        $this->content .= "<blockquote>";
        return $this;
    }

    public function q(): self
    {
        $this->content .= "<q>";
        return $this;
    }

    public function article(): self
    {
        $this->content .= "<article>";
        return $this;
    }

    public function aside(): self
    {
        $this->content .= "<aside>";
        return $this;
    }

    public function footer(): self
    {
        $this->content .= "<footer>";
        return $this;
    }

    public function main(): self
    {
        $this->content .= "<main>";
        return $this;
    }

    public function nav(): self
    {
        $this->content .= "<nav>";
        return $this;
    }

    public function label(): self
    {
        $this->content .= "<label";
        return $this;
    }

    public function input(): self
    {
        $this->content .= "<input";
        return $this;
    }

    public function table(): self
    {
        $this->content .= "<table>";
        return $this;
    }

    public function tr(): self
    {
        $this->content .= "<tr>";
        return $this;
    }

    public function td(): self
    {
        $this->content .= "<td>";
        return $this;
    }
    public function block(): self
    {
        $this->content .= "<block>";
        return $this;
    }
    public function closeTag(): self
    {
        $this->content .= "</";
        return $this;
    }

    public function setAttribute($attribute, $value): self
    {
        $this->content .= " $attribute=\"$value\"";
        return $this;
    }

    public function setText($text): self
    {
        $this->content .= "$text";
        return $this;
    }

    public function getParent(): self
    {
        $this->content .= "</";
        return $this;
    }

    public function getParentEnd(): self
    {
        $this->content .= ">\n";
        return $this;
    }

    public function close(): string
    {
        $this->content .= "</html>";
        return $this->content;
    }
}
