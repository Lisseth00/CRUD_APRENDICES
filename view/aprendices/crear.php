<?php
    require_once("C:/laragon/www/CRUD_APRENDICES/view/head/head.php");
?>

<form action="store.php" method="POST" autocomplete="off" style="padding: 20px; border-radius: 12px; background-color: #fff;">

    <div class="card mb-4" style="background-color: #fff; border: 2px solid #08b822; border-radius: 10px;">
        <div class="card-header text-center text-white" style="background-color: #08b822; border-radius: 8px 8px 0 0;">
            <h2 class="mb-0">Formulario de Registro</h2>
            <p class="mt-1 mb-0 fs-5">Agregar un nuevo Aprendiz</p>
        </div>
    </div>

    <!-- Información Personal -->
    <div class="card mb-4" style="background-color: #fff; border: 1px solid #08b822; border-radius: 10px;">
        <div class="card-header text-white" style="background-color: #08b822;">Información Personal</div>
        <div class="card-body row g-3">
            <div class="col-md-3">
                <label class="form-label text-dark">Primer Nombre</label>
                <input type="text" name="primer_nombre" class="form-control" style="background-color: #f8f9fa; border: 1px solid #08b822;" required>
            </div>
            <div class="col-md-3">
                <label class="form-label text-dark">Segundo Nombre</label>
                <input type="text" name="segundo_nombre" class="form-control" style="background-color: #f8f9fa; border: 1px solid #08b822;">
            </div>
            <div class="col-md-3">
                <label class="form-label text-dark">Primer Apellido</label>
                <input type="text" name="primer_apellido" class="form-control" style="background-color: #f8f9fa; border: 1px solid #08b822;" required>
            </div>
            <div class="col-md-3">
                <label class="form-label text-dark">Segundo Apellido</label>
                <input type="text" name="segundo_apellido" class="form-control" style="background-color: #f8f9fa; border: 1px solid #08b822;">
            </div>
        </div>
    </div>

    <!-- Identificación y Contacto -->
    <div class="card mb-4" style="background-color: #fff; border: 1px solid #08b822; border-radius: 10px;">
        <div class="card-header text-white" style="background-color: #08b822;">Identificación y Contacto</div>
        <div class="card-body row g-3">
            <div class="col-md-4">
                <label class="form-label text-dark">Tipo de Documento</label>
                <select class="form-select" style="background-color: #f8f9fa; border: 1px solid #08b822;" name="id_tipo_documento" required>
                    <option value="" disabled selected>Seleccione una opción</option>
                    <option value="1">Tarjeta de identidad</option>
                    <option value="2">Cédula de ciudadania</option>
                    <option value="3">Cédula de extranjería</option>
                    <option value="4">Tarjeta de extranjería</option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label text-dark">Número de Documento</label>
                <input type="text" name="documento" class="form-control" style="background-color: #f8f9fa; border: 1px solid #08b822;" required>
            </div>
            <div class="col-md-4">
                <label class="form-label text-dark">Fecha de Nacimiento</label>
                <input type="date" name="fecha_nacimiento" class="form-control" style="background-color: #f8f9fa; border: 1px solid #08b822;" required>
            </div>
            <div class="col-md-6">
                <label class="form-label text-dark">Correo Electrónico</label>
                <input type="email" name="correo" class="form-control" style="background-color: #f8f9fa; border: 1px solid #08b822;" required>
            </div>
            <div class="col-md-6">
                <label class="form-label text-dark">Teléfono</label>
                <input type="tel" name="telefono" class="form-control" style="background-color: #f8f9fa; border: 1px solid #08b822;" pattern="[0-9]{7,10}" title="Ingresa un número de teléfono de 7 a 10 dígitos sin espacios ni símbolos" required>
            </div>
        </div>
    </div>

    <!-- Información Complementaria -->
    <div class="card mb-4" style="background-color: #fff; border: 1px solid #08b822; border-radius: 10px;">
        <div class="card-header text-white" style="background-color: #08b822;">Información Complementaria</div>
        <div class="card-body row g-3">
            <div class="col-md-6">
                <label class="form-label text-dark">Género</label>
                <select class="form-select" style="background-color: #f8f9fa; border: 1px solid #08b822;" name="id_genero" required>
                    <option value="" selected disabled>Seleccione una opción</option>
                    <option value="1">Masculino</option>
                    <option value="2">Femenino</option>
                    <option value="3">Otro</option>
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label text-dark">Grupo Sanguíneo</label>
                <select class="form-select" style="background-color: #f8f9fa; border: 1px solid #08b822;" name="id_grupo_sanguineo" required>
                    <option value="" disabled>Seleccione una opción</option>
                    <option value="1">A+</option>
                    <option value="2">A-</option>
                    <option value="3">B+</option>
                    <option value="4">B-</option>
                    <option value="5">AB+</option>
                    <option value="6">AB-</option>
                    <option value="7">O+</option>
                    <option value="8">O-</option>
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
                <select class="form-select" style="background-color: #f8f9fa; border: 1px solid #08b822;" name="programa" required>
                    <optgroup label="Técnicos">
                        <option value="1">Técnico en Sistemas</option>
                        <option value="2">Técnico en Asistencia Administrativa</option>
                        <option value="3">Técnico en Cocina</option>
                        <option value="4">Técnico en Contabilidad</option>
                        <option value="5">Técnico en Manejo Ambiental</option>
                        <option value="6">Técnico en Logística Empresarial</option>
                    </optgroup>
                    <optgroup label="Tecnólogos">
                        <option value="7">Tecnólogo en ADSO</option>
                        <option value="8">Tecnólogo en Gestión Administrativa</option>
                        <option value="9">Tecnólogo en Talento Humano</option>
                        <option value="10">Tecnólogo en Logística</option>
                        <option value="11">Tecnólogo en Agropecuaria</option>
                        <option value="12">Tecnólogo en Control Ambiental</option>
                    </optgroup>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label text-dark">Fecha de Inicio</label>
                <input type="date" name="fecha_inicio" class="form-control" style="background-color: #f8f9fa; border: 1px solid #08b822;" required>
            </div>
            <div class="col-md-4">
                <label class="form-label text-dark">Fecha de Finalización</label>
                <input type="date" name="fecha_fin" class="form-control" style="background-color: #f8f9fa; border: 1px solid #08b822;" required>
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <button type="submit" class="btn" style="background-color: #08b822; color: #fff; border-radius: 6px;">Guardar</button>
        <a class="btn btn-danger" href="index.php" style="border-radius: 6px;">Cancelar</a>
    </div>

</form>

<?php
    require_once("C:/laragon/www/CRUD_APRENDICES/view/head/footer.php");
?>
