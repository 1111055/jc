@extends('backend.app')

@section('content')


         @if(session('sucess'))
         <!--Alerta de sucess-->
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

              <!-- Content Wrapper. Contains page content -->
              <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                  <h1>
                   Menus
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active"><a href="{{route('menu')}}"><i class="fa fa-align-justify"></i> Menus</a></li>
                  </ol>
                </section>

                <!-- Main content -->
                <section class="content container-fluid" >             
            <!-- /.row -->
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box">
                         @if(Auth::user()->isinrule(['supermaster']))
                            <div class="box-header">
                            
                                 <div class="panel panel-default">
                                    <div class="panel-body">
                                    <!-- Horizontal Form -->
                                      <div class="col-xs-12">
                                        <div class="box box-info">
                                          {!! Form::open(['url' => 'menu','class' => 'form-horizontal']) !!}
                                                <div class="box-body">
                                                  <div class="form-group">
                                                    {!! Form::label('* Menu:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                    <div class="col-sm-4">
                                                       {!! Form::text('menu',null,['class' => 'form-control']) !!}
                                                    </div>
                                                       {!! Form::label('* Ordem:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                    <div class="col-sm-4">
                                                       {!! Form::text('ordem',null,['class' => 'form-control']) !!}
                                                    </div>
                                                      
                                                  </div>

                                                </div>
                                                <div class="box-footer">
                                                    {!! Form::submit('Guardar',['class' => 'btn btn-info pull-right']) !!}
                                                </div>
                                              {!! Form::close() !!}
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                               
                              </div>
                          @endif 
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                          <table class="table table-hover">
                            <tr>
                              <th>Ordem</th>
                              <th>Menu</th>
                              <th>Pagina</th>
                              <th>Descrição</th>
                              <th class="text-center">Active</th>
                              <th>#</th>
                            </tr>
                             @foreach($menus as $item)
                              <tr>
                                <td>{{ $item->ordem }}</td>
                                <td>{{ $item->menu }}</td>
                                <td>{{ $item->link }}</td>
                                <td>{{ $item->descricao }}</td>
                                @if ($item->activo === 1)
                                    <td class="text-center"><i class="fa fa-check-circle"></i></td>
                                @else                       
                                <td class="text-center"><i class="fa fa-times-circle"></i></td>
                                @endif   
                                <td><a href="{{route('menu.edit',$item->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a> 
                                     @if(Auth::user()->isinrule(['supermaster']))
                                        {{ Form::open(['route' => ['menu.destroy', $item->id], 'method' => 'delete']) }}
                                           <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                        {{ Form::close() }}
                                     @endif   
                                </td>
                              </tr>
                              @endforeach
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