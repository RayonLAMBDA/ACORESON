<script src="https://kit.fontawesome.com/d77ddc471b.js" crossorigin="anonymous"></script>
<?php
    include_once "conexion2.php";
    $conexion=conexion2();
    if (!$conexion) {
        echo 'F';
    }
?>
<div class="row">
    <div class="col-sm-12">
    <h2>TAREAS</h2>
        <table class="table table-hover table-condensed table-bordered">
        <caption>
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
                Agregar nueva tarea
                <i class="far fa-plus-square"></i>
             </button>
        </caption>    
            <tr>
                <td>Realizada</td>
                <td>ID Siniestro</td>
                <td>Orden</td>
                <td>Daños</td>
                <td>Inicio</td>
                <td>Termino</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
            <?php
                $sql="SELECT Realizada, ID_Siniestro, Orden, Danios, Inicio, Termino 
                from a_tareas";
                $result=mysqli_query($conexion, $sql);
                while($ver=mysqli_fetch_row($result)){
                    
                    $datos = $ver[0]."||".
                        $ver[1]."||".
                        $ver[2]."||".
                        $ver[3]."||".
                        $ver[4]."||".
                        $ver[5];
                        
            ?>
            <tr>
                <td><?php echo $ver[0]?></td>
                <td><?php echo $ver[1]?></td>
                <td><?php echo $ver[2]?></td>
                <td><?php echo $ver[3]?></td>
                <td><?php echo $ver[4]?></td>
                <td><?php echo $ver[5]?></td>
                <td>
                    <button class="btn btn-warning" data-toggle="modal" 
                    data-target="#modalEdicion" onclick="agregaform('<?php echo $datos?>')">
                        <i class="fas fa-edit"></i>
                    </button>
                </td>
                <td>
                    <button class="btn btn-danger" onclick="preguntar('<?php echo $ver[1]?>')">
                    <i class="fas fa-eraser">
                    </i>
                    </button>
                </td>
            </tr>
            <?php
                }
            ?>
        </tabla>
    </div>
</div>