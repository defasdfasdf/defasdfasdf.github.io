.qx-element-pricing-table { display: flex; }
.single-table.featured:before { background: #b9b9b9; }
.table-heading { background: #ddd; }

.table-body { background: #f9f9f9; }
.table-body li:last-child { border-bottom: 0; }
.table-body li:empty { padding: 19px; }

.table-footer { background: #ddd; }

@media screen and (max-width: 600px){
.qx-element-pricing-table { flex-direction: column; }
.single-table { max-width: 380px; margin: 0 auto 50px !important; }
.single-table.featured { margin-top: 50px !important; }
}


#<?php echo $id?> .single-table {
margin: 0 15px;
width: 100%;
<?php Css::margin($field['margin']);?>
<?php Css::padding($field['padding']);?>
<?php Css::prop("background-color", $field['bg_color'])?>
<?php Css::prop("color", $field['text_color']); ?>
<?php if($field['border']) : ?>
border-radius: <?php echo $field['border_radius']?>px;
border-width: <?php echo $field['border_width']?>px;
border-style: <?php echo $field['border_style']?>;
border-color: <?php echo $field['border_color']?>;
<?php endif;?>
}

#<?php echo $id?> .single-table:first-child { margin-left: 0; }

#<?php echo $id?> .single-table:last-child { margin-right: 0; }

#<?php echo $id?> .single-table.featured { position: relative; }


#<?php echo $id?> .single-table.featured:before {
  content: "Popular";
  <?php Css::fonts($field['featured_font']); ?>
  <?php Css::prop("background-color", $field['featured_bg_color'])?>
  <?php Css::prop('color', $field['featured_color']);?>
  height: 50px; line-height: 50px;
  position: absolute; top: 0; left: 0; right: 0;
  <?php if($field['border']) : ?>
  left: -<?php echo $field['border_width']?>px;
  right: -<?php echo $field['border_width']?>px;
  <?php endif;?>

  <?php if($field['border']) : ?>
  border-radius: <?php echo $field['border_radius']?>px;
  border-width: <?php echo $field['border_width']?>px;
  <?php Css::prop('border-style', $field['border_style']);?>
  <?php Css::prop('border-color', $field['border_color']);?>
  <?php endif;?>
}


#<?php echo $id?> .table-heading {
<?php Css::prop('background-color', $field['table_heading_bg_color']);?>
<?php Css::padding($field['heading_padding']);?>
}

#<?php echo $id?> .table-heading .title {
<?php Css::fonts($field['title_font']); ?>
<?php Css::prop('color', $field['title_color']);?>
<?php Css::margin($field['title_margin']);?>
}

#<?php echo $id?> .table-heading .description {
<?php Css::fonts($field['description_font']); ?>
<?php Css::prop('color', $field['description_color']);?>
<?php Css::margin($field['description_margin']);?>
}

#<?php echo $id?> .cost { line-height: 1; }

#<?php echo $id?> .table-heading .curency {
<?php Css::fonts($field['curency_font']); ?>
<?php Css::prop('color', $field['curency_color']);?>
}

#<?php echo $id?> .table-heading .amount {
<?php Css::fonts($field['amount_font']); ?>
<?php Css::prop('color', $field['amount_color']);?>
}

#<?php echo $id?> .table-heading .plantype {
<?php Css::fonts($field['plan_font']); ?>
<?php Css::prop('color', $field['plan_color']);?>
}

#<?php echo $id?> .table-body {
<?php Css::prop('background-color', $field['table_body_bg_color']);?>
<?php Css::padding($field['body_padding']);?>
}

#<?php echo $id?> .table-body ul { list-style: none; margin: 0; padding: 0; }

#<?php echo $id?> .table-body li {
<?php Css::padding($field['body_list_item_padding']);?>
<?php if($field['li_border']) : ?>
border-bottom-width: <?php echo $field['li_border_width']?>px;
border-bottom-style: <?php echo $field['li_border_style']?>;
border-bottom-color: <?php echo $field['li_border_color']?>;
<?php endif;?>
}

#<?php echo $id?> .table-footer {
<?php Css::prop('background-color', $field['table_footer_bg_color']);?>
<?php Css::padding($field['footer_padding']);?>
}

<?php if($field['button_style']):?>
#<?php echo $id;?> .qx-btn{
<?php Css::padding($field['button_padding']);?>
<?php Css::prop('background-color', $field['button_bg']);?>
<?php Css::prop('color', $field['button_text']);?>
<?php Css::prop('border-color', $field['button_border_color']);?>
border-width: <?php echo $field['button_border_width']?>px;
border-radius: <?php echo $field['button_border_radius']?>px;
}
#<?php echo $id;?> .qx-btn:hover{
<?php Css::prop('background-color', $field['button_bg_hover']);?>
<?php Css::prop('color', $field['button_text_hover']);?>
<?php Css::prop('border-color', $field['button_border_color_hover']);?>
}
<?php endif;?>


<?php foreach($field['pricing'] as $key => $item):?>
  <?php if ($item['featured'] == 'true')  : ; ?>
    #<?php echo $id?> .single-table.featured:before {
      content: "<?php echo $item['featured_text']?>";
    }
  <?php endif; ?>
<?php endforeach; ?>