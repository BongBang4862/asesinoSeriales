<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Asesino</title>
</head>
<body>
    <div class="galery-container">
        
    </div>
    <script>
        const data = <?php echo json_encode($data['asesino']); ?>;
        const base_url='<?php echo BASE_URL;?>';
    </script>
    <script src="<?php echo BASE_URL.'Assets/js/pages/principal/ver.js'?>"></script>
</body>
</html>