#<?php echo $id?>{
<?php Css::margin($field['margin']);?>
<?php Css::padding($field['padding']);?>
<?php Css::prop("background-color", $field['bg_color'])?>
<?php Css::prop("font-size", $field['font-size'])?>
}

#<?php echo $id?> a {
<?php Css::prop("color", $field['text_color'])?>
<?php Css::fonts( $field['text_font'] ); ?>
}


<?php if($field['button_style']):?>
#<?php echo $id;?>.qx-btn{
<?php Css::padding($field['button_padding']);?>
<?php Css::prop('background-color', $field['button_bg']);?>
<?php Css::prop('color', $field['button_text']);?>
<?php Css::prop('border-color', $field['button_border_color']);?>
border-width: <?php echo $field['button_border_width']?>px;
border-radius: <?php echo $field['button_border_radius']?>px;
}
#<?php echo $id;?>.qx-btn:hover{
<?php Css::prop('background-color', $field['button_bg_hover']);?>
<?php Css::prop('color', $field['button_text_hover']);?>
<?php Css::prop('border-color', $field['button_border_color_hover']);?>
}
<?php endif;?>

