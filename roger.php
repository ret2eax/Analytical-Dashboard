<?php
// Enable Error Reporting

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

   // function _isCurl(){
     //   return function_exists('curl_version');
   // }    
   // if (_iscurl()){
        //curl is enabled
	//$headers = array(
		///'Accept: application/json',
		//'Content-type: application/json',		
		//'X-ApiKeys: accessKey=88ec91a1e4a54925ba36afbf9ca7ef40149466c10e609de2253d4e8fa99f2e05; secretKey=353b24944027ea64cbf85ce5bf75d0db5f6f67014598e4568062d00b51d5e675;',
	//);
	// X-ApiKeys is dependant on not being regenerated from nessus. If access is revoked, revise the access and secret key.
        //$url = "https://192.168.1.230:8834/scans/107";    
        //$ch = curl_init();
        //curl_setopt($ch, CURLOPT_URL, $url); 
	//curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	//curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);                              
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //$output = curl_exec($ch);
	// For cURL Debugging Purposes - Uncomment the below line.
	// echo curl_error($ch);
        //curl_close($ch);


//	$parsed = passthru("python3 python-parser.py");
	exec("python3 python-parser.py", $parsed);
        //print_r($parsed);
       // Curl operations finished            
   // }
   // else{
  //      echo "cURL is disabled";
   // }
?>


<!--


-->


<table class="table">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
													<th>Rank</th>

												</tr>
												<?php	
														//echo var_dump($parsed);
														$test = json_decode($parsed[0]);
														echo var_dump($test);
														foreach ($test as $data) {
														echo '<tr>';
														echo '<td>' . $data->hostname . '</td>';

														echo '</tr>';
													}
													?>
                                               
                                            </tbody>
                                        </table>




<table class="table">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
													<th>Hostname</th>
												</tr>
												<?php	
	//echo($parsed[0]);
//$data = json_decode($parsed);

													//echo $data;
													?>
                                               
                                            </tbody>
                                        </table>






<!--<html>
		<head></head>
		<body><div><h1>test</h1></div>
		<div><?php 
			foreach($parsed as $data){
				//echo json_decode($data);
				echo $data;
			}?></div>
		</body>
</html>-->
