<?php $__env->startSection('content'); ?>
    <?php while(have_posts()): ?>
        <?php (the_post()); ?>
        
    <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/gebruiker/Desktop/projects/themetest/wp-content/themes/sage/resources/views/page.blade.php ENDPATH**/ ?>