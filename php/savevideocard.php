<?php
require "db.php";
$data = $_POST;

$ch = R::dispense("videocards");
$ch->name = $data['name'];
$ch->photo1 = $data['photo1'];
$ch->photo2 = $data['photo2'];
$ch->date = $data['date'];
$ch->proizvod = $data['proizvod'];
$ch->arch = $data['arch'];
$ch->ram = $data['ram'];
$ch->chast = $data['chast'];
$ch->tech = $data['tech'];
$ch->prop = $data['prop'];
$ch->discription = $data['discription'];
R::store($ch);
echo "good";
