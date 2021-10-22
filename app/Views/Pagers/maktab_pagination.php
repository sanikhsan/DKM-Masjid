<?php $pager->setSurroundCount(2) ?>

<div class="pagination-wrap mt-30 d-flex flex-wrap justify-content-center text-center w-100">
    <ul class="pagination mb-0">
        <?php if ($pager->hasPrevious()) : ?>
            <li class="page-item prev">
                <a class="page-link" href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>">
                    <i class="fas fa-long-arrow-alt-left"></i><span aria-hidden="true"><?= lang('Pager.previous') ?></span>
                </a>
            </li>
        <?php endif ?>

        <?php foreach ($pager->links() as $link) : ?>
            <li class="page-item <?= $link['active'] ? 'active' : '' ?>">
                <a class="page-link" href="<?= $link['uri'] ?>">
                    <?= $link['title'] ?>
                </a>
            </li>
        <?php endforeach ?>

        <?php if ($pager->hasNext()) : ?>
            <li class="page-item next">
                <a class="page-link" href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>">
                    <i class="fas fa-long-arrow-alt-right"></i><span aria-hidden="true"><?= lang('Pager.next') ?></span>
                </a>
            </li>
        <?php endif ?>
    </ul>
</div>