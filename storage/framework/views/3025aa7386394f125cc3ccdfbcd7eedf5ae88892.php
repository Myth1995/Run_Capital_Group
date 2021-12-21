    <table class="display" id="row-select-multiple">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Invoicd ID</th>
                <th>Start date</th>
                <th>Salary</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $ary; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($el['name']); ?></td>
                <td><?php echo e($el['position']); ?></td>
                <td><?php echo e($el['invoiceID']); ?></td>
                <td><?php echo e($el['startDate']); ?></td>
                <td><?php echo e($el['salary']); ?></td>
                <td><img src="<?php echo e(asset('assets/images/dashboard/datatable_check.png')); ?>" alt="" height="20px"/></td>
                <td><img src="<?php echo e(asset('assets/images/dashboard/datatable_check.png')); ?>" alt="" height="20px"/></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php /**PATH E:\Project12_7\Run Capital Group\resources\views/admin/dashboard/table.blade.php ENDPATH**/ ?>