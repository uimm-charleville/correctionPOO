<?php

class Person {
    private string $name;
    private int $age;

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getAge(): int {
        return $this->age;
    }

    public function setAge(int $age): void {
        if ($age >= 0) {
            $this->age = $age;
        } else {
            throw new InvalidArgumentException("L'âge doit être un entier positif");
        }
    }

    public function sayHello(): void {
        echo "Bonjour, mon nom est {$this->name} et j'ai {$this->age} ans.\n";
    }

    public function calculateAgeInMonths(): int {
        return $this->age * 12;
    }

    public function isAdult(): bool {
        $adultAgeThreshold = 18;
        return $this->age >= $adultAgeThreshold;
    }
}
?>