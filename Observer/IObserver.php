<?php
namespace Observer;

interface IObserver
{
    public function update(Vacancy $vacancy);
}
