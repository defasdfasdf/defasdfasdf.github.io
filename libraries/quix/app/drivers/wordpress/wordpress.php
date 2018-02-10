<?php

// why need this function in joomla???
// Load module by id
if ( !function_exists( 'qxModuleById' ) ) {
  function qxModuleById( $id, $style = 'raw' ) {

    $db = JFactory::getDBo();
    $query = $db->getQuery( true );
    $query->select( '*' )
          ->from( '#__modules' )
          ->where( 'id = ' . $id );
    $db->setQuery( $query );
    $module = $db->loadObject();
    $mparams = json_decode($module->params);
    $params = array( 'style' => ( isset($mparams->style) ? $mparams->style : $style) );
    $moduleinfo = JModuleHelper::getModule( $module->module, $module->title );
    $info = (object) array_merge((array) $moduleinfo, (array) $module);
    return JModuleHelper::renderModule( $info, $params );
  }
}

if ( !function_exists( 'qxGetCollections' ) ) {
  function qxGetCollections( $details = false ) {
    // from collection table.
    return [];
      return [
            'id' => 1,
            'alias' => 'joomla-article',
            'status' => 1,
            'params' => 'ff'
      ];
  }
}

if ( !function_exists( 'qxGetElementsInfo' ) ) {
  function qxGetElementsInfo( $details = false ) {
      // from element table
    return [];
  }
}


// no need in wordpress
function quix_default_template() {

    return '';
}

function qxGetCollectionById( $id ) {
    // from collection table by id.
    // [Question] why check admin??? whats the use of else snippet

    return [];
}

/**
 * @return mixed
 */
function qxGetComponentInfo() {

    // need extension table to hold all components information.
    // the data format given below
    //{"name":"com_quix","type":"component","creationDate":"2016-05-03","author":"ThemeXpert","copyright":"Copyright (C) 2015. All rights reserved.","authorEmail":"info@themexpert.com","authorUrl":"http:\/\/www.themexpert.com","version":"1.1.0","description":"Page builder for Joomla","group":"","filename":"quix"}
  return $componentInfo = [
      'version' => 1
  ];
}
