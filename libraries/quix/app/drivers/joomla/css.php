<?php

/*
 * Css Helper class to reduce repetitive code from style.php
 */

abstract class Css {
  static function fonts( $font ) {
    $css = '';
    $css .= ( array_key_exists( 'family', $font ) AND !is_array($font['family']) AND trim( $font['family'] ) ) ? 'font-family:' . $font['family']. ';' : '';

    $css .= ( array_key_exists( 'family', $font ) AND is_array($font['family']) AND trim( $font['family']['value'] ) ) ? 'font-family:' . $font['family']['value']. ';' : '';

    // $css .= ( array_key_exists( 'family', $font ) AND is_array($font['family']) AND trim( $font['family']['variant'] ) ) ? 'font-weight:' . $font['family']['variant'] . ';' : '';

    $css .= ( array_key_exists( 'size', $font ) AND trim( $font['size'] ) ) ? 'font-size:' . $font['size'] . ';' : '';

    $css .= ( array_key_exists( 'height', $font ) AND trim( $font['height'] ) ) ? 'line-height:' . $font['height'] . ';' : '';

    $css .= ( array_key_exists( 'case', $font ) AND is_array($font['case']) AND array_key_exists('value', $font['case']) AND trim( $font['case']['value'] ) ) ? 'text-transform:' . $font['case']['value'] . ';' : '';

    $css .= ( array_key_exists( 'spacing', $font ) AND trim( $font['spacing'] ) ) ? 'letter-spacing:' . $font['spacing'] . ';' : '';

    $css .= ( array_key_exists( 'bold', $font ) AND trim( $font['bold'] ) ) ? 'font-weight: bold;' : '';
    $css .= ( array_key_exists( 'italic', $font ) AND trim( $font['italic'] ) ) ? 'font-style: italic;' : '';
    $css .= ( array_key_exists( 'underline', $font ) AND trim( $font['underline'] ) ) ? 'text-decoration: underline;' : '';
    echo $css;
  }

  static function margin( $margin ) {
    $css = '';
    $css .= ( isset( $margin['top'] ) AND $margin['top'] ) ? 'margin-top:' . $margin['top'] . ';' : '';
    $css .= ( isset( $margin['bottom'] ) AND $margin['bottom'] ) ? 'margin-bottom:' . $margin['bottom'] . ';' : '';
    $css .= ( isset( $margin['left'] ) AND $margin['left'] ) ? 'margin-left:' . $margin['left'] . ';' : '';
    $css .= ( isset( $margin['right'] ) AND $margin['right'] ) ? 'margin-right:' . $margin['right'] . ';' : '';
    echo $css;
  }

  static function padding( $padding ) {
    $css = '';
    $css .= ( isset( $padding['top'] ) AND $padding['top'] ) ? 'padding-top:' . $padding['top'] . ';' : '';
    $css .= ( isset( $padding['bottom'] ) AND $padding['bottom'] ) ? 'padding-bottom:' . $padding['bottom'] . ';' : '';
    $css .= ( isset( $padding['left'] ) AND $padding['left'] ) ? 'padding-left:' . $padding['left'] . ';' : '';
    $css .= ( isset( $padding['right'] ) AND $padding['right'] ) ? 'padding-right:' . $padding['right'] . ';' : '';
    echo $css;
  }

  static function prop( $prop, $value, $boolean = null ) {
    if ( !$value ) {
      return null;
    }

    if ( is_bool( $value ) ) {
      if ( !$boolean ) {
        return null;
      }

      $value = $boolean;
    }

    echo "{$prop} : $value;";
  }

  //FIXME: check http
  static function image( $path ) {
    $protocalls = array( 'http', 'https', '//' );
    // If we find the protocall in image, return path
    foreach ( $protocalls as $protocall ) {
      if ( strpos( $path, $protocall, 0 ) !== false ) {
        echo $path; 
        return;
      }
    }
    echo \JUri::root( true ) . '/' . $path;
  }
}
