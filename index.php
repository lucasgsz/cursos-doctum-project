<?php 
include "conexao.php";
?>
<!DOCTYPE html>
<head>
    <title>Cursos Doctum</title>
    <link rel="stylesheet" type="text/css" href="css/style-card-cursos.css">
</head>
    <?php 
        include "cabecalho.php";
    ?>
    <div class="side-nav">
      <select class="item-side">
          <option value="">Selecione a Unidade</option>
          <optgroup label="Graduação EAD e Presencial">
            <option value="almenara">Almenara</option>
            <option value="carangola">Carangola</option>
            <option value="caratinga">Caratinga</option>
            <option value="cataguases">Cataguases</option>
            <option value="guarapari">Guarapari</option>
            <option value="iuna">Iúna</option>
            <option value="ipatinga">Ipatinga</option>
            <option value="joao_monlevade">João Monlevade</option>
            <option value="juiz_de_fora_centro">Juiz de Fora Centro</option>
            <option value="juiz_de_fora_itamar">Juiz de Fora Itamar Franco</option>
            <option value="juiz_de_fora_zn">Juiz de Fora Zona Norte</option>
            <option value="leopoldina">Leopoldina</option>
            <option value="manhuacu">Manhuaçu</option>
            <option value="serra">Serra</option>
            <option value="sete_lagoas">Sete Lagoas</option>
            <option value="teofilo_otoni">Teófilo Otoni</option>
            <option value="vila">Vila Velha</option>
            <option value="vitoria">Vitória</option>
          </optgroup>
      </select>
      <select class="item-side">
        <option value="">Selecione a modalide</option>
          <optgroup label="Formatos:">
            <option value="ead">EAD</option>
            <option value="bacharelado">PRESENCIAL</option>
          </optgroup>
      </select> 
      <select class="item-side">
        <option value="">Tipo de graduação</option>
          <optgroup label="Formatos:">
            <option value="tecnologo">Tecnologo</option>
            <option value="bacharelado">Bacharelado</option>
            <option value="licenciatura">Licenciatura</option>
          </optgroup>
      </select>
      <button class="item-side">Buscar</button>
    </div>
    <div class="cards">
      <?php foreach($cursos as $cursoid){
      ?>  
      <div class="card">
        <img src="images/fundo-card.png">
      <div class="card-spec">
        <button class="apagar-curso">APAGAR</button>
        <div class="card-spec-info">
          <a class="titulo"><?php echo $cursoid["nome"]?></a>
          
          <!-- Criar uma funcao para verificar se é ead ou presencial, e mudar o css a apartir disso-->
          <a class="modalidade-presencial"><?php echo $cursoid["modalidade"]?></a>

          <button class="botao-card">Se inscreva</button>
          <button class="botao-card">Saiba Mais</button>
        </div>
      </div>  
    </div>
    <?php } ?>  
  </body>
</html>
