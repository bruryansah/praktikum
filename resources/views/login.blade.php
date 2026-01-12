<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login – Toko Printer</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
            overflow: hidden;
        }

        /* Animated Background Circles */
        body::before {
            content: '';
            position: absolute;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            border-radius: 50%;
            top: -250px;
            right: -250px;
            animation: float 20s ease-in-out infinite;
        }

        body::after {
            content: '';
            position: absolute;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 70%);
            border-radius: 50%;
            bottom: -200px;
            left: -200px;
            animation: float 15s ease-in-out infinite reverse;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0) scale(1); }
            25% { transform: translate(30px, -30px) scale(1.1); }
            50% { transform: translate(-20px, 20px) scale(0.9); }
            75% { transform: translate(20px, 30px) scale(1.05); }
        }

        .login-container {
            width: 100%;
            max-width: 450px;
            position: relative;
            z-index: 1;
            animation: slideUp 0.8s ease;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-card {
            background: white;
            border-radius: 24px;
            padding: 3rem 2.5rem;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
        }

        /* Header Section */
        .login-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .logo-container {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 20px;
            margin-bottom: 1.5rem;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        .logo-container i {
            font-size: 2.5rem;
            color: white;
        }

        .login-header h2 {
            font-size: 2rem;
            font-weight: 800;
            color: #2d3748;
            margin-bottom: 0.5rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .login-header p {
            color: #718096;
            font-size: 1rem;
            font-weight: 500;
        }

        /* Alert */
        .alert-custom {
            background: linear-gradient(135deg, #fc8181 0%, #f56565 100%);
            color: white;
            padding: 1rem 1.25rem;
            border-radius: 12px;
            margin-bottom: 1.5rem;
            border: none;
            box-shadow: 0 4px 15px rgba(245, 101, 101, 0.3);
            animation: shake 0.5s ease;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-10px); }
            75% { transform: translateX(10px); }
        }

        .alert-custom strong {
            font-weight: 700;
        }

        /* Form Groups */
        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            color: #2d3748;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #a0aec0;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        .form-control-custom {
            width: 100%;
            padding: 0.9rem 1rem 0.9rem 3rem;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 1rem;
            color: #2d3748;
            transition: all 0.3s ease;
            background: #f7fafc;
        }

        .form-control-custom:focus {
            outline: none;
            border-color: #667eea;
            background: white;
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
        }

        .form-control-custom:focus + .input-icon {
            color: #667eea;
        }

        /* Button */
        .btn-custom {
            width: 100%;
            padding: 1rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1.05rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.3);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 0.5rem;
        }

        .btn-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(102, 126, 234, 0.4);
        }

        .btn-custom:active {
            transform: translateY(0);
        }

        /* Divider */
        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 2rem 0 1.5rem 0;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #e2e8f0;
        }

        .divider span {
            padding: 0 1rem;
            color: #a0aec0;
            font-size: 0.875rem;
            font-weight: 500;
        }

        /* Footer Text */
        .footer-text {
            text-align: center;
            color: #718096;
            font-size: 0.95rem;
        }

        .footer-text a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .footer-text a:hover {
            color: #764ba2;
            text-decoration: underline;
        }

        /* Password Toggle */
        .password-toggle {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #a0aec0;
            cursor: pointer;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        .password-toggle:hover {
            color: #667eea;
        }

        /* Responsive */
        @media (max-width: 576px) {
            .login-card {
                padding: 2rem 1.5rem;
            }

            .login-header h2 {
                font-size: 1.6rem;
            }

            .logo-container {
                width: 70px;
                height: 70px;
            }

            .logo-container i {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <div class="logo-container">
                    <i class="fas fa-print"></i>
                </div>
                <h2>Ini Tugas</h2>
                <p>Saya</p>
            </div>

            @if (session('error'))
                <div class="alert-custom">
                    <strong>Opps!</strong> {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('actionlogin') }}" method="post">
                @csrf
                <div class="form-group">
                    <label>Email</label>
                    <div class="input-wrapper">
                        <input type="email"
                               name="email"
                               class="form-control-custom"
                               placeholder="nama@example.com"
                               required>
                        <i class="fas fa-envelope input-icon"></i>
                    </div>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <div class="input-wrapper">
                        <input type="password"
                               name="password"
                               id="password"
                               class="form-control-custom"
                               placeholder="Masukkan password Anda"
                               required>
                        <i class="fas fa-lock input-icon"></i>
                        <i class="fas fa-eye password-toggle" id="togglePassword"></i>
                    </div>
                </div>

                <button type="submit" class="btn-custom">
                    <i class="fas fa-sign-in-alt"></i> Login
                </button>
            </form>

            <div class="divider">
                <span>ATAU</span>
            </div>

            <p class="footer-text">
                Belum punya akun? <a href="/register">Daftar sekarang</a>
            </p>
        </div>
    </div>

    <script>
        // Toggle Password Visibility
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');

        togglePassword.addEventListener('click', function() {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            // Toggle icon
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });

        // Auto-hide alert after 5 seconds
        const alert = document.querySelector('.alert-custom');
        if (alert) {
            setTimeout(() => {
                alert.style.transition = 'all 0.5s ease';
                alert.style.opacity = '0';
                alert.style.transform = 'translateY(-20px)';
                setTimeout(() => alert.remove(), 500);
            }, 5000);
        }
    </script>
</body>

</html>
