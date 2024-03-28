<?php

namespace App\Domain\Entry\Repository;

use App\Domain\Entry\Entry;

interface EntryRepositoryInterface
{
  public function save(Entry $entry): void;
}
