<?php
include "cabecalho.php";
?>
<div class="container">
    <h2 class="display-5">Melhores Avaliações</h2>
    <div class="row mb-5">
        <?php
        $servidor = 'localhost';
        $bd = 'movieflix';
        $usuario = 'root';
        $senha = '';

        $conexao = mysqli_connect($servidor, $usuario, $senha, $bd);
        if(!$conexao){
            die("deu ruim" . mysqli_connect_error());
        }

        echo "deu bom";
        ?>
    
    <div class="col-3 mb-4">
            <div class="card" style="width: 18rem;">
                <img src="filmes/filme1.webp" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-text">Jurassic Park</h5>
                    <p class="card-text">⭐ 10/10</p>
                    <a href="umfilme.php" class="btn btn-primary">Veja detalhes</a>
                </div>
            </div>
        </div>
        <div class="col-3 mb-4">

            <div class="card" style="width: 18rem;">
                <img src="filmes/filme2.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-text">Karate Kid</h5>
                    <p class="card-text">
                        ⭐ 10/10</p>
                    <a href="umfilme.php" class="btn btn-primary">Veja detalhes</a>
                </div>
            </div>
        </div>
        <div class="col-3 mb-4">
            <div class="card" style="width: 18rem;">
                <img src="filmes/filme3.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-text">Lilo e Stitch</h5>
                    <p class="card-text">
                        ⭐ 10/10</p>
                    <a href="umfilme.php" class="btn btn-primary">Veja detalhes</a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="filmes/filme4.jpg" class="card-img-top">
            <div class="card-body">
                <h5 class="card-text">Pecadores</h5>
                <p class="card-text">
                    ⭐ 10/10</p>
                <a href="umfilme.php" class="btn btn-primary">Veja detalhes</a>
            </div>
        </div>
    </div>
</div>
</div>
<div class="row">
    <div class="col-6">
        <img src="filmes/banguela.png" class="img-fluid">
    </div>

    <div class="col-6 align-content-center">
        <p>Na ilha de Berk, os vikings dedicam a vida a combater e matar dragões. Soluço (Jay Baruchel), filho do chefe Stoico (Gerard Butler), não é diferente. Ele sonha em matar um dragão e provar seu valor ao pai, apesar da descrença geral. Um dia, por acaso, ele acerta um dragão que jamais foi visto, chamado Fúria da Noite. Ao procurá-lo, no dia seguinte, Soluço não consegue matá-lo e acaba soltando-o. Só que ele perdeu parte da cauda e, com isso, não consegue mais voar. Soluço passa a trabalhar em um artefato que possa substituir a parte perdida e, aos poucos, se aproxima do dragão. Só que, paralelamente, Stoico autoriza que o filho participe do treino para dragões, cuja prova final é justamente matar um dos animais.</p>
        <a href="https://youtube.com" class="btn btn-success btn-lg">ASSISTA AO TRAILER</a>
    </div>
</div>
<div class="row">
    <div class="col-6 align-content-center">
        <p>Relâmpago McQueen, um carro de corridas ambicioso, sonha em vencer a Copa Pistão logo em sua estreia. Porém, sua arrogância o leva a um empate na corrida final, forçando uma prova de desempate na Califórnia. No caminho, ele se perde e acaba em Radiator Springs, uma cidade esquecida. Lá, é forçado a consertar os danos que causou e, aos poucos, aprende o valor da amizade, humildade e do trabalho em equipe.</p>
        <a href="https://youtube.com" class="btn btn-success btn-lg">ASSISTA AO TRAILER</a>
    </div>
    <div class="col-6">
        <img src="filmes/carros.webp" class="img-fluid">
    </div>
</div>

<button type="button" class="btn btn-warning btn-lg mt-5 fs-5 f2-bold text-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Precisa de Ajuda? Clique Aqui!
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Ajuda</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Entre em contato através dos nossos canais de comunicação:</p>
        <p>Email: filme@filme.com.br <br> Whatsapp: (11)9999999-9999 <br> <a href="contato.php">Formulario de contato</a> </p>
      </div>
    </div>
  </div>
</div>

<button type="button" class="btn btn-danger btn-lg mt-5 fs-5 f2-bold text-primary" data-bs-toggle="modal" data-bs-target="#meuModal">
    Veja Nossas Noticias
</button>

<div class="modal fade" id="meuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Meu Modal</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Veja as noticias!</p>
        <p> <a href="listadenoticias.php">Clique Aqui!</a> </p>
      </div>
    </div>
  </div>
</div>



</div>
</body>

</html>
<?php
include "rodape.php";
?>