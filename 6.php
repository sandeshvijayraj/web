<?php

print "<h3> REFRESH PAGE </h3>";
$fname="counter.txt";
$fp = fopen($fname,"r");
$hits= fscanf($fp,"%d");
$close($fp);

$hits[0]++;
$fp = fopen($fname,"w");
$printf($fp,"%d",$hits[0]);
$close($fp);

print "Total number of views: ".$hits[0];
?>
