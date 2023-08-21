<?php
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
    Subscription::create(json_decode('{"endpoint":"https://fcm.googleapis.com/fcm/send/dzF5MFyjBQE:APA91bHX9XKaZM_CgGDtu4YRT4EPoBEKnQEuI_8PjpwUSvufbzo_4QdKUu7wrS8yTTurwAyKUA3Mv7EoU5SP5rRtw4cwEBy2jIU5U1oNDj0Dfs0Txh7qXvNtCZNr1gQeORy2Q4_PPVsH","expirationTime":null,"keys":{"p256dh":"BFq6AJUlGfRUKhhj7aCndI1SG1rivcHRxfJ62dNkyNtRpmnEvNyFycbmoXvfaY7p9zrLZGwmbJhVk_0SakDs9Kg","auth":"lh2MEA_lwy0jQaxNFc0H6g"}}', ['TTL' => 5000]);

    print_r($report);
