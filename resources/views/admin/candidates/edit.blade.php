@extends('../admin/layouts.app')



@section('content')
       <!--  Header BreadCrumb -->
       <div class="content-header">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="material-icons">home</i>Панель</a></li>
            
            <li class="breadcrumb-item active" aria-current="page">Редактировать : {{ $candidate->name }}</li>
          </ol>
        </nav>
        <div class="create-item">
            <a href="/dashboard/candidates" class="theme-primary-btn btn btn-primary"><i class="material-icons">arrow_back</i>&nbsp;Вернуться к кандидатам</a>
          
        </div>
    </div>
      <!--  Header BreadCrumb --> 


<div class="card bg-white">
    <div class="card-body mt-1 mb-5">

        <form action="{{ route('adminCanUpdate', [$candidate->id]) }}" method="post">
            @csrf

            <div class="form-group row">
                <div class="col-md-2">Имя</div>
                <div class="col-md-4">
                    <input type="text" name="name" value="{{ $candidate->name }}" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}">
                    @if ($errors->has('name'))
                        <div style="color:red">
                            <p class="mb-0">{{ $errors->first('name') }}</p>
                        </div>
                    @endif

                 </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">Email</div>
                <div class="col-md-4">
                    <input type="email" name="email" value="{{ $candidate->email }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}">
                    @if ($errors->has('email'))
                        <div style="color:red">
                            <p class="mb-0">{{ $errors->first('email') }}</p>
                        </div>
                    @endif

                 </div>
            </div>

            <div class="form-group row">
                <div class="col-md-2">Адрес</div>
                <div class="col-md-4">
                    <input type="text" name="address" value="{{ $candidate->profile->address ?? '' }}" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}">
                    @if ($errors->has('address'))
                        <div style="color:red">
                            <p class="mb-0">{{ $errors->first('address') }}</p>
                        </div>
                    @endif

                 </div>
            </div>

            <div class="form-group row">
                <div class="col-md-2">Пол</div>
                <div class="col-md-4">
                    <select class="form-control" name="gender">
                        <option value="any"{{ $candidate->profile->gender ?? '' =='any' ? 'selected':'' }}>Любой</option>
                        <option value="male"{{ $candidate->profile->gender ?? '' =='male' ? 'selected':'' }}>Мужчина</option>
                        <option value="female"{{ $candidate->profile->gender ?? '' =='female' ? 'selected':'' }}>Женщина</option>
                      
                    </select>
                 </div>
            </div>

            <div class="form-group row">
                <div class="col-md-2">Дата рождения</div>
                <div class="col-md-4">
                    <input type="date" name="dob" value="{{ $candidate->profile->dob ?? '' }}" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}">
                    @if ($errors->has('dob'))
                        <div style="color:red">
                            <p class="mb-0">{{ $errors->first('dob') }}</p>
                        </div>
                    @endif

                 </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">Опыт</div>
                <div class="col-md-4">
                    <input type="text" name="experience" value="{{ $candidate->profile->experience ?? '' }}" class="form-control{{ $errors->has('experience') ? ' is-invalid' : '' }}">
                    @if ($errors->has('experience'))
                        <div style="color:red">
                            <p class="mb-0">{{ $errors->first('experience') }}</p>
                        </div>
                    @endif

                 </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">Телефон</div>
                <div class="col-md-4">
                    <input type="text" name="phone" value="{{ $candidate->profile->phone ?? '' }}" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}">
                    @if ($errors->has('phone'))
                        <div style="color:red">
                            <p class="mb-0">{{ $errors->first('phone') }}</p>
                        </div>
                    @endif

                 </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">О кандидате</div>
                <div class="col-md-6">
                    <textarea name="bio" style="height: 140px" class="form-control" >{{ $candidate->profile->bio ?? '' }}</textarea>
                    @if ($errors->has('bio'))
                        <div style="color:red">
                            <p class="mb-0">{{ $errors->first('bio') }}</p>
                        </div>
                    @endif

                 </div>
            </div>

      
            <div class="form-group pt-2 row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <button class="theme-primary-btn btn btn-success" type="submit">Обновить профиль</button>
                 
                 </div>
            </div>

        </form>
  
    </div>
</div>  

@endsection
