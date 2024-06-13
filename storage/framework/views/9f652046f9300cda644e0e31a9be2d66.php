

    
<?php echo $__env->make('../admin/partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
<?php echo $__env->make('../admin/partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('../admin/partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
<!--====== Start Main Wrapper Section======-->
<section class="d-flex" id="wrapper">
  
    <div class="page-content-wrapper">
        

        

          <!--  main-content -->   
        <div class="main-content">

            <?php echo $__env->yieldContent('content'); ?>

        </div>  
        <!--  main-content -->   
    </div> 

</section>

<!--====== End Main Wrapper Section======-->


<?php echo $__env->make('../admin/partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  <?php /**PATH O:\OSPanel\domains\JobFinder-Job-Portal-Laravel-Vue-Script-main\resources\views////admin/layouts/app.blade.php ENDPATH**/ ?>