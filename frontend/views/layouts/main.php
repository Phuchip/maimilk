<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

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
    <?php $this->head() ?>
    <link rel="stylesheet" href="/font-awesome-v5/css/all.min.css">
    <link rel="stylesheet" href="/tooltipster/css/tooltipster.bundle.min.css">
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
<script src="/js/jquery.min.js"></script>
<script src="/js/lazysizes.min.js"></script>
</body>
</html>
<?php $this->endPage();
