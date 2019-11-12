<?php
	include("./api-header.php");


	curl_setopt_array($curl, array(
        CURLOPT_URL => "https://sandbox.monnify.com/api/v1/bank-transfer/reserved-accounts/1222222234",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "DELETE",
        CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJhdWQiOlsibW9ubmlmeS1wYXltZW50LWVuZ2luZSJdLCJzY29wZSI6WyJwcm9maWxlIl0sImV4cCI6MTU3MzU2MTI3MiwiYXV0aG9yaXRpZXMiOlsiTVBFX1JFVFJJRVZFX1JFU0VSVkVEX0FDQ09VTlQiLCJNUEVfREVMRVRFX1JFU0VSVkVEX0FDQ09VTlQiLCJNUEVfUkVUUklFVkVfUkVTRVJWRURfQUNDT1VOVF9UUkFOU0FDVElPTlMiLCJNUEVfSU5JVElBTElaRV9QQVlNRU5UIiwiTVBFX1JFU0VSVkVfQUNDT1VOVCIsIk1QRV9DQU5fUkVUUklFVkVfVFJBTlNBQ1RJT04iXSwianRpIjoiZmRkZmMyNzMtN2NmOC00ZjY0LThiZjYtZWJlNjJmZjUxYWRhIiwiY2xpZW50X2lkIjoiTUtfVEVTVF9XRDdUWkNNUVY3In0.ENneVYbDBauUURMGH3NKbFC0L965M_U_xax9Xrr7zqz7nIr4WS0pa5hNoscskQacSBIUqrp5RChSepUvSHmReXOlw6hfYITvrPqDP8VN0Mv4brpOURkqkNFszedS5uDpKy_VZXali5kAjQabIxZivEmLiaUPayEuURiwSiKg-LQ2NPKPuspHEDS7AFfjk1lFCbvZVoe604rg_CCUOAl1tFOl_NNpymJxGupqWxqEoeOZJrV2wAwjMY1M3Em7vEvin3CYIWDZTdIz-N6eWl6ptGVt_Fon-0UtfODbQXtS3aQlrlX92-lvAOVyWF83vjtRlQVfR0GnGBAkEXtH6jeYRA"
        ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
        echo "cURL Error #:" . $err;
    } else {		
    	echo $response;
    }

?>