<?php

declare(strict_types=1);

namespace Classes;

use Collaborator;

class Payroll
{
    protected $total;

    /**
     * Get total payroll for each collaborator
     * 
     * @param $collaborator
     * @return float $total
     */
    public function getTotal(Collaborator $collaborator)
    {
        return $collaborator->getPayment();
    }
}
