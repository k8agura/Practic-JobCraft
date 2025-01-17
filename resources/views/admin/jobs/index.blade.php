

@extends('../admin/layouts.app')

@section('content')
       <!--  Header BreadCrumb -->
       <div class="content-header">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="material-icons">home</i>Панель</a></li>
            
            <li class="breadcrumb-item active" aria-current="page">Вакансии</li>
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
                                    <th>Название</th>
                                    <th>Показывать?</th>
                                    <th>Дата создания</th>
                                    <th>Дата удаления</th>
                                    <th>тип работы</th>
                                    <th>Статус</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>


                                <?php $i=0; ?>
                                @foreach ($jobs as $job)
                                <?php $i++ ?>
                                    
    
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $job->title }}</td>
                                        <td>
                                            @if ($job->featured == '0')
                            
                                                <a class="badge badge-lg badge-secondary text-white" href="{{ route('adminJobFeatureToggle',[$job->id]) }}"
                                                >{{ __('Опубликовать') }}</a>
                              
                                              

                                            @else
                                                <a class="badge badge-lg badge-success text-white" href="{{ route('adminJobFeatureToggle',[$job->id]) }}"
                                                    >{{ __('Опубликованно') }}</a>

                                              


                                            @endif
                                            
                                        </td>
                                        <td><span class="badge badge-lg badge-info text-white">{{ date('F d, Y', strtotime($job->crated_at)) }}</span></td>

                                        <td> <span class="badge badge-lg badge-warning text-black">{{ date('F d, Y', strtotime($job->last_date)) }}</span></td>

                                        <td style="width: 8%"> <span class="badge badge-lg badge-secondary text-white">{{  Str::ucfirst($job->type)}}</span> </td>
                                       
                                        <td>
                                            @if ($job->status == '0')
                                                <a  class="badge badge-lg badge-danger text-white" href="{{ route('adminJobToggle',[$job->id]) }}"
                                                    >{{ __('Draft') }}</a>


                                            @else

                                                <a  class="badge badge-lg badge-success text-white" href="{{ route('adminJobToggle',[$job->id]) }}"
                                                    >{{ __('Active') }}</a>

                                               

                                            @endif
                                            
                                        </td>
                                        <td style="width: 18%">
                                            <a class="btn btn-sm btn-secondary" href="{{route('adminShow',[$job->id])}}"><i class="material-icons">remove_red_eye</i> </a>  
                                            <a  class="btn btn-sm btn-info" href="{{route('adminEdit',[$job->id])}}"><i class="material-icons">edit</i></a> 



                                            <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#jobDelete-{{ $job->id }}" type="button"><i class="material-icons">delete</i></button>

                                            <!-- Delete modal -->
                                            <div class="modal fade" id="jobDelete-{{ $job->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel-{{ $job->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title text-center" id="staticBackdropLabel-{{ $job->id }}">{{ $job->title }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <h4> Вы хотите удалить вакансию?</h4>
                                                    </div>
                                                    <form action="{{ route('adminDelete') }}" method="POST">
                                                        @csrf
                                                        <div class="modal-footer">
                                                            <input type="hidden" name="id" value="{{ $job->id }}">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                                                            <button type="submit" class="btn btn-danger">Удалить</button>
                                                        </div>
                                                    </form>


                                                </div>
                                                </div>
                                            </div>










                                        </td>
                                    </tr>
                                    
                                @endforeach
                             



                        </table>
                      </div>
                    </div>
                </div>
            </div>

        </div>

         <!-- Users DataTable-->   

@endsection
