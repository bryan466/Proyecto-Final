function confirmacion(e) {
    if(confirm("¿Esta seguro que deseas eliminar este registro?")) {
        return true;
    }else{
        e.preventDefault();
    }
}

let linkDelete = document.querySelectorAll(".campo_delete");

for(var i = 0; i < linkDelete.length; i++) {
    linkDelete[i].addEventListener('click', confirmacion);
}