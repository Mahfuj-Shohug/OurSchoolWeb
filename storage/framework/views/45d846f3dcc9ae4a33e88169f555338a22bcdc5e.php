

<?php $__env->startSection('content'); ?>

<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Teachers Page</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="<?php echo e(route('home')); ?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="breadcrumb-item active">Teachers List</li>

                </ol>
            </div>
        </div>
        <div class="card-head">
            <div class="d-flex justify-content-between align-items-center">
                <header>All Teacher</header>
                <a href="<?php echo e(route('teacher.create')); ?>" class="btn btn-primary">Add Teacher </a>
            </div>
        </div>
        <div class="card-body ">
            <div class="table-responsive">
                <table class="table table-striped custom-table table-hover">
                    <thead>
                        <tr>
                            <th> ID</th>
                            <th>image</th>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Mobile</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                    <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <td> <?php echo e($teacher->id); ?></td>
                    <td> <?php echo e($teacher->image); ?></td>
                    <td> <?php echo e($teacher->name); ?></td>
                    <td> <?php echo e($teacher->subject); ?></td>
                    <td> <?php echo e($teacher->phone); ?></td>
                    
                    </tr>
                       

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        

                    </tbody>
                    notings data added
                </table>
            </div>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminbase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SchoolWeb\resources\views/admin/teacher/index.blade.php ENDPATH**/ ?>