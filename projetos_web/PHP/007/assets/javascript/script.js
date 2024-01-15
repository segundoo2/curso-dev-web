function validarLogin() {
    email = document.querySelector("#email")
    senha = document.querySelector("#senha")
    
    if (email.value.length === 0 && senha.value.length === 0) {
        window.alert ("[ERRO] Você precisa preencher os campos.")
    } else if(email.value.length === 0 || senha.value.length === 0) {
        window.alert ("[ERRO] Um dos campos estão vazio.")
    }
}