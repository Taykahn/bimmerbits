<?php
/**
 * Custom post types
 */

//Instantiate new class object
$parts = new MBC_Theme( 'parts' );

$parts->mbc_build_cpt( 'parts', 'Parts', 'Parts', $supports = array(), $settings = array(), $has_arch = true, $hier = true);
