<?php $__env->startSection('content'); ?>
       <!--  Header BreadCrumb -->
       <div class="content-header">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><i class="material-icons">home</i>Панель</a></li>
            
            <li class="breadcrumb-item active" aria-current="page">Редактирование : <?php echo e($category->name); ?></li>
          </ol>
        </nav>
        <div class="create-item">
            <a href="/dashboard/category" class="theme-primary-btn btn btn-primary"><i class="material-icons">arrow_back</i>&nbsp;Вернуться к категориям</a>
          
        </div>
    </div>
      <!--  Header BreadCrumb --> 


<div class="card bg-white">
    <div class="card-body mt-1 mb-5">

        <form action="<?php echo e(route('adminCatUpdate', [$category->id])); ?>" method="post">
            <?php echo csrf_field(); ?>

            <div class="form-group row">
                <div class="col-md-2">Название</div>
                <div class="col-md-4">
                    <input type="text" name="name" value="<?php echo e($category->name); ?>" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>">
                    <?php if($errors->has('name')): ?>
                        <div style="color:red">
                            <p class="mb-0"><?php echo e($errors->first('name')); ?></p>
                        </div>
                    <?php endif; ?>

                 </div>
            </div>

      
            <div class="form-group pt-2 row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <button class="theme-primary-btn btn btn-success" type="submit">Обновить</button>
                 
                 </div>
            </div>

        </form>
  
    </div>
</div>  

<?php $__env->stopSection(); ?>

<?php echo $__env->make('../admin/layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH O:\OSPanel\domains\JobFinder-Job-Portal-Laravel-Vue-Script-main\resources\views/admin/category/edit.blade.php ENDPATH**/ ?>