// ------------------- HERENCIA ---------------------

class ZonasVerdes{
    constructor(IdZona, Nombre){
        this._IdZona=IdZona;
        this._Nombre=Nombre;
    }

    set IdZona(IdZona){
        this._IdZona=IdZona;
    }

    get IdZona(){
        return this._IdZona;
    }

    set Nombre(Nombre){
        this._Nombre=Nombre;
    }

    get Nombre(){
        return this._Nombre;
    }
}

class ZonasNaturales extends ZonasVerdes{
    constructor (IdZona, Nombre, Ubicacion, Descripcion, Imagen){
        super(IdZona, Nombre);
        this._Ubicacion=Ubicacion;
        this._Descripcion=Descripcion;
        this._Imagen=Imagen;
    }

    set Ubicacion(Ubicacion){
        this._Ubicacion=Ubicacion;
    }

    get Ubicacion(){
        return this._Ubicacion;
    }

    set Descripcion(Descripcion){
        this._Descripcion=Descripcion;
    }

    get Descripcion(){
        return this._Descripcion;
    }

    set Imagen(Imagen){
        this._Imagen=Imagen;
    }

    get Imagen(){
        return this._Imagen;
    }

    mostrar() {
        return '<br><b>ID:</b>'+this.IdZona+'<br><b>Nombre:</b>'+this.Nombre+'<br><b>Ubicacion:</b>'+this.Ubicacion+'<br><b>Descripcion:</b> '+this.Descripcion+'<br><b>URL Imagen:</b>'+this.Imagen;
    }
}

zona=new ZonasNaturales(1, 'Boquemonte', 'Via Tequendama', 'Parque natural', 'https://i.ytimg.com/vi/a2JOp_I-_z4/maxresdefault.jpg');

document.write('<b> HERENCIA: </b>'+zona.mostrar());

document.write('<br><br>');

// ------------------- COMPOSICION ---------------------

class Zonas{
    constructor(znas){
        this._znas=znas;
    }
    Mostrarzonas(){
        return this._znas;
    }
}

var zn1=new ZonasVerdes(15,'La poma');
var zn2=new ZonasVerdes(16,'Chicaque'); 
var misitio=[];
misitio.push(zn1);
misitio.push(zn2);
mizona=new Zonas(misitio);

document.write('<b> COMPOSICION: </b><br>'+mizona.Mostrarzonas()+' <-- Contiene 2 objetos');