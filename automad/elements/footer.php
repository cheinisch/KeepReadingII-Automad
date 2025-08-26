        <footer class="bg-neutral-200 dark:bg-neutral-950 text-zinc-500 text-gray-800 dark:text-gray-300 w-full pb-2 border-t border-neutral-500 px-2">
            <div class="mx-auto max-w-3xl py-5 flex flex-col md:flex-row justify-between md:items-start items-center">
                <div class="w-full md:max-w-sm mb-4 md:mb-0">
                    <h2>@{ itemFooterHeadline }</h2>
                    <p>@{ itemFooterText }</p>
                </div>
                <div>
                    <nav class="w-full md:w-auto">
                        <ul class="flex flex-wrap justify-center md:justify-start gap-4">
                            <li><a href="index.html">Home</a></li>
                            <li> <a href="blog.html">Blog</a></li>
                            <li><a href="post.html">Post</a></li>
                            <li><a href="page.html">Page</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="mx-auto max-w-3xl border-t border-neutral-500 py-5">
                &copy; 2025 @{ sitename } - Published with Automad
            </div>            
        </footer>
        <script src="/packages/@{ theme }/js/navigation.js"></script>
        @{ itemsTrackingCode }
    </body>
</html>
