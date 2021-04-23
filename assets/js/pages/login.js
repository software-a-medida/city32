"use strict";

$( document ).ready(function ()
{
    $('#user-login').ajaxSubmit({
        textReDrawButton: true,
        callback: function ( response )
        {
            if ( response.status == 'fatal_error' )
                alertify.error(response.message);

            if ( response.status == 'OK' )
                window.location.href = response.redirect;
        }
    });
});
