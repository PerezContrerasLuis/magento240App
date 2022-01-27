define([
    "jquery"
], function($){
        "use strict";
        return function(config, element) {
            //alert(config.message);
            $( "#clk" ).click(function() {
                alert( "Handler for .click() called." );
              });
        }
    }
)
