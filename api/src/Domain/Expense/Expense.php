<?php

namespace App\Domain\Expense;

use App\Application\Expense\CreateExpenseCommand;
use Symfony\Component\Uid\Uuid;
use DateTimeImmutable;

class Expense
{
	public function __construct(
		readonly private Uuid $id,
		readonly private string $title,
		readonly private float $amount,
		readonly private DateTimeImmutable $madeAt,
	) {}

	public static function createFrom(CreateExpenseCommand $command): Expense {
		return new Expense(Uuid::v4(), $command->title, $command->amount, $command->madeAt);
	}
}
