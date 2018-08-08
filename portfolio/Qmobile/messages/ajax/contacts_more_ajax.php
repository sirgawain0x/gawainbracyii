<?php
	include('../includes/loader_ajax.php');
	
	if(isset($_POST['lastid']) && isset($_POST['uid']))
	{
		$lastid = intval($db->escape($_POST['lastid']));
		$lastid = $lastid + $contacts_per_page;
		$user_id = $db->escape($_POST['uid']);
		
		$init_load = true;
		$load_more = true;
		
		if($_POST['tab'] == 'contacts') 
		{ 
			$msg->active_tab = 'contacts';
		} else { 
			$msg->active_tab = 'chats';
		}
				
		include('../html_chat_list.php');
	}
	
?>
