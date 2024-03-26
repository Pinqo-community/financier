<?php

namespace App\Domain\Expense;

use App\Application\Expense\CreateExpenseCommand;
use DateTimeImmutable;

class Expense
{
	public function __construct(
		readonly private string $id,
		readonly private string $title,
		readonly private float $amount,
		readonly private DateTimeImmutable $madeAt,
	) {}

	public static function createFrom(CreateExpenseCommand $command): Expense {
		return new Expense('', $command->title, $command->amount, $command->madeAt);
	}
}
