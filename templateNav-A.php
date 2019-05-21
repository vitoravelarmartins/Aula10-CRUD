<?PHP
echo('<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">LogoMarca</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Sistema <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Estoque</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Opções
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Cadastrar Novo Funcionário</a>
          <a class="dropdown-item" href="#">Deletar Funcionário</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Emitir Relatório Mensal</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Fazer Novo Pedido</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Procure Pelo Produto" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procure</button>
    </form>
  </div>
</nav>
');
?>