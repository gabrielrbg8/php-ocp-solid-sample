<?php

declare(strict_types=1);

use Classes\EffectiveCollaborator;
use Classes\InternCollaborator;
use Classes\Payroll;
use PHPUnit\Framework\TestCase;

final class PayrollTest extends TestCase
{
    public function testGetInternPayment(): void
    {
        $collaborator = new InternCollaborator();
        $payRoll = new Payroll();

        $this->assertInstanceOf(InternCollaborator::class, $collaborator);
        $collaborator->setPayment(10);
        $this->assertEquals(10, $payRoll->getTotal($collaborator));
    }

    public function testGetEffectivePayment(): void
    {
        $collaborator = new EffectiveCollaborator();
        $payRoll = new Payroll();

        $this->assertInstanceOf(EffectiveCollaborator::class, $collaborator);
        $collaborator->setPayment(10);
        $this->assertEquals(10, $payRoll->getTotal($collaborator));
    }
}
