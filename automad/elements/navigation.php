<?php
    use Automad\Core\Config;

    $config = Config::read();
    $rssfeed = $config['AM_FEED_ENABLED'];
?>
            <nav class="uk-navbar-container uk-navbar-transparent">
                <div>
                    <div uk-navbar>            
                        <div class="uk-navbar-left">
                            <a class="uk-navbar-item uk-logo" href="/" aria-label="Back to Home">@{ sitename }</a>
                        </div>
                        <div class="uk-navbar-right">
                            <ul class="uk-navbar-nav">
                                <li>
                                    <?php if ($rssfeed == 1) { echo '<a href="/feed"><span class="navbar-items" uk-icon="rss"></span></a>'; } ?>
                                </li>
                                <li><a uk-toggle="target: #offcanvas-nav" href="#"><span class="navbar-items" uk-navbar-toggle-icon></span></a></li>
                            </ul>
                            <div id="offcanvas-nav" uk-offcanvas="mode: slide overlay: true">
                                <div class="uk-offcanvas-bar">
                                <@ set { ":hideSecondLevel": @{ checkboxHideSecondLevelNavbar } } @>
                                <@ with '/' @>
                                <@ newPagelist { type: 'children' } @>
                                    <ul class="uk-nav uk-nav-default">
                                        <li class="uk-nav-header">Menu</li>
                                        <li class="uk-nav-divider"></li>
                                        <@ foreach in pagelist @>
                                            <@ if @{ :pagelistCount } and not @{ :hideSecondLevel } @>
                                                <li class="uk-parent <@ if @{ :currentPath }@> uk-active<@ end @>">
                                                    <a href="@{ url }">@{ title }</a>
                                                    <ul class="uk-nav-sub">
                                                        <@ foreach in pagelist @>
                                                            <li <@ if @{ :currentPath } @> class="uk-active"<@ end @>><a href="@{ url }">@{ title }</a></li>
                                                        <@ end @>
                                                    </ul>
                                                </li>
                                            <@ else @>
                                                <li<@ if @{ :currentPath }@> class="uk-active"<@ end @>>
                                                    <a href="@{ url }">@{ title }</a>
                                                </li>
                                            <@ end @>
                                        <@ end @>
                                    </ul>
                                <@ end @>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
