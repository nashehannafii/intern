<?php

/** @var yii\web\View $this */

use app\models\Mobil;
use yii\helpers\ArrayHelper;

$this->title = 'My Yii Application';
// $res = Spk::find()->orderBy(['nilai_hasil' => SORT_DESC])->all();
// $null = '???';
$mobil = ArrayHelper::map(Mobil::find()->all(), 'id', 'nama_kendaraan');
// echo '<pre>';print_r($mobil);exit;
// echo '<pre>';print_r(gettype($mobil));exit;
$test = ['te', 'te', 'te'];
$mobil = implode(" ",$mobil);
?>



<h1 class="app-page-title">Dashboard </h1>

<!-- Website Traffic -->
<div class="col-6">
    <div class="card recent-sales overflow-auto">

        <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
        </div>

        <div class="card-body">
            <h5 class="card-title">Recent Sales <span>| Today</span></h5>

            <div class="chartBox">
                <canvas id="myChart"></canvas>
            </div>

            <script>
                const mobil = <?php echo json_encode($mobil) ?>
                // alert('coba')
                const data = {
                    labels: [mobil],
                    datasets: [{
                        label: 'My First Dataset',
                        data: [65, 59, 80, 81, 56, 55, 40],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 205, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(201, 203, 207, 0.2)'
                        ],
                        borderColor: [
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 64)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(54, 162, 235)',
                            'rgb(153, 102, 255)',
                            'rgb(201, 203, 207)'
                        ],
                        borderWidth: 1
                    }]
                };

                //config code
                const config = {
                    type: 'bar',
                    data: data,
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    },
                };

                //render code
                const myChart = new Chart(
                    document.getElementById('myChart'),
                    config
                );
            </script>

        </div>

    </div>
</div>

<?php

// $this->registerJs('


// ', \yii\web\View::POS_READY);

?>