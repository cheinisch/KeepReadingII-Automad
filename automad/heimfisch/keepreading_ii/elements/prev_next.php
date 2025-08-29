<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
	<@ newPagelist {
		type: 'siblings',
		sort: 'date desc'   # neu: nach Datum absteigend
	} @>
	<@ if @{ :pagelistCount } @>
			<@ with prev @>
				<@ prev_next-item.php @>
			<@ end @>
			<@ with next @>
				<@ prev_next-item.php @>
			<@ end @>
	<@ end @>