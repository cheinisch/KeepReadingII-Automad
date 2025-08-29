<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

<@ if @{ :pagelistCount } @>
  <section class="btg mx-auto max-w-3xl px-1 py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      
      <@ foreach in pagelist @>

        <@ if @{ :i } = 1 @>

          <!-- Featured: mit Bild (nur Item #1) -->
          <a href="@{ url }"
             class="group block relative aspect-[16/9] overflow-hidden md:col-span-2 md:rounded-sm border border-zinc-200/70 dark:border-zinc-700/70 border-[0.5px] focus:outline-none focus:ring-2 focus:ring-blue-500 !no-underline hover:!no-underline focus:!no-underline visited:!no-underline"
             aria-label="@{ title }">
            
            <!-- Hintergrundbild: imageCard -> cover -> Platzhalter -->
            
            <div class="absolute inset-0 bg-zinc-100 dark:bg-zinc-900 bg-center bg-cover transition-transform duration-300 group-hover:scale-105"
                 style="background-image:url('<@ if @{ imageHeader } @>@{ imageHeader }<@ else @>/assets/placeholder-16x9.jpg<@ end @>')"></div>

            <!-- Gradient -->
            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-black/20 to-transparent"></div>

            <!-- Content -->
            <div class="absolute bottom-0 left-0 p-4">
              <time datetime="@{ date | date('c') }" class="block text-xs text-zinc-300">
                @{ date | dateFormat('j M, Y') }
              </time>
              <h2 class="mt-0.5 text-xl md:text-2xl font-semibold text-white line-clamp-2">@{ title }</h2>
            </div>
          </a>
        
        <@ else @>
          <!-- Compact Cards: nur Text (Items #2 und #3) -->
          <a href="@{ url }"
             class="group block relative overflow-hidden md:rounded-sm border border-zinc-200/70 dark:border-zinc-700/70 border-[0.5px] p-4 focus:outline-none focus:ring-2 focus:ring-blue-500 !no-underline hover:!no-underline focus:!no-underline visited:!no-underline"
             aria-label="@{ title }">
            <time datetime="@{ date | date('c') }" class="block text-xs text-zinc-500 dark:text-zinc-400">
              @{ date | dateFormat('j M, Y') }
            </time>
            <h2 class="mt-0.5 text-lg font-semibold text-zinc-900 dark:text-zinc-100">
              @{ title }
            </h2>
            <@ if @{ teaser } @>
              <p class="mt-1 text-sm text-zinc-600 dark:text-zinc-300 line-clamp-3">
                @{ teaser }
              </p>
            <@ end @>
          </a>
        <@ end @>

      <@ end @>
    </div>
  </section>
<@ else @>
  <div class="btg mx-auto max-w-5xl px-4 py-8 text-zinc-500">Keine Einträge gefunden.</div>
<@ end @>
