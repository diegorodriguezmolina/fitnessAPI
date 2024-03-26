<?php

namespace FitnessApi\Routine\Domain;

interface RoutineRepository
{
    public function create(Routine $routine): void;
}