<@~ header-image.php @>
<!DOCTYPE html>
<html class="no-js" lang="de">
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
            ogImage: @{ ogImage | def(@{ imageHeader }) }
        } @>

        <!-- Title -->
        <title>@{ sitename } // @{ title }</title>
        <!-- Keepreading CSS -->
        <link rel="stylesheet" href="/packages/@{ theme }/css/tailwind.css">
        <!---->
        <!-- Photoswipe CSS -->
        <link rel="stylesheet" href="/packages/@{ theme }/css/photoswipe.css">

        <!-- Automad -->
        <link rel="stylesheet" href="/packages/@{ theme }/css/automad.css">

        <script src="/automad/dist/blocks/main.bundle.js"></script>
    </head>