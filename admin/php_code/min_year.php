<?php
  $year_now = date("y");
  $max_age = require('./admin/info/max_age.php');
  $date_today = date("m-d");
  $min_year = $year_now - $max_age + 2000;
  $min_year = $min_year.'-'.$date_today;
  return $min_year;
  
?>