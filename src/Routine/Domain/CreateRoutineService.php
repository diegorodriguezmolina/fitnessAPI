<?php

declare(strict_types=1);

namespace FitnessApi\Routine\Domain;

use FitnessApi\Shared\Domain\StringValueObject;

final class CreateRoutineService {
    public function __construct(private readonly RoutineRepository $repository){}

    public function __invoke(
        string $name,
        string $description,
        int $level
    ): void
    {
        $routine = New Routine(
            Id::random(),
            new Name($name),
            new Description($description),
            new Level($level)
        );

        $this->repository->create($routine);
    }
}