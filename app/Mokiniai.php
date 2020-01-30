<?php
/**
 * Created by PhpStorm.
 * User: moksleivis
 * Date: 2020-01-30
 * Time: 13:39
 */

namespace OOP;


class Mokiniai extends Bendruomene
{
    protected $type;
    protected $name;
    protected $email;
    protected $phone;


    public function __construct($name, $email, $phone, $type)
    {
        parent::__construct($name,$email,$phone);
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->type= $type;


    }

    public function profile()
    {
        $data [] = $this->name;
        $data [] = $this->email;
        $data [] = $this->phone;
        $data [] = $this->type;


        return $data;

    }



}
