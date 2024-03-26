<?php

namespace App\Domain\Expense\Repository;

use App\Domain\Expense\Expense;

interface ExpenseRepositoryInterface
{
	public function save(Expense $expense): void;
}
