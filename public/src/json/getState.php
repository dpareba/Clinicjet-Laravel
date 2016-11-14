<?php

use Illuminate\Support\Facades\DB;

if (isset($_GET['countryid'])) {

    $countryid = $_GET['countryid'];
  
    $query = DB::table('states')->where('country_id',$countryid);
 	dd($query);
    echo json_encode($query);
}

?>
      


