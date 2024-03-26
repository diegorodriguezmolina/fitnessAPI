<?php

declare(strict_types=1);

namespace FitnessApi\Shared\Domain;

use InvalidArgumentException;
use Ramsey\Uuid\Uuid;

abstract class UuidValueObject
{
    public function __construct(protected string $value)
    {
        $this->ensureIsValidUuid($value);
    }

    public static function random(): static
    {
        return new static(Uuid::uuid4()->toString());
    }

    private function ensureIsValidUuid(string $id): void
    {
        if (!Uuid::isValid($id)) {
            throw new InvalidArgumentException(sprintf('<%s> does not allow the value <%s>.', static::class, $id));
        }
    }

    final public function value(): string
    {
        return $this->value;
    }
}