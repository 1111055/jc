@extends('backend.app')

@section('content')


              <!-- Content Wrapper. Contains page content -->
              <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                  <h1>
                   Social NetWork
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{route('dash')}}"><i class="fa fa-align-justify"></i> Paginas</a></li>
                    <li class="active"><a href="{{route('social')}}"><i class="fa fa-facebook-square"></i> Social Network</a></li>
                  </ol>
                </section>

                <!-- Main content -->
                <section class="content container-fluid" style="background-image: url({{URL::asset('backend/dist/img/logo2.png')}});  background-repeat: no-repeat;
              background-position: 50% 50%;">             
            <!-- /.row -->
                  <div class="row">
                      <div class="col-xs-12">
                        <div class="box">
                          <div class="box-header">
                            <h3 class="box-title">Edit Social NetWork</h3>

                          </div>
                          <!-- /.box-header -->
                         <div class="panel panel-default">
                            <div class="panel-body">
                            <!-- Horizontal Form -->
                            <div class="box box-info">
                                  <form class="form-horizontal">
                                    <div class="box-body">
                                      <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                                        <div class="col-sm-10">
                                          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                                        <div class="col-sm-10">
                                          <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                          <div class="checkbox">
                                            <label>
                                              <input type="checkbox"> Remember me
                                            </label>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- /.box-body -->
                                    <div class="box-footer">
                                      <button type="submit" class="btn btn-info pull-right">Save</button>
                                    </div>
                                    <!-- /.box-footer -->
                                  </form>
                              </div>
                            </div>
                          <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                      </div>
                     </div>
                  </div>

                </section>
                <!-- /.content -->
              </div>
              <!-- /.content-wrapper -->

@stop