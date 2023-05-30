<?php
require_once('helpers/autoloader.php');

/**
 * Person
 */

// On instancie 2 objets Person
$person1 = new Person("John", 25);
$person2 = new Person("Jane", 15);

// On va afficher l'attribut name de ces personnes
echo $person1->getName()."<br>";
echo $person2->getName()."<br>";

// On vérifie si ces personnes ont atteint l'âge adulte ( avec un opérateur ternaire )
echo $person1->isAdult() ? 'Adult' : 'Not Adult';
echo "<br>";
echo $person2->isAdult() ? 'Adult' : 'Not Adult';
echo "<br>";

/**
 * Employee
 */

// On créée 2 objets Employee, héritant de la classe Person qui doivent donc aussi posséder les caractéristiques de la classe Person
$employee1 = new Employee("John", 30, "Software Engineer", 3000.00);
$employee2 = new Employee("Jane", 28, "Lead Developper", 3200.00);

// On accède aux attributs de la classe Person à travers un objet Employee
echo $employee1->getName();
echo "<br>";
echo $employee2->getAge();
echo "<br>";

// On modifie les attributs de la classe Employee et on var_dump l'Employee
$employee1->setJobTitle("Senior Software Engineer");
$employee1->setSalary(3500.00);
var_dump($employee1);

// Dans la classe Employee, on accède aux attributs d'Employee mais aussi à ceux de Person grâce à l'héritage : appelez la méthode introduce()
$employee1->introduce();

/**
 * Organization
 */

// On instancie 1 objet Organization
$organization = new Organization();

// On ajoute un objet Person à l'organisation (avec addPerson), on peut var_dump la méthode getAllPersons, puis appeler la méthode clearPersons
$organization->addPerson($person1);
var_dump($organization->getAllPersons());
$organization->clearPersons();

// On ajoute un objet Person à l'organisation (avec addPersons), on peut var_dump la méthode getAllPersons, puis appeler la méthode clearPersons
$organization->addPersons($person2);
var_dump($organization->getAllPersons());
$organization->clearPersons();

// On ajoute un array d'objets Person à l'organisation (avec addPersons), on peut var_dump la méthode getAllPersons
$organization->addPersons([$person1, $person2]);
var_dump($organization->getAllPersons());

// On récupère les personnes faisant partie de l'Organisation
$organizationPersons = $organization->getAllPersons();

// On peut itérer sur les objets Person à travers l'organisation, et afficher leur name et leur age
foreach ($organizationPersons as $person) {
    echo $person->getName() . " - " . $person->getAge() . " ans<br>";
}

?>