# WP_custom_walker_nav

While I was practicing wordpress custom walker nav classes for building a wordpress mega menu. I added 3 files here.

(class-nav_walker.php) ::
In this file, I included my custom Walker_Nav_Menu class for my own custom mega menu. I added Custom fields inside administration navigation appearance panel to use some specific css classes to genarate menu style dynamically in my Frontend page menu.

(nav-walker_admin_supports.php) ::
In this file, I included some code which create some custom fields like checkbox to add some specific css classes for some styling from administration panel.

(admin_navWalker_filter.php) ::
In this file, I included some code which override the Walker_Nav_Menu_Edit class for administration panel's custom fields setup. 

