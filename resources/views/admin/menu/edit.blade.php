@extends('admin.layouts.app') @section('content') <div class="row">
  <div class="col-sm-7 m-auto">
    <div class="mi-card">
      <!--start of mi-fc-card-->
      <div class="mi-header warning">
        <!--mi card header started-->EDIT MENU
      </div>
      <!--end of mi card header-->
      <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
        <div class="mi-body">
          <!--mi-card body started-->
          <input name="_token" type="hidden" value="{{ csrf_token() }}">
          <input name="id" type="hidden" value="{{ $data->id }}">
          <div class="form-group">
            <label>NAME <b class="text-danger">*</b>
            </label>
            <input type="text" placeholder="NAME" name="name" id="name" class="form-control" value="{{ old('name')?old('name'):$data->name }}" required>
          </div>

            <div class="form-group ">
              <label>PAGE <b class="text-danger">*</b>
              </label>
              <select name="page_id" class="form-control">
                <option value="">Select one page</option>
                @foreach ($pages as $page)
                  <option value="{{ $page->id }}" {{ $page->id==$data->page_id?"selected":"" }}>{{ $page->name }}</option>
                @endforeach
              </select>
            </div>
        </div>
        <!--end of mi-card-body-->
        <div class="mi-footer">
          <!--mi-card footer started-->
          <div class="row">
            <div class="col-sm-4 m-auto">
              <button type="submit" class="butn warning w-100"> UPDATE </button>
            </div>
          </div>
        </div>
        <!--end of mi-card-footer-->
      </form>
    </div>
    <!--end of mi-fc-card-->
  </div>
</div> @endsection