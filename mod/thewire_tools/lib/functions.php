<?php

	function thewire_tools_groups_enabled() {
		static $result;
		
		if (!isset($result)) {
			$result = false;
			
			if (elgg_get_plugin_setting("enable_group", "thewire_tools") == "yes") {
				$result = true;
			}
		}
		
		return $result;
	}
	
	function thewire_tools_get_wire_length() {
		static $result;
		
		if (!isset($result)) {
			$result = 140;
			
			if (($setting = (int) elgg_get_plugin_setting("wire_length", "thewire_tools")) && ($setting > 0)) {
				$result = $setting;
			}
		}
		
		return $result;
	}
	
	function thewire_tools_save_post($text, $userid, $access_id, $parent_guid = 0, $method = "site") {
		
		// set correct container
		$container_guid = $userid;
		
		// check the access id
		if ($access_id == ACCESS_PRIVATE) {
			// private wire posts aren"t allowed
			$access_id = ACCESS_LOGGED_IN;
		} elseif (thewire_tools_groups_enabled()) {
			// allow the saving of a wire post in a group (if enabled)
			if (!in_array($access_id, array(ACCESS_FRIENDS, ACCESS_LOGGED_IN, ACCESS_PUBLIC))) {
				// try to find a group with access_id
				$group_options = array(
					"type" => "group",
					"limit" => 1,
					"metadata_name_value_pairs" => array(
						"group_acl" => $access_id
					)
				);
					
				if ($groups = elgg_get_entities_from_metadata($group_options)) {
					$group = $groups[0];
						
					if ($group->thewire_enable == "no") {
						// not allowed to post in this group
						register_error(elgg_echo("thewire_tools:groups:error:not_enabled"));
							
						// let creation of object fail
						return false;
					} else {
						$container_guid = $group->getGUID();
					}
				}
			}
		}
		
		// create the new post
		$post = new ElggObject();
	
		$post->subtype = "thewire";
		$post->owner_guid = $userid;
		$post->container_guid = $container_guid;
		$post->access_id = $access_id;
	
		// only xxx characters allowed (see plugin setting)
		$text = elgg_substr($text, 0, thewire_tools_get_wire_length());
	
		// no html tags allowed so we escape
		$post->description = htmlspecialchars($text, ENT_NOQUOTES, "UTF-8");
	
		$post->method = $method; //method: site, email, api, ...
	
		if ($tags = thewire_get_hashtags($text)) {
			$post->tags = $tags;
		}
	
		// must do this before saving so notifications pick up that this is a reply
		if ($parent_guid) {
			$post->reply = true;
		}
	
		$guid = $post->save();
	
		// set thread guid
		if ($parent_guid) {
			$post->addRelationship($parent_guid, "parent");
			
			// name conversation threads by guid of first post (works even if first post deleted)
			$parent_post = get_entity($parent_guid);
			$post->wire_thread = $parent_post->wire_thread;
		} else {
			// first post in this thread
			$post->wire_thread = $guid;
		}
	
		if ($guid) {
			add_to_river("river/object/thewire/create", "create", $post->owner_guid, $post->guid);
	
			// let other plugins know we are setting a user status
			$params = array(
				"entity" => $post,
				"user" => $post->getOwnerEntity(),
				"message" => $post->description,
				"url" => $post->getURL(),
				"origin" => "thewire",
			);
			elgg_trigger_plugin_hook("status", "user", $params);
		}
		
		return $guid;
	}
  
  function get_user_by_name($username) {
	global $CONFIG, $USERNAME_TO_GUID_MAP_CACHE;

	// Fixes #6052. Username is frequently sniffed from the path info, which,
	// unlike $_GET, is not URL decoded. If the username was not URL encoded,
	// this is harmless.
	$username = rawurldecode($username);

	$username = sanitise_string($username);
	$access = _elgg_get_access_where_sql();

	// Caching
	if ((isset($USERNAME_TO_GUID_MAP_CACHE[$username]))
			&& (_elgg_retrieve_cached_entity($USERNAME_TO_GUID_MAP_CACHE[$username]))) {
		return _elgg_retrieve_cached_entity($USERNAME_TO_GUID_MAP_CACHE[$username]);
	}

	$query = "SELECT e.* FROM {$CONFIG->dbprefix}users_entity u
		JOIN {$CONFIG->dbprefix}entities e ON e.guid = u.guid
		WHERE u.name = '$username' AND $access";

	$entity = get_data_row($query, 'entity_row_to_elggstar');
	if ($entity) {
		$USERNAME_TO_GUID_MAP_CACHE[$username] = $entity->guid;
	} else {
		$entity = false;
	}

	return $entity;
}
