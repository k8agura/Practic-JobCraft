<?php $__env->startSection('content'); ?>

       <!--  Header BreadCrumb -->
       <div class="content-header">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><i class="material-icons">home</i>Панель</a></li>
            
            <li class="breadcrumb-item active" aria-current="page">Кандидаты</li>
          </ol>
        </nav>
        <div class="create-item">    
          
        </div>
    </div>
      <!--  Header BreadCrumb --> 

        <!-- Users DataTable-->
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card bg-white">
                    <div class="card-body mt-3">
                      <div class="table-responsive">
                          <table id="usersTable" class="table table-striped table-borderless" style="width:100%">
                            <thead>
                                <tr>
                                    <th>№</th>
                               
                                    <th>Имя кандидата</th>
                                    <th>Статус email</th>
                                    <th>Статус</th>
                                   
                                    <th>Действие</th>
                                </tr>
                            </thead>
                            <tbody>


                                <?php $i=0; ?>
                                <?php $__currentLoopData = $candidates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $i++ ?>
                                    
    
                                    <tr>
                                        <td><?php echo e($i); ?></td>
                                        
                                        <td><?php echo e($candidate->name); ?></td>
                                        <td>
                                            
                                            <?php if($candidate->email_verified_at): ?>
                                            <i class="material-icons  alert-success">check_circle</i>
                                            <?php else: ?>
                                            <i class="material-icons  alert-danger">close</i>
                                            <?php endif; ?>

                                        </td>
                                        <td>
                                            <?php if($candidate->status == '0'): ?>
                                                <a  class="badge badge-lg badge-danger text-white" href="<?php echo e(route('adminCanToggle',[$candidate->id])); ?>"
                                                    ><?php echo e(__('Deactive')); ?></a>


                                            <?php else: ?>

                                                <a  class="badge badge-lg badge-success text-white" href="<?php echo e(route('adminCanToggle',[$candidate->id])); ?>"
                                                    ><?php echo e(__('Active')); ?></a>

                                               

                                            <?php endif; ?>
                                            
                                        </td>
                                       
                                        <td style="width: 18%">
                                            <a  class="btn btn-sm btn-info" href="<?php echo e(route('adminEditCan',[$candidate->id])); ?>"><i class="material-icons">edit</i></a> 


                                          <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#candidateDelete-<?php echo e($candidate->id); ?>" type="button"><i class="material-icons">delete</i></button>

                                            <!-- Delete modal -->
                                            <div class="modal fade" id="candidateDelete-<?php echo e($candidate->id); ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel-<?php echo e($candidate->id); ?>" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title text-center" id="staticBackdropLabel-<?php echo e($candidate->id); ?>">Кандидат: <?php echo e($candidate->name); ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <h4>Вы хотите удалить кандидата?</h4>
                                                    </div>
                                                    <form action="<?php echo e(route('adminCanDelete',[$candidate->id])); ?>" method="POST">
                                                        <?php echo csrf_field(); ?>
                                                        <div class="modal-footer">
                                                            <input type="hidden" name="id" value="<?php echo e($candidate->id); ?>">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">отмена</button>
                                                            <button type="submit" class="btn btn-danger">Удалить</button>
                                                        </div>
                                                    </form>


                                                </div>
                                                </div>
                                            </div>



                                        </td>
                                    </tr>
                                    
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             



                        </table>
                      </div>
                    </div>
                </div>
            </div>

        </div>

         <!-- Users DataTable-->   

<?php $__env->stopSection(); ?>

<?php echo $__env->make('../admin/layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH O:\OSPanel\domains\JobFinder-Job-Portal-Laravel-Vue-Script-main\resources\views/admin/candidates/index.blade.php ENDPATH**/ ?>