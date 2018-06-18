<?php

function doitfoundation_meta_box($meta_boxes)
{
    $prefix = 'rw_';

    $meta_boxes[] = array(
        'id' => 'additional',
        'title' => esc_html__('Additional Information', 'doitfoundation'),
        'post_types' => array('partner'),
        'context' => 'advanced',
        'priority' => 'default',
        'autosave' => false,
        'fields' => array(
            
            array(
                'id' => $prefix . 'partner_url',
                'name' => esc_html__('Url', 'doitfoundation'),
                'type' => 'text',
                
            ),
           
        ),
    );

    $meta_boxes[] = array(
        'id' => 'additional',
        'title' => esc_html__('Additional Information', 'doitfoundation'),
        'post_types' => array('news-link'),
        'context' => 'advanced',
        'priority' => 'default',
        'autosave' => false,
        'fields' => array(

            array(
                'id' => $prefix . 'news_url',
                'name' => esc_html__('Url', 'doitfoundation'),
                'type' => 'text',

            ),

        ),
    );

    

    return $meta_boxes;
}
add_filter('rwmb_meta_boxes', 'doitfoundation_meta_box');