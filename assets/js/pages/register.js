"use strict";

$( document ).ready(function ()
{
    $('input[type="tel"]').inputmask("(999) 999-9999");

    $('#user-register').ajaxSubmit({
        textReDrawButton: true,
        callback: function ( response )
        {
            if ( response.status == 'fatal_error' )
                alertify.error(response.message);

            if ( response.status == 'OK' )
            {
                swal({
                    title: 'Bienvenido!',
                    type: 'success',
                    timer: 1500,
                    showCancelButton: false,
                    showConfirmButton: false,
                    allowOutsideClick: false,
                }).then(function () { }, function ( dismiss )
                {
                    if ( dismiss === 'timer' )
                        window.location.href = response.redirect;
                });
            }
        }
    });
});
