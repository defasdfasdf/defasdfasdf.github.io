#<?php echo $id; ?> i{
  font-size: <?php echo $field['icon_size']?>px;
  <?php Css::prop('color',$field['color']);?>
  
  <?php if($field['border']):?>
    border-style: solid;
    border-width: <?php echo $field['border_width']?>px;
    border-radius: <?php echo $field['border_radius']?>px;
    <?php Css::prop('border-color',$field['border_color']);?>
  <?php endif;?>
  <?php Css::margin($field['margin']);?>
  <?php Css::padding($field['padding']);?>
}
<?php 
  // Hover animation box shadow
  if( $field['hover_animation'] === 'shadow' ):?>
  #<?php echo $id?> i:hover{
    box-shadow: <?php echo $field['hover_shadow_horizontal']?>px <?php echo $field['hover_shadow_vertical']?>px <?php echo $field['hover_shadow_blur']?>px <?php echo $field['hover_shadow_spread']?>px <?php echo $field['hover_shadow_color']?>;
    transform: scale(<?php echo $field['hover_shadow_scale']?>);
  }
<?php endif;?> 
