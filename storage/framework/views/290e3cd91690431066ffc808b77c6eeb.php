<?php $__env->startSection('title','Dashboard'); ?>

<?php $__env->startSection('content'); ?>

<h1 class="text-center">Dashboard</h1>


<div class="container">
    <!-- Alert Section for version upgrade-->
    <div id="alertSection" class="<?php echo e($alertVersionUpgradeEnable==true ? null : 'd-none'); ?> alert alert-primary alert-dismissible fade show" role="alert">
        <p id="announce" class="<?php echo e($alertVersionUpgradeEnable==true ? null : 'd-none'); ?>"><strong>Announce !!!</strong> A new version <?php echo e(config('auto_update.VERSION')); ?> <span id="newVersionNo"></span> has been released. Please <i><b><a href="<?php echo e(route('new-release')); ?>">Click here</a></b></i> to check upgrade details.</p>
        <button type="button" id="closeButtonUpgrade" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <!-- Alert Section for Bug update-->
    <div id="alertBugSection" class=" <?php echo e($alertBugEnable==true ? null : 'd-none'); ?> alert alert-primary alert-dismissible fade show" style="background-color: rgb(248,215,218)" role="alert">
        <p id="alertBug" class=" <?php echo e($alertBugEnable==true ? null : 'd-none'); ?> " style="color: rgb(126,44,52)"><strong>Alert !!!</strong> Minor bug fixed in version <?php echo e(env('VERSION')); ?>. Please <i><b><a href="<?php echo e(route('bug-update-page')); ?>">Click here</a></b></i> to update the system.</p>
        <button type="button" style="color: rgb(126,44,52)" id="closeButtonBugUpdate" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/auto-update/resources/views/dashboard.blade.php ENDPATH**/ ?>