(function($) {
	$(document).ready( function() {
		$( '#cntctfrmpr_show_multi_notice' ).removeAttr('href title').css('cursor', 'pointer');

		$( '#cntctfrmpr_style_options' ).change( function() {
			if ( $( this ).is( ':checked' ) ) {
				$( '.cntctfrmpr_style_block' ).removeClass( 'cntctfrmpr_hidden' );
			} else {
				$( '.cntctfrmpr_style_block' ).addClass( 'cntctfrmpr_hidden' );
			}
		});
		$( '#cntctfrmpr_change_label' ).change( function() {
			if ( $( this ).is( ':checked' ) ) {
				$( '.cntctfrmpr_change_label_block' ).removeClass( 'cntctfrmpr_hidden' );
			} else {
				$( '.cntctfrmpr_change_label_block' ).addClass( 'cntctfrmpr_hidden' );
			}
		});
		$( '#cntctfrmpr_display_add_info' ).change( function() {
			if ( $( this ).is( ':checked' ) ) {
				$( '.cntctfrmpr_display_add_info_block' ).removeClass( 'cntctfrmpr_hidden' );
			} else {
				$( '.cntctfrmpr_display_add_info_block' ).addClass( 'cntctfrmpr_hidden' );
			}
		});
		$( '#cntctfrmpr_auto_response' ).change( function() {
			if ( $( this ).is( ':checked' ) ) {
				$( '.cntctfrmpr_auto_response_block' ).removeClass( 'cntctfrmpr_hidden' );
			} else {
				$( '.cntctfrmpr_auto_response_block' ).addClass( 'cntctfrmpr_hidden' );
			}
		});
		$( '#cntctfrmpr_add_language_button' ).click( function() {
			$.ajax({
				url: '../wp-admin/admin-ajax.php',
				type: "POST",
				data: 'action=cntctfrmpr_add_language&lang=' + $( '#cntctfrmpr_languages' ).val() + '&cntctfrmpr_ajax_nonce_field=' + cntctfrmpr_ajax.cntctfrmpr_nonce,
				success: function(result) {
					var text = $.parseJSON( result );
					var lang_val = $( '#cntctfrmpr_languages' ).val();
					$( '.cntctfrmpr_change_label_block .cntctfrmpr_language_tab, .cntctfrmpr_action_after_send_block .cntctfrmpr_language_tab' ).each( function() {
						$( this ).addClass( 'hidden' );
					});
					$( '.cntctfrmpr_change_label_block .cntctfrmpr_language_tab' ).first().clone().appendTo( '.cntctfrmpr_change_label_block' ).removeClass( 'hidden' ).removeClass( 'cntctfrmpr_tab_en' ).addClass( 'cntctfrmpr_tab_' + lang_val );
					$( '.cntctfrmpr_action_after_send_block .cntctfrmpr_language_tab' ).first().clone().insertBefore( '#cntctfrmpr_before' ).removeClass( 'hidden' ).removeClass( 'cntctfrmpr_tab_en' ).addClass( 'cntctfrmpr_tab_' + lang_val );
					$( '.cntctfrmpr_change_label_block .cntctfrmpr_language_tab' ).last().find( 'input' ).each( function() {
						$( this ).val( '' );
						$( this ).attr( 'name', $( this ).attr( 'name' ).replace( '[en]', '[' + lang_val + ']' ) );
					});
					$( '.cntctfrmpr_change_label_block .cntctfrmpr_language_tab' ).last().find( 'textarea' ).each( function() {
						$( this ).text( '' );
						$( this ).attr( 'name', $( this ).attr( 'name' ).replace( '[en]', '[' + lang_val + ']' ) );
					});
					$( '.cntctfrmpr_change_label_block .cntctfrmpr_language_tab' ).last().find( '.cntctfrmpr_info' ).last().html( text );
					$( '.cntctfrmpr_action_after_send_block .cntctfrmpr_language_tab' ).last().find( 'input' ).val( '' ).attr( 'name', $( '.cntctfrmpr_action_after_send_block .cntctfrmpr_language_tab' ).last().find( 'input' ).attr( 'name' ).replace( '[en]', '[' + lang_val + ']' ) );
					$( '.cntctfrmpr_action_after_send_block .cntctfrmpr_language_tab' ).last().find( '.cntctfrmpr_info' ).last().html( text );
					$( '.cntctfrmpr_change_label_block .cntctfrmpr_label_language_tab, .cntctfrmpr_action_after_send_block .cntctfrmpr_label_language_tab' ).each( function() {
						$( this ).removeClass( 'cntctfrmpr_active' );
					});
					$( '.cntctfrmpr_change_label_block .clear' ).prev().clone().attr( 'id', 'cntctfrmpr_label_' + lang_val ).addClass( 'cntctfrmpr_active' ).html( $( '#cntctfrmpr_languages option:selected' ).text() + ' <span class="cntctfrmpr_delete" rel="' + lang_val + '">X</span>' ).insertBefore( '.cntctfrmpr_change_label_block .clear' );
					$( '.cntctfrmpr_action_after_send_block .clear' ).prev().clone().attr( 'id', 'cntctfrmpr_text_' + lang_val ).addClass( 'cntctfrmpr_active' ).html( $( '#cntctfrmpr_languages option:selected' ).text() + ' <span class="cntctfrmpr_delete" rel="' + lang_val + '">X</span>' ).insertBefore( '.cntctfrmpr_action_after_send_block .clear' );
					$( '#cntctfrmpr_languages option:selected' ).remove();
				},
				error: function( request, status, error ) {
					alert( error + request.status );
				}
			});
		});

		$( '.cntctfrmpr_contact_form .cntctfrmpr_help_box' ).bind( 'show_tooltip', function() {
			$help_box = $( this ).children();
			$( this ).removeClass( 'cntctfrmpr_hide_tooltip' );
			$( this ).addClass( 'cntctfrmpr_show_tooltip' );
			if ( $help_box.offset().left + $help_box.innerWidth() > $( window ).width() ) {
				$help_box.addClass( 'cntctfrmpr_hidden_help_text_down' );
			}
		});

		$( '.cntctfrmpr_contact_form .cntctfrmpr_help_box' ).bind( 'hide_tooltip', function() {
			$help_box = $( this ).children();
			$( this ).removeClass( 'cntctfrmpr_show_tooltip' );
			$( this ).addClass( 'cntctfrmpr_hide_tooltip' );
			$help_box.removeClass( 'cntctfrmpr_hidden_help_text_down' );
		});

		$( '.cntctfrmpr_contact_form .cntctfrmpr_help_box' ).mouseenter( function() {
			$( this ).trigger( 'show_tooltip' );
		}).mouseleave( function() {
			$( this ).trigger( 'hide_tooltip' );
		});

		$( '.cntctfrmpr_contact_form .cntctfrmpr_help_box.cntctfrmpr_show_tooltip' ).live( 'click', function() {
			$( this ).trigger( 'hide_tooltip' );
		});

		$( '.cntctfrmpr_contact_form .cntctfrmpr_help_box.cntctfrmpr_hide_tooltip' ).live( 'click', function() {
			$( this ).trigger( 'show_tooltip' );
		});

		$( '#cntctfrmpr_show_errors_block' ).removeClass( 'hidden' );
		var arr = [ 'department', 'location', 'name', 'address', 'email', 'phone', 'subject', 'message', 'attachment', 'captcha' ];
		$.each( arr, function( index, value ) {
			if ( $( 'input[name="cntctfrmpr_tooltip_display_' + value + '"]' ).is( ':checked' ) ) {
				$( '#cntctfrmpr_contact_' + value ).next( '.cntctfrmpr_help_box' ).removeClass( 'hidden' );
			}
			$( "input:checkbox[name='cntctfrmpr_tooltip_display_" + value + "']" ).change( function() {
				if ( $( this ).is( ':checked' ) ) {
					$( '#cntctfrmpr_contact_' + value ).next( '.cntctfrmpr_help_box' ).removeClass( 'hidden' );
				} else {
					$( '#cntctfrmpr_contact_' + value ).next( '.cntctfrmpr_help_box' ).addClass( 'hidden' );
				}
				if( $( "input:checkbox[name^='cntctfrmpr_tooltip_display']:checked").size() > 0 ) {
					$( "#cntctfrmpr_extra_settings_div #cntctfrmpr_right_table .cntctfrmpr_contact_form" ).addClass( 'cntctfrmpr_form_tooltips' );
				} else {
					$( "#cntctfrmpr_extra_settings_div #cntctfrmpr_right_table .cntctfrmpr_contact_form" ).removeClass( 'cntctfrmpr_form_tooltips' );
				}
			});
		});
		if ( $( 'input[name="cntctfrmpr_tooltip_display_attachment"]' ).is( ':checked' ) ) {
			$( '#cntctfrmpr_contact_attachment' ).css( 'float', 'left' );
			$( '#cntctfrmpr_contact_attachment' ).siblings( 'label' ).css( 'display', 'none' );
		};
		$( 'input:checkbox[name="cntctfrmpr_tooltip_display_attachment"]' ).change( function() {
			if ( $( this ).is( ':checked' ) ) {
				$( '#cntctfrmpr_contact_attachment' ).css( 'float', 'left' );
				$( '#cntctfrmpr_contact_attachment' ).siblings( 'label' ).css( 'display', 'none' );
			} else {
				$( '#cntctfrmpr_contact_attachment' ).css( 'float', 'none' );
				$( '#cntctfrmpr_contact_attachment' ).siblings( 'label' ).css( 'display', 'block' );
			};
		});

		$( '#cntctfrmpr_show_errors' ).change( function() {
			$( '#cntctfrmpr_contact_form input.text, #cntctfrmpr_contact_form textarea' ).removeAttr( 'style' );
			if ( $( this ).is( ':checked' ) ) {
				var error_displaying = $( 'select[name="cntctfrmpr_error_displaying"] option:selected' ).val();
				if ( error_displaying == 'labels' ) {
					$( '.cntctfrmpr_error_text' ).removeClass( 'hidden' );
					$( '#cntctfrmpr_contact_form input.text, #cntctfrmpr_contact_form textarea, #cntctfrmpr_contact_form select#cntctfrmpr_contact_location' ).removeClass( 'cntctfrmpr_error' );
				}
				if ( error_displaying == 'input_colors' ) {
					$( '.cntctfrmpr_error_text' ).addClass( 'hidden' );
					$( '#cntctfrmpr_contact_form input.text, #cntctfrmpr_contact_form textarea, #cntctfrmpr_contact_form select#cntctfrmpr_contact_location' ).addClass( 'cntctfrmpr_error' );
				}
				if ( error_displaying == 'both' ) {
					$( '.cntctfrmpr_error_text' ).removeClass( 'hidden' );
					$( '#cntctfrmpr_contact_form input.text, #cntctfrmpr_contact_form textarea, #cntctfrmpr_contact_form select#cntctfrmpr_contact_location' ).addClass( 'cntctfrmpr_error' );
				}
				$( '.cntctfrmpr_help_box' ).addClass( 'cntctfrmpr_help_box_error' );
			} else {
				$( '.cntctfrmpr_error_text' ).addClass( 'hidden' );
				$( '#cntctfrmpr_contact_form input.text, #cntctfrmpr_contact_form textarea, #cntctfrmpr_contact_form select#cntctfrmpr_contact_location' ).removeClass( 'cntctfrmpr_error' );
				$( '.cntctfrmpr_help_box' ).removeClass( 'cntctfrmpr_help_box_error' );
			}
		});
		$( 'select[name="cntctfrmpr_error_displaying"]' ).change( function() {
			if ( $( '#cntctfrmpr_show_errors' ).is( ':checked' ) ) {
				var error_displaying = $( 'select[name="cntctfrmpr_error_displaying"] option:selected' ).val();
				if ( error_displaying == 'labels' ) {
					$( '.cntctfrmpr_error_text' ).removeClass( 'hidden' );
					$( '#cntctfrmpr_contact_form input.text, #cntctfrmpr_contact_form textarea, #cntctfrmpr_contact_form select#cntctfrmpr_contact_location' ).removeClass( 'cntctfrmpr_error' );
				}
				if ( error_displaying == 'input_colors' ) {
					$( '.cntctfrmpr_error_text' ).addClass( 'hidden' );
					$( '#cntctfrmpr_contact_form input.text, #cntctfrmpr_contact_form textarea, #cntctfrmpr_contact_form select#cntctfrmpr_contact_location' ).addClass( 'cntctfrmpr_error' );
				}
				if ( error_displaying == 'both' ) {
					$( '.cntctfrmpr_error_text' ).removeClass( 'hidden' );
					$( '#cntctfrmpr_contact_form input.text, #cntctfrmpr_contact_form textarea, #cntctfrmpr_contact_form select#cntctfrmpr_contact_location' ).addClass( 'cntctfrmpr_error' );
				}
			}
		});
		$( '.cntctfrmpr_default' ).click( function() {
			var def = $( this ).attr( 'id' );
			$( this ).parent().children( 'span' ).children( 'input' ).html( def );
			$( this ).parent().children( 'span' ).children( 'input' ).val( def );
			$( this ).parent().children( 'span' ).children( '.minicolors-swatch' ).children( 'span' ).css( 'background-color', def );
			$( this ).parent().children( '.cntctfrmpr_colorPicker' ).val( def );
			$( this ).parent().children( '.cntctfrmpr_colorPicker' ).html( def );
			$( this ).parent().children( '.cntctfrmpr_colorPicker_small' ).css( 'background-color', def );
		});

		$( '.cntctfrmpr_language_tab_block' ).css( 'display', 'none' );
		$( '.cntctfrmpr_language_tab_block_mini' ).css( 'display', 'block' );

		$( 'input[name="cntctfrmpr_border_input_width"]' ).blur( function() {
			var color = $( this ).val();
			$( '#cntctfrmpr_contact_form input.text, #cntctfrmpr_contact_form textarea, #cntctfrmpr_contact_form select' ).css( 'border-width', color + 'px' );
		});

		$( 'input[name="cntctfrmpr_button_width"]' ).blur( function() {
			var color = $( this ).val();
			$( '#cntctfrmpr_contact_form input[type=submit]' ).css( 'width', color );
		});

		$( 'input[type="minicolors"]' ).each( function() {
		    $( this ).change( function() {
		    	var color = $( this ).val(),
				    this_click_id = $( this ).attr( 'id' );
		    	if ( $( this ).hasClass( 'color' ) ) {
			   		$( this_click_id ).css( 'color' , color );
			   	}
			   	if ( $( this ).hasClass( 'background_color' ) ) {
			   		$( this_click_id ).css( 'background', color );
			   	}
			   	if ( $( this ).hasClass( 'border_color' ) ) {
			   		$( this_click_id ).css( 'border-color', color );
			   	}
			   	if ( $( this ).hasClass( 'placeholder_color_error' ) ) {
			   			styleContent = '#cntctfrmpr_contact_form input.cntctfrmpr_error::-moz-placeholder, #cntctfrmpr_contact_form textarea.cntctfrmpr_error::-moz-placeholder {color: ' + color + ' !important;}	#cntctfrmpr_contact_form input.cntctfrmpr_error::-webkit-input-placeholder, #cntctfrmpr_contact_form textarea.cntctfrmpr_error::-webkit-input-placeholder {color: ' + color + ' !important;} #cntctfrmpr_contact_form input.cntctfrmpr_error:-ms-input-placeholder, #cntctfrmpr_contact_form textarea.cntctfrmpr_error:-ms-input-placeholder {color: ' + color + ' !important;} #cntctfrmpr_contact_form input.cntctfrmpr_error:-moz-placeholder, #cntctfrmpr_contact_form textarea.cntctfrmpr_error:-moz-placeholder {color: ' + color + ' !important;}',
						styleBlock = '<style id="cntctfrmpr_placeholder_error">' + styleContent + '</style>';
			    	$( 'head' ).append( styleBlock );
			   	}
			   	if ( $( this ).hasClass( 'placeholder_color' ) ) {
			   		styleContent = '#cntctfrmpr_contact_form input::-moz-placeholder, #cntctfrmpr_contact_form textarea::-moz-placeholder {color: ' + color + ' !important;} #cntctfrmpr_contact_form input::-webkit-input-placeholder, #cntctfrmpr_contact_form textarea::-webkit-input-placeholder {color: ' + color + ' !important;} #cntctfrmpr_contact_form input:-ms-input-placeholder, #cntctfrmpr_contact_form textarea:-ms-input-placeholder {color: ' + color + ' !important;} #cntctfrmpr_contact_form input:-moz-placeholder, #cntctfrmpr_contact_form textarea:-moz-placeholder {color: ' + color + ' !important;}',
					styleBlock = '<style id="cntctfrmpr_placeholder">' + styleContent + '</style>';
		    		$( 'head' ).append( styleBlock );
		    	}
		    });
		});
		$( '.minicolors-swatch' ).each( function() {
		    $( this ).change( function() {
		    	var color = $( this ).prev().val(),
				    this_click_id = $( this ).prev().attr( 'id' );
		    	if ( $( this ).prev().hasClass( 'color' ) ) {
			   		$( this_click_id ).css( 'color', color );
			   	}
			   	if ( $( this ).prev().hasClass( 'background_color' ) ) {
			   		$( this_click_id ).css( 'background', color );
			   	}
			   	if ( $( this ).prev().hasClass( 'border_color' ) ) {
			   		$( this_click_id ).css( 'border-color', color );
			   	}
			   	if ( $( this ).prev().hasClass( 'placeholder_color_error' ) ) {
			   			styleContent = '#cntctfrmpr_contact_form input.cntctfrmpr_error::-moz-placeholder, #cntctfrmpr_contact_form textarea.cntctfrmpr_error::-moz-placeholder {color: ' + color + ' !important;}	#cntctfrmpr_contact_form input.cntctfrmpr_error::-webkit-input-placeholder, #cntctfrmpr_contact_form textarea.cntctfrmpr_error::-webkit-input-placeholder {color: ' + color + ' !important;} #cntctfrmpr_contact_form input.cntctfrmpr_error:-ms-input-placeholder, #cntctfrmpr_contact_form textarea.cntctfrmpr_error:-ms-input-placeholder {color: ' + color + ' !important;} #cntctfrmpr_contact_form input.cntctfrmpr_error:-moz-placeholder, #cntctfrmpr_contact_form textarea.cntctfrmpr_error:-moz-placeholder {color: ' + color + ' !important;}',
						styleBlock = '<style id="cntctfrmpr_placeholder_error">' + styleContent + '</style>';
			    	$( 'head' ).append( styleBlock );
			   	}
			   	if ( $( this ).prev().hasClass( 'placeholder_color' ) ) {
			   		styleContent = '#cntctfrmpr_contact_form input::-moz-placeholder, #cntctfrmpr_contact_form textarea::-moz-placeholder {color: ' + color + ' !important;} #cntctfrmpr_contact_form input::-webkit-input-placeholder, #cntctfrmpr_contact_form textarea::-webkit-input-placeholder {color: ' + color + ' !important;} #cntctfrmpr_contact_form input:-ms-input-placeholder, #cntctfrmpr_contact_form textarea:-ms-input-placeholder {color: ' + color + ' !important;} #cntctfrmpr_contact_form input:-moz-placeholder, #cntctfrmpr_contact_form textarea:-moz-placeholder {color: ' + color + ' !important;}',
					styleBlock = '<style id="cntctfrmpr_placeholder">' + styleContent + '</style>';
		    		$( 'head' ).append( styleBlock );
		    	}
		    });
		});

		// departament select in admin
		$( '.cntctfrmpr_add_new' ).addClass( 'hidden' );
		$( '#cntctfrmpr_department_add' ).removeClass( 'hidden' );
		$( '#cntctfrmpr_department_add' ).click( function() {
			var department = $( '.cntctfrmpr_department_block_new' ).clone().addClass( 'cntctfrmpr_department_block' ).removeClass( 'cntctfrmpr_department_block_new' );
			$( department ).children().children().val( '' );
			$( department ).appendTo( '.cntctfrmpr_department_sortable' );
		});
		$( '.cntctfrmpr_department_delete input' ).addClass( 'cntctfrmpr_del_check' );

		$( ".cntctfrmpr_department_sortable" ).sortable( {
			handle : '.cntctfrmpr_drag_departament'
		});


		/* fields table validation */
		$( 'input[name=cntctfrmpr_required_subject_field], input[name=cntctfrmpr_required_message_field]' ).each( function() {
			if ( $( this ).is( ':checked' ) ) {
				$( 'input[name=cntctfrmpr_visible_' + $( this ).attr( 'class' ) + '], input[name=cntctfrmpr_disabled_' + $( this ).attr( 'class' )  + ']' ).attr( 'disabled', 'disabled' );
			}
			$( this ).click( function() {
			    if ( $( this ).is( ':checked' ) ) {
					$( 'input[name=cntctfrmpr_visible_' + $( this ).attr( 'class' ) + ']' ).attr( 'disabled', 'disabled' ).prop( "checked", true );
					$( 'input[name=cntctfrmpr_disabled_' + $( this ).attr( 'class' )  + ']' ).attr( 'disabled', 'disabled' ).prop( "checked", false );
				} else {
					$( 'input[name=cntctfrmpr_visible_' + $( this ).attr( 'class' ) + '], input[name=cntctfrmpr_disabled_' + $( this ).attr( 'class' )  + ']' ).removeAttr( 'disabled' );
				}
		    });
		});

		/* changing values in 'visible' and 'disabled' columns for 'name' field when 'default value' column is changed */
		$( 'input[name=cntctfrmpr_default_name]' ).each( function() {
			if ( ! $( this ).is( ':checked' ) ) {
				$( 'input[name=cntctfrmpr_visible_name], input[name=cntctfrmpr_disabled_name]' ).attr( 'disabled', 'disabled' );
			}
			$( this ).click( function() {
				if ( $( this ).is( ':checked' ) ) {
					$( 'input[name=cntctfrmpr_visible_name], input[name=cntctfrmpr_disabled_name]' ).removeAttr( 'disabled' );
				} else {
					$( 'input[name=cntctfrmpr_visible_name]' ).attr( 'disabled', 'disabled' ).prop( "checked", true );
					$( 'input[name=cntctfrmpr_disabled_name]' ).attr( 'disabled', 'disabled' ).prop( "checked", false );
				}
			});
		});

		/* changing values in 'visible' and 'disabled' columns for 'email' field when 'default value' column is changed */
		$( 'input[name=cntctfrmpr_default_email]' ).each( function() {
			if ( ! $( this ).is( ':checked' ) ) {
				$( 'input[name=cntctfrmpr_visible_email], input[name=cntctfrmpr_disabled_email]' ).attr( 'disabled', 'disabled' );
			}
			$( this ).click( function() {
				if ( $( this ).is( ':checked' ) ) {
					$( 'input[name=cntctfrmpr_visible_email], input[name=cntctfrmpr_disabled_email]' ).removeAttr( 'disabled' );
				} else {
					$( 'input[name=cntctfrmpr_visible_email]' ).attr( 'disabled', 'disabled' ).prop( "checked", true );
					$( 'input[name=cntctfrmpr_disabled_email]' ).attr( 'disabled', 'disabled' ).prop( "checked", false );
				}
			});
		});

		/* add style for row when click 'Used' for field */
		$( '.cntctfrmpr_checkbox_disabled_row' ).click( function() {
			if ( $( this ).is( ':checked' ) ) {
				$( this ).parents( 'tr' ).filter( ':first' ).removeClass( 'cntctfrmpr_disabled_row' );
			} else {
				$( this ).parents( 'tr' ).filter( ':first' ).addClass( 'cntctfrmpr_disabled_row' );
			}
		});

		/* add notice about changing in the settings page */
		$( '#cntctfrmpr_settings_form input' ).bind( "change click select", function() {
			if ( $( this ).attr( 'type' ) != 'submit' ) {
				$( '.updated.fade' ).css( 'display', 'none' );
				$( '#cntctfrmpr_settings_notice' ).css( 'display', 'block' );
			};
		});
		$( 'select[name="cntctfrmpr_user_email"]' ).focus( function() {
			$( '#cntctfrmpr_select_email_user' ).attr( 'checked', 'checked' );
			$( '.updated.fade' ).css( 'display', 'none' );
			$( '#cntctfrmpr_settings_notice' ).css( 'display', 'block' );
		});
	});
	$(document).on( 'click', '.cntctfrmpr_change_label_block .cntctfrmpr_label_language_tab', function() {
		$( '.cntctfrmpr_label_language_tab' ).each( function() {
			$( this ).removeClass( 'cntctfrmpr_active' );
		});
		var index = $( '.cntctfrmpr_change_label_block .cntctfrmpr_label_language_tab' ).index( $( this ) );
		$( this ).addClass( 'cntctfrmpr_active' );
		var blocks = $( '.cntctfrmpr_action_after_send_block .cntctfrmpr_label_language_tab' );
		$( blocks[ index ] ).addClass( 'cntctfrmpr_active' );
		$( '.cntctfrmpr_language_tab' ).each( function() {
			$( this ).addClass( 'hidden' );
		});
		$( '.' + this.id.replace( 'label', 'tab' ) ).removeClass( 'hidden' );
	});
	$(document).on( 'click', '.cntctfrmpr_action_after_send_block .cntctfrmpr_label_language_tab', function() {
		$( '.cntctfrmpr_label_language_tab' ).each( function() {
			$( this ).removeClass( 'cntctfrmpr_active' );
		});
		var index = $( '.cntctfrmpr_action_after_send_block .cntctfrmpr_label_language_tab' ).index( $( this ) );
		$( this ).addClass( 'cntctfrmpr_active' );
		var blocks = $( '.cntctfrmpr_change_label_block .cntctfrmpr_label_language_tab' );
		$( blocks[ index ] ).addClass( 'cntctfrmpr_active' );
		$( '.cntctfrmpr_language_tab' ).each( function() {
			$( this ).addClass( 'hidden' );
		});
		console.log( this.id.replace( 'text', 'tab' ), index );
		$( '.' + this.id.replace( 'text', 'tab' ) ).removeClass( 'hidden' );
	});
	$(document).on( 'click', '.cntctfrmpr_delete', function( event ) {
		event.stopPropagation();
		if ( confirm( cntctfrmpr_ajax.cntctfrmpr_confirm_text ) ) {
			var lang = $( this ).attr( 'rel' );
			$.ajax({
				url: '../wp-admin/admin-ajax.php',
				type: "POST",
				data: 'action=cntctfrmpr_remove_language&lang=' + lang + '&cntctfrmpr_ajax_nonce_field=' + cntctfrmpr_ajax.cntctfrmpr_nonce,
				success: function( result ) {
					$( '#cntctfrmpr_label_' + lang + ', #cntctfrmpr_text_' + lang + ', .cntctfrmpr_tab_' + lang ).each( function() {
						$( this ).remove();
					});
					$( '.cntctfrmpr_change_label_block .cntctfrmpr_label_language_tab' ).removeClass( 'cntctfrmpr_active' ).first().addClass( 'cntctfrmpr_active' );
					$( '.cntctfrmpr_action_after_send_block .cntctfrmpr_label_language_tab' ).removeClass('cntctfrmpr_active' ).first().addClass( 'cntctfrmpr_active' );
					$( '.cntctfrmpr_change_label_block .cntctfrmpr_language_tab' ).addClass( 'hidden' ).first().removeClass( 'hidden' );
					$( '.cntctfrmpr_action_after_send_block .cntctfrmpr_language_tab' ).addClass( 'hidden' ).first().removeClass( 'hidden' );
				},
				error: function( request, status, error ) {
					alert( error + request.status );
				}
			});
		}
	});
	$(document).on( 'click', '.cntctfrmpr_language_tab_block_mini', function() {
		if ( $( '.cntctfrmpr_language_tab_block' ).css( 'display' ) == 'none' ) {
			$( '.cntctfrmpr_language_tab_block' ).css( 'display', 'block' );
			$( '.cntctfrmpr_language_tab_block_mini' ).css( 'background-position', '1px -3px' );
		} else {
			$( '.cntctfrmpr_language_tab_block' ).css( 'display', 'none' );
			$( '.cntctfrmpr_language_tab_block_mini' ).css( 'background-position', '' );
		}
	});
	$(document).on( 'click', '.cntctfrmpr_department_delete label', function() {
		$( this ).parents( '.cntctfrmpr_department_block' ).children().children().val( '' );
		$( this ).parents( '.cntctfrmpr_department_block' ).css( 'display', 'none' );
		var id = $( this ).parents( '.cntctfrmpr_department_block' ).children( '.cntctfrmpr_department_name' ).children().attr( 'id' );
		$.ajax({
			url: '../wp-admin/admin-ajax.php',
			type: "POST",
			data: 'action=cntctfrmpr_delete_departament&id=' + id + '&cntctfrmpr_ajax_nonce_field=' + cntctfrmpr_ajax.cntctfrmpr_nonce,
			success: function( result ) {
				//
			},
			error: function( request, status, error ) {
				alert( error + request.status );
			}
		});
	});
})(jQuery);