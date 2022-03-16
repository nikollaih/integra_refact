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
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="card-title"><?= $prueba["nombre_prueba"] ?></h4>
                            <div class="d-flex">
                                <a href="<?= base_url() ?>Pruebas/asignarPreguntas/<?= $prueba["id_prueba"] ?>" class="btn btn-info me-3">Configurar preguntas</a>
                                <a href="<?= base_url() ?>Pruebas/participantes/<?= $prueba["id_prueba"] ?>" class="btn btn-success-custom">Participantes</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">   
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <?php
                                    if(!$asignadas || $prueba["cantidad_preguntas"] != count($asignadas)){
                                        ?>
                                            <div class="alert alert-warning alert-dismissible show" role="alert">
                                                La cantidad de preguntas asignadas a la prueba no corresponde con la cantidad solicitada.
                                            </div>
                                        <?php
                                    }
                                ?>
                                <p><?= $prueba["descripcion_prueba"] ?></p>
                                <p><b>Alcance: </b><?= $prueba["alcance_prueba"] ?></p>
                                    <p><b>Tipo: </b><?= $prueba["tipo_prueba"] ?></p>
                                    <p><b>Cantidad de preguntas: </b><?= ($asignadas) ? count($asignadas) : "0" ?>/<?= $prueba["cantidad_preguntas"] ?></p>
                                    <p><b>Duración: </b><?= $prueba["duracion"] ?> Minutos</p>
                                    <p><b>Disponible desde: </b><?= date("d/m/Y - h:i a", strtotime($prueba["fecha_inicio"])) ?></p>
                                    <p><b>Disponible hasta: </b><?= date("d/m/Y - h:i a", strtotime($prueba["fecha_finaliza"])) ?></p>
                                    <p><b>Fecha de creación: </b><?= date("d F, Y", strtotime($prueba["created_at"])) ?></p>
                                    <p>
                                        <b>Dificultad: </b>
                                        <?php
                                            if($dificultad){
                                                echo "<ul style='margin-top: 10px;padding-left: 25px;'>";
                                                for ($i=0; $i < count($dificultad); $i++) { 
                                                    if ($dificultad[$i] == 1) {
                                                        $dificultad_seleccionada = "Fácil";
                                                    } else if($dificultad[$i] == 2) {
                                                        $dificultad_seleccionada = "Intermedia";
                                                    }else{
                                                        $dificultad_seleccionada = "Avanzada";
                                                    }
                                                    
                                                    echo "<li>".$dificultad_seleccionada."</li>";
                                                }
                                                echo "</ul>";
                                            }
                                        ?>
                                    </p>
                                <p><b>Materias: </b></p>
                                <?php
                                    if($materias){
                                        echo "<ul style='margin-top: 10px;padding-left: 25px;'>";
                                        foreach ($materias as $materia) {
                                            echo "<li>".$materia["nommateria"]." - ".$materia["grado"]."°</li>";
                                        }
                                        echo "</ul>";
                                    }
                                ?>
                            </div>
                        </div>                  
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Lista de preguntas</h4>
                    </div>
                    <div class="card-body">   
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                                        <?php
                                                            if($preguntas){
                                                                $x = 1;
                                                                foreach ($preguntas as $pregunta) {
                                                        ?>
                                                                    <p><?= "<b>".$x.".</b> ".$pregunta["descripcion_pregunta"] ?></p>
                                                        <?php
                                                                    $x++;
                                                                }
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                  
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