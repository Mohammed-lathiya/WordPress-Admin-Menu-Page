<?php 

function ms_register_my_custom_menu_page(){
    add_menu_page( 
        __( 'Donation List', 'textdomain' ),
        'Donation List',
        'manage_options',
        'donationlist',
        'ms_custom_menu_page',
        '',
        2
    ); 
}
add_action( 'admin_menu', 'ms_register_my_custom_menu_page' );


function ms_custom_menu_page(){
    
    // Write Here 
    //This is a Example Page

}

?>
