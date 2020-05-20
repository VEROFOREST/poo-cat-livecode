<?php

class Cat
{
    private $name;
    private $race;
    private $age;
    private $owner;

    public static $count = 0;

    public function __construct(array $catRow)
    {
        $this->hydrate($catRow);

        self::$count++;
    }

    public function hydrate(array $catRow)
    {
        if(strlen($catRow["name"]) < 2 ) {
            throw new Exception('Nom trop court.');
        }
        $this->setName($catRow["name"]);
        $this->setRace($catRow["race"]);
        $this->setAge($catRow["age"]);
        if(!empty($owner)) {
            $this->setOwner($catRow["owner"]);
        }
    }

    public function meow()
    {
        echo $this->getName(). " : Meow. <br>";
    }

    public function eat(string $food)
    {
        echo $this->getName(). " mange ". $food ." <br>";
    }

    public function sleep(int $hoursCount = 8)
    {
        echo $this->getName(). " dort pendant ". $hoursCount ." heures <br>";
    }

    public function getName()
    {
        return ucfirst($this->name);
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return ucfirst($this->age);
    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }

    public function getRace()
    {
        return ucfirst($this->race);
    }

    public function setRace(string $race)
    {
        $this->race = $race;
    }

    public function getOwner()
    {
        return ucfirst($this->owner);
    }

    public function setOwner(string $owner)
    {
        $this->owner = $owner;
    }
}

?>