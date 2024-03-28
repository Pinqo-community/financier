<?php

namespace App\Infrastructure\Entry\Repository;

use App\Domain\Entry\Entry;
use App\Domain\Entry\Repository\EntryRepositoryInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class EntryRepository extends ServiceEntityRepository implements EntryRepositoryInterface
{
  public function __construct(ManagerRegistry $registry)
  {
    parent::__construct($registry, Entry::class);
  }

  public function save(Entry $entry): void
  {
    // TODO: Implement save() method.
  }
}
