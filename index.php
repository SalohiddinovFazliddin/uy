<?php

require 'work.php';

$currency = new Currency();

$currencies = $currency->getCurrencies();
print_r($currencies);

require 'views/currency-converter.php';


















