document.getElementById('btn-login').addEventListener('click', function() {
    document.getElementById('form-login').style.display = 'block';
    document.getElementById('form-register').style.display = 'none';
});

document.getElementById('btn-register').addEventListener('click', function() {
    document.getElementById('form-register').style.display = 'block';
    document.getElementById('form-login').style.display = 'none';
});

