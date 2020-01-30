<?php
require "vendor/autoload.php";
use OOP\User;
use OOP\Teacher;
use OOP\Mokytojai;
use OOP\Darbuotojai;
use OOP\Bendruomene;
use OOP\Spausdintuvas;

$user = new User('jonas ','dewfe@gmail.com','86566656');
$user->addComment('zmogus');
Spausdintuvas::spausdinti($user->show());

$user1 = new User('Andrius ','dewfe@gmail.com','86566656');
$user1->addComment('jis irgi zmogus');

$user2 = new User('Vytautas ','dewfe@gmail.com','86566656');
$user2->addComment('komentaras');


$user3 = new Teacher('ergferger ','dewfe@gmail.com','86566656','geras mokytojas');
$user3->addComment('komentagrgrgr');

$mokytojas = new Mokytojai('Ignas','efefefe@gmail.com','86262652599','matematika');

var_dump($user->show());


?>

<ul>
<?php foreach ($user->show() as $value):?>
<li><?=$value;?></li>
<?php endforeach;?>
</ul>

<ul>
<?php foreach ($user->showComment() as $comment):?>
    <li><?=$comment;?></li>
<?php endforeach;?>
</ul>


<ul>
<?php foreach ($user1->show() as $value):?>
    <li><?=$value;?></li>
<?php endforeach;?>
</ul>


<ul>
<?php foreach ($user1->showComment() as $comment):?>
    <li><?=$comment;?></li>
<?php endforeach;?>
</ul>

<ul>
<?php foreach ($user2->show() as $value):?>
    <li><?=$value;?></li>
<?php endforeach;?>
</ul>

<ul>
<?php foreach ($user2->showComment() as $comment):?>
    <li><?=$comment;?></li>
<?php endforeach;?>
</ul>


<ul>
    <?php foreach ($user3->profile() as $value):?>
        <li><?=$value;?></li>
    <?php endforeach;?>
</ul>

<ul>
    <?php foreach ($user3->showComment() as $comment):?>
        <li><?=$comment;?></li>
    <?php endforeach;?>
</ul>

<ul>
    <?php foreach ($mokytojas->profile() as $value):?>
        <li><?=$value;?></li>
    <?php endforeach;?>
</ul>
