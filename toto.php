<?php

session_start();


$_SESSION['number']=$_GET['number'];
var_dump($_SESSION);