<?php
$langArray = require './packages/heimfisch/keepreading/lang/lang.en.php';
?>
<@ elements/header.php @>

    <body>
        <header>
<@ elements/navigation.php @>
        </header>
        <main>
            <content class="page">
                <h1>@{ title }</h1>
                @{ +main }
                @{ text | markdown }
            </content>
        </main>
<@ elements/footer.php @>