function BuscaErros(){
var url_string = window.location.href;
var url = new URL(url_string);
var data = url.searchParams.get("erro"); 
if(data == 'U0'){
    alert("Usuário Não Cadastrado!");
}
if(data == 'US0'){
    alert("Senha Inválida!");
}
if(data == 'C0J1'){
    alert("Email Já Cadastrado!, realize o Login!");
}
if(data =='USA1'){
    alert("Senha Alterada, Realize o Login!");
}
}