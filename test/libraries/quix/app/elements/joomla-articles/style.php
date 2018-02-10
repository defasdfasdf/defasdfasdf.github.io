#<?php echo $id?>{
  <?php Css::margin($field['margin']);?>
  <?php Css::padding($field['padding']);?> 
}

#<?php echo $id?> .qx-media-heading,
#<?php echo $id?> .qx-media-heading a{
  <?php Css::fonts($field['title_font']);?>
  <?php Css::prop("color", $field['title_color'])?>
  <?php Css::margin($field['title_margin']);?>
}
<?php if( $field['show_introtext'] ):?>
#<?php echo $id?> .qx-element-jarticle-introtext{
  <?php Css::fonts($field['introtext_font']);?>
  <?php Css::prop("color", $field['introtext_color'])?>
  <?php Css::margin($field['introtext_margin']);?>
}
<?php endif;?>

<?php if( $field['show_readmore'] ):?>
#<?php echo $id?> .qx-btn{
  <?php Css::fonts($field['readmore_font']);?>
}
<?php endif;?>  

<?php if('list' === $field['layout']):?>
#<?php echo $id;?> .qx-media-object{
  max-width : <?php echo $field['image_size'] ?>;
}
<?php endif;?>

#<?php echo $id?> .qx-media-grid,
#<?php echo $id?> .qx-media{
	<?php Css::prop('background-color', $field['bg_color']);?>
	<?php Css::margin($field['bg_margin']);?>
  <?php Css::padding($field['bg_padding']);?> 

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
  #<?php echo $id?> .qx-media-grid:hover,
  #<?php echo $id?> .qx-media:hover{
    box-shadow: <?php echo $field['hover_shadow_horizontal']?>px <?php echo $field['hover_shadow_vertical']?>px <?php echo $field['hover_shadow_blur']?>px <?php echo $field['hover_shadow_spread']?>px <?php echo $field['hover_shadow_color']?>;
    transform: scale(<?php echo $field['hover_shadow_scale']?>);
  }
<?php endif;?> 