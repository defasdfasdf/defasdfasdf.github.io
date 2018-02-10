#<?php echo $id ?> {
  <?php Css::margin($field['margin']); ?>
  <?php Css::padding($field['padding']); ?>
}

#<?php echo $id ?> .qx-title {
  margin-top: 0px;
  margin-bottom: 25px;
  <?php Css::fonts($field['title_font']);?>
  <?php Css::prop('color', $field['title_text_color']);?>
  <?php Css::margin($field['title_text_margin']);?>
}

#<?php echo $id ?> .qx-title span{
	<?php Css::fonts($field['title_span_font']);?>
  <?php Css::prop('color', $field['title_span_color']);?>
}

#<?php echo $id ?> .qx-subtitle * {
  <?php Css::fonts($field['paragraph_font']);?>
  <?php Css::prop('color', $field['paragraph_text_color']);?>
  <?php Css::margin($field['paragraph_text_margin']); ?>
}