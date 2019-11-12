<?php
    $curl = curl_init();
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false); // Just to carry out test
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);//  Just to carry out test
?>