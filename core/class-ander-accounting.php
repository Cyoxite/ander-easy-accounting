<?php
class Ander_Accounting {
    public function run() {
        $this->load_dependencies();
        $this->define_admin_hooks();
    }

    private function load_dependencies() {
        require_once AEA_ACCOUNTING_PLUGIN_DIR . 'includes/post-types/incomes-post-type.php';
        require_once AEA_ACCOUNTING_PLUGIN_DIR . 'includes/post-types/outcomes-post-type.php';
        require_once AEA_ACCOUNTING_PLUGIN_DIR . 'includes/admin/admin-menu.php';
    }

    private function define_admin_hooks() {
        $incomes_post_type = new Incomes_Post_Type();
        add_action('init', array($incomes_post_type, 'register'));

        $outcomes_post_type = new Outcomes_Post_Type();
        add_action('init', array($outcomes_post_type, 'register'));

        $ander_admin_menu = new Ander_Admin_Menu();
        add_action('admin_menu', array($ander_admin_menu, 'add_menu'));
    }
}
