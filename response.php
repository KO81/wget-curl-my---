<?php 
##########################
## sure u get a response ##
##########################

if(count(get_included_files()) >=1/* 'whatever'*/){
	// good case
}else{
	$adresses=array("https://www.fbi.gov",
                   "https://www.politiet.no/",
                   "http://government.ru/",
                   "https://eservices.police.gov.sg/content/policehubhome/homepage.html",
                   "https://www.lapdonline.org/",
                   "https://www.nsa.gov/"
                   );
  shuffle($adresses);
  header_remove();
  header("Referrer-Policy: no-referrer");
  header('Protocol:'.$_SERVER["SERVER_PROTOCOL"].'');
  header("referer:".$_SERVER['HTTP_X_FORWARDED_FOR'].":".$_SERVER['REMOTE_PORT']."");
  header("knock_knock: i am a suspicious kind a guy");  // hi hi
  header('Location:'.$adresses[1].'');exit;
  
  ########################################
  #
  # $_SERVER['HTTP_X_FORWARDED_FOR'] or $_SERVER['REMOTE_ADDR']
  #
  #######################################
};?>
