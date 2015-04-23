<?php
$bonus = 7000;
$mySalary = 90000;
$mnTax = .25;
$iaTax = .35;
$wiTax = .40;
$myState = "Minnesota";

//MyIncome($mySalary, $bonus);
IncomeAfterTax($salary, $tax);


if ($myState == "Minnesota")
{
    echo "Minnesota Income After Tax: "
    IncomeAftertax($mySalary, $mnTax);
}
if ($yourState == "Wisconsin");
{
    echo nl2br ("\r\n Wisconsin Income After Tax: "
                IncomeAfterTax ($mySalary
{
    IncomeAfterTax($mySalary, $wiTax);
}

/*fucnitons below */
function MyIncome($mySalary, $bonus)
{
  $total = $mySalary + $bonus;
    echo $total;
}

function IncomeAfterTax($salary, $tax)
{
       $total = $salary * (1-$tax);
        echo $total;
}

?
