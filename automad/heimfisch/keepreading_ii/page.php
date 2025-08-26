<?php
$langArray = require './packages/heimfisch/keepreading_ii/lang/lang.en.php';
?>
<@ elements/header.php @>

    <body class="dark:bg-zinc-950">
<@ elements/navigation.php @>
        <main>
            <article class="w-full py-5">
                <div id="headline" class="mx-auto max-w-3xl px-1">
                    <h1 class="text-3xl text-zinc-800 dark:text-zinc-300">@{ title }</h1>
                </div>
                <!--<div id="headimage" class="mx-auto md:max-w-4xl lg:max-w-5xl py-5">
                    <img src="img/beach.webp" class="md:rounded-sm aspect-16/9 object-cover w-full"/>
                </div>-->
                <div id="content" class="mx-auto max-w-3xl px-1 md:px-0">
                    @{ +main }
                    @{ text | markdown }
                </div>
            </article>
        </main>
<@ elements/footer.php @>