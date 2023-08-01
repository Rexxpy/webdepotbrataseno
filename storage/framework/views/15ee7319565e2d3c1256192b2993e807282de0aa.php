

<?php $__env->startSection('container'); ?>
    
    <a href="/dashboard/produk" class="btn btn-success mt-5"><span data-feather="arrow-left"></span> Kembali</a>

    <div class="mt-4">
        <img src="<?php echo e(url('storage/'.$produk->image)); ?>"
        style="width: 50%;">
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\andik\Documents\app\proyekeas\resources\views/dashboard/produk/show.blade.php ENDPATH**/ ?>