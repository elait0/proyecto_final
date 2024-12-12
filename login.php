<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - E-commerce</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #121212; 
            color: #ffffff; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        header {
            display: none; 
        }
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%; 
        }
        .card {
            width: 400px;
            height: 400px;
            background-image: linear-gradient(163deg, #00ff75 0%, #3700ff 100%);
            border-radius: 20px;
            transition: all 0.3s;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0px 0px 30px 1px rgba(0, 255, 117, 0.3);
        }
        .card:hover {
            box-shadow: 0px 0px 40px 5px rgba(0, 255, 117, 0.5);
        }
        .card2 {
            width: 480px;
            height: 399px;
            background-color: #1a1a1a;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            transition: all 0.2s;
        }
        .card2:hover {
            transform: scale(0.98);
        }
        .card2 h2 {
            color: #00ff75;
            margin-bottom: 20px;
        }
        .card2 input {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            background-color: #121212;
            color: #ffffff;
        }
        .card2 button {
            width: 80%;
            padding: 10px;
            background-color: #3700ff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .card2 button:hover {
            background-color: #00ff75;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="card">
            <div class="card2">
                <h2>Iniciar sesión</h2>
                <form action="indox.php" method="POST">
                    <input type="text" name="username" placeholder="Nombre de usuario" required>
                    <input type="password" name="password" placeholder="Contraseña" required>
                    <button type="submit">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
