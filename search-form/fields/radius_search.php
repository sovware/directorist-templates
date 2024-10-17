<?php
/**
 * @author  wpWax
 * @since   6.6
 * @version 8.0
 */

if (!defined('ABSPATH')) exit;

$min_distance     = '0';
$default_distance = $data['default_radius_distance'] ?? 0;
$max_distance     = $data['max_radius_distance'] ?? 1000;
$value            = ! empty( $_REQUEST['miles']) ? sanitize_text_field( wp_unslash( $_REQUEST['miles'] ) ) : $default_distance;
?>

<div class="directorist-search-field directorist-search-field-radius_search">
	<?php if (!empty($data['label'])) : ?>
		<label><?php echo esc_html($data['label']); ?></label>
	<?php endif; ?>
	<div class="directorist-custom-range-slider">
		<div class="directorist-custom-range-slider__range__wrap">
			<span class="directorist-custom-range-slider__range__show"></span>
			<span><?php echo esc_attr($searchform->range_slider_unit($data)); ?></span>
		</div>
		<div class="directorist-custom-range-slider__slide" value="<?php echo esc_attr($default_distance); ?>"></div>
		<div class="directorist-custom-range-slider__wrap">
			<input type="hidden" placeholder="Min" value="<?php echo esc_attr($min_distance); ?>" name="directorist-custom-range-slider__value__min" class="directorist-custom-range-slider__radius directorist-custom-range-slider__value__min">
			<input type="hidden" placeholder="Max" value="<?php echo esc_attr($max_distance); ?>" name="directorist-custom-range-slider__value__max" class="directorist-custom-range-slider__radius directorist-custom-range-slider__value__max">
			<input type="hidden" name="directorist-custom-range-slider__range" class="directorist-custom-range-slider__range" value="<?php echo esc_attr($min_distance); ?> - <?php echo esc_attr($max_distance); ?>">
		</div>
	</div>

</div>