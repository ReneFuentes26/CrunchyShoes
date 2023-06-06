@extends('layouts.app')

@section('template_title')
    Zapato
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Zapato') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('zapatos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Descripcion</th>
										<th>Precio</th>
										<th>Cantidad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($zapatos as $zapato)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $zapato->name }}</td>
											<td>{{ $zapato->descripcion }}</td>
											<td>{{ $zapato->precio }}</td>
											<td>{{ $zapato->cantidad }}</td>

                                            <td>
                                                <form action="{{ route('zapatos.destroy',$zapato->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('zapatos.show',$zapato->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('zapatos.edit',$zapato->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $zapatos->links() !!}
            </div>
        </div>
    </div>
@endsection
