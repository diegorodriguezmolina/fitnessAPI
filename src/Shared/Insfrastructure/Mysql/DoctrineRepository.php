<?php

declare(strict_types=1);

namespace FitnessApi\Shared\Insfrastructure\Mysql;

use Doctrine\ORM\EntityManagerInterface;
use FitnessApi\Shared\Domain\AggregateRoot;

abstract class DoctrineRepository
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager,
    ) {}

    protected function entityManager(): EntityManagerInterface
    {
        return $this->entityManager;
    }

    protected function persist(AggregateRoot $entity): void
    {
        $this->entityManager()->persist($entity);
        $this->entityManager()->flush();
    }

    protected function doRemove(AggregateRoot $entity): void
    {
        $this->entityManager()->remove($entity);
        $this->entityManager()->flush();
    }
}
