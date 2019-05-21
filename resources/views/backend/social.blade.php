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
                <section class="content container-fluid" style="background-image: url('backend/dist/img/logo2.png');  background-repeat: no-repeat;
              background-position: 50% 50%;">             
            <!-- /.row -->
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box">
                        <div class="box-header">
                          <h3 class="box-title">Social NetWork</h3>

                          <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                              <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                              <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                          <table class="table table-hover">
                            <tr>
                              <th>#</th>
                              <th>Social</th>
                              <th>Description</th>
                              <th class="text-center">Active</th>
                              <th>#</th>
                            </tr>
                            <tr>
                              <td><i class="fa fa-facebook-square"></i></td>
                              <td>Facebook</td>
                              <td>Some description</td>
                              <td class="text-center"><i class="fa fa-check-circle"></i></td>
                              <td><button class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></button> <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></td>
                            </tr>
                            <tr>
                              <td><i class="fa fa-instagram"></i></td>
                              <td>Instagram</td>
                              <td>Some description</td>
                              <td class="text-center"><i class="fa fa-times-circle"></i></td>
                              <td><button class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></button>  <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></td>
                            </tr>
                            <tr>
                              <td><i class="fa fa-twitter"></i></td>
                              <td>Twitter</td>
                              <td>Some description</td>
                              <td class="text-center"><i class="fa fa-check-circle"></i></td>
                              <td><button class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></button> <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></td>
                            </tr>
                            <tr>
                              <td><i class="fa fa-linkedin"></i></td>
                              <td>Linkedin</td>
                              <td>Some description</td>
                              <td class="text-center"><i class="fa fa-times-circle"></i></td>
                              <td><button class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></button> <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></td>
                            </tr>
                            
                          </table>
                        </div>
                        <!-- /.box-body -->
                      </div>
                      <!-- /.box -->
                    </div>
                  </div>

                </section>
                <!-- /.content -->
              </div>
              <!-- /.content-wrapper -->

@stop