<?php

return array(
	'name' => 'Author Count',
	'version' =>'2.0.0',
	'author' =>'Matt Shearing',
	'author_url' => 'http://adigital.co.uk/',
	'description' => 'Returns the number of entries for each author within a channel.',
	'namespace' => 'Authorcount\Authorcount',
	'plugin.usage' => array(
		'description' => 'Returns the number of entries for each author within a channel.',
		'example' => '{exp:authorcount}',
		'parameters' => array(
			'channel_id' => array(
				'description' => 'The channel you wish to count individual authors entries from',
				'example' => '{exp:authorcount channel_id="6"}
	{name} ({count})
{/exp:authorcount}

Returns
Matt Shearing (2)'
			)
		)
	)
);
/* End of file addon.setup.php */ 
/* Location: /system/user/addons/authorcount/addon.setup.php */