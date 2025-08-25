<@~ header-image.php @>
<!DOCTYPE html>
<html class="no-js" lang="de" style="color-scheme: light">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <@ if @{ tags } @>
        <meta name="keywords" content="<@ foreach in tags 	@><@ if @{ :i } > 1 @>, @{ :tag }<@ else @>@{ :tag }<@ end @><@ end @>">
        <@ end @>
        <meta name="description" content="@{ +main | findFirstParagraph | 150 }">

        <!-- Open Graph -->
        <@ Automad/MetaTags { 
            description: @{ metaDescription | def(@{ text | stripTags }) },
            ogTitle: @{ ogTitle | def('@{ sitename } / @{ title }') },
            ogDescription: @{ ogDescription | def(@{ text | stripTags }) },
            ogType: 'website',
            ogImage: @{ ogImage | def(@{ :imageCard }) }
        } @>

        <!-- Title -->
        <title>@{ sitename } // @{ title }</title>
     
        <!-- CSS -->

        <@ if @{ checkboxCloudCSS } @>

            <!-- UIkit CSS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.19.2/dist/css/uikit.min.css" />

            <!-- UIkit JS -->
            <script src="https://cdn.jsdelivr.net/npm/uikit@3.19.2/dist/js/uikit.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/uikit@3.19.2/dist/js/uikit-icons.min.js"></script>

        <@ else @>
        <!-- UIkit CSS -->
            <link rel="stylesheet" href="/packages/@{ theme }/css/uikit.min.css" />

            <!-- UIkit JS -->
            <script src="/packages/@{ theme }/js/uikit.min.js"></script>
            <script src="/packages/@{ theme }/js/uikit-icons.min.js"></script>
        <@ end @>


        <!-- Keepreading CSS -->
        <link rel="stylesheet" href="/packages/@{ theme }/css/style.css">
        <!---->

        <script src="/automad/dist/blocks/main.bundle.js"></script>
    </head>