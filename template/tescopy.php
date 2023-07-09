<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<canvas id="lineChart"></canvas>
<?php


// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari tabel
$sql = "SELECT MONTH(tanggal) AS bulan, COUNT(*) AS jumlah FROM donatur WHERE tanggal >= DATE_SUB(CURDATE(), INTERVAL 12 MONTH) GROUP BY MONTH(tanggal)";
$result = $conn->query($sql);

$labels = [];
$data = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $bulan = DateTime::createFromFormat('!m', $row["bulan"]);
        $labels[] = $bulan->format('F');
        $data[] = $row["jumlah"];
    }
}

// Menutup koneksi
$conn->close();
?>
<script>
var ctx = document.getElementById('lineChart').getContext('2d');
var chart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: <?php echo json_encode($labels); ?>,
        datasets: [{
            label: 'Jumlah Pakaian',
            data: <?php echo json_encode($data); ?>,
            backgroundColor: 'rgba(75, 192, 192, 0.6)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1,
            fill: false
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
                precision: 0
            }
        }
    }
});
</script>
