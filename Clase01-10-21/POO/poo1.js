//atrobutos == Propiedades
//1ra forma de generar objetos en JS
var persona=new Object();

persona.nombre='Juan';
persona.apellido='Bautista';
persona.mostrar=function(){
    return nombre+ '' +apellido;
}

persona.telefono=3129382939; 


//2da forma de generar objetos en JS 
//JSON= java script object notation

var alumno={
    nombre:'Pedro',
    apellido:'Diaz',
    nombreCompleto:function(){
        return this.nombre +' '+this.apellido;
    }
};

console.log(alumno.nombreCompleto());
console.log(alumno.nombre);
console.log(alumno.apellido);

//acceso con operador llave

console.log(alumno['nombreCompleto']);
console.log(alumno['nombre']);
console.log(alumno['apellido']);

//recorrer claves de objeto con for in 

for (atributo in alumno ){
    console.log(atributo);
}

//convertir valores de objeto en array

var arreglo=Object.values(alumno);

console.log(arreglo)

//3ra forma de trabajar con objetos en JS 

function Aprendiz(){
    var nombre='Maria';
    var apellido='Rodriguez';
}

//console.log(typeof(alumno));
//actividad fracciones 

var frac={
    n1:1,
    n2:2,
    d1:2,
    d2:3,
    suma:function(){
        numeradorS1=this.n1 * this.d2;
        numeradorS2=this.n2 * this.d1;
        numeradorSF=numeradorS1 + numeradorS2;
        denominadorS=this.d1 * this.d2;
        return 'el resultado es '+ numeradorSF + ' sobre ' +denominadorS;
    },
    resta:function(){

    },
    multi:function(){

    },
    divi:function(){

    }
}

console.log(frac.suma());

// var num=100;
// console.log(typeof(num));
// var t='palabra';
// console.log(typeof(t));