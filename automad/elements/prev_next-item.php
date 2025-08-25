<a class="bloglistcard" href="@{ url }">
    <div>
        <div class="uk-card">
            <div class="uk-card-media-top">
                <@ header-image.php @>
                <@ if not @{ :hideThumbnails } and not @{ iconPanel } @>
                    <@~ header-image.php @>
                    <@ if @{ :imageCard } ~@>
                    <@ img {  file:@{ :imageCard },
                                width: 640,
                                height: 360,
                                crop: true,
                                class: "teaser-image"  } @>
                    <@ else @>
                    <img src="/packages/@{ theme }/img/dummy.png" class="teaser-image" width="1280" height="720" alt="">
                    <@~ end ~@>
                <@ end @>
            </div>
            <div class="card-body-prev-next">
                <h4 class="prev-next-title">@{ title }</h4>
                <span class="prev-next-date"><@ date.php @></span>
            </div>
        </div>
    </div>
</a>  