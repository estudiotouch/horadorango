<?php
require 'vendor/autoload.php';

use HoraDoRango\View;
use HoraDoRango\Sorteio;

$layout = new View();
$layout->setTitle('Hora do Rango');
$layout->setView('home');
$layout->printView();

$sorteio = new Sorteio();
