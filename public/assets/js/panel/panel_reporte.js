function modalDelete(id){
  let input_id_cliente = document.querySelector('#id-cliente');
  input_id_cliente.value = id;
}
function modalUpdate(id,name,lastname,phone,emal){
  document.querySelector("#idcliente-u").value = id;
  document.querySelector("#nombre-u").value = name;
  document.querySelector("#apellido-u").value = lastname;
  document.querySelector("#celular-u").value = phone;
  document.querySelector("#email-u").value = emal;
}

/* START READ */ 
$.ajax({
  type: 'post',
  url: '../controllers/ClienteController.php?a=read',
  success:function(msg){
    document.querySelector("#info_reporteClientes").innerHTML = msg;
  },
  error:function(){
    alert("Hay un error");
  }
});
/* END READ */ 



$(document).ready(function() {
  $('#reporteClientes').DataTable({
          rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true,
        language: {
          "decimal": "",
          "emptyTable": "No hay información",
          "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
          "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
          "infoFiltered": "(Filtrado de _MAX_ total entradas)",
          "infoPostFix": "",
          "thousands": ",",
          "lengthMenu": "Mostrar _MENU_ Entradas",
          "loadingRecords": "Cargando...",
          "processing": "Procesando...",
          "search": "Buscar:",
          "zeroRecords": "Sin resultados encontrados",
          "paginate": {
              "first": "Primero",
              "last": "Ultimo",
              "next": "Siguiente",
              "previous": "Anterior"
          }
      }
    });


/* START DELETE CLIENTE */ 
let btnDeleteCliente = document.querySelector("#btn-delete-cliente");
btnDeleteCliente.addEventListener("click", function(){
  let captar_input_id_cliente = document.querySelector('#id-cliente').value;
  $.ajax({
    type: 'POST',
    url: '../controllers/ClienteController.php?a=delete',
    data: {id:captar_input_id_cliente},
    success:function(res){
        // console.log(res);
        location.reload();
    },
    error:function(){
      throw("Hay un error en Eliminacion");
    }
  });
});
/* END DELETE CLIENTE */ 

/* START UPDATE CLIENTE */ 
let btnUpdateCliente = document.querySelector("#btn-update-cliente");
btnUpdateCliente.addEventListener("click", function(){
  let idcliente       = document.querySelector("#idcliente-u").value;
  let nombreUpdate    = document.querySelector("#nombre-u").value;
  let apellidoUpdate  = document.querySelector("#apellido-u").value;
  let celularUpdate   = document.querySelector("#celular-u").value;
  let emailUpdate     = document.querySelector("#email-u").value;
  let passwordUpdate  = document.querySelector("#password-u").value;
  $.ajax({
    type: 'POST',
    url: '../controllers/ClienteController.php?a=update',
    data: {   
            id:idcliente,
            nombre:nombreUpdate,
            apellido:apellidoUpdate,
            celular:celularUpdate,
            correo:emailUpdate,
            clave:passwordUpdate 
          },
    success:function(res){
            if(res == "Si" ){
              swal({
                title: "Actualizacion Correcta!",
                text: "Espere un momento....",
                icon: "success",
                button: false,
              });
              setInterval(function(){location.reload(); }, 1000) ;
            }else{
              alert("Ups hubo un error");
            }

           
    },
    error:function(){
      throw("Hay un error en Eliminacion");
    }
  });
 });
/* END UPDATED CLIENTE */ 

});


