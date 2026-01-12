<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register – Toko Printer</title>

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

        body::before,
        body::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255,255,255,0.1), transparent 70%);
            animation: float 18s ease-in-out infinite;
        }

        body::before {
            width: 500px;
            height: 500px;
            top: -250px;
            right: -250px;
        }

        body::after {
            width: 400px;
            height: 400px;
            bottom: -200px;
            left: -200px;
            animation-direction: reverse;
        }

        @keyframes float {
            0%,100% { transform: translate(0,0); }
            50% { transform: translate(30px,-30px); }
        }

        .register-container {
            width: 100%;
            max-width: 480px;
            z-index: 1;
            animation: slideUp 0.8s ease;
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .register-card {
            background: white;
            border-radius: 24px;
            padding: 3rem 2.5rem;
            box-shadow: 0 20px 60px rgba(0,0,0,0.2);
        }

        .register-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .logo-container {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 20px;
            margin: 0 auto 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 30px rgba(102,126,234,.3);
        }

        .logo-container i {
            font-size: 2.5rem;
            color: white;
        }

        .register-header h2 {
            font-size: 2rem;
            font-weight: 800;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .register-header p {
            color: #718096;
            font-size: 0.95rem;
        }

        .alert-success {
            background: linear-gradient(135deg, #48bb78, #38a169);
            color: white;
            padding: 1rem;
            border-radius: 12px;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .form-group {
            margin-bottom: 1.4rem;
        }

        label {
            font-size: 0.85rem;
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 0.4rem;
            display: block;
            text-transform: uppercase;
        }

        .input-wrapper {
            position: relative;
        }

        .input-wrapper i {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #a0aec0;
        }

        .form-control {
            width: 100%;
            padding: 0.9rem 1rem 0.9rem 3rem;
            border-radius: 12px;
            border: 2px solid #e2e8f0;
            background: #f7fafc;
            font-size: 0.95rem;
            transition: 0.3s;
        }

        .form-control:focus {
            outline: none;
            border-color: #667eea;
            background: white;
            box-shadow: 0 0 0 4px rgba(102,126,234,0.15);
        }

        .btn-register {
            width: 100%;
            padding: 1rem;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border: none;
            border-radius: 12px;
            color: white;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            margin-top: 0.5rem;
            box-shadow: 0 8px 20px rgba(102,126,234,.3);
            transition: 0.3s;
        }

        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(102,126,234,.4);
        }

        .footer-text {
            text-align: center;
            margin-top: 1.8rem;
            color: #718096;
            font-size: 0.9rem;
        }

        .footer-text a {
            color: #667eea;
            font-weight: 600;
            text-decoration: none;
        }
    </style>
</head>

<body>

<div class="register-container">
    <div class="register-card">
        <div class="register-header">
            <div class="logo-container">
                <i class="fas fa-user-plus"></i>
            </div>
            <h2>Register Akun</h2>
            <p>Buat akun untuk mengakses sistem</p>
        </div>

        @if(session('message'))
            <div class="alert-success">
                {{ session('message') }}
            </div>
        @endif

        <form action="{{ route('actionregister') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Email</label>
                <div class="input-wrapper">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" class="form-control" placeholder="email@example.com" required>
                </div>
            </div>

            <div class="form-group">
                <label>Username</label>
                <div class="input-wrapper">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" class="form-control" placeholder="username" required>
                </div>
            </div>

            <div class="form-group">
                <label>Password</label>
                <div class="input-wrapper">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" class="form-control" placeholder="password" required>
                </div>
            </div>

            <div class="form-group">
                <label>Role</label>
                <div class="input-wrapper">
                    <i class="fas fa-shield-alt"></i>
                    <input type="text" name="role" class="form-control" value="Guest" readonly>
                </div>
            </div>

            <button type="submit" class="btn-register">
                <i class="fas fa-user-plus"></i> Register
            </button>
        </form>

        <p class="footer-text">
            Sudah punya akun? <a href="/">Login di sini</a>
        </p>
    </div>
</div>

</body>
</html>
