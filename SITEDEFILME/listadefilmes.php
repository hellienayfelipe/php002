<?php
include "cabecalho.php";
?>
<div class="container">
  <h2>Todos os filmes</h2>

  <div class="row">

  <?php
  include "conexao.php";
  $sql = "select * from filmes order by titulo asc";
  $resultado = mysqli_query($conexao, $sql);

  while ($linha = mysqli_fetch_assoc($resultado)) {
  ?>
    <div class="col-3 mb-4">
      <div class="card" style="width: 18rem;">
        <img src="<?= $linha['foto']; ?>" class="card-img-top img-formatada">
        <h3><? echo mb_strimwidth($linha['titulo'], 0, 20, "...");?></h3>
        <div class="card-body">
          <h5 class="card-title"><?= $linha['titulo']; ?></h5>
          <p class="card-text">⭐ <?= $linha['avaliacao']; ?>/10</p>
          <a href="umfilme.php?id=<?= $linha['id'] ?>" class="btn btn-primary">Ver Detalhes</a>
        </div>
      </div>
    </div>
  <?php
  }

  mysqli_close($conexao);
  ?>
</div>
</div>
</div>

<?php include "rodape.php"; ?>