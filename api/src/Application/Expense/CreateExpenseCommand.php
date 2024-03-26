<?php

namespace App\Application\Expense;

use DateTimeImmutable;

class CreateExpenseCommand
{
	public function __construct(
		readonly string $title,
		readonly float $amount,
		readonly DateTimeImmutable $madeAt,
	) {}
}
