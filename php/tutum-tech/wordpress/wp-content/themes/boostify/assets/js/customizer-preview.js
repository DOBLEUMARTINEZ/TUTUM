/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );
	
	$(document).ready(function ($) {
        $('input[data-input-type]').on('input change', function () {
            var val = $(this).val();
            $(this).prev('.cs-range-value').html(val);
            $(this).val(val);
        });
    })
	
	
	/**
	 * logo_width
	 */
	wp.customize( 'logo_width', function( value ) {
		value.bind( function( width ) {
			jQuery( '.logo img, .mobile-logo img' ).css( 'max-width', width + 'px' );
		} );
	} );
	
	//tlh_mobile_title
	wp.customize(
		'tlh_mobile_title', function( value ) {
			value.bind(
				function( newval ) {
					$( '#header-top .phone a' ).text( newval );
				}
			);
		}
	);

	//tlh_email_title
	wp.customize(
		'tlh_email_title', function( value ) {
			value.bind(
				function( newval ) {
					$( '#header-top .email a' ).text( newval );
				}
			);
		}
	);
	
	//footer_above_ttl
	wp.customize(
		'footer_above_ttl', function( value ) {
			value.bind(
				function( newval ) {
					$( '.main-footer #action-bar .bar-text p' ).text( newval );
				}
			);
		}
	);
	
	//footer_above_btn_lbl1
	wp.customize(
		'footer_above_btn_lbl1', function( value ) {
			value.bind(
				function( newval ) {
					$( '.main-footer #action-bar a.white-bg' ).text( newval );
				}
			);
		}
	);
	
	//footer_above_btn_lbl2
	wp.customize(
		'footer_above_btn_lbl2', function( value ) {
			value.bind(
				function( newval ) {
					$( '.main-footer #action-bar a.contact-btn' ).text( newval );
				}
			);
		}
	);
	
	
	//feature_title
	wp.customize(
		'feature_title', function( value ) {
			value.bind(
				function( newval ) {
					$( '.home-feature .section-header h2' ).text( newval );
				}
			);
		}
	);
	
	//feature_description
	wp.customize(
		'feature_description', function( value ) {
			value.bind(
				function( newval ) {
					$( '.home-feature .section-header p' ).text( newval );
				}
			);
		}
	);
	
	//service_title
	wp.customize(
		'service_title', function( value ) {
			value.bind(
				function( newval ) {
					$( '.service-home .section-header h2' ).text( newval );
				}
			);
		}
	);
	
	//service_description
	wp.customize(
		'service_description', function( value ) {
			value.bind(
				function( newval ) {
					$( '.service-home .section-header p' ).text( newval );
				}
			);
		}
	);
	
	
	//testimonial_title
	wp.customize(
		'testimonial_title', function( value ) {
			value.bind(
				function( newval ) {
					$( '#testimonial .section-header h2' ).text( newval );
				}
			);
		}
	);
	
	//testimonial_description
	wp.customize(
		'testimonial_description', function( value ) {
			value.bind(
				function( newval ) {
					$( '#testimonial .section-header p' ).text( newval );
				}
			);
		}
	);
	
	
	
	//blog_title
	wp.customize(
		'blog_title', function( value ) {
			value.bind(
				function( newval ) {
					$( '.home-blog .subscribe-text h3' ).text( newval );
				}
			);
		}
	);
	
	//blog_description
	wp.customize(
		'blog_description', function( value ) {
			value.bind(
				function( newval ) {
					$( '.home-blog .subscribe-text p' ).text( newval );
				}
			);
		}
	);
	
	
	/**
	 * Breadcrumb Typography
	 */
	
	wp.customize( 'breadcrumb_min_height', function( value ) {
		value.bind( function( size ) {
			jQuery( '#breadcrumb-area' ).css( 'min-height', size + 'px' );
		} );
	} );
	
	
	/**
	 * Body font size
	 */
	wp.customize( 'boostify_body_font_size', function( value ) {
		value.bind( function( size ) {
			jQuery( 'body' ).css( 'font-size', size + 'px' );
		} );
	} );
	
	
	/**
	 * Body font style
	 */
	wp.customize( 'boostify_body_font_style', function( value ) {
		value.bind( function( font_style ) {
			jQuery( 'body' ).css( 'font-style', font_style );
		} );
	} );
	
	/**
	 * Body text tranform
	 */
	wp.customize( 'boostify_body_text_transform', function( value ) {
		value.bind( function( text_tranform ) {
			jQuery( 'body' ).css( 'text-transform', text_tranform );
		} );
	} );
	
	/**
	 * boostify_body_line_height
	 */
	
	wp.customize( 'boostify_body_line_height', function( value ) {
		value.bind( function( line_height ) {
			jQuery( 'body' ).css( 'line-height', line_height );
		} );
	} );
	
	/**
	 * H1 font family
	 */
	wp.customize( 'boostify_h1_font_family', function( value ) {
		value.bind( function( font_family ) {
			jQuery( 'h1' ).css( 'font-family', font_family );
		} );
	} );
	
	/**
	 * H1 font size
	 */
	wp.customize( 'boostify_h1_font_size', function( value ) {
		value.bind( function( size ) {
			jQuery( 'h1' ).css( 'font-size', size + 'px' );
		} );
	} );
	
	
	/**
	 * H1 font style
	 */
	wp.customize( 'boostify_h1_font_style', function( value ) {
		value.bind( function( font_style ) {
			jQuery( 'h1' ).css( 'font-style', font_style );
		} );
	} );
	
	/**
	 * H1 text tranform
	 */
	wp.customize( 'boostify_h1_text_transform', function( value ) {
		value.bind( function( text_tranform ) {
			jQuery( 'h1' ).css( 'text-transform', text_tranform );
		} );
	} );
	
	/**
	 * H1 line height
	 */
	wp.customize( 'boostify_h1_line_height', function( value ) {
		value.bind( function( line_height ) {
			jQuery( 'h1' ).css( 'line-height', line_height );
		} );
	} );
	
	/**
	 * H2 font family
	 */
	wp.customize( 'boostify_h2_font_family', function( value ) {
		value.bind( function( font_family ) {
			jQuery( 'h2' ).css( 'font-family', font_family );
		} );
	} );
	
	/**
	 * H2 font size
	 */
	wp.customize( 'boostify_h2_font_size', function( value ) {
		value.bind( function( size ) {
			jQuery( 'h2' ).css( 'font-size', size + 'px' );
		} );
	} );
	
	/**
	 * H2 font style
	 */
	wp.customize( 'boostify_h2_font_style', function( value ) {
		value.bind( function( font_style ) {
			jQuery( 'h2' ).css( 'font-style', font_style );
		} );
	} );
	
	/**
	 * H2 text tranform
	 */
	wp.customize( 'boostify_h2_text_transform', function( value ) {
		value.bind( function( text_tranform ) {
			jQuery( 'h2' ).css( 'text-transform', text_tranform );
		} );
	} );
	
	/**
	 * H2 line height
	 */
	wp.customize( 'boostify_h2_line_height', function( value ) {
		value.bind( function( line_height ) {
			jQuery( 'h2' ).css( 'line-height', line_height );
		} );
	} );
	
	/**
	 * H3 font family
	 */
	wp.customize( 'boostify_h3_font_family', function( value ) {
		value.bind( function( font_family ) {
			jQuery( 'h3' ).css( 'font-family', font_family );
		} );
	} );
	
	/**
	 * H3 font size
	 */
	wp.customize( 'boostify_h3_font_size', function( value ) {
		value.bind( function( size ) {
			jQuery( 'h3' ).css( 'font-size', size + 'px' );
		} );
	} );
	
	/**
	 * H3 font style
	 */
	wp.customize( 'boostify_h3_font_style', function( value ) {
		value.bind( function( font_style ) {
			jQuery( 'h3' ).css( 'font-style', font_style );
		} );
	} );
	
	/**
	 * H3 text tranform
	 */
	wp.customize( 'boostify_h3_text_transform', function( value ) {
		value.bind( function( text_tranform ) {
			jQuery( 'h3' ).css( 'text-transform', text_tranform );
		} );
	} );
	
	/**
	 * H3 line height
	 */
	wp.customize( 'boostify_h3_line_height', function( value ) {
		value.bind( function( line_height ) {
			jQuery( 'h3' ).css( 'line-height', line_height );
		} );
	} );
	
	/**
	 * H4 font family
	 */
	wp.customize( 'boostify_h4_font_family', function( value ) {
		value.bind( function( font_family ) {
			jQuery( 'h4' ).css( 'font-family', font_family );
		} );
	} );
	
	/**
	 * H4 font size
	 */
	wp.customize( 'boostify_h4_font_size', function( value ) {
		value.bind( function( size ) {
			jQuery( 'h4' ).css( 'font-size', size + 'px' );
		} );
	} );
	
	/**
	 * H4 font style
	 */
	wp.customize( 'boostify_h4_font_style', function( value ) {
		value.bind( function( font_style ) {
			jQuery( 'h4' ).css( 'font-style', font_style );
		} );
	} );
	
	/**
	 * H4 text tranform
	 */
	wp.customize( 'boostify_h4_text_transform', function( value ) {
		value.bind( function( text_tranform ) {
			jQuery( 'h4' ).css( 'text-transform', text_tranform );
		} );
	} );
	
	/**
	 * H4 line height
	 */
		wp.customize( 'boostify_h4_line_height', function( value ) {
		value.bind( function( line_height ) {
			jQuery( 'h4' ).css( 'line-height', line_height );
		} );
	} );
	
	/**
	 * H5 font family
	 */
	wp.customize( 'boostify_h5_font_family', function( value ) {
		value.bind( function( font_family ) {
			jQuery( 'h5' ).css( 'font-family', font_family );
		} );
	} );
	
	/**
	 * H5 font size
	 */
	wp.customize( 'boostify_h5_font_size', function( value ) {
		value.bind( function( size ) {
			jQuery( 'h5' ).css( 'font-size', size + 'px' );
		} );
	} );
	
	/**
	 * H5 font style
	 */
	wp.customize( 'boostify_h5_font_style', function( value ) {
		value.bind( function( font_style ) {
			jQuery( 'h5' ).css( 'font-style', font_style );
		} );
	} );
	
	/**
	 * H5 text tranform
	 */
	wp.customize( 'boostify_h5_text_transform', function( value ) {
		value.bind( function( text_tranform ) {
			jQuery( 'h5' ).css( 'text-transform', text_tranform );
		} );
	} );
	
	/**
	 * H5 line height
	 */
		wp.customize( 'boostify_h5_line_height', function( value ) {
		value.bind( function( line_height ) {
			jQuery( 'h5' ).css( 'line-height', line_height );
		} );
	} );
	
	/**
	 * H6 font family
	 */
	wp.customize( 'boostify_h6_font_family', function( value ) {
		value.bind( function( font_family ) {
			jQuery( 'h6' ).css( 'font-family', font_family );
		} );
	} );
	
	/**
	 * H6 font size
	 */
	wp.customize( 'boostify_h6_font_size', function( value ) {
		value.bind( function( size ) {
			jQuery( 'h6' ).css( 'font-size', size + 'px' );
		} );
	} );
	
	/**
	 * H6 font style
	 */
	wp.customize( 'boostify_h6_font_style', function( value ) {
		value.bind( function( font_style ) {
			jQuery( 'h6' ).css( 'font-style', font_style );
		} );
	} );
	
	/**
	 * H6 text tranform
	 */
	wp.customize( 'boostify_h6_text_transform', function( value ) {
		value.bind( function( text_tranform ) {
			jQuery( 'h6' ).css( 'text-transform', text_tranform );
		} );
	} );
	
	/**
	 * H6 line height
	 */
	wp.customize( 'boostify_h6_line_height', function( value ) {
		value.bind( function( line_height ) {
			jQuery( 'h6' ).css( 'line-height', line_height );
		} );
	} );
	
} )( jQuery );