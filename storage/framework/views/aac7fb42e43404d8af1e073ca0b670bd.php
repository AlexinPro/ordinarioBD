
<?php $__env->startSection('formDep'); ?>
    Crear
<?php $__env->stopSection(); ?>
<?php $__env->startSection('action'); ?>
    action = "<?php echo e(route('departamentos.store')); ?>"
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Departamentos.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ordinario\resources\views/Departamentos/create.blade.php ENDPATH**/ ?>