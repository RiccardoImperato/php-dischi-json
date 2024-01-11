<?php

$database = file_get_contents(__Dir__ . './script.json');

$albums = json_decode($database);

header('Content-Type: application/json');
echo json_encode($albums);
