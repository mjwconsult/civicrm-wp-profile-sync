<?php
/**
 * BuddyPress xProfile Field content metabox template.
 *
 * Handles markup for the BuddyPress xProfile Field content metabox.
 *
 * @package CiviCRM_WP_Profile_Sync
 * @since 0.5
 */

?><!-- assets/templates/buddypress/metaboxes/metabox-bp-field-content.php -->
<style>
.postbox.cwps {
	display: none;
}
.postbox.cwps label {
	display: block;
	margin-bottom: 0.5em;
}
.postbox.cwps .cwps-location-type,
.postbox.cwps .cwps-phone-type,
.postbox.cwps .cwps-contact-type,
.postbox.cwps .cwps-contact-subtype,
.postbox.cwps .cwps-reminder {
	display: none;
}
</style>

<div id="cwps-bp-civicrm-field" class="postbox cwps">

	<h2><?php esc_html_e( 'CiviCRM Field Mapping', 'civicrm-wp-profile-sync' ); ?></h2>

	<div class="inside" aria-live="polite" aria-atomic="true" aria-relevant="all">
		<label for="<?php echo $this->entity_type; ?>"><?php esc_html_e( 'CiviCRM Entity', 'civicrm-wp-profile-sync' ); ?></label>
		<select name="<?php echo $this->entity_type; ?>" id="<?php echo $this->entity_type; ?>">
			<option value="">
				<?php echo esc_html_e( '- Select -', 'civicrm-wp-profile-sync' ); ?>
			</option>
			<?php foreach ( $this->entity_types as $type => $label ) : ?>
				<option value="<?php echo esc_attr( $type ); ?>" <?php selected( $entity_type, $type ); ?>>
					<?php echo esc_html( $label ); ?>
				</option>
			<?php endforeach ?>
		</select>
	</div>

	<div class="inside cwps-location-type" aria-live="polite" aria-atomic="true" aria-relevant="all">
		<label for="<?php echo $this->location_type_id; ?>"><?php esc_html_e( 'Location Type', 'civicrm-wp-profile-sync' ); ?></label>
		<select name="<?php echo $this->location_type_id; ?>" id="<?php echo $this->location_type_id; ?>">
			<option value="">
				<?php echo esc_html_e( '- Select -', 'civicrm-wp-profile-sync' ); ?>
			</option>
			<?php foreach ( $locations as $id => $label ) : ?>
				<option value="<?php echo esc_attr( $id ); ?>" <?php selected( $location_type_id, $id ); ?>>
					<?php echo esc_html( $label ); ?>
				</option>
			<?php endforeach ?>
		</select>
	</div>

	<div class="inside cwps-phone-type" aria-live="polite" aria-atomic="true" aria-relevant="all">
		<label for="<?php echo $this->phone_type_id; ?>"><?php esc_html_e( 'Phone Type', 'civicrm-wp-profile-sync' ); ?></label>
		<select name="<?php echo $this->phone_type_id; ?>" id="<?php echo $this->phone_type_id; ?>">
			<option value="">
				<?php echo esc_html_e( '- Select -', 'civicrm-wp-profile-sync' ); ?>
			</option>
			<?php foreach ( $phones as $id => $label ) : ?>
				<option value="<?php echo esc_attr( $id ); ?>" <?php selected( $phone_type_id, $id ); ?>>
					<?php echo esc_html( $label ); ?>
				</option>
			<?php endforeach ?>
		</select>
	</div>

	<div class="inside cwps-contact-type" aria-live="polite" aria-atomic="true" aria-relevant="all">
		<label for="<?php echo $this->contact_type_id; ?>"><?php esc_html_e( 'Contact Type', 'civicrm-wp-profile-sync' ); ?></label>
		<select name="<?php echo $this->contact_type_id; ?>" id="<?php echo $this->contact_type_id; ?>">
			<option value="">
				<?php echo esc_html_e( '- Select -', 'civicrm-wp-profile-sync' ); ?>
			</option>
			<?php foreach ( $top_level_types as $id => $label ) : ?>
				<option value="<?php echo esc_attr( $id ); ?>" <?php selected( $top_level_type, $id ); ?>>
					<?php echo esc_html( $label ); ?>
				</option>
			<?php endforeach ?>
		</select>
	</div>

	<div class="inside cwps-contact-subtype" aria-live="polite" aria-atomic="true" aria-relevant="all">
		<label for="<?php echo $this->contact_subtype_id; ?>"><?php esc_html_e( 'Contact Sub-type', 'civicrm-wp-profile-sync' ); ?></label>
		<select name="<?php echo $this->contact_subtype_id; ?>" id="<?php echo $this->contact_subtype_id; ?>">
			<option value="">
				<?php echo esc_html_e( '- Select -', 'civicrm-wp-profile-sync' ); ?>
			</option>
			<?php foreach ( $sub_types as $optgroup => $options ) : ?>
				<optgroup label="<?php echo esc_attr( $optgroup ); ?>">
					<?php foreach ( $options as $id => $label ) : ?>
						<option value="<?php echo esc_attr( $id ); ?>" <?php selected( $sub_type, $id ); ?>>
							<?php echo esc_html( $label ); ?>
						</option>
					<?php endforeach ?>
				</optgroup>
			<?php endforeach ?>
		</select>
	</div>

	<div class="inside cwps-choices" aria-live="polite" aria-atomic="true" aria-relevant="all">
		<label for="<?php echo $this->name; ?>"><?php esc_html_e( 'CiviCRM Field', 'civicrm-wp-profile-sync' ); ?></label>
		<select name="<?php echo $this->name; ?>" id="<?php echo $this->name; ?>">
			<option value="">
				<?php echo esc_html_e( '- Select Field -', 'civicrm-wp-profile-sync' ); ?>
			</option>
			<?php foreach ( $choices as $optgroup => $options ) : ?>
				<optgroup label="<?php echo esc_attr( $optgroup ); ?>">
					<?php foreach ( $options as $id => $label ) : ?>
						<option value="<?php echo esc_attr( $id ); ?>" <?php selected( $civicrm_field, $id ); ?>>
							<?php echo esc_html( $label ); ?>
						</option>
					<?php endforeach ?>
				</optgroup>
			<?php endforeach ?>
		</select>
	</div>

	<div class="inside cwps-reminder">
		<div class="notice notice-warning inline" style="background-color: #f7f7f7;">
			<p><?php esc_html_e( 'You will need to fill out at least one option for BuddyPress to validate this Field. The options will be populated from CiviCRM when you save the Field, so it does not matter what you enter for the option.', 'civicrm-wp-profile-sync' ); ?></p>
		</div>
	</div>

</div>
