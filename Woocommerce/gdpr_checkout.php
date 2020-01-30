<?php 
/* ADD GDPR COMPLIANCE FIELDS TO CHECKOUT */
/* ========================================================================== */
add_action('woocommerce_after_order_notes', 'my_add_gpdr_fields');
function my_add_gpdr_fields($checkout) {
	woocommerce_form_field('my_account_compliance', array(
		'type'							=>	'checkbox',
		'required'					=>	true,
		'custom_attributes' => array('required' => 'required'),
		'value'							=>	false,
		'label'							=>	'By registering, I give my consent for the usage of my private data for the purpose of registering an account.'
	), $checkout->get_value('my_account_compliance'));

	woocommerce_form_field('my_third_party_compliance', array(
		'type'							=>	'checkbox',
		'required'					=>	true,
		'custom_attributes' => array('required' => 'required'),
		'value'							=>	false,
		'label'							=>	'By submitting my order, I give consent to <WEBSITE> to give my personal data to courier companies to deliver my products.'
	), $checkout->get_value('my_third_party_compliance'));
}

// Update order meta with field value
add_action('woocommerce_checkout_update_order_meta', 'my_update_gpdr_fields_meta');
function my_update_gpdr_fields_meta() {
	if(!empty($_POST['my_account_compliance'])) {
		update_post_meta($order_id, 
			'By registering, I give my consent for the usage of my private data for the purpose of registering an account.', 
			$_POST['my_account_compliance']);
	}

	if(!empty($_POST['my_third_party_compliance'])) {
		update_post_meta($order_id, 
			'By submitting my order, I give consent to <WEBSITE> to give my personal data to courier companies to deliver my products.',
			$_POST['my_third_party_compliance']);
	}
}

// Catch errors
add_action('woocommerce_checkout_process', 'my_custom_checkout_process');
function my_custom_checkout_process() {
	if(empty($_POST['my_account_compliance'])) {
		wc_add_notice('Please give your <strong>compliance for using your personal data for account registration</strong> to complete the order.', 'error');
	}

	if(empty($_POST['my_third_party_compliance'])) {
		wc_add_notice('Please give your <strong>compliance for providing your personal data to courier companies</strong> to complete the order.', 'error');
	}
}