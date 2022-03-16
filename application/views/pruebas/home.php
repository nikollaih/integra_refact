<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">DataTables</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                            <li class="breadcrumb-item active">DataTables</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Lista de pruebas</h4>
                    </div>
                    <div class="card-body">   
                        <table id="tabla-pruebas" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Alcance</th>
                                    <th>Tipo</th>
                                    <th>Cantidad de preguntas</th>
                                    <th>Duración</th>
                                    <th>Fecha de creación</th>
                                    <th>Estado</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($pruebas != false) {
                                    foreach ($pruebas as $p) { ?>
                                        <tr>
                                            <td><?= $p["nombre_prueba"] ?></td>
                                            <td><?= $p["alcance_prueba"] ?></td>
                                            <td><?= $p["tipo_prueba"] ?></td>
                                            <td><?= $p["cantidad_preguntas"] ?></td>
                                            <td><?= $p["duracion"] ?> Minutos</td>
                                            <td><?= date("d F Y", strtotime($p["created_at"])) ?></td>
                                            <td><?= $p["estado"] == "1" ? "<label class='text-success'>Activa</label>" : "<label class='text-danger'>Inactiva</label>" ?></td>
                                            <td class="text-center">
                                                <a class="btn btn-success-custom" href="<?= base_url() ?>Pruebas/ver/<?= $p["id_prueba"] ?>">Ver</a>
                                                <a class="btn btn-success-custom" href="<?= base_url() ?>Pruebas/empezar/<?= $p["id_prueba"] ?>">Realizar prueba</a>
                                            </td>
                                        </tr>
                                    <?php }
                                } ?>
                            </tbody>
                        </table>                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container-fluid -->
</div>

<script>
    $(document).ready( function () {
    $('#tabla-pruebas').DataTable({
        order: []
    });
} );
</script>