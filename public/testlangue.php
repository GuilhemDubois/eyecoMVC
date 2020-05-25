<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}

if (!isset($_SESSION['langue']) )
{
    $_SESSION['langue'] = 'francais';

}
elseif($_SESSION['langue'] == 'francais'){
    $_SESSION['langue'] = 'francais';

}



