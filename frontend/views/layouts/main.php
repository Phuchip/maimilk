<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use Yii;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <!-- Icon -->
    <link rel="shortcut icon" href="/icon/favicon.ico" type="image/x-icon" />
    <!-- Meta -->
    <meta name="robots" content="noindex,nofollow" />
    <meta name="keywords" content="<?= Html::encode($this->keywords) ?>" />
    <meta name="description" content="<?= Html::encode($this->description) ?>" />

    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= Html::encode($this->title) ?>" />
    <meta property="og:description" content="<?= Html::encode($this->description) ?>" />
    <meta property="og:site_name" content="<?= Yii::$app->params['frontend_url'] ?>" />
    <meta property="og:image" content="<?= Html::encode($this->image) ?>" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="<?= Html::encode($this->description) ?>" />
    <meta name="twitter:title" content="<?= Html::encode($this->title) ?>" />

    <?php $this->head() ?>
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/content.css">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/tooltipster/css/tooltipster.bundle.min.css">
    <link rel="stylesheet" href="/slick/slick.min.css">
    <script src="/js/jquery.min.js"></script>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<!-- Header -->
<?= $this->render('_header') ?>
<!-- End Header -->
<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<!-- Footer -->
<?= $this->render('_footer') ?>
<!-- End Footer -->

<?php $this->endBody() ?>
<script src="/js/lazysizes.min.js"></script>
<script src="/slick/slick.min.js"></script>
<script src="/js/home.js"></script>
</body>
</html>
<?php $this->endPage();
