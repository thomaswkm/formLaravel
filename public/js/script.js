class Formacion {
    constructor(seleccionados) {
        this.seleccionados = seleccionados;
    }
}

class Formulario {

    constructor(formacion1, formacion2) {
        this.formacion1 = formacion1;
        this.formacion2 = formacion2;
    }

    agregarAFormacion1(select, seleccionado) {
        if (!this.formacion1.seleccionados.includes(seleccionado) && !this.formacion2.seleccionados.includes(seleccionado)) {
            this.formacion1.seleccionados.push(seleccionado);
            select.disabled = true;
        } else {
            alert("El jugador ya ha sido escogido");
            select.selectedIndex = 0;
        }
    }


    agregarAFormacion2(select, seleccionado) {
        if (!this.formacion1.seleccionados.includes(seleccionado) && !this.formacion2.seleccionados.includes(seleccionado)) {
            this.formacion2.seleccionados.push(seleccionado);
            select.disabled = true;
        } else {
            alert("El jugador ya ha sido escogido");
            select.selectedIndex = 0;
        }
    }

    validar(){
        if(this.formacion1.seleccionados.length==11 && this.formacion2.seleccionados.length==11){
            activarSelects();
            return true;
        }else{
            alert("Ambos equipos deben tener 11 jugadores")
            return false;
        }
    }

}

function activarSelects() {
    for (var i = 1; i <= 2; i++) {
        for (var j = 1; j <= 11; j++) {
            var select = document.getElementById("f" + i + j);
            if (select) {
                select.disabled = false;
            }
        }
    }
}

var formacion1 = new Formacion([]);
var formacion2 = new Formacion([]);
var formulario = new Formulario(formacion1, formacion2);
