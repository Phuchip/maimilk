<div class="breadcrumb">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb-items">
            <li class="breadcrumb-item">
                <a href="/">Trang chủ</a>
            </li>
            <?php foreach($breadcrumb as $value): ?>
            <?php $active = '';if(isset($value['current']) || $value['current']){$active = 'active';} ?>
            <li class="breadcrumb-item <?= $active ?>" aria-current="page">
                <?php if($active): ?>
                <span><?= $value['title'] ?></span>
                <?php else: ?>
                <a href="<?= $value['url'] ?>"><?= $value['title'] ?></a>
                <?php endif; ?>
            </li>
            <?php endforeach; ?>
        </ol>
    </nav>
</div>