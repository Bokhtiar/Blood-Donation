@extends('layouts.admin.app')
@section('admin_content')

    <div class="">

            <div class="col-12">
                <div class="card top-selling overflow-auto">

                  <div class="card-body pb-0">
                    <h5 class="card-title">Division <span></span></h5>

                    <table class="table table-borderless">
                      <thead>
                        <tr>
                          <th scope="col">Index</th>
                          <th scope="col">Title</th>
                          <th scope="col">Location</th>
                          <th scope="col">Phone</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($posts as $item)
                          <tr>
                            <td>{{$loop->index +1}}</td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->location}}</td>
                            <td>{{$item->phone}}</td>
                            <td class="form-inline">
                                @if($item->status == 0)
                                <a href="{{url('admin/post/status', $item->id)}}" class="btn btn-sm btn-danger">Pending</a>
                                @else
                                <a href="{{url('admin/post/status', $item->id)}}" class="btn btn-sm btn-success">Success</a>
                                @endif
                            </td>
                          </tr>
                          @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div><!-- End Top Selling -->
  
  
    </div>
    </div>
@endsection
