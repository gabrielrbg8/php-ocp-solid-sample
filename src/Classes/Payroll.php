<?php

namespace Classes;

class Payroll
{
    protected $total;

    /**
     * Get total payroll for each collaborator
     * 
     * @param $collaborator
     * @return float $total
     */
    public function getTotal($collaborator)
    {
        if ($collaborator instanceof EffectiveCollaborator) {
            $this->total = $collaborator->getSalary();
        } else if ($collaborator instanceof InternCollaborator) {
            $this->total = $collaborator->getInternshipScholarship();
        }

        return $this->total;
    }
}
