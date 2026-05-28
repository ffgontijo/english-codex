<?php

$defaultDescription = 'English Codex: um site para brasileiros aprenderem inglês do alfabeto ao C2 enquanto constroem seu próprio caderno de estudo.';

function url(string $path = ''): string
{
    // Se o domínio aponta direto para a pasta do site, use '/'
    $baseUrl = '/';

    return $baseUrl . ltrim($path, '/');
}

function active(string $current = '', string $target = ''): string
{
    return $current === $target ? ' active' : '';
}

function ariaCurrent(string $current = '', string $target = ''): string
{
    return $current === $target ? ' aria-current="page"' : '';
}