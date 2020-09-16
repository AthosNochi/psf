<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <li class="nav-item">
      <button class="btn btn-primary" type="button" id="mudabotao4" onclick="mudaCorDeFundo()">Auto contraste</button> 
      <script> 
          function mudaCorDeFundo() {
          document.body.style.backgroundColor= "black";

          document.getElementById("name").style.backgroundColor = 'white';
          document.getElementById("gender").style.backgroundColor = 'white';
          document.getElementById("age").style.backgroundColor = 'white';
          document.getElementById("corEtnia").style.backgroundColor = 'white';
          document.getElementById("isAdm").style.backgroundColor = 'white';
          document.getElementById('mudabotao3').style.backgroundColor = 'black';
          document.getElementById('mudabotao4').style.backgroundColor = 'black';

          document.getElementById('mudalista').style.Color = 'white';
          document.getElementById('mudacor2').style.backgroundColor = 'black';
          document.getElementById('mudacor3').style.backgroundColor = 'black';
          

          document.getElementById('muda1').style.color = 'white';
          document.getElementById('muda1').style.fontFamily = "Arial";
          document.getElementById('muda1').style.fontSize = "larger";

          document.getElementById('muda2').style.color = 'white';
          document.getElementById('muda2').style.fontFamily = "Arial";
          document.getElementById('muda2').style.fontSize = "larger";

          document.getElementById('muda3').style.color = 'white';
          document.getElementById('muda3').style.fontFamily = "Arial";
          document.getElementById('muda3').style.fontSize = "larger";

          document.getElementById('muda4').style.color = 'white';
          document.getElementById('muda4').style.fontFamily = "Arial";
          document.getElementById('muda4').style.fontSize = "larger";

          document.getElementById('muda5').style.color = 'white';
          document.getElementById('muda5').style.fontFamily = "Arial";
          document.getElementById('muda5').style.fontSize = "larger";

          document.getElementById('muda6').style.color = 'white';
          document.getElementById('muda6').style.fontFamily = "Arial";
          document.getElementById('muda6').style.fontSize = "larger";

          //document.getElementsByTagName('nav').css('backgroundColor','black');
          //document.getElementById("muda").querySelectorAll("p").style.color = 'yellow'; 
        }
      </script>
</nav>