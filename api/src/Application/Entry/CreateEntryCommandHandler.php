<?php

namespace App\Application\Entry;

use App\Domain\Entry\Entry;
use App\Domain\Entry\Repository\EntryRepositoryInterface;

class CreateEntryCommandHandler
{
  public function __construct(readonly private EntryRepositoryInterface $entryRepository)
  {
  }

  public function __invoke(CreateEntryCommand $command): void
  {
    $entry = Entry::createFrom($command);
    $this->entryRepository->save($entry);
  }
}
