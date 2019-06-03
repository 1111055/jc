          
       
          @foreach($menutmp as $sub)
                    @if(Route::getRoutes()->hasNamedRoute(strtolower($sub['path'])))
                       {{$sub['path']}} {{$sub['menu']}}
                      <li> <a href="{{route(strtolower($sub['path']))}}">{{$sub['menu']}} </a>
                          @isset($sub['submenutmp'])
                            @if(count($sub['submenutmp']) > 0){
                                 <ul class="ht-dropdown dropdown-style-two sub-menu">
                                     @include('frontend.menucico', ['menutmp' => $sub['submenutmp']])
                                 </ul>
                             @endif
                          @endisset

                       </li>
                     @else
                      <li> <a href="">{{$sub['menu']}} </a>
                        @isset($sub['submenutmp'])
                            @if(count($sub['submenutmp']) > 0)
                                 <ul class="ht-dropdown dropdown-style-two sub-menu">
                                     @include('frontend.menucico', ['menutmp' => $sub['submenutmp']])
                                 </ul>
                           @endif
                        @endisset
                       </li>
                    @endif
          @endforeach
