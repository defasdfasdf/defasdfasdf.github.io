#<?php echo $id; ?> {
<?php if($field['image']):?>
    background-image: url(<?php Css::image($field['image']); ?>);
<?php endif;?>
<?php Css::prop('background-color', $field['bg_color']);?>
<?php Css::prop('background-position', $field['image_position']);?>
<?php Css::prop('background-size', $field['image_size']);?>
<?php Css::padding($field['padding']);?>
<?php Css::margin($field['margin']);?>
}
<?php 
  // Hover animation box shadow
  if( $field['hover_animation'] === 'shadow' ):?>
  #<?php echo $id?>:hover{
    box-shadow: <?php echo $field['hover_shadow_horizontal']?>px <?php echo $field['hover_shadow_vertical']?>px <?php echo $field['hover_shadow_blur']?>px <?php echo $field['hover_shadow_spread']?>px <?php echo $field['hover_shadow_color']?>;
    transform: scale(<?php echo $field['hover_shadow_scale']?>);
  }
<?php endif;?> 

#<?php echo $id; ?> .qx-title {
<?php Css::fonts($field['title_font']); ?>
<?php Css::prop('color', $field['title_color']);?>
<?php Css::margin($field['title_margin']);?>
}

#<?php echo $id; ?> .qx-description {
<?php Css::fonts($field['description_font']); ?>
<?php Css::prop('color', $field['description_color']);?>
}

#<?php echo $id; ?> .qx-btn {
<?php Css::fonts($field['button_font']); ?>
<?php Css::margin($field['btn_margin']);?>
}