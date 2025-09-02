 <?php
http_response_code(404);
$langArray = require './packages/heimfisch/keepreading_ii/lang/lang.en.php';
?>
 
 <# Paglist config #>
				<@~ newPagelist { 
					type: 'children', 
					context: @{ urlContextForPagelist },
					excludeCurrent: true,
					filter: @{ ?filter },
					match: '{"url": "#@{ filterPagelistByUrl }#"}',
					sort: @{ ?sort | def (@{ sortPagelist }) | def('date desc') },
					limit: @{ itemsPerPage | def(8) },
					page: @{ ?page | def(1) }
				} ~@>
				<@ if @{ checkboxShowAllPagesInPagelist } @>
					<@~ pagelist { type: false } ~@>
				<@ end @>
				<# Search results config #>
				<@~ if @{ ?search } ~@>
					<@ pagelist { 
						type: false,
						match: false, 
						search: @{ ?search },
						limit: @{ itemsPerPage | def(8) },
						page: @{ ?page | def(1) } 
					} @>
				<@~ end ~@>

<@ elements/header.php @>

    <body class="bg-neutral-200 dark:bg-neutral-950">
        
		<@ elements/navigation.php @>
        
        <main class="text-zinc-600 dark:text-zinc-300 bg-white dark:bg-zinc-950">
      		<section id="bloglist" class="mx-auto max-w-3xl px-1 py-10">
        		<header class="mb-6">
          			<h1 class="text-3xl font-semibold text-zinc-900 dark:text-zinc-100">@{ title }</h1>
          			<p class="text-sm text-zinc-500 dark:text-zinc-400">Neueste Beiträge</p>
        		</header>
				<@ if @{ ?filter } @>
				<@ else @>
        		<div id="content">
            		@{ +main }
            		@{ text | markdown }
        		</div>
				<@ end @>				
                <ul class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <@ foreach in pagelist @>
						<@ if not @{ checkboxHideBloglist } @>
							<@ elements/bloglist-item.php @>
						<@ end @>
                    <@ end @>
                </ul>
				
				<!-- Pagination -->
				<@ set { :page: @{ ?page | def (1) } } @>
				<@ if @{ :paginationCount } > 1 @>
				<nav class="flex items-center justify-between border-t border-gray-200 px-4 sm:px-0 dark:border-neutral-500 my-3">
				<div class="-mt-px flex w-0 flex-1">
					<@ if @{ :page } > 1 @>	
					<a href="?<@ queryStringMerge { page: @{ :page | -1 } } @>" class="inline-flex items-center border-t-2 border-transparent pt-4 pr-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700 dark:text-gray-400 dark:hover:border-white/20 dark:hover:text-gray-200">
					<svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="mr-3 size-5 text-gray-400 dark:text-gray-500">
						<path d="M18 10a.75.75 0 0 1-.75.75H4.66l2.1 1.95a.75.75 0 1 1-1.02 1.1l-3.5-3.25a.75.75 0 0 1 0-1.1l3.5-3.25a.75.75 0 1 1 1.02 1.1l-2.1 1.95h12.59A.75.75 0 0 1 18 10Z" clip-rule="evenodd" fill-rule="evenodd" />
					</svg>
					<?php echo $langArray['previous']; ?>
					</a>
					<@ end @>
				</div>
				<div class="hidden md:-mt-px md:flex">
					<@ if @{ :paginationCount } > 1 @>
							<@ for @{ :page | -3 } to @{ :page | +3 } @>
								<@ if @{ :i } > 0 and @{ :i } <= @{ :paginationCount } @>
					<@ if @{ :i } = @{ :page } @>
					<span aria-current="page" class="inline-flex items-center border-t-2 border-sky-500 px-4 pt-4 text-sm font-medium text-sky-600 dark:border-sky-400 dark:text-sky-400">@{ :i }</span>
					<@ else @>
					<a href="?<@ queryStringMerge { page: @{ :i } } @>" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700 dark:text-gray-400 dark:hover:border-white/20 dark:hover:text-gray-200">@{ :i }</a>
					<@ end @>
					<@ end @>
							<@ end @>
						<@ end @>
				</div>
				<div class="-mt-px flex w-0 flex-1 justify-end">
					<@ if @{ :page } < @{ :paginationCount } @>
					<a href="?<@ queryStringMerge { page: @{ :page | +1 } } @>" class="inline-flex items-center border-t-2 border-transparent pt-4 pl-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700 dark:text-gray-400 dark:hover:border-white/20 dark:hover:text-gray-200">
					<?php echo $langArray['next']; ?>
					<svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="ml-3 size-5 text-gray-400 dark:text-gray-500">
						<path d="M2 10a.75.75 0 0 1 .75-.75h12.59l-2.1-1.95a.75.75 0 1 1 1.02-1.1l3.5 3.25a.75.75 0 0 1 0 1.1l-3.5 3.25a.75.75 0 1 1-1.02-1.1l2.1-1.95H2.75A.75.75 0 0 1 2 10Z" clip-rule="evenodd" fill-rule="evenodd" />
					</svg>
					</a>
					<@ end @>
				</div>
				</nav>
				<@ end @>
            </content>
        </main>
<@ elements/footer.php @>