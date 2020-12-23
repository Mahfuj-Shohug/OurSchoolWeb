

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
                                <li class="breadcrumb-item active"><a href="<?php echo e(route('events')); ?>"> Events List</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="breadcrumb-item active">Create Events</li>
								
							</ol>
						</div>
					</div>
                    <div class="card-head">
						<div class="d-flex justify-content-between align-items-center">
                        <header>All Events Here </header>
                        <a href="#" class="btn btn-primary">Add Even</a>
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
														<tr>
															<td>1</td>
															<td>Lorem Ipsum dorolo imit</td>
															<td>693030.00$</td>
															<td>slag location
															</td>
															<td>time 
															</td>
                                                            <td>Location 
															</td>
															<td>
																<button class="btn btn-success btn-xs">
																	<i class="fa fa-check"></i>
																</button>
																<button class="btn btn-primary btn-xs">
																	<i class="fa fa-pencil"></i>
																</button>
																<button class="btn btn-danger btn-xs">
																	<i class="fa fa-trash-o "></i>
																</button>
															</td>
													
													</tbody>
												</table>
											</div>
										</div>
                   
                </div>
            </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminbase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SchoolWeb\resources\views/admin/eventscreate.blade.php ENDPATH**/ ?>