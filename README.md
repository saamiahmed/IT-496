# IT-496<?php

//it will create an array with my informations
$my_array = array ();
    
// this will populate the array
    
$my_array= array ("lastName"=>"Ahmed", "firstName"=>"Saami", "age"=>23, "Street"=>"160 Briargate Rd", "City"=>"Mankato", "State"=>"MN", "ZipCode"=>56001);


            
require ('address.php');
require ('person.php');
            
//This will create objects
            
$person = new Person;
$address = new Address;
            
//this will populate the objects

$person->firstName = $my_array ["firstName"];
$person->lastName = $my_array ["lastName"];
$person->age = $my_array ["age"];
$address->street1 = $my_array ["Street"];
$address->city = $my_array ["City"];
$address->state = $my_array ["State"];
$address->ZipCode = $my_array ["ZipCode"];
            

echo $person->firstName."<br> ";
echo $person->lastName."<br> ";
echo $person->age."<br>";
echo $address->street1."<br>";
echo $address->city."<br> ";
echo $address->state."<br>";
echo $address->ZipCode."<br>";
?>          
