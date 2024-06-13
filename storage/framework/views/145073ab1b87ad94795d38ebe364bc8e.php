<?php $__env->startSection('content'); ?>

    <!--  Header BreadCrumb -->
    <div class="content-header">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><i class="material-icons">home</i>Home</a></li>
        
        <li class="breadcrumb-item active" aria-current="page">Create new job</li>
        </ol>
    </nav>
    <div class="create-item">
        <a href="/dashboard/jobs" class="theme-primary-btn btn btn-primary"><i class="material-icons">arrow_back</i>&nbsp;Back to jobs</a>
        
        
    </div>
</div>
    <!--  Header BreadCrumb --> 



<div class="card bg-white">
    <div class="card-body mt-1 mb-5">

        <form action="<?php echo e(route('adminJobStore')); ?>" method="post">
            <?php echo csrf_field(); ?>

            <div class="form-group row">
                <div class="col-md-2">Company name</div>
                <div class="col-md-4">
                    <select name="company_id" id="company_id" class="form-control">
                        <?php $__currentLoopData = App\Models\Company::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      
                        <option value="<?php echo e($company->id); ?>"><?php echo e($company->cname); ?></option>
                     
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <input type="hidden" name="company_id" value="<?php echo e($company->id); ?>">
                    </select>
              


                 </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">Job Title</div>
                <div class="col-md-4">
                    <input type="text" name="title" value="<?php echo e(old('title')); ?>" class="form-control<?php echo e($errors->has('title') ? ' is-invalid' : ''); ?>">
                    <?php if($errors->has('title')): ?>
                        <div style="color:red">
                            <p class="mb-0"><?php echo e($errors->first('title')); ?></p>
                        </div>
                    <?php endif; ?>

                 </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">Job Position</div>
                <div class="col-md-4">
                    <input type="text" name="position" value="<?php echo e(old('position')); ?>" class="form-control<?php echo e($errors->has('position') ? ' is-invalid' : ''); ?>">
                    <?php if($errors->has('position')): ?>
                        <div style="color:red">
                            <p class="mb-0"><?php echo e($errors->first('position')); ?></p>
                        </div>
                    <?php endif; ?>

                 </div>
            </div>

            <div class="form-group row">
                <div class="col-md-2">Year of experience</div>
                <div class="col-md-4">
                    <input type="text" name="experience" class="form-control<?php echo e($errors->has('experience') ? ' is-invalid' : ''); ?>"  value="<?php echo e(old('experience')); ?>">
                    <?php if($errors->has('experience')): ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('experience')); ?></strong>
                    </span>
                     <?php endif; ?>

                 </div>
            </div>

            <div class="form-group row">
                <div class="col-md-2">Job Type</div>
                <div class="col-md-4">
                    <select name="type" id="type" class="form-control">
                        <option value="fulltime">Fulltime</option>
                        <option value="partime">Partime</option>
                        <option value="remote">Remote</option>
                    </select>
                    <?php if($errors->has('type')): ?>
                        <div style="color:red">
                            <p class="mb-0"><?php echo e($errors->first('type')); ?></p>
                        </div>
                    <?php endif; ?>
             
                 </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">Category</div>
                <div class="col-md-4">
                    <select name="category" id="category" class="form-control">
                        <?php $__currentLoopData = App\Models\Category::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></option>
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php if($errors->has('category')): ?>
                        <div style="color:red">
                            <p class="mb-0"><?php echo e($errors->first('category')); ?></p>
                        </div>
                    <?php endif; ?>


                 </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">Address</div>
                <div class="col-md-4">
                    <input type="text" name="address" value="<?php echo e(old('address')); ?>" class="form-control<?php echo e($errors->has('address') ? ' is-invalid' : ''); ?>">
                    <?php if($errors->has('address')): ?>
                        <div style="color:red">
                            <p class="mb-0"><?php echo e($errors->first('address')); ?></p>
                        </div>
                    <?php endif; ?>
                 </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">Role</div>
                <div class="col-md-6">
                    <textarea name="roles" style="height: 140px" class="form-control<?php echo e($errors->has('roles') ? ' is-invalid' : ''); ?>" ><?php echo e(old('roles')); ?></textarea>
                    <?php if($errors->has('roles')): ?>
                        <div style="color:red">
                            <p class="mb-0"><?php echo e($errors->first('roles')); ?></p>
                        </div>
                    <?php endif; ?>

                 </div>
            </div>

            <div class="form-group row">
                <div class="col-md-2">Description</div>
                <div class="col-md-6">
                    <textarea name="description" id="editor" style="height: 120px"  class="form-control<?php echo e($errors->has('description') ? ' is-invalid' : ''); ?>" ><?php echo e(old('description')); ?></textarea>
                    <?php if($errors->has('description')): ?>
                        <div style="color:red">
                            <p class="mb-0"><?php echo e($errors->first('description')); ?></p>
                        </div>
                    <?php endif; ?>
                 </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">Nomber of vacancy</div>
                <div class="col-md-4">
                    <input type="text" name="number_of_vacancy" class="form-control<?php echo e($errors->has('number_of_vacancy') ? ' is-invalid' : ''); ?>" value="<?php echo e(old('number_of_vacancy')); ?>" >
                    <?php if($errors->has('number_of_vacancy')): ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('number_of_vacancy')); ?></strong>
                    </span>
                     <?php endif; ?>
                 </div>
            </div>

            <div class="form-group row">
                <div class="col-md-2">Gender</div>
                <div class="col-md-4">
                    <select class="form-control" name="gender">
                        <option value="any">Any</option>
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>
                 </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">Salary/year</div>
                <div class="col-md-4">
                    <select class="form-control" name="salary">
                        <option value="negotiable">Negotiable</option>
                        <option value="2000-5000">2000-5000</option>
                        <option value="50000-10000">5000-10000</option>
                        <option value="10000-20000">10000-20000</option>
                        <option value="30000-500000">50000-500000</option>
                        <option value="500000-600000">500000-600000</option>
    
                        <option value="600000 plus">600000 plus</option>
                    </select>
                 </div>
            </div>


            <div class="form-group row">
                <div class="col-md-2">Status</div>
                <div class="col-md-4">
                    <select name="status" id="status" class="form-control">
                        <option value="1">Live</option>
                        <option value="0">Draft</option>
                    </select>
                    <?php if($errors->has('status')): ?>
                        <div style="color:red">
                            <p class="mb-0"><?php echo e($errors->first('status')); ?></p>
                        </div>
                    <?php endif; ?>
                 </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2 ">Job apply last date</div>
                <div class="col-md-4">
                    <input type="date" name="last_date" value="<?php echo e(old('last_date')); ?>" class="form-control<?php echo e($errors->has('last_date') ? ' is-invalid' : ''); ?>">
                    <?php if($errors->has('last_date')): ?>
                        <div style="color:red">
                            <p class="mb-0"><?php echo e($errors->first('last_date')); ?></p>
                        </div>
                    <?php endif; ?>

                 </div>
            </div>
            <div class="form-group pt-2 row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <button class="theme-primary-btn btn btn-success" type="submit">Post job</button>
                 
                 </div>
            </div>

        </form>
  
    </div>
</div>  

<?php $__env->stopSection(); ?>

<?php echo $__env->make('../admin/layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH O:\OSPanel\domains\JobFinder-Job-Portal-Laravel-Vue-Script-main\resources\views/admin/jobs/create.blade.php ENDPATH**/ ?>