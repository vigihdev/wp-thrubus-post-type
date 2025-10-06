<?php

declare(strict_types=1);

namespace WPPostType\Contracts;

/**
 * Interface untuk Label Builder
 */
interface LabelBuilderContract
{
    /**
     * Set singular name
     *
     * @param string $singular
     * @return self
     */
    public function setSingular(string $singular): self;

    /**
     * Set plural name
     *
     * @param string $plural
     * @return self
     */
    public function setPlural(string $plural): self;

    /**
     * Set textdomain
     *
     * @param string $textdomain
     * @return self
     */
    public function setTextdomain(string $textdomain): self;

    /**
     * Build labels array
     *
     * @return array
     */
    public function build(): array;
}
