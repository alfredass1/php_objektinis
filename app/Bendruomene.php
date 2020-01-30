<?php
/**
 * Created by PhpStorm.
 * User: moksleivis
 * Date: 2020-01-30
 * Time: 13:39
 */

namespace OOP;


class Bendruomene
{
    protected $name;
    protected $email;
    protected $phone;

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