<?php $__env->startSection('title', 'Crear causal'); ?>
<?php $__env->startSection('header', 'Crear causal'); ?>
<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12 mb-4">
        <form action="" method="post">
            <?php echo csrf_field(); ?>
            <div class="row form-group">
                <div class="col-lg-12 mb-4">
                    <label for="description">Descripción</label>
                    <input type="text" class="form-control" name="description" id="description" required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <button type="submit" class="btn btn-primary btn-block">Guardar</button>
                </div>
                <br><br>
                <div class="col-lg-6">
                    <a href="#" class="btn btn-secondary btn-block">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\orderweb-laravel-example\orderweb\resources\views/causal/create.blade.php ENDPATH**/ ?>