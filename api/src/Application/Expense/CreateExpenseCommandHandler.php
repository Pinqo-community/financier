<?php

namespace App\Application\Expense;

use App\Domain\Expense\Expense;
use App\Domain\Expense\Repository\ExpenseRepositoryInterface;

class CreateExpenseCommandHandler
{
	public function __construct(readonly private ExpenseRepositoryInterface $expenseRepository) {}

	public function __invoke(CreateExpenseCommand $command): void {

		$expense = Expense::createFrom($command);

		$this->expenseRepository->save($expense);
	}
}
