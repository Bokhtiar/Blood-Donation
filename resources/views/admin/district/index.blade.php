@extends('layouts.admin.app')
@section('admin_content')

    <div class="row">
        <div class="col-md-8">
            <div class="col-12">
                <div class="card top-selling overflow-auto">

                  <div class="card-body pb-0">
                    <h5 class="card-title">Division <span></span></h5>

                    <table class="table table-borderless">
                      <thead>
                        <tr>
                          <th scope="col">Index</th>
                          <th scope="col">Divsion Name</th>
                          <th scope="col">Name</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($distrcits as $item)
                          <tr>
                            <td>{{$loop->index +1}}</td>
                            <td>{{$item->division ? $item->division->name :''}}</td>
                            <td>{{$item->name}}</td>
                            <td class="form-inline">
                                <a href="@route('admin.district.edit', $item->id)" class="btn btn-sm btn-success">Edit</a>
                                <form action="@route('admin.district.destroy', $item->id)" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                                </form>

                            </td>
                          </tr>
                          @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div><!-- End Top Selling -->
        </div>
        <div class="col-md-4">

            <div class="col-12">
                <div class="card top-selling overflow-auto">

                  <div class="card-body pb-0">
                    <h5 class="card-title">{{@$edit ? 'District Update' : 'District Create'}} <span></span></h5>
                    <div>
                        @if(@$edit)
                        <form action="@route('admin.district.update', @$edit->id)" method="POST" >
                            @method('Put')
                        @else
                        <form action="@route('admin.district.store')" method="POST" >
                        @endif
                            @csrf
                            <div class="form-group">
                                <label for="">Select Divsion</label>
                                <select name="division_id" class="form-control" id="">
                                    <option value="">Select Divsion</option>
                                    @foreach ($divisions as $div)
                                    <option value="{{$div->id}}" {{ $div->id == @$edit->division_id ? 'Selected' : '' }}>{{$div->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">District Name</label>
                                <input type="text" value="{{@$edit->name}}" placeholder="Enter District Name" name="name" class="form-control" id="">
                            </div>

                            <div class="form-group my-3">
                                <input type="submit" value="Submit" class="btn btn-success" id="">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
