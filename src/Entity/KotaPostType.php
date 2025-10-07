<?php

declare(strict_types=1);

namespace WPPostType\Entity;

use WPPostType\Contracts\PostTypeContract;
use WPPostType\DTOs\PostTypeLabelsDTO;
use WPPostType\DTOs\PostTypeArgsDTO;

/**
 * Kota Post Type Entity
 */
final class KotaPostType implements PostTypeContract
{
    private string $key = 'kota';
    private PostTypeLabelsDTO $labels;
    private PostTypeArgsDTO $args;

    public function __construct()
    {
        $this->setupLabels();
        $this->setupArgs();
    }

    /**
     * Get post type key/slug
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * Get post type labels
     */
    public function getLabels(): array
    {
        return $this->labels->toArray();
    }

    /**
     * Get post type arguments
     */
    public function getArgs(): array
    {
        return $this->args->toArray();
    }

    /**
     * Register the post type
     */
    public function register(): void
    {
        register_post_type($this->key, $this->getArgs());
    }

    /**
     * Setup labels
     */
    private function setupLabels(): void
    {
        $this->labels = PostTypeLabelsDTO::create(
            singular: 'Kota',
            plural: 'Kota-kota',
            textdomain: 'textdomain'
        );
    }

    /**
     * Setup arguments
     */
    private function setupArgs(): void
    {
        $this->args = PostTypeArgsDTO::fromArray([
            'labels'             => $this->getLabels(),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => ['slug' => 'kota'],
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 20,
            'menu_icon'          => 'dashicons-location',
            'supports'           => ['title', 'editor', 'thumbnail', 'excerpt'],
            'show_in_rest'       => true,
        ]);
    }
}
