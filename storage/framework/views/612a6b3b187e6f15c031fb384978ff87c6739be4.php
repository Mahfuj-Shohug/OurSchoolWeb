

<?php $__env->startSection('content'); ?>

<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Events Page</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="<?php echo e(route('home')); ?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="breadcrumb-item active">Events List</li>

                </ol>
            </div>
        </div>
        <div class="card-head">
            <div class="d-flex justify-content-between align-items-center">
                <header>All Events Here </header>
                <a href="<?php echo e(route('events.create')); ?>" class="btn btn-primary">Add Even</a>
            </div>
        </div>
        <div class="card-body ">
            <div class="table-responsive">
                <table class="table table-striped custom-table table-hover">
                    <thead>
                        <tr>
                            <th> ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Slug</th>
                            <th>time</th>
                            <th>Location</th>
                            <th>Action</th>
                        </tr>
					</thead>
                    <tbody>
						<?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($event-> id); ?></td>
                            <td><?php echo e($event-> name); ?></td>
                            <td> <?php echo e($event-> description); ?> </td>
                            <td><?php echo e($event-> slug); ?>

                            </td>
                            <td><?php echo e($event-> time); ?>

                            </td>
                            <td><?php echo e($event-> location); ?>

                            </td>
                            <td>
                             <a href="">  <button  class="btn btn-success btn-xs">
                                    <i class="fa fa-check"></i>
                                </button></a> 
                                <a href="<?php echo e(route('events.edit', [$event->id])); ?>"> <button class="btn btn-primary btn-xs">
                                    <i class="fa fa-pencil"></i>
                                </button></a>
                                <form action="<?php echo e(route ('events.destroy'. [$event->id])); ?>">
									<?php echo method_field; ?> 
									<?php echo csrf_field(); ?> 
								<button class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash-o "></i>
                                </button>
								</form> 
							</td>
							
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminbase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SchoolWeb\resources\views/admin/events/index.blade.php ENDPATH**/ ?>