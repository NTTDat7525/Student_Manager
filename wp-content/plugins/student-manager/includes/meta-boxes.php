<?php

function sm_add_meta_boxes() {
    add_meta_box(
        'student_info',
        'Thông tin sinh viên',
        'sm_render_meta_box',
        'student'
    );
}
add_action('add_meta_boxes', 'sm_add_meta_boxes');

function sm_render_meta_box($post) {

    wp_nonce_field('sm_save_data', 'sm_nonce');

    $mssv = get_post_meta($post->ID, '_mssv', true);
    $lop = get_post_meta($post->ID, '_lop', true);
    $ngaysinh = get_post_meta($post->ID, '_ngaysinh', true);
?>
<p>
    MSSV:<br>
    <input type="text" name="mssv" value="<?php echo esc_attr($mssv); ?>">
</p>

<p>
    Lớp:<br>
    <select name="lop">
        <option value="CNTT" <?php selected($lop, 'CNTT'); ?>>CNTT</option>
        <option value="Kinh tế" <?php selected($lop, 'Kinh tế'); ?>>Kinh tế</option>
        <option value="Marketing" <?php selected($lop, 'Marketing'); ?>>Marketing</option>
    </select>
</p>

<p>
    Ngày sinh:<br>
    <input type="date" name="ngaysinh" value="<?php echo esc_attr($ngaysinh); ?>">
</p>
<?php
}