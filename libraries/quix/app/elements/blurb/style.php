<?php if($field['link_type'] == 'full_section') : ?>
  #<?php echo $id?> a {
    display: block;
  }
<?php endif; ?>

#<?php echo $id?>{
  <?php Css::prop("background-color", $field['bg_color'])?>
  <?php if($field['bg_image']):?>
    background: url(<?php Css::image($field['bg_image']); ?>) no-repeat;
    <?php Css::prop('background-repeat', $field['image_repeat']);?>
    <?php Css::prop('background-position', $field['image_position']);?>
    <?php Css::prop('background-size', $field['image_size']);?>
  <?php endif;?>
   <?php if($field['border']):?>
    border-width: <?php echo $field['border_width']?>px;
    border-radius: <?php echo $field['border_radius']?>px;
    <?php Css::prop("border-style", $field['border_style'])?>
    <?php Css::prop("border-color", $field['border_color'])?>
  <?php endif;?>

  <?php Css::margin($field['margin']);?>
  <?php Css::padding($field['padding']);?>

  transition: box-shadow 0.3s ease-in-out, transform 0.3s ease-in-out;
  <?php 
    // Box shadow
    if( $field['box_shadow'] ):?>
    box-shadow: <?php echo ($field['box_shadow_inset']) ? 'inset' : '' ?> <?php echo $field['box_shadow_horizontal']?>px <?php echo $field['box_shadow_vertical']?>px <?php echo $field['box_shadow_blur']?>px <?php echo $field['box_shadow_spread']?>px <?php echo $field['box_shadow_color']?>;
  <?php endif;?>
}
<?php 
  // Hover animation box shadow
  if( $field['hover_animation'] === 'shadow' ):?>
  #<?php echo $id?>:hover{
    box-shadow: <?php echo $field['hover_shadow_horizontal']?>px <?php echo $field['hover_shadow_vertical']?>px <?php echo $field['hover_shadow_blur']?>px <?php echo $field['hover_shadow_spread']?>px <?php echo $field['hover_shadow_color']?>;
    transform: scale(<?php echo $field['hover_shadow_scale']?>);
  }
<?php endif;?> 

#<?php echo $id?> .qx-blurb-content {
  <?php Css::fonts($field['body_font']); ?>
  <?php Css::prop("color", $field['body_color'])?>
}
#<?php echo $id?> .qx-blurb-title{
  <?php Css::fonts($field['header_font']);?>
  <?php Css::prop("color", $field['header_color'])?>
  <?php Css::margin($field['header_margin']);?>
}
<?php if($field['header_hover_color']):?>
#<?php echo $id?> .qx-blurb-title:hover{
  <?php Css::prop("color", $field['header_hover_color'])?>
}
<?php endif;?>

#<?php echo $id?> .qx-icon{
  font-size: <?php echo $field['icon_font_size']?>px;
  <?php Css::prop("color", $field['icon_color'])?>
}
<?php if( $field['bg_hover_color'] OR
          $field['border_hover_color'] ):?>
  #<?php echo $id?>:hover{
    <?php Css::prop('background', $field['bg_hover_color']);?>
    <?php Css::prop('border-color', $field['border_hover_color']);?>
  }
<?php endif;?>

#<?php echo $id?> .qx-icon,
#<?php echo $id?> .qx-image{
  <?php Css::margin($field['media_margin']);?>
}
