<?php
// Configuración de la base de datos
$host = 'localhost';
$dbname = 'ecomerce';
$usuario = 'root';
$contrasena = '';

// Crear conexión
$conn = new mysqli($host, $usuario, $contrasena, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Manejar borrar producto
if (isset($_POST['borrar'])) {
    $id = $_POST['id'];
    $stmt = $conn->prepare("DELETE FROM productos WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Manejar editar producto
if (isset($_POST['editar'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $marca = $_POST['marca'];
    $stock = $_POST['stock'];
    $imagen = $_POST['imagen_actual'];

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

    $stmt = $conn->prepare("UPDATE productos SET nombre = ?, precio = ?, descripcion = ?, marca = ?, stock = ?, imagen = ? WHERE id = ?");
    $stmt->bind_param("sdssisi", $nombre, $precio, $descripcion, $marca, $stock, $imagen, $id);
    $stmt->execute();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Obtener los productos
$resultado = $conn->query("SELECT * FROM productos");
$productos = $resultado->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de productos</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background-color: #1e1e1e;
            color: #fff;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin: 0;
            padding: 0;
            justify-content: space-between;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #333;
        }

        header h1 {
            margin: 0;
            font-size: 24px;
            color: cadetblue;
        }

        header a {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #00b7ff;
            color: #fff;
            border-radius: 5px;
        }

        header a:hover {
            opacity: 0.9;
        }

        table {
            width: 90%;
            border-collapse: collapse;
            margin: 40px auto;
            font-size: 15px;
        }

        table th, table td {
            padding: 26px;
            text-align: center;
        }

        table th {
            background-color: #00b7ff;
            color: #fff;
            text-transform: uppercase;
        }

        table td {
            background-color: #333;
            color: #ddd;
            border-bottom: 1px solid #444;
        }

        table img {
            max-width: 90px;
            border-radius: 5px;
        }

        table input[type="text"],
        table input[type="number"],
        table textarea,
        table input[type="file"] {
            width: 100%;
            padding: 9px;
            margin: 5px 0;
            border: 1px solid #444;
            border-radius: 5px;
            background-color: #222;
            color: #fff;
        }

        table input:focus {
            outline: none;
            border-color: #00b7ff;
        }

        button {
            padding: 10px 22px;
            margin: 5px;
            border: none;
            border-radius: 95px;
            cursor: pointer;
        }

        button.borrar {
            background-color: #ff4b4b;
            color: #fff;
        }

        button.editar {
            background-color: #00b7ff;
            color: #fff;
        }

        button:hover {
            opacity: 0.9;
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
        <h1>Lista de Productos</h1> 
        <div class="button-container">
        <a href="../php/admin.php" class="btn">Agregar Producto</a>
        <a href="../php/indox.php" class="btn">ir al inicio</a>
    </div>
    </header>

    <div class="form-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Descripción</th>
                    <th>Marca</th>
                    <th>Stock</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto): ?>
                    <tr>
                        <td><?= $producto['id'] ?></td>
                        <td><?= $producto['nombre'] ?></td>
                        <td>$<?= number_format($producto['precio'], 2) ?></td>
                        <td><?= $producto['descripcion'] ?></td>
                        <td><?= $producto['marca'] ?></td>
                        <td><?= $producto['stock'] ?></td>
                        <td><img src="<?= $producto['imagen'] ?>" alt="<?= $producto['nombre'] ?>"></td>
                        <td>
                            <!-- Editar -->
                            <form method="post" enctype="multipart/form-data" style="margin-bottom: 10px;">
                                <input type="hidden" name="id" value="<?= $producto['id'] ?>">
                                <input type="hidden" name="imagen_actual" value="<?= $producto['imagen'] ?>">
                                <input type="text" name="nombre" value="<?= $producto['nombre'] ?>" required>
                                <input type="number" name="precio" value="<?= $producto['precio'] ?>" step="0.01" required>
                                <textarea name="descripcion" required><?= $producto['descripcion'] ?></textarea>
                                <input type="text" name="marca" value="<?= $producto['marca'] ?>" required>
                                <input type="number" name="stock" value="<?= $producto['stock'] ?>" required>
                                <input type="file" name="imagen">
                                <button type="submit" name="editar" class="editar">Editar</button>
                                <!-- Borrar -->
                            <form method="post">
                                <input type="hidden" name="id" value="<?= $producto['id'] ?>">
                                <button type="submit" name="borrar" class="borrar">Borrar</button>
                            </form>
                            </form>
                            
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
