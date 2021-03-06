<?php
/**
* 	Self Check
*
* 	This application provides a method of checking out and renewing materials via a web interface using 3M's SIP2 standard
* 	Thanks to John Wohlers for his sip2 class -this application would not have come about without it
*	
*	If you make additions or other customizations that improve or extend the self check's 
*	functionality I would love to hear about them.
*
*	@author     	Eric Melton <>
* 	@licence    	http://opensource.org/licenses/gpl-3.0.html
* 	@copyright  	Eric Melton <>
*	@version    	1.2
*/



//========================== SIP2 =================================

$sip_hostname = '';

if ($_SERVER['REMOTE_ADDR'] == 'xx.x.x.xxxx'){
	//selfcheck-ob1
	$sip_port = ""; 
    $sip_login=''; 	//if your SIP2 server does not require a username and password leave these empty
    $sip_password='';
} elseif ($_SERVER['REMOTE_ADDR'] == 'xx.x.x.xxx'){
	//selfcheck-ob2
	$sip_port = ""; 
    $sip_login=''; 	//if your SIP2 server does not require a username and password leave these empty
    $sip_password='';
} elseif ($_SERVER['REMOTE_ADDR'] == 'xx.x.x.xxx'){
	//selfcheck-ob3
	$sip_port = ""; 
    $sip_login=''; 	//if your SIP2 server does not require a username and password leave these empty
    $sip_password='';
} elseif ($_SERVER['REMOTE_ADDR'] == 'xx.x.x.xx'){
	//selfcheck-bh1
	$sip_port = ""; 
    $sip_login=''; 	//if your SIP2 server does not require a username and password leave these empty
    $sip_password='';
} elseif ($_SERVER['REMOTE_ADDR'] == 'xx.x.x.xx'){
	//selfcheck-bh2
	$sip_port = ""; 
    $sip_login=''; 	//if your SIP2 server does not require a username and password leave these empty
    $sip_password='';
} elseif ($_SERVER['REMOTE_ADDR'] == 'xx.x.x.xx'){
	//selfcheck-nm1
	$sip_port = ""; 
    $sip_login=''; 	//if your SIP2 server does not require a username and password leave these empty
    $sip_password='';
} elseif ($_SERVER['REMOTE_ADDR'] == 'xx.x.x.xx'){
	//selfcheck-nm2
	$sip_port = ""; 
    $sip_login=''; 	//if your SIP2 server does not require a username and password leave these empty
    $sip_password='';
} elseif ($_SERVER['REMOTE_ADDR'] == 'xx.x.x.xx'){
	//selfcheck-jf1
	$sip_port = ""; 
    $sip_login=''; 	//if your SIP2 server does not require a username and password leave these empty
    $sip_password='';
} elseif ($_SERVER['REMOTE_ADDR'] == 'xx.x.x.xx'){
	//selfcheck-jf2
	$sip_port = ""; 
    $sip_login=''; 	//if your SIP2 server does not require a username and password leave these empty
    $sip_password='';
} elseif ($_SERVER['REMOTE_ADDR'] == 'xx.x.x.xxx'){
	//selfcheck-es1
	$sip_port = ""; 
    $sip_login=''; 	//if your SIP2 server does not require a username and password leave these empty
    $sip_password='';
} elseif ($_SERVER['REMOTE_ADDR'] == 'xx.x.x.xxx'){
	//selfcheck-es2
	$sip_port = ""; 
    $sip_login=''; 	//if your SIP2 server does not require a username and password leave these empty
    $sip_password='';
} elseif ($_SERVER['REMOTE_ADDR'] == 'xx.x.x.xxx'){
	//selfcheck-ce-kids
	$sip_port = ""; 
    $sip_login=''; 	//if your SIP2 server does not require a username and password leave these empty
    $sip_password='';
} elseif ($_SERVER['REMOTE_ADDR'] == 'xx.x.x.xxx'){
	//selfcheck-ce-kids
	$sip_port = ""; 
    $sip_login=''; 	//if your SIP2 server does not require a username and password leave these empty
    $sip_password='';      
} elseif ($_SERVER['REMOTE_ADDR'] == 'xx.x.x.xxx'){
	//selfcheck-ec1
	$sip_port = ""; 
    $sip_login=''; 	//if your SIP2 server does not require a username and password leave these empty
    $sip_password='';
} elseif ($_SERVER['REMOTE_ADDR'] == 'xx.x.x.xxx'){
	//selfcheck-ec2
	$sip_port = ""; 
    $sip_login=''; 	//if your SIP2 server does not require a username and password leave these empty
    $sip_password='';
} elseif ($_SERVER['REMOTE_ADDR'] == 'xx.x.x.xxx'){
	//selfcheck-cs1
	$sip_port = ""; 
    $sip_login=''; 	//if your SIP2 server does not require a username and password leave these empty
    $sip_password='';
}elseif ($_SERVER['REMOTE_ADDR'] == 'xx.x.x.xxx'){
	//selfcheck-cs2
	$sip_port = ""; 
    $sip_login=''; 	//if your SIP2 server does not require a username and password leave these empty
    $sip_password='';
} elseif ($_SERVER['REMOTE_ADDR'] == 'xx.x.x.xx'){
	//selfcheck-sc1
	$sip_port = ""; 
    $sip_login=''; 	//if your SIP2 server does not require a username and password leave these empty
    $sip_password='';
} elseif ($_SERVER['REMOTE_ADDR'] == 'xx.x.x.xx'){
	//selfcheck-sc2
	$sip_port = ""; 
    $sip_login=''; 	//if your SIP2 server does not require a username and password leave these empty
    $sip_password='';
}elseif ($_SERVER['REMOTE_ADDR'] == 'xx.x.x.xx'){
	//selfcheck-sc3
	$sip_port = ""; 
    $sip_login=''; 	//if your SIP2 server does not require a username and password leave these empty
    $sip_password='';
} elseif ($_SERVER['REMOTE_ADDR'] == 'xx.xx.x.xx'){
	//selfcheck-go1
	$sip_port = ""; 
    $sip_login=''; 	//if your SIP2 server does not require a username and password leave these empty
    $sip_password='';
} elseif ($_SERVER['REMOTE_ADDR'] == 'xx.xx.x.xx'){
	//selfcheck-go2
	$sip_port = ""; 
    $sip_login=''; 	//if your SIP2 server does not require a username and password leave these empty
    $sip_password='';
} elseif ($_SERVER['REMOTE_ADDR'] == 'xx.xx.x.xx'){
	//selfcheck-ce1
	$sip_port = ""; 
    $sip_login=''; 	//if your SIP2 server does not require a username and password leave these empty
    $sip_password='';
} elseif ($_SERVER['REMOTE_ADDR'] == 'xx.xx.x.xx'){
	//selfcheck-ce2
	$sip_port = ""; 
    $sip_login=''; 	//if your SIP2 server does not require a username and password leave these empty
    $sip_password='';
} elseif ($_SERVER['REMOTE_ADDR'] == 'xx.xx.x.xx'){
	//selfcheck-ce3
	$sip_port = ""; 
    $sip_login=''; 	//if your SIP2 server does not require a username and password leave these empty
    $sip_password='';
} elseif ($_SERVER['REMOTE_ADDR'] == 'xx.xx.x.xx'){
	//selfcheck-ce-kids
	$sip_port = ""; 
    $sip_login=''; 	//if your SIP2 server does not require a username and password leave these empty
    $sip_password='';

/////////////////////////////	
//Clean up old surfaces	
/////////////////////////////

} elseif ($_SERVER['REMOTE_ADDR'] == 'xx.x.x.xxx'){

	$sip_port = ""; 
    $sip_login=''; 	//if your SIP2 server does not require a username and password leave these empty
    $sip_password='';
} elseif ($_SERVER['REMOTE_ADDR'] == 'xx.x.x.xxx'){
	
	$sip_port = ""; 
    $sip_login=''; 	//if your SIP2 server does not require a username and password leave these empty
    $sip_password='';
    
} elseif ($_SERVER['REMOTE_ADDR'] == 'xx.x.x.xxx'){
	$sip_port = ""; 
    $sip_login=''; 	//if your SIP2 server does not require a username and password leave these empty
    $sip_password='';
    
} elseif ($_SERVER['REMOTE_ADDR'] == 'xxx.xx.xxx.xxx'){
	$sip_port = ""; 
    $sip_login=''; 	//if your SIP2 server does not require a username and password leave these empty
    $sip_password='';
    
} elseif ($_SERVER['REMOTE_ADDR'] == 'xx.xx.x.xxx'){
    $sip_port = "";
    $sip_login='';        //if your SIP2 server does not require a username and password leave these empty
    $sip_password=''; 
    
} elseif ($_SERVER['REMOTE_ADDR'] == 'xxx.xx.xxx.xx'){
    $sip_port = "";
    $sip_login='';        //if your SIP2 server does not require a username and password leave these empty
    $sip_password='';

} else {
	$sip_port = ""; 
    $sip_login=''; 	//if your SIP2 server does not require a username and password leave these empty
    $sip_password='';

}


	



