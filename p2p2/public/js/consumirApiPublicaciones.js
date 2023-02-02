"use strict";
import {creaPublicaciones} from "./Bibliotecas/bibliotecaPintaElementos.js";

window.onload = () => {
    const url = "http://localhost:8093/api/publicaciones";
    creaPublicaciones(url);
}

