<?php include('header.php') ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1>Juegos </h1>
            <a href="<?php echo BASE_URL . $controlador . '/load_add' ?>" class="btn btn-success pull-right">
                Nuevo Registro
            </a>
        </div>	
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Categoria</th>
                <th>Año de Creacion</th>
                <th>Personajes</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                for ($x = 0; $x < count($items_juegos); $x++):
            ?>
                <tr>
                    <td><?php echo $items_juegos[$x]->id ?></td>
                    <td><?php echo $items_juegos[$x]->nombre ?></td>
                    <td><?php echo $items_juegos[$x]->descripcion ?></td>
                    <td><?php echo $items_juegos[$x]->categoria ?></td>
                    <td><?php echo $items_juegos[$x]->fecha_creacion ?></td>
                    <td><?php echo $items_juegos[$x]->pjs ?></td>
                    <td>
                        <a href="<?php echo BASE_URL . $controlador . '/load_update/' . $items_juegos[$x]->id ?> " class="btn btn-info">Editar</a>	
                        <a id="<?php echo $items_juegos[$x]->id ?>" class="btn btn-danger btn-eliminar">Eliminar</a>
                    </td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</div>
<script src="<?php echo BASE_URL; ?>static/js/master/<?php echo $controlador . '.js' ?>"></script>

<?php include('footer.php'); ?>


