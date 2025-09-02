<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ foreach in tags 
	@><@ if @{ :i } > 1 @> <@ else @><@ end 
	@><li><a href="@{ urlTagLinkTarget | def (@{ :parent }) }?filter=@{ :tag }"	class="text-blue-600 dark:text-blue-400 hover:underline">#@{ :tag }</a></li>
    <@ end @>