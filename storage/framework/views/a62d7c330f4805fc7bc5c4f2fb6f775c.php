<?php $__env->startSection('content'); ?>
<div style="height: 94px;"></div>

<div class="unit-5 overlay" style="background-image: url(<?php echo e(asset('external/images/hero_2.jpg')); ?>);">
    <div class="container text-center">
      <h1 class="mb-0" style="    color: #fff;
      font-size: 2.5rem;">Создать вакансию</h1>
      <p class="mb-0 unit-6"><a href="/">На главную</a> <span class="sep"> > <a href="<?php echo e(route('alljobs')); ?>">Вакансии</a> </span> <span><span class="sep m-0"> ></span> Создать</span></p>
    </div>
  </div>

<div class="site-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                

                <form action="<?php echo e(route('job.store')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="card">
                        <div class="card-header">
                            <h3>Создайте вакансию</h3>
                        </div>
        
                        <div class="card-body">

                            <div class="form-group">
                                <label for="title">Название вакансии:</label>
                                <input type="text" name="title" value="<?php echo e(old('title')); ?>" class="form-control<?php echo e($errors->has('title') ? ' is-invalid' : ''); ?>">
                                <?php if($errors->has('title')): ?>
                                    <div style="color:red">
                                        <p class="mb-0"><?php echo e($errors->first('title')); ?></p>
                                    </div>
                                <?php endif; ?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="position">Должность:</label>
                                <input type="text" name="position" value="<?php echo e(old('position')); ?>" class="form-control<?php echo e($errors->has('position') ? ' is-invalid' : ''); ?>">
                                <?php if($errors->has('position')): ?>
                                    <div style="color:red">
                                        <p class="mb-0"><?php echo e($errors->first('position')); ?></p>
                                    </div>
                                <?php endif; ?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="experience">Опыт работы:</label>
                                <input type="text" name="experience" class="form-control<?php echo e($errors->has('experience') ? ' is-invalid' : ''); ?>"  value="<?php echo e(old('experience')); ?>">
                                <?php if($errors->has('experience')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('experience')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
        
                            <div class="form-group mt-3">
                                <label for="type">Тип работы: </label>
                                <select name="type" id="type" class="form-control">
                                    <option value="fulltime">Полный день</option>
                                    <option value="partime">Частичная занятость</option>
                                    <option value="remote">Удалённо</option>
                                </select>
                                <?php if($errors->has('type')): ?>
                                    <div style="color:red">
                                        <p class="mb-0"><?php echo e($errors->first('type')); ?></p>
                                    </div>
                                <?php endif; ?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="category">Категория:</label>
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
                            <div class="form-group mt-3">
                                <label for="address">Адрес:</label>
                                <input type="text" name="address" value="<?php echo e(old('address')); ?>" class="form-control<?php echo e($errors->has('address') ? ' is-invalid' : ''); ?>">
                                <?php if($errors->has('address')): ?>
                                    <div style="color:red">
                                        <p class="mb-0"><?php echo e($errors->first('address')); ?></p>
                                    </div>
                                <?php endif; ?>

                            </div>
        
                            <div class="form-group mt-3">
                                <label for="roles">Описание вакансии:</label>
                                <textarea name="roles" id="roles" style="height: 80px" value="<?php echo e(old('roles')); ?>" class="form-control<?php echo e($errors->has('roles') ? ' is-invalid' : ''); ?>" ></textarea>
                                <?php if($errors->has('roles')): ?>
                                    <div style="color:red">
                                        <p class="mb-0"><?php echo e($errors->first('roles')); ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="form-group mt-3">
                                <label for="description">Описание компании:</label>
                                <textarea name="description" id="description" style="height: 120px" value="<?php echo e(old('description')); ?>" class="form-control<?php echo e($errors->has('description') ? ' is-invalid' : ''); ?>" ></textarea>
                                <?php if($errors->has('description')): ?>
                                    <div style="color:red">
                                        <p class="mb-0"><?php echo e($errors->first('description')); ?></p>
                                    </div>
                                <?php endif; ?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="number_of_vacancy">Количество вакансий:</label>
                                <input type="text" name="number_of_vacancy" class="form-control<?php echo e($errors->has('number_of_vacancy') ? ' is-invalid' : ''); ?>"  value="<?php echo e(old('number_of_vacancy')); ?>">
                                <?php if($errors->has('number_of_vacancy')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('number_of_vacancy')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                

                
                            <div class="form-group mt-3">
                                <label for="type">Пол:</label>
                                <select class="form-control" name="gender">
                                    <option value="any">Любой</option>
                                    <option value="male">Мужчина</option>
                                    <option value="female">женщина</option>
                                </select>
                            </div>
                
                            <div class="form-group mt-3">
                                <label for="type">Заработная плата:</label>
                                <select class="form-control" name="salary">
                                    <option value="negotiable">Договорная</option>
                                    <option value="2000-5000">2000-5000</option>
                                    <option value="50000-10000">5000-10000</option>
                                    <option value="10000-20000">10000-20000</option>
                                    <option value="30000-500000">50000-500000</option>
                                    <option value="500000-600000">500000-600000</option>
                
                                    <option value="600000 plus">600000 +</option>
                                </select>
                            </div>
                
                            <div class="form-group mt-3">
                                <label for="status">Статус: </label>
                                <select name="status" id="status" class="form-control">
                                    <option value="1">Активна</option>
                                    <option value="0">Черновик</option>
                                </select>
                                <?php if($errors->has('status')): ?>
                                    <div style="color:red">
                                        <p class="mb-0"><?php echo e($errors->first('status')); ?></p>
                                    </div>
                                <?php endif; ?>

                            </div>
        
                            
                            <div class="form-group mt-3">
                                <label for="last_date">Вакансия активна до:</label>
                                <input type="date" name="last_date" value="<?php echo e(old('last_date')); ?>" class="form-control<?php echo e($errors->has('last_date') ? ' is-invalid' : ''); ?>">
                                <?php if($errors->has('last_date')): ?>
                                    <div style="color:red">
                                        <p class="mb-0"><?php echo e($errors->first('last_date')); ?></p>
                                    </div>
                                <?php endif; ?>

                            </div>
                            
                            <div class="form-group mt-3">
                                <button class=" btn btn-dark" type="submit">Опубликовать</button>
                            </div>
                            
                            <?php if(Session::has('message')): ?>
                                <div class="alert alert-success mt-3 alert-dismissible fade show" role="alert">
                                    <strong>Вакансия опубликована !</strong> <?php echo e(Session::get('message')); ?>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            
                            <?php endif; ?>

                        </div>
                    </div>
                </form>



            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH O:\OSPanel\domains\JobFinder-Job-Portal-Laravel-Vue-Script-main\resources\views/frontend/jobs/create.blade.php ENDPATH**/ ?>