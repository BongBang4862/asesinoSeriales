

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Coleccion de Asesinos Seriales</h1>
        <table id="table-body"></table>

    <script>
        const base_url='<?php echo BASE_URL;?>';
        const asesinos = <?php echo json_encode($data['asesinos']); ?>;
    </script>
    <script src="<?php echo BASE_URL.'Assets/js/pages/coleccion.js';?>"></script>
    </body>
    </html>