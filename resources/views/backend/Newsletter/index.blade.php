@extends('backend.app')

@section('content')


           @if(session('sucess'))
            <div class="alert alert-success" id="showsucess" style="border-radius: 0; float: right; margin-top: 2%; position: fixed; right: 0; top: 0; width: 600px; z-index: 9999;">
              {{session('sucess')}}
           </div>
           @endif
           @if ($errors->any())
                <div style="border-radius: 0; float: right; margin-top: 2%; position: fixed; right: 0; top: 0; width: 600px; z-index: 9999;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

              <div class="content-wrapper">
                <section class="content-header">
                  <h1>
                  Newsletter
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active"><a href="{{route('newsletter')}}"><i class="fa fa-paint-brush"></i> Newsletter</a></li>
                  </ol>
                </section>

                <section class="content container-fluid">             
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box">
                        <div class="box-header">

                          <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                              <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                              <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                          </div>
                        </div>


                        <div class="box-body table-responsive no-padding">
                          <table class="table table-hover">
                            <tr>
                              <th>#</th>
                              <th>Email</th>
                              <th>Data</th>
                              <th class="text-center">Active</th>
                            </tr>
                            @foreach($newsletter as $item)
                              <tr>
                                <td>#</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->created_at }}</td>
                                @if ($item->activo === 1)
                                    <td class="text-center"><i class="fa fa-check-circle"></i></td>
                                @else                       
                                    <td class="text-center"><i class="fa fa-times-circle"></i></td>
                                @endif   
                              </tr>
                              @endforeach
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>

                </section>
              </div>

@stop