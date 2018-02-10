#<?php echo $id?> {
	<?php Css::margin($field['margin']);?>
	<?php Css::padding($field['padding']);?>
}

#<?php echo $id?> ul.social-icon {
	margin: 0;
	padding: 0;
}

#<?php echo $id?> ul.social-icon.horizontal li {
	display: inline;
}

#<?php echo $id?> ul.social-icon.vertical li {
	display: block;
}

#<?php echo $id?> ul.social-icon.horizontal li a i,
#<?php echo $id?> ul.social-icon.vertical li a i {
	text-align: center;
	font-size: <?php echo $field['font_size']; ?>px;
	<?php Css::prop("width", $field['width']);?>
	<?php Css::prop("height", $field['height']);?>
    <?php Css::prop("line-height", $field['line_height'] . 'px');?>
	<?php Css::prop("color", $field['icon_color']);?>
	<?php Css::prop("background", $field['icon_bg']);?>
	<?php Css::padding($field['icon_padding']);?>

    <?php if($field['border']):?>
        <?php Css::prop('border-style', $field['border_style']);?>
        <?php Css::prop('border-color', $field['border_color']);?>
        border-width: <?php echo $field['border_width']?>px;
        border-radius: <?php echo $field['border_radius']?>px;
    <?php endif;?>

	-webkit-transition: all 0.3s;
	transition: all 0.3s;
}

#<?php echo $id?> ul.social-icon.horizontal li a:hover i,
#<?php echo $id?> ul.social-icon.vertical li a:hover i {
	<?php Css::prop("color", $field['icon_hover_color']);?>
	<?php Css::prop("background", $field['icon_hover_bg']);?>
    <?php Css::prop('border-color', $field['border_hover_color']);?>
}