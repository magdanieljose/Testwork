function hidden(){
	var ocultar = document.getElementById("tabla");
  if (ocultar.style.display === "none") {
    ocultar.style.display = "block";
  } else {
    ocultar.style.display = "none";
  }
}


function agregardatos(Name,Lastname,Fecha){
   cadena = "Name=" + Name + "&Lastname=" + Lastname + "&Fecha=" + Fecha;

	$.ajax({
		type: "POST",
		url: "add.php",
		data: cadena,
		success: function(r){
         if (r==1){
         	    $('#tabla').load('tabla.php');
        alertify.error("Error al agregar");
         }else{
         	alertify.success("Se agrego con exito");

         }
         }
		
	});
}

function agregaform(datos){

  d=datos.split('||');

  $('#idpersona').val(d[0]);
  $('#Name2').val(d[1]);
  $('#Lastname2').val(d[2]);
  $('#Fecha2').val(d[3]);

}

function actualizadatos(){

  id_user=$('#idpersona').val();
  Name=$('#Name2').val();
  Lastname=$('#Lastname2').val();
  Fecha=$('#Fecha2').val();

 cadena = "id_user=" + id_user + 
	      "&Name=" + Name +
	      "&Lastname=" + Lastname +
	      "&Fecha=" + Fecha;
	  
   $.ajax({
		type: "POST",
		url: "update.php",
		data: cadena,
		success: function(r){
         if (r==1){
          $('#tabla').load('tabla.php');
          alertify.error("Error");
         }else{
          alertify.success("Actualizado con exito");

         	
         }
		}
	});
}

function preguntarSioNo(id_user){
	alertify.confirm('Eliminar datos', 'Estas seguro que deseas Eliminar al usuario?',
	 function(){ Eliminardatos(id_user) }
                , function(){ alertify.error('Cancel')});
}

function Eliminardatos(id_user){
  cadena="id_user=" + id_user;
  $.ajax({
  	type: "POST",
  	url: "delete.php",
  	data: cadena,
  	success: function(r){
  		if (r==1){
  			$('#tabla').load('tabla.php');
         	    alertify.error("Fallo el servidor");
         }else{
         	alertify.success("Se eliminó con exito");
  		}
  	}
  });

} 