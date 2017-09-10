<?php
require './vendor/autoload.php';
use Mailgun\Mailgun;

$email=$_GET['email'];
$msg=$_GET['msg'];

# Instantiate the client.
$mgClient = new Mailgun('key-18efef5d4aca20253937a20a6babc8f4');
$domain = "sandboxef89c69c358748afbcfaf3d764fb7da3.mailgun.org";

$user_rand= substr(md5(microtime()),rand(0,26),5);
$user_pass= substr(md5(microtime()),rand(0,26),5);

if ($msg==1) {
	$result = $mgClient->sendMessage($domain, array(
                'from'    =>    'Priyank NoReply <noreply@priyank.com>',
                'to'      =>    'Hello User <' . $email . '>',
                'subject' =>    'Welcome to Swimmingpool! Admin access denied',
                'html'    =>    "<p>We are Sorry to inform you that your request to be an admin is denied</p>"
            ));
}
if ($msg==2) {
	$result = $mgClient->sendMessage($domain, array(
                'from'    =>    'Priyank NoReply <noreply@priyank.com>',
                'to'      =>    'Hello User <' . $email . '>',
                'subject' =>    'Welcome to Swimmingpool! Admin access accpeted',
                'html'    =>    "<p>This is to inform that your request to be a admin in accepted <br> You can login with <br> <h4>UserName:</h4> $user_rand
                <h4>Password:</h4> $user_pass You can change your username and password in Update Account link</p>"
            ));
}




header("Location: ../dev/request.php");


?>
