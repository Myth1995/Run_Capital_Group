    <table class="display" id="row-select-multiple">
        <thead>
            <tr style="border-left-color: rgba(36, 105, 92, 0);">
                <th>Usuario Titular</th>
                <th>Transacciones</th>
                <th>Facturación</th>
                <th>Fecha</th>
                <th>Monto</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $ary; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td style="border-left-color: rgba(36, 105, 92, 0);"><?php echo e($el['name']); ?></td>
                <td><?php echo e($el['position']); ?></td>
                <td><?php echo e($el['invoiceID']); ?></td>
                <td><?php echo e($el['startDate']); ?></td>
                <td><?php echo e($el['salary']); ?></td>
                <td><div><img src="<?php echo e(asset('assets/images/dashboard/datatable_check.png')); ?>" alt="" height="25px"/></div></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php /**PATH E:\Project12_7\Run Capital Group\resources\views/admin/dashboard/table.blade.php ENDPATH**/ ?>