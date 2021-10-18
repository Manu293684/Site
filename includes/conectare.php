<?php

$conectare = mysqli_connect('127.0.0.1', 'root', '', 'licenta');

if (!$conectare) {
	die ('Conectarea la baza de date nu a reusit!');
}