<?php $__env->startSection('content'); ?>
       <!--  Header BreadCrumb -->
       <div class="content-header">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><i class="material-icons">home</i>Панель</a></li>
            
            <li class="breadcrumb-item active" aria-current="page">Редактирование : <?php echo e($employer->company->cname ?? ''); ?></li>
          </ol>
        </nav>
        <div class="create-item">
            <a href="/dashboard/employers" class="theme-primary-btn btn btn-primary"><i class="material-icons">arrow_back</i>&nbsp;
        Вернуться к компаниям</a>
          
        </div>
    </div>
      <!--  Header BreadCrumb --> 


<div class="card bg-white">
    <div class="card-body mt-1 mb-5">

        <form action="<?php echo e(route('adminEmpUpdate', [$employer->id])); ?>" method="post">
            <?php echo csrf_field(); ?>

            <div class="form-group row">
                <div class="col-md-2">Название компании</div>
                <div class="col-md-4">
                    <input type="text" name="cname" value="<?php echo e($employer->company->cname); ?>" class="form-control<?php echo e($errors->has('cname') ? ' is-invalid' : ''); ?>">
                    <?php if($errors->has('cname')): ?>
                        <div style="color:red">
                            <p class="mb-0"><?php echo e($errors->first('cname')); ?></p>
                        </div>
                    <?php endif; ?>

                 </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2"> Email</div>
                <div class="col-md-4">
                    <input type="email" name="email" value="<?php echo e($employer->email); ?>" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>">
                    <?php if($errors->has('email')): ?>
                        <div style="color:red">
                            <p class="mb-0"><?php echo e($errors->first('email')); ?></p>
                        </div>
                    <?php endif; ?>

                 </div>
            </div>

            <div class="form-group row">
                <div class="col-md-2">Адрес </div>
                <div class="col-md-4">
                    <input type="text" name="address" value="<?php echo e($employer->company->address ?? ''); ?>" class="form-control<?php echo e($errors->has('address') ? ' is-invalid' : ''); ?>">
                    <?php if($errors->has('address')): ?>
                        <div style="color:red">
                            <p class="mb-0"><?php echo e($errors->first('address')); ?></p>
                        </div>
                    <?php endif; ?>

                 </div>
            </div>


            <div class="form-group row">
                <div class="col-md-2"> Веб-сайт</div>
                <div class="col-md-4">
                    <input type="text" name="website" value="<?php echo e($employer->company->website ?? ''); ?>" class="form-control<?php echo e($errors->has('website') ? ' is-invalid' : ''); ?>">
                    <?php if($errors->has('website')): ?>
                        <div style="color:red">
                            <p class="mb-0"><?php echo e($errors->first('website')); ?></p>
                        </div>
                    <?php endif; ?>

                 </div>
            </div>

            <div class="form-group row">
                <div class="col-md-2">Номер телефона</div>
                <div class="col-md-4">
                    <input type="text" name="phone" value="<?php echo e($employer->company->phone ?? ''); ?>" class="form-control<?php echo e($errors->has('phone') ? ' is-invalid' : ''); ?>">
                    <?php if($errors->has('phone')): ?>
                        <div style="color:red">
                            <p class="mb-0"><?php echo e($errors->first('phone')); ?></p>
                        </div>
                    <?php endif; ?>

                 </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">Описание</div>
                <div class="col-md-6">
                    <textarea name="description" style="height: 140px" class="form-control" ><?php echo e($employer->company->description ?? ''); ?></textarea>
                    <?php if($errors->has('description')): ?>
                        <div style="color:red">
                            <p class="mb-0"><?php echo e($errors->first('description')); ?></p>
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

<?php echo $__env->make('../admin/layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH O:\OSPanel\domains\JobFinder-Job-Portal-Laravel-Vue-Script-main\resources\views/admin/employers/edit.blade.php ENDPATH**/ ?>