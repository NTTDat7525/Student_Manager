<?php

function sm_student_list_shortcode() {

    $query = new WP_Query(array(
        'post_type' => 'student',
        'posts_per_page' => -1
    ));

    ob_start();

    if ($query->have_posts()) {

        echo '<table border="1" cellpadding="5">';
        echo '<tr>
                <th>STT</th>
                <th>MSSV</th>
                <th>Họ tên</th>
                <th>Lớp</th>
                <th>Ngày sinh</th>
              </tr>';

        $stt = 1;

        while ($query->have_posts()) {
            $query->the_post();

            echo "<tr>
                <td>{$stt}</td>
                <td>" . get_post_meta(get_the_ID(), '_mssv', true) . "</td>
                <td>" . get_the_title() . "</td>
                <td>" . get_post_meta(get_the_ID(), '_lop', true) . "</td>
                <td>" . get_post_meta(get_the_ID(), '_ngaysinh', true) . "</td>
            </tr>";

            $stt++;
        }

        echo '</table>';

    } else {
        echo 'Không có dữ liệu';
    }

    wp_reset_postdata();

    return ob_get_clean();
}

add_shortcode('danh_sach_sinh_vien', 'sm_student_list_shortcode');