//========================== Site Rules ==============================
$sc_location='CE';//enter a name for the self-check's location (e.g. 'East Branch') to track transactions in your SIP2 logs (in Polaris this is required and is the numeric organization ID)
$allow_manual_userid_entry=true;
$show_fines=true;
$show_available_holds=true;
$allow_email_receipts=true;
$display_php_errors='off'; //off or on
$hide_cursor_pointer=true; //hides default cursor pointer -should probably set to true on live self check


//========================== Logging =================================
/*	
	use the query below to setup the mysql table (if you change the table name set 
	the variable $log_table_name below equal to that new table name)
	
	CREATE TABLE `self_check_stats`
	(`id` int( 11 ) NOT NULL AUTO_INCREMENT ,
	`location` varchar( 50 ) DEFAULT NULL ,
	`count` int( 11 ) NOT NULL DEFAULT '0',
	`sessions` int( 11 ) NOT NULL DEFAULT '0',
	`timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ,
	PRIMARY KEY ( `id` ));
	
*/
//====================================================================
$use_mysql_logging=true;	/* log your selfcheck checkout count by month? 
							use the query above to set up the table */
$log_table_name='self_check_stats';

//mysql connection info (ignore this if you're not using mysql logging)
$dbhostname = "localhost";
$database = "selfcheck";
$dbusername = "selfcheck";
$dbpassword = "";

