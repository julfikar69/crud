<?php

namespace Application\Models;

class About
{
    private $name = "Hani";

    public function getUser()
    {
        return $this->name;
    }
}
