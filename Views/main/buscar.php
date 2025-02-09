<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asesinos Seriales</title>
</head>
<body>
    <form action="" id="frmBuscar">
        <label for="detalle">Buscar Personajes:</label>
        <input type="text" id="detalle" name="detalle" >
        <button type="submit">Buscar</button>
    </form>
    <a href="<?php echo BASE_URL;?>">Home

    <h1>Asesinos Seriales</h1> 
   
    <div id="gallery-container"></div>
    <script>
        const data = <?php echo json_encode($data['asesinos']); ?>;
        const base_url='<?php echo BASE_URL; ?>';
    </script>
    <script src="<?php echo BASE_URL.'Assets/js/pages/principal/buscar.js';?>"></script>

</body>
</html>