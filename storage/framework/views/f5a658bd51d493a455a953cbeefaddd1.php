<?php $__env->startSection('content'); ?>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="wrapper-login p-4 shadow rounded bg-white">
            <div class="wpl-header text-center mb-3">
                <img class="img-fluid logo" src="<?php echo e(asset('images/default/no-image.jpg')); ?>" alt="">
                <h4 class="fw-bold mt-3"><?php echo e(__('lables.pg_login.title')); ?></h4>
            </div>
            <div class="wpl-body">
                <form action="<?php echo e(route('admin.login.post')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group mb-3">
                        <input type="email" class="form-control bdr-50" name="email" id="email" placeholder="<?php echo e(__('lables.pg_login.email')); ?>">
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" class="form-control bdr-50" name="password" id="password" placeholder="<?php echo e(__('lables.pg_login.password')); ?>">
                    </div>
                    <div class="form-group d-flex justify-content-between align-items-center mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="remember" id="remember">
                            <label for="remember" class="form-check-label"><?php echo e(__('lables.pg_login.btn_remember')); ?></label>
                        </div>
                        <a href="#" class="text-decoration-none"><?php echo e(__('lables.pg_login.btn_forgot')); ?></a>
                    </div>
                    <button type="submit" class="btn btn-primary w-100" style="border-radius: 20px;"><?php echo e(__('lables.pg_login.btn_login')); ?></button>
                </form>
                <div class="wpl-footer text-center mt-3">
                    <p><?php echo e(__('lables.pg_login.question')); ?><a href="#" class="text-decoration-none"><?php echo e(__('lables.pg_login.btn_register')); ?></a></p>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main-noauth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/auth/login.blade.php ENDPATH**/ ?>