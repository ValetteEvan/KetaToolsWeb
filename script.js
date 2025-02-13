document.getElementById("btn1").addEventListener("click", function() {
    document.getElementById("form-container1").style.display = "block";  // Correction de l'ID ici
    document.getElementById("form-container2").style.display = "none";  // Cacher l'autre formulaire
});

document.getElementById("btn2").addEventListener("click", function() {
    document.getElementById("form-container2").style.display = "block";  // Affiche formulaire 2
    document.getElementById("form-container1").style.display = "none";  // Cacher l'autre formulaire
});

document.getElementById('btn-login').addEventListener('click', function() {
    document.getElementById('form-login').style.display = 'block';
    document.getElementById('form-register').style.display = 'none';
});

document.getElementById('btn-register').addEventListener('click', function() {
    document.getElementById('form-register').style.display = 'block';
    document.getElementById('form-login').style.display = 'none';
});