//====================== SIP2 Responses  ==============
/*
	GET YOUR SYSTEM'S RESPONSE MESSAGES BY ENTERING YOUR SIP2 CONNECTION INFO ABOVE THEN OPENING responses.php 
	IN YOUR BROWSER-THEY MUST BE KEPT UP TO DATE!
	These are case INsensitive. 
*/
//====================================================================
$already_ckdout_to_you='Item already charged to this user'; //item already out to this borrower response

//====================== Wording, SMTP, & Other Variables ==============
$currency_symbol='$';
$due_date_format='M-d-Y'; //see http://php.net/manual/en/function.date.php for information on formatting dates
$inactivity_timeout=40000; //time of inactivity before showing inactive prompt (in milliseconds)
$account_check_timeout=15000; //time of inactivity after patron card scan before showing out of order page (in milliseconds)
$patron_id_length=''; //length of patron barcode or other id (leave empty if this varies)
$online_catalog_url='http://gvpl.ca'; 	/*leave blank if you don't have one or if your catalog does
							not allow renewals (this is for printing on the paper receipt and 
							sending in the email receipt info about renewing online)*/
							
//smtp (for emailing receipts)
$smtp_host="mx.gvpl.ca"; 
$smtp_authentication=false;
$smtp_username='';
$smtp_pwd='';

