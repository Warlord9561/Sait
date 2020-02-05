@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Заказ</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
<form action="{{asset ('home')}}" method="post"style="padding: 15px">
	{{csrf_field()}}
          <p class="movie-input d-flex justify-content-between align-items-center" style="margin-top: 25px;"><span>Введите Ваше любимое число</span><input type="text" name="zakaz"></p>
    <p class="movie-input d-flex justify-content-between align-items-center"><span>Введите Имя Заказчика</span>  @error('zakazun')
                                    <span style="color: #ff2400 ">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror <input type="text" name="zakazun"></p>
       <p class="movie-input d-flex justify-content-between align-items-center"><span>Введите Адрес</span><input type="text" name="adress"></p>
       <p class="movie-input d-flex justify-content-between align-items-center"><span>Введите Номер телефона</span>
       	@error('telefon')
                                    <span style="color: #ff2400 ">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror<input type="text" name="telefon"></p>
      <p class="d-flex justify-content-center"><button class="addBtn from">Добавить Заказ</button></p>
    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
