"use strict";

import {getDatos} from "./bibliotecaGets.js";

var doc = window.document;

const  creaPublicacionesUsuario = async(publicaciones) =>{ //Función que pinta la lista de publicaciones de un usuario.

    let publicacionesResueltas = await getDatos(publicaciones);
    let contenedorPublicaciones = doc.getElementById("publicacionesUsuario");

    publicacionesResueltas.map((publicacion) =>{
        let divPublicacion = doc.createElement("div");
        divPublicacion.setAttribute("class","col");
        if (publicacion.enventa){
            divPublicacion.innerHTML=`
                            <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <p class="card-text">${publicacion.titulo}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="/publicacion/${publicacion.id}"><button type="button" class="btn btn-sm btn-outline-secondary">Ver Publicación</button></a>
                                    </div>
                                        <small class="text-success">En Venta</small>
                                        <small class="text-success">${publicacion.precio} €</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    </br>`
        }else{
            divPublicacion.innerHTML=`
                            <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <p class="card-text">${publicacion.titulo}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="/publicacion/${publicacion.id}"><button type="button" class="btn btn-sm btn-outline-secondary">Ver Publicación</button></a>
                                    </div>
                                        <small class="text-danger">Exposición</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    </br>`
        }

        contenedorPublicaciones.appendChild(divPublicacion);
    })
}

const  creaVistaUsuario = async(usuario) => { //Función que pinta los datos de un usuario y sus ajustes.

    let usuarioResuelto = await getDatos(usuario);
    let contenedorDatosUsuario = doc.getElementById("datosUsuario");
    let contenedorAjustesUsuario = doc.getElementById("ajustesUsuario");

    contenedorDatosUsuario.innerHTML=`<div class=\"d-flex flex-column align-items-center text-center p-3 py-5\"><img class=\"rounded-circle mt-5\" width=\"150px\" height=\"150px\" src=\"${usuarioResuelto.foto}\"><span class=\"font-weight-bold\">${usuarioResuelto.username}</span><span class=\"text-black-50\">${usuarioResuelto.email}</span></div>`;
    contenedorAjustesUsuario.innerHTML=`<div><label class="labels" for="inputDescripcion">Descripción</label><textarea type="text" name="descripcion" id="inpurDescripcion" class="form-control">${usuarioResuelto.descripcion}</textarea></div>
                    <div><label class="labels" for="inputFoto">Foto de Perfil</label><input type="text" class="form-control" id="inputFoto" name="foto" value="${usuarioResuelto.foto}"></div>`
}



export {creaPublicacionesUsuario, creaVistaUsuario}

