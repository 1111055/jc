@extends('backend.app')

@section('content')

    @if(session('sucess'))
        <div style="background-color:green;color:#FFF;padding:15px;width: 100%;">{{session('sucess')}}</div>
    @endif
              <!-- Content Wrapper. Contains page content -->
              <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                  <h1>
                   Menu
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active"><a href="{{route('menu')}}"><i class="fa fa-facebook-square"></i> Menu</a></li>
                  </ol>
                </section>

                <section class="content container-fluid" style="background-image: url({{URL::asset('backend/dist/img/logo2.png')}});  background-repeat: no-repeat;
              background-position: 50% 50%;">             
            <!-- /.row -->
                  <div class="row">
                      <div class="col-xs-12">
                        <div class="box">
                          <div class="box-header">
                            <h3 class="box-title">Edit Menu</h3>

                          </div>
                         <div class="panel panel-default">
                            <div class="panel-body">
                            <div class="box box-info">
                                     {!! Form::model($menu, [
                                          'method' => 'PUT',
                                          'route' => ['menu.update', $menu->id],
                                          'class' => 'form-horizontal'
                                     ]) !!}
                                    <div class="box-body">
                                      <div class="form-group">
                                        {!! Form::label('* Menu:',null, ['class' => 'col-sm-2 control-label']) !!}
                                        <div class="col-sm-8">
                                           {!! Form::text('menu',$menu->menu,['class' => 'form-control']) !!}
                                        </div>
                                        
                                      </div>
                                      <div class="form-group">
                                           {!! Form::label('* Descricao:',null, ['class' => 'col-sm-2 control-label']) !!}
                                        <div class="col-sm-8">
                                           {!! Form::text('descricao',$menu->descricao,['class' => 'form-control']) !!}
                                        </div>
                                      </div>
                                       <div class="form-group">
                                          {!! Form::label('* Submenu:',null, ['class' => 'col-sm-2 control-label']) !!}
                                        <div class="col-sm-8">
                                           {!! Form::text('submenu',$menu->submenu,['class' => 'form-control']) !!}
                                        </div>
                                      </div>
                                      <div class="form-group">
                                          {!! Form::label('* Link:',null, ['class' => 'col-sm-2 control-label']) !!}
                                        <div class="col-sm-8">
                                           {!! Form::text('link',$menu->link,['class' => 'form-control']) !!}
                                        </div>
                                       </div>
                                       <div class="form-group">
                                           {!! Form::label('* Ordem:',null, ['class' => 'col-sm-2 control-label']) !!}
                                         <div class="col-sm-8">
                                           {!! Form::text('ordem',$menu->ordem,['class' => 'form-control']) !!}
                                         </div>
                                      </div>

                                    </div>
                                    <div class="box-footer">
                                        {!! Form::submit('Guardar',['class' => 'btn btn-info pull-right']) !!}
                                    </div>
                                  {!! Form::close() !!}
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