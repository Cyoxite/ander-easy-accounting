<?php
/**
 * Plugin Name: Ander Easy Accounting
 * Description: Easy accounting for you or your company
 * Author: Daniel Ander Polański
 * Version: 1.0.0
 * Requires PHP: 7.0
 * Requires at least: 5.6
 * Tested up to: 6.3.1
 * Text Domain: ander-easy-accounting
 * Author URI: https://e-ander.pl
 */

defined('ABSPATH') or die("Oh, It's bad way...");
define('AEA_ACCOUNTING_PLUGIN_DIR', plugin_dir_path(__FILE__));

require_once AEA_ACCOUNTING_PLUGIN_DIR . 'core/class-ander-accounting.php';

function run_ander_easy_accounting() {
    $ander_accounting = new Ander_Accounting();
    $ander_accounting->run();
}

run_ander_easy_accounting();
