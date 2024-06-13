@extends('layouts.main')

@section('content')
<div style="height: 94px;"></div>

<div class="unit-5 overlay" style="background-image: url({{ asset('external/images/hero_2.jpg') }});">
  <div class="container text-center">
    <h1 class="mb-0" style="    color: #fff;
    font-size: 1.5rem;">Отредактировать вакансию: {{ $job->title }}</h1>
    <p class="mb-0 unit-6"><a href="/">На главную</a> <span class="sep"> > <a href="{{ route('alljobs') }}">Вакансии</a> </span> <span><span class="sep m-0"> ></span> Вакансия</span></p>
  </div>
</div>

<div class="site-section bg-light">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    

                    <form action="{{ route('job.update', [$job->id]) }}" method="post">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h3>Отредактировать вакансию</h3>
                            </div>
            
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Title:</label>
                                    <input type="text" name="title" value="{{ $job->title }}" class="form-control">
                                    @if ($errors->has('title'))
                                        <div style="color:red">
                                            <p class="mb-0">{{ $errors->first('title') }}</p>
                                        </div>
                                    @endif

                                </div>
                                <div class="form-group mt-3">
                                    <label for="position">Должность:</label>
                                    <input type="text" name="position" value="{{ $job->position }}" class="form-control">
                                    @if ($errors->has('position'))
                                        <div style="color:red">
                                            <p class="mb-0">{{ $errors->first('position') }}</p>
                                        </div>
                                    @endif

                                </div>
                                <div class="form-group mt-3">
                                    <label for="experience">Опыт работы:</label>
                                    <input type="text" name="experience" class="form-control{{ $errors->has('experience') ? ' is-invalid' : '' }}"  value="{{ $job->experience }}">
                                    @if ($errors->has('experience'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('experience') }}</strong>
                                    </span>
                                    @endif
                                </div>
            
                                <div class="form-group mt-3">
                                    <label for="type">Тип работы: </label>
                                    <select name="type" id="type" class="form-control">
                                        <option value="fulltime"{{ $job->type=='Fulltime' ? 'selected':'' }}>Полный день</option>
                                        <option value="partime"{{ $job->type=='Partime' ? 'selected':'' }}>Частичная занятость</option>
                                        <option value="remote"{{ $job->type=='Remote' ? 'selected':'' }}>Удалённо</option>
                                        
                                    </select>
                                    @if ($errors->has('type'))
                                        <div style="color:red">
                                            <p class="mb-0">{{ $errors->first('type') }}</p>
                                        </div>
                                    @endif

                                </div>
                                <div class="form-group mt-3">
                                    <label for="category">Категория:</label>
                                    <select name="category_id" id="category_id" class="form-control">
                                        @foreach (App\Models\Category::all() as $cat)
                                        <option value="{{ $cat->id }}" {{ $cat->id==$job->category_id ? 'selected':'' }}>{{ $cat->name }}</option>
                                            
                                        @endforeach
                                    </select>
                                    @if ($errors->has('category'))
                                        <div style="color:red">
                                            <p class="mb-0">{{ $errors->first('category') }}</p>
                                        </div>
                                    @endif

                                </div>
                                <div class="form-group mt-3">
                                    <label for="address">Адрес:</label>
                                    <input type="text" name="address" value="{{ $job->address }}" class="form-control">
                                    @if ($errors->has('address'))
                                        <div style="color:red">
                                            <p class="mb-0">{{ $errors->first('address') }}</p>
                                        </div>
                                    @endif

                                </div>
            
                                <div class="form-group mt-3">
                                    <label for="roles">Описание должности:</label>
                                    <textarea name="roles" id="roles" style="height: 80px" class="form-control" >{{ $job->roles }}</textarea>
                                    @if ($errors->has('roles'))
                                        <div style="color:red">
                                            <p class="mb-0">{{ $errors->first('roles') }}</p>
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group mt-3">
                                    <label for="description">Описание вакансии:</label>
                                    <textarea name="description" id="description" style="height: 120px"  class="form-control" >{{ $job->description }}</textarea>
                                    @if ($errors->has('description'))
                                        <div style="color:red">
                                            <p class="mb-0">{{ $errors->first('description') }}</p>
                                        </div>
                                    @endif

                                </div>
            

                                <div class="form-group mt-3">
                                    <label for="number_of_vacancy">количество вакансий:</label>
                                    <input type="text" name="number_of_vacancy" class="form-control{{ $errors->has('number_of_vacancy') ? ' is-invalid' : '' }}"  value="{{ $job->number_of_vacancy }}">
                                    @if ($errors->has('number_of_vacancy'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('number_of_vacancy') }}</strong>
                                    </span>
                                    @endif
                                </div>
                    

                    
                                <div class="form-group mt-3">
                                    <label for="type">Пол:</label>
                                    <select class="form-control" name="gender">
                                        <option value="any"{{ $job->gender=='any' ? 'selected':'' }}>Любой</option>
                                        <option value="male"{{ $job->gender=='male' ? 'selected':'' }}>Мужчина</option>
                                        <option value="female"{{ $job->gender=='female' ? 'selected':'' }}>Женщина</option>
                                    
                                    </select>
                                </div>
                    
                                <div class="form-group mt-3">
                                    <label for="type">Заработная плата:</label>
                                    <select class="form-control" name="salary">
                                        <option value="negotiable"{{ $job->salary=='negotiable' ? 'selected':'' }}>договорная</option>
                                        <option value="2000-5000"{{ $job->salary=='2000-5000' ? 'selected':'' }}>2000-5000</option>
                                        <option value="50000-10000"{{ $job->salary=='50000-10000' ? 'selected':'' }}>5000-10000</option>
                                        <option value="10000-20000"{{ $job->salary=='10000-20000' ? 'selected':'' }}>10000-20000</option>
                                        <option value="30000-500000"{{ $job->salary=='30000-500000' ? 'selected':'' }}>50000-500000</option>
                                        <option value="500000-600000"{{ $job->salary=='500000-600000' ? 'selected':'' }}>500000-600000</option>
                    
                                        <option value="600000 plus"{{ $job->salary=='600000 plus' ? 'selected':'' }}>600000 +</option>
                                    </select>
                                </div>


                                <div class="form-group mt-3">
                                    <label for="status">Статус: </label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="1"{{ $job->status=='1' ? 'selected':'' }}>Активна</option>
                                        <option value="0"{{ $job->status=='0' ? 'selected':'' }}>Черновик</option>
                                    </select>
                                    @if ($errors->has('status'))
                                        <div style="color:red">
                                            <p class="mb-0">{{ $errors->first('status') }}</p>
                                        </div>
                                    @endif

                                </div>
            
                                
                                <div class="form-group mt-3">
                                    <label for="last_date">Вакансия активна до:</label>
                                    <input type="date" name="last_date" value="{{ $job->last_date }}" class="form-control">
                                    @if ($errors->has('last_date'))
                                        <div style="color:red">
                                            <p class="mb-0">{{ $errors->first('last_date') }}</p>
                                        </div>
                                    @endif

                                </div>
                                
                                <div class="form-group mt-3">
                                    <button class=" btn btn-dark" type="submit">Обновить вакансию</button>
                                </div>
                                
                            

                            </div>
                        </div>
                    </form>



                </div>
            </div>
        </div>
</div>
@endsection
