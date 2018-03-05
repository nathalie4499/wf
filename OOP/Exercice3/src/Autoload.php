<?php

spl_autoload_register(
    function($namespace){
        $filename = sprintf('%s/%s.php',__DIR__,str_replace('\\',DIRECTORY_SEPARATOR,$namespace));
        //$fileName = $namespace . '.php';
        //$fileName = str_replace('\\', DIRECTORY_SEPARATOR, $fileName);
        //$fileName = __DIR__ . DIRECTORY_SEPARATOR ; $fileName;
        if(is_file($filename)) {
            require_once $filename;
        }
      }
);

use Model\Role;
use Model\User;
use Model\Person;

$user = new User();
$role = new Role(Role::ROLE_USER || Role::ROLE_ADMIN);

$user->setPassword('myPassword')
    ->setRoles([$role])
    ->setSalt('mySalt')
    ->setUsername('myUsername');

$person = new Person();
$person->setFirstname('Eric')
       ->setLastname('Montecalvo')
       ->setEmails(['eric.montecalvo@example.org']);

       //The Model\Role class MUST be updated to throw the exception on setting a Role label that is not contained in the constants.