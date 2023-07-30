@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-7 m-auto">
            <div class="mi-card">
                <!--start of mi-card-->
                <div class="mi-header info">
                    <!--mi card header started-->CREATE USERS
                </div>
                <!--end of mi card header-->
                <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                    <div class="mi-body">
                        <!--mi-card body started--> <input name="_token" type="hidden" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="form-group col-sm-6"><label>NAME <b class="text-danger">*</b> </label><input
                                    type="text" placeholder="NAME" name="name" id="name" class="form-control"
                                    required> </div>
                            <div class="form-group col-sm-6"><label>USERNAME <b class="text-danger">*</b> </label><input
                                    type="text" placeholder="USERNAME" name="username" id="username"
                                    class="form-control" required> </div>
                            <div class="form-group col-sm-12"><label>EMAIL <b class="text-danger">*</b> </label><input
                                    type="text" placeholder="EMAIL" name="email" id="email" class="form-control"
                                    required> </div>
                            <div class="form-group col-sm-12"><label>ROLE ID <b class="text-danger">*</b> </label> <select
                                    class="form-control" id="role_id" name="role_id" required>
                                    <option selected>SELECT ONE </option>
                                    @foreach ($roles as $option)
                                        <option value="{{ $option->id }}">{{ $option->name }}</option>
                                    @endforeach
                                </select> </div>
                            <div class="form-group col-sm-12"><label>PASSWORD <b class="text-danger">*</b> </label><input
                                    type="text" placeholder="PASSWORD" name="password" id="password"
                                    class="form-control" required> </div>
                        </div>
                    </div>
                    <!--end of mi-card-body-->
                    <div class="mi-footer">
                        <!--mi-card footer started-->
                        <div class="row">
                            <div class="col-sm-4 m-auto"> <button type="submit" class="butn info w-100"> Create </button>
                            </div>
                        </div>
                    </div>
                    <!--end of mi-card-footer-->
                </form>
            </div>
            <!--end of mi-card-->
        </div>
    </div>
@endsection
