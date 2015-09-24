//>>excludeStart("jqmBuildExclude", pragmas.jqmBuildExclude);
//>>description: Behavior mixin to mark first and last visible item with special classes.
//>>label: First & Last Classes
//>>group: Widgets

define( [ "jquery", "../jquery.mobile.core" ], function( jQuery ) {
//>>excludeEnd("jqmBuildExclude");
(function( $, undefined ) {

var uiScreenHiddenRegex = /\bui-screen-hidden\b/;
function noHiddenClass( elements ) {
	var index,
		length = elements.length,
		result = [];

	for ( index = 0; index < length; index++ ) {
		if ( !elements[ index ].className.match( uiScreenHiddenRegex ) ) {
			result.push( elements[ index ] );
		}
	}

	return $( result );
}

$.mobile.behaviors.addFirstLastClasses = {
	_getVisibles: function( $els, create ) {
		var visibles;

		if ( create ) {
			visibles = noHiddenClass( $els );
		} else {
			visibles = $els.filter( ":visible" );
			if ( visibles.length === 0 ) {
				visibles = noHiddenClass( $els );
			}
		}

		return visibles;
	},

	_addFirstLastClasses: function( $els, $visibles, create ) {
		$els.removeClass( "ui-first-child ui-last-child" );
		var firstChildClass = "ui-first-child", lastChildClass = "ui-last-child";
		// For RTL, swap first and last child classes, with the exception of vertical control groups and listviews
		if ( $.isRtl( $visibles.eq( 0 ) ) &&
			(!(
			$visibles.eq( 0 ).closest( ".ui-controlgroup" ).hasClass( "ui-controlgroup-vertical" ) ||
			$visibles.eq( 0 ).parent().hasClass( "ui-listview" ) ||
			$visibles.eq( 0 ).parent().hasClass( "ui-collapsible-set" )
			))) {
			firstChildClass = "ui-last-child";
			lastChildClass = "ui-first-child";
		}
		$visibles.eq( 0 ).addClass( firstChildClass ).end().last().addClass( lastChildClass );
		if ( !create ) {
			this.element.trigger( "updatelayout" );
		}
	},

	_removeFirstLastClasses: function( $els ) {
		$els.removeClass( "ui-first-child ui-last-child" );
	}
};

})( jQuery );
//>>excludeStart("jqmBuildExclude", pragmas.jqmBuildExclude);
});
//>>excludeEnd("jqmBuildExclude");
