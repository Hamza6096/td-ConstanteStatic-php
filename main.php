<?php

declare(strict_types=1);

require 'Voiture.php';

$p208 = new Voiture("Peugeot", "208");
$b200 = new Voiture("Mercedes", "B200");
$p208->charger();
Voiture::chargerTout();
