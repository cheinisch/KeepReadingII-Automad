<?php
    use Automad\Core\Config;

    $config = Config::read();
    $rssfeed = $config['AM_FEED_ENABLED'];
?>        
        <footer class="bg-neutral-200 dark:bg-neutral-950 text-zinc-500 text-gray-800 dark:text-gray-300 w-full pb-2 border-t border-neutral-500 px-2">
            <div class="mx-auto max-w-3xl py-5 grid grid-cols-1 md:grid-cols-4 gap-6">
                <!-- 2/4: Über diesen Blog -->
                <section class="md:col-span-2">
                <h2>@{ itemFooterHeadline }</h2>
                <p>@{ itemFooterText }</p>
                </section>

                <!-- 1/4: Navigation -->
                <section class="md:col-span-1">
                <h3 class="text-sm font-semibold uppercase tracking-wide text-zinc-600 dark:text-zinc-400">Some Links</h3>
                <ul class="mt-3 flex flex-col gap-2">
                    <@ newPagelist { type: false, excludeHidden: false } @>
                    <@ foreach in pagelist @>
                        <@ if @{ checkboxShowInFooter } @>
                            <li><a href="@{ url }" class="hover:text-zinc-900 dark:hover:text-zinc-100">@{ title }</a></li>
                        <@ end @>
                    <@ end @>
                </ul>
                </section>                

                <!-- 1/4: Social Media -->
                <section class="md:col-span-1">
                <h3 class="text-sm font-semibold uppercase tracking-wide text-zinc-600 dark:text-zinc-400">Social Media</h3>
                <ul class="mt-3 flex flex-col gap-2">
                    <@ if @{ itemGithub } ~@>
                    <li><a href="https://github.com/@{ itemGithub }" target="_blank" rel="noopener" class="hover:text-zinc-900 dark:hover:text-zinc-100">GitHub</a></li>
                    <@~ end @>
                    <@ if @{ itemInstagram } ~@>
                    <li><a href="https://instagram.com/@{ itemInstagram }" target="_blank" rel="noopener" class="hover:text-zinc-900 dark:hover:text-zinc-100">Instagram</a></li>
                    <@~ end @>
                    <@ if @{ itemTwitter } ~@>
                    <li><a href="https://x.com/@{ itemTwitter }" target="_blank" rel="noopener" class="hover:text-zinc-900 dark:hover:text-zinc-100">X (Twitter)</a></li>
                    <@~ end @>
                    <@ if @{ itemYoutube } ~@>
                    <li><a href="https://youtube.com/@{ itemYoutube }" target="_blank" rel="noopener" class="hover:text-zinc-900 dark:hover:text-zinc-100">YouTube</a></li>
                    <@~ end @>
                    <?php if ($rssfeed == 1) { echo '<li><a href="/feed" class="hover:text-zinc-900 dark:hover:text-zinc-100">RSS</a></li>'; } ?>
                </ul>
                </section>
            </div>    
            <div class="mx-auto max-w-3xl border-t border-neutral-500 py-5">
                &copy; 2025 @{ sitename } - Published with Automad
            </div>            
        </footer>
        <script src="/packages/@{ theme }/js/navigation.js"></script>
        @{ itemsTrackingCode }
    </body>
</html>
