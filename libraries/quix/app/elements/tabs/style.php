#<?php echo $id;?>{
  <?php Css::fonts($field['fonts']);?>
  <?php Css::margin($field['margin']);?>
  <?php Css::padding($field['padding']);?>
}
#<?php echo $id;?> .tab a{
<?php Css::prop("color", $field['nav_text'])?>
}
#<?php echo $id;?> .tab:hover a,
#<?php echo $id;?> .tab a.active{
  <?php Css::prop("background", $field['nav_active_bg'])?>
  <?php Css::prop("color", $field['nav_active_text'])?>
  <?php Css::prop("border-color", $field['nav_border_color'])?>
}
#<?php echo $id;?> .tab-content{
  <?php Css::prop("background", $field['body_bg_color'])?>
  <?php Css::prop("color", $field['body_text_color'])?>
}
