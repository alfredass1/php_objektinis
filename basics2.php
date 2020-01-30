<?php

class Vartotojas
{
    private $name;
    private $email;
    private $phone;

    public function __construct($name, $email, $phone)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;

    }

    public function show()
    {
        $data [] = $this->name;
        $data [] = $this->email;
        $data [] = $this->phone;

        return $data;

    }

    public function addComment($comment){ // seteris
        $this->comment=$comment;

    }

    public function showComment(){ //geteris
        $comments[]=$this->comment;

        return $comments;
    }

}
$user = new Vartotojas('jonas ','dewfe@gmail.com','86566656');
$user->addComment('zmogus');


$user1 = new Vartotojas('Andrius ','dewfe@gmail.com','86566656');
$user1->addComment('jis irgi zmogus');

$user2 = new Vartotojas('Vytautas ','dewfe@gmail.com','86566656');
$user2->addComment('komentaras');
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