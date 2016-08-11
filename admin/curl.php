<?php
$curl = curl_init('http://jobsearch.monsterindia.com/location/jobs-by-location.html');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
 
$page = curl_exec($curl);
 
if(curl_errno($curl)) // check for execution errors
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}
 
curl_close($curl);

//$reg= '/<div class="cell brdr">(.*?)<\/div>/s';
$regex = '/<div class="tabcommnh">(.*)<\/div>/s';
 header("Content-type: application/vnd.ms-word");
  header("Content-Disposition: attachment;Filename=document_name.xls");    
  echo "<html>";
  echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";
  echo "<body><table>";
if ( preg_match($regex, $page, $list) )
  { // echo $list[1];
  	
  echo "<tr><td><b>".$list[0]."</b><tr></td> \t \n ";


    //echo $list[2];

}
else 
 {  print "Not found"; 
}
  echo "</table></body>";
  echo "</html>";

echo "</body>";
echo "</html>";

?>