<?php

declare(strict_types=1);

namespace App;

use phpDocumentor\Reflection\Types\Void_;


class People
{
    private $name;
    private $year;
    private $size;
    private $skills = [];

    public function setSkills(?array $skills) : void
    {
        $this->skills = $skills;
    }

    public function getSkills() : ?array
    {
        return $this->skills;
    }

}