<?php
class Recent_Taxonomy_Posts extends WP_Widget {

    public function __construct() {
        $widget_ops = array(
            'classname' => 'recent_taxonomy_post',
            'description' => 'Les brèves les plus récentes de la taxonomie "Type d\'article".',
        );
        parent::__construct( 'recent_taxonomy_post', 'Brèves récentes', $widget_ops );
    }

    /**
     * Outputs the content of the widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget( $args, $instance ) {
        // outputs the content of the widget
    }

    /**
     * Outputs the options form on admin
     *
     * @param array $instance The widget options
     */
    public function form( $instance ) {
        // outputs the options form on admin
    }

    /**
     * Processing widget options on save
     *
     * @param array $new_instance The new options
     * @param array $old_instance The previous options
     */
    public function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        return $instance;
    }
}