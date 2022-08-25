<?php
namespace Observer;
use Observer\Candidate;
use Observer\Vacancy;
use Observer\HandHunter;

require_once('IObserver.php');
require_once('ISubject.php');
require_once('Vacancy.php');
require_once('HandHunter.php');
require_once('Candidate.php');

$vacancy = new Vacancy();
$vacancy->setName('PHP-программист');

$candidate = new Candidate();

$handHunter = new HandHunter();
$handHunter->registerObserver($candidate);
$handHunter->setvacancy($vacancy);
