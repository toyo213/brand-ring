(function($) {
	$(document).ready( function() {	
		/* Add new variables */
		var cntctfrmmltpr_name = new Array(),
			cntctfrmmltpr_size,
			cntctfrmmltpr_idd,
			cntctfrmmltpr_room = new Array();
		
		$( '.wrap' ).children( '#cntctfrm_settings_form' ).wrap( '<div class="cntctfrmmltpr-nav"></div>' );
		$( '.wrap' ).children( '#cntctfrmpr_settings_form' ).wrap( '<div class="cntctfrmmltpr-nav"></div>' );
		$( '.wrap' ).children( '#cntctfrmpr_extra_settings_div' ).wrap( '<div class="cntctfrmmltpr-nav"></div>' );		
		$( '.cntctfrmmltpr-nav' ).wrap( '<div class="cntctfrmmltpr-tab-wrapper nav-tab-wrapper"></div>' );
		$( '.cntctfrmmltpr-tab-wrapper' ).prepend( '<input class="cntctfrmmltpr-enter" type="button" value="&#043" />' );
		$( '.cntctfrmmltpr-tab-wrapper' ).after( '<div class="clear"></div>' );
		for ( var i in cntctfrmmltpr_script_vars.cntctfrmmltpr_count ) {
			$( '.cntctfrmmltpr-enter' ).before( '<li id="' + i + '" class="cntctfrmmltpr-nav-tab nav-tab"><input id="' + i + '" class="cntctfrmmltpr-text" maxlength="100" style="display:none" size="10" type="text" value="' + cntctfrmmltpr_script_vars.cntctfrmmltpr_count[i] + '" /><div class="cntctfrmmltpr-noactive"></div><input type="button" name="cntctfrmmltpr_del" class="cntctfrmmltpr-delete" value=" " /></li>' );
			cntctfrmmltpr_room.push( i );			
		}

		/* Update name of the form */
		$( 'input[class="cntctfrmmltpr-text"]' ).blur( function() {
			for ( var i = 0; i <= cntctfrmmltpr_room.length; i++ ) {
				if ( i in cntctfrmmltpr_room ) {
					cntctfrmmltpr_name.push( cntctfrmmltpr_room[i] + ":" + $( 'input[id=' + cntctfrmmltpr_room[i] + ']' ).val() );
				}
			}
			var data = {
				action: 'cntctfrmmltpr_action',
				cntctfrmmltpr_ajax_nonce_field: cntctfrmmltpr_script_vars.cntctfrmmltpr_nonce,
				cntctfrmmltpr_name_form: cntctfrmmltpr_name
			};
			jQuery.post( ajaxurl, data, function( response ) {
				document.location.href = cntctfrmmltpr_script_vars.cntctfrmmltpr_location + "&id=" + cntctfrmmltpr_script_vars.cntctfrmmltpr_id_form;
			});
		});

		/* Add new form */
        $( '.cntctfrmmltpr-enter' ).click( function() {
			for ( var i = 0; i < cntctfrmmltpr_room.length; i++ ) {
				if ( i in cntctfrmmltpr_room ) {
					cntctfrmmltpr_name.push( cntctfrmmltpr_room[i] + ":" + $( 'input[id=' + cntctfrmmltpr_room[i] + ']' ).val() );
				}
			}
			cntctfrmmltpr_name.push( cntctfrmmltpr_script_vars.cntctfrmmltpr_key_id + ':NEW_FORM' );
			cntctfrmmltpr_idd = cntctfrmmltpr_script_vars.cntctfrmmltpr_key_id;
			var data = {
				action: 'cntctfrmmltpr_action',
				cntctfrmmltpr_name_form: cntctfrmmltpr_name,
				cntctfrmmltpr_ajax_nonce_field: cntctfrmmltpr_script_vars.cntctfrmmltpr_nonce,
				cntctfrmmltpr_key_form: cntctfrmmltpr_idd
			};
			jQuery.post( ajaxurl, data, function( response ) {
				document.location.href = cntctfrmmltpr_script_vars.cntctfrmmltpr_location;
			});
		});
		$( 'input[class="cntctfrmmltpr-delete"]' ).click( function() {
			if ( confirm( cntctfrmmltpr_script_vars.cntctfrmmltpr_delete_message ) ) {
				document.location.href = cntctfrmmltpr_script_vars.cntctfrmmltpr_location + "&del=" + $( this ).attr( 'name' ) + "&id=" + $( this ).parent( 'li' ).attr( 'id' );	
			}
		});

		/* Determination of active <li>*/
		$( '.cntctfrmmltpr-noactive' ).click( function() {
			if ( ! $( this ).parent( 'li' ).hasClass( 'cntctfrmmltpr-activee' ) )
				document.location.href = cntctfrmmltpr_script_vars.cntctfrmmltpr_location + "&id=" + $( this ).parent( 'li' ).attr( 'id' ) + cntctfrmmltpr_script_vars.cntctfrmmltpr_action_slug;
		});
		
		/*Add style for active <li>(Добавление стиля для активной <li>)*/
		$( '.cntctfrmmltpr-nav-tab' ).each( function() {
			if ( $( this ).attr( 'id' ) == cntctfrmmltpr_script_vars.cntctfrmmltpr_id_form ) {
				$( this ).addClass( 'cntctfrmmltpr-activee nav-tab-active' ).removeClass( 'cntctfrmmltpr-nav-tab' );
			}
		});

		/* remove Disabled */
		if ( $( 'li' ).hasClass( 'cntctfrmmltpr-activee' ) ) {
			$( '.cntctfrmmltpr-activee' ).children( 'input[class="cntctfrmmltpr-text"]' ).css( "display", "inline-block" );
			$( '.cntctfrmmltpr-activee' ).children( '.cntctfrmmltpr-noactive' ).css({ "display":"none","float":"none" });
		}
		$( '.cntctfrmmltpr-nav-tab' ).each( function() {
			if ( $( 'li' ).hasClass( 'cntctfrmmltpr-nav-tab' ) ) {
				$( this ).children( '.cntctfrmmltpr-noactive' ).text( $( this ).children( 'input[class="cntctfrmmltpr-text"]' ).val() );
			}
		});
	});
})(jQuery);