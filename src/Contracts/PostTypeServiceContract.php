<?php

declare(strict_types=1);

namespace WPPostType\Contracts;

/**
 * Interface untuk Post Type Service
 */
interface PostTypeServiceContract
{
    /**
     * Register single post type
     *
     * @param PostTypeContract $postType
     * @return bool
     */
    public function register(PostTypeContract $postType): bool;

    /**
     * Register multiple post types
     *
     * @param array<PostTypeContract> $postTypes
     * @return void
     */
    public function registerMultiple(array $postTypes): void;

    /**
     * Check if post type exists
     *
     * @param string $key
     * @return bool
     */
    public function exists(string $key): bool;
}
