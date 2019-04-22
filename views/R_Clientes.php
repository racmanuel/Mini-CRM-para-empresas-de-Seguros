<div class="box box-success">
  <div class="box-header with-border">
    <h3 class="box-title">Registrar Clientes</h3>
  </div>
  <div class="box-body">
    <div class="col">
      <!-- form start -->
      <form class="form-horizontal" action="backend/R_Clientes.php" method="post">
        <div class="box-body">
          <div class="form-group">
            <label for="Nombre" class="col-sm-2 control-label">Nombre</label>
            <div class="col-xs-4">
              <input type="text" class="form-control" id="Nombre" placeholder="Nombre" name="nombre" required>
            </div>
            <label for="Telefono" class="col-sm-2 control-label">Telefono</label>
            <div class="col-xs-4">
              <input type="tel" class="form-control" id="Telefono" placeholder="Telefono" name="telefono"required>
            </div>
          </div>
          <div class="form-group">
            <label for="Correo" class="col-sm-2 control-label">Correo</label>
            <div class="col-xs-4">
              <input type="email" class="form-control" id="Correo" placeholder="Correo" name="correo"required>
            </div>
            <label for="Fecha" class="col-sm-2 control-label">Fecha de Nacimiento</label>
            <div class="col-xs-4">
              <input type="date" class="form-control" value="2017-06-01" name="fecha" required/>
            </div>
          </div>
          <div class="form-group">
            <label for="Password" class="col-sm-2 control-label">Password</label>
            <div class="col-xs-4">
              <input type="password" class="form-control" id="Password" placeholder="Password" name="password"required>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-success pull-right">Registrar</button>
        </div>
        <!-- /.box-footer -->
      </form>
    </div>
  </div>
  <!-- /.box-body -->
  <div class="box-footer">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>Telefono</th>
          <th>Correo</th>
          <th>Fecha</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>Telefono</th>
          <th>Correo</th>
          <th>Fecha</th>
        </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-footer-->
</div>
</div>
<script type="text/javascript">
  var dateControl = document.querySelector('input[type="date"]');
  dateControl.value = '2017-06-01';
  $(document).ready(function() {
    $('#example').DataTable({
      responsive: true,
      "serverSide": true,
      "ajax": {
        "url": "config/server_side_clientes.php",
        "type": "POST"
      },
      "columns": [{
          "data": "Id"
        },
        {
          "data": "Nombre"
        },
        {
          "data": "Telefono"
        },
        {
          "data": "Correo"
        },
        {
          "data": "Fecha"
        }
      ]
    });
  });
</script>
