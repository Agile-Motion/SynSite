(
	function ( $ ) {
		function embedResize() {
			var $iframe = $( 'iframe' );
			var ratio   = $iframe.data( 'ratio' );
			var width   = $iframe.width();
			if ( 'undefined' == typeof ratio ) {
				ratio = width / $iframe.height();
				$iframe.data( 'ratio', ratio );
			}
			$iframe.height( width / ratio );
		}

		$( window ).on( 'resize', embedResize );
		$( document ).on( 'ready', embedResize );
		embedResize();
	}
)( jQuery );