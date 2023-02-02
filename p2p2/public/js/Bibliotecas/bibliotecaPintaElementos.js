"use strict";

import {getDatos} from "./bibliotecaGets.js";

var doc = window.document;

const  creaPublicaciones = async(publicaciones) =>{

    let publicacionesResueltas = await getDatos(publicaciones);
    let contenedorPublicaciones = doc.getElementById("contenedorPublicaciones");

    publicacionesResueltas.map((publicacion) =>{
        let divPublicacion = doc.createElement("div");
        divPublicacion.setAttribute("class","col");
        if (publicacion.enventa){
            divPublicacion.innerHTML=`
                            <div class="card shadow-sm">
                                <img  class="bd-placeholder-img card-img-top" width="100%" height="225" src="${publicacion.imagen}">
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
                            </div>`
        }else{
            divPublicacion.innerHTML=`
                            <div class="card shadow-sm">
                                <img  class="bd-placeholder-img card-img-top" width="100%" height="225" src="${publicacion.imagen}">
                                <div class="card-body">
                                    <p class="card-text">${publicacion.titulo}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="/publicacion/${publicacion.id}"><button type="button" class="btn btn-sm btn-outline-secondary">Ver Publicación</button></a>
                                        </div>
                                            <small class="text-danger">Exposición</small>
                                    </div>
                                </div>
                            </div>`
        }

        contenedorPublicaciones.appendChild(divPublicacion);
    })
}

export {creaPublicaciones}

