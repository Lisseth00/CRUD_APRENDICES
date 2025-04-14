<?php
    require_once("C:/laragon/www/CRUD_APRENDICES/view/head/head.php");
    require_once("C:/laragon/www/CRUD_APRENDICES/controller/aprendizController.php");
    $aprendiz = new AprendizController();
    $date= $aprendiz->show($_GET['id']);
?>
<div class="container py-4">
    <div class="card mb-4" style="background-color: #fff; border: 2px solid #08b822; border-radius: 10px;">
        <div class="card-header text-white text-center" style="background-color: #08b822; border-radius: 8px 8px 0 0;">
            <h2 class="mb-0">Detalles del Aprendiz</h2>
        </div>
        <div class="card-body">

            <!-- Botones -->
            <div class="mb-4 d-flex justify-content-center gap-3">
                <a href="/CRUD_APRENDICES/view/aprendices/index.php" class="btn btn-enlace">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <a href="/CRUD_APRENDICES/view/aprendices/editar.php?id=<?= $date['id'] ?>" class="btn btn-enlace">
                    <i class="fas fa-edit"></i>
                </a>
                <button class="btn btn-enlace" data-bs-toggle="modal" data-bs-target="#deleteModal">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </div>

            <!-- Información Personal -->
            <div class="card mb-3" style="background-color: #fff; border: 1px solid #08b822;">
                <div class="card-header text-white" style="background-color: #08b822;">Información Personal</div>
                <div class="card-body">
                    <p><strong>ID:</strong> <?= $date['id'] ?></p>
                    <p><strong>Primer Nombre:</strong> <?= $date['primer_nombre'] ?></p>
                    <p><strong>Segundo Nombre:</strong> <?= $date['segundo_nombre'] ?></p>
                    <p><strong>Primer Apellido:</strong> <?= $date['primer_apellido'] ?></p>
                    <p><strong>Segundo Apellido:</strong> <?= $date['segundo_apellido'] ?></p>
                </div>
            </div>

            <!-- Identificación y Contacto -->
            <div class="card mb-3" style="background-color: #fff; border: 1px solid #08b822;">
                <div class="card-header text-white" style="background-color: #08b822;">Identificación y Contacto</div>
                <div class="card-body">
                    <p><strong>Tipo de Documento:</strong> <?= $date['tipo_documento'] ?></p>
                    <p><strong>Número de Documento:</strong> <?= $date['documento'] ?></p>
                    <p><strong>Teléfono:</strong> <?= $date['telefono'] ?></p>
                    <p><strong>Correo Electrónico:</strong> <?= $date['correo'] ?></p>
                </div>
            </div>

            <!-- Información Complementaria -->
            <div class="card mb-3" style="background-color: #fff; border: 1px solid #08b822;">
                <div class="card-header text-white" style="background-color: #08b822;">Información Complementaria</div>
                <div class="card-body">
                    <p><strong>Fecha de Nacimiento:</strong> <?= $date['fecha_nacimiento'] ?></p>
                    <p><strong>Género:</strong> <?= $date['genero'] ?></p>
                    <p><strong>Grupo Sanguíneo:</strong> <?= $date['grupo_sanguineo'] ?></p>
                </div>
            </div>

            <!-- Programa de Formación -->
            <div class="card mb-3" style="background-color: #fff; border: 1px solid #08b822;">
                <div class="card-header text-white" style="background-color: #08b822;">Programa de Formación</div>
                <div class="card-body">
                    <p><strong>Nombre del Programa:</strong> <?= $date['programa_formacion'] ?></p>
                    <p><strong>Número de Ficha:</strong> <?= $date['numero_de_ficha'] ?></p>
                    <p><strong>Nivel de Formación:</strong> <?= $date['nivel'] ?></p>
                    <p><strong>Fecha de Inicio:</strong> <?= $date['fecha_inicio'] ?></p>
                    <p><strong>Fecha de Finalización:</strong> <?= $date['fecha_fin'] ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de confirmación de eliminación -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="border: 2px solid #08b822;">
            <div class="modal-header text-white" style="background-color: #08b822;">
                <h5 class="modal-title" id="deleteModalLabel">Confirmar Eliminación</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <p>¿Está seguro que desea eliminar al aprendiz? Esta acción no se puede deshacer.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <a href="delete.php?id=<?= $date['id'] ?>" class="btn btn-danger">Eliminar</a>
            </div>
        </div>
    </div>
</div>

<?php
    require_once("C:/laragon/www/CRUD_APRENDICES/view/head/footer.php");
?>
