@extends('master')
@section('konten')


<div style="display:flex; justify-content:flex-end; margin-bottom:1rem;">
    <form action="{{ route('actionlogout') }}" method="POST">
        @csrf
        <button type="submit" style="
            background: #ed8936;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
        ">
            <a href="{{ route('actionlogout') }}"><i class="fa fa-power-off"></i> Log Out</a>
        </button>
    </form>
</div>

<div class="welcome-hero">
    <div class="welcome-content">
        <div class="welcome-icon-container">
            <i class="fas fa-hand-sparkles"></i>
        </div>

        <h1 class="welcome-title">
            Selamat Datang, <span class="gradient-text">{{ Auth::user()->name }}</span>!
        </h1>

        <p class="welcome-subtitle">
            Senang melihat Anda kembali. Anda login sebagai <b>{{ Auth::user()->role }}</b>
            dan siap untuk mengelola sistem dengan efisien.
        </p>

        <!-- User info cards -->
        <div class="user-info-cards">
            <div class="user-info-card">
                <div class="user-info-icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="user-info-text">
                    <h4>Username</h4>
                    <p>{{ Auth::user()->name }}</p>
                </div>
            </div>
            <div class="user-info-card">
                <div class="user-info-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="user-info-text">
                    <h4>Email</h4>
                    <p>{{ Auth::user()->email }}</p>
                </div>
            </div>
            <div class="user-info-card">
                <div class="user-info-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <div class="user-info-text">
                    <h4>Role</h4>
                    <p>{{ Auth::user()->role }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Quick stats -->
<div class="quick-stats">
    <a href="qhome" class="stat-card">
        <div class="stat-icon purple">
            <i class="fas fa-print"></i>
        </div>
        <div class="stat-info">
            <h3>Job 1</h3>
            <p>--</p>
        </div>
        <i class="fas fa-arrow-right arrow-icon"></i>
    </a>

    <a href="vhome" class="stat-card">
        <div class="stat-icon green">
            <i class="fas fa-print"></i>
        </div>
        <div class="stat-info">
            <h3>Job 2</h3>
            <p>--</p>
        </div>
        <i class="fas fa-arrow-right arrow-icon"></i>
    </a>

    <a href="home" class="stat-card">
        <div class="stat-icon blue">
            <i class="fas fa-print"></i>
        </div>
        <div class="stat-info">
            <h3>Job 3</h3>
            <p>--</p>
        </div>
        <i class="fas fa-arrow-right arrow-icon"></i>
    </a>
</div>

@endsection
