@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Administración de archivos</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <div class="card">
        <div class="card-body">
            {{-- Setup data for datatables --}}
            @php
            $heads = [
                'ID',
                'Nombre',
                // 'Ubicación',
                // ['label' => 'Teléfono', 'width' => 20],
                ['label' => 'Acciones', 'no-export' => true, 'width' => 10],
            ];

            $btnEdit = '<button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                            <i class="fa fa-lg fa-fw fa-pen"></i>
                        </button>';
            $btnDelete = '<button type="submit" class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                            <i class="fa fa-lg fa-fw fa-trash"></i>
                        </button>';
            $btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Ver documento">
                            <i class="fa fa-lg fa-fw fa-eye"></i>
                        </button>';

            $config = [
                // 'data' => [
                //     [22, 'John Bender', '+02 (123) 123456789', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
                //     [19, 'Sophia Clemens', '+99 (987) 987654321', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
                //     [3, 'Peter Sousa', '+69 (555) 12367345243', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
                // ],
                // 'order' => [[1, 'asc']],
                // 'columns' => [null, null, null, ['orderable' => false]],
                'language'=>[
                    'url'=>'//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json',
                ]
            ];
            @endphp

            {{-- Minimal example / fill data using the component slot --}}
            <x-adminlte-datatable id="table1" :heads="$heads" :config="$config">
                @foreach($archivos as $archivo)
                    <tr>
                        <td>{{$archivo->id}}</td>
                        <td>{{$archivo->nombre}}</td>
                        {{-- <td>{{$archivo->file_path}}</td> --}}
                        <td>{!! $btnDetails!!}
                            <form style="display: inline" action="{{route('visualizar',$archivo)}}" method="POST" class="formEliminar">
                            @csrf
                            {{-- @method('delete') --}}
                            {!! $btnDelete!!}
                            </form>
                            </td>
                    </tr>
                @endforeach
            </x-adminlte-datatable>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        $(document).ready(function(){
            $('.formEliminar').submit(function(e){
                e.preventDefault();
                Swal.fire({
                title: 'Estás seguro?',
                text: "Se va a eliminar un registro!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
                })
            })
        })
    </script>
@stop