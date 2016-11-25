<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
       
 
//API Url
$url = 'http://smarthomeinterface.azurewebsites.net/home/1';
 
//Initiate cURL.
$ch = curl_init($url);
 

//New php class SmartHomeControlOn to turn on device

class SmartHomeControlOn
{
    public $commandId = "";
    public $sensorId = "";
    public $userId = "";
}



//The JSON data

$jsonData = new SmartHomeControlOn();
$jsonData ->commandId = "260000";
$jsonData ->sensorId = "1";
$jsonData ->userId = "1";
 
//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);
 
//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);
 
//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
 
//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
 
//Execute the request
$result = curl_exec($ch);
        ?>
    </body>
</html>
