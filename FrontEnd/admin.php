<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f5f7fa; }
        
        .container { display: flex; min-height: 100vh; }
        
        .sidebar { width: 250px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 20px; overflow-y: auto; }
        .sidebar h2 { margin-bottom: 30px; font-size: 24px; }
        .sidebar ul { list-style: none; }
        .sidebar li { margin: 15px 0; }
        .sidebar a { color: white; text-decoration: none; display: flex; align-items: center; gap: 10px; padding: 10px; border-radius: 5px; transition: 0.3s; }
        .sidebar a:hover { background: rgba(255,255,255,0.2); }
        
        .main { flex: 1; padding: 30px; }
        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; }
        .header h1 { font-size: 28px; color: #333; }
        .user-info { display: flex; align-items: center; gap: 10px; }
        
        .cards { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-bottom: 30px; }
        .card { background: white; padding: 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .card h3 { color: #667eea; margin-bottom: 10px; }
        .card p { font-size: 32px; font-weight: bold; color: #333; }
        
        .chart { background: white; padding: 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        
        @media (max-width: 768px) {
            .container { flex-direction: column; }
            .sidebar { width: 100%; }
            .cards { grid-template-columns: 1fr; }
        }
    </style>

    <div class="container">
        <div class="sidebar">
            <h2><i class="fas fa-tachometer-alt"></i> Admin</h2>
            <ul>
                <li><a href="#"><i class="fas fa-home"></i> Accueil</a></li>
                <li><a href="#"><i class="fas fa-users"></i> Utilisateurs</a></li>
                <li><a href="#"><i class="fas fa-box"></i> Produits</a></li>
                <li><a href="#"><i class="fas fa-shopping-cart"></i> Commandes</a></li>
                <li><a href="#"><i class="fas fa-chart-bar"></i> Statistiques</a></li>
                <li><a href="#"><i class="fas fa-cog"></i> Paramètres</a></li>
                <li><a href="#"><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>
            </ul>
        </div>
        
        <div class="main">
            <div class="header">
                <h1>Tableau de Bord</h1>
                <div class="user-info">
                    <span>Admin</span>
                    <i class="fas fa-user-circle" style="font-size: 40px; color: #667eea;"></i>
                </div>
            </div>
            
            <div class="cards">
                <div class="card">
                    <h3><i class="fas fa-users"></i> Utilisateurs</h3>
                    <p>1,245</p>
                </div>
                <div class="card">
                    <h3><i class="fas fa-box"></i> Produits</h3>
                    <p>356</p>
                </div>
                <div class="card">
                    <h3><i class="fas fa-shopping-cart"></i> Commandes</h3>
                    <p>892</p>
                </div>
                <div class="card">
                    <h3><i class="fas fa-dollar-sign"></i> Revenus</h3>
                    <p>€45,230</p>
                </div>
            </div>
            
            <div class="chart">
                <h2>Activité Récente</h2>
                <p style="margin-top: 20px; color: #999;">Graphiques et statistiques à venir...</p>
            </div>
        </div>
    </div>
</body>
</html>