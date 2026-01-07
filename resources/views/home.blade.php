<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - Management System</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2rem;
        }

        /* Header */
        header {
            background: white;
            padding: 2rem;
            border-radius: 16px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 0.5rem;
            animation: fadeInDown 0.8s ease;
        }

        header p {
            color: #718096;
            font-size: 1rem;
            animation: fadeInUp 0.8s ease;
        }

        .date-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 500;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        }

        /* Navigation */
        nav {
            background: white;
            padding: 0;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            margin-bottom: 2rem;
            overflow: hidden;
        }

        nav a {
            display: inline-block;
            padding: 1rem 1.5rem;
            color: #4a5568;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }

        nav a:hover {
            color: #667eea;
            background: #f7fafc;
        }

        nav a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 3px;
            background: #667eea;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        nav a:hover::after {
            width: 80%;
        }

        /* Marquee Banner */
        .marquee-banner {
            background: linear-gradient(90deg, #667eea 0%, #764ba2 50%, #667eea 100%);
            color: white;
            padding: 1rem;
            border-radius: 12px;
            margin-bottom: 2rem;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(102, 126, 234, 0.3);
        }

        .marquee-text {
            white-space: nowrap;
            animation: marquee 20s linear infinite;
            font-weight: 500;
            font-size: 1.1rem;
        }

        @keyframes marquee {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }

        /* Welcome Card */
        .welcome-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            padding: 2.5rem;
            margin-bottom: 2rem;
            animation: fadeIn 0.8s ease;
        }

        .welcome-card h2 {
            font-size: 1.8rem;
            color: #2d3748;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .welcome-card p {
            color: #718096;
            line-height: 1.8;
            font-size: 1rem;
        }

        /* Project Cards */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .project-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            transition: all 0.3s ease;
            animation: fadeInUp 0.8s ease;
            border-left: 4px solid #667eea;
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.15);
        }

        .project-card h3 {
            color: #2d3748;
            font-size: 1.3rem;
            margin-bottom: 0.75rem;
            font-weight: 600;
        }

        .project-card p {
            color: #718096;
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .project-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: #667eea;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .project-link:hover {
            gap: 0.75rem;
        }

        .project-link i {
            transition: transform 0.3s ease;
        }

        .project-link:hover i {
            transform: translateX(5px);
        }

        /* Stats Cards */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            display: flex;
            align-items: center;
            gap: 1.5rem;
            transition: all 0.3s ease;
            animation: fadeIn 1s ease;
        }

        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.15);
        }

        .stat-icon {
            width: 70px;
            height: 70px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
        }

        .stat-icon.purple {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .stat-icon.green {
            background: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
        }

        .stat-icon.blue {
            background: linear-gradient(135deg, #4299e1 0%, #3182ce 100%);
        }

        .stat-icon.orange {
            background: linear-gradient(135deg, #ed8936 0%, #dd6b20 100%);
        }

        .stat-info h3 {
            color: #718096;
            font-size: 0.875rem;
            font-weight: 500;
            margin-bottom: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .stat-info p {
            color: #2d3748;
            font-size: 1.8rem;
            font-weight: 700;
        }

        /* Footer */
        footer {
            background: white;
            padding: 2rem;
            text-align: center;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            color: #718096;
            font-size: 0.9rem;
        }

        /* WhatsApp Floating Button */
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: #25D366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 20px rgba(37, 211, 102, 0.5);
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 999;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 30px rgba(37, 211, 102, 0.7);
        }

        .whatsapp-float i {
            color: white;
            font-size: 30px;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            header h1 {
                font-size: 1.8rem;
            }

            .date-badge {
                position: static;
                display: inline-block;
                margin-bottom: 1rem;
            }

            nav {
                display: flex;
                flex-wrap: wrap;
            }

            nav a {
                flex: 1;
                min-width: 100px;
                text-align: center;
                padding: 0.75rem;
                font-size: 0.875rem;
            }

            .stats-grid,
            .projects-grid {
                grid-template-columns: 1fr;
            }

            .whatsapp-float {
                width: 50px;
                height: 50px;
                bottom: 20px;
                right: 20px;
            }

            .whatsapp-float i {
                font-size: 24px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <div class="date-badge" id="current-date"></div>
            <h1><i class="fas fa-home"></i> Dashboard</h1>
            <p>Sistem Manajemen Data Karyawan</p>
        </header>

        <nav>
            <a href="home"><i class="fas fa-home"></i> Home</a>
            <a href="pegawai"><i class="fas fa-users"></i> Pegawai</a>
            <a href="golongan"><i class="fas fa-layer-group"></i> Golongan</a>
            <a href="gaji"><i class="fas fa-money-bill-wave"></i> Gaji</a>
            <a href="lembur"><i class="fas fa-clock"></i> Lembur</a>
        </nav>

        <div class="marquee-banner">
            <div class="marquee-text">
                <i class="fas fa-star"></i> Selamat Datang di Sistem Manajemen Data Karyawan | Halo señor/señora profesores, este es el resultado del proyecto Laravel | Terima kasih atas kunjungannya! <i class="fas fa-star"></i>
            </div>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon purple">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-info">
                    <h3>Total Pegawai</h3>
                    <p>--</p>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon green">
                    <i class="fas fa-layer-group"></i>
                </div>
                <div class="stat-info">
                    <h3>Golongan</h3>
                    <p>--</p>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon blue">
                    <i class="fas fa-money-bill-wave"></i>
                </div>
                <div class="stat-info">
                    <h3>Total Gaji</h3>
                    <p>--</p>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon orange">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="stat-info">
                    <h3>Data Lembur</h3>
                    <p>--</p>
                </div>
            </div>
        </div>

        <div class="welcome-card">
            <h2><i class="fas fa-hand-wave"></i> Selamat Datang / Hola</h2>
            <p>
                Hola señor/señora profesores, este es el resultado de un proyecto de Laravel en el que he estado trabajando.
                Este sistema dirancang untuk mengelola data karyawan, golongan, gaji, dan lembur dengan efisien.
                Corríjanlo si hay algún problema o no es apropiado. Adiós!
            </p>
        </div>

        <h2 style="color: white; text-align: center; margin-bottom: 2rem; font-weight: 600;">
            <i class="fas fa-folder-open"></i> Hasil Project Laravel
        </h2>

        <div class="projects-grid">
            <div class="project-card">
                <h3><i class="fas fa-code"></i> Job Laravel 1</h3>
                <p>Penggunaan Route dan View</p>
                <a href="qhome" class="project-link">
                    Lihat Detail <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="project-card">
                <h3><i class="fas fa-database"></i> Job Laravel 2</h3>
                <p>(membuat Controller return text)</p>
                <a href="vhome" class="project-link">
                    Lihat Detail <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="project-card">
                <h3><i class="fas fa-chart-line"></i> Job Laravel 3 - 6</h3>
                <p>(Membuat CRUD)</p>
                <a href="home" class="project-link">
                    Lihat Detail <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <footer>
            <p>&copy; © 2026 Bruryansah | SMK Tamansiswa 2 Jakarta</p>
        </footer>
    </div>



    <script>
        function formatDate(date) {
            const options = {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            return date.toLocaleDateString('id-ID', options);
        }

        document.getElementById('current-date').innerHTML = '<i class="fas fa-calendar-alt"></i> ' + formatDate(new Date());
    </script>
</body>
</html>
