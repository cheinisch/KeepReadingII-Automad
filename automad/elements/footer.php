        <footer>
            <div uk-grid>
                <div class="uk-width-1-3@m footeritems">
                    <b>@{ sitename }</b>
                    <p>
                        &copy; 2024 This site is made with <span uk-icon="heart"></span> and <span uk-icon="code"></span> Automad
                    </p>
                    <!--<ul>
                        <li><span uk-icon="github"></span></li>
                        <li><span uk-icon="mastodon"></span></li>
                        <li><span uk-icon="instagram"></span></li>
			            <li><span uk-icon="threads"></span></li>
                        <li><span uk-icon="xing"></span></li>
                    </ul>-->
                </div>
                <div class="uk-width-1-3@m footeritems">
                </div>
                <div class="uk-width-1-6@m footeritems">
                    <!-- Bottom NAV 2-->
                    <ul class="uk-nav uk-nav-default">
                        <@ newPagelist { type: false, excludeHidden: false } @>
                        <@ foreach in pagelist @>
                            <@ if @{ checkboxShowinBottomNav_2 } @>
                                <li><a href="@{ url }">@{ title }</a></li>
                            <@ end @>
                        <@ end @>	
                    </ul>
                </div>
                <div class="uk-width-1-6@m footeritems">
                    <!-- Bottom NAV 1 -->
                    <ul class="uk-nav uk-nav-default">
                        <@ newPagelist { type: false, excludeHidden: false } @>
                        <@ foreach in pagelist @>
                            <@ if @{ checkboxShowinBottomNav_1 } @>
                                <li><a href="@{ url }">@{ title }</a></li>
                            <@ end @>
                        <@ end @>	
                    </ul>
                </div>         
            </div>
        </footer>
        <script src="/packages/@{ theme }/js/navigation.css"></script>
        @{ itemsTrackingCode }
    </body>
</html>
