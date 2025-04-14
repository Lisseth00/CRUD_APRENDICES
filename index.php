<?php
    require_once("C:/laragon/www/CRUD_APRENDICES/view/head/head.php");

    // Array con las imágenes
    $imagenes = [
        "https://scontent-bog2-1.xx.fbcdn.net/v/t39.30808-6/484148372_1164097975510576_5240861171184045525_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeF0hZatepfnxGU6nboitnoQiLWMchKygnWItYxyErKCdVro9KVmEj41PRhxft54_4p1EFg9Qu9966gGP63CF8dQ&_nc_ohc=pbr_fUvcq1QQ7kNvwEBpFGO&_nc_oc=AdmIOm2oBQFU5NTsb25A8bU6pFE8kN3dL1vZuWQZLcUe54ew_hgsWz8sHQRyFLM1cSk&_nc_zt=23&_nc_ht=scontent-bog2-1.xx&_nc_gid=VME-TmxfN3zZ6QpNqTdbuw&oh=00_AfGofUEE5WALu_jjt7lkhtT5m3o97JGNE79R9MJky0UCnA&oe=6802F694",
        "https://scontent-bog2-1.xx.fbcdn.net/v/t39.30808-6/484092944_1164098158843891_6925986216990506444_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeFK2FsdBZ3nRb4hERSOiC2c_7HU-jiY6BL_sdT6OJjoEvb9n6jWCQLYRr9tOrocio0_ECIS9k5QjY2sIu4cF8x8&_nc_ohc=Ndx1nldnkigQ7kNvwFmaUBr&_nc_oc=AdlO_pQj5v88xQnQKlAm4QrGngQ08M5RXLcNs2hnGpJsP_n0N6nu1XOGpx2TAI1cKXo&_nc_zt=23&_nc_ht=scontent-bog2-1.xx&_nc_gid=N4qdZYx9a8RGiGZBS5u-7Q&oh=00_AfFEN392Tx8tcTBDMOIUax2zI_Nv01IovEWsAS3NnRXb8A&oe=6802FBFB",
        "https://scontent-bog2-1.xx.fbcdn.net/v/t39.30808-6/484812732_1164097898843917_1139569744160390794_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeFYonxvlG3ikOury1O_Ounrr4NFzRVXljSvg0XNFVeWNCIMBl6u5MWbUdED9qfW-FXqk9HArsvbMj3rRIq8E9s8&_nc_ohc=gYZ7GG8VtxcQ7kNvwFkH01m&_nc_oc=AdmJXfJlRaVDiCx8pG5lP0k96N77fmwDU13zXvnz94F2KydMulfQyBaKo9OcoKILb8Q&_nc_zt=23&_nc_ht=scontent-bog2-1.xx&_nc_gid=X8md3q2hLt9jXZEUpefBIg&oh=00_AfH8YrNxN2pcTFJ8539MMpNfJpBp_pZVrgWx_cd_QEjUVQ&oe=68030E20"
    ];

    // Elegir imagen aleatoria
    $imagenSeleccionada = $imagenes[array_rand($imagenes)];
?>

<h1 class="text-dark text-center fw-bold display-3">
    ¡Inscríbete en el SENA y construye <br> el futuro que sueñas!
</h1>

<div class="text-center my-4">
    <img src="<?php echo $imagenSeleccionada; ?>" alt="Imagen aleatoria" class="img-fluid rounded" style="max-width: 500px;">
</div>

<?php
    require_once("C:/laragon/www/CRUD_APRENDICES/view/head/footer.php");
?>
