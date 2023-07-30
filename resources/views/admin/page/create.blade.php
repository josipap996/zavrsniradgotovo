@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm- m-auto">
            <div class="mi-card">
                <!--start of mi-card-->
                <div class="mi-header info">
                    <!--mi card header started-->CREATE PAGE
                </div>
                <!--end of mi card header-->
                <form action="{{ route('page.store') }}" method="POST" enctype="multipart/form-data">
                    <div class="mi-body">
                        <!--mi-card body started--> <input name="_token" type="hidden" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="form-group "><label>NAME <b class="text-danger">*</b> </label><input type="text"
                                    placeholder="NAME" name="name" id="name" class="form-control" required> </div>
                            <div class="form-group "><label>BANNER IMAGE <b class="text-danger">*</b> </label><input
                                    type="file" name="banner_image" id="banner_image" class="form-control" required>
                            </div>
                            <div class="form-group "><label>BANNER TITLE <b class="text-danger">*</b> </label><input
                                    type="text" placeholder="BANNER TITLE" name="banner_title" id="banner_title"
                                    class="form-control" required> </div>
                            <div class="form-group "><label>CONTENT <b class="text-danger">*</b> </label>
                                <textarea rows="5" placeholder="CONTENT" name="content" id="content" class="form-control" required></textarea>
                            </div>
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
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('content', {});
</script>
@endsection



