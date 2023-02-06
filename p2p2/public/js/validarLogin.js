"use strict";

const validate = new window.JustValidate('#formLogin',{ validateBeforeSubmitting: true});
const form = document.getElementById('formRegistro');
document.getElementById('botonSubmitLogin').addEventListener("click", (e) => {

    if (validate.isValid){
        form.submit();
    }else{
        e.preventDefault();
    }


})

validate
    .addField('#inputCorreo',[
            {rule: 'required',},
            {rule: 'email',},
        ]
    )
    .addField('#InputPassword1', [
        {
            rule: 'required',
        },
    ]);





