@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="mi-card">
            <div class="mi-header info transparent"> LIST OF ROLES <a href="{{ route('role.create') }}"><button
                        class="butn info">ADD NEW ROLE </button></a> </div>
            <div class="mi-body">
                <table class="mi-table table table-bordered table-striped" id="dataTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th class="w-75">ACCESS</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody> <?php $i = 0; ?> @foreach ($data as $item)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td> {{ $item->name }} </td>
                                <td> {{ $item->access }} </td>
                                <td class="mi-action-button"><a href="{{ route('role.edit', ['id' => $item->id]) }}"> <button
                                            class="butn warning transparent"><i class="fa fa-edit"></i></button></a><a
                                        onclick="return confirm('Are you sure to delete')"
                                        href="{{ route('role.delete', ['id' => $item->id]) }}"> <button
                                            class="butn danger transparent"><i class="fa fa-trash"></i></button></a> </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mi-footer">
                <div class="float-right"> </div>
            </div>
        </div>
    </div>
@endsection
