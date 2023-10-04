<?php
class Ander_Accounting {
    public function run() {
        
        add_action('init', array($this, 'create_custom_post_types'));
        add_action('admin_menu', array($this, 'add_admin_menu'));
    
    }


public function create_custom_post_types() {
    require_once AEA_ACCOUNTING_PLUGIN_DIR . 'includes/post-types/incomes-post-type.php';
    require_once AEA_ACCOUNTING_PLUGIN_DIR . 'includes/post-types/outcomes-post-type.php';
}

 
    public function add_admin_menu() {
        require_once AEA_ACCOUNTING_PLUGIN_DIR . 'includes/admin/admin-menu.php';
        
    }
}
