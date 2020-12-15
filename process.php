<?php
require 'vendor/autoload.php';

$stripe = new \Stripe\StripeClient("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");
$token = $_POST['token'];
$amount = $_POST['price'];
$phone = $_POST['phone'];
$name =$_POST['name'];
$stripe->charges->create([
  "amount" => $amount,
  "currency" => "qar",
  "source" => $token, // obtained with Stripe.js
  "metadata" => [
    "Holder Name"=>$name,
    "Customer phone" =>$phone, 
    ]
]);

var_dump($phone);


