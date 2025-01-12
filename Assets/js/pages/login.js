const frm = document.querySelector("#loginForm");
const username = document.querySelector('#username');
const password = document.querySelector('#password');

document.addEventListener('DOMContentLoaded',()=>{
    frm.addEventListener('submit',(e)=>{
        e.preventDefault();
        if (username.value == "" || password.value == "") {
            alert('escribe algo animal');
        } else {
            const data = new FormData(frm);
            const http = new XMLHttpRequest();

            const url = base_url + 'admin/validar';
            http.open('POST',url,true);
            http.send(data);
            http.onreadystatechange=function(){
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText);
                    const res = JSON.parse(this.responseText);
                    if (res.tipo == 'success') {
                        alertaPersonalizada('success',res.mensaje)

                        window.location = base_url + 'admin/ingresarAsesino'
                    }
                   
                 } 
            }

            
        }
    })
})
console.log(username);
console.log(password);