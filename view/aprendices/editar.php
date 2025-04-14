<?php
    require_once("C:/laragon/www/CRUD_APRENDICES/view/head/head.php");
    require_once("C://laragon/www/CRUD_APRENDICES/controller/aprendizController.php");
    $aprendiz = new AprendizController();
    $date= $aprendiz->show($_GET['id']);
?>
<form action="update.php?id=<?= $date['id'] ?>" method="POST" autocomplete="off"> class="container py-4">

    <div class="card mb-4" style="background-color: #fff; border: 2px solid #08b822; border-radius: 10px;">
        <div class="card-header text-center text-white" style="background-color: #08b822; border-radius: 8px 8px 0 0;">
            <h1 class="fw-bold mb-0">Editar Aprendiz</h1>
            <p class="fs-5 mt-1 mb-0">Actualiza los datos registrados</p>
        </div>
    </div>

    <!-- Información Personal -->
    <div class="card mb-4" style="background-color: #fff; border: 1px solid #08b822; border-radius: 10px;">
        <div class="card-header text-white" style="background-color: #08b822;">Información Personal</div>
        <div class="card-body row g-3">
            <div class="col-md-3">
                <label class="form-label text-dark">Primer Nombre</label>
                <input type="text" name="primer_nombre" class="form-control" value="<?= $date['primer_nombre'] ?>" style="background-color: #f8f9fa; border: 1px solid #08b822;" required>
            </div>
            <div class="col-md-3">
                <label class="form-label text-dark">Segundo Nombre</label>
                <input type="text" name="segundo_nombre" class="form-control" value="<?= $date['segundo_nombre'] ?>" style="background-color: #f8f9fa; border: 1px solid #08b822;">
            </div>
            <div class="col-md-3">
                <label class="form-label text-dark">Primer Apellido</label>
                <input type="text" name="primer_apellido" class="form-control" value="<?= $date['primer_apellido'] ?>" style="background-color: #f8f9fa; border: 1px solid #08b822;" required>
            </div>
            <div class="col-md-3">
                <label class="form-label text-dark">Segundo Apellido</label>
                <input type="text" name="segundo_apellido" class="form-control" value="<?= $date['segundo_apellido'] ?>" style="background-color: #f8f9fa; border: 1px solid #08b822;">
            </div>
        </div>
    </div>

    <!-- Identificación y Contacto -->
    <div class="card mb-4" style="background-color: #fff; border: 1px solid #08b822; border-radius: 10px;">
        <div class="card-header text-white" style="background-color: #08b822;">Identificación y Contacto</div>
        <div class="card-body row g-3">
            <div class="col-md-4">
                <label class="form-label text-dark">Tipo de Documento</label>
                <select class="form-select" name="id_tipo_documento" style="background-color: #f8f9fa; border: 1px solid #08b822;" required>
                    <option disabled>Seleccione una opción</option>
                    <option value="1" <?= ($date['tipo_documento'] == 1) ? 'selected' : '' ?>>Tarjeta de identidad</option>
                    <option value="2" <?= ($date['tipo_documento'] == 2) ? 'selected' : '' ?>>Cédula de ciudadanía</option>
                    <option value="3" <?= ($date['tipo_documento'] == 3) ? 'selected' : '' ?>>Cédula de extranjería</option>
                    <option value="4" <?= ($date['tipo_documento'] == 4) ? 'selected' : '' ?>>Tarjeta de extranjería</option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label text-dark">Número de Documento</label>
                <input type="text" name="documento" class="form-control" value="<?= $date['documento'] ?>" style="background-color: #f8f9fa; border: 1px solid #08b822;" minlength="5" maxlength="10" required>
            </div>
            <div class="col-md-4">
                <label class="form-label text-dark">Fecha de Nacimiento</label>
                <input type="date" name="fecha_nacimiento" class="form-control" value="<?= $date['fecha_nacimiento'] ?>" style="background-color: #f8f9fa; border: 1px solid #08b822;" required>
            </div>
            <div class="col-md-6">
                <label class="form-label text-dark">Correo Electrónico</label>
                <input type="email" name="correo" class="form-control" value="<?= $date['correo'] ?>" style="background-color: #f8f9fa; border: 1px solid #08b822;" required>
            </div>
            <div class="col-md-6">
                <label class="form-label text-dark">Teléfono</label>
                <input type="tel" name="telefono" class="form-control" value="<?= $date['telefono'] ?>" style="background-color: #f8f9fa; border: 1px solid #08b822;" pattern="[0-9]{7,10}" required>
            </div>
        </div>
    </div>

    <!-- Información Complementaria -->
    <div class="card mb-4" style="background-color: #fff; border: 1px solid #08b822; border-radius: 10px;">
        <div class="card-header text-white" style="background-color: #08b822;">Información Complementaria</div>
        <div class="card-body row g-3">
            <div class="col-md-6">
                <label class="form-label text-dark">Género</label>
                <select class="form-select" name="id_genero" style="background-color: #f8f9fa; border: 1px solid #08b822;" required>
                    <option disabled selected>Seleccione una opción</option>
                    <option value="1" <?= ($date['genero'] == 1) ? 'selected' : '' ?>>Masculino</option>
                    <option value="2" <?= ($date['genero'] == 2) ? 'selected' : '' ?>>Femenino</option>
                    <option value="3" <?= ($date['genero'] == 3) ? 'selected' : '' ?>>Otro</option>
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label text-dark">Grupo Sanguíneo</label>
                <select class="form-select" name="id_grupo_sanguineo" style="background-color: #f8f9fa; border: 1px solid #08b822;" required>
                    <option disabled>Seleccione una opción</option>
                    <?php
                        $grupos = ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'];
                        foreach ($grupos as $i => $grupo) {
                            $selected = ($date['grupo_sanguineo'] == ($i+1)) ? 'selected' : '';
                            echo "<option value='".($i+1)."' $selected>$grupo</option>";
                        }
                    ?>
                </select>
            </div>
        </div>
    </div>

    <!-- Programa de Formación -->
    <div class="card mb-4" style="background-color: #fff; border: 1px solid #08b822; border-radius: 10px;">
        <div class="card-header text-white" style="background-color: #08b822;">Programa de Formación</div>
        <div class="card-body row g-3">
            <div class="col-md-4">
                <label class="form-label text-dark">Programa</label>
                <select class="form-select" name="programa" style="background-color: #f8f9fa; border: 1px solid #08b822;" required>
                    <option disabled>Seleccione una opción</option>
                    <?php
                        $programas = [
                            'Técnico en Sistemas', 'Técnico en Asistencia Administrativa',
                            'Técnico en Cocina', 'Técnico en Contabilidad', 'Técnico en Manejo Ambiental',
                            'Técnico en Logística Empresarial', 'Tecnólogo en ADSO', 'Tecnólogo en Gestión Administrativa',
                            'Tecnólogo en Talento Humano', 'Tecnólogo en Logística', 'Tecnólogo en Agropecuaria',
                            'Tecnólogo en Control Ambiental'
                        ];
                        foreach ($programas as $i => $prog) {
                            $selected = ($date['programa_formacion'] == ($i+1)) ? 'selected' : '';
                            echo "<option value='".($i+1)."' $selected>$prog</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label text-dark">Fecha de Inicio</label>
                <input type="date" name="fecha_inicio" class="form-control" value="<?= $date['fecha_inicio'] ?>" style="background-color: #f8f9fa; border: 1px solid #08b822;" required>
            </div>
            <div class="col-md-4">
                <label class="form-label text-dark">Fecha de Finalización</label>
                <input type="date" name="fecha_fin" class="form-control" value="<?= $date['fecha_fin'] ?>" style="background-color: #f8f9fa; border: 1px solid #08b822;" required>
            </div>
        </div>
    </div>

    <!-- Botones -->
    <div class="text-center mt-4">
        <button type="submit" class="btn" style="background-color: #08b822; color: #fff; border-radius: 6px;">Actualizar</button>
        <a href="index.php" class="btn btn-danger" style="border-radius: 6px;">Cancelar</a>
    </div>

</form>

<?php
    require_once("C:/laragon/www/CRUD_APRENDICES/view/head/footer.php");
?>
