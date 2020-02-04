<?php

require_once 'vendor/autoload.php';

/*
 * Falabella Client: uses chain of responsibility pattern
 */
$falabellaClient = new \Falabella\Client();
$falabellaClient->getResult()->toPrintHtml();