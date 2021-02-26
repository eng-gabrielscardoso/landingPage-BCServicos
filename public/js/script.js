// Atualizar para receber o efeito animado quando dar scroll
const diferentialsWrapper = document.getElementById('diferentialsWrapper');


const formElement = document.getElementById('formElement');
const nameForm = document.getElementById('nameForm');
const emailForm = document.getElementById('emailForm');
const phoneForm = document.getElementById('phoneForm');
const submitForm = document.getElementById('submitForm');

submitForm.addEventListener('click', (e) => {
    // Validação de campos vazios
    if(nameForm.value == ''){
        alert('Nome não informado!');
        nameForm.focus();
        return e.preventDefault();
    }else if(emailForm.value == ''){
        alert('Email não informado!');
        emailForm.focus();
        return e.preventDefault();
    }else if(phoneForm.value == ''){
        alert('Telefone não informado!');
        phoneForm.focus();
        return e.preventDefault();
    };
});
