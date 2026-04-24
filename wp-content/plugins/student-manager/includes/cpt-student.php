<?php

function sm_register_student_cpt() {

    $args = array(
        'labels' => array(
            'name' => 'Sinh viên',
            'singular_name' => 'Sinh viên',
            'add_new_item' => 'Thêm sinh viên'
        ),
        'public' => true,
        'menu_icon' => 'dashicons-groups',
        'supports' => array('title', 'editor')
    );

    register_post_type('student', $args);
}
add_action('init', 'sm_register_student_cpt');

// đổi placeholder title
add_filter('enter_title_here', function($title, $post){
    if ($post->post_type == 'student') {
        return 'Nhập họ tên sinh viên';
    }
    return $title;
}, 10, 2);