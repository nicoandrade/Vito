/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and 
 * then make any necessary changes to the page using jQuery.
 */
( function( $ ) {

	// Update the site title in real time...
	wp.customize( 'blogname', function( value ) {
		value.bind( function( newval ) {
			$( '.ql_logo' ).html( newval );
		} );
	} );
	
	//Update the site description in real time...
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( newval ) {
			$( '.logo_desc' ).html( newval );
		} );
	} );

  //Show or hide site's description...
  wp.customize( 'quemalabs_options[show_desc]', function( value ) {
    value.bind( function( newval ) {
      $(".logo_desc").toggleClass('hidden');      
    } );
  } );

	
	//Update Headings color in real time...
	wp.customize( 'headings_color', function( value ) {
		value.bind( function( newval ) {
			$('h1, h2, h3, h4, h5, h6').each(function(index, el) {
				$(el).style('color', newval, 'important');
			});
		} );
	} );





  /*
  //Header
  */

  //Update Header color in real time...
  wp.customize( 'quemalabs_options[header_color]', function( value ) {
    value.bind( function( newval ) {
      $('#header').each(function(index, el) {
        $(el).style('background-color', newval, 'important');
      });
    } );
  } );

  //Update Header color in real time...
  wp.customize( 'quemalabs_options[header_color_text]', function( value ) {
    value.bind( function( newval ) {
      $('#header, #header a, .logo_container .ql_logo, #jqueryslidemenu ul.nav > li a').each(function(index, el) {
        $(el).style('color', newval, 'important');
      });
    } );
  } );






  /*
  //Typography
  */

  //Update Font Content color in real time...
  wp.customize( 'content_typography_color', function( value ) {
    value.bind( function( newval ) {
      $('body').style('color', newval, 'important');
    } );
  } );

  //Update Font Links color in real time...
  wp.customize( 'links_typography_color', function( value ) {
    value.bind( function( newval ) {
      $('a').style('color', newval, 'important');
    } );
  } );





  /*
  //Header
  */

    //Update Header width in real time...
  wp.customize( 'quemalabs_options[header_width]', function( value ) {
    value.bind( function( newval ) {
      $("#header").toggleClass("container");
      $("#header").toggleClass("container-fluid");
      
    } );
  } );

      //Update Header layout in real time...
  wp.customize( 'quemalabs_options[header_style]', function( value ) {
    value.bind( function( newval ) {
      var header_classes = 'header2 header3 header4 header5';


        $("#header").addClass('header'+newval);
        console.log(header_classes);
        header_classes = header_classes.replace("header"+newval, "");
        console.log(header_classes);
        $("#header").removeClass(header_classes);
        
    } );
  } );




  /*
  //Layout
  */

  //Update Sidebar in real time...
  wp.customize( 'quemalabs_options[sidebar_side]', function( value ) {
    value.bind( function( newval ) {
      $("#content").toggleClass("col-md-push-3");
      $("#sidebar").toggleClass("col-md-pull-9");
    } );
  } );














} )( jQuery );











/*
.style() function to apple "!important" in real time
*/
(function($) {    
  if ($.fn.style) {
    return;
  }

  // Escape regex chars with \
  var escape = function(text) {
    return text.replace(/[-[\]{}()*+?.,\\^$|#\s]/g, "\\$&");
  };

  // For those who need them (< IE 9), add support for CSS functions
  var isStyleFuncSupported = !!CSSStyleDeclaration.prototype.getPropertyValue;
  if (!isStyleFuncSupported) {
    CSSStyleDeclaration.prototype.getPropertyValue = function(a) {
      return this.getAttribute(a);
    };
    CSSStyleDeclaration.prototype.setProperty = function(styleName, value, priority) {
      this.setAttribute(styleName, value);
      var priority = typeof priority != 'undefined' ? priority : '';
      if (priority != '') {
        // Add priority manually
        var rule = new RegExp(escape(styleName) + '\\s*:\\s*' + escape(value) +
            '(\\s*;)?', 'gmi');
        this.cssText =
            this.cssText.replace(rule, styleName + ': ' + value + ' !' + priority + ';');
      }
    };
    CSSStyleDeclaration.prototype.removeProperty = function(a) {
      return this.removeAttribute(a);
    };
    CSSStyleDeclaration.prototype.getPropertyPriority = function(styleName) {
      var rule = new RegExp(escape(styleName) + '\\s*:\\s*[^\\s]*\\s*!important(\\s*;)?',
          'gmi');
      return rule.test(this.cssText) ? 'important' : '';
    }
  }

  // The style function
  $.fn.style = function(styleName, value, priority) {
    // DOM node
    var node = this.get(0);
    // Ensure we have a DOM node
    if (typeof node == 'undefined') {
      return this;
    }
    // CSSStyleDeclaration
    var style = this.get(0).style;
    // Getter/Setter
    if (typeof styleName != 'undefined') {
      if (typeof value != 'undefined') {
        // Set style property
        priority = typeof priority != 'undefined' ? priority : '';
        style.setProperty(styleName, value, priority);
        return this;
      } else {
        // Get style property
        return style.getPropertyValue(styleName);
      }
    } else {
      // Get CSSStyleDeclaration
      return style;
    }
  };
})(jQuery);