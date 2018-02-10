#<?php echo $id?> .qx-pc-title{
  <?php Css::fonts($field['title_font']);?>
  <?php Css::prop('color', $field['title_color']);?>
}
#<?php echo $id?> .qx-percent-value,
#<?php echo $id?> .qx-percent {
  <?php Css::prop('color', $field['percentage_color']);?>
}