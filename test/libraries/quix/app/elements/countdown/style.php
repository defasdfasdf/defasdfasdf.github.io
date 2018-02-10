#<?php echo $id?>_clock { display: flex; justify-content: space-between; text-align: center;}
#<?php echo $id?>_clock div { font-size: 21px; }
#<?php echo $id?> span { display: block; font-size: 36px; font-weight: bold; }

#<?php echo $id?>{
	<?php Css::prop("background-color", $field['bg_color'])?>
	<?php Css::prop('color', $field['color']);?>
	<?php Css::margin($field['margin']);?>
	<?php Css::padding($field['padding']);?>
}

#<?php echo $id?>_clock div {
	<?php Css::fonts($field['font']); ?>
}

#<?php echo $id?>_clock span {
	<?php Css::fonts($field['number_font']); ?>
	<?php Css::prop('color', $field['number_color']);?>
}

