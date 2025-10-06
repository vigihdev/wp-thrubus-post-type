<?php

declare(strict_types=1);

namespace WPPostType\Contracts;


/**
 * Interface untuk DTO (Data Transfer Object)
 */
interface DTOContract
{
    /**
     * Convert DTO to array
     *
     * @return array
     */
    public function toArray(): array;

    /**
     * Create DTO from array
     *
     * @param array $data
     * @return static
     */
    public static function fromArray(array $data): static;
}
