<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = 'liketoday';
$db = 'test';
$mysqli = new mysqli($host,$user,$pass,$db) or die ($mysqli->error);
