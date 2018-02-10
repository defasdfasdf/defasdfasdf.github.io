<?php

function quix_js_data() {
 $url = QUIX_SITE_URL;
 $quix = quix();

 $id = array_get( $_GET, 'id' );
 $presets = $quix->getPresets();
 $nodes = json_encode( $quix->getNodes() );
 // $model = $_GET['view'];
 $model = 'page';
 $api = 'index.php?option=com_quix&task=' . $model . '.apply';
 $collections = qxGetCollections( true );
 $_token = '08695c5ef9115d468602846a646fdd98';

 $elements = $quix->getElements();

 $type = array_get( $_GET, 'type' );

 $quixData = json_encode( compact(
   'type',
   '_token',
   'collections',
   'model',
   'id',
   'api',
   'url',
   'presets',
   'nodes',
   'elements'
 ) );

  ?>

  var qx_site_url = '<?php echo file_get_contents(dirname(__DIR__) . '/wordpress/dummyData/url.json') ?>';
  var qx_elements = <?php echo file_get_contents(dirname(__DIR__) . '/wordpress/dummyData/elements.json') ?>;
  var qx_nodes = <?php echo file_get_contents(dirname(__DIR__) . '/wordpress/dummyData/nodes.json') ?>;
  var quix = <?php echo file_get_contents(dirname(__DIR__) . '/wordpress/dummyData/quixData.json') ?>;


  <?php
}

function quix_footer() {
  ?>
  <script><?php  quix_js_data();  ?></script>
  <script src="<?php echo QUIX_SITE_URL ?>/assets/builder/bundle.js"></script>
  <?php
}

function quix_footer_credit() {
  return '<footer id="footer">
    <a href="https://www.themexpert.com/quix-pagebuilder" target="_blank">The Quix Builder</a> version <strong>' . QUIX_VERSION . '</strong> brought to you by <a href="https://www.themexpert.com">ThemeXpert</a> team.
  </footer>';
}


function quix_header() {

   //Assets::Js('Quix-Tinymce',  'http://localhost:8000/media/editors/tinymce/tinymce.min.js' , [ ], [ ], null, 1);
   Assets::Js('Quix-Materialize', ROOT_URI . '/assets/js/materialize.js' , [ ], [ ], null, 1);

   Assets::Css('Quix-spinner', ROOT_URI . '/assets/css/spinner.css' , [ ], [ ], null, 1);
   Assets::Css('Quix-Materialize',  ROOT_URI . '/assets/css/materialize.css' , [ ], [ ], null, 1);
   Assets::Css('Quix-Font-Awesome', ROOT_URI . '/assets/css/font-awesome.min.css', [ ], [ ], null, 1);

   Assets::Js('Quix-Magnific-Pop', ROOT_URI . '/assets/js/jquery.magnific-popup.js', [ ], [ ], null, 1);
   Assets::Css('Quix-Magnific-Popup', ROOT_URI . '/assets/css/magnific-popup.css', [ ], [ ], null, 1);
}

function removeCoreAssets() {
  $document = JFactory::getDocument();
  $bootstrap_css = ROOT_URI . '/media/jui/css/bootstrap.css';
  $bootstrap_js =  ROOT_URI . '/media/jui/js/bootstrap.min.js';
  $template =  ROOT_URI . '/administrator/templates/isis/css/template.css?' . $document->getMediaVersion();
  $template_js =  ROOT_URI . 'administrator/templates/isis/js/template.js?' . $document->getMediaVersion();

  unset( $document->_styleSheets[$bootstrap_css] );
  unset( $document->_styleSheets[$template] );
  unset( $document->_scripts[$bootstrap_js] );
  unset( $document->_scripts[$template_js] );
}

function quixRenderItem( $data ) {
  // jQuery easing
  Assets::Js('Quix-Jquery-easing', ROOT_URI . "/assets/js/jquery.easing.js" , [ ], [ ], null, 1);
  // Bootstrap
  Assets::Css('Quix-Quixtrap',  ROOT_URI . "/assets/css/quixtrap.css", [ ], [ ], null, 1);
  // WOW + Animation
  Assets::Css('Quix-Animate',  ROOT_URI . "/assets/css/animate.min.css", [ ], [ ], null, 1);
  Assets::Js('Quix-Wow', ROOT_URI . "/assets/js/wow.js", [ ], [ ], null, 1);
  // FontAwesome
  Assets::Css('Quix-Font-Awesome', ROOT_URI . "/assets/css/font-awesome.min.css", [ ], [ ], null, 1);
  // Magnific popup
  // TODO : Compress + minify with own enque script
  Assets::Css('Quix-Magnific-Popup', ROOT_URI . "/assets/css/magnific-popup.css", [ ], [ ], null, 1);
  Assets::Js('Quix-Magnific-Popup',  ROOT_URI . "/assets/js/jquery.magnific-popup.js", [ ], [ ], null, 1);
  // Quix
  Assets::Css('Quix-Quix', ROOT_URI . "/assets/css/quix.css", [ ], [ ], null, 1);
  Assets::Js('Quix-Quix',  ROOT_URI . "/assets/js/quix.js", [ ], [ ], null, 1);

  ob_start();
  ?>
  <div id="quix" class="qx">
    <div class="qx-inner">
      <?php $data = json_decode( $data, true ); ?>
      <?php $quix = quix(); ?>
      <?php $fonts = $quix->getWebFontsRenderer()->getUsedFonts( $data ); ?>
      <?php $style = $quix->getStyleRenderer()->render( $data ); ?>
      <?php $view = $quix->getViewRenderer()->render( $data ); ?>

      <?php echo "<style>{$style}</style>"; ?>

      <?php echo $view ?>
    </div>
  </div>
  <?php

  return ob_get_clean();
}
