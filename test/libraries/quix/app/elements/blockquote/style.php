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

#<?php echo $id?> blockquote {
<?php Css::prop("color", $field['color'])?>
<?php Css::prop("border-color", $field['bar_color'])?>
<?php Css::fonts( $field['font'] ); ?>
}
<?php if ($field['footer_text']) : ?>
    #<?php echo $id?> blockquote footer {
    <?php Css::prop("color", $field['color'])?>
    }
<?php endif; ?>