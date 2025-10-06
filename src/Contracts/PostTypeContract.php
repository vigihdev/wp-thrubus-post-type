<?php

declare(strict_types=1);

namespace WPPostType\Contracts;

/**
 * Interface untuk Post Type Registration
 */
interface PostTypeContract
{
    /**
     * Get post type key/slug
     *
     * @return string
     */
    public function getKey(): string;

    /**
     * Get post type labels
     *
     * @return array
     */
    public function getLabels(): array;

    /**
     * Get post type arguments
     *
     * @return array
     */
    public function getArgs(): array;

    /**
     * Register the post type
     *
     * @return void
     */
    public function register(): void;
}
