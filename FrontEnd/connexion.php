<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #756d6d;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(110, 110, 110, 0.1);
            margin-top: 50px;
            
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 7px;
                font-weight: bold;
                color: #1b0679;
                font-size: 18px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            
        }
        button:hover {
            background-color: #0056b3;
        }
        .btn{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px; 

        }
        h2{
            text-align: center;
            margin-bottom: 30px;
            color: #1b0679; 
        }

        input:focus{
            border-color: #007bff;
            outline: none;
        }
        p{
            text-align: center;
            margin-top: 20px; 
            font-size: 18px;  
        }
        p a{
            color: #083e78;
            text-decoration: none;
        }
        p a:hover{
            text-decoration: underline;
        }


          </style>
</head>
<body>
    <?php 
        include '../include/heade.php';
    ?>
    <div class="container">
        <h2>Se connecter</h2>
        <form action="../Backend/connexion.php" method="POST" >
            <?php if (isset($_GET['error'])): ?>
                <p style="color: red;"><?php echo "Nom d'utilisateur ou mot de passe incorrect."; ?></p>  
            <?php endif; ?>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="btn">
                <button type="submit">Se connecter</button>
            </div>
            <p>Pas de compte? <a href="inscription.php">Inscrivez-vous</a></p>
        </form>
</body>
</html>