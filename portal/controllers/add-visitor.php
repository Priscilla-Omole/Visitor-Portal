<?php
require 'core/bootstrap.php';
 $app['database']->insert('visitors_details',
     [
    'firstname' => $_POST['fname'],
    'lastname' => $_POST['lname'],
    'email'=>$_POST['email'],
    'phone_number'=>$_POST['pnumber'],
    'to_see'=>$_POST['names']
]);

header('Location: /');