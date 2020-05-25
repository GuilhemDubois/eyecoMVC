<?php

unset($_SESSION['auth']);
header('LOCATION: controller.php?function=connexion');
