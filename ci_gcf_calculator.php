<?php
/*
Plugin Name: CI Gcf calculator
Plugin URI: https://www.calculator.io/gcf-calculator/
Description: Greatest common factor calculator finds the GCF of a set of numbers and all factors of these numbers. Solutions with steps for finding the GCF are also demonstrated.
Version: 1.0.0
Author: GCF Calculator / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_gcf_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for GCF Calculator by www.calculator.io";

function display_calcio_ci_gcf_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">GCF Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_gcf_calculator_iframe"></iframe></div>';
}


add_shortcode( 'ci_gcf_calculator', 'display_calcio_ci_gcf_calculator' );