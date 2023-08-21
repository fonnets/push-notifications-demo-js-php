<?php
echo 'test';

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
?>
$report = $webPush->sendOneNotification(
    Subscription::create(json_decode('{"endpoint":"https://fcm.googleapis.com/fcm/send/eoApBqPOGbc:APA91bEO5Rvc3AyR8XFtZNei32q_GpGnlvqPiO1ZkdlC5oaC-clFWA-a63sY1llye8i-M0DMpGriLeQh7d3rbBgrqLlRDaiqf5g3T-P0zYU0v_CkFdzN1wpX-hMnDfys1p5wb8ZljrTe","expirationTime":null,"keys":{"p256dh":"BJhmtryUFtYhamIZ2hWKhqZJYTYizCyCs5rOnIH9USeJ-UbImK989DBvVKJV__84j0pJS-__cPwWDW1yXzkDkZc","auth":"jfc7xzOWBpiGWUBy-v-rHg"}}', ['TTL' => 5000]);

    print_r($report);
