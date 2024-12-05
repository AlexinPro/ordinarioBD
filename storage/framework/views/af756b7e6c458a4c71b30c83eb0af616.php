

<?php $__env->startSection('title', 'Editar Departamento'); ?>

<?php $__env->startSection('body'); ?>
    <h1>Editar Departamento</h1>
    <form action="<?php echo e(route('departamentos.update', $departamentos->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        
        <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-building"></i></span>
            <input type="text" name="departamento" class="form-control" placeholder="Nombre del Departamento" 
                   value="<?php echo e($departamentos->departamento); ?>" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-briefcase"></i></span>
            <select name="puesto_id" class="form-control" required>
                <option value="">Seleccione un puesto</option>
                <?php $__currentLoopData = $puestos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $puesto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($puesto->id); ?>" 
                        <?php echo e($departamentos->puesto_id == $puesto->id ? 'selected' : ''); ?>>
                        <?php echo e($puesto->puesto); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Guardar Cambios</button>
        <a href="<?php echo e(route('departamentos.index')); ?>" class="btn btn-secondary">Cancelar</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ordinario\resources\views/Departamentos/edit.blade.php ENDPATH**/ ?>