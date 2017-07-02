<?php
/**
 * modelo Theme Customizer.
 *
 * @package modelo
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function modelo_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	/**
	* Adds textarea support to the theme customizer
	*/
	class Modelo_Customize_Textarea_Control extends WP_Customize_Control {
			public $type = 'textarea';
		 
			public function render_content() {
				?>
					<label>
						<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
						<textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
					</label>
				<?php
			}
		}
	}
add_action( 'customize_register', 'modelo_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function modelo_customize_preview_js() {
	wp_enqueue_script( 'modelo_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'modelo_customize_preview_js' );

/**
 * Adds the individual sections, settings, and controls to the theme customizer
 */
function modelo_customizer( $wp_customize ) {
    

/*--------------------------------------------------------	
	Header Panel
------------------------------------------------------ */
$wp_customize->add_panel( 'header', array(
 'priority'       => 10,
  'title'          => __('Header', 'modelo'),
) );	

	// Header Style -----------------------------
	/* ------------------------------------------ */
	$wp_customize->add_section(
		//main key for section
		'modelo_header_styles', array(
		'title' => __('Heder Styles', 'modelo'),
		'panel'  => 'header',
		'priority' => 43,
			)
	);
			
			// Header Style -----------------------------
			/* ------------------------------------------ */
			$wp_customize->add_setting(
				'modelo_change_header',
				array(
					'default' => '',
					'sanitize_callback' => 'modelo_sanitize_header_styles',
				)
			);
			 
			$wp_customize->add_control(
				'modelo_change_header',
				array(
					'type' => 'radio',
					'label' => 'Choose a Header Style',
					'section' => 'modelo_header_styles',
					'choices' => array(
						'one' => 'One',
						'two' => 'Two',
					),
				)
			);
			
			// Renaming "Header Image" section to "Logo"
			/* ------------------------------------------ */
			$wp_customize->add_section( 'header_image', array(
			'title' => __( 'Logo' ),
			'theme_supports' => 'custom-header',
			'priority' => 60,
			) );
			$wp_customize->get_section('header_image')->panel = 'header';

	// Top Infobar -----------------------------
	/* ------------------------------------------ */
	
	$wp_customize->add_section(
		//main key for section
		'modelo_infobartop_section', array(
		'title' => __('Top infobar', 'modelo'),
		'panel'  => 'header',
		'priority' => 44,
			)
	);

			//Top Infobar show-hide
			$wp_customize->add_setting(
				'show_top_infobar', array(
				'default' => 1,
				'sanitize_callback' => 'modelo_sanitize_checkbox',
					)
			);
			$wp_customize->add_control(
				'show_top_infobar',
				array(
					'type' => 'checkbox',
					'label' => __('Hide top infobar.', 'modelo'),
					'section' => 'modelo_infobartop_section',
					'priority' => 1,
				)
			);
			
			//Signup login show-hide
			$wp_customize->add_setting(
				'show_signup_login', array(
				'default' => '',
				'sanitize_callback' => 'modelo_sanitize_checkbox',
					)
			);
			$wp_customize->add_control(
				'show_signup_login',
				array(
					'type' => 'checkbox',
					'label' => __('Hide Login - Signup Buttons.', 'modelo'),
					'section' => 'modelo_infobartop_section',
					'priority' => 2,
				)
			);
			
			//Login Url
			$wp_customize->add_setting(
            'login_page_url', array(
				'default' => '',
				'sanitize_callback' => 'modelo_sanitize_text',
					)
			);
			$wp_customize->add_control(
					'login_page_url', array(
				'label' => __('Enter Login Page URL', 'modelo'),
				//section is key
				'section' => 'modelo_infobartop_section',
				'type' => 'text',
				'priority' => 3,
			));
			
			//Signup Url
			$wp_customize->add_setting(
            'signup_page_url', array(
				'default' => '',
				'sanitize_callback' => 'modelo_sanitize_text',
					)
			);
			$wp_customize->add_control(
					'signup_page_url', array(
				'label' => __('Enter Signup Page URL', 'modelo'),
				//section is key
				'section' => 'modelo_infobartop_section',
				'type' => 'text',
				'priority' => 4,
			));
			
			//Phone No show-hide
			$wp_customize->add_setting(
				'show_phone_number', array(
				'default' => '',
				'sanitize_callback' => 'modelo_sanitize_checkbox',
					)
			);
			$wp_customize->add_control(
				'show_phone_number',
				array(
					'type' => 'checkbox',
					'label' => __('Hide Helpline Number.', 'modelo'),
					'section' => 'modelo_infobartop_section',
					'priority' => 5,
				)
			);
			
			//Phone No Text
			$wp_customize->add_setting(
            'phone_number_text', array(
				'default' => '',
				'sanitize_callback' => 'modelo_sanitize_text',
					)
			);
			$wp_customize->add_control(
					'phone_number_text', array(
				'label' => __('Write Helpline Number', 'modelo'),
				//section is key
				'section' => 'modelo_infobartop_section',
				'type' => 'text',
				'priority' => 6,
			));
			
	//Social icons
	$wp_customize->add_section(
		//main key for section
		'modelo_infobar_social', array(
		'title' => __('Top Social Icons', 'modelo'),
		'panel'  => 'header',
		'priority' => 46,
			)
	);
	
			//Facebook
			$wp_customize->add_setting(
            'model_socialicon_facebook', array(
				'default' => '',
				'sanitize_callback' => 'modelo_sanitize_text',
					)
			);
			$wp_customize->add_control(
					'model_socialicon_facebook', array(
				'label' => __('Facebook URL', 'modelo'),
				//section is key
				'section' => 'modelo_infobar_social',
				'type' => 'text',
				'priority' => 1,
			));
			
			//Google Plus
			$wp_customize->add_setting(
            'model_socialicon_googleplus', array(
				'default' => '',
				'sanitize_callback' => 'modelo_sanitize_text',
					)
			);
			$wp_customize->add_control(
					'model_socialicon_googleplus', array(
				'label' => __('Google Plus URL', 'modelo'),
				//section is key
				'section' => 'modelo_infobar_social',
				'type' => 'text',
				'priority' => 2,
			));
			
			//Twitter
			$wp_customize->add_setting(
            'model_socialicon_twitter', array(
				'default' => '',
				'sanitize_callback' => 'modelo_sanitize_text',
					)
			);
			$wp_customize->add_control(
					'model_socialicon_twitter', array(
				'label' => __('Twitter URL', 'modelo'),
				//section is key
				'section' => 'modelo_infobar_social',
				'type' => 'text',
				'priority' => 3,
			));
			
			//Linkedin
			$wp_customize->add_setting(
            'model_socialicon_linkedin', array(
				'default' => '',
				'sanitize_callback' => 'modelo_sanitize_text',
					)
			);
			$wp_customize->add_control(
					'model_socialicon_linkedin', array(
				'label' => __('LinkedIn URL', 'modelo'),
				//section is key
				'section' => 'modelo_infobar_social',
				'type' => 'text',
				'priority' => 4,
			));
			
			//Pinterest
			$wp_customize->add_setting(
            'model_socialicon_pinterest', array(
				'default' => '',
				'sanitize_callback' => 'modelo_sanitize_text',
					)
			);
			$wp_customize->add_control(
					'model_socialicon_pinterest', array(
				'label' => __('Pinterest URL', 'modelo'),
				//section is key
				'section' => 'modelo_infobar_social',
				'type' => 'text',
				'priority' => 5,
			));
			
			//Youtube
			$wp_customize->add_setting(
            'model_socialicon_youtube', array(
				'default' => '',
				'sanitize_callback' => 'modelo_sanitize_text',
					)
			);
			$wp_customize->add_control(
					'model_socialicon_youtube', array(
				'label' => __('Youtube URL', 'modelo'),
				//section is key
				'section' => 'modelo_infobar_social',
				'type' => 'text',
				'priority' => 6,
			));
			
			
/* ------------------------------------------------------	
   Footer Panel
------------------------------------------------------ */
   
	$wp_customize->add_panel( 'footer', array(
	 'priority'       => 500,
	  'title'          => __('Footer', 'modelo'),
	  'description'    => __('Footer panel contains all the footer settings.', 'modelo'),
	) );
   
	//Footer Copyright Section ------------
	/*------------------------------------- */
    $wp_customize->add_section(
		//main key for section
		'modelo_footer', array(
        'title' => __('Footer Copyright', 'modelo'),
		'panel'  => 'footer',
        'priority' => 41,
            )
    );
	
			// Copyright
			$wp_customize->add_setting(
				'modelo_copyright', array(
				'default' => '',
				'sanitize_callback' => 'modelo_sanitize_text',
					)
			);
			
			$wp_customize->add_control(
			new Modelo_Customize_Textarea_Control(
				$wp_customize,
				'modelo_copyright', array(
				'label' => __('Copyright text', 'modelo'),
				//section is key
				'section' => 'modelo_footer',
				'type' => 'textarea',
				'priority' => 1,
					)
				)
			);
	
	// Footer Icons Section -----------------------
	/* ----------------------**------------------ */
	$wp_customize->add_section(
		//main key for section
		'modelo_footer_icons', array(
		'title' => __('Footer Icons', 'modelo'),
		'panel'  => 'footer',
		'priority' => 42,
			)
	);
	
			//Phone No show-hide
			$wp_customize->add_setting(
				'show_social_icon_infooter', array(
				'default' => '',
				'sanitize_callback' => 'modelo_sanitize_checkbox',
					)
			);
			$wp_customize->add_control(
				'show_social_icon_infooter',
				array(
					'type' => 'checkbox',
					'label' => __('Show Social Icons.', 'modelo'),
					'section' => 'modelo_footer_icons',
					'priority' => 1,
					'description' => 'Checking this will hide the payment icons and replace it with social icons. You can customize the social icons by going to Header > Top Social Icons',
				)
			);
			
			
			//Diners Club
			$wp_customize->add_setting(
				'modelo_payment_icons_dinerclub', array(
				'default' => '',
				'sanitize_callback' => 'modelo_sanitize_checkbox',
					)
			);
			$wp_customize->add_control(
				'modelo_payment_icons_dinerclub',
				array(
					'type' => 'checkbox',
					'label' => __('Hide Diners Club', 'modelo'),
					'section' => 'modelo_footer_icons',
					'priority' => 2,
				)
			);
			
			//Discover
			$wp_customize->add_setting(
				'modelo_payment_icons_discover', array(
				'default' => '',
				'sanitize_callback' => 'modelo_sanitize_checkbox',
					)
			);
			$wp_customize->add_control(
				'modelo_payment_icons_discover',
				array(
					'type' => 'checkbox',
					'label' => __('Hide Discover', 'modelo'),
					'section' => 'modelo_footer_icons',
					'priority' => 3,
				)
			);
			
			//Master Card
			$wp_customize->add_setting(
				'modelo_payment_icons_mastercard', array(
				'default' => '',
				'sanitize_callback' => 'modelo_sanitize_checkbox',
					)
			);
			$wp_customize->add_control(
				'modelo_payment_icons_mastercard',
				array(
					'type' => 'checkbox',
					'label' => __('Hide Master Card', 'modelo'),
					'section' => 'modelo_footer_icons',
					'priority' => 4,
				)
			);
			
			//Credit Card
			$wp_customize->add_setting(
				'modelo_payment_icons_creditcard', array(
				'default' => '',
				'sanitize_callback' => 'modelo_sanitize_checkbox',
					)
			);
			$wp_customize->add_control(
				'modelo_payment_icons_creditcard',
				array(
					'type' => 'checkbox',
					'label' => __('Hide Credit Card', 'modelo'),
					'section' => 'modelo_footer_icons',
					'priority' => 5,
				)
			);
			
			//Visa
			$wp_customize->add_setting(
				'modelo_payment_icons_visa', array(
				'default' => '',
				'sanitize_callback' => 'modelo_sanitize_checkbox',
					)
			);
			$wp_customize->add_control(
				'modelo_payment_icons_visa',
				array(
					'type' => 'checkbox',
					'label' => __('Hide Visa', 'modelo'),
					'section' => 'modelo_footer_icons',
					'priority' => 6,
				)
			);
			
			//Paypal
			$wp_customize->add_setting(
				'modelo_payment_icons_paypal', array(
				'default' => '',
				'sanitize_callback' => 'modelo_sanitize_checkbox',
					)
			);
			$wp_customize->add_control(
				'modelo_payment_icons_paypal',
				array(
					'type' => 'checkbox',
					'label' => __('Hide Paypal', 'modelo'),
					'section' => 'modelo_footer_icons',
					'priority' => 7,
				)
			);
			
			//Stripe
			$wp_customize->add_setting(
				'modelo_payment_icons_stripe', array(
				'default' => '',
				'sanitize_callback' => 'modelo_sanitize_checkbox',
					)
			);
			$wp_customize->add_control(
				'modelo_payment_icons_stripe',
				array(
					'type' => 'checkbox',
					'label' => __('Hide Stripe', 'modelo'),
					'section' => 'modelo_footer_icons',
					'priority' => 8,
				)
			);
			
			//Google Wallet
			$wp_customize->add_setting(
				'modelo_payment_icons_google_wallet', array(
				'default' => '',
				'sanitize_callback' => 'modelo_sanitize_checkbox',
					)
			);
			$wp_customize->add_control(
				'modelo_payment_icons_google_wallet',
				array(
					'type' => 'checkbox',
					'label' => __('Hide Google Wallet', 'modelo'),
					'section' => 'modelo_footer_icons',
					'priority' => 9,
				)
			);
			
/* ------------------------------------------------------	
   Homepage Panel
------------------------------------------------------ */
   
	$wp_customize->add_panel( 'homepage', array(
	 'priority'       => 40,
	  'title'          => __('Home Page', 'modelo'),
	  'description'    => __('Homepage panel contains all the front page settings.', 'modelo'),
	) );	

	//Homepage Slider Section ------------
	/*------------------------------------- */
    $wp_customize->add_section(
		//main key for section
		'modelo_homepage_Slider', array(
        'title' => __('Slider', 'modelo'),
		'panel'  => 'homepage',
        'priority' => 43,
            )
    );	
	
			//Hide Slider
			$wp_customize->add_setting(
				'modelo_homepage_Slider_hide', array(
				'default' => '',
				'sanitize_callback' => 'modelo_sanitize_checkbox',
					)
			);
			$wp_customize->add_control(
				'modelo_homepage_Slider_hide',
				array(
					'type' => 'checkbox',
					'label' => __('Hide Slider', 'modelo'),
					'section' => 'modelo_homepage_Slider',
					'priority' => 1,
				)
			);
	
			//  First Slider Image
			// ------------------------
			$wp_customize->add_setting('modelo_homepage_slider_image1');
					
			$wp_customize->add_control( new WP_Customize_Image_Control(
				$wp_customize, 'modelo_homepage_slider_image1', array(
				'label' => __('First Slider Image---------', 'modelo'),
				//section is key
				'section' => 'modelo_homepage_Slider',
				'priority' => 1,
			)));
			
					// First Slider Top Sub Heading
						$wp_customize->add_setting(
						'modelo_homepage_slider_tshead1', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_slider_tshead1', array(
							'label' => __('Sub Heading 1', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_Slider',
							'type' => 'text',
							'priority' => 2,
						));
					
					// First Slider Heading
						$wp_customize->add_setting(
						'modelo_homepage_slider_heading1', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_slider_heading1', array(
							'label' => __('Heading 1', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_Slider',
							'type' => 'text',
							'priority' => 3,
						));
			
					// First Slider Description
						$wp_customize->add_setting(
						'modelo_homepage_slider_desc1', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_slider_desc1', array(
							'label' => __('Description 1', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_Slider',
							'type' => 'text',
							'priority' => 4,
						));
			
					// First Slider Button Text
						$wp_customize->add_setting(
						'modelo_homepage_slider_button_text1', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_slider_button_text1', array(
							'label' => __('Slider Button Text 1', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_Slider',
							'type' => 'text',
							'priority' => 5,
						));
					
					// First Slider Button Link
						$wp_customize->add_setting(
						'modelo_homepage_slider_image_link1', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_slider_image_link1', array(
							'label' => __('Button Link 1', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_Slider',
							'type' => 'text',
							'priority' => 6,
						));
			
			//  Second Slider Image
			// -------------------------------
			$wp_customize->add_setting('modelo_homepage_slider_image2');
					
			$wp_customize->add_control( new WP_Customize_Image_Control(
				$wp_customize, 'modelo_homepage_slider_image2', array(
				'label' => __('Second Slider Image---------', 'modelo'),
				//section is key
				'section' => 'modelo_homepage_Slider',
				'priority' => 7,
			)));
					

					// Second Slider Top Sub Heading
						$wp_customize->add_setting(
						'modelo_homepage_slider_tshead2', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_slider_tshead2', array(
							'label' => __('Sub Heading 2', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_Slider',
							'type' => 'text',
							'priority' => 8,
						));
					
					// Second Slider Heading
						$wp_customize->add_setting(
						'modelo_homepage_slider_heading2', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_slider_heading2', array(
							'label' => __('Heading 2', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_Slider',
							'type' => 'text',
							'priority' => 9,
						));
			
					// Second Slider Description
						$wp_customize->add_setting(
						'modelo_homepage_slider_desc2', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_slider_desc2', array(
							'label' => __('Description 2', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_Slider',
							'type' => 'text',
							'priority' => 10,
						));
			
					// Second Slider Button Text
						$wp_customize->add_setting(
						'modelo_homepage_slider_button_text2', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_slider_button_text2', array(
							'label' => __('Slider Button Text 2', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_Slider',
							'type' => 'text',
							'priority' => 11,
						));
					
					
					// Second Slider Image Link
						$wp_customize->add_setting(
						'modelo_homepage_slider_image_link2', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_slider_image_link2', array(
							'label' => __('Slider Link 2', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_Slider',
							'type' => 'text',
							'priority' => 12,
						));
			
			//  Third Slider Image
			// -------------------------------
			$wp_customize->add_setting('modelo_homepage_slider_image3');
					
			$wp_customize->add_control( new WP_Customize_Image_Control(
				$wp_customize, 'modelo_homepage_slider_image3', array(
				'label' => __('Third Slider Image---------', 'modelo'),
				//section is key
				'section' => 'modelo_homepage_Slider',
				'priority' => 13,
			)));
			
			
					// Third Slider Top Sub Heading
						$wp_customize->add_setting(
						'modelo_homepage_slider_tshead3', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_slider_tshead3', array(
							'label' => __('Sub Heading 3', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_Slider',
							'type' => 'text',
							'priority' => 14,
						));
					
					// Third Slider Heading
						$wp_customize->add_setting(
						'modelo_homepage_slider_heading3', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_slider_heading3', array(
							'label' => __('Heading 3', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_Slider',
							'type' => 'text',
							'priority' => 15,
						));
			
					// Third Slider Description
						$wp_customize->add_setting(
						'modelo_homepage_slider_desc3', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_slider_desc3', array(
							'label' => __('Description 3', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_Slider',
							'type' => 'text',
							'priority' => 16,
						));
			
					// Third Slider Button Text
						$wp_customize->add_setting(
						'modelo_homepage_slider_button_text3', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_slider_button_text3', array(
							'label' => __('Slider Button Text 3', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_Slider',
							'type' => 'text',
							'priority' => 17,
						));
			
					// Third Slider Image Link
						$wp_customize->add_setting(
						'modelo_homepage_slider_image_link3', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_slider_image_link3', array(
							'label' => __('Slider Link 3', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_Slider',
							'type' => 'text',
							'priority' => 18,
						));
			
			//  Fourth Slider Image
			// -------------------------------
			$wp_customize->add_setting('modelo_homepage_slider_image4');
					
			$wp_customize->add_control( new WP_Customize_Image_Control(
				$wp_customize, 'modelo_homepage_slider_image4', array(
				'label' => __('Fourth Slider Image---------', 'modelo'),
				//section is key
				'section' => 'modelo_homepage_Slider',
				'priority' => 19,
			)));
			
			
					// Fourth Slider Top Sub Heading
						$wp_customize->add_setting(
						'modelo_homepage_slider_tshead4', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_slider_tshead4', array(
							'label' => __('Sub Heading 4', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_Slider',
							'type' => 'text',
							'priority' => 20,
						));
					
					// Fourth Slider Heading
						$wp_customize->add_setting(
						'modelo_homepage_slider_heading4', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_slider_heading4', array(
							'label' => __('Heading 4', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_Slider',
							'type' => 'text',
							'priority' => 21,
						));
			
					// Fourth Slider Description
						$wp_customize->add_setting(
						'modelo_homepage_slider_desc4', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_slider_desc4', array(
							'label' => __('Description 4', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_Slider',
							'type' => 'text',
							'priority' => 22,
						));
			
					// Fourth Slider Button Text
						$wp_customize->add_setting(
						'modelo_homepage_slider_button_text4', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_slider_button_text4', array(
							'label' => __('Slider Button Text 4', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_Slider',
							'type' => 'text',
							'priority' => 23,
						));
			
					// Fourth Slider Image Link
						$wp_customize->add_setting(
						'modelo_homepage_slider_image_link4', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_slider_image_link4', array(
							'label' => __('Slider Link 4', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_Slider',
							'type' => 'text',
							'priority' => 24,
						));
			
			//  Fifth Slider Image
			// -------------------------------
			$wp_customize->add_setting('modelo_homepage_slider_image5');
					
			$wp_customize->add_control( new WP_Customize_Image_Control(
				$wp_customize, 'modelo_homepage_slider_image5', array(
				'label' => __('Fifth Slider Image---------', 'modelo'),
				//section is key
				'section' => 'modelo_homepage_Slider',
				'priority' => 25,
			)));
			
			
					// Fifth Slider Top Sub Heading
						$wp_customize->add_setting(
						'modelo_homepage_slider_tshead5', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_slider_tshead5', array(
							'label' => __('Sub Heading 5', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_Slider',
							'type' => 'text',
							'priority' => 26,
						));
					
					// Fifth Slider Heading
						$wp_customize->add_setting(
						'modelo_homepage_slider_heading5', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_slider_heading5', array(
							'label' => __('Heading 5', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_Slider',
							'type' => 'text',
							'priority' => 27,
						));
			
					// Fifth Slider Description
						$wp_customize->add_setting(
						'modelo_homepage_slider_desc5', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_slider_desc5', array(
							'label' => __('Description 5', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_Slider',
							'type' => 'text',
							'priority' => 28,
						));
			
					// Fifth Slider Button Text
						$wp_customize->add_setting(
						'modelo_homepage_slider_button_text5', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_slider_button_text5', array(
							'label' => __('Slider Button Text 5', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_Slider',
							'type' => 'text',
							'priority' => 29,
						));
			
					// Fifth Slider Image Link
						$wp_customize->add_setting(
						'modelo_homepage_slider_image_link5', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_slider_image_link5', array(
							'label' => __('Fifth Slider Link', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_Slider',
							'type' => 'text',
							'priority' => 30,
						));
			
	//Homepage Shop Category Section ------------
	/*------------------------------------- */
    $wp_customize->add_section(
		//main key for section
		'modelo_homepage_shopcat', array(
        'title' => __('Shop Category', 'modelo'),
		'panel'  => 'homepage',
        'priority' => 44,
            )
    );	

			//Hide Shop Category Section
			$wp_customize->add_setting(
				'modelo_homepage_shopcat_hide', array(
				'default' => '',
				'sanitize_callback' => 'modelo_sanitize_checkbox',
					)
			);
			$wp_customize->add_control(
				'modelo_homepage_shopcat_hide',
				array(
					'type' => 'checkbox',
					'label' => __('Hide Shop Category Section', 'modelo'),
					'section' => 'modelo_homepage_shopcat',
					'priority' => 1,
				)
			);
			
			//  First Shop Category Image
			// ----------------------------------------------------------
			$wp_customize->add_setting('modelo_homepage_shopcat_image1');
					
			$wp_customize->add_control( new WP_Customize_Image_Control(
				$wp_customize, 'modelo_homepage_shopcat_image1', array(
				'label' => __('Category Image First', 'modelo'),
				//section is key
				'section' => 'modelo_homepage_shopcat',
				'priority' => 2,
			)));
			
					// First Shop Category Text
						$wp_customize->add_setting(
						'modelo_homepage_shopcat_text1', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_shopcat_text1', array(
							'label' => __('First Category Name', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_shopcat',
							'type' => 'text',
							'priority' => 3,
						));
						
					// First Shopcat Link
						$wp_customize->add_setting(
						'modelo_homepage_shopcat_link1', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_shopcat_link1', array(
							'label' => __('First Category Link', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_shopcat',
							'type' => 'text',
							'priority' => 4,
						));
						
			//  Second Shop Category Image
			// -------------------------------------------------------------
			$wp_customize->add_setting('modelo_homepage_shopcat_image2');
					
			$wp_customize->add_control( new WP_Customize_Image_Control(
				$wp_customize, 'modelo_homepage_shopcat_image2', array(
				'label' => __('Category Image Second', 'modelo'),
				//section is key
				'section' => 'modelo_homepage_shopcat',
				'priority' => 5,
			)));
			
					// Second Shop Category Text
						$wp_customize->add_setting(
						'modelo_homepage_shopcat_text2', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_shopcat_text2', array(
							'label' => __('Second Category Name', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_shopcat',
							'type' => 'text',
							'priority' => 6,
						));
						
					// Second Shop Category Link
						$wp_customize->add_setting(
						'modelo_homepage_shopcat_link2', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_shopcat_link2', array(
							'label' => __('Second Category Link', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_shopcat',
							'type' => 'text',
							'priority' => 7,
						));
						
				
			//  Third Shop Category Image
			// -------------------------------------------------------------
			$wp_customize->add_setting('modelo_homepage_shopcat_image3');
					
			$wp_customize->add_control( new WP_Customize_Image_Control(
				$wp_customize, 'modelo_homepage_shopcat_image3', array(
				'label' => __('Category Image Third', 'modelo'),
				//section is key
				'section' => 'modelo_homepage_shopcat',
				'priority' => 8,
			)));
			
					// Third Shop Category Text
						$wp_customize->add_setting(
						'modelo_homepage_shopcat_text3', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_shopcat_text3', array(
							'label' => __('Third Category Name', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_shopcat',
							'type' => 'text',
							'priority' => 9,
						));
						
					// Third Shop Category Link
						$wp_customize->add_setting(
						'modelo_homepage_shopcat_link3', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_shopcat_link3', array(
							'label' => __('Third Category Link', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_shopcat',
							'type' => 'text',
							'priority' => 10,
						));
						
				
			//  Fourth Shop Category Image
			// -------------------------------------------------------------
			$wp_customize->add_setting('modelo_homepage_shopcat_image4');
					
			$wp_customize->add_control( new WP_Customize_Image_Control(
				$wp_customize, 'modelo_homepage_shopcat_image4', array(
				'label' => __('Category Image Fourth', 'modelo'),
				//section is key
				'section' => 'modelo_homepage_shopcat',
				'priority' => 11,
			)));
			
					// Fourth Shop Category Text
						$wp_customize->add_setting(
						'modelo_homepage_shopcat_text4', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_shopcat_text4', array(
							'label' => __('Fourth Category Name', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_shopcat',
							'type' => 'text',
							'priority' => 12,
						));
						
					// Fourth Shop Category Link
						$wp_customize->add_setting(
						'modelo_homepage_shopcat_link4', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_shopcat_link4', array(
							'label' => __('Fourth Category Link', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_shopcat',
							'type' => 'text',
							'priority' => 13,
						));
						
				
			//  Fifth Shop Category Image
			// -------------------------------------------------------------
			$wp_customize->add_setting('modelo_homepage_shopcat_image5');
					
			$wp_customize->add_control( new WP_Customize_Image_Control(
				$wp_customize, 'modelo_homepage_shopcat_image5', array(
				'label' => __('Category Image Fifth', 'modelo'),
				//section is key
				'section' => 'modelo_homepage_shopcat',
				'priority' => 14,
			)));
			
					// Fifth Shop Category Text
						$wp_customize->add_setting(
						'modelo_homepage_shopcat_text5', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_shopcat_text5', array(
							'label' => __('Fifth Category Name', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_shopcat',
							'type' => 'text',
							'priority' => 15,
						));
						
					// Fifth Shop Category Link
						$wp_customize->add_setting(
						'modelo_homepage_shopcat_link5', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_shopcat_link5', array(
							'label' => __('Fifth Category Link', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_shopcat',
							'type' => 'text',
							'priority' => 16,
						));
						
	//Homepage Product Crowsel Section ------------
	/*------------------------------------- */
    $wp_customize->add_section(
		//main key for section
		'modelo_homepage_crousel', array(
        'title' => __('Product Crousel', 'modelo'),
		'panel'  => 'homepage',
        'priority' => 45,
            )
    );	
	
			//  Crousel Parallax
			// ------------------------
			$wp_customize->add_setting('modelo_homepage_slider_crousel');
					
			$wp_customize->add_control( new WP_Customize_Image_Control(
				$wp_customize, 'modelo_homepage_slider_crousel', array(
				'label' => __('Parallax Image', 'modelo'),
				//section is key
				'section' => 'modelo_homepage_crousel',
				'priority' => 1,
			)));

			
			
	//Homepage Shop Section ------------
	/*------------------------------------- */
    $wp_customize->add_section(
		//main key for section
		'modelo_homepage_shop', array(
        'title' => __('Shop', 'modelo'),
		'panel'  => 'homepage',
        'priority' => 46,
            )
    );	
	

			//Hide Shop Category Section
			$wp_customize->add_setting(
				'modelo_homepage_shop_hide', array(
				'default' => '',
				'sanitize_callback' => 'modelo_sanitize_checkbox',
					)
			);
			$wp_customize->add_control(
				'modelo_homepage_shop_hide',
				array(
					'type' => 'checkbox',
					'label' => __('Hide Shop Section', 'modelo'),
					'section' => 'modelo_homepage_shop',
					'priority' => 1,
				)
			);
			
			
			//Hide Shop Link
			$wp_customize->add_setting(
				'modelo_homepage_shoplink_hide', array(
				'default' => '',
				'sanitize_callback' => 'modelo_sanitize_checkbox',
					)
			);
			$wp_customize->add_control(
				'modelo_homepage_shoplink_hide',
				array(
					'type' => 'checkbox',
					'label' => __('Hide Top Link', 'modelo'),
					'section' => 'modelo_homepage_shop',
					'priority' => 2,
				)
			);
			
			
				// First Link Text
				// ---------------------------------------------------
					$wp_customize->add_setting(
					'modelo_homepage_shop_text1', array(
						'default' => 'TRENDING THIS WEEK',
						'sanitize_callback' => 'modelo_sanitize_text',
							)
					);
					$wp_customize->add_control(
							'modelo_homepage_shop_text1', array(
						'label' => __('Left Text', 'modelo'),
						//section is key
						'section' => 'modelo_homepage_shop',
						'type' => 'text',
						'priority' => 3,
					));
					
				// First bottom banner Link
					$wp_customize->add_setting(
					'modelo_homepage_shop_link1', array(
						'default' => '',
						'sanitize_callback' => 'modelo_sanitize_text',
							)
					);
					$wp_customize->add_control(
							'modelo_homepage_shop_link1', array(
						'label' => __('Left Link', 'modelo'),
						//section is key
						'section' => 'modelo_homepage_shop',
						'type' => 'text',
						'priority' => 4,
					));
					
				// Second Link Text
				// ------------------------------------------------------
					$wp_customize->add_setting(
					'modelo_homepage_shop_text2', array(
						'default' => 'VIEW ALL PRODUCTS',
						'sanitize_callback' => 'modelo_sanitize_text',
							)
					);
					$wp_customize->add_control(
							'modelo_homepage_shop_text2', array(
						'label' => __('Right Text', 'modelo'),
						//section is key
						'section' => 'modelo_homepage_shop',
						'type' => 'text',
						'priority' => 5,
					));
					
				// Second bottom banner Link
					$wp_customize->add_setting(
					'modelo_homepage_shop_link2', array(
						'default' => '',
						'sanitize_callback' => 'modelo_sanitize_text',
							)
					);
					$wp_customize->add_control(
							'modelo_homepage_shop_link2', array(
						'label' => __('Right Link', 'modelo'),
						//section is key
						'section' => 'modelo_homepage_shop',
						'type' => 'text',
						'priority' => 6,
					));
					
					// No of product on homepage
					$wp_customize->add_setting(
					'modelo_homepage_shop_noofproduct', array(
						'default' => '6',
						'sanitize_callback' => 'modelo_sanitize_text',
							)
					);
					$wp_customize->add_control(
							'modelo_homepage_shop_noofproduct', array(
						'label' => __('Number of Products to show', 'modelo'),
						//section is key
						'section' => 'modelo_homepage_shop',
						'type' => 'text',
						'priority' => 7,
					));



	//Homepage Bottom Banner Section ------------
	/*------------------------------------- */
    $wp_customize->add_section(
		//main key for section
		'modelo_homepage_bottom_banner', array(
        'title' => __('Bottom Banner', 'modelo'),
		'panel'  => 'homepage',
        'priority' => 47,
            )
    );	

			//Hide Shop Category Section
			$wp_customize->add_setting(
				'modelo_homepage_bottom_banner_hide', array(
				'default' => '',
				'sanitize_callback' => 'modelo_sanitize_checkbox',
					)
			);
			$wp_customize->add_control(
				'modelo_homepage_bottom_banner_hide',
				array(
					'type' => 'checkbox',
					'label' => __('Hide Bottom Banner Section', 'modelo'),
					'section' => 'modelo_homepage_bottom_banner',
					'priority' => 1,
				)
			);
			
			//  First Bottom Banner Image
			// -------------------------------------------------------------
			$wp_customize->add_setting('modelo_homepage_btmbnner_image1');
					
			$wp_customize->add_control( new WP_Customize_Image_Control(
				$wp_customize, 'modelo_homepage_btmbnner_image1', array(
				'label' => __('Category Image First', 'modelo'),
				//section is key
				'section' => 'modelo_homepage_bottom_banner',
				'priority' => 2,
			)));
			
					// First bottom banner text
						$wp_customize->add_setting(
						'modelo_homepage_bottombanner_text1', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_bottombanner_text1', array(
							'label' => __('First Banner Text', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_bottom_banner',
							'type' => 'text',
							'priority' => 3,
						));
						
					// First bottom banner Link
						$wp_customize->add_setting(
						'modelo_homepage_bottombanner_link1', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_bottombanner_link1', array(
							'label' => __('First Banner Link', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_bottom_banner',
							'type' => 'text',
							'priority' => 4,
						));

						
			//  Second Bottom Banner Image
			// -------------------------------------------------------------
			$wp_customize->add_setting('modelo_homepage_btmbnner_image2');
					
			$wp_customize->add_control( new WP_Customize_Image_Control(
				$wp_customize, 'modelo_homepage_btmbnner_image2', array(
				'label' => __('Category Image Second', 'modelo'),
				//section is key
				'section' => 'modelo_homepage_bottom_banner',
				'priority' => 5,
			)));
			
					// Second bottom banner text
						$wp_customize->add_setting(
						'modelo_homepage_bottombanner_text2', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_bottombanner_text2', array(
							'label' => __('Second Banner Text', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_bottom_banner',
							'type' => 'text',
							'priority' => 6,
						));
						
					// Second bottom banner Link
						$wp_customize->add_setting(
						'modelo_homepage_bottombanner_link2', array(
							'default' => '',
							'sanitize_callback' => 'modelo_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'modelo_homepage_bottombanner_link2', array(
							'label' => __('Second Banner Link', 'modelo'),
							//section is key
							'section' => 'modelo_homepage_bottom_banner',
							'type' => 'text',
							'priority' => 7,
						));
			
			//  Crousel Parallax
			// ------------------------
			$wp_customize->add_setting('modelo_homepage_bb_parallax');
					
			$wp_customize->add_control( new WP_Customize_Image_Control(
				$wp_customize, 'modelo_homepage_bb_parallax', array(
				'label' => __('Parallax Image', 'modelo'),
				//section is key
				'section' => 'modelo_homepage_bottom_banner',
				'priority' => 8,
			)));
						
/* ------------------------------------------------------	
   Blog Panel
------------------------------------------------------ */
	//Homepage Bottom Banner Section ------------
	/*------------------------------------- */
    $wp_customize->add_section(
		//main key for section
		'modelo_homepage_blog', array(
        'title' => __('Blog', 'modelo'),
		'panel'  => 'homepage',
        'priority' => 55,
            )
    );	

			//Hide Blog Section
			$wp_customize->add_setting(
				'modelo_homepage_blog_hide', array(
				'default' => '',
				'sanitize_callback' => 'modelo_sanitize_checkbox',
					)
			);
			$wp_customize->add_control(
				'modelo_homepage_blog_hide',
				array(
					'type' => 'checkbox',
					'label' => __('Hide Blog Section', 'modelo'),
					'section' => 'modelo_homepage_blog',
					'priority' => 1,
				)
			);

			// Number of post on home page
				$wp_customize->add_setting(
				'modelo_homepage_blogpost_count', array(
					'default' => '3',
					'sanitize_callback' => 'modelo_sanitize_text',
						)
				);
				$wp_customize->add_control(
						'modelo_homepage_blogpost_count', array(
					'label' => __('Number of Post', 'modelo'),
					//section is key
					'section' => 'modelo_homepage_blog',
					'type' => 'text',
					'priority' => 2,
				));	
				
			// Section title
				$wp_customize->add_setting(
				'modelo_homepage_blogsection_title', array(
					'default' => '',
					'sanitize_callback' => 'modelo_sanitize_text',
						)
				);
				$wp_customize->add_control(
						'modelo_homepage_blogsection_title', array(
					'label' => __('Blog Section Title', 'modelo'),
					//section is key
					'section' => 'modelo_homepage_blog',
					'type' => 'text',
					'priority' => 3,
				));					
/* ------------------------------------------------------	
   Layout Panel
------------------------------------------------------ */
   
	$wp_customize->add_panel( 'layout', array(
	 'priority'       => 50,
	  'title'          => __('Layout', 'modelo'),
	  'description'    => __('Set Layouts of your Page, Posts and Blogs.', 'modelo'),
	) );

				//Homepage Shop Category Section ------------
				/*------------------------------------- */
				$wp_customize->add_section(
					//main key for section
					'modelo_layout_blog_page', array(
					'title' => __('Blog Page', 'modelo'),
					'panel'  => 'layout',
					'priority' => 58,
						)
				);
						
						
								/*---- Blog Page Layout------- */
								$wp_customize->add_setting(
									'modelo_layout_sidebar_position',
									array(
										'default' => '',
										'sanitize_callback' => 'modelo_sanitize_layout',
									)
								);
								 
								$wp_customize->add_control(
									'modelo_layout_sidebar_position',
									array(
										'type' => 'radio',
										'label' => 'Choose a layout',
										'section' => 'modelo_layout_blog_page',
										'choices' => array(
											'left' => 'Left Sidebar',
											'right' => 'Right Sidebar',
											'no' => 'No Sidebar',
										),
									)
								);
								

/* ------------------------------------------------------	
   Color Panel
------------------------------------------------------ */
$wp_customize->add_panel( 'theme_colors', array(
 'priority'       => 60,
  'title'          => __('Styles', 'modelo'),
  'description'    => __('Customize color settings for your theme.', 'modelo'),
) );

			// Inserting "Color" section to "Theme Colors"
			/* ------------------------------------------ */
			$wp_customize->add_section( 'colors', array(
			'title' => __( 'Theme Skin' ),
			'theme_supports' => 'custom-header',
			'priority' => 2,
			) );
			$wp_customize->get_section('colors')->panel = 'theme_colors';
			
		
		
		// Theme Color Scheme
		/* ------------------------------------------ */
		$wp_customize->add_setting(
			'modelo_color_scheme',
			array(
				'default'     => '',
				'transport'   => 'postMessage'
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'link_color',
				array(
					'label'      => __( 'Theme Color Scheme', 'modelo' ),
					'section'    => 'colors',
					'settings'   => 'modelo_color_scheme',
					'priority' => 1
				)
			)
		);
		
		
		// Custom CSS
		$wp_customize->add_setting(
			'modelo_custom_css_block', array(
			'default' => '',
			'sanitize_callback' => 'modelo_sanitize_text',
				)
		);
		
		$wp_customize->add_control(
		new Modelo_Customize_Textarea_Control(
			$wp_customize,
			'modelo_custom_css_block', array(
			'label' => __('Custom CSS', 'modelo'),
			//section is key
			'section' => 'colors',
			'type' => 'textarea',
			'priority' => 2,
				)
			)
		);





















}
add_action( 'customize_register', 'modelo_customizer' );