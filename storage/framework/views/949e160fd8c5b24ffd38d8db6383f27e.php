<?php $__env->startSection('content'); ?> 
<div class="wapper-register">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="reg-content card p-4 shadow">
            <div class="wp-notice">
                <i class="brow-text"> (*) Thông tin đăng ký đã được ghi nhận bởi hệ thống.</i>
            </div>
            <div class="reg-head text-center brow-text mt-3">
                <h4>Con xin phát nguyện quy y Phật</h4>
                <h4>Con xin phát nguyện quy y Pháp</h4>
                <h4>Con xin phát nguyện quy y Tăng</h4>
            </div>
            

            <h4 class="text-center mt-3">Giữ Gìn 5 giới cấm</h4>
            <pre>
            - Không sát sanh hại vật.
            - Không gian tham trộm cướp.
            - Không tà dâm.
            - Không nói bậy.
            - Không dùng chất say nghiện.
            </pre>
            <h4 class="text-center">7 điều nguyện</h4>
            <pre>
            - Cố gắng tập ăn chay.
            - Siêng năng học hỏi giáo pháp.
            - Thường xuyên tọa thiền, niệm Phật, Lễ Phật.
            - Nỗ lực làm việc từ thiện.
            - Nguyện Phật hóa gia đình.
            - Nguyện giúp mọi người tin hiểu Phật Pháp.
            - Nguyện kiên cường hộ đạo.
            </pre>
            <p><b>Phật tử: <?php echo e(session('temporary_user_full_name')); ?></b></p>
            
            <div class="wp-step">
                <p>Xác nhận đã gửi thông tin đăng ký Quy Y Tam Bảo tại Chùa Phước Lộc.</p>
                <p>Hệ thống đã ghi nhận thông tin, Thầy Trụ trì sẽ xác thực thông tin và liên hệ để tiến hành lễ Quy Y tại Chùa.</p>
                <p>
                    Pháp Danh và Thẻ Quy Y bản mềm sẽ được gửi qua đường dẫn này
                    <a href="<?php echo e(route('client.quyy.search')); ?>">(đường dẫn xem phiếu quy y)</a>.
                    <br>
                    Vui lòng điền số điện thoại đã đăng ký vào biểu mẫu để nhận thông tin.
                </p>
                <p><i> Hỗ Trợ Kỹ Thuật: <b>036 324 7266</b> </i></p>
            </div>
        </div>
        
    </div>
</div>

<?php echo $__env->make('client.layouts.menu-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/register-quyy.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/client/temporary-users/success.blade.php ENDPATH**/ ?>