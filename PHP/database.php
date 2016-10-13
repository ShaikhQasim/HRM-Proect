<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$user ="root";
$pass= "oracle";
$dsn="mysql:host=localhost; dbname=dbemployee";
try
{
$conn =new PDO($dsn, $user, $pass);
}
 catch (Exception $ex){
    die('Eror Occured: '. $ex->getMessage());
 }