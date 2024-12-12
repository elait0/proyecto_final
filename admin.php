<?php
// Configuración de la base de datos
$host = 'localhost';
$dbname = 'ecomerce';
$username = 'root';
$password = '';

// Crear conexión
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Manejar agregar producto
if (isset($_POST['agregar'])) {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $marca = $_POST['marca'];
    $stock = $_POST['stock']; // Nuevo campo para stock
    $imagen = '';

    // Manejo de imagen
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        $carpetaDestino = 'imagenes/';
        if (!is_dir($carpetaDestino)) {
            mkdir($carpetaDestino, 0777, true);
        }
        $nombreArchivo = time() . '_' . $_FILES['imagen']['name'];
        $rutaArchivo = $carpetaDestino . $nombreArchivo;
        move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaArchivo);
        $imagen = $rutaArchivo;
    }

    // Insertar producto en la base de datos
    $stmt = $conn->prepare("INSERT INTO productos (nombre, precio, descripcion, marca, stock, imagen) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sdssis", $nombre, $precio, $descripcion, $marca, $stock, $imagen);

    if ($stmt->execute()) {
        // Redirigir a la página de visualización
        echo "Redirigiendo a la página de visualización...";
        header("Location: pp.php");
        exit();
    } else {
        echo "Error al agregar el producto: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
    <style>
    
    body {
        background-color: #1a1a1a;
        color: #f0f0f0;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        line-height: 1.6;
    }

    header  {
        background-color: #333;
        padding: 20px;
        display: flex;
        border-bottom: 3px solid #444;
        align-items: center;
        justify-content: space-between;
    }

    header h1 {
        margin: 0;
        color: #ffcc00;
        font-size: 2rem;
    }

    .form-container {
        background-color: #2c2c2c;
        margin: 20px auto;
        padding: 20px;
        border-radius: 8px;
        max-width: 800px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }

    h2 {
        text-align: center;
        color: #ffcc00;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    input[type="text"], 
    input[type="number"], 
    textarea, 
    input[type="file"], 
    button {
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #444;
        background-color: #333;
        color: #f0f0f0;
    }

    textarea {
        resize: vertical;
    }

    button {
        background-color: #ffcc00;
        color: #1a1a1a;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #e6b800;
    }

    table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
    }

    table th, 
    table td {
        text-align: left;
        padding: 12px;
        border: 1px solid #444;
    }

    table th {
        background-color: #444;
        color: #ffcc00;
    }

    table td {
        background-color: #2c2c2c;
    }

    table img {
        width: 60px;
        height: auto;
        border-radius: 5px;
    }

  
        table, table th, table td {
            font-size: 0.9rem;
        }

        table img {
            width: 40px;
        }
    
  

.button-container {
    display: flex;
    gap: 10px; 
}

.btn {
    display: inline-block;
    padding: 0.5rem 1rem; 
    font-size: 14px;
    font-weight: 700;
    color: white;
    border: 3px solid rgb(252, 70, 100);
    cursor: pointer;
    position: relative;
    background-color: transparent;
    text-decoration: none;
    overflow: hidden;
    z-index: 1;
    font-family: inherit;
    border-radius: 5px;
}

.btn::before {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgb(252, 70, 100);
    transform: translateX(-100%);
    transition: all .3s;
    z-index: -1;
}

.btn:hover::before {
    transform: translateX(0);
}

</style>
</head>
<body>


    <header>
        <h1>Agregar Producto</h1>
        <div class="button-containe">
        <a href="../php/pp.php" class="btn">ir a productos</a>
        <a href="../php/indox.php" class="btn">ir al inicio</a>
    </div>
    </header>
    <div class="form-container">
        <form method="post" enctype="multipart/form-data">
            <input type="text" name="nombre" placeholder="Nombre del producto" required>
            <input type="number" name="precio" placeholder="Precio" step="0.01" required>
            <input type="text" name="marca" placeholder="Marca del producto" required>
            <input type="number" name="stock" placeholder="Stock disponible" min="0" required> 
            <textarea name="descripcion" placeholder="Descripción" required></textarea>
            <input type="file" name="imagen" required>
            <button type="submit" name="agregar">Agregar</button>
        </form>
    </div>
</body>
</html>
