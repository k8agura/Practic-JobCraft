<?php $__env->startSection('content'); ?>
<div style="height: 95px;"></div>
<div class="unit-5 overlay" style="background-image: url(<?php echo e(asset('external/images/hero_2.jpg')); ?>)">
    <div class="container text-center">
      <h1 class="mb-0" style="    color: #fff;
      font-size: 2.5rem;">Профиль</strong></h1>
      <p class="mb-0 unit-6"><a href="/">На главную</a> <span class="sep"> > <a href="<?php echo e(route('alljobs')); ?>">Профиль</a> </span> <span><span class="sep m-0"> ></span><?php echo e(Auth::user()->name); ?></span></p>
    </div>
</div>
  

<div class="site-section bg-light">

    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <div class="card">
                <div class="card-header">
                    Обновите ваш профиль
                </div>
                <div class="card-body">
                        <form action="<?php echo e(route('profile.create')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                        
                            <div class="form-group">
                                <label for="">Адресс</label>
                                <input type="text" class="form-control<?php echo e($errors->has('address') ? ' is-invalid' : ''); ?>" name="address" value="<?php echo e(Auth::user()->profile->address); ?>">
                        
                                <?php if($errors->has('address')): ?>
                                <div style="color:red">
                                    <p class="mb-0"><?php echo e($errors->first('address')); ?></p>
                                </div>
                                <?php endif; ?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="">Номер телефона</label>
                                <input type="text" class="form-control<?php echo e($errors->has('phone') ? ' is-invalid' : ''); ?>" name="phone" value="<?php echo e(Auth::user()->profile->phone); ?>">
                                <?php if($errors->has('phone')): ?>
                                <div style="color:red">
                                    <p class="mb-0"><?php echo e($errors->first('phone')); ?></p>
                                </div>
                                <?php endif; ?>


                            </div>
                            <div class="form-group mt-3">
                                <label for="">Опыт работы</label>
                                <input type="text" class="form-control<?php echo e($errors->has('experience') ? ' is-invalid' : ''); ?>" name="experience" value="<?php echo e(Auth::user()->profile->experience); ?>">
                                <?php if($errors->has('experience')): ?>
                                <div style="color:red">
                                    <p class="mb-0"><?php echo e($errors->first('experience')); ?></p>
                                </div>
                                <?php endif; ?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="">О себе</label>
                                <textarea name="bio" id="" style="height: 120px" class="form-control<?php echo e($errors->has('bio') ? ' is-invalid' : ''); ?>" cols="30" rows="10"><?php echo e(Auth::user()->profile->bio); ?></textarea>
                                <?php if($errors->has('bio')): ?>
                                <div style="color:red">
                                    <p class="mb-0"><?php echo e($errors->first('bio')); ?></p>
                                </div>
                                <?php endif; ?>

                            </div>
                            <div class="form-group mt-3">
                                <button class="btn btn-success">Обновить</button>
                            </div>
                            <?php if(Session::has('message')): ?>
                                <div class="alert alert-success mt-3 alert-dismissible fade show" role="alert">
                                    <strong>Вау круто !</strong> <?php echo e(Session::get('message')); ?>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            
                            <?php endif; ?>
                            

                        

                        </form>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <form action="<?php echo e(route('avatar')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="card">
                        <div class="card-header  mb-3">
                            Аватар
                        </div>
                        <?php if(!empty(Auth::user()->profile->avatar)): ?>
                        <img src="<?php echo e(asset('uploads/avatar')); ?>/<?php echo e(Auth::user()->profile->avatar); ?>" style="width:100px; height:100px;border-radius:100px;object-fit: cover; margin:0px auto" class="border  mb-3" alt="">
                        <?php else: ?>    
                        <img src="https://i.pravatar.cc/150" style="width:100px;border-radius:100px; margin:0px auto" class="border  mb-3" alt="">

                        <?php endif; ?>
                        <div class="card-body p-0 text-center">
                            <input type="hidden" name="avatar" value="avatar">
                            <input type="file" class="form-control<?php echo e($errors->has('avatar') ? ' is-invalid' : ''); ?>" name="avatar">
                            <button class="btn btn-success w-100 mt-3">Обновить</button>

                            <?php if($errors->has('avatar')): ?>
                                <div style="color:red">
                                    <p class="mb-0"><?php echo e($errors->first('avatar')); ?></p>
                                </div>
                            <?php endif; ?>


                            <?php if(Session::has('avatar')): ?>
                                <div class="alert alert-success mt-3 alert-dismissible fade show" role="alert">
                                    <?php echo e(Session::get('avatar')); ?>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

                                
                            <?php endif; ?>

                        </div>
                    </div>

                </form>

                <div class="card mt-3">
                    <div class="card-header">
                        О вас
                    </div>
                    <div class="card-body">
                        <p>ФИО:  <strong class="badge bg-secondary badge-primary"><?php echo e(Auth::user()->name); ?></strong></p>
                        <p>Email: <strong class="badge bg-secondary badge-primary"><?php echo e(Auth::user()->email); ?></strong> </p>
                        <p>Номер телефона: <strong class="badge bg-secondary badge-primary"><?php echo e(Auth::user()->profile->phone); ?> </strong> </p>
                        <p>Адрес: <strong class="badge bg-secondary badge-primary"> <?php echo e(Auth::user()->profile->address); ?></strong> </p>
                        <p>Пол: <strong class="badge bg-secondary badge-primary"> <?php echo e(Auth::user()->profile->gender); ?></strong> </p>
                        <p> <strong class="badge bg-secondary badge-primary">Опыт работы:</strong> <?php echo e(Auth::user()->profile->experience); ?> </p>
                        <p><strong class="badge bg-secondary badge-primary"> О себе: </strong> <?php echo e(Auth::user()->profile->bio); ?> </p>
                        <p>Зарегистрирован: <strong class="badge bg-secondary badge-primary"> <?php echo e(date('F d Y', strtotime(Auth::user()->created_at))); ?></strong> </p>

                        <?php if(!empty(Auth::user()->profile->cover_letter)): ?>
                            <p>Скачать сопроводительное письмо: <strong class="badge bg-info badge-primary"><a class="text-white" target="_blank" href="<?php echo e(url('storage/'.Auth::user()->profile->cover_letter)); ?>"> Сопроводительное письмо</a></strong></p>
                        <?php endif; ?>
                        <?php if(!empty(Auth::user()->profile->resume)): ?>
                            <p>Скачать резюме: <strong class="badge bg-info badge-primary"><a  class="text-white"target="_blank" href="<?php echo e(url('storage/'.Auth::user()->profile->resume)); ?>"> Резюме</a> </strong></p>
                        <?php endif; ?>

                    </div>
                </div>
            
                <form action="<?php echo e(route('cover.letter')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="card mt-3">
                        <div class="card-header">
                            Загрузить сопроводительное письмо
                        </div>
                        <div class="card-body">
                            <input type="file" class="form-control<?php echo e($errors->has('cover_letter') ? ' is-invalid' : ''); ?>" name="cover_letter">
                            <button class="btn btn-success mt-3">Обновить</button>

                        <?php if(Session::has('coverletter')): ?>
                            <div class="alert alert-success mt-3 alert-dismissible fade show" role="alert">
                                <strong>Вау !</strong> <?php echo e(Session::get('coverletter')); ?>

                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                        <?php if($errors->has('cover_letter')): ?>
                            <div style="color:red">
                                <p class="mb-0"><?php echo e($errors->first('cover_letter')); ?></p>
                            </div>
                        <?php endif; ?>
                

                        </div>
                    </div>
                </form>
                

                
                <form action="<?php echo e(route('resume')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                    <div class="card mt-3">
                        <div class="card-header">
                            Загрузить резюме
                        </div>
                        <div class="card-body">
                            
                            <input type="file" class="form-control<?php echo e($errors->has('resume') ? ' is-invalid' : ''); ?>" name="resume">
                            <button class="btn btn-success mt-3">Обновить</button>
                            <?php if(Session::has('resume')): ?>
                                <div class="alert alert-success mt-3 alert-dismissible fade show" role="alert">
                                    <strong>Вау !</strong> <?php echo e(Session::get('resume')); ?>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                
                            <?php endif; ?>

                            <?php if($errors->has('resume')): ?>
                                <div style="color:red">
                                    <p class="mb-0"><?php echo e($errors->first('resume')); ?></p>
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH O:\OSPanel\domains\JobFinder-Job-Portal-Laravel-Vue-Script-main\resources\views/frontend/profile/index.blade.php ENDPATH**/ ?>