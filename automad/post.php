<?php
$langArray = require './packages/heimfisch/keepreading/lang/lang.en.php';
?>
<@ elements/header.php @>

    <body>
        <header>
<@ elements/navigation.php @>
        </header>
        <main>
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-1">
                <@ elements/header-image.php @>
                <@ if not @{ :hideThumbnails } and not @{ iconPanel } @>
                    <@~ header-image.php @>
                    <@ if @{ :imageCard } ~@>
                        <div class="uk-vertical-align uk-text-center" style="50% 0 no-repeat; height: 450px;">
                            <img src="@{ :imageCard }" class="teaser-image" width="1280" height="720" alt="">
                            </div>                        
                    <@~ end ~@>
                <@ end @>                    
                </div>
            </div>
            <article>
                <div class="article-header">
               
                    <h1>@{ title }</h1>
                    <@ if @{ +subheadline } @>
                        <span>@{ +subheadline }</span>
                    <@ end @> 
                </div>
                <@ if not @{ +main } @>
                    @{ text | markdown }
                <@ else @>
                    @{ +main }
                <@ end @>
                <div class="article-info">
                    <@ if @{ author } @>
                    <div>
                        <span><?php echo $langArray['writtenby']; ?>: @{ author }</span>
                    </div>
                    <@ end @>
                    <@ if @{ tags } @>
                    <div>
                        <!--<span><?php echo $langArray['posttags']; ?>: </span>--> <@ elements/tags.php @>
                    </div>
                    <div class="time">
                    <?php echo $langArray['published']; ?> <@ elements/date.php @>
                    </div>
                    <@ end @>
                </div>
                    <div class="keepon-reading">
                    <@ newPagelist { type: 'siblings' } @>
	                    <@ if @{ :pagelistCount } @>
                        <h3><?php echo $langArray['keeponreading']; ?></h3>
                        <@ end @>
                    </div>
                <@ elements/prev_next.php @>
            </article>
        </main>
<@ elements/footer.php @>
