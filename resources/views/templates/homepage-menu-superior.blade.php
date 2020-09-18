<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" id="botao1" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" href="">Anamneses</a>
      </li>
    </ul>

    <li class="nav-item">
      <button class="btn btn-primary" type="button" id="botao2" onclick="mudaCorDeFundo()">Auto contraste</button> 
      <script> 
          function mudaCorDeFundo() {
          document.body.style.backgroundColor= "black";

          document.getElementById('name').style.backgroundColor = 'white';
          document.getElementById('name').style.fontFamily = "Arial";
          document.getElementById('name').style.fontSize = "larger";

          document.getElementById("gender").style.backgroundColor = 'white';
          document.getElementById('gender').style.fontFamily = "Arial";
          document.getElementById('gender').style.fontSize = "larger";

          document.getElementById("age").style.backgroundColor = 'white';
          document.getElementById('age').style.fontFamily = "Arial";
          document.getElementById('age').style.fontSize = "larger";

          document.getElementById("corEtnia").style.backgroundColor = 'white';
          document.getElementById('corEtnia').style.fontFamily = "Arial";
          document.getElementById('corEtnia').style.fontSize = "larger";

          document.getElementById("isAdm").style.backgroundColor = 'white';
          document.getElementById('name').style.fontFamily = "Arial";
          document.getElementById('name').style.fontSize = "larger";

          document.getElementById('botao1').style.backgroundColor = 'black';

          document.getElementById('botao2').style.backgroundColor = 'black';
          document.getElementById('name').style.fontFamily = "Arial";
        
          document.getElementById('name').style.fontSize = "larger";

          

          document.getElementById('mudalista').style.Color = 'white';
          document.getElementById('mudacor2').style.backgroundColor = 'black';
          document.getElementById('mudacor3').style.backgroundColor = 'black';
          

          

          

          

          

          

          //document.getElementsByTagName('nav').css('backgroundColor','black');
          //document.getElementById("muda").querySelectorAll("p").style.color = 'yellow'; 
        }
      </script>
</nav>