"use strict";

const validate = new window.JustValidate('#formPublicacion',{ validateBeforeSubmitting: true});
const form = document.getElementById('formPublicacion');

validate.isValid = true;

document.getElementById('botonSubmitPublicacion').addEventListener("click", (e) => {


    if (validate.isValid){
        form.submit();
    }else{
        e.preventDefault();
    }


})

validate
    .addField('#inputTitulo',[
        {rule: 'required',
            errorMessage: 'Campo requerido.',},
        {rule: 'minLength',
            errorMessage: 'La longitud minima del titulo es de 2 caracteres.',
            value: 2,},
        {rule: 'maxLength',
            value: 50,
            errorMessage: 'La longitud máxima del titulo es de 50 caracteres.',},

        ]
    )
    .addField('#inputDescripcion', [
        {rule: 'required',
            errorMessage: 'Campo requerido.',},
        {rule: 'minLength',
            errorMessage: 'La longitud minima de la descripción es de 2 caracteres.',
            value: 2,},
        {rule: 'maxLength',
            value: 500,
            errorMessage: 'La longitud máxima de la descripción es de 500 caracteres.',},
    ])
    .addField('#inputImagen',[
            {rule: 'required',
                errorMessage: 'Campo requerido.',},
        ]
    ).addField('#inputPrecio',[
        {rule: 'minNumber',
            errorMessage: 'El precio mínimo es 0.1€.',
            value: 0.1,},
        {rule: 'maxNumber',
            value: 10000000,
            errorMessage: 'El precio máximo es 10.000.000€.',},

    ]
);
