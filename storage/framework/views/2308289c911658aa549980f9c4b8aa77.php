

<?php $__env->startSection('tittle', 'PUESTOS'); ?>

<?php $__env->startSection('body'); ?>
<?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <?php if(session('error')): ?>
        <div class="alert alert-danger">
            <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3">Puestos</h1>
        <a href="<?php echo e(route('puestos.create')); ?>" class="btn btn-success">
            <i class="fa-solid fa-plus"></i> Añadir
        </a>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <th>#</th>
                        <th>Puesto</th>
                        <th>Descripcion</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $puestos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($p + 1); ?></td>
                            <td><?php echo e($row->puesto); ?></td>
                            <td><?php echo e($row->descripcion); ?></td>
                            <td>
                                <a class="btn btn-primary" href="<?php echo e(route('puestos.edit', $row->id)); ?>">
                                    <i class="fa-solid fa-building"></i>
                                </a>
                            </td>
                            <td>
                                <form action="<?php echo e(route('puestos.destroy', $row->id)); ?>" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este departamento?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ordinario\resources\views/Puestos/index.blade.php ENDPATH**/ ?>