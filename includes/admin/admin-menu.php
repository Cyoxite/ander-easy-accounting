<?php
class Ander_Admin_Menu {
    public function add_menu() {
        add_menu_page(
            'Ander Easy Accounting', 
            'AEA Accounting', 
            'manage_options', 
            'ander_accounting', 
            array($this, 'accounting_page'), 
            'dashicons-chart-line', 
            26
        );
    }

    public function accounting_page() {
        echo '<div class="wrap">';
        echo '<h1>Ander Easy Accounting</h1>';
        // Tu będzie formularz dodawania przychodów i kosztów zgodnie z specyfikacją
        echo '</div>';
    }
}
