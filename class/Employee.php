<?php

class Employee extends Person {
    private string $jobTitle;
    private float $salary;

    public function __construct(string $name, int $age, string $jobTitle, float $salary) {
        parent::__construct($name, $age);
        $this->jobTitle = $jobTitle;
        $this->salary = $salary;
    }

    public function getJobTitle(): string {
        return $this->jobTitle;
    }

    public function setJobTitle(string $jobTitle): void {
        $this->jobTitle = $jobTitle;
    }

    public function getSalary(): float {
        return $this->salary;
    }

    public function setSalary(float $salary): void {
        $this->salary = $salary;
    }

    public function introduce(): void {
        echo "Bonjour, je suis {$this->getName()}. Je travaille en tant que {$this->jobTitle} et mon salaire est de {$this->salary} €.<br>";
    }
}
?>