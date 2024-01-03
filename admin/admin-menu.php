<?php 
function custom_post_type_settings_menu() {
	add_menu_page(
		'Custom Post Type API Settings',
		'Omni WP API',
		'manage_options',
		'custom-post-type-api-settings',
		'custom_post_type_settings_page',
		'data:image/svg+xml;base64,' . base64_encode('<svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path fill="black" d="M1591 1448q56 89 21.5 152.5t-140.5 63.5h-1152q-106 0-140.5-63.5t21.5-152.5l503-793v-399h-64q-26 0-45-19t-19-45 19-45 45-19h512q26 0 45 19t19 45-19 45-45 19h-64v399zm-779-725l-272 429h712l-272-429-20-31v-436h-128v436z"/></svg>')
	);
}
add_action('admin_menu', 'custom_post_type_settings_menu');