<?php
/**
 * Created by PhpStorm.
 * User: jkobie
 * Date: 10/13/16
 * Time: 11:19 AM
 */
require __DIR__ . '/vendor/autoload.php';
use Acme\Nacho;
use Acme\Page;
use Jkobie\MailChump;

new Page();
new Nacho();
$mc = new MailChump();

$mc->hello("World");
?>