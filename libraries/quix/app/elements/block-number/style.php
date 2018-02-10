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

#<?php echo $id?> .number {
	background-color: #333333;
	color: #ffffff;
}

#<?php echo $id?> .number {
	display: table;
	text-align: center;
	<?php Css::fonts($field['number_font']);?>
	<?php Css::prop('width', $field['block_size'] . 'px');?>
	<?php Css::prop('height', $field['block_size'] . 'px');?>
	<?php Css::prop('line-height', $field['block_size'] . 'px');?>

	<?php Css::prop('background-color', $field['block_bg_color']);?>
	<?php Css::prop('color', $field['block_color']);?>
	
	<?php if($field['border']):?>
	    <?php Css::prop('border-style', $field['border_style']);?>
	    <?php Css::prop('border-color', $field['border_color']);?>
	    border-width: <?php echo $field['border_width']?>px;
	    border-radius: <?php echo $field['border_radius']?>px;
	<?php endif;?>
}

#<?php echo $id?> .pull-center .number {
	margin: 0 auto 15px;
}
#<?php echo $id?> .media-left,
#<?php echo $id?> .media-right,
#<?php echo $id?> .media-center{
	<?php Css::margin($field['numbe_margin']);?>
}
#<?php echo $id?> .media-heading{
	<?php Css::fonts($field['title_font']);?>
	<?php Css::prop('color', $field['title_color']);?>
}

#<?php echo $id?> .media-content{
	<?php Css::fonts($field['font']);?>
	<?php Css::prop('color', $field['color']);?>
}