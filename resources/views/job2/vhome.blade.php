<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Sistem Sekolah</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            background-color: #f5f7fa;
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        nav {
            background: #ffffff;
            padding: 16px 40px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav h2 {
            color: #2563eb;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
        }

        .hero {
            padding: 100px 20px;
            background: linear-gradient(135deg, #2563eb, #1e40af);
            color: white;
            text-align: center;
        }

        .hero h1 {
            font-size: 42px;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 18px;
            opacity: 0.9;
            max-width: 700px;
            margin: 0 auto;
        }

        footer {
            margin-top: auto;
            background: #111827;
            color: #9ca3af;
            padding: 20px;
            text-align: center;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 32px;
            }

            nav {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>

<body>

<nav>
    <h2>Laravel UI</h2>
    <ul>
        <li><a href="vhome">Home</a></li>
        <li><a href="siswa">Siswa</a></li>
        <li><a href="pamong">Pamong</a></li>
        <li><a href="mapel">Mapel</a></li>
        <li><a href="kelas">Kelas</a></li>
    </ul>
</nav>

<section class="hero">
    <h1>Selamat Datang di Sistem Sekolah</h1>
    <p>Kelola data siswa, pamong, mata pelajaran, dan kelas secara modern, rapi, dan efisien</p>
</section>

<footer>
    © 2026 Bruryansah | Smk Tamansiswa 2 Jakarta
</footer>

</body>
</html>
