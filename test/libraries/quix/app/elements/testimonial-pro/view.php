<?php
  // HTML class
  $classes = classNames( "qx-element qx-element-{$type} {$field['class']}", $visibilityClasses,[
    'qx-text-left' => $field['alignment'] === 'left',
    'qx-text-center' => $field['alignment'] === 'center',
    'qx-text-right' => $field['alignment'] === 'right'
  ]);

  // css
  Assets::Css('qx-slick', QUIX_URL."/assets/css/slick.css");
  // JS script
  Assets::Js('qx-slick', QUIX_URL."/assets/js/slick.min.js");
  // RTL detection
  $direction = Jfactory::getDocument()->direction;

  $script = array();
  $script[] = 'fade: true';
  $script[] = 'infinite: true';
  $script[] = 'adaptiveHeight: true';
  $script[] = ($field['arrows']) ? 'arrows:true' : 'arrows:false';
  $script[] = ($field['dots']) ? 'dots:true' : 'dots:false';
  $script[] = ($field['autoplay']) ? 'autoplay:true' : 'autoplay:false';
  if( 'rtl' == $direction ){ $script[] = 'rtl:true'; }
  $script[] = 'autoplaySpeed:' . $field['autoplay_speed'];
?>

<div id="<?php echo $id; ?>" class="<?php echo $classes; ?>" dir="<?php echo $direction; ?>">
    <?php foreach( $field['testimonials'] as $testimonial ):?>
      <div class="qx-testimonial">
        <div class="qx-testimony"><?php echo $testimonial['testimony']?></div>
        
        <?php if($testimonial['image']):?>
          <img class="qx-img-responsive <?php echo $field['image_style']?>" src="<?php echo $testimonial['image']?>" alt="<?php echo $testimonial['name']?>">
        <?php endif;?>
        
        <h4><?php echo $testimonial['name']?></h4>
        <p class="qx-designation qx-text-muted"><?php echo $testimonial['company']?></p>
      </div>
    <?php endforeach;?>
</div>

<?php
  Assets::js( 'qx-testimonial-'. $id, QUIX_ELEMENTS_PATH . '/testimonial-pro/inline-js.php', compact(['id', 'script']), ['qx-slick']);
?>
<!-- qx-element-testimonial-pro -->