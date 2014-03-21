<?php
include_once 'Person.php';

include_once 'PersonWriter.php';

$p = new Person(new PersonWriter());

$p->name = 'duran';

print $p;

// $p->writeName();

// $p->writeAge();

// $p->name = "bob";
// print $p->name;
// if(isset($p->age))
// {
//     print $p->age;
// }