
<div class="btn-group btn-group-sm" role="group">

    <?php if( Route::has( $t->feParams->route_prefix . '@list' ) ): ?>
        <a class="btn btn-outline-secondary" href="<?= route($t->feParams->route_prefix.'@list') ?>">
            <span class="fa fa-th-list"></span>
        </a>
    <?php endif; ?>
    <a title="add SNMP" class="btn btn-outline-secondary" href="<?= route($t->feParams->route_prefix.'@add-by-snmp') ?>">
        <span class="fa fa-plus"></span>
    </a>
</div>

