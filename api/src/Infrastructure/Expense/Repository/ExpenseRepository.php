<?php

namespace App\Infrastructure\Expense\Repository;

use App\Domain\Expense\Expense;
use App\Domain\Expense\Repository\ExpenseRepositoryInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ExpenseRepository extends ServiceEntityRepository implements ExpenseRepositoryInterface
{
	public function __construct(ManagerRegistry $registry)
	{
		parent::__construct($registry);
	}

	public function save(Expense $expense): void
	{
		// TODO: Implement save() method.
	}
}
