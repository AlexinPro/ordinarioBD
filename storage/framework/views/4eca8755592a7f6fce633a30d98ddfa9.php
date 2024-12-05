
<?php $__env->startSection('title'); ?>
     -<?php echo $__env->yieldContent('formDep'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
     <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="car-body">
                        <form <?php echo $__env->yieldContent('action'); ?> method="post" >
                            <?php echo $__env->yieldContent('method'); ?>
                            <?php echo csrf_field(); ?>
                            <div class="input group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-building"></i></span>
                                <input type="text" name="departamento" class="form-control" placeholder="Nombre" required>
                            </div>
                            <div class="input group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-building"></i></span>
                                <input type="text" name="puesto_id" class="form-control" placeholder="Puesto" required>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
     </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ordinario\resources\views/Departamentos/form.blade.php ENDPATH**/ ?>