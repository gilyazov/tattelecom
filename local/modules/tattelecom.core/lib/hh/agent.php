<?php

namespace Tattelecom\Core\Hh;

class Agent
{
    public function load()
    {
        $vacancies = new Vacancies();
        $vacancies->run();

        return '\\' . __METHOD__ . '();';
    }
}