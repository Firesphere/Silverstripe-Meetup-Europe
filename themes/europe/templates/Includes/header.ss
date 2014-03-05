            <header class="pure-g-r" id="header">
                <div class="pure-u-5-5 logo">
                    <img src="/$ThemeDir/images/logo.png" alt="SilverStripe Logo" />
                </div>
                <nav class="pure-menu pure-menu-open pure-menu-horizontal pure-menu-5-5">
                    <ul>
                        <% loop Menu(1) %>
                            <li<% if IsSection %> class="pure-menu-selected"<% end_if %>>
                                <a href="$Link">$MenuTitle</a>
                                <% if Children %>
                                    <ul class="pure-menu-children">
                                        <% loop Children %>
                                            <li><a href="$Link">$MenuTitle</a></li>
                                        <% end_loop %>
                                    </ul>
                                <% end_if %>
                            </li>
                        <% end_loop %>
                    </ul>
                </nav>
            </header>