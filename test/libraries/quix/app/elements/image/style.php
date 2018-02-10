#<?php echo $id?> img{  
  <?php Css::margin($field['margin']);?>
  <?php if($field['border']):?>
    <?php Css::prop('border-style', $field['border_style']);?>
    <?php Css::prop('border-color', $field['border_color']);?>
    border-width: <?php echo $field['border_width']?>px;
    border-radius: <?php echo $field['border_radius']?>px;
  <?php endif;?>
}

<?php if( $field['border_hover_color'] ):?>
  #<?php echo $id?> img:hover {
    <?php Css::prop('border-color', $field['border_hover_color']);?>
  }
<?php endif;?>

<?php 
  // Hover animation box shadow
  if( $field['hover_animation'] === 'shadow' ):?>
  #<?php echo $id?> img:hover{
    box-shadow: <?php echo $field['hover_shadow_horizontal']?>px <?php echo $field['hover_shadow_vertical']?>px <?php echo $field['hover_shadow_blur']?>px <?php echo $field['hover_shadow_spread']?>px <?php echo $field['hover_shadow_color']?>;
    transform: scale(<?php echo $field['hover_shadow_scale']?>);
  }
<?php endif;?> 
