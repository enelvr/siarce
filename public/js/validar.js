function validar_formularios(){

if (document.formarchivo.destino.value.length==0){
alert("Debes Colocar un Destino")
document.formarchivo.destino.focus()
return 0;
}
}


function validar_formulario(){
if (document.form.usuario.value.length==0){
alert("Debes Colocar un Usuario")
document.form.usuario.focus()
return 0;
}

if (document.form.clave.value.length==0){
alert("Debes Colocar una Clave")
document.form.clave.focus()
return 0;
}
if (document.form.codigo.value.length==0){
alert("Debes Colocar el Codigo")
document.form.codigo.focus()
return 0;
}

document.form.submit();
}

function validar_usuario(){


if (document.formusuario.nombre.value.length==0){
alert("Debes Colocar un Nombre")
document.formusuario.nombre.focus()
return 0;
}

if (document.formusuario.apellidos.value.length==0){
alert("Debes Colocar un Apellido")
document.formusuario.apellidos.focus()
return 0;
}
if (document.formusuario.indicador.value.length==0){
alert("Debes Colocar un indicador")
document.formusuario.indicador.focus()
return 0;
}
if (document.formusuario.telefono.value.length==0){
alert("Debes Colocar un telefono")
document.formusuario.telefono.focus()
return 0;
}


valor = document.form.telefono.value;
if( !(/^\d{11}$/.test(valor)) ) {
alert("TELEFONO INCORRECTO");
document.form.telefono.focus();
return 0;
}
if (document.form.tipo_usuario_id.selectedIndex==0){
alert("SELECCIONAR UN TIPO DE usuario")
document.form.tipo_usuario_id.focus()
return 0;
}

if (document.formusuario.nombre_usuario.value.length==0){
alert("Debes Colocar un usuario")
document.formusuario.nombre_usuario.focus()
return 0;
}
if (document.formusuario.correo.value.length==0){
alert("Debes Colocar un correo")
document.formusuario.correo.focus()
return 0;
}
if (document.formusuario.clave.value.length==0){
alert("Debes Colocar un clave")
document.formusuario.clave.focus()
return 0;
}
if (document.formusuario.area.value.length==0){
alert("Debes Colocar un area")
document.formusuario.area.focus()
return 0;
}
if (document.formusuario.cedula.value.length==0){
alert("Campo Cedula esta Vacio")
document.formusuario.cedula.focus()
return 0;
}
document.formusuario.submit();
}
