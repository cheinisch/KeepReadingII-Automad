<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<div class="uk-child-width-1-2@s uk-text-center prev-next-list" uk-grid>
	<@ newPagelist { type: 'siblings' } @>
	<@ if @{ :pagelistCount } @>
		<div>
			<@ with prev @>
				<@ prev_next-item.php @>
			<@ end @>
		</div>
		<div>
			<@ with next @>
				<@ prev_next-item.php @>
			<@ end @>
		</div>
	<@ end @>
</div>