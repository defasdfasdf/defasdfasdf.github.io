<?php
$classes = classNames( "qx-btn qx-element qx-element-{$type} {$field['class']} {$field['style']}", $visibilityClasses, [
  "wow {$field['animation']}" => $field['animation'],
  "qx-hvr-{$field['hover_animation']}" => $field['hover_animation'],
  'qx-btn-block' => $field['type'] == 'fullwidth',
] );

  // Animation delay
  $animation_delay = '';
  if( $field['animation'] AND array_key_exists('animation_delay', $field) ){
    $animation_delay = 'data-wow-delay="'. $field['animation_delay'] .'s"';
  }
?>

<p <?php echo ( $field['alignment'] !== 'left' ) ? 'class="qx-text-' . $field['alignment'] . '"' : '' ?><?php echo $animation_delay; ?>>
  <a id="<?php echo $id; ?>" class="<?php echo $classes ?>"
     href="<?php echo $field['button']['url'] ?>" <?php echo ( $field['button']['target'] ) ? ' target="_blank" rel="noopener noreferrer"' : '' ?>>
    <?php if ( ( $field['icon'] ) AND ( $field['icon_placement'] == 'left' ) ): ?>
      <i class="<?php echo $field['icon'] ?>"></i>
    <?php endif; ?>
    <?php echo $field['button']['text'] ?>
    <?php if ( ( $field['icon'] ) AND ( $field['icon_placement'] == 'right' ) ): ?>
      <i class="<?php echo $field['icon'] ?>"></i>
    <?php endif; ?>
  </a>
</p>
<!-- qx-element-button -->
