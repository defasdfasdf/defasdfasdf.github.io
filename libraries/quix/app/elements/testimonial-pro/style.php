#<?php echo $id?>{
  <?php Css::prop('background-color', $field['bg_color']);?>  
  <?php Css::margin($field['margin']);?>  
  <?php Css::padding($field['padding']);?>  
}

#<?php echo $id?> .qx-testimony{
  <?php Css::fonts($field['font']);?>
  <?php Css::prop('color', $field['text_color']);?>  
}
#<?php echo $id?> h4{
  <?php Css::fonts($field['name_font']);?>
  <?php Css::prop('color', $field['name_color']);?>  
}
#<?php echo $id?> .qx-designation{
  <?php Css::fonts($field['designation_font']);?>
  <?php Css::prop('color', $field['designation_color']);?>  
}
#<?php echo $id?> .slick-prev:before, 
#<?php echo $id?> .slick-next:before{
  <?php Css::prop('color', $field['nav_color']);?>  
}