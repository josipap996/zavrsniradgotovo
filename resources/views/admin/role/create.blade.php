@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-8 m-auto">
            <div class="mi-card">
                <!--start of mi-card-->
                <div class="mi-header info">
                    <!--mi card header started-->CREATE ROLE
                </div>
                <!--end of mi card header-->
                <form action="{{ route('role.store') }}" method="POST" enctype="multipart/form-data">
                    <div class="mi-body">
                        <!--mi-card body started--> <input name="_token" type="hidden" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="form-group "><label>NAME <b class="text-danger">*</b> </label><input type="text"
                                    placeholder="NAME" name="name" id="name" class="form-control" required> </div>
                            <div class="form-group "><label class="mb-3 mb-2">SELECT ACCESS <b class="text-danger">*</b> </label>
                                @foreach ($access as $authModule=>$authItems)
                                    <div class="mi-card">
                                        <div class="mi-header text-dark text-uppercase">{{ $authModule }}</div>
                                        <div class="mi-body d-flex justify-content-around">
                                            @foreach ($authItems as $route=>$item)
                                                <div class="form-check">
                                                    <input class="form-check-input" name="access_item[]" type="checkbox" value="{{ $route }}" id="{{ $item }}">
                                                    <label class="form-check-label" for="{{ $item }}">
                                                        {{ $item }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach

                                @if (count($otherPages) > 0)
                                    <div class="mi-card">
                                        <div class="mi-header text-dark text-uppercase">Other pages</div>
                                            <div class="mi-body d-flex justify-content-around">
                                                @foreach ($otherPages as $pages)
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="access_item[]" type="checkbox" value="{{ $pages->route }}" id="{{ $pages->name }}">
                                                        <label class="form-check-label" for="{{ $pages->name }}">
                                                            {{ $pages->name }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endif
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
