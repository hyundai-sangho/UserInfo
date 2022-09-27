<?php

$connection = new mysqli('localhost', 'root', '', 'crudoperation');

if (!$connection) {
  die(mysqli_error($connection));
}