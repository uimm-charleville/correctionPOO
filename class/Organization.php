<?php

final class Organization {
    private array $persons;

    public function __construct() {
        $this->persons = [];
    }

    public function addPerson(Person $person): void {
        $this->persons[] = $person;
    }

    public function addPersons(mixed $persons): void {
        if(is_array($persons))
        {
            foreach($persons as $person)
            {
                $this->persons[] = $person;
            }
        }
        else if(is_object($persons))
        {
            array_push($this->persons, $persons);
        }
        else
        {
            throw new InvalidArgumentException("Cette méthode ne prend en paramètre d'entrée qu'un objet ou un array !");
        }
    }

    public function clearPersons():void {
        $this->persons = [];
    }

    public function getAllPersons(): array {
        return $this->persons;
    }
}
?>