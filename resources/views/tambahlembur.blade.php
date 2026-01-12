<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Lembur</title>

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
            max-width: 900px;
            margin: 0 auto;
            padding: 2rem;
        }

        header {
            background: white;
            padding: 2rem;
            border-radius: 16px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
            text-align: center;
        }

        header h1 {
            font-size: 2rem;
            font-weight: 700;
            color: #667eea;
            margin-bottom: 0.5rem;
        }

        header p {
            color: #718096;
            font-size: 0.95rem;
        }

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

        .form-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            padding: 2.5rem;
            margin-bottom: 2rem;
        }

        .form-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            padding-bottom: 1.5rem;
            border-bottom: 2px solid #e2e8f0;
        }

        .form-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #2d3748;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-size: 0.95rem;
        }

        .btn-back {
            background: #718096;
            color: white;
        }

        .btn-back:hover {
            background: #4a5568;
            transform: translateY(-2px);
        }

        .btn-submit {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            width: 100%;
            padding: 1rem;
            font-size: 1rem;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #4a5568;
            font-size: 0.95rem;
        }

        .form-label i {
            margin-right: 0.5rem;
            color: #667eea;
        }

        .form-input,
        .form-select {
            width: 100%;
            padding: 0.875rem 1rem;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            font-family: 'Inter', sans-serif;
            color: #2d3748;
        }

        .form-input:focus,
        .form-select:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .info-box {
            background: #e6fffa;
            border-left: 4px solid #38b2ac;
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 2rem;
            display: flex;
            align-items: start;
            gap: 1rem;
        }

        .info-box i {
            color: #38b2ac;
            font-size: 1.2rem;
            margin-top: 0.2rem;
        }

        .info-box p {
            color: #234e52;
            font-size: 0.9rem;
            margin: 0;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }

        .form-grid-full {
            grid-column: 1 / -1;
        }

        footer {
            background: white;
            padding: 2rem;
            text-align: center;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            color: #718096;
            font-size: 0.9rem;
        }

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
            text-decoration: none;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 30px rgba(37, 211, 102, 0.7);
        }

        .whatsapp-float i {
            color: white;
            font-size: 30px;
        }

        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            header h1 {
                font-size: 1.5rem;
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

            .form-card {
                padding: 1.5rem;
            }

            .form-header {
                flex-direction: column;
                gap: 1rem;
                align-items: flex-start;
            }

            .form-grid {
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
    <h1>Tambah Data Lembur</h1>
    <p>Input data lembur karyawan</p>
</header>

<nav>
    <a href="home"><i class="fas fa-home"></i> Home</a>
    <a href="pegawai"><i class="fas fa-users"></i> Pegawai</a>
    <a href="golongan"><i class="fas fa-layer-group"></i> Golongan</a>
    <a href="gaji"><i class="fas fa-money-bill-wave"></i> Gaji</a>
    <a href="lembur"><i class="fas fa-clock"></i> Lembur</a>
</nav>

<div class="form-card">
    <div class="form-header">
        <h2 class="form-title">Form Tambah Lembur</h2>
        <a href="/lembur" class="btn btn-back">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="info-box">
        <i class="fas fa-info-circle"></i>
        <p>Pastikan data lembur sesuai dengan jam kerja pegawai.</p>
    </div>

    <form action="/lembur/store" method="post">
        {{ csrf_field() }}

        <div class="form-grid">
            <div class="form-group">
                <label class="form-label">
                    <i class="fas fa-id-badge"></i> ID Pegawai
                </label>
                <select name="pegawai_id" class="form-select" required>
                    <option value="">-- Pilih Pegawai --</option>
                    @foreach($pegawai as $p)
                        <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }} ({{ $p->pegawai_jabatan }})</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label class="form-label">
                    <i class="fas fa-calendar"></i> Bulan Lembur
                </label>
                <input type="text" name="bulan_lembur" class="form-input" required>
            </div>

            <div class="form-group">
                <label class="form-label">
                    <i class="fas fa-clock"></i> Jumlah Lembur (Jam)
                </label>
                <input type="number" name="jumlah_lembur" class="form-input" required>
            </div>
        </div>

        <button type="submit" class="btn btn-submit">
            <i class="fas fa-save"></i> Simpan Data
        </button>
    </form>
</div>

<footer>
    &copy; © 2026 Bruryansah | SMK Tamansiswa 2 Jakarta
</footer>

</div>

<a href="https://wa.me/6285880492982" target="_blank" class="whatsapp-float">
    <i class="fab fa-whatsapp"></i>
</a>
</body>
</html>
