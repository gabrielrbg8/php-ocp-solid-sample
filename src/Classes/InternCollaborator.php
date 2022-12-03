<?php

declare(strict_types=1);

namespace Classes;

require_once 'Interfaces/Collaborator.php';

use Collaborator;

class InternCollaborator implements Collaborator
{
    public $internshipScholarship;

    public function setPayment(float $internshipScholarship)
    {
        $this->internshipScholarship = $internshipScholarship;
    }

    public function getPayment()
    {
        return $this->internshipScholarship;
    }
}
