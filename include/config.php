<?php

  class DBclass{
    __construct(){
      $conn = new mysqli("localhost" , "root", "", "mainDB");
      if(!$conn){
        die("Connection failed ".$conn->error);
      }
    }
  }

 ?>
