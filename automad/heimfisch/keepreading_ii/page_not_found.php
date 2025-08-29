<?php
http_response_code(404);
$langArray = require './packages/heimfisch/keepreading/lang/lang.en.php';
?>

<@ elements/header.php @>

    <body class="bg-neutral-200 dark:bg-neutral-950">
        <header>
<@ elements/navigation.php @>
        </header>
        <main class="bg-white dark:bg-zinc-950">
            <article class="mx-auto max-w-3xl">
                <content id="content" class="px-1 md:px-0 text-zinc-800 dark:text-zinc-300">
                    <h1>HTTP 404 Error</h1>
                    <h2><?php echo $langArray['error404']; ?></h2>
                    <p>
                        <?php echo $langArray['error404description']; ?>
                    </p>
                    <p>
                        <a href="/">Back to our site</a>
                    </p>
                </content>
            </article>
        </main>
<@ elements/footer.php @>
