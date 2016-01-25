<?php
use Paravel\Form;
use Paravel\HTML;
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>@title</title>

        {{ HTML::favicon('favicon.ico') }}
        {{ HTML::style('css/style.css') }}

        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto">
    </head>
    <body>
        <header id="header">
            <h1>Paravel</h1>
        </header>

        <main id="main">
            @yield('main')
        </main>
    </body>
</html>