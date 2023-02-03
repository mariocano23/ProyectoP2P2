"use strict";
import {creaPublicacionesUsuario, creaVistaUsuario} from "./Bibliotecas/bibliotecaPintaElementos.js";

window.onload = () => {
    let idUsuario = document.getElementsByClassName("divUsuario")[0].id;
    const urlPublicaciones = "http://localhost:8093/api/usuarios/"+idUsuario+"/publicaciones";
    const urlUsuario = "http://localhost:8093/api/usuarios/"+idUsuario;
    creaPublicacionesUsuario(urlPublicaciones);
    creaVistaUsuario(urlUsuario);

}

