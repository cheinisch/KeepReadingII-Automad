<?php
    use Automad\Core\Config;

    $config = Config::read();
    $rssfeed = $config['AM_FEED_ENABLED'];
?>
        <@ set { ":hideSecondLevel": @{ checkboxHideSecondLevelNavbar } } @>
        <@ with '/' @>
        <@ newPagelist { type: 'children' } @>

        <header class="sticky top-0 z-50 bg-white/80 dark:bg-zinc-950/80 backdrop-blur border-b border-zinc-200 dark:border-zinc-800">
        <div class="mx-auto max-w-5xl px-4">
            <div class="flex items-center justify-between h-16">
            <!-- Logo / Brand -->
            <a href="/" class="text-xl font-semibold text-zinc-900 dark:text-zinc-100">@{ sitename }</a>

            <!-- Desktop-Nav -->
            <nav class="hidden md:block">
                <ul class="flex items-center gap-6 text-zinc-600 dark:text-zinc-300">
                    <@ foreach in pagelist @>
                    <li>
                        <a href="@{ url }" class="hover:text-zinc-900 dark:hover:text-white">@{ title }</a>
                    </li>
                    <@ end @>
                </ul>
            </nav>

            <!-- Mobile Menu Button -->
            <button id="mobileMenuBtn"
                    class="md:hidden p-2 rounded hover:bg-zinc-100 dark:hover:bg-zinc-800"
                    aria-label="Menü öffnen"
                    aria-expanded="false"
                    aria-controls="mobileMenu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-zinc-700 dark:text-zinc-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            </div>
        </div>

        <!-- Mobile-Nav (Dropdown) -->
        <div id="mobileMenu"
            class="md:hidden hidden border-t border-zinc-200 dark:border-zinc-800 bg-white/95 dark:bg-zinc-950/95 backdrop-blur"
            role="dialog" aria-modal="true">
            <div class="mx-auto max-w-5xl px-4 py-3">
            <nav>
                <ul class="flex flex-col gap-2 text-zinc-700 dark:text-zinc-200">
                    <@ foreach in pagelist @>
                    <li>
                        <a class="block rounded px-3 py-2 hover:bg-zinc-100 dark:hover:bg-zinc-800" href="@{ url }">@{ title }</a>
                    </li>
                    <@ end @>
                </ul>
            </nav>
            </div>
        </div>
        </header>
        <@ end @>