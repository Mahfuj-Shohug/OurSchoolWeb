

<?php $__env->startSection('content'); ?>

<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title"> Create Events</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="<?php echo e(route('home')); ?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="breadcrumb-item active"><a href="<?php echo e(route('events.index')); ?>"> Events List</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li class="breadcrumb-item active">Create Events</li>

                </ol>
            </div>
        </div>
        <div class="card-head">
            <div class="d-flex justify-content-between align-items-center">
                <header>Uplode events here </header>
                <a href="<?php echo e(route('events.index')); ?>" class="btn btn-primary">Go Even list</a>
            </div>
        </div>

        <div class="card-body p-0">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">


                    <form action="<?php echo e(route('events.store')); ?>" method="POST">
						<?php echo csrf_field(); ?>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Event Name</label>
                                <input type="name" name="name" class="form-control" id="name" placeholder="Event Name">
                            </div>
                            <div class="form-group">
                                <label for="name">Event Description</label> <br>
                                <textarea name="description" id="description" cols="20" rows="5"
                                    class="from-control"></textarea>
                            </div>

                            
                            <div class="form-group">
                                <label for="name">Location</label>
                                <input type="text" name="location" class="form-control" id="location" placeholder="location">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Make it highlight event</label>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>




    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminbase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SchoolWeb\resources\views/admin/events/eventscreate.blade.php ENDPATH**/ ?>