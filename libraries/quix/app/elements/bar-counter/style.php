#<?php echo $id?>{
  <?php Css::margin($field['margin']);?>
  <?php Css::padding($field['padding']);?>
}
<?php 
  // Hover animation box shadow
  if( $field['hover_animation'] === 'shadow' ):?>
  #<?php echo $id?>:hover{
    box-shadow: <?php echo $field['hover_shadow_horizontal']?>px <?php echo $field['hover_shadow_vertical']?>px <?php echo $field['hover_shadow_blur']?>px <?php echo $field['hover_shadow_spread']?>px <?php echo $field['hover_shadow_color']?>;
    transform: scale(<?php echo $field['hover_shadow_scale']?>);
  }
<?php endif;?> 

#<?php echo $id?> .qx-pb-title{
  <?php Css::fonts($field['title_font']);?>
}
#<?php echo $id?> .qx-progress{
  border-radius: <?php echo $field['border_radius']?>px;
  height: <?php echo $field['thikness']?>px;
}
#<?php echo $id?> .qx-progress-bar {
line-height: <?php echo $field['thikness']?>px;
}