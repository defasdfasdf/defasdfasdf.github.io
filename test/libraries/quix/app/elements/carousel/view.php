<?php
  // HTML class
  $classes = classNames( "qx-element qx-element-{$type} {$field['class']}", $visibilityClasses,[
    'qx-text-left' => $field['alignment'] === 'left',
    'qx-text-center' => $field['alignment'] === 'center',
    'qx-text-right' => $field['alignment'] === 'right'
  ]);

  $animation_class = ($field['animation']) ? 'wow ' . $field['animation'] : '';
  // Animation delay
  $animation_delay = '';
  if( $field['animation'] AND array_key_exists('animation_delay', $field) ){
    $animation_delay = 'data-wow-delay="'. $field['animation_delay'] .'s"';
  }
  // Hover animation
  $hover_animation = ($field['hover_animation']) ? " qx-hvr-{$field['hover_animation']}" : '' ;
  // css
  Assets::Css('qx-slick', QUIX_URL."/assets/css/slick.css");
  
  // JS script
  Assets::Js('qx-slick', QUIX_URL."/assets/js/slick.min.js");
  
  // RTL detection
  $direction = Jfactory::getDocument()->direction;

  $script = array();
  $script[] = 'slidesToShow: ' . $field['slides_count'];
  $script[] = 'slidesToScroll: ' . $field['slides_scroll'];
  $script[] = ($field['arrows']) ? 'arrows:true' : 'arrows:false';
  $script[] = ($field['dots']) ? 'dots:true' : 'dots:false';
  $script[] = ($field['autoplay']) ? 'autoplay:true' : 'autoplay:false';
  $script[] = 'autoplaySpeed:' . $field['autoplay_speed'];
  $script[] = 'infinite: true';
  if( 'rtl' == $direction ){ $script[] = 'rtl:true'; }
  $script[] = 'responsive:[
    { breakpoint: 768, settings: { slidesToShow: '. (($field['slides_tablet']) ? ($field['slides_tablet']) : '3') .', slidesToScroll: ' . (($field['slides_tablet']) ? ($field['slides_tablet']) : '3') . '} },
    { breakpoint: 480, settings: { slidesToShow: '. (($field['slides_mobile']) ? ($field['slides_mobile']) : '1') .', slidesToScroll: '. (($field['slides_mobile']) ? ($field['slides_mobile']) : '1') .' } }
  ]';
?>

<div id="<?php echo $id; ?>" class="<?php echo $classes; ?>" dir="<?php echo $direction; ?>">
    <?php foreach( $field['carousels'] as $carousel ):?>
      <?php $animation_delay += 0.1;?>
      <div class="qx-carousel-item <?php echo $animation_class . $hover_animation?>" <?php echo $animation_delay; ?> >
        <?php if( $carousel['link']['url'] ):?>
          <a href="<?php echo $carousel['link']['url'] ?>" <?php echo ( $carousel['link']['target'] ) ? ' target="_blank" rel="noopener noreferrer"' : '' ?> >
        <?php endif;?>
          <img class="<?php echo $field['image_style']?>" src="<?php echo $carousel['image']?>" alt="<?php echo $carousel['title']?>">
        <?php if( $carousel['link']['url'] ):?>
          </a>
        <?php endif;?>
        <?php if( $field['enable_title_caption'] ):?>
          <h4 class="qx-carousel-title"><?php echo $carousel['title']?></h4>
          <div class="qx-carousel-caption"><?php echo $carousel['caption']?></div>
        <?php endif;?>
      </div>
    <?php endforeach;?>
</div>

<?php
  Assets::js( 'qx-carousel-'. $id, QUIX_ELEMENTS_PATH . '/carousel/inline-js.php', compact(['id', 'script']), ['qx-slick']);
?>
<!-- qx-element-carousel -->