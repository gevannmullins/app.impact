<?php

// Create id attribute allowing for custom "anchor" value.
$id = 'slider-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'slider';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
if( $is_preview ) {
    $className .= ' is-admin';
}

//$post_types = get_post_types('case-studies');
//echo json_encode($post_types, JSON_PRETTY_PRINT);

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <?php if( have_rows('slides') ): ?>
        <div class="slides">
            <?php
            while( have_rows('slides') ): the_row();
                $case_study = get_sub_field('case_studies');

//                echo '<pre>';
//                echo json_encode($case_study, JSON_PRETTY_PRINT);
//                echo '</pre>';

                $case_study_id = $case_study->ID;
                $case_study_title = get_field('title', $case_study_id);
                $case_study_description = get_field('description', $case_study_id);
                $case_study_image = wp_get_attachment_image( get_field('image', $case_study_id), 'cover' );
                $case_study_image_src = wp_get_attachment_image_url(get_field('image', $case_study_id));
            ?>
                <div>
                    <table class="aligncenter">
                        <tr>
                            <td rowspan="2" valign="middle" align="center" width="50%" style="border: #000000 2px solid;">
                                <div class="wp-block-cover has-background-dim-70 has-background-dim has-parallax has-background-gradient aligncenter"
                                     style="background-image:url(<?php echo $case_study_image_src; ?>);min-height:100%">
                                </div>
                                <?php //echo wp_get_attachment_image( get_field('image', $case_study_id), 'cover' ); ?>
                                <a href="<?php echo get_permalink($case_study->ID); ?>">
                                    <img src="<?php echo $case_study_image_src; ?>" />
                                </a>
                            </td>
                            <td valign="middle" align="left" width="50%">
                                <h3 style="padding-left: 10px;"><?php echo $case_study_title; ?></h3>
                            </td>
                        </tr>
                        <tr>
                            <td valign="middle" align="left" width="50%">
                                <p style="padding-left: 10px;"><?php echo $case_study_description; ?></p>
                            </td>
                        </tr>
                    </table>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else: ?>
        <p>Please add some slides.</p>
    <?php endif; ?>
</div>