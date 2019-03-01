<?php
/**
 * Plugin Name: Subscribe All The Things - Replace 'None' with Product Price String
 * Plugin URI:  https://github.com/jrick1229/satt-negative-response-price
 * Description: Replace the "None" text with the product's one-time purchase price string.
 * Author:      jrick1229
 * Author URI:  http://github.com/jrick1229
 * Version:     v1.0.0
 * License:     GPLv3
 *
 * GitHub Plugin URI: jrick1229/satt-negative-response-price
 * GitHub Branch: master
 *
 * Copyright 2018 Prospress, Inc.  (email : freedoms@prospress.com)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package WooCommerce Subscriptions
 * @author  Prospress Inc.
 * @since   1.0.0
 */
 
 
add_filter('wcsatt_single_product_one_time_option_description', 'satt_replace_none_with_price', 5, 2);

function satt_replace_none_with_price ($none_string, $product) {
    
    $none_string = _x( '' . $product->get_price_html() . '', 'product subscription selection - negative response', 'woocommerce-subscribe-all-the-things' );
    
    return $none_string;
    
}