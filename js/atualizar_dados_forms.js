function AlterarNome(){
    const nomeantigotxt = document.getElementById("nome_antigo");
    const edit_nome = document.getElementById("editar_nome");
    const novo_name = document.getElementById("form_new_name");
    
    nomeantigotxt.style.display = "none";
    novo_name.style.display = "flex";
    edit_nome.style.display = "none";
 }

 function AlterarEmail(){
    const emailantigotxt = document.getElementById("email_antigo");
    const edit_email = document.getElementById("editar_email");
    const novo_email = document.getElementById("form_new_email");
    
    emailantigotxt.style.display = "none";
    novo_email.style.display = "flex";
    edit_email.style.display = "none";
 }
 function AlterarSenha(){
   const senhalabel = document.getElementById("senha_label");
   const edit_email = document.getElementById("editar_senha");
   const novo_email = document.getElementById("form_new_senha");
   
   senhalabel.style.display = "none";
   novo_email.style.display = "flex";
   edit_email.style.display = "none";
}