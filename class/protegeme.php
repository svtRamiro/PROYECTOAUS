<?php
define( 'SAFE_HTML_VERSION', 'safe_html.php/0.6' );
if ( !empty( $_GET['source'] ) && $_GET['source']=='safe_html' ) {
  header('Content-Type: text/plain');
  exit( file_get_contents( __FILE__ ) );
}
function strip_attributes ($html, $attrs) {
  if (!is_array($attrs)) {
    $array= array( "$attrs" );
    unset($attrs);
    $attrs= $array;
  }  
 foreach ($attrs AS $attribute) {
    $search[]= "/".$attribute.'\s*=\s*".+"/Uis';
    $search[]= "/".$attribute."\s*=\s*'.+'/Uis";
    $search[]= "/".$attribute."\s*=\s*\S+/i";
  }
  $html= preg_replace($search, "", $html);
  foreach ($search AS $pattern) {
    if (preg_match($pattern, $html)) {
      $html= strip_tags($html);
      break;
    }
  }
  return $html;
}

function js_and_entity_check( $html ) {
  $pattern= "/=[\S\s]*s\s*c\s*r\s*i\s*p\s*t\s*:\s*\S+/Ui";
  if (preg_match($pattern, $html)) {
    return TRUE;
  }
  $pattern= "/<[\S\s]*&#[x0-9]*[\S\s]*>/Ui";
  if (preg_match($pattern, $html)) {
    return TRUE;
  }
  return FALSE;
}
function safe_html ($html, $allowedtags="") {
  if ( js_and_entity_check( $html ) ) {
    $html= strip_tags($html);
    return $html;
  }
  if ($allowedtags=="") {
    $allowedtags= array ( "p"=>1, "br"=>0, "a"=>1, "img"=>0, 
                        "li"=>1, "ol"=>1, "ul"=>1, 
                        "b"=>1, "i"=>1, "em"=>1, "strong"=>1, 
                        "del"=>1, "ins"=>1, "u"=>1, "code"=>1, "pre"=>1, 
                        "blockquote"=>1, "hr"=>0
                        );
  }
  elseif (!is_array($allowedtags)) {
    $array= array( "$allowedtags" );
  }
  $stripallowed= "";
  foreach ($allowedtags AS $tag=>$closeit) {
    $stripallowed.= "<$tag>";
  }
  $html= strip_tags($html, $stripallowed);
  $badattrs= array("on\w+", "style", "fs\w+", "seek\w+");
  $html= strip_attributes($html, $badattrs);
  foreach ($allowedtags AS $tag=>$closeit) {
    if (!$closeit) continue;
    $patternopen= "/<$tag\b[^>]*>/Ui";
    $patternclose= "/<\/$tag\b[^>]*>/Ui";
    $totalopen= preg_match_all ( $patternopen, $html, $matches );
    $totalclose= preg_match_all ( $patternclose, $html, $matches2 );
    if ($totalopen>$totalclose) {
      $html.= str_repeat("</$tag>", ($totalopen - $totalclose));
    }
  }
  if ( js_and_entity_check( $html ) ) {
    $html= strip_tags($html);
    return $html;
  }

  return $html;
}