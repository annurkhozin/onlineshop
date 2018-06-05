;(function ( $, window, document, undefined ) {
	'use strict';

	var Jelect,
		pluginName = 'jelect',
		dataPlugin = 'plugin_' + pluginName,
		defaults = {
			wrapper: '.jelect',
			input: '.jelect-input',
			current: '.jelect-current',
			optionsWrapper: '.jelect-options',
			option: '.jelect-option',
			activeClass: 'jelect_state_active',
			optionsWrapperActiveClass: 'jelect-options_state_active',
			optionActiveClass: 'jelect-option_state_active'
		};

	Jelect = function ( element, options ) {
		this.element = element;
		this.$element = $( element );
		this.options = $.extend( defaults, options );
		this._defaults = defaults;

		this.init();
	};

	Jelect.prototype = {

		init: function ( options ) {

			var that = this,
				opts = $.extend( that.options, options ),
				$select = that.$element,
				$selectOptions = $( opts.optionsWrapper );

			$select
				// Open a dropdown
				.children( opts.current )
				.on( 'click.jelectCurrentClick', function () {
					var $this = $( this ),
						$thisSelect = $this.closest( opts.wrapper ),
						$thisSelectOptions = $this.siblings( opts.optionsWrapper );

					$thisSelectOptions.toggleClass( opts.optionsWrapperActiveClass );
					$selectOptions.filter( ':visible' ).not( $thisSelectOptions ).removeClass( opts.optionsWrapperActiveClass );

					$thisSelect.toggleClass( opts.activeClass );
					$select.not( $thisSelect ).removeClass( opts.activeClass );
				})

				// Select an option
				.siblings( opts.optionsWrapper )
				.on( 'click.jelectOptionClick', opts.option, function () {
					var $this = $( this ),
						currentVal = $this.data('val'),
						currentText = $this.text();

					$this
						// Activate a selected option
						.addClass( opts.optionActiveClass )
						.siblings()
						.removeClass( opts.optionActiveClass )

						// Hide a dropdown
						.closest( opts.optionsWrapper )
						.removeClass( opts.optionsWrapperActiveClass )

						// Deactivate a Jelect wrapper
						.closest( opts.wrapper )
						.removeClass( opts.activeClass )

						// Set a current text
						.children( opts.current )
						.text( currentText )

						// Change the value of input and fire trigger `change`
						.siblings( opts.input )
						.val( currentVal )
						.attr( 'data-text', currentText )
						.trigger( 'change' );
				});

			// Hide dropdowns when click outside
			$( document ).on( 'click.jelectOutsideClick', function ( e ) {
				var $target = $( e.target );

				if (
					!$target.is( opts.wrapper ) &&
					!$target.closest( opts.wrapper ).length &&
					$selectOptions.filter( ':visible' ).length
				) {
					$selectOptions
						.removeClass( opts.optionsWrapperActiveClass )
						.closest( opts.wrapper )
						.removeClass( opts.activeClass );
				}
			});

		},

		destroy: function () {
			this.$element.data( dataPlugin, null );
		}
	};

	$.fn[ pluginName ] = function ( options ) {
		return this.each(function () {
			if ( !$( this ).data( dataPlugin ) ) {
				$( this ).data( dataPlugin, new Jelect( this, options ) );
			}
		});
	};

})( jQuery, window, document );
