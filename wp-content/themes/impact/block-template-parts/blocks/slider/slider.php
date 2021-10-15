<?php

/**
 * Slider Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

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

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <?php if( have_rows('slides') ): ?>
        <div class="slides">
            <?php
            while( have_rows('slides') ): the_row();
                $case_study = get_sub_field('case_studies');

                $case_study_id = $case_study->ID;
                $case_study_title = get_field('title', $case_study_id);
                $case_study_description = get_field('description', $case_study_id);
                $case_study_image = wp_get_attachment_image( get_field('image', $case_study_id), 'fit' );
            ?>
                <div class="alignwide">
                    <table>
                        <tr>
                            <td rowspan="2" valign="middle" align="center" width="50%">
                                <?php echo wp_get_attachment_image( get_field('image', $case_study_id), 'fit' ); ?>
                            </td>
                            <td valign="middle" align="left" width="50%">
                                <h3><?php echo $case_study_title; ?></h3>
                            </td>
                        </tr>
                        <tr>
                            <td valign="middle" align="left" width="50%">
                                <p><?php echo $case_study_description; ?></p>
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