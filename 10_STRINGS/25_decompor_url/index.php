<?php

$url = "https://google.com/buscar/maykonfonseca?id=12&nome=Maykon";

$arrayUrl = parse_url($url);

print_r ($arrayUrl);