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

#<?php echo $id ?> .collapsible-header{
  <?php Css::prop("background-color", $field['header_bg_color'])?>
  <?php Css::prop("color", $field['header_text_color'])?>
  <?php Css::fonts( $field['header_font'] ); ?>
  <?php Css::margin($field['title_margin']);?>
  <?php Css::padding($field['title_padding']);?>
}

#<?php echo $id ?> .collapsible-header i {
font-size: <?php echo $field['icon_font_size']?>px;
<?php Css::prop("color", $field['icon_color'])?>
}

#<?php echo $id ?> .collapsible-body{
  <?php Css::fonts( $field['body_font'] ); ?>
  <?php Css::prop("background-color", $field['body_bg_color'])?>
  <?php Css::prop("color", $field['body_text_color'])?>
  <?php Css::margin($field['body_margin']);?>
  <?php Css::padding($field['body_padding']);?>
}

#<?php echo $id?> .collapsible-body,
#<?php echo $id?> .collapsible li{
  <?php Css::prop("border-color", $field['border_color'])?>
}


