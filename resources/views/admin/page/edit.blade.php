@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm- m-auto">
            <div class="mi-card">
                <!--start of mi-fc-card-->
                <div class="mi-header warning">
                    <!--mi card header started-->EDIT PAGE
                </div>
                <!--end of mi card header-->
                <form action="{{ route('page.store') }}" method="POST" enctype="multipart/form-data">
                    <div class="mi-body">
                        <!--mi-card body started--> <input name="_token" type="hidden" value="{{ csrf_token() }}"> <input
                            name="id" type="hidden" value="{{ $data->id }}">
                        <div class="form-group"><label>NAME <b class="text-danger">*</b> </label><input type="text"
                                placeholder="NAME" name="name" id="name" class="form-control"
                                value="{{ old('name') ? old('name ') : $data->name }}" required> </div>
                        <div class="form-group position-relative"><label>BANNER IMAGE <b class="text-danger">*</b> </label>
                            <div class="edit-image"> <a href="{{ asset('frontend/img/page/' . $data->banner_image) }}"><img
                                        src="{{ asset('frontend/img/page/' . $data->banner_image) }}" alt=""></a> </div> <input
                                type="file" name="banner_image" id="banner_image" class="form-control edit-input">
                        </div>
                        <div class="form-group"><label>BANNER TITLE <b class="text-danger">*</b> </label><input
                                type="text" placeholder="BANNER TITLE" name="banner_title" id="banner_title"
                                class="form-control"
                                value="{{ old('banner_title') ? old('banner_title') : $data->banner_title }}" required> </div>
                        <div class="form-group"><label>CONTENT <b class="text-danger">*</b> </label>
                            <textarea rows="5" placeholder="CONTENT" name="content" id="content" class="form-control" required> {{ old('content') ? old('content') : $data->content }} </textarea>
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

<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('content', {});
</script>
@endsection
{{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> --}}
