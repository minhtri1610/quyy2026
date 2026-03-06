<?php $__env->startSection('content'); ?>
    <div class="container search-home py-4">
        <div class="text-center mb-4">
            <h1 class="s-text-header"
                style="font-size: 2.2rem; display: inline-block; border-right: none; animation: none;">TÌM KIẾM PHÁI QUY Y
            </h1>
            <p class="text-muted mt-2 fs-6" style="color: #915000 !important;">Tra cứu thông tin phái Quy Y của
                Phật tử Chùa Phước Lộc</p>
        </div>

        <div class="mb-5 w-100">
            <form action="" method="get">
                <div class="mx-auto" style="max-width: 650px; width: 95%;">
                    <div class="input-group p-1"
                        style="background-color: rgba(255,255,255,0.95); border-radius: 50px; border: 2px solid #ffeb3b; box-shadow: 0 5px 15px rgba(0,0,0,0.15);">
                        <input type="text" name="key-word" value="<?php echo e(request()->get('key-word')); ?>"
                            placeholder="Nhập pháp danh, họ tên, SĐT..."
                            class="form-control border-0 shadow-none bg-transparent"
                            style="padding: 12px 20px; font-size: 16px; outline: none;">
                        <button type="submit" class="btn d-flex align-items-center justify-content-center m-0"
                            style="background: linear-gradient(#d83c17, #9a2b11); color: #fff; font-size: 16px; font-weight: 600; border-radius: 40px; padding: 10px 24px; box-shadow: 0 4px 8px rgba(154, 43, 17, 0.3); z-index: 10; border: none; position: relative; right: auto; top: auto; transform: none;">
                            <i class="bi bi-search"></i> <span class="d-none d-sm-inline ms-2">Tìm kiếm</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div class="search-result mx-auto" style="max-width: 750px;">
            <div class="row">
                <?php if(!empty($users) && count($users) > 0): ?>
                    <div class="col-12 mb-3">
                        <div class="d-flex align-items-center justify-content-between border-bottom pb-2">
                            <span class="text-muted" style="font-size: 0.95rem;">
                                <i class="bi bi-list-ul me-1"></i> Kết quả tìm kiếm cho
                                <strong>"<?php echo e(request()->get('key-word')); ?>"</strong>
                            </span>
                            <?php if(method_exists($users, 'total')): ?>
                                <span class="badge"
                                    style="background-color: #fef3cd; color: #9a2b11; border: 1px solid #ffeeba;"><?php echo e($users->total()); ?>

                                    kết quả</span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-12 mb-4">
                            <div class="card-item result-card-hover" style="transition: transform 0.2s, box-shadow 0.2s;">
                                <div class="card-body-item d-flex flex-column flex-md-row align-items-start align-items-md-center p-4 bg-white"
                                    style="border: 1px solid #f0e6d6; border-radius: 16px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); position: relative; border-left: 6px solid #d83c17;">
                                    <div class="c-left me-md-4 mb-3 mb-md-0 d-flex justify-content-center w-100"
                                        style="max-width: 65px;">
                                        <div
                                            style="width: 65px; height: 65px; background-color: #fff9e6; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: inset 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #ffeb3b;">
                                            <img src="<?php echo e(asset('/images/icon_banhxephap.png')); ?>" alt="icon"
                                                style="width: 35px; height: 35px; object-fit: contain;">
                                        </div>
                                    </div>

                                    <div class="c-right flex-grow-1 w-100 mb-3 mb-md-0">
                                        <h4 class="mb-2 d-flex align-items-center flex-wrap gap-2"
                                            style="color: #6f200e; font-weight: 700; font-size: 1.25rem;">
                                            <?php echo e($user->name); ?>

                                            <?php if($user->nickname): ?>
                                                <span class="badge align-middle"
                                                    style="background-color: #fef3cd; color: #9a2b11; border: 1px solid #ffeeba; font-weight: 600; font-size: 0.85rem; padding: 5px 10px; border-radius: 20px;">
                                                    <i class="bi bi-yin-yang me-1"></i> Pháp danh: <?php echo e($user->nickname); ?>

                                                </span>
                                            <?php endif; ?>
                                        </h4>
                                        <div class="d-flex flex-column flex-sm-row mt-1" style="font-size: 0.95rem; color: #555;">
                                            <div class="me-sm-4 mb-1 mb-sm-0">
                                                <i class="bi bi-telephone-fill me-1" style="color: #d83c17; opacity: 0.8;"></i>
                                                <span
                                                    style="font-weight: 500;"><?php echo e($user->phone ? format_phone($user->phone) : 'Chưa cập nhật'); ?></span>
                                            </div>
                                            <div>
                                                <i class="bi bi-envelope-fill me-1" style="color: #d83c17; opacity: 0.8;"></i>
                                                <span
                                                    style="font-weight: 500;"><?php echo e($user->email ? formatHiddenEmail($user->email) : 'Chưa cập nhật'); ?></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="c-action mt-2 mt-md-0 w-100 text-md-end"
                                        style="max-width: fit-content; min-width: 140px;">
                                        <!-- Gọi js hiển thị phương thức -->
                                        <a class="btn px-4 py-2 w-100 shadow-sm" onclick="getInfoCertificate(this)"
                                            data-uid="<?php echo e($user->uid); ?>" data-nickname="<?php echo e($user->nickname); ?>"
                                            data-name="<?php echo e($user->name); ?>"
                                            style="background: linear-gradient(#d83c17, #9a2b11); color: #fff; border-radius: 30px; font-weight: 600; border: none; cursor: pointer; white-space: nowrap;">
                                            <i class="bi bi-eye me-1"></i> Chi tiết
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="d-flex justify-content-center mt-3 w-100">
                        <?php if(method_exists($users, 'links')): ?>
                            <?php echo e($users->links('admin.layouts.pagination')); ?>

                        <?php endif; ?>
                    </div>
                <?php else: ?>
                    <div class="col-md-12 text-center mt-3 mx-auto" style="max-width: 600px;">
                        <div class="p-5 bg-white shadow-sm" style="border-radius: 20px; border: 1px dashed #e0d5c1;">
                            <?php if(request()->get('key-word')): ?>
                                <i class="bi bi-search text-muted mb-3 d-block"
                                    style="font-size: 3.5rem; color: #e0d5c1 !important;"></i>
                                <h5 style="color: #6f200e; font-weight: 600;">Không tìm thấy Phật tử nào</h5>
                                <p class="text-muted mb-0">Không có kết quả nào khớp với từ khóa
                                    "<strong><?php echo e(request()->get('key-word')); ?></strong>". Vui lòng thử lại với thông tin khác.</p>
                            <?php else: ?>
                                <i class="bi bi-journal-text text-muted mb-3 d-block"
                                    style="font-size: 3.5rem; color: #e0d5c1 !important;"></i>
                                <h5 style="color: #6f200e; font-weight: 600;">Tra cứu thông tin</h5>
                                <p class="text-muted mb-0">Vui lòng nhập họ tên, pháp danh hoặc số điện thoại vào ô tìm kiếm bên
                                    trên.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layouts.menu-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('client.quyy._modal-verify-search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        function getInfoCertificate(e) {
            let uid = $(e).data('uid');
            let full_name = $(e).data('name');
            let nickname = $(e).data('nickname');
            $('#m_uid').val(uid);
            $('#m_name').val(full_name);
            $('#m_nickname').val(nickname);
            $('#modal-verify-search').modal('show');
        }

        function getInfo() {
            let data = {
                'uid': $('#m_uid').val(),
                'phone': $('#m_phone').val(),
                '_token': $('meta[name="csrf-token"]').attr('content'),
            }
            return data;
        }

        function verifyPhone() {
            // if($('#m_phone').val() == '') {
            //     toastr.error("Vui lòng nhập số điện thoại!", "Thông báo");
            //     return false;
            // }
            let data = getInfo();
            let url = $('#form-verify').attr('action');
            $.ajax({
                url: url,
                type: 'POST',
                data: data,
                success: function (result) {
                    if (result.status == true) {
                        window.location.href = result.url;
                    } else {
                        toastr.error(result.message, "Thông báo");
                    }
                }
            });
        }


    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('client.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/client/quyy/search.blade.php ENDPATH**/ ?>