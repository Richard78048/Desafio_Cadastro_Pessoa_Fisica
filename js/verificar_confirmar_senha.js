function Verificar_Senha(){
document.getElementById('registerForm').addEventListener('submit', function(event) {
    // Prevenir envio
    event.preventDefault();

    const password = document.getElementById('senha').value;
    const confirmPassword = document.getElementById('confirmar-senha').value;
    const errorMessage = document.getElementById('error-message');

    if (password !== confirmPassword) {
        errorMessage.textContent = 'Senha e Confirmar Senha não são iguais! Tente Novamente!';
        errorMessage.style.display = 'block';
        setTimeout(() => {
            errorMessage.style.display = 'none';
        }, 3000);
    } else {
        errorMessage.style.display = 'none';
          this.submit();
    }
});
}