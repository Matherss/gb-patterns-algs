<?php
namespace Observer;

class Candidate implements IObserver
{
    private $name;
    private $workExperience;
    private $email;
    public function update(Vacancy $vacancy)
    {
        echo "Новая вакансия {$vacancy->getName()}";
    }
}
