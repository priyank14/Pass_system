<?php
require './vendor/autoload.php';
use Mailgun\Mailgun;

$email=$_GET['email'];
$msg=$_GET['msg'];

# Instantiate the client.
$mgClient = new Mailgun('');
$domain = "";

$user_rand= substr(md5(microtime()),rand(0,26),5);
$user_pass= substr(md5(microtime()),rand(0,26),5);

if ($msg==1) {
	$result = $mgClient->sendMessage($domain, array(
                'from'    =>    '',
                'to'      =>    '',
                'subject' =>    '',
                'html'    =>    "<p>We are Sorry to inform you that your request to be an admin is denied</p>"
            ));
}
if ($msg==2) {
	$result = $mgClient->sendMessage($domain, array(
                'from'    =>    '',
                'to'      =>    'Hello User <' . $email . '>',
                'subject' =>    'Welcome to Swimmingpool! Admin access accpeted',
                'html'    =>    "<p>This is to inform that your request to be a admin in accepted <br> You can login with <br> <h4>UserName:</h4> $user_rand
                <h4>Password:</h4> $user_pass You can change your username and password in Update Account link</p>"
            ));
}




header("Location: ../dev/request.php");


?>
