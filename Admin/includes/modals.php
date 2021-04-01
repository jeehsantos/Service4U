<?php
if(!isset($_SESSION)) 
{
    session_start(); 
}
  

//The user ID is sent through url (GET) and then the filter_input is going to get the number id
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
//Query to check if the user has announces
 
