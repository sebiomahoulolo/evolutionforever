<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réinitialisation de mot de passe - Évolution Forever</title>
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
        .password-container {
            max-width: 500px;
            margin: 3rem auto;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        .password-header {
            background: linear-gradient(135deg, #25D366 0%, #764ba2 100%);
            color: white;
            border-radius: 15px 15px 0 0;
            padding: 1.5rem;
            text-align: center;
            position: relative;
        }
        .password-body {
            padding: 2rem;
            background-color: white;
            border-radius: 0 0 15px 15px;
        }
        .form-control:focus {
            border-color: #25D366;
            box-shadow: 0 0 0 0.25rem rgba(118, 75, 162, 0.25);
        }
        .btn-password {
            background: linear-gradient(135deg, #667eea 0%, #25D366 100%);
            border: none;
            padding: 0.5rem 1.5rem;
        }
        .btn-password:hover {
            opacity: 0.9;
            transform: translateY(-1px);
        }
        .login-link {
            color: #764ba2;
            transition: all 0.3s;
        }
        .login-link:hover {
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
        <div class="password-container">
            <div class="password-header">
                <div class="logo-container">
                    <img src="/img/logo.png" alt="Logo Évolution Forever" class="site-logo">
                </div>
                <h2><i class="fas fa-key me-2"></i>Réinitialisation de mot de passe</h2>
            </div>
            <div class="password-body">
                <div class="info-text">
                    {{ __('Mot de passe oublié ? Aucun problème. Indiquez-nous votre adresse e-mail et nous vous enverrons un lien de réinitialisation de mot de passe qui vous permettra d\'en choisir un nouveau.') }}
                </div>

                <!-- Session Status -->
                @if (session('status'))
                    <div class="alert alert-success mb-4">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="mb-4">
                        <label for="email" class="form-label">Adresse Email</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input
                                id="email"
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autofocus
                                autocomplete="email"
                                class="form-control"
                                placeholder="votre@email.com"
                            >
                        </div>
                        @if ($errors->has('email'))
                            <div class="input-error">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('login') }}" class="login-link">
                            <i class="fas fa-arrow-left me-1"></i> Retour à la connexion
                        </a>

                        <button type="submit" class="btn btn-password text-white">
                            <i class="fas fa-paper-plane me-2"></i>Envoyer le lien
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