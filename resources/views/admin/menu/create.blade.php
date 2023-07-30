@extends('admin.layouts.app') @section('content') <div class="row">
  <div class="col-sm-7 m-auto">
    <div class="mi-card">
      <!--start of mi-card-->
      <div class="mi-header success transparent">
        <!--mi card header started-->CREATE MENU
      </div>
      <!--end of mi card header-->
      <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
        <div class="mi-body">
          <!--mi-card body started-->
          <input name="_token" type="hidden" value="{{ csrf_token() }}">
          <div class="row">
            <div class="form-group ">
              <label>NAME <b class="text-danger">*</b>
              </label>
              <input type="text" placeholder="NAME" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group ">
              <label>LINK <b class="text-danger">*</b>
              </label>
              <input type="text" placeholder="LINK" name="link" id="link" class="form-control" required>
            </div>

            <div class="form-group ">
              <label>ROUTE <b class="text-danger">*</b>
              </label>
              <input type="text" placeholder="ROUTE NAME" name="route" id="route" class="form-control" required>
            </div>
          </div>
        </div>
        <!--end of mi-card-body-->
        <div class="mi-footer">
          <!--mi-card footer started-->
          <div class="row">
            <div class="col-sm-4 m-auto">
              <button type="submit" class="butn info w-100"> Create </button>
            </div>
          </div>
        </div>
        <!--end of mi-card-footer-->
      </form>
    </div>
    <!--end of mi-card-->
  </div>
</div> @endsection