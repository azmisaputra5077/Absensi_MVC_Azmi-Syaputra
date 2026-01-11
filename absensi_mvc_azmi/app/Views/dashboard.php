<div class="row">
        <!-- Card Welcome -->
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow mb-4 bg-primary text-white">
                <div class="card-body text-center">
                    <h4>👋 Selamat datang Azmi Syaputra!</h4>
                    <p class="mb-0">
                        Anda login sebagai: <b>admin</b><br>
                        Selamat datang di <b>Sistem Absensi Karyawan</b>.
                    </p>
                </div>
            </div>
        </div>
</div>

<!-- Statistik Section -->
<div class="row mb-4">
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card shadow-lg border-0 h-100 bg-warning text-white">
            <div class="card-body text-center py-4">
                <i class="fas fa-users fa-3x mb-3"></i>
                <h2 class="card-title"><?= $totalKaryawan ?? 0 ?></h2>
                <p class="card-text">Total Karyawan</p>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card shadow-lg border-0 h-100 bg-secondary text-white">
            <div class="card-body text-center py-4">
                <i class="fas fa-calendar-check fa-3x mb-3"></i>
                <h2 class="card-title"><?= $absensiHariIni ?? 0 ?></h2>
                <p class="card-text">Absensi Hari Ini</p>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card shadow-lg border-0 h-100 bg-dark text-white">
            <div class="card-body text-center py-4">
                <i class="fas fa-clock fa-3x mb-3"></i>
                <h2 class="card-title"><?= $tanggalHariIni ?? date('d/m/Y') ?></h2>
                <p class="card-text">Tanggal Hari Ini</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- Menu Karyawan -->
    <div class="col-xl-4 col-md-6 mb-4">
        <a href="/karyawan" class="text-decoration-none">
            <div class="card shadow-lg border-0 h-100 bg-danger text-white card-hover">
                <div class="card-body text-center py-4">
                    <i class="fas fa-users fa-3x mb-3"></i>
                    <h5 class="card-title">Menu Karyawan</h5>
                    <p class="card-text">Kelola Data Karyawan</p>
                </div>
            </div>
        </a>
    </div>

    <!-- Menu Absensi -->
    <div class="col-xl-4 col-md-6 mb-4">
        <a href="/absensi" class="text-decoration-none">
            <div class="card shadow-lg border-0 h-100 bg-info text-white card-hover">
                <div class="card-body text-center py-4">
                    <i class="fas fa-calendar-check fa-3x mb-3"></i>
                    <h5 class="card-title">Menu Absensi</h5>
                    <p class="card-text">Catat Kehadiran</p>
                </div>
            </div>
        </a>
    </div>

    <!-- Menu Laporan -->
    <div class="col-xl-4 col-md-6 mb-4">
        <a href="/laporan" class="text-decoration-none">
            <div class="card shadow-lg border-0 h-100 bg-success text-white card-hover">
                <div class="card-body text-center py-4">
                    <i class="fas fa-chart-line fa-3x mb-3"></i>
                    <h5 class="card-title">Menu Laporan</h5>
                    <p class="card-text">Lihat & Cetak Laporan</p>
                </div>
            </div>
        </a>
    </div>
</div>

<style>
    .card-hover:hover {
        transform: translateY(-5px);
        transition: transform 0.3s ease;
    }
</style>
