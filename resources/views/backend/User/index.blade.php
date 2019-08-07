@extends('backend.app')

@section('content')


         @if(session('sucess'))
         <!--Alerta de sucess-->
            <div class="alert alert-success" id="showsucess" style="border-radius: 0; float: right; margin-top: 2%; position: fixed; right: 0; top: 0; width: 600px; z-index: 9999;">
              {{session('sucess')}}
          </div>
          @endif
           @if ($errors->any())
                <div class="alert alert-danger" id="showsucess" style="border-radius: 0; float: right; margin-top: 2%; position: fixed; right: 0; top: 0; width: 600px; z-index: 9999;">
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
                    Utilizadores
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{route('pagina')}}"><i class="fa fa-users"></i> Utilizadores</a></li>
                  </ol>
                </section>

                <!-- Main content -->
                <section class="content container-fluid">             
            <!-- /.row -->
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box">
                        <div class="box-header">
                         <div class="panel panel-default">
                            <div class="panel-body">
                            <!-- Horizontal Form -->
                              <div class="col-xs-12">
                                <div class="box box-info">
                                      {!! Form::open(['url' => 'user','class' => 'form-horizontal', 'onsubmit' => 'return validateform(this);']) !!}
                                        <div class="box-body">
                                              <div class="col-xs-12">
                                                 <div class="form-group col-xs-8">
                                                   {!! Form::label('* Nome ') !!}
                                                   {!! Form::text('name',null,['class' => 'form-control', 'require' => 1]) !!}
                                                   <span class="text-danger" style="display: none;"></span>
                                                 </div>
                                              </div>
                                             <div class="col-xs-12">
                                                <div class="form-group col-xs-8">
                                                  {!! Form::label('* Email:')!!}
                                                  {!! Form::text('email',null,['class' => 'form-control', 'require' => 1, 'email' => 1]) !!}
                                                  <span class="text-danger" style="display: none;"></span>
                                                </div>
                                             </div>
                                             <div class="col-xs-12">
                                                <div class="form-group col-xs-8">
                                                  {!! Form::label('* PassWord:')!!}
                                                  {!! Form::password('password',null,['class' => 'form-control', 'require' => 1]) !!}
                                                  <span class="text-danger" style="display: none;"></span>
                                                  {!! Form::label('* Confirmar Password:')!!}
                                                  {!! Form::password('passwordconfirme',null,['class' => 'form-control', 'require' => 1]) !!}
                                                   <span class="text-danger" style="display: none;"></span>
                                                </div>
                                             </div>

                                        </div>
                                        * Campo Obrigatório.
                                        <div class="box-footer">
                                            {!! Form::submit('Guardar',['class' => 'btn btn-info pull-right']) !!}
                                        </div>
                                      {!! Form::close() !!}
                                  </div>
                                </div>
                              </div>
                          <!-- /.box-body -->
                        </div>
                        <div class="box-body table-responsive no-padding">
                          <table class="table table-hover">
                            <tr>
                              <th>#</th>
                              <th>Nome</th>
                              <th>Email</th>

                              <th class="text-center">Active</th>
                            </tr>
                             @foreach($users as $item)
                              <tr>
                                <td>#</td>
                                <td>{{ $item->nome }}</td>
                                <td>{{ $item->email }}</td>

                                @if ($item->activo === 1)
                                    <td class="text-center"><i class="fa fa-check-circle"></i></td>
                                @else                       
                                <td class="text-center"><i class="fa fa-times-circle"></i></td>
                                @endif   
                                <td><a href="{{route('user.edit',$item->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a> 

                                {{ Form::open(['route' => ['user.destroy', $item->id], 'method' => 'delete']) }}
                                <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                {{ Form::close() }}

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