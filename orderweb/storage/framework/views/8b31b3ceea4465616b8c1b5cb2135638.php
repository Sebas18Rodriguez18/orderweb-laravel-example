<div class="row">
    <div class="col-lg-12">
        <?php if(session('message')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('message')); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>            
        <?php endif; ?>
        <?php if(session('warning')): ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo e(session('warning')); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>            
        <?php endif; ?> 
        <?php if(session('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo e(session('error')); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>            
        <?php endif; ?>
    </div>    
</div>
<div class="row">
    <div class="col-lg-12">
        <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>    
</div>
<?php /**PATH C:\xampp\htdocs\orderweb-laravel-example\orderweb\resources\views/templates/messages.blade.php ENDPATH**/ ?>