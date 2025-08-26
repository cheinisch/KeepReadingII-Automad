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

    <body class="bg-white dark:bg-zinc-950">
        
		<@ elements/navigation.php @>
        
        <main class="text-zinc-600 dark:text-zinc-300">
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
				<div class="pagination">
					<ul class="uk-pagination uk-flex-center" uk-margin>
						<@ set { :page: @{ ?page | def (1) } } @>
						<@ if @{ :page } > 1 @>
							<li><a href="?<@ queryStringMerge { page: @{ :page | -1 } } @>"><span uk-pagination-previous></span></a></li>
						<@ end @>
						<@ if @{ :paginationCount } > 1 @>
							<@ for @{ :page | -3 } to @{ :page | +3 } @>
								<@ if @{ :i } > 0 and @{ :i } <= @{ :paginationCount } @>
									<@ if @{ :i } = @{ :page } @>										
										<li class="uk-active"><span>@{ :i }</span></li>
									<@ else @>
										<li><a href="?<@ queryStringMerge { page: @{ :i } } @>">@{ :i }</a></li>
									<@ end @>
								<@ end @>
							<@ end @>
						<@ end @>
						<@ if @{ :page } < @{ :paginationCount } @>
							<li><a href="?<@ queryStringMerge { page: @{ :page | +1 } } @>"><span uk-pagination-next></span></a></li>
						<@ end @>
					</ul>
				</div>
            </content>
        </main>
<@ elements/footer.php @>