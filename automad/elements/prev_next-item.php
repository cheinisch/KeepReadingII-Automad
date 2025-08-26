                    <div class="md:w-1/2">
                        <a href="@{ url }"
                            class="group block relative aspect-[16/9] overflow-hidden md:rounded-sm border border-zinc-200/70 dark:border-zinc-700/70 border-[0.5px] focus:outline-none focus:ring-2 focus:ring-blue-500"
                            aria-label="@{ title }">
                            <!-- BG -->
                            <@ header-image.php @>
                            <div class="absolute inset-0 bg-zinc-100 dark:bg-zinc-900 bg-center bg-cover transition-transform duration-300 group-hover:scale-105"
                                style="background-image:url('@{ :imageCard }')"></div>
                            <!-- Gradient -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-black/20 to-transparent"></div>
                            <!-- Content unten links -->
                            <div class="absolute bottom-0 left-0 p-4">
                                <time datetime="<@ date.php @>" class="block text-xs text-zinc-300"><@ date.php @></time>
                                <h2 class="mt-0.5 text-lg font-semibold text-white line-clamp-2">@{ title }</h2>
                            </div>
                            </a>
                    </div>