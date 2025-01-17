@extends('layouts.main')

@section('content')
<div style="height: 94px;"></div>

<div class="unit-5 overlay" style="background-image: url({{ asset('external/images/hero_2.jpg') }});">
  <div class="container text-center">
    <h1 class="mb-0" style="    color: #fff;
    font-size: 2.5rem;">My all Jobs</h1>
    <p class="mb-0 unit-6"><a href="/">На главную</a> <span class="sep"> > <a href="{{ route('alljobs') }}">Вакансии</a> </span> <span><span class="sep m-0"> ></span> Вакансии</span></p>
  </div>
</div>

<div class="site-section bg-light">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h2>Все последние вакансии</h2></div>

                    <div class="card-body">
                        <table class="table text-center">
                            <thead>
                            <tr>
                                <th scope="col">№</th>
                                <th scope="col">Название:</th>
                                <th scope="col">Тип работы:</th>
                                <th scope="col">Вакансия опубликована:</th>
                                <th scope="col">Статус:</th>
                                <th scope="col">Действие:</th>
                            </tr>
                            </thead>
                            <tbody>

                                <?php $i=0; ?>
                                @foreach ($jobs as $job)
                                <?php $i++; ?>
                                    <tr>
                                        <th scope="row">{{ $i }}</th>

                                        <td width="25%">{{ $job->title }}</td>
                                        
                                        <td><span class="badge badge-secondary">{{ Str::ucfirst($job->type) }}</span></td>
                                        <td><span class="badge badge-info">{{ $job->created_at->diffForHumans() }}</span></td>



                                        <td>

                                            @if ($job->status == '0')
                                                <a  class="badge badge-lg badge-danger text-white" href="{{ route('job.toggle',[$job->id]) }}"
                                                    >{{ __('Черновик') }}</a>


                                            @else

                                                <a  class="badge badge-lg badge-success text-white" href="{{ route('job.toggle',[$job->id]) }}"
                                                    >{{ __('Активна') }}</a>

                                               

                                            @endif
                                            
                                        </td>





                                        <td width="20%">
                                            
                                        
                                        &nbsp;<a class="btn btn-success btn-sm" href="{{ route('job.show', [$job->id, $job->slug]) }}">Просмотреть</a>
                                            &nbsp;<a href="{{ route('job.edit', [$job->id]) }}" class="btn btn-secondary btn-sm">Отредактировать</a>
                                            &nbsp;<button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#companyJobDelete-{{ $job->id }}" type="button">Удалить</button>

                                            <!-- Delete modal -->
                                            <div class="modal fade" id="companyJobDelete-{{ $job->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel-{{ $job->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title text-center" id="staticBackdropLabel-{{ $job->id }}">Название вакансии : {{ $job->title }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <h4> Вы хотите удалить?</h4>
                                                    </div>
                                                    <form action="{{ route('job.delete',[$job->id]) }}" method="POST">
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
                    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
