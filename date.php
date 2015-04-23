<?php

date_default_timezone_set('UTC');
$todayDate1 = strtotime(date('2015-03-26'));
$finalsDate1 = strtotime(date('2015-05-08'));
function DaysLeft ($todayDate1, $finalsDate1)
{
	return $daysLeft1 = $finalsDate1 - $todayDate1;
}
echo "<p>days left: ", idate('z', daysLeft($todayDate1, $finalsDate1)); echo "</p>";
/* find out amount days left until finals 
Final day may 8th*/
date_default_timezone_set('UTC');
$todayDate = new DateTime("2015-03-26");
$finalsDate = new DateTime("2015-05-08");
$daysLeft = $finalsDate->diff($todayDate)->format ("%a");
if ($daysLeft < 47) {
    echo "$daysLeft days until finals! Start studying!";
} else {
    echo "$daysLeft days until finals! Chill out!!";
}
