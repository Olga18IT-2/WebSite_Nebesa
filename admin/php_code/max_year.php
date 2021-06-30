<?php
  $year_now = date("y");
  $min_age = require('./admin/info/min_age.php');
  $date_today = date("m-d");
  $max_year = $year_now - $min_age + 2000;
  $max_year = $max_year.'-'.$date_today;
  return $max_year;

?>