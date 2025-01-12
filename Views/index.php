<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asesinos Seriales</title>
</head>
<body>
    <a href="<?php echo BASE_URL.'principal/index';?>">Home

    <h1>Asesinos Seriales</h1>
   
    <div id="gallery-container"></div>
    <script>
        const data = <?php echo json_encode($data['asesinos']); ?>;
        const base_url='<?php echo BASE_URL; ?>';
    </script>
    <script src="<?php echo BASE_URL.'Assets/js/pages/principal/index.js';?>"></script>

</body>
</html>