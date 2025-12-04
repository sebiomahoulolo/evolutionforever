<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Évolution Forever</title>
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
        .register-container {
            max-width: 500px;
            margin: 3rem auto;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        .register-header {
            background: linear-gradient(135deg, #25D366 0%, #764ba2 100%);
            color: white;
            border-radius: 15px 15px 0 0;
            padding: 1.5rem;
            text-align: center;
        }
        .register-body {
            padding: 2rem;
            background-color: white;
            border-radius: 0 0 15px 15px;
        }
        .form-control:focus {
            border-color: #25D366;
            box-shadow: 0 0 0 0.25rem rgba(118, 75, 162, 0.25);
        }
        .btn-register {
            background: linear-gradient(135deg, #667eea 0%, #25D366 100%);
            border: none;
            padding: 0.5rem 1.5rem;
        }
        .btn-register:hover {
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
    </style>
</head>
<body>
    <div class="container">
        <div class="register-container">
            <div class="register-header">
                <h2><i class="fas fa-user-plus me-2"></i>Inscription Évolution Forever</h2>
            </div>
            <div class="register-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div class="mb-4">
                        <label for="name" class="form-label">Nom</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input
                                id="name"
                                type="text"
                                name="name"
                                value="{{ old('name') }}"
                                required
                                autofocus
                                autocomplete="name"
                                class="form-control"
                                placeholder="Votre nom complet"
                            >
                        </div>
                        @if ($errors->has('name'))
                            <div class="input-error">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>

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
                                autocomplete="new-password"
                                class="form-control"
                                placeholder="••••••••"
                            >
                        </div>
                        @if ($errors->has('password'))
                            <div class="input-error">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-4">
                        <label for="password_confirmation" class="form-label">Confirmer le mot de passe</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input
                                id="password_confirmation"
                                type="password"
                                name="password_confirmation"
                                required
                                autocomplete="new-password"
                                class="form-control"
                                placeholder="••••••••"
                            >
                        </div>
                        @if ($errors->has('password_confirmation'))
                            <div class="input-error">
                                {{ $errors->first('password_confirmation') }}
                            </div>
                        @endif
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('login') }}" class="login-link">
                            <i class="fas fa-sign-in-alt me-1"></i> Déjà inscrit ?
                        </a>

                        <button type="submit" class="btn btn-register text-white">
                            <i class="fas fa-user-plus me-2"></i>S'inscrire
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