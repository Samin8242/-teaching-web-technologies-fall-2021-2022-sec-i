<?php

if(isset($_post['submit']))

{

$username = $_REQUEST['username'];

$password = $_REQUEST['password'];

}


?>

           <h2>Username:<?php if (isset($username))

            {

                echo $username;

            }

            ?></h2>

            <h2>Password: <?php if (isset($password))

            echo $password;

            ?></h2>