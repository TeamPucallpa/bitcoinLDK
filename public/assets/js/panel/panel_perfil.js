

/* START READ */ 
let id_usuario_catch = document.querySelector("#usuario-id").value;
$.ajax({
  type: 'post',
  url: '../controllers/ClienteController.php?a=perfil',
  data: {id: id_usuario_catch},
  success:function(respuestaServidor){
    let datos = JSON.parse(respuestaServidor)
    document.querySelector('#profile_id').value = datos.id;
    document.querySelector('#profile_nombre').value = datos.nombre;
    document.querySelector('#profile_apellido').value = datos.apellido;
    document.querySelector('#profile_celular').value = datos.celular;
    document.querySelector('#profile_email').value = datos.correo;
    document.querySelector('#profile_password').value = datos.clave;
  },
  error:function(){
    alert("Ups error!");
  }
});
/* END READ */ 