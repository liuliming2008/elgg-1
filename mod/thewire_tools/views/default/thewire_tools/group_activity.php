<?php

	/**
	 * This view prepends the content layout to check if we need to add a wire add form to the group acivity listing
	 */
  //system_message("ttt".elgg_get_context());
	if (elgg_is_logged_in() && elgg_in_context("group_activity")) 
  {
		$page_owner = elgg_get_page_owner_entity();
		$page = get_input("page");
		
		if (!empty($page_owner) && elgg_instanceof($page_owner, "group")) 
    {
			// check if we're on the activity page
			//if (strpos($page, "activity/" . $page_owner->getGUID()) === 0) 
      {
				// check the plugin setting
				if (elgg_get_plugin_setting("extend_activity", "thewire_tools") == "yes") 
        {
          //elgg_load_css('bootstrap.css');
          elgg_load_js('jquery.textareahelper.js');
					//$vars['filter'] .= elgg_view_form("thewire/add");   
          echo elgg_view_form("thewire/add");    
				}
			}
		}
	}