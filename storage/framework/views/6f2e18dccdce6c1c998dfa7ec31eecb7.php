<?php if(isset($breadcrumbs)): ?>
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
        <div class="breadcrumbs-area clearfix">
            <ul class="breadcrumbs pull-left">
                <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $breadcrumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($breadcrumb['url']): ?>
                        <li><a href="<?php echo e($breadcrumb['url']); ?>"><?php echo e($breadcrumb['title']); ?></a></li>
                    <?php else: ?>
                        <li><span><?php echo e($breadcrumb['title']); ?></span></li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        </div>
        <div class="col-sm-6 clearfix">
        </div>
    </div>
</div>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/admin/layouts/breadcrumb.blade.php ENDPATH**/ ?>