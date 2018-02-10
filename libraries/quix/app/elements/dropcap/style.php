#<?php echo $id?>{
  <?php Css::fonts($field['font']);?>
  <?php Css::prop('color', $field['text_color']);?>
  <?php if($field['bg_image']):?>
    background-image : url(<?php Css::image($field['bg_image']); ?>);
    <?php Css::prop('background-repeat', $field['image_repeat']);?>
    <?php Css::prop('background-position', $field['image_position']);?>
    <?php Css::prop('background-size', $field['image_size']);?>
  <?php endif;?>
  <?php Css::prop('background-color', $field['bg_color']);?>
  <?php Css::margin($field['margin']);?>
  <?php Css::padding($field['padding']);?>
}

#<?php echo $id?> *{
  <?php Css::fonts($field['font']);?>
  <?php Css::prop('color', $field['text_color']);?>
}

#<?php echo $id?>:first-letter {
float: left;
color: #903;
font-size: 75px;
line-height: 60px;
padding-top: 4px;
padding-right: 8px;
padding-left: 3px;
<?php Css::prop('color', $field['dcap_text_color']);?>
<?php Css::prop('background', $field['dcap_bg_color']);?>
<?php Css::fonts($field['dcap_font']);?>
<?php Css::padding($field['dcap_padding']);?>
<?php Css::margin($field['dcap_margin']);?>
<?php if($field['border']):?>
  <?php Css::prop('border-style', $field['border_style']);?>
  <?php Css::prop('border-color', $field['border_color']);?>
  border-width: <?php echo $field['border_width']?>px;
  border-radius: <?php echo $field['border_radius']?>px;
<?php endif;?>
}

<?php if (($field['alignment'] == 'right') || $field['alignment'] == 'center') : ?>
#<?php echo $id?>:first-letter {
  float: none;
}
<?php endif; ?>
