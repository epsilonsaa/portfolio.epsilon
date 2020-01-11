<?php
$testHTML = file_get_contents('C:\xampp\htdocs\Arsalan\Assignment 5\portfolio.txt');

$search = preg_match_all('/<([^\/!][a-z1-9]*)/i',$testHTML,$matches);

echo '<pre>';
var_dump(array_count_values($matches[1]));
echo '</pre>';
?>