<?php
require_once 'Lesson.php';

$lecture  = new Lecture(5, Lesson::FIXED);

print "{$lecture->cost()} ({$lecture->chargeType()})\n";

$seminar = new Seminar(3,Lesson::TIMED);

print "{$seminar->cost()} ({$seminar->chargeType()})\n";