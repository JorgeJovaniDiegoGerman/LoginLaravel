<div class="row g-4">
    <div class="col-sm-12 col-xl-12">
        <div class="bg-light rounded h-100 p-4">
            <div class="bg-success">
                <h1>Alta de Administradores</h1>
                @if(Session::has('mensaje'))
                <div class="alert alert-success" style="text-align:center">
                    {{ Session::get('mensaje') }}</div>
                @endif
            </div>

            <form action="/register" method="POST">
                {{ csrf_field() }}
                <div class="row mb-3">
                    <label for="name_admin" class="col-sm-5 col-form-label">Nombre(s)</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="name_admin" id="name_admin"
                        value="{{ old('name_admin') }}">
                        @if($errors->first('name_admin'))
                        <p>{{$errors->first('name_admin')}}</p>
                        @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="app" class="col-sm-5 col-form-label">Apellido Paterno</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="app" id="app"
                        value="{{ old('app') }}">
                        @if($errors->first('app'))
                        <p>{{$errors->first('app')}}</p>
                        @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="apm" class="col-sm-5 col-form-label">Apellido Paterno</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="apm" id="apm"
                        value="{{ old('apm') }}">
                        @if($errors->first('apm'))
                        <p>{{$errors->first('apm')}}</p>
                        @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-5 col-form-label">Correo</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="email" id="email"
                        value="{{ old('email') }}">
                        @if($errors->first('email'))
                        <p>$errors->first('email')</p>
                        @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="password" class="col-sm-5 col-form-label">Contraseña</label>
                    <div class="col-sm-7">
                        <input type="password" class="form-control" name="password" id="password">
                        @if($errors->first('password'))
                        <p>{{$errors->first('password')}}</p>
                        @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="password_confirmation" class="col-sm-5 col-form-label">Confirma Contraseña</label>
                    <div class="col-sm-7">
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
                        @if($errors->first('password_confirmation'))
                        <p>{{$errors->first('password_confirmation')}}</p>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <button class="btn btn-outline-success m-2">Crear</button>
                </div>
            </form>

        </div>
    </div>
</div>