

<?php $__env->startSection('title', 'Crear Puesto'); ?>

<?php $__env->startSection('body'); ?>
    <h1>Agregar puesto</h1>
    <form action="<?php echo e(route('puestos.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-briefcase"></i></span>
            <input type="text" name="puesto" class="form-control" placeholder="Nombre del puesto" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
            <textarea name="descripcion" class="form-control" placeholder="Descripción" rows="3" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Añadir puesto</button>
        <a href="<?php echo e(route('puestos.index')); ?>" class="btn btn-secondary">Cancelar</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ordinario\resources\views/puestos/create.blade.php ENDPATH**/ ?>