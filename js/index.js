var linha = document.getElementById('linha-tempo');
var link = document.getElementById('links-mobile');
var btn = document.getElementById('id-pesquisa');
var btn2 = document.getElementById('id-pesquisa2');
var form = document.getElementById('pesquisa');

btn.addEventListener('click', function() {
    app();
});

btn2.addEventListener('click', function() {
    app();
});

linha.addEventListener('click', function() {
    app2();
});

function app(){
    link.style.display = "none";
    if(form.style.display != 'block') {
        form.style.display = 'block';
        return;
      }
      form.style.display = 'none';
}

function app2(){
    if(link.style.display != 'flex') {
        link.style.display = 'flex';
        return;
      }
      link.style.display = 'none';
      form.style.display = 'none';
}

