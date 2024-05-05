<?php

require 'autoloader.php';

use HtmlGenerator\Html;
use CSSGenerator\Headings\HtmlStylerH1;

$html = new Html();
$styler = new HtmlStylerH1();

$library = $html->html()->addContent(
    $html->head()->addContent(
        $html->h1()->setText('Welcome Banner')
    )
)->addContent(
    $html->body()->addContent(
        $html->header()->addContent(
            $html->h1()->setText('This is Header 1')
        )
    )->addContent(
        $html->nav()->addContent(
            $html->ul()->addContent(
                $html->li()->addContent(
                    $html->a()->setAttribute('href', 'https://example.com')->setText('Home')
                )
            )->addContent(
                $html->li()->addContent(
                    $html->a()->setAttribute('href', 'https://example.com/about')->setText('About')
                )
            )->addContent(
                $html->li()->addContent(
                    $html->a()->setAttribute('href', 'https://example.com/contact')->setText('Contact')
                )
            )
        )
    )->addContent(
        $html->main()->addContent(
            $html->article()->addContent(
                $html->h2()->setText('This is Header 2')
            )->addContent(
                $html->p()->setText('This is for the paragraph content goes here.')
            )->addContent(
                $html->h3()->setText('This is Header 3.')
            )->addContent(
                $html->h4()->setText('This is Header 4.')
            )->addContent(
                $html->h5()->setText('This is Header 5.')
            )->addContent(
                $html->h6()->setText('This is Header 6.')
            )
        )
    )->addContent(
        $html->aside()->addContent(
            $html->h3()->setText('Sidebar Title')
        )->addContent(
            $html->p()->setText('Sidebar content goes here.')
        )
    )->addContent(
        $html->footer()->addContent(
            $html->p()->setText('Footer content goes here.')
        )
    )->addContent(
        $html->form()->setAttribute('action', 'process.php')->setAttribute('method', 'post')->addContent(
            $html->label()->setAttribute('for', 'username')->setText('Username: ')
        )->addContent(
            $html->input()->setAttribute('type', 'text')->setAttribute('id', 'username')->setAttribute('name', 'username')
        )->addContent(
            $html->br()
        )->addContent(
            $html->label()->setAttribute('for', 'password')->setText('Password: ')
        )->addContent(
            $html->input()->setAttribute('type', 'password')->setAttribute('id', 'password')->setAttribute('name', 'password')
        )->addContent(
            $html->br()
        )->addContent(
            $html->input()->setAttribute('type', 'submit')->setAttribute('value', 'Submit')
        )
    )->addContent(
        $html->table()->setAttribute('border', '1')->addContent(
            $html->tr()->addContent(
                $html->td()->setText('Full Name')
            )->addContent(
                $html->td()->setText('Year and Course')
            )
        )->addContent(
            $html->tr()->addContent(
                $html->td()->setText('Dora the Explorer')
            )->addContent(
                $html->td()->setText('4 - BS in Exploration Science')
            )
        )
    )
);

echo $library->render();
