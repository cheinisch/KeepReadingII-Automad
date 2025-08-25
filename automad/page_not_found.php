<?php
http_response_code(404);
$langArray = require './packages/heimfisch/keepreading/lang/lang.en.php';
?>

<@ elements/header.php @>

    <body>
        <header>
<@ elements/navigation.php @>
        </header>
        <main>
            <content class="page">
                <h1>HTTP 404 Error</h1>
                <h2><?php echo $langArray['error404']; ?></h2>
                <p>
                    <?php echo $langArray['error404description']; ?>
                </p>
                <p>
                    <a href="/">Back to our site</a>
                </p>
            </content>
        </main>
<@ elements/footer.php @>