//wording
$library_name= "Greater Victoria Public Library";
$module_name='Self Checkout'; //shows on pages/home.php and pages/checkout.php
$email_from_name="no-reply@gvpl.ca"; //library's email name
$email_from_address="no-reply@gvpl.ca"; //library's email address
$admin_emails=''; //comma delimted list of email addresses that should be notified should the self-check go out of order
$email_subject='Greater Victoria Public Library Self-Checkout Receipt'; //subject of email receipt
$intro_screen_text="Scan your library card to begin"; //shown on pages/home.php
$welcome_screen_text="Please scan item to checkout!";	//shown on includes/welcome.php
$welcome_screen_subtext="";
$renewal_prompt_text='is already checked out to your account.<br />Would you like to try to renew it?';
$out_of_order_head='Out of Service'; //shown on pages/out_of_order.php
$out_of_order_text='We are working to fix the problem'; //shown on pages/out_of_order.php

//====================== Paper & Email Receipts ==============
/* add elements to or remove elements from the header & footer arrays below to manipulate that piece of the receipt.
the elements will appear on separate lines of the receipt in the order that you place them below */ 
$receipt_header[]='Checkout Receipt';
$receipt_header[]=$library_name;
$receipt_footer[]='You can renew your books at:';
$receipt_footer[]=$online_catalog_url;
$receipt_footer[]='Cards & Accounts


/*place the following in the order you want the elements to appear in the item list on the 
paper and email receipts. remove (or comment out) any elements you don't want included.
element options include item_barcode, title, due_date, and call_number */
$receipt_item_list_elements[]='title';
$receipt_item_list_elements[]='call_number';
$receipt_item_list_elements[]='item_barcode';
$receipt_item_list_elements[]='due_date';

//========================= Sounds & Images ==========================
	//sounds
$error_sound="sounds/error.mp3";
$welcome_sound="sounds/welcome.mp3";
$note_sound="sounds/note.mp3";

	//images  (you need to uncomment one -and only one- line from each group). 
/*
	Keep in mind these are not the image files names -they are just meant to trigger the showing 
	of the types of images listed here. For further customization, images are loaded in the following files: 
	pages/checkout.php , pages/home.php, and includes/welcome.php 
*/

	//======= group 1: home page images of library card =======
//$card_image='gvplkids';
$card_image='barcoded';
//$card_image='magnetic';

	//======= group 2: home and checkout page images of book ==
$item_image='barcoded';
//$item_image='nonbarcoded';


//======================= Action Balloons =======================
/*

The following settings determine what types of materials will prompt the self check to issue an
action message (a short message accompanied by a beep sound) upon checkout. You may want borrowers to unlock the cases of 
or desensitize certain types of items, for example, or give a reminder that a particular type of item has a 
shorter checkout period than other items like it. 

Each item that requires an action can have its action message triggered by 1) its item type OR 2) its permanent location.

Each action balloon requires 2 variables set up in the following format:

1) $action_balloon[item type OR permanent location]['action_message']=action message;
2) $action_balloon[item type OR permanent location]['trigger']='item type' OR 'permanent location' OR 'call number prefix';

2 examples:
$action_balloon['CD']['action_message']='Please place your CDs inside one of the plastic bags near this station';
$action_balloon['CD']['trigger']='permanent location';

$action_balloon['EXPRESS DVDS']['action_message']='Express DVDs checkout for 3 days';
$action_balloon['EXPRESS DVDS']['trigger']='item type';

*/
//======================================================================
$action_balloon_bg_color='#f1cae1'; //background color for action balloons
//$action_balloon['CD']['action_message']='Please place your CDs inside one of the plastic bags near this station';
//$action_balloon['CD']['trigger']='permanent location';


//==================================== Allowed IPs =======================
/*
	list each allowed ip on a new line as $allowed_ip[]='IP'; 
	example: $allowed_ip[]='192.168.0.2';
		   $allowed_ip[]='192.168.0.4';
*/
$allowed_ip[]=''; //leave empty if you've already limited access to the self check via your server (Apache, IIS, etc.)

//==================================== Don't edit below this line =======================
if (!in_array($_SERVER['REMOTE_ADDR'],$allowed_ip) && !empty($allowed_ip[0])){ 
	exit;
}
ini_set('display_errors', $display_php_errors);
?>
