<?php 

// Update the admin walker nav
function megamenu_walkernav($walker) {
	$walker = 'MegaMenu_Walker_Edit';
	if(!class_exists($walker)) {
		require_once get_template_directory(  ) . '/inc/walker-nav-menu-edit.php';
	}
	return $walker;
}
add_filter( 'wp_edit_nav_menu_walker', 'megamenu_walkernav', 99 );



// Custom walker nav class for the menu editor
class MegaMenu_Walker_Edit extends Walker_Nav_Menu_Edit {
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $item_output = '';

        parent::start_el($item_output, $item, $depth, $args, $id);

        $output .= preg_replace(
            '/(?=<(fieldset|p)[^>]+class="[^"]*field-move)/',
            $this->get_fields($item, $depth, $args),
            $item_output
        );
    }
    protected function get_fields( $item, $depth, $args = array(), $id = 0 ) {
        ob_start(); 
        do_action( 'wp_nav_menu_item_custom_fields', $item->ID, $item, $depth, $args, $id );
        
        return ob_get_clean();
    }
}
