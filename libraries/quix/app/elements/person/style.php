#<?php echo $id?>{
  <?php Css::margin($field['margin']);?>
  <?php Css::padding($field['padding']);?>
  <?php Css::prop("background-color", $field['bg_color'])?>
  <?php if($field['bg_image']):?>
    background-image: url(<?php Css::image($field['bg_image']); ?>);
  <?php endif;?>
}
#<?php echo $id?> h4{
  <?php Css::fonts($field['header_font']);?>
  <?php Css::prop("color", $field['header_color'])?>
  <?php Css::margin($field['header_margin']);?>
}
<?php if($field['icon_color']):?>
  #<?php echo $id?> .qx-icon{ color: <?php echo $field['icon_color']?>; }
<?php endif;?>
<?php if($field['icon_hover_color']):?>
  #<?php echo $id?> .qx-icon:hover:before{ color: <?php echo $field['icon_hover_color']?>; }
<?php endif;?>
#<?php echo $id?> .qx-person-description{
 <?php Css::fonts($field['body_font']);?> 
 <?php Css::prop("color", $field['body_text_color'])?>
 <?php Css::margin($field['body_margin']);?>
}
#<?php echo $id?> .qx-person-position{
 <?php Css::fonts($field['position_font']);?>
 <?php Css::prop("color", $field['position_color'])?> 
}

<?php if(($field['alignment'] == 'center') || ($field['alignment'] == 'right')) : ?>
#<?php echo $id?> .qx-img-responsive { display: inline-block; }
<?php endif; ?>