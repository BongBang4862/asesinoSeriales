const frm = document.querySelector("#frmUpdateAS");
const nombre = document.querySelector('#nombre');
const alias = document.querySelector('#alias');
const id = document.querySelector('#id'); // 

document.addEventListener('DOMContentLoaded',()=>{
    frm.addEventListener('submit',(e)=>{
        e.preventDefault();
        if (nombre.value == "" || alias.value == "") {
            alert('escribe algo animal');
        } else {
            const data = new FormData(frm);
            const http = new XMLHttpRequest();

            const url = `${base_url}admin/actualizarAsesino/${id.value}`; // Construcción dinámica de la URL
            http.open('POST', url, true);
            
            http.send(data);
            http.onreadystatechange=function(){
                if (this.readyState == 4 && this.status == 200) {
                    const res = JSON.parse(this.responseText);
                    console.log("este es el resultado: " + res);
                    if (res.resultado == 1) {
                        alert('Asesino Actualizado');
                        window.location = base_url + 'admin/verAsesinos'

                    }
                   
                 } 
            }

            
        }
    })

    
})
