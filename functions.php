<?php

function dd($variable)
{
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    die;
}

function urlIs(string $value): bool
{
    return $_SERVER['REQUEST_URI'] === $value;
}