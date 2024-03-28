<?php

namespace App\Application\Entry;

use DateTimeImmutable;

class CreateEntryCommand
{
  public function __construct(
    readonly string $title,
    readonly float $amount,
    readonly DateTimeImmutable $madeAt,
  ) {
  }
}
