
@extends('layouts.admin.app')
@section('admin_content')


<div class="pagetitle">
    <h1>Donor Search Tables</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Donor</li>
        <li class="breadcrumb-item active">Donor Table</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Donor Table</h5>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                    <th>User Name</th>
                    <th>Division </th>
                    <th>District</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Blood Group</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $item)
                <tr>
                    <td>{!! $item->name !!}</td>
                    <td>{!! $item->division ? $item->division->name : 'Data Not Available' !!}</td>
                    <td>{!! $item->district ? $item->district->name : 'Data Not Available' !!}</td>
                    <td>{!! $item->address !!}</td>
                    <td>{!! $item->phone !!}</td>
                    <td>{!! $item->blood !!}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

@endsection










