<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once '../configs/dbConnect.php';
include_once '../models/models.php';


foreach (glob("*.seeder.php") as $filename) {

    include $filename;
}
