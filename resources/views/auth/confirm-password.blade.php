<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de mot de passe - Évolution Forever</title>
    <!-- Favicon -->
    <link rel="icon" href="/img/logo.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .confirm-container {
            max-width: 500px;
            margin: 3rem auto;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        .confirm-header {
            background: linear-gradient(135deg, #25D366 0%, #764ba2 100%);
            color: white;
            border-radius: 15px 15px 0 0;
            padding: 1.5rem;
            text-align: center;
            position: relative;
        }
        .confirm-body {
            padding: 2rem;
            background-color: white;
            border-radius: 0 0 15px 15px;
        }
        .form-control:focus {
            border-color: #25D366;
            box-shadow: 0 0 0 0.25rem rgba(118, 75, 162, 0.25);
        }
        .btn-confirm {
            background: linear-gradient(135deg, #667eea 0%, #25D366 100%);
            border: none;
            padding: 0.5rem 1.5rem;
        }
        .btn-confirm:hover {
            opacity: 0.9;
            transform: translateY(-1px);
        }
        .back-link {
            color: #764ba2;
            transition: all 0.3s;
        }
        .back-link:hover {
            color:#25D366;
            text-decoration: none;
        }
        .input-group-text {
            background-color: #f8f9fa;
        }
        .input-error {
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }
        .logo-container {
            display: flex;
            justify-content: center;
            margin-bottom: 15px;
        }
        .site-logo {
            height: 70px;
            width: auto;
            border-radius: 50%;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            border: 3px solid white;
        }
        .info-text {
            color: #6c757d;
            margin-bottom: 1.5rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="confirm-container">
            <div class="confirm-header">
                <div class="logo-container">
                    <img src="/img/logo.png" alt="Logo Évolution Forever" class="site-logo">
                </div>
                <h2><i class="fas fa-shield-alt me-2"></i>Zone Sécurisée</h2>
            </div>
            <div class="confirm-body">
                <div class="info-text">
                    {{ __('Ceci est une zone sécurisée de l\'application. Veuillez confirmer votre mot de passe avant de continuer.') }}
                </div>

                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf

                    <!-- Password -->
                    <div class="mb-4">
                        <label for="password" class="form-label">Mot de passe</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input
                                id="password"
                                type="password"
                                name="password"
                                required
                                autocomplete="current-password"
                                class="form-control"
                                placeholder="Votre mot de passe"
                            >
                        </div>
                        @if ($errors->has('password'))
                            <div class="input-error">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ url()->previous() }}" class="back-link">
                            <i class="fas fa-arrow-left me-1"></i> Retour
                        </a>

                        <button type="submit" class="btn btn-confirm text-white">
                            <i class="fas fa-check me-2"></i>Confirmer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>