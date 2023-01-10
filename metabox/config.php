<?php




// Custom Metabox Create

add_action('cmb2_admin_init', 'create_metaboxes');

function create_metaboxes(){

    $box = new_cmb2_box(array(
        'id'            =>  'additional',
        'title'         =>  esc_html__('Additional Field' , 'lava'),
        'object_types'   =>  array('testmonial'),
    ));


    $box->add_field(array(
        'name'  =>  esc_html__('Subtitle', 'lave'),
        'id'    =>  'subtitle',
        'type'  =>  'text',
        'desc'  =>  esc_html__('Please add your profession', 'lava'),
    ));



}