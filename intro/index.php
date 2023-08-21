<?php
// Include, require and require_once
// include './greet.php'; /** Include file */
//require './greet.php'; /** Include file but if the file doesn't exist, break de code */
require_once './greet.php'; /** Include file but if require the file several times it only include it once */


echo greet('Jahiker', 'Welcome');

/**
 * User class
 */
class User
{
    public $type;
}

/**
 * Admin user type class
 */
class Admin
{
    public function greet()
    {
        return 'Hello Admin!';
    }
}

$user = new User();
$user->type = new Admin();

// echo $user->type->greet();
