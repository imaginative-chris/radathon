<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-main">
                    <div class="card-header"><?php echo e(__('Welcome to Airship')); ?></div>

                    <div class="card-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>

                    </div>
                    <div class="card-container">
                        <a href="<?php echo e(URL::to('/modules')); ?>"><div class="card modules">
                                <p>Modules</p>
                            </div></a>

                        <a href="<?php echo e(URL::to('/events')); ?>"><div class="card events">
                                <p>Live Events and Courses</p>
                            </div></a>

                        <a href="<?php echo e(URL::to('/events')); ?>"><div class="card resources">
                                <p>Resources</p>
                            </div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\projects\radathon\laravel\resources\views/landing.blade.php ENDPATH**/ ?>