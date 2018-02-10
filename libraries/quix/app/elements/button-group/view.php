<?php
  $classes = classNames( "qx-element qx-element-{$type} {$field['class']}", $visibilityClasses, [
    'qx-text-left' => $field['alignment'] === 'left',
    'qx-text-center' => $field['alignment'] === 'center',
    'qx-text-right' => $field['alignment'] === 'right',
    "wow {$field['animation']}" => $field['animation']
  ] );

  // Animation delay
  $animation_delay = '';
  if( $field['animation'] AND array_key_exists('animation_delay', $field) ){
    $animation_delay = 'data-wow-delay="'. $field['animation_delay'] .'s"';
  }
?>

<p id="<?php echo $id; ?>" class="<?php echo $classes ?>" <?php echo $animation_delay; ?> >
  <?php foreach($field['buttons'] as $i => $button):?>
    <a href="<?php echo $button['button']['url'] ?>" <?php echo ( $button['button']['target'] ) ? ' target="_blank" rel="noopener noreferrer"' : '' ?>
      class="qx-btn <?php echo $button['style']?> qx-btn-<?php echo $i?> <?php echo ($field['hover_animation']) ? "qx-hvr-{$field['hover_animation']}" : ''; ?>">
      <?php if ( ( $button['icon'] ) AND ( $button['icon_placement'] == 'left' ) ): ?>
        <i class="<?php echo $button['icon'] ?>"></i>
      <?php endif; ?>
      <?php echo $button['button']['text'] ?>
      <?php if ( ( $button['icon'] ) AND ( $button['icon_placement'] == 'right' ) ): ?>
        <i class="<?php echo $button['icon'] ?>"></i>
      <?php endif; ?>
    </a>
  <?php endforeach;?>
</p>
<!-- qx-element-button-group -->
