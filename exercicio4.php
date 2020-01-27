<?php

use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;

require 'vendor/autoload.php';

$browser = new HttpBrowser(HttpClient::create());
$crawler = $browser->request('GET', 'https://vitormattos.github.io/poc-lineageos-cellphone-list-statics/about');
$title = $crawler->filterXPath('//title')->text();

$p = $crawler->filterXPath('//article/p')->each(function($node) {
    return $node->text();
});

true;