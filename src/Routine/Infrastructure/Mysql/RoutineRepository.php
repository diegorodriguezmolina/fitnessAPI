<?php

namespace FitnessApi\Routine\Infrastructure\Mysql;

use FitnessApi\Routine\Domain\Routine;
use FitnessApi\Shared\Insfrastructure\Mysql\DoctrineRepository;
use FitnessApi\Routine\Domain\RoutineRepository as RoutineRepositoryInterface;

final class RoutineRepository extends DoctrineRepository implements RoutineRepositoryInterface
{
    public function create(Routine $routine): void {
        $this->persist($routine);
    }
}