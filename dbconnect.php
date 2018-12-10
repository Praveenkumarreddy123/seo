<?php 
$baseurl = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
/*define('host','localhost');

define('username','root');

define('pswd','');

define('dbname','test');*/

define('host','localhost');

define('username','id3600496_studewsc_test');

define('pswd','pass@9894');

define('dbname','id3600496_studewsc_test');

class db {

public  function __construct() {
                    $this->db=new mysqli(host,username,pswd,dbname);
					 if(mysqli_connect_errno()){
					 echo 'connection failed';
					     }
					else 
					{
					  
						//echo 'connected';
					}

}
public function card_details(){
	 $res= "SELECT * FROM `facebook_post`";
	 $result = mysqli_query($this->db,$res);
	 return $result;
	}
	public function fb_post($wherequery){
	 $res= "SELECT * FROM `facebook_post` WHERE id=".$wherequery;
	 $result = mysqli_query($this->db,$res);
	 return $result;
}
 }



?>