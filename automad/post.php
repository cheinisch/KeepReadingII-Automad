<html>
    <@ elements/header.php @>
    <body class="dark:bg-zinc-950">
        <@ elements/navigation.php @>


        <main class="text-zinc-500">
            <article class="w-full py-5">
                <div id="headline" class="mx-auto max-w-3xl px-1">
                    <h1 class="text-3xl text-zinc-800 dark:text-zinc-300">@{ title }</h1>
                    <span class="text-sm">Author Name // <@ elements/date.php @></span>
                </div>
                <div id="headimage" class="mx-auto md:max-w-4xl lg:max-w-5xl py-5">
                    <img src="img/beach.webp" class="md:rounded-sm aspect-16/9 object-cover w-full"/>
                </div>
                <div id="content" class="mx-auto max-w-3xl px-1 md:px-0">
                    <@ if not @{ +main } @>
                        @{ text | markdown }
                    <@ else @>
                        @{ +main }
                    <@ end @>
                </div>
                <div id="tagged" class="mx-auto max-w-3xl px-1 pt-8 pb-5 md:px-0">
                    <div class="text-zinc-800 dark:text-zinc-300 text-center w-full text-lg">Tagged with</div>
                    <ul class="mt-2 flex flex-wrap justify-center gap-3">
                        <li><a href="#" class="text-blue-600 dark:text-blue-400 hover:underline">#travel</a></li>
                        <li><a href="#" class="text-blue-600 dark:text-blue-400 hover:underline">#blog</a></li>
                        <li><a href="#" class="text-blue-600 dark:text-blue-400 hover:underline">#lifestyle</a></li>
                    </ul>
                </div>
                <div id="prevnext" class="mx-auto max-w-3xl px-1 mt-12">
                    <div class="pb-4 text-2xl text-zinc-800 dark:text-zinc-300">Read Next</div>
                    <div id="prevnextwrapper" class="flex flex-col md:flex-row justify-between gap-6">

                        <!-- Prev -->
                        <div id="prev" class="md:w-1/2">
                        <a href="post-older.html" 
                            class="block relative aspect-[16/9] overflow-hidden md:rounded-sm border border-zinc-200/70 dark:border-zinc-700/70">
                            
                            <!-- Hintergrundbild -->
                            <div class="absolute inset-0 bg-cover bg-center"
                                style="background-image: url('img/berge.jpg');"></div>
                            
                            <!-- Overlay (unten links) -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 p-4">
                            <span class="block text-xs text-zinc-300">24.08.2025</span>
                            <h3 class="text-lg font-semibold text-white">
                                Older Post Title
                            </h3>
                            </div>
                        </a>
                        </div>

                        <!-- Next -->
                        <div id="next" class="md:w-1/2">
                        <a href="post-newer.html" 
                            class="block relative aspect-[16/9] overflow-hidden md:rounded-sm border border-zinc-200/70 dark:border-zinc-700/70">
                            
                            <!-- Hintergrundbild -->
                            <div class="absolute inset-0 bg-cover bg-center"
                                style="background-image: url('img/city.jpg');"></div>
                            
                            <!-- Overlay (unten links) -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 p-4 text-left">
                            <span class="block text-xs text-zinc-300">26.08.2025</span>
                            <h3 class="text-lg font-semibold text-white">
                                Newer Post Title
                            </h3>
                            </div>
                        </a>
                        </div>

                    </div>
                </div>


            </article>
        </main>
        <@ elements/footer.php @>