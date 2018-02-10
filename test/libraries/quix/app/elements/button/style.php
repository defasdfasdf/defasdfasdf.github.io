#<?php echo $id?> {
  <?php Css::fonts($field['font']);?>
  <?php Css::prop('color', $field['text_color']);?>
  <?php Css::prop('background', $field['bg_color']);?>
  <?php if($field['border']):?>
    <?php Css::prop('border-style', $field['border_style']);?>
    <?php Css::prop('border-color', $field['border_color']);?>
    border-width: <?php echo $field['border_width']?>px;
    border-radius: <?php echo $field['border_radius']?>px;
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

<?php if($field['button_icon_color']):?>
  #<?php echo $id?> i{
    <?php Css::prop('color', $field['button_icon_color']);?>
  }
<?php endif;?>
  
<?php if( $field['text_color_hover'] OR 
          $field['bg_color_hover'] OR 
          $field['border_hover_color'] ):?>
  #<?php echo $id?>:hover{
    <?php Css::prop('color', $field['text_color_hover']);?>
    <?php Css::prop('background', $field['bg_color_hover']);?>
    <?php Css::prop('border-color', $field['border_hover_color']);?>
  }
<?php endif;?>

<?php if( $field['border'] AND 
          $field['border_animation'] ) :?>
   #<?php echo $id?>:before{
    <?php Css::prop('border-color', $field['border_hover_color']);?>
  }       
<?php endif;?>

<?php if($field['button_icon_color_hover']):?>
  #<?php echo $id?>:hover i{
    <?php Css::prop('color', $field['button_icon_color_hover']);?>
  }
<?php endif;?>

#<?php echo $id?> i{
<?php Css::margin($field['icon_margin']);?>
}