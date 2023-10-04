<?php
class Ander_Admin_Menu {
    public function add_menu() {
        add_menu_page('Ander Easy Accounting', 'AEA Accounting', 'manage_options', 'ander_accounting', array($this, 'accounting_page'));
        
    }

    public function accounting_page() {
        echo '<div class="wrap">';
        echo '<h2>Ander Easy Accounting</h2>';
        // Forms Here
        echo '</div>';
    }
}

$ander_admin_menu = new Ander_Admin_Menu();
$ander_admin_menu->add_menu();



?>