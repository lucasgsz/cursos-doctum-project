<!DOCTYPE html>
<?php 
  include "cabecalho.php";
?>
<style>
  #form{
    margin-top: 100px;
  }
  body, label, option{
    text-transform: uppercase;
  }
</style>
<div id="after_submit"></div>
  <form id="form" action="inserir-curso.php" method="POST">
  <div class="row">
    <label class="required" for="nome">Curso</label><br />
    <input required="required" id="nome" name="nome" type="text" value="" size="30" /><br />
  </div>
  <div class="row">
    <label class="required" for="unidade-rec">Unidade</label><br />
    <select name="unidade-rec" id="unidade-rec" required="required">
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
  </div>
  <div class="row">
    <label class="required" for="modalidade">Modalidade</label><br />
    <select name="modalidade" id="modalidade" required="required">
      <option value="">Selecione a modalide</option>
        <optgroup label="Formatos:">
          <option value="ead">EAD</option>
          <option value="presencial">PRESENCIAL</option>
        </optgroup>
  </select>
  </div>
  <div class="row">
    <label class="required" for="formacao">Tipo de Graduação</label><br />
    <select name="formacao" id="formacao" required="required">
      <option value="">Selecione o tipo</option>
        <optgroup label="Formatos:">
          <option value="tecnologo">Tecnologo</option>
          <option value="bacharelado">Bacharelado</option>
          <option value="licenciatura">Licenciatura</option>
        </optgroup>
  </select>
  </div>
    <input type="submit" value="Cadastrar"/>
  </form>
  </body>
</html>