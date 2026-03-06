<?php $__env->startSection('title', 'DS Quy Y'); ?>
<?php $__env->startSection('content'); ?>
    <!-- Dark table start -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- <h4 class="header-title">Data Table Dark</h4> -->
                    <div class="row">
                        <div class="col-12">
                            <form class="form-group form-search" role="search" method="GET" action="<?php echo e(route('admin.quyy.index')); ?>">
                                <div class="row">
                                    <div class="col-md-6 col-12 d-flex align-items-center mb-3">
                                        <input class="form-control" value="<?php echo e($search); ?>" name="search" type="search" placeholder="Tìm tên, pháp danh, sdt..." aria-label="Search">
                                    </div>
                                    <div class="col-md-4 col-12  mb-3 d-flex align-items-center justify-content-center">
                                        <label for="select-year" class="mb-0">Chọn năm</label>
                                        <select name="year" id="select-year" class="form-control w-50 m-2">
                                            <option value="">Tất cả</option>
                                            <?php $__currentLoopData = $years; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $year): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($year->year); ?>" <?php echo e($year->year == $search_year ? 'selected' : ''); ?>><?php echo e($year->year); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        
                                    </div>
                                    
                                    <div class="col-md-2 col-12 mb-3 d-flex align-items-center justify-content-center">
                                        <a class="btn btn-success mr-2" href="<?php echo e(route('admin.quyy.create')); ?>"><i class="ti-plus"></i></a>
                                        <button class="btn btn-primary" type="submit">Tìm kiếm</button>
                                        <a class="btn btn-warning ml-2" href="<?php echo e(route('admin.quyy.index')); ?>"><i class="ti-reload"></i></a>
                                    </div>
                                </div>
                                <div class=" d-flex align-items-center mb-3 ml-3">
                                        <label for="no_nickname" class="mb-0">Không Pháp danh</label>
                                        <input type="checkbox" <?php if($no_nickname): ?> checked <?php endif; ?> class="form-check-input form-control border-1" value="1" name="no_nickname" id="no_nickname">
                                   
                                </div>
                            </form>
                        </div>
                    </div>
                    <p class="mb-0"><i>Kết quả tìm kiếm:</i> <b class="text-danger fs-5"> <?php echo e($lists->total()); ?> </b> Phật tử.</p>  
                    <div class="table-responsive">                  
                        <table id="" class="table table-bordered mt-3">
                            <thead class="text-capitalize table-dark">
                                <th>ID</th>
                                <th  style="width: 30%">Thông tin</th>
                                <th>Liên Hệ</th>
                                <th  style="width: 20%">Ngày Quy Y</th>
                                <th  style="width: 5%">Thao tác</th>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td> <b> #<?php echo e(handle_ID($item->uid_code)); ?> </b> </td>
                                    <td>
                                        <b>Tên:</b> <?php echo e($item->name); ?> </br>
                                        <b>Pháp danh: </b> <b><?php echo e($item->nickname); ?></b> </br>
                                        <b>Giới tính:</b> <?php echo e($item->gender === 'male' ? 'Nam' : ($item->gender === 'female' ? 'Nữ' : 'Khác')); ?> <br>
                                        <b>Tuổi:</b> <?php echo e(calculate_age($item->birth_date)); ?>

                                    </td>
                                    <td>
                                        <b>SĐT:</b> <?php echo e($item->phone); ?> </br>
                                        <b>Email:</b> <?php echo e($item->email); ?> </br>
                                        <b>Địa chỉ:</b>  <?php echo e(convert_address($item)); ?>

                                    </td>
                                    <td><?php echo e(date('d-m-Y', strtotime($item->date_registered))); ?> </td>
                                    <td class="d-flex flex-wrap">
                                        <a href="<?php echo e(route('admin.quyy.detail', ['uid' => $item->uid])); ?>"><button class="btn btn-sm btn-mwith btn-primary">Chỉnh sửa</button></a>
                                        <a href="<?php echo e(route('client.quyy.detail', ['uid' => $item->uid])); ?>" target="_blank" class="btn mt-2 btn-mwith btn-sm btn-warning">Xem Thẻ</a>
                                        <a href="<?php echo e(route('admin.quyy.destroy', ['uid' => $item->uid])); ?>"><button class="btn btn-sm mt-2 btn-mwith btn-danger">Xóa</button></a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="6">
                                        Danh Sách trống
                                    </td>
                                </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        <?php if(!empty($lists)): ?>
                            <?php echo e($lists->links('admin.layouts.pagination')); ?>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Dark table end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/quyy/index.blade.php ENDPATH**/ ?>