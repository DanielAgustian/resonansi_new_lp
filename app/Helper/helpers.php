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
 $uri = ['marketplacePageV2', 'socMedPageV2', 'landingPageV2', 'warehousePageV2', 'conversionPageV2', 'digitalMarketingPageV2'];
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
function set_active_navbar($uri, $output = ' current'){
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
function timestamp_to_date($timestamp){
    $date = strtotime('now');
    $bulan = [
        "",
        "Januari",
        "Februari",
        "Maret",
        "April",
        "Mei",
        "Juni",
        "Juli",
        "Agustus",
        "September",
        "Oktober",
        "November",
        "Desember",
    ];
    if($timestamp != null){
        $date = strtotime($timestamp);
    }
   

    return date('d', $date) . " " . $bulan[date('n', $date)] . " " . date('Y', $date);
}
