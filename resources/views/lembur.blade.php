<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Lembur - Management System</title>
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

        /* Content Card */
        .content-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin-bottom: 2rem;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #2d3748;
        }

        /* Button */
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

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
        }

        .btn-edit {
            background: #48bb78;
            color: white;
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
        }

        .btn-edit:hover {
            background: #38a169;
            transform: translateY(-1px);
        }

        .btn-delete {
            background: #f56565;
            color: white;
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
        }

        .btn-delete:hover {
            background: #e53e3e;
            transform: translateY(-1px);
        }

        /* Table */
        .table-container {
            overflow-x: auto;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            font-size: 0.9rem;
        }

        th {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1rem 0.75rem;
            text-align: left;
            font-weight: 600;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        td {
            padding: 1rem 0.75rem;
            border-bottom: 1px solid #e2e8f0;
            color: #4a5568;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover {
            background: #f7fafc;
        }

        .action-buttons {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
        }

        /* Notification */
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            background: white;
            color: #2d3748;
            padding: 1rem 1.5rem;
            border-radius: 12px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
            z-index: 1000;
            display: none;
            align-items: center;
            gap: 1rem;
            border-left: 4px solid #48bb78;
            animation: slideIn 0.3s ease;
        }

        .notification.show {
            display: flex;
        }

        @keyframes slideIn {
            from {
                transform: translateX(400px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .notification i {
            color: #48bb78;
            font-size: 1.5rem;
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

        /* Responsive */
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

            .card-header {
                flex-direction: column;
                align-items: flex-start;
            }

            table {
                font-size: 0.8rem;
            }

            th, td {
                padding: 0.75rem 0.5rem;
            }

            .action-buttons {
                flex-direction: column;
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
            <h1>Data Lembur</h1>
            <p>Sistem Manajemen Data Lembur Karyawan</p>
        </header>

        <nav>
            <a href="home"><i class="fas fa-home"></i> Home</a>
            <a href="pegawai"><i class="fas fa-users"></i> Pegawai</a>
            <a href="golongan"><i class="fas fa-layer-group"></i> Golongan</a>
            <a href="gaji"><i class="fas fa-money-bill-wave"></i> Gaji</a>
            <a href="lembur"><i class="fas fa-clock"></i> Lembur</a>
        </nav>

        @if (session('success'))
        <div class="notification show">
            <i class="fas fa-check-circle"></i>
            <span>{{ session('success') }}</span>
        </div>
        @endif

        <div class="content-card">
            <div class="card-header">
                <h2 class="card-title">Daftar Lembur</h2>
                <a href="lembur/tambah" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah Data Baru
                </a>
            </div>

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Lembur ID</th>
                            <th>Pegawai ID</th>
                            <th>Bulan Lembur</th>
                            <th>Jumlah Lembur</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lembur as $l)
                        <tr>
                            <td><strong>{{ $l->lembur_id }}</strong></td>
                            <td>{{ $l->pegawai_id }}</td>
                            <td>{{ $l->bulan_lembur }}</td>
                            <td>{{ $l->jumlah_lembur }} jam</td>
                            <td>
                                <div class="action-buttons">
                                    <a href="/lembur/edit/{{ $l->lembur_id }}" class="btn btn-edit">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <a href="/lembur/hapus/{{ $l->lembur_id }}" class="btn btn-delete" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                        <i class="fas fa-trash"></i> Hapus
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <footer>
            <p>&copy; © 2026 Bruryansah | SMK Tamansiswa 2 Jakarta</p>
        </footer>
    </div>

    //

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const notification = document.querySelector('.notification');
            if (notification) {
                setTimeout(function () {
                    notification.style.animation = 'slideIn 0.3s ease reverse';
                    setTimeout(() => {
                        notification.classList.remove('show');
                    }, 300);
                }, 3000);
            }
        });
    </script>
</body>
</html>
