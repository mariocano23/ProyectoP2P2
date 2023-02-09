"use strict";
window.onload = () => {
    const validate = new window.JustValidate('#formRegistro', {validateBeforeSubmitting: true});
    const form = document.getElementById('formRegistro');

    document.getElementById('botonSubmitRegister').addEventListener("click", (e) => {
        e.preventDefault();

        if (validate.isValid) {
            form.submit();
        }


    })

    validate
        .addField('#inputUsername', [
                {
                    rule: 'required',
                    errorMessage: 'Campo requerido.',
                },
                {
                    rule: 'minLength',
                    errorMessage: 'La longitud minima del nombre de usuario es de 2 caracteres.',
                    value: 2,
                },
                {
                    rule: 'maxLength',
                    value: 20,
                    errorMessage: 'La longitud máxima del nombre de usuario es de 20 caracteres.',
                },
            ]
        )
        .addField('#inputCorreo', [
                {
                    rule: 'required',
                    errorMessage: 'Campo requerido.',
                },
                {
                    rule: 'email',
                    errorMessage: 'Formato inválido.',
                },
            ]
        )
        .addField('#InputPassword1', [
            {
                rule: 'required',
                errorMessage: 'Campo requerido.',
            },
            {
                rule: 'minLength',
                errorMessage: 'La longitud minima la contraseña es de 6 caracteres.',
                value: 6,
            },
        ])
        .addField('#InputPasswordConfirmation', [
            {
                rule: 'required',
                errorMessage: 'Campo requerido.',
            },
            {
                validator: (value, fields) => {
                    if (
                        fields['#InputPassword1'] &&
                        fields['#InputPassword1'].elem
                    ) {
                        const repeatPasswordValue =
                            fields['#InputPassword1'].elem.value;

                        return value === repeatPasswordValue;
                    }

                    return true;
                },
                errorMessage: 'Las contraseñas no coinciden',
            },
        ]);
}





