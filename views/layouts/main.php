<?php

use app\assets\DashboardAsset;
use yii\helpers\Url;

DashboardAsset::register($this);
$this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <?php $this->head() ?>
    <?= $this->registerCsrfMetaTags() ?>

    <!-- Title Page-->
    <title>Dashboard</title>
    <!-- <canvas id="myChart"></canvas> -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Main CSS-->
    <link href="<?= Url::home() ?>assets-portal/css/portal.css" rel="stylesheet" media="all">

</head>

<body class="app">
    <?php $this->beginBody() ?>
    <!-- HEADER MOBILE-->
    <header class="app-header fixed-top">

        <!--//app-header-inner-->
        <!-- <div id="app-sidepanel" class="app-sidepanel">
            <div id="sidepanel-drop" class="sidepanel-drop"></div>
            <div class="sidepanel-inner d-flex flex-column">
                <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>

                <div class="app-branding">
                    <a class="app-logo" href="index.html"><span class="logo-text">:)</span></a>
                    
                </div> -->
                <!--//app-branding-->

                <?php $this->beginContent("@app/views/layouts/MenuHelper.php") ?>
                <?php $this->endContent() ?>

                <!--//app-nav-->

                <!--//app-sidepanel-footer-->

            <!-- </div> -->
            <!--//sidepanel-inner-->
        <!-- </div> -->
        <!--//app-sidepanel-->
    </header>
    <!-- END HEADER MOBILE-->
        
        <div class="pt-5 p-md-5 p-lg-5">
            <?= $content ?>
            <!--//container-fluid-->
        </div>
        <!--//app-content-->


        <!--//app-footer-->

    </div>


    <?php $this->endBody() ?>


</body>

</html>
<!-- end document-->

<?php $this->endPage() ?>