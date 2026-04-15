<?php
    session_start();
    ?>
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
        .head-content{
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
        }
        .head-content nav{
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .head-content nav .title{
            display: flex;
            align-items: center;
        }
        .head-content nav .title img{
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }
        .head-content nav .element a{
            color: #f3bc08;
            text-decoration: none;
            margin-left: 20px;
            font-size: 18px;
            font-weight: bold;
        }
        .container{
            max-width: 100%;
            margin: 20px 30px;
            padding: 0 20px;
            background-color: #bcb7b734;
            border-radius: 10px;
            paddding: 40px 40px;
            height: 80vh;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
            
        }
        .accueil{
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 50px;
        }
        .accueil .principal{
            flex: 1;
            margin-right: 20px;
        }
        .accueil .principal h2{
            font-size: 28px;
            margin-bottom: 20px;
            color: #c26604;
            text-align: center;
            margin-top: 0px;
        }
        .accueil .principal p{
            font-size: 22px;
            line-height: 1.6;
                color: #333;
                text-align: center;
                margin-top: 50px;
                margin-bottom: 70px;
                padding: 0 20px;
                
        }
        .accueil .image{
            flex: 1;
            margin: 20px 20px;
        }
        .accueil .image img{
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-top: 50px;
        }
        .start{
            display: flex;
            justify-content: center;
            gap: 20px;
            background-color: #949090;
            padding: 10px 20px;
            border-radius: 5px;
            margin-left: 40px;
            margin-right: 40px;
            height: 140px;
        }
        .start p{
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            font-size: 18px;
            background-color: #c26604;
            padding: 10px 20px;
            border-radius: 5px;
            width: 300px;
            justify-content: center;
            height: 50px;

        }
        .start p a{
            color: #fff;
            text-decoration: none;

        }
        .produit{
            margin-top: 50px;
            padding: 20px;
            background-color: #bcb7b734;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
        }
        .propos{
            margin-top: 50px;
            padding: 20px;
            background-color: #bcb7b734;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
            margin
        }
    </style>
</head>
<body>
    <?php include 'include/heade.php'; ?>
    <main class="container">
        
        <section class="accueil">
            <div class="principal">
                <h2>Bienvenue sur notre boutique</h2>
                <p>Découvrez nos derniers produits et profitez de nos offres spéciales.
                    Nous sommes ravis de vous accueillir dans notre boutique en ligne.
                    Merci de choisir notre boutique pour vos besoins d'achat en ligne!   
                </p>
                <div class="start">
                    <p><a href="produits.php">Découvrir nos produits</a></p>
                    <p><a href="FrontEnd/inscription.php">Commencer</a></p>
                </div>
                
            </div>
            <div class="image">
                <img src="image/commerce.jpg" alt="Boutique en ligne">
            </div>
        </section>
        <section class="produit">

        </section>
    
    </main>
</body>
</html>