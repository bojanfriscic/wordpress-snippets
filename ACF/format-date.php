<?php 

$date = get_field('date_picker_field');

$format_in = 'Ymd';
$format_out = 'd.m.Y.';
$formatted_date = DateTime::createFromFormat($format_in, $date);

echo $formatted_date->format($format_out);