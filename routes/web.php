<?php


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',function(){
	return "Home";
});
 
Route::get('/Usuarios',function(){
	return "Usuarios";
});

Route::get('/usuarios/nuevo',function(){
return 'Creando nuevo usuario';
});

Route::get('/usuarios/{id}',function($id){
return "Mostando d usu {$id}";
});

Route::get('/saludo/{name}/{nick?}',function($name,$nick=null){
if ($nick) {
return "BIENVENIDO {$name}, tu apodo es {$nick}";

}else{
	return "Sin apodo";
}
});