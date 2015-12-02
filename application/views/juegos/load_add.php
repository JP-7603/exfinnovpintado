<?php include('header.php'); ?>

<div class="container">
    <div>
        <h3>REGISTRAR JUEGOS</h3>  
        <br> 
    </div>
    <div class="row">
        <div class="col-lg-12">
            <a href="<?php echo BASE_URL . $controlador . '/load_list' ?>"      class="btn btn-success pull-right">Regresar</a>
        </div>
    </div>
    <form autocomplete="off">
        <fieldset>
            <legend>Datos del Juego</legend>
            <div class="row">
                <div class="col-md-4">
                    <p>Nombre</p>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                <div class="col-md-8">
                    <p>Descripcion</p>
                    <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <p>Categoria</p>
                    <select name="categoria" id="categoria" class="form-control">
                        <option value="">-- Seleccione --</option>
                        <option value="Accion">Accion</option>
                        <option value="Aventura">Aventura</option>
                        <option value="Carreras">Carreras</option>
                        <option value="Casual">Casual</option>
                        <option value="Deportes">Deportes</option>
                        <option value="Estrategia">Estrategia</option>
                        <option value="Indie">Indie</option>
                        <option value="Multijugador">Multijugador</option>
                        <option value="Rol">Rol</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <p>Personajes</p>
                    <textarea class="form-control" name="pjs" id="pjs" rows="3"></textarea>
                </div>
                <div class="col-md-4">
                    <p>Año de Creacion</p>
                    <select class="form-control" name="fecha_creacion" id="fecha_creacion">
                        <option value="">-- Seleccione --</option>
                        <?php 
                            for ($i=2015; $i >= 1950; $i--) { ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <br>
        </fieldset>
        <br>
        <div class="row">
            <center><a id="btn-registrar" class="btn btn-large btn-danger">Registrar</a></center>
        </div>
    </form>
</div>
<script src="<?php echo BASE_URL; ?>static/js/master/<?php echo $controlador . '.js' ?>"></script>
<?php include('footer.php'); ?>