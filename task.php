<?php

class TP
{
    private $modelis;
    private $marke;
    private $kaina;
    private $svoris;
    private $ar_yra_variklis;
    private $greitis;
    private $aprasymas;
    private $kiek_keleiviu;

    public function __construct($modelis, $marke)
    {
        $this->modelis = $modelis;
        $this->marke = $marke;
    }

    public function show()
    {
        $data [] = $this->modelis;
        $data [] = $this->marke;;

        return $data;

    }

    public function addModelis($modelis)
    {
        $this->modelis = $modelis;

    }

    public function showModelis()
    {
        $modeliai = $this->modelis;

        return $modeliai;
    }

    public function addMarke($marke)
    {
        $this->marke = $marke;

    }

    public function showMarke()
    {
        $markes = $this->marke;

        return $markes;
    }

    public function addKaina($kaina)
    {
        $this->kaina = $kaina;

    }

    public function showKaina()
    {
        $kainos = $this->kaina;

        return $kainos;
    }

    public function addSvoris($svoris)
    {
        $this->svoris = $svoris;

    }

    public function showSvoris()
    {
        $svoriai = $this->svoris;

        return $svoriai;
    }

    public function addAr_yra_variklis($ar_yra_variklis)
    {
        $this->ar_yra_variklis = $ar_yra_variklis;

    }

    public function showAr_yra_variklis()
    {
        $ar_yra_varikliai = $this->ar_yra_variklis;

        return $ar_yra_varikliai;
    }


    public function addGreitis($greitis)
    {
        $this->greitis = $greitis;

    }

    public function showGreitis()
    {
        $greiciai = $this->greitis;

        return $greiciai;
    }

    public function addAprasymas($aprasymas)
    {
        $this->aprasymas = $aprasymas;

    }

    public function showAprasymas()
    {
        $aprasymai = $this->aprasymas;

        return $aprasymai;
    }


    public function addKiek_keleiviu($kiek_keleiviu)
    {
        $this->kiek_keleiviu = $kiek_keleiviu;

    }

    public function showKiek_keleiviu()
    {
        $keleiviai = $this->kiek_keleiviu;

        return $keleiviai;
    }


}

$user = new TP('Audi ', 'a4');
$user->addKaina('500');
$user->addSvoris('1.5t');
$user->addAr_yra_variklis('Taip <br> 1.9tdi');
$user->addGreitis('200km/h');
$user->addAprasymas('Ka tik nuo tralo sedi ir vaziuoji');
$user->addKiek_keleiviu('5');

$user1 = new TP('BMX', 'BIKE');
$user1->addKaina('500');
$user1->addSvoris('20kg');
$user1->addAr_yra_variklis('Ne');
$user1->addGreitis('50km/h');
$user1->addAprasymas('puikus dviratis');
$user1->addKiek_keleiviu('2');

$user2 = new TP('Yamaha', 'yzf 2020');
$user2->addKaina('1000');
$user2->addSvoris('300kg');
$user2->addAr_yra_variklis('Yra');
$user2->addGreitis('300km/h');
$user2->addAprasymas('puikus moto');
$user2->addKiek_keleiviu('2');
?>
<ul>
    <?php foreach ($user->show() as $value): ?>
        <li><?= $value; ?></li>
    <?php endforeach; ?>
</ul>

<ul>
    <li><?= $user->showKaina() ?></li>
    <li><?= $user->showSvoris() ?></li>
    <li><?= $user->showAr_yra_variklis() ?></li>
    <li><?= $user->showGreitis() ?></li>
    <li><?= $user->showAprasymas() ?></li>
    <li><?= $user->showKiek_keleiviu() ?></li>
</ul>

<ul>
    <?php foreach ($user1->show() as $value): ?>
        <li><?= $value; ?></li>
    <?php endforeach; ?>
</ul>

<ul>
    <li><?= $user1->showKaina() ?></li>
    <li><?= $user1->showSvoris() ?></li>
    <li><?= $user1->showAr_yra_variklis() ?></li>
    <li><?= $user1->showGreitis() ?></li>
    <li><?= $user1->showAprasymas() ?></li>
    <li><?= $user1->showKiek_keleiviu() ?></li>
</ul>

<ul>
    <?php foreach ($user2->show() as $value): ?>
        <li><?= $value; ?></li>
    <?php endforeach; ?>
</ul>

<ul>
    <li><?= $user2->showKaina() ?></li>
    <li><?= $user2->showSvoris() ?></li>
    <li><?= $user2->showAr_yra_variklis() ?></li>
    <li><?= $user2->showGreitis() ?></li>
    <li><?= $user2->showAprasymas() ?></li>
    <li><?= $user2->showKiek_keleiviu() ?></li>
</ul>