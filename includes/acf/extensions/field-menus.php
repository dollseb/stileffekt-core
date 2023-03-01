<?php

class whitelabel__acf_extend_field_menu extends acf_field {

	function __construct() {

		$this->name = 'menu';
		$this->label = __( 'Menu', 'whitelabel' );
		$this->category = 'choice';
		$this->defaults = array(
			'default_menu' => 1,
		);
		$this->l10n = array(
			'error' => __( 'Error', 'whitelabel' ),
		);
		$this->default_sentinel = "acf-field-menu";

		parent::__construct();
	}

	function get_nav_menus() {
		$arr = [];
		foreach ( wp_get_nav_menus() as $_ => $obj ) {
			$arr[ $obj->slug ] = $obj->name;
		}

		return $arr;
	}

	function render_field_settings( $field ) {

		acf_render_field_setting( $field, array(
			'label'        => __( 'Default Menu', 'whitelabel' ),
			'instructions' => __( 'Display default menu', 'whitelabel' ),
			'type'         => 'select',
			'choices'      => $this->get_nav_menus(),
			'name'         => 'default_menu',
		) );
	}

	function format_value( $value, $post_id, $field ) {
		$return_value = ( $value === $this->default_sentinel ) ? $field[ 'default_menu' ] : $value;

		return $return_value;
	}


	function render_field( $field ) {

		$value = empty( $field[ 'value' ] ) ? $this->default_sentinel : $field[ 'value' ];
		?>

        <select name="<?= esc_attr( $field[ 'name' ] ) ?>" value="<?= esc_attr( $value ) ?>">
			<?php
			if ( $value === $this->default_sentinel ) {
				echo '<option disabled selected value="' . esc_attr( $field[ 'default_menu' ] ) . '" style="display:none;"> Default Menu (' . esc_html( ucwords( str_replace( [ "_", "-" ], " ", $field[ 'default_menu' ] ) ) ) . ')</option>';
			} else {
				echo '<option value=' . esc_attr( $this->default_sentinel ) . '>Default Menu (' . esc_html( ucwords( str_replace( [ "_", "-" ], " ", $field[ 'default_menu' ] ) ) ) . ')</option>';
			}

			foreach ( wp_get_nav_menus() as $_ => $obj ) {
				if ( $field[ 'value' ] === $obj->slug ) {
					echo '<option selected value="' . esc_attr( $obj->slug ) . '">' . esc_html( $obj->name ) . '</option>';
				} else {
					echo '<option value="' . esc_attr( $obj->slug ) . '">' . esc_html( $obj->name ) . '</option>';
				}
			}
			?>

        </select>

		<?php
	}
}


new whitelabel__acf_extend_field_menu();

