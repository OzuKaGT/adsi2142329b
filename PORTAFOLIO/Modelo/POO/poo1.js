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

function Aprendiz(nombre, apellido){
    this.nombre=nombre;
    this.apellido=apellido;
    this.nombreCompleto=function(){
        
    }
}

//console.log(typeof(alumno));
//actividad fracciones 



//4ta forma de crear un objeto
class Estudiante{
    constructor(nombre, apellido){
        this.nombre=nombre;
        this.apellido=apellido;
    }
}
//------------------------------ FRACCIONES ------------------------------//
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
        return '<b> SUMA </b> El resultado de la suma es de fracciones es ... '+ numeradorSF + ' / ' + denominadorS+ '<br>';
    },
    resta:function(){
        numeradorR1=this.n1 * this.d2;
        numeradorR2=this.n2 * this.d1;
        numeradorRF=numeradorS1 - numeradorS2;
        denominadorR=this.d1 * this.d2;
        return '<b> RESTA </b> El resultado de la resta de fracciones es ... '+ numeradorRF + ' / ' + denominadorR+ '<br>';
    },
    multi:function(){
        numeradorM1=this.n1 * this.n2;
        numeradorM2=this.d1 * this.d2;
        return '<b> MULTIPLICACION </b> El resultado de la multiplicacion de fracciones es ... '+ numeradorM1 + ' / ' +numeradorM2+ '<br>';
    },
    divi:function(){
        numeradorD1=this.n1 * this.d2;
        numeradorD2=this.n2 * this.d1;
        return '<b> DIVISION </b> El resultado de la division de fracciones es ... '+ numeradorD1 + ' / ' +numeradorD2+ '<br>';
    }
}

document.write('<b>Se usaran las fracciones 1/2 y 1/3</b><br>')

document.write(frac.suma());

document.write(frac.resta());

document.write(frac.multi());

document.write(frac.divi());

// var num=100;
// console.log(typeof(num));
// var t='palabra';
// console.log(typeof(t));