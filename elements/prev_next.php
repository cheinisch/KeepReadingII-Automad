<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
	<@ newPagelist {
		type: 'siblings',
		sort: 'date desc'   # neu: nach Datum absteigend
	} @>
	<@ if @{ :pagelistCount } @>
		<div class="md:w-1/2">
			<@ with prev @>
				<@ prev_next-item.php @>
			<@ end @>
		</div>
		<div class="md:w-1/2">
			<@ with next @>
				<@ prev_next-item.php @>
			<@ end @>
		</div>
	<@ end @>