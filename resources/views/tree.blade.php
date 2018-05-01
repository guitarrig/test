 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Workers Tree =)</div>

                <div class="card-body">

                    <p><a href="" class="list-group-item list-group-item-action list-group-item-primary">{{$workers['surname']}} {{$workers['name']}}<br>
                        {{$workers['position']}}
                    </a>
                    </p><ul>


                    @foreach($workers['children'] as $array2)
                    <li><p>
                            <a class="list-group-item list-group-item-action list-group-item-success" href="">{{$array2['surname']}} {{$array2['name']}}<br>
                            {{$array2['position']}}
                            </a><ul>
                              @if(!isset($array2['children']))
                              @continue
                              @endif

                                @foreach($array2['children'] as $array3)
                                <li><p>
                                <a class="list-group-item list-group-item-action list-group-item-warning" href="">{{$array3['surname']}} {{$array3['name']}}<br>
                                {{$array3['position']}}
                                </a><ul>
                                  @if(!isset($array3['children']))
                                  @continue
                                  @endif

                                    @foreach($array3['children'] as $array4)
                                    <li><p>
                                    <a class="list-group-item list-group-item-action list-group-item-danger" href="">{{$array4['surname']}} {{$array4['name']}}<br>
                                    {{$array4['position']}}
                                    </a><ul>
                                      @if(!isset($array4['children']))
                                      @continue
                                      @endif

                                        @foreach($array4['children'] as $array5)
                                        <li><p>
                                        <a class="list-group-item list-group-item-action list-group-item-info" href="">{{$array5['surname']}} {{$array5['name']}}<br>
                                        {{$array5['position']}}
                                        </a></p></li>
                                        @endforeach
                                    </p>
                                    </ul></li>
                                    @endforeach
                                </p>
                                </ul></li>

                                @endforeach
                    </p>
                    </ul></li>
                    @endforeach


                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
