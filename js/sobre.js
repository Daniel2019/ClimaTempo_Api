var linha = document.getElementById('linha-tempo');
var link = document.getElementById('links-mobile');
var btn = document.getElementById('id-pesquisa');
var btn2 = document.getElementById('id-pesquisa2');

btn.addEventListener('click', function() {
    window.location.href = "index.php?id";
});

btn2.addEventListener('click', function() {
    window.location.href = "index.php?id";
});

linha.addEventListener('click', function() {
    app2();
});

function app2(){
    if(link.style.display != 'flex') {
        link.style.display = 'flex';
        return;
      }
      link.style.display = 'none';
      form.style.display = 'none';
}