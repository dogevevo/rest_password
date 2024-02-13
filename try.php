<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Imágenes con Vista Previa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        h1 {
            text-align: center;
            margin-top: 30px;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="file"] {
            margin-bottom: 20px;
        }
        #preview-container {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }
        .preview-image {
            width: 100px;
            height: 100px;
            margin-right: 10px;
            margin-bottom: 10px;
            object-fit: cover;
            border-radius: 4px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }
        button[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Subir Imágenes con Vista Previa</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data" id="upload-form">
        <input type="file" id="imagenes" name="imagenes[]" multiple accept="image/*">
        <div id="preview-container"></div>
        <button type="submit">Subir imágenes</button>
    </form>

    <script>
        document.getElementById('imagenes').addEventListener('change', function(event) {
            var files = event.target.files;
            var previewContainer = document.getElementById('preview-container');
            previewContainer.innerHTML = '';

            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var reader = new FileReader();

                reader.onload = function(e) {
                    var img = document.createElement('img');
                    img.src = e.target.result;
                    img.classList.add('preview-image');
                    previewContainer.appendChild(img);
                };

                reader.readAsDataURL(file);
            }
        });
    </script>
</body>
</html>
