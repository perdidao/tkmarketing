<?php

	// ****** Telefone
	function add_telefone( $wp_customize ) {
    $wp_customize->add_setting('telefone');

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'telefone', [
      'label'    => __( 'Telefone', 'telefone' ),
      'section'  => 'title_tagline',
      'settings' => 'telefone',
    ]));
	}

	add_action('customize_register', 'add_telefone');

	// ****** Whatsapp
	function add_whats( $wp_customize ) {
    $wp_customize->add_setting('whats');

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'whats', [
      'label'    => __( 'Whatsapp', 'whats' ),
      'section'  => 'title_tagline',
      'settings' => 'whats',
    ]));
	}

	add_action('customize_register', 'add_whats');

	// ****** E-mail
	function add_email( $wp_customize ) {
    $wp_customize->add_setting('email');

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'email', [
      'label'    => __( 'E-mail', 'email' ),
      'section'  => 'title_tagline',
      'settings' => 'email',
    ]));
	}

	add_action('customize_register', 'add_email');

	// ****** Endereço
	function add_endereco( $wp_customize ) {
    $wp_customize->add_setting('endereco');

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'endereco', [
      'label'    => __( 'Endereço', 'endereco' ),
      'section'  => 'title_tagline',
      'settings' => 'endereco',
    ]));
	}

	add_action('customize_register', 'add_endereco');

	// ****** Redes Sociais
	function add_redes_sociais($wp_customize){

		$wp_customize->add_section('redes_sociais', array(
			'title' => __('Redes Sociais (Links)','redesSociais')
		));

		/** Whatsapp */
		$wp_customize->add_setting('whatsapp_link');

		$wp_customize->add_control(new WP_Customize_Control($wp_customize,'whatsapp',array(
			'label'    => __('Whatsapp','redesSociais'),
			'section'  => 'redes_sociais',
			'settings' => 'whatsapp_link'
		)));

		/** Facebook */
		$wp_customize->add_setting('facebook_link');

		$wp_customize->add_control(new WP_Customize_Control($wp_customize,'facebook',array(
			'label'    => __('Facebook','redesSociais'),
			'section'  => 'redes_sociais',
			'settings' => 'facebook_link'
		)));

		/** Instagram */
		$wp_customize->add_setting('instagram_link');

		$wp_customize->add_control(new WP_Customize_Control($wp_customize,'instagram',array(
			'label'    => __('Instagram','redesSociais'),
			'section'  => 'redes_sociais',
			'settings' => 'instagram_link'
		)));

		/** LinkedIn */
		$wp_customize->add_setting('linkedin_link');

		$wp_customize->add_control(new WP_Customize_Control($wp_customize,'linkedin',array(
			'label'    => __('LinkedIn','redesSociais'),
			'section'  => 'redes_sociais',
			'settings' => 'linkedin_link'
		)));

  }

  add_action('customize_register','add_redes_sociais');

?>
