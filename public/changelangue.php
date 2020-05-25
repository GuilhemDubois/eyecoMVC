<?php
session_start();

if ($_SESSION['langue']  =='english')
{
    $_SESSION['langue'] = 'francais';

}
else
{
    $_SESSION['langue'] = 'english';
}


    header('Location: '.$_SESSION["location"].'');

?>

