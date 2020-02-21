<?php
/**
 * mail-config.php
 * This file contains your reCAPTCHA API keys and your recipient's email addresses.
 *
 * @param string $siteKey your public reCAPTCHA API key
 * @param string $secret your secret reCAPTCHA API key
 * @param string $mailgunDomain your mailgun private api key.
 * @param string $mailgunApiKey your mailgun domain relay.
 * @param array $MAIL_RECIPIENTS array of email addresses and corresponding recipient names to send form responses to
 *
 * @author Rochelle Lewis <rlewis37@cnm.edu>
 *
 * This file contains sensitive information and should ALWAYS be gitignored!
 **/

//mailgun API Key authorization

$mailgunApiKey = "bc96e1eefc76f27f286d688e3543454e-7238b007-efebdb39";
$mailgunDomain = "sandbox981b6347628f41319c042d5a64c9841e.mailgun.org";


// your Google reCAPTCHA keys here
// your Google reCAPTCHA keys here
$siteKey = '6Lf8cNoUAAAAACXfU0AHivGBoMbIisNL2pePS7K0';
$secret = '6Lf8cNoUAAAAAGcMltAhavL8N5fT6wewTFLvZSsS';

/**
 * attach the recipients to the message
 * notice this an array that can include or omit the the recipient's real name
 * use the recipients' real name where possible; this reduces the probability of the Email being marked as spam
 **/
$MAIL_RECIPIENTS = [ "mail@email.com" => "Recipient Name"];
$MAIL_RECIPIENT = ["mail@mail.com"];