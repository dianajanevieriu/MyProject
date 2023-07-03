<?php

use Classes\Subscriber;

include "functions.php";

$subscriber =  new Subscriber();
$subscriber->email = $_POST['email'];
$subscriber->fullName = $_POST['fullName'];
$subscriber->save();
$_SESSION['success_message'] = "Vă mulțumim pentru înscriere și vă apreciem încrederea. Conținut de calitate urmează să fie trimis către dumneavoastră.";
header('Location: index.php');