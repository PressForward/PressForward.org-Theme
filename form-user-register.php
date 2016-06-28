<?php

/**
 * User Registration Form
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<form method="post" action="<?php bbp_wp_login_action( array( 'context' => 'login_post' ) ); ?>" class="bbp-login-form">
	<fieldset class="bbp-form ">
			
			<div class="row">
				<div class="bbp-username small-6 large-centered columns">
				<label for="user_login"><?php _e( 'Username', 'bbpress' ); ?>: </label><br>
				<input type="text" name="user_login" value="<?php bbp_sanitize_val( 'user_login' ); ?>" size="20" id="user_login" tabindex="<?php bbp_tab_index(); ?>" />
			
				<label for="user_email"><?php _e( 'Email', 'bbpress' ); ?>: </label>
				<input type="text" name="user_email" value="<?php bbp_sanitize_val( 'user_email' ); ?>" size="20" id="user_email" tabindex="<?php bbp_tab_index(); ?>" />
				<?php do_action( 'register_form' ); ?>
			</div>
			</div>
			<div class="row">
			<div class="bbp-submit-wrapper small-6 large-centered columns">

			<button type="submit" tabindex="<?php bbp_tab_index(); ?>" name="user-submit" class="button submit user-submit"><?php _e( 'Register', 'bbpress' ); ?></button>

			<?php bbp_user_register_fields(); ?>
			</div>
			</div>
	</fieldset>
</form>
