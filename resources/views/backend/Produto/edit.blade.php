@extends('backend.app')

@section('content')


<style>

/* USER PROFILE PAGE */
 .card {
    margin-top: 20px;
    padding: 30px;
    background-color: rgba(214, 224, 226, 0.2);
    -webkit-border-top-left-radius:5px;
    -moz-border-top-left-radius:5px;
    border-top-left-radius:5px;
    -webkit-border-top-right-radius:5px;
    -moz-border-top-right-radius:5px;
    border-top-right-radius:5px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.card.hovercard {
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
    background-color: #fff;
    background-color: rgba(255, 255, 255, 1);
}
.card.hovercard .card-background {
    height: 130px;
}
.card-background img {
    -webkit-filter: blur(25px);
    -moz-filter: blur(25px);
    -o-filter: blur(25px);
    -ms-filter: blur(25px);
    filter: blur(25px);
    margin-left: -100px;
    margin-top: -200px;
    min-width: 130%;
}
.card.hovercard .useravatar {
    position: absolute;
    top: 15px;
    left: 0;
    right: 0;
}
.card.hovercard .useravatar img {
    width: 100px;
    height: 100px;
    max-width: 100px;
    max-height: 100px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255, 255, 255, 0.5);
}
.card.hovercard .card-info {
    position: absolute;
    bottom: 14px;
    left: 0;
    right: 0;
}
.card.hovercard .card-info .card-title {
    padding:0 5px;
    font-size: 20px;
    line-height: 1;
    color: #262626;
    background-color: rgba(255, 255, 255, 0.1);
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
.card.hovercard .card-info {
    overflow: hidden;
    font-size: 12px;
    line-height: 20px;
    color: #737373;
    text-overflow: ellipsis;
}
.card.hovercard .bottom {
    padding: 0 20px;
    margin-bottom: 17px;
}
.btn-pref .btn {
    -webkit-border-radius:0 !important;
}
    
img {
    max-width: 100%;
  }

  #fileDisplayArea {
    margin-top: 2em;
    width: 100%;
    overflow-x: auto;
  }

.dot {
  height: 25px;
  width: 25px;
  border-radius: 50%;
  display: inline-block;
}

</style>
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



              <!-- Content Wrapper. Contains page content -->
              <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                  <h1>
                   Editar Produto
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{route('pagina')}}"><i class="fa fa-align-justify"></i> Editar Produto</a></li>
                  </ol>
                </section>

                <!-- Main content -->
                <section class="content container-fluid">             
            <!-- /.row -->
                  <div class="row">
                      <div class="col-xs-12">
                        <div class="box">
                          <div class="col-lg-12 col-sm-12">        
                             <div class="well">
                                  <div class="tab-pane fade in" id="tab3">
                                     <div class="panel-body">
                                        <div class="box box-info">

                                             {!! Form::open(['url' => 'produtoimagem','class' => 'form-horizontal', 'files' => true ]) !!}

                                                 {!! Form::hidden('idprod',$produto->id,['class' => 'form-control']) !!}
                                                <div class="form-group">
                                                    {!! Form::label('Ordem:',null, ['class' => 'col-sm-1 control-label']) !!}
                                                <div class="col-sm-2">
                                                     {!! Form::text('ordem',null,['class' => 'form-control']) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::label('Destacar:',null, ['class' => 'col-sm-1 control-label']) !!}
                                                  <div class="col-sm-1">
                                                     {!! Form::checkbox('destacar',1,true) !!}
                                                  </div>
                                                </div>
                                               <div class="form-group">
                                                    {!! Form::label('Activo:',null, ['class' => 'col-sm-1 control-label']) !!}
                                                  <div class="col-sm-1">
                                                     {!! Form::checkbox('activo',1,true) !!}
                                                  </div>
                                                </div>

                                                <div class="col-xs-2">
                                                </div>
                                                <div class="col-xs-4">
                                                <p><div id="fileDisplayArea"></div></p>
                                                    <div class="col-xs-8">
                                                          <img src="#"  />
                                                    </div>
                                                </div>
                                               <div class="form-group col-sm-6">
                                                    <label>Imagens Produto</label>
                                                    <input type="file" name="prodimg" id="exampleInputImage" class="image"> 
                                                </div>
                                                </div>
                                            <div class="box-footer">
                                                {!! Form::submit('Guardar',['class' => 'btn btn-info pull-right']) !!}
                                            </div>
                                             {!! Form::close() !!}
                                          </div>
                                        <div class="box-body table-responsive no-padding">
                                          <div class="box box-info">
                                              <table class="table table-hover">
                                                <tr>
                                                  <th class="col-xs-1">#</th>
                                                  <th>Ordem</th>
                                                  <th class="text-center">Destacar</th>
                                                  <th class="text-center">Active</th>
                                                  <th>#</th>
                                                </tr>
                                                <tr>
                                                
                                                @foreach($produto->imagensproduto as $item)
                                                  <td class="col-xs-1"> <img src="{{ $item->path }}"  /></td>
                                                  <td>{{ $item->ordem }}</td>
                                                   @if ($item->destacar === 1)
                                                  <td class="text-center"><i class="fa fa-check-circle"></i></td>
                                                  @else                       
                                                  <td class="text-center"><i class="fa fa-times-circle"></i></td>
                                                  @endif  
                                                  @if ($item->activo === 1)
                                                  <td class="text-center"><i class="fa fa-check-circle"></i></td>
                                                  @else                       
                                                  <td class="text-center"><i class="fa fa-times-circle"></i></td>
                                                  @endif   
                                                  <td><a href="{{route('banner.edit',$item->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a> 

                                                  {{ Form::open(['route' => ['banner.destroy', $item->id], 'method' => 'delete']) }}
                                                  <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                                  {{ Form::close() }}

                                                  </td>
                                                @endforeach
                                                </tr>
                                              </table>
                                           </div>
                                        </div>
                                      </div>
                                 </div>
                                </div>
                              </div>
                         </div>
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
