<?php

$router->get('users', 'app/Http/Controllers/UserController.php@index');

$router->get('about', 'app/Http/Controllers/BioController.php@index');

$router->get('education', 'app/Http/Controllers/EducationController.php@index');

$router->get('', 'app/Http/Controllers/HomeController.php@index');

$router->get('work', 'app/Http/Controllers/JobController.php@index');

$router->get('extracarricular', 'app/Http/Controllers/ExtraController.php@index');