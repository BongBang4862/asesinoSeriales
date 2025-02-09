// Here goes your custom javascript
//alertaPersonalizada('success','Primera alerta creada')
function alertaPersonalizada(type,mensaje) { 
    Swal.fire({
      position: "top-end",
      icon: type,
      title:  mensaje,
      showConfirmButton: false,
      timer: 1500
    });
}

