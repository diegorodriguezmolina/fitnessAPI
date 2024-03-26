<?php

declare(strict_types=1);

namespace FitnessApi\Tests\Unit\Routine\Domain;

use Faker\Factory;
use FitnessApi\Routine\Domain\Description as Description;
use FitnessApi\Routine\Domain\Id as Id;
use FitnessApi\Routine\Domain\Level as Level;
use FitnessApi\Routine\Domain\Name as Name;
use FitnessApi\Routine\Domain\Routine as Routine;
use PHPUnit\Framework\TestCase;

class RoutineTest extends TestCase
{
    public function testCreateRoutine(): void
    {
        $id = Factory::create()->uuid;
        $name = Factory::create()->name;
        $description = Factory::create()->word;
        $level = Factory::create()->randomNumber();
        $routine = RoutineMother::create(
            new Id($id),
            new Name($name),
            new Description($description),
            new Level($level)
        );

        $this->assertInstanceOf(Routine::class, $routine);
        $this->assertSame($id, $routine->id()->value());
        $this->assertSame($name, $routine->name()->value());
        $this->assertSame($description, $routine->description()->value());
        $this->assertSame($level, $routine->level()->value());
    }
}