<?php
require_once 'Lesson1.php';
require_once 'CostStrategy.php';
require_once 'RegistrationMgr.php';


$lesson1 = new Seminar(4, new TimedCostStrategy());

$lesson2 = new Lecture(4, new FixedCostStrategy());

$mgr = new RegistrationMgr();

$mgr->register($lesson1);

$mgr->register($lesson2);