<?php $__env->startSection('title', 'DS Chờ Duyệt'); ?>
<?php $__env->startSection('content'); ?>

    <div class="form-import card">
        <div class="card-body">
            <form action="<?php echo e(route('admin.quyy.import')); ?>" method="POST"  enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-12 form-group">
                        <label for="" class="form-label">Vui lòng chọn file có định dạng .csv</label>
                        <input class="form-control" type="file" name="file" id="" accept=".csv">
                        <?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div style="color: red;"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary">Nhập</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/quyy/import.blade.php ENDPATH**/ ?>