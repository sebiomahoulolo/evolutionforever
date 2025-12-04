@extends('layouts.admin')

@section('admin_content')
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-blue: #1a73e8;
            --secondary-blue: #4285f4;
            --light-blue: #e8f0fe;
            --primary-green: #34a853;
            --secondary-green: #81c995;
            --light-green: #e6f4ea;
            --white: #ffffff;
            --light-gray: #f8f9fa;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            overflow-x: hidden;
        }
        
        /* Sidebar */
        .sidebar {
            background-color: var(--white);
            height: 100vh;
            position: fixed;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
            width: 250px;
            z-index: 1000;
        }
        
        .sidebar-brand {
            padding: 1.5rem 1rem;
            color: var(--primary-blue);
            font-weight: 700;
            font-size: 1.5rem;
            text-align: center;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }
        
        .sidebar-nav {
            padding: 0;
            list-style: none;
        }
        
        .sidebar-nav-item {
            margin: 5px 0;
        }
        
        .sidebar-nav-link {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            color: #333;
            text-decoration: none;
            transition: all 0.3s;
            border-left: 3px solid transparent;
        }
        
        .sidebar-nav-link:hover, .sidebar-nav-link.active {
            background-color: var(--light-blue);
            color: var(--primary-blue);
            border-left: 3px solid var(--primary-blue);
        }
        
        .sidebar-nav-link i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }
        
        /* Main Content */
        .main-content {
            margin-left: 250px;
            
            transition: all 0.3s;
        }
        
        /* Header */
        .header {
            background-color: var(--white);
            padding: 15px 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }
        
        .header-title {
            color: var(--primary-blue);
            margin: 0;
            font-size: 1.5rem;
        }
        
        .user-profile {
            display: flex;
            align-items: center;
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
            background-color: var(--primary-blue);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }
        
        /* Cards */
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
            transition: transform 0.3s;
        }
        
        .card:hover {
            transform: translateY(-5px);
        }
        
        .card-header {
            background-color: var(--white);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            font-weight: 600;
            border-radius: 10px 10px 0 0 !important;
            padding: 1rem 1.5rem;
        }
        
        .card-body {
            padding: 1.5rem;
        }
        
        /* Stat Cards */
        .stat-card {
            text-align: center;
            padding: 20px;
        }
        
        .stat-card i {
            font-size: 2rem;
            margin-bottom: 15px;
        }
        
        .stat-card.blue {
            background-color: var(--light-blue);
            color: var(--primary-blue);
        }
        
        .stat-card.green {
            background-color: var(--light-green);
            color: var(--primary-green);
        }
        
        .stat-card .stat-number {
            font-size: 1.8rem;
            font-weight: 700;
            margin: 10px 0;
        }
        
        .stat-card .stat-title {
            font-size: 0.9rem;
            color: #666;
        }
        
        /* Activity Section */
        .activity-item {
            display: flex;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .activity-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        
        .activity-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
        }
        
        .activity-icon.blue {
            background-color: var(--light-blue);
            color: var(--primary-blue);
        }
        
        .activity-icon.green {
            background-color: var(--light-green);
            color: var(--primary-green);
        }
        
        .activity-content {
            flex-grow: 1;
        }
        
        .activity-time {
            font-size: 0.8rem;
            color: #999;
        }
        
        /* Recent Items Table */
        .table-responsive {
            border-radius: 10px;
            overflow: hidden;
        }
        
        .table {
            margin-bottom: 0;
        }
        
        .table thead th {
            background-color: var(--primary-blue);
            color: white;
            border: none;
        }
        
        .table tbody tr:hover {
            background-color: rgba(0, 0, 0, 0.02);
        }
        
        .badge-blue {
            background-color: var(--light-blue);
            color: var(--primary-blue);
            padding: 5px 10px;
            border-radius: 20px;
            font-weight: 500;
        }
        
        .badge-green {
            background-color: var(--light-green);
            color: var(--primary-green);
            padding: 5px 10px;
            border-radius: 20px;
            font-weight: 500;
        }
        
        /* Mobile Toggle Button */
        .sidebar-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--primary-blue);
            margin-right: 15px;
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(-100%);
                position: fixed;
                top: 0;
                left: 0;
            }
            
            .sidebar.show {
                transform: translateX(0);
            }
            
            .main-content {
                margin-left: 0;
            }
            
            .sidebar-toggle {
                display: block;
            }
            
            .stat-card .stat-number {
                font-size: 1.5rem;
            }
            
            .header-title {
                font-size: 1.2rem;
            }
        }
        
        @media (max-width: 768px) {
            .card-body {
                padding: 1rem;
            }
            
            .header {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .user-profile {
                margin-top: 10px;
            }
            
            .table-responsive {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
            
            .table th, .table td {
                white-space: nowrap;
            }
        }
        
        @media (max-width: 576px) {
            .stat-card {
                padding: 15px;
            }
            
            .stat-card i {
                font-size: 1.5rem;
            }
            
            .activity-item {
                flex-direction: column;
            }
            
            .activity-icon {
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>
    <!-- Mobile Toggle Button -->
    <button class="sidebar-toggle d-lg-none position-fixed" style="top: 20px; left: 20px; z-index: 1050;">
        <i class="fas fa-bars"></i>
    </button>

    @include('admin.partials.sidebar')

        <div class="row mt-4">
            @include('admin.partials.properties')
        </div>
        
        <div class="row mt-4">
            <!-- Recent Activities -->
            @include('admin.partials.activities')
            </div>
             
        <!-- Recent Properties -->
         {{--<div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Dernières Propriétés Ajoutées
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Adresse</th>
                                        <th>Type</th>
                                        <th>Prix</th>
                                        <th>Statut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#PROP-012</td>
                                        <td>12 Rue des Lilas, Paris</td>
                                        <td>Appartement T3</td>
                                        <td>950€/mois</td>
                                        <td><span class="badge-green">Disponible</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">Voir</button>
                                        </td> --}}
                                    </tr>
                                    <tr>
                                        {{-- <td>#PROP-011</td>
                                        <td>45 Avenue Montaigne, Lyon</td>
                                        <td>Maison 4 pièces</td>
                                        <td>1,200€/mois</td>
                                        <td><span class="badge-blue">Loué</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">Voir</button>
                                        </td> --}}
                                    </tr>
                                    <tr>
                                        {{-- <td>#PROP-010</td>
                                        <td>8 Boulevard Voltaire, Marseille</td>
                                        <td>Studio</td>
                                        <td>650€/mois</td>
                                        <td><span class="badge-green">Disponible</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">Voir</button>
                                        </td> 
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    --}}
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS for responsive sidebar -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarToggle = document.querySelector('.sidebar-toggle');
            const sidebar = document.querySelector('.sidebar');
            
            if (sidebarToggle && sidebar) {
                sidebarToggle.addEventListener('click', function() {
                    sidebar.classList.toggle('show');
                });
            }
            
            // Close sidebar when clicking outside on mobile
            document.addEventListener('click', function(event) {
                if (window.innerWidth < 992) {
                    const isClickInsideSidebar = sidebar.contains(event.target);
                    const isClickOnToggle = sidebarToggle.contains(event.target);
                    
                    if (!isClickInsideSidebar && !isClickOnToggle && sidebar.classList.contains('show')) {
                        sidebar.classList.remove('show');
                    }
                }
            });
        });
    </script>
</body>
</html>
@endsection