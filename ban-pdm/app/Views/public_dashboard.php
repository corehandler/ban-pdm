<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard Akreditasi Sekolah</title>
  <link rel="icon" type="image/png" href="/favicon.png">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <script src="/assets/js/apexcharts.min.js"></script>

  <style>
    * {
      box-sizing: border-box;
    }
    body {
      font-family: 'Montserrat', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
    }
    header {
      background-color: #e0e0e0;
      padding: 10px;
      text-align: center;
      border-bottom: 4px solid #d2aa4a;
    }
    /* .top-bar {
      background-color: #013e4c;
      padding: 10px;
      color: white;
      text-align: center;
    } */
    .container {
      padding: 20px;
      max-width: 1200px;
      margin: auto;
    }
    .stat-boxes {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      justify-content: center;
    }
    .stat {
      flex: 1 1 200px;
      background-color: #2b688d;
      color: white;
      padding: 15px;
      border-radius: 10px;
      text-align: center;
    }
    .stat.green { background-color: #799d3c; }
    .stat.gold { background-color: #c4b74d; }

    .chart-placeholder, .bar-graph, .pie-chart, .bar-chart-custom {
      background-color: white;
      padding: 20px;
      border-radius: 12px;
      margin-top: 30px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .bars {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }
    .bar {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .bar .label {
      width: 200px;
    }
    .bar .value {
      background-color: #60a5fa;
      height: 20px;
      border-radius: 5px;
    }

    @media (max-width: 768px) {
      .stat-boxes {
        flex-direction: column;
        align-items: center;
      }
      .bar .label {
        width: 120px;
      }
    }
  </style>
</head>
<body>
  <header>
    <img src="/assets/img/logo-ban.png" alt="BAN-PDM Logo" height="40">
    <h3>Badan Akreditasi Nasional<br>Pendidikan Anak Usia Dini, Pendidikan Dasar, dan Pendidikan Menengah</h3>
  </header>
<!-- <select><option>2024</option></select> -->
  <div class="container">
    <div class="stat-boxes">
      <div class="stat">TOTAL<br><strong>121.471</strong></div>
      <div class="stat green">PAUD<br><strong>44.046</strong></div>
      <div class="stat gold">DASMEN<br><strong>77.425</strong></div>
    </div>

    <div class="chart-placeholder">
      <h3>Grafik Tahun (PAUD vs Dasmen)</h3>
      <p><em>Placeholder grafik batang berdasarkan tahun</em></p>
    </div>

    <div class="bar-graph">
      <h3>Akreditasi Berdasarkan Jenjang</h3>
      <div class="bars">
        <div class="bar"><span class="label">Akreditasi A</span><div class="value" style="width: 67%">67%</div></div>
        <div class="bar"><span class="label">Akreditasi B</span><div class="value" style="width: 80%">80%</div></div>
        <div class="bar"><span class="label">Akreditasi C</span><div class="value" style="width: 90%">90%</div></div>
        <div class="bar"><span class="label">Tidak Terakreditasi (TT)</span><div class="value" style="width: 100%">100%</div></div>
      </div>
    </div>

    <div class="pie-chart">
      <h3>Akreditasi Berdasarkan Jenjang (87%)</h3>
      <p><em>Placeholder grafik batang untuk persentase per jenis akreditasi</em></p>
    </div>

    <div class="bar-chart-custom">
      <h3>Jumlah Sekolah Terakreditasi</h3>
      <p><em>Placeholder chart bar: Red, Blue, Yellow, Green, Purple, Orange</em></p>
    </div>
  </div>
</body>
</html>