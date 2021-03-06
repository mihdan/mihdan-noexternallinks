<?php
/**
 * Markup for Mihdan: No External Links Settings page.
 *
 * @since         4.0.0
 * @package       Mihdan_NoExternalLinks
 * @subpackage    Mihdan_NoExternalLinks/Admin/Partials
 * @author        mihdan
 */
?>

<div class="wrap">
	<h1><?php echo esc_html( get_admin_page_title() ); ?> <span style="font-size:50%;"><?php echo esc_html( MIHDAN_NO_EXTERNAL_LINKS_VERSION ); ?></span></h1>
	<?php settings_errors(); ?>

	<?php $active_tab = isset( $_GET['tab'] ) ? sanitize_text_field( $_GET['tab'] ) : ''; ?>

	<h2 class="nav-tab-wrapper">
		<a href="?page=<?php echo $this->plugin_name; ?>" class="nav-tab<?php echo '' === $active_tab ? ' nav-tab-active' : ''; ?>">
			<?php _e( 'General', $this->plugin_name ); ?>
		</a>
		<a href="?page=<?php echo $this->plugin_name; ?>&tab=links" class="nav-tab<?php echo 'links' === $active_tab ? ' nav-tab-active' : ''; ?>">
			<?php _e( 'Links', $this->plugin_name ); ?>
		</a>
		<a href="?page=<?php echo $this->plugin_name; ?>&tab=include_exclude" class="nav-tab<?php echo 'include_exclude' === $active_tab ? ' nav-tab-active' : ''; ?>">
			<?php _e( 'Include', $this->plugin_name ); ?> / <?php _e( 'Exclude', $this->plugin_name ); ?>
		</a>
		<a href="?page=<?php echo $this->plugin_name; ?>&tab=advanced" class="nav-tab<?php echo 'advanced' === $active_tab ? ' nav-tab-active' : ''; ?>">
			<?php _e( 'Advanced', $this->plugin_name ); ?>
		</a>
        <a href="?page=<?php echo $this->plugin_name; ?>&tab=plugins" class="nav-tab<?php echo 'plugins' === $active_tab ? ' nav-tab-active' : ''; ?>">
			<?php _e( 'Plugins', $this->plugin_name ); ?>
        </a>
	</h2>
    <form action="<?php echo admin_url( 'options.php' ); ?>" method="post">
        <?php
        if ( 'links' === $active_tab ) {
            settings_fields( $this->plugin_name . '-settings-links' );
            do_settings_sections( $this->plugin_name . '-settings-links' );
	        submit_button();
        } elseif ( 'include_exclude' === $active_tab ) {
            settings_fields( $this->plugin_name . '-settings-include-exclude' );
            do_settings_sections( $this->plugin_name . '-settings-include-exclude' );
	        submit_button();
        } elseif ( 'advanced' === $active_tab ) {
            settings_fields( $this->plugin_name . '-settings-advanced' );
            do_settings_sections( $this->plugin_name . '-settings-advanced' );
	        submit_button();
        } elseif ( 'plugins' === $active_tab ) {
	        do_settings_sections( $this->plugin_name . '-settings-plugins' );
        } else {
            settings_fields( $this->plugin_name . '-settings' );
            do_settings_sections( $this->plugin_name . '-settings' );
	        submit_button();
        }
        ?>
    </form>
</div>
