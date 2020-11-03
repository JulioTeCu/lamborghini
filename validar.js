function validar(){
    var noserie, modelo, matricula, no_INE;
    noserie = document.getElementById("noserie").value;
    modelo = document.getElementById("modelo").value;
    matricula = document.getElementById("matricula").value;
    no_INE = document.getElementById("no_INE").value; 
    if(noserie==="" || modelo==="" || matricula==="" || no_INE===""){
        alert("Todos los campos son obligatorios");
        return false;
    }
    else if(noserie.length>5){
        alert("El número de serie es muy largo");
        return false;
    }
    else if(modelo.length>30){
        alert("El modelo es muy largo");
        return false;
    }
    else if(matricula.length>9){
        alert("La matricula es muy larga");
        return false;
    }
    else if(no_INE.length>5){
        alert("El número de INE es muy largo");
        return false;
    }
}