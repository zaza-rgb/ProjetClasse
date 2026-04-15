<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
          </style>
</head>
<body>
    <?php include "../include/heade.php";?>
    <div class="container">
        <h2>Ajouter un produit</h2>
        <form action="../Backend/ajouter_produit.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Nom du produit:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="description">Stock:</label>
                <input type="number" id="description" name="description" step="1" required>
            </div>
            <div class="form-group">
                <label for="price">Prix:</label>
                <input type="number" id="price" name="price" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="image">Image du produit:</label>
                <input type="file" id="image" name="image" accept="image/*" required>
            </div>
            <div class="btn"><button type="submit" name="submit">Ajouter le produit</button></div>
        </form>
    </div>
</body>
</html>