<?php

namespace App\Domain\Entry;

use App\Application\Entry\CreateEntryCommand;
use Symfony\Component\Uid\Uuid;
use DateTimeImmutable;

class Entry
{
  public function __construct(
    readonly private Uuid $id,
    readonly private string $title,
    readonly private float $amount,
    readonly private DateTimeImmutable $madeAt,
  ) {
  }

  public static function createFrom(CreateEntryCommand $command): Entry
  {
    return new Entry(Uuid::v4(), $command->title, $command->amount, $command->madeAt);
  }
}
