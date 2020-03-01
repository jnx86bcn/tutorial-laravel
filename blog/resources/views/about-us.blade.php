@extends('plantilla')

@section('seccion')
    <h1>Nosotros</h1>

    @foreach ($team as $item)
        <a href={{ route('about-us',$item) }} class="h4 text-danger">{{$item}}</a>    
    @endforeach

    @if (!empty($employee))
        <div class="container mt-5">
            @switch($employee)
                @case($employee=='Ignacio')
                    <H4>{{$employee}}</H4>
                    <p> {{$employee}} Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Porro consequuntur quo alias, quaerat nam soluta quidem 
                        magni praesentium asperiores numquam quod exercitationem 
                        libero laudantium dolores autem nisi voluptatem deserunt 
                        est!
                    </p>
                    @break
                @case($employee=='Juan')
                    <H4>{{$employee}}</H4>
                    <p> {{$employee}} Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Porro consequuntur quo alias, quaerat nam soluta quidem 
                        magni praesentium asperiores numquam quod exercitationem 
                        libero laudantium dolores autem nisi voluptatem deserunt 
                        est!
                    </p>
                    @break
                @case($employee=='Jose')
                    <H4>{{$employee}}</H4>
                    <p> {{$employee}} Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Porro consequuntur quo alias, quaerat nam soluta quidem 
                        magni praesentium asperiores numquam quod exercitationem 
                        libero laudantium dolores autem nisi voluptatem deserunt 
                        est!
                    </p>
                    @break
                @default
            @endswitch
        </div>


    @endif

@endsection