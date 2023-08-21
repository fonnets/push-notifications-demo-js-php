<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo 'test'; die();
require_once("vendor/autoload.php");

use Minishlink\WebPush\Subscription;
use Minishlink\WebPush\WebPush;


$auth = [
    'VAPID' => [
        'subject' => 'mailto:me@website.com', // can be a mailto: or your website address
        'publicKey' => 'BLWKe9pIQa2mHgqh2eI4b_a-XgZFbFyvLqRA3-eUtKehdXtRGuqjIVKfkBmhm8ZtcMF_q0oEPKBVjZyqF9KzTdg', // (recommended) uncompressed public key P-256 encoded in Base64-URL
        'privateKey' => 'M0GqiHBWLHB12TwSnoVVTxFqo621Z_J1hHSNr7KbcGs', // (recommended) in fact the secret multiplier of the private key encoded in Base64-URL 
    ],
];

$webPush = new WebPush($auth);

$report = $webPush->sendOneNotification(
    Subscription::create(json_decode('{"endpoint":"https://fcm.googleapis.com/fcm/send/cQSMo9tO4og:APA91bFUirXwP6UCqUSPvPJKtQ_6VNXpg1CM9-LjZn0lwmqoC8WGr_hnTLtXBuASp4n2CahnPs2JelU6glJvPtcpIFnbp6cWeCA1m8ZOSGfv_jV4JcgholtluiM8Jia1NfHx5i1NuvZ2","expirationTime":null,"keys":{"p256dh":"BIhHtmM17jIH9OshMNnFqo3OnnAlWOIpOFzfK1WzhMj0VP-MDdpwSP-e-gD2cPHjipLJ3i5nPp8wzt6fjVMQyY0","auth":"LoQjUxwYRxoRNfDKpZremA"}}', ['TTL' => 5000]);

    print_r($report);
