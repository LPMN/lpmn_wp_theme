<?php
	print ('executing php...<br>');
	 require_once "/Users/jsoucheray/Sites/lib/wp-content/plugins/civicrm/civicrm.settings.php";
	 require_once 'CRM/Core/Config.php';
	 $config = CRM_Core_Config::singleton( );
	 require_once 'api/api.php';
	 print ('connected to CiviCRM api 3<br><br>');
	 $contact = civicrm_api('Contact','Get',array('first_name' => 'Wool', 'last_name' => 'Man', 'version' =>3));
	 print_r($contact);
	// THIS SCRIPT PROCESS ANY FORM AND ADDS IT TO CIVICRM
	if ($_POST) {
		require_once('../../../../wp-blog-header.php');

		$post_data = $_POST;
		$post_data->version = 3;

		$contact = civicrm_api('Contact','create',$post_data);
		echo json_encode($contact);

	} else {
		echo 'no post data';
	}
?>