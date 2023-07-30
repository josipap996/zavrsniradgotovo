@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-7 m-auto">
            <div class="mi-card">
                <!--start of mi-fc-card-->
                <div class="mi-header warning">
                    <!--mi card header started-->EDIT USERS
                </div>
                <!--end of mi card header-->
                <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                    <div class="mi-body">
                        <!--mi-card body started--> <input name="_token" type="hidden" value="{{ csrf_token() }}"> <input
                            name="id" type="hidden" value="{{ $data->id }}">
                        <div class="row">
                            <div class="col-sm-6">
                            <div class="form-group"><label>NAME <b class="text-danger">*</b> </label><input type="text"
                                    placeholder="NAME" name="name" id="name" class="form-control"
                                    value="{{ old('name') ? old('name') : $data->name }}" required> </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group"><label>USERNAME <b class="text-danger">*</b> </label><input
                                    type="text" placeholder="USERNAME" name="username" id="username"
                                    class="form-control" value="{{ old('username') ? old('username') : $data->username }}"
                                    required> </div>
                        </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group"><label>EMAIL <b class="text-danger">*</b> </label><input type="text"
                                    placeholder="EMAIL" name="email" id="email" class="form-control"
                                    value="{{ old('email') ? old('email') : $data->email }}" required> </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group"><label>ROLE ID <b class="text-danger">*</b> </label> <select
                                    class="form-control" id="role_id" name="role_id" required>
                                    <option selected>SELECT ONE </option>
                                    @foreach ($roles as $option)
                                        <option value="{{ $option->id }}"
                                            {{ $data->role_id == $option->id ? 'Selected' : '' }}>{{ $option->name }}</option>
                                    @endforeach
                                </select> </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group"><label>PASSWORD <b class="text-danger">*</b> </label><input
                                    type="text" placeholder="PASSWORD" name="password" id="password"
                                    class="form-control"
                                    > </div>
                        </div>
                    </div>
                    <!--end of mi-card-body-->
                    <div class="mi-footer">
                        <!--mi-card footer started-->
                        <div class="row">
                            <div class="col-sm-4 m-auto"> <button type="submit" class="butn warning w-100"> UPDATE
                                </button> </div>
                        </div>
                    </div>
                    <!--end of mi-card-footer-->
                </form>
            </div>
            <!--end of mi-fc-card-->
        </div>
    </div>
@endsection
