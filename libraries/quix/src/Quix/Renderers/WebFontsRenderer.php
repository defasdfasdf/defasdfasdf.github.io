<?php

namespace ThemeXpert\Quix\Renderers;

use ThemeXpert\Quix\Cache;

class WebFontsRenderer
{
    /**
     * Instance of cache.
     *
     * @var \ThemeXpert\Quix\Cache
     */
    protected $cache;

    /**
     * Create a new instance of web fonts render.
     *
     * @param Cache $cache
     * @param       $allNodes
     */
    public function __construct(Cache $cache, $allNodes)
    {
        $this->allNodes = $allNodes;

        $this->cache = $cache;
    }

    /**
     * Get node typography controls.
     *
     * @param $node
     *
     * @return array
     */
    function get_node_typography_controls($node)
    {
        $controls = flatten_array($node['form']);
        $fontControls = array_filter($controls, function ($control) {
            if ($control['type'] == "typography") {
                return true;
            }

            return false;
        });

        # array_values to reindex
        $names = array_values(array_map(function ($control) {
            return $control['name'];
        }, $fontControls));

        return ['names' => $names, 'slug' => $node['slug']];
    }

    /**
     * Get nodes fonts map.
     *
     * @param $nodes
     *
     * @return array|mixed
     */
    function get_nodes_fonts_map($nodes)
    {
        $nodes = array_map([$this, 'get_node_typography_controls'], $nodes);

        # Remove nodes that does not have typography
        $nodes = array_filter($nodes, function ($node) {
            if (count($node['names'])) {
                return true;
            }

            return false;
        });

        # Make a map out of the list
        $nodes = array_reduce($nodes, function ($carry, $node) {
            $carry[$node['slug']] = $node['names'];

            return $carry;
        }, []);

        return $nodes;
    }

    /**
     * Get used fonts in node.
     *
     * @param $node
     * @param $nodes
     *
     * @return array
     */
    function get_used_fonts_in_node($node, $nodes)
    {
        # Slug may not exist
        # throw exception
        $slug = $node['slug'];

        /**
         * throw exception
         * what if schema does not exist?
         *
         * return false/ []
         */
        if (array_key_exists($slug, $nodes)) {
            $fields = $nodes[$slug];
        } else {
            return [];
        }

        # fixme: 1 flatten
        $form = flatten_array($node['form']);

        $fonts = array_pick($form, $fields, true);

        $fonts = array_values(array_map(function ($font) {
            # Family might not exist
            $font = array_get($font, 'family', "");

            if(is_array($font)) {
                return $font['value'];
            }

            return $font;
        }, $fonts));

        return $fonts;
    }

    /**
     * Traverse node for fonts.
     *
     * @param $node
     * @param $nodes
     *
     * @return array
     */
    function traverse_node_for_fonts($node, $nodes)
    {
        $fonts = $this->get_used_fonts_in_node($node, $nodes);

        if (array_key_exists('children', $node)) {
            $childFonts = array_map(function ($node) use ($nodes) {
                return $this->traverse_node_for_fonts($node, $nodes);
            }, $node['children']);

            return array_merge($fonts, $childFonts);
        }

        return $fonts;
    }

    /**
     * Get used fonts.
     *
     * @param $data
     *
     * @return array
     */
    function getUsedFonts($data)
    {
        $nodes_fonts_map = $this->cache->fetch('nodes_fonts_map', function () {
            return $this->get_nodes_fonts_map($this->allNodes);
        });

        $fonts = array_map(function ($node) use ($nodes_fonts_map) {
            return $this->traverse_node_for_fonts($node, $nodes_fonts_map);
        }, $data);

        return array_filter(array_unique(array_flatten($fonts)));
    }
}
