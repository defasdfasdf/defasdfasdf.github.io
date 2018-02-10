<?php
  $classes = classNames( "qx-element qx-element-{$type} {$field['class']}", $visibilityClasses, [
    'qx-text-left' => $field['alignment'] === 'left',
    'qx-text-center' => $field['alignment'] === 'center',
    'qx-text-right' => $field['alignment'] === 'right',
    'qx-text-justify' => $field['alignment'] === 'justify',
    "wow {$field['animation']}" => $field['animation'],
    "qx-hvr-{$field['hover_animation']}" => $field['hover_animation']
  ]);

  // Animation delay
	$animation_delay = '';
	if( $field['animation'] AND array_key_exists('animation_delay', $field) ){
		$animation_delay = 'data-wow-delay="'. $field['animation_delay'] .'s"';
	}
?>
<div id="<?php echo $id; ?>" class="<?php echo $classes; ?>" <?php echo $animation_delay; ?>>
  <?php echo $field['content']; ?>
</div>
<!-- qx-element-text -->