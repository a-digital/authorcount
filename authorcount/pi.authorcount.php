<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$info = ee('App')->get('authorcount');

class Authorcount {
	public $return_data = '';

	function Authorcount() {
		$vars = "";
		//Get parameters
    	$channel = ee()->TMPL->fetch_param('channel_id');
    	
    	$members = ee('Model')->get('Member')
    		->all();
    	
    	foreach ($members as $member) {
	    	$data = "";
	    	$count = 0;
	    	$entries = ee('Model')->get('ChannelEntry')
	    		->filter('channel_id', $channel)
	    		->filter('author_id', $member->member_id)
	    		->all();
	    	foreach ($entries as $entry) {
		    	$count++;
	    	}
	    	if ($count != 0) {
		    	$data["mem_id"] = $member->member_id;
		    	$data["mem_name"] = $member->screen_name;
		    	$data["counted"] = $count;
		    	$vars[] = $data;
	    	}
    	}
		$this->return_data = ee()->TMPL->parse_variables(ee()->TMPL->tagdata, $vars);
	}
	
	function get_name() {
		//Get parameters
    	$author = ee()->TMPL->fetch_param('author');	
		
		//Database query
		$member = ee('Model')->get('Member')
			->filter('member_id', $author);
		if ($member->count() != 0) {
			$member = $member->first();
			return $member->screen_name;
		} else {
			return '{redirect="404"}';
		}
	}
}
/* End of file pi.authorcount.php */ 
/* Location: /system/user/addons/authorcount/pi.authorcount.php */