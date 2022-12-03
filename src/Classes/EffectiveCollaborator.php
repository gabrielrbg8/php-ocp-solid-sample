<?php

declare(strict_types=1);

namespace Classes;

require_once 'Interfaces/Collaborator.php';

use Collaborator;

class EffectiveCollaborator implements Collaborator
{
    public $salary;

    public function setPayment(float $salary)
    {
        $this->salary = $salary;
    }

    public function getPayment(): float
    {
        return $this->salary;
    }
}
