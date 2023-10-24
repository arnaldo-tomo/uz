// Obtém referência ao formulário de cadastro
const formularioCadastro = document.getElementById('cadastro-form');

// Adiciona um ouvinte de evento para o envio do formulário
formularioCadastro.addEventListener('submit', function(event) {
    event.preventDefault(); // Impede o envio padrão do formulário

    // Obtém os valores dos campos do formulário
    const nome = document.getElementById('nome').value;
    const sexo = document.getElementById('sexo').value;
    const dataNascimento = document.getElementById('data-nascimento').value;
    const endereco = document.getElementById('endereco').value;
    const telefone = document.getElementById('telefone').value;
    const trabalhoEstudo = document.getElementById('trabalho-estudo').value;

    // Aqui você pode adicionar código para enviar os dados para o servidor ou fazer outras operações necessárias.
    // Por exemplo, você pode usar a função fetch() para enviar os dados para um servidor.

    // Limpa o formulário após o envio
    formularioCadastro.reset();

    // Exibe uma mensagem de sucesso (você pode personalizar isso)
    alert('Cadastro realizado com sucesso!');