#<?php echo $id?>{
  <?php if($field['bg_image']):?>
    background-image : url(<?php Css::image($field['bg_image']); ?>);
    <?php Css::prop('background-repeat', $field['image_repeat']);?>
    <?php Css::prop('background-position', $field['image_position']);?>
    <?php Css::prop('background-size', $field['image_size']);?>
  <?php endif;?>
  <?php Css::prop('background-color', $field['bg_color']);?>
  <?php Css::padding($field['padding']);?>
  <?php Css::margin($field['margin']);?>
}
#<?php echo $id?> .qx-nc-title{
  <?php Css::fonts($field['title_font']);?> 
  <?php Css::prop("color", $field['title_color'])?>
}
#<?php echo $id?> .qx-nc-number{
  <?php Css::fonts($field['number_font']);?> 
  <?php Css::prop("color", $field['number_color'])?>
}
<?php if($field['icon_enabled']):?>
#<?php echo $id?> .qx-icon{
  font-size: <?php echo $field['icon_font_size']?>px;
  <?php Css::prop("color", $field['icon_color'])?>
}
<?php endif;?>