<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - Management System</title>
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
            color: #2d3748;
            padding: 0;
        }

        /* Modern Navbar */
        .modern-navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border: none;
            border-radius: 0;
            margin-bottom: 0;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        }

        .modern-navbar .navbar-brand {
            font-size: 1.3rem;
            font-weight: 700;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            padding: 15px 20px;
            transition: all 0.3s ease;
        }

        .modern-navbar .navbar-brand:hover {
            transform: translateX(5px);
        }

        .modern-navbar .navbar-nav > li > a {
            color: #4a5568;
            font-weight: 500;
            transition: all 0.3s ease;
            padding: 15px 20px;
        }

        .modern-navbar .navbar-nav > li > a:hover {
            color: #667eea;
            background: rgba(102, 126, 234, 0.1);
        }

        .modern-navbar .dropdown-menu {
            border: none;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
            border-radius: 12px;
            padding: 0.5rem 0;
            margin-top: 10px;
        }

        .modern-navbar .dropdown-menu > li > a {
            padding: 12px 20px;
            color: #4a5568;
            transition: all 0.3s ease;
        }

        .modern-navbar .dropdown-menu > li > a:hover {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .modern-navbar .dropdown-menu .divider {
            margin: 0.5rem 0;
        }

        /* Container */
        .main-container {
            padding: 2rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        /* Welcome Hero Section */
        .welcome-hero {
            background: white;
            border-radius: 24px;
            padding: 3.5rem 2.5rem;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            margin-top: 2rem;
            margin-bottom: 2rem;
            position: relative;
            overflow: hidden;
            animation: slideUp 0.8s ease;
        }

        .welcome-hero::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 400px;
            height: 400px;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%);
            border-radius: 50%;
            transform: translate(30%, -30%);
            z-index: 0;
        }

        .welcome-hero::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 300px;
            height: 300px;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.08) 0%, rgba(118, 75, 162, 0.08) 100%);
            border-radius: 50%;
            transform: translate(-30%, 30%);
            z-index: 0;
        }

        .welcome-content {
            position: relative;
            z-index: 1;
        }

        .welcome-icon-container {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 20px;
            margin-bottom: 1.5rem;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
            animation: float 3s ease-in-out infinite;
        }

        .welcome-icon-container i {
            font-size: 2.5rem;
            color: white;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .welcome-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: #2d3748;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .welcome-title .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .welcome-subtitle {
            font-size: 1.2rem;
            color: #718096;
            margin-bottom: 2rem;
            line-height: 1.8;
        }

        .welcome-subtitle b {
            color: #2d3748;
            font-weight: 600;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%);
            padding: 0.2rem 0.8rem;
            border-radius: 8px;
            display: inline-block;
        }

        .user-info-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-top: 2rem;
        }

        .user-info-card {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.05) 0%, rgba(118, 75, 162, 0.05) 100%);
            border: 2px solid rgba(102, 126, 234, 0.1);
            border-radius: 16px;
            padding: 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            transition: all 0.3s ease;
        }

        .user-info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.2);
            border-color: rgba(102, 126, 234, 0.3);
        }

        .user-info-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.3rem;
            flex-shrink: 0;
        }

        .user-info-text h4 {
            font-size: 0.85rem;
            color: #718096;
            font-weight: 500;
            margin: 0 0 0.3rem 0;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .user-info-text p {
            font-size: 1.1rem;
            color: #2d3748;
            font-weight: 600;
            margin: 0;
        }

        /* Quick Stats Grid */
        .quick-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            gap: 1.5rem;
            transition: all 0.3s ease;
            animation: fadeInUp 0.8s ease;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            text-decoration: none;
            color: inherit;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%);
            border-radius: 50%;
            transform: translate(30%, -30%);
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }

        .stat-card:hover::before {
            transform: translate(30%, -30%) scale(1.2);
        }

        .stat-card:hover .stat-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .stat-card:hover .arrow-icon {
            opacity: 1;
            transform: translateX(0);
        }

        .stat-icon {
            width: 70px;
            height: 70px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
            flex-shrink: 0;
            position: relative;
            z-index: 1;
            transition: all 0.3s ease;
        }

        .stat-icon.purple {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.3);
        }

        .stat-icon.green {
            background: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
            box-shadow: 0 8px 20px rgba(72, 187, 120, 0.3);
        }

        .stat-icon.blue {
            background: linear-gradient(135deg, #4299e1 0%, #3182ce 100%);
            box-shadow: 0 8px 20px rgba(66, 153, 225, 0.3);
        }

        .stat-icon.orange {
            background: linear-gradient(135deg, #ed8936 0%, #dd6b20 100%);
            box-shadow: 0 8px 20px rgba(237, 137, 54, 0.3);
        }

        .stat-info {
            position: relative;
            z-index: 1;
            flex: 1;
        }

        .stat-info h3 {
            color: #718096;
            font-size: 0.9rem;
            font-weight: 600;
            margin: 0 0 0.5rem 0;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .stat-info p {
            color: #2d3748;
            font-size: 2rem;
            font-weight: 700;
            margin: 0;
        }

        .arrow-icon {
            position: absolute;
            right: 1.5rem;
            top: 50%;
            transform: translateY(-50%) translateX(-10px);
            opacity: 0;
            font-size: 1.5rem;
            color: #667eea;
            transition: all 0.3s ease;
            z-index: 1;
        }

        /* Animations */
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

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .main-container {
                padding: 1rem;
            }

            .welcome-hero {
                padding: 2rem 1.5rem;
            }

            .welcome-title {
                font-size: 1.8rem;
            }

            .welcome-subtitle {
                font-size: 1rem;
            }

            .user-info-cards,
            .quick-stats {
                grid-template-columns: 1fr;
            }
        }
    </style>
   @yield('styles')
</head>
<body>
    <div class="main-container">
        @yield('konten')
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    @yield('scripts')
</body>
</html>
