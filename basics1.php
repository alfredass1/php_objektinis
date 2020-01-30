<?php
class Vartotojas
{
    public $name; //viesa klase pasiekiama uz objekto ribu
    public $email;
    public $phone;

}

$user = new Vartotojas();
$user->name = " jonas";
$user->email = " jonas@one.lt";
$user->phone = " 8626266";


//var_dump($user);
echo $user->name;
echo $user->email;
echo $user->phone;
?>
