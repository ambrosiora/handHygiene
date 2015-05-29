<?php require_once '../template/topo.php'; ?>
<?php require_once '../template/menu.php'; ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
<div class="container">
    <h3>Relatório Geral</h3>
    <form class="form-horizontal">
      <div class="form-group">
        <label for="dataInicio" class="col-xs-2 control-label">Data Inicio</label>
        <div class="col-xs-6 input-group date">
          <input type="text" class="form-control" name="dataInicio" id="dataInicio" placeholder="Data Inicio"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
        </div>
      </div>
      <div class="form-group">
        <label for="dataFim" class="col-xs-2 control-label">Data Fim</label>
        <div class="col-xs-6 input-group date">
          <input type="text" class="form-control" id="dataFim" name="dataFim" placeholder="Data Fim"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-6 col-xs-2 text-right">
          <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-filter"></span></button>
        </div>
      </div>
    </form>
    <hr>
    <?php if (count($lista) > 0) { ?>
    <table class="table table-striped table-hover" id="tableRelTotal">
      <thead>
        <tr>
          <th>Data</th>
          <th>Local</th>
          <th>Setor</th>
          <th>Categoria</th>
          <th>Ação</th>
          <th>Indicação</th>
          <th>Vestimenta</th>
          <th>Higienização</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($lista as $key => $value) { ?>
          <tr>
            <td><?=$value['dataCadastro']?></td>
            <td><?=$value['local']?></td>
            <td><?=$value['setor']?></td>
            <td><?=$value['categoria']?></td>
            <td><?=$value['acao']?></td>
            <td><?=$value['indicacao']?></td>
            <td><?=$value['vestimenta']?></td>
            <td><?=$value['higienizacao']?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  <?php }else{ ?>
    <div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Ops!</strong> Não há registros lançados, refine a sua busca.
    </div>
  <?php } ?>
</div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('.input-group.date').datepicker({
      format: "dd/mm/yyyy",
      language: "pt-BR",
      autoclose: true
    });
  });
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/locales/bootstrap-datepicker.pt-BR.min.js"></script>
<?php require_once '../template/rodape.php'; ?>