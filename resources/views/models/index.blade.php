@extends('layout')

@section('content')
<h1>Karosszériák</h1>
<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <ul>
        @foreach($models as $model)
            <li class="row {{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}">
                <div class="col id">{{ $model->id }}</div>
                <div class="col">{{$model->name}}</div>
                <div class="right">
                    <div class="col">
{{--                        <a href="{{ route('models.show', $model->id) }}"><button><i class="fa fa-binoculars" title="Mutat"></i></button></a></div>--}}
                        <form method="post" action="">
                            @csrf
                            <input type="hidden" name="model_id" value="{{ $model->id }}">
                            <button type="submit"><i class="fa fa-binoculars" title="Mutat"></i>Mutat</button>
                        </form>
                    </div>

                   
                        <div class="col">
                            <a href="{{ route('models.edit', $model->id) }}"><button><i class="fa fa-edit edit" title="Módosít"></i>Módosít</button></a>
                        </div>
                        <div class="col">
                            <form action="{{ route('models.destroy', $model->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="btn-del-model"><i class="fa fa-trash-can trash" title="Töröl"></i>Töröl</button>
                            </form>
                        </div>
                 
                </div>

            </li>
        @endforeach
    </ul>
    
</div>
@endsection
