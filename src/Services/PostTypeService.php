<?php

declare(strict_types=1);

namespace WPPostType\Services;

use WPPostType\Contracts\PostTypeContract;
use WPPostType\Contracts\PostTypeServiceContract;

/**
 * Service untuk handle Post Type Registration
 */
final class PostTypeService implements PostTypeServiceContract
{
    /**
     * Register single post type
     */
    public function register(PostTypeContract $postType): bool
    {
        if ($this->exists($postType->getKey())) {
            return false;
        }

        $postType->register();
        return true;
    }

    /**
     * Register multiple post types
     */
    public function registerMultiple(array $postTypes): void
    {
        foreach ($postTypes as $postType) {
            if (!$postType instanceof PostTypeContract) {
                continue;
            }
            $this->register($postType);
        }
    }

    /**
     * Check if post type exists
     */
    public function exists(string $key): bool
    {
        return post_type_exists($key);
    }

    /**
     * Get registered post type object
     */
    public function get(string $key): ?\WP_Post_Type
    {
        return get_post_type_object($key);
    }

    /**
     * Unregister post type
     */
    public function unregister(string $key): bool
    {
        if (!$this->exists($key)) {
            return false;
        }

        return unregister_post_type($key) !== false;
    }
}
