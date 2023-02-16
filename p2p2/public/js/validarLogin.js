"use strict";
window.onload = () => {
    const validate = new window.JustValidate('#formLogin',{ validateBeforeSubmitting: true});
    const form = document.getElementById('formLogin');

    document.getElementById('botonSubmitLogin').addEventListener("click", (e) => {

        if (validate.isValid){
            form.submit();
        }else{
            e.preventDefault();
        }

    })

    validate
        .addField('#inputCorreo',[
                {rule: 'required',
                    errorMessage: 'Campo requerido.',},
                {rule: 'email',
                    errorMessage: 'Formato inválido.',},
            ]
        )
        .addField('#InputPassword1', [
            {
                rule: 'required',
                errorMessage: 'Campo requerido.',
            },
        ]);
}






