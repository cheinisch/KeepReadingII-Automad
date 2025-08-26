    <@ elements/header.php @>
    <body class="dark:bg-zinc-950">
        <@ elements/navigation.php @>


        <main class="text-zinc-500">
            <article class="w-full py-5">
                <div id="headline" class="mx-auto max-w-3xl px-1">
                    <h1 class="text-3xl text-zinc-800 dark:text-zinc-300">@{ title }</h1>
                    <span class="text-sm">Author Name // <@ elements/date.php @></span>
                </div>
                <@ elements/header-image.php @>
                <@ if not @{ :hideThumbnails } and not @{ iconPanel } @>
                    <@~ header-image.php @>
                    <@ if @{ :imageCard } ~@>
                <div id="headimage" class="mx-auto md:max-w-4xl lg:max-w-5xl py-5">
                    <img src="@{ :imageCard }" class="md:rounded-sm aspect-16/9 object-cover w-full"/>
                </div>                
                    <@~ end ~@>
                <@ end @>    
                <div id="content" class="mx-auto max-w-3xl px-1 md:px-0">
                    <@ if not @{ +main } @>
                        @{ text | markdown }
                    <@ else @>
                        @{ +main }
                    <@ end @>
                </div>
                <@ if @{ tags } @>
                <div id="tagged" class="mx-auto max-w-3xl px-1 pt-8 pb-5 md:px-0">
                    <div class="text-zinc-800 dark:text-zinc-300 text-center w-full text-lg">Tagged with</div>
                    <ul class="mt-2 flex flex-wrap justify-center gap-3">
                        <@ elements/tags.php @>
                    </ul>
                </div>
                <@ end @>                
                <div id="prevnext" class="mx-auto max-w-3xl px-1 mt-12">
                    <@ newPagelist { type: 'siblings' } @>
	                <@ if @{ :pagelistCount } @>
                    <div class="pb-4 text-2xl text-zinc-800 dark:text-zinc-300">Read Next</div>
                    <@ end @>
                    <div id="prevnextwrapper" class="flex flex-col md:flex-row justify-between gap-6">

                        <@ elements/prev_next.php @>

                    </div>
                </div>


            </article>
        </main>
        <@ elements/footer.php @>