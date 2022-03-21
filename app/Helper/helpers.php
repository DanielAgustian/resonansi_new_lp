<?php

function set_none_navbar($uri, $output = ' d-none')
{
 if( is_array($uri) ) {
   foreach ($uri as $u) {
     if (Route::is($u)) {
       return $output;
     }
   }
 } else {
   if (Route::is($uri)){
     return $output;
   }
 }
}

function set_none_list( $output = ' d-none')
{
 $uri = ['marketplacePageV2', 'socMedPageV2', 'landingPageV2', 'warehousePageV2', 'conversionPageV2'];
 if( is_array($uri) ) {
   foreach ($uri as $u) {
     if (Route::is($u)) {
       return $output;
     }
   }
 } else {
   if (Route::is($uri)){
     return $output;
   }
 }
}