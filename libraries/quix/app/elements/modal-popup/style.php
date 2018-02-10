#<?php echo $id?>{
  <?php Css::fonts($field['font']);?>
  <?php Css::prop('color', $field['text_color']);?>
  <?php Css::margin($field['margin']);?>
  <?php Css::padding($field['padding']);?>
}

#<?php echo $id?> *{
  <?php Css::fonts($field['font']);?>
  <?php Css::prop('color', $field['text_color']);?>
}
#<?php echo $id?> .modal-icon {
font-size: <?php echo $field['icon_size']; ?>px;
}