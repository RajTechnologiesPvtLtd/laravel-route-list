@extends('RouteList::layouts.app')
@section('title', 'Web Routes List')
@section('content')
    <div class="text-center">
        <h3>{{ $title }}</h3>
    </div>

    <table id="routetable" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
            <tr>
                <th scope="col">HTTP Method</th>
                <th scope="col">Route</th>
                <th scope="col">Name</th>
                <th scope="col">Corresponding Action</th>
            </tr>
        </thead>
        <tbody>
            @if (request()->has('only') == true)
                @foreach ($routeCollection->getIterator() as $data)
                    @if (strpos($data->uri, 'api') !== false)
                        <tr>
                            <td>{{ $data->methods()[0] }}</td>
                            <td>{{ $data->uri() }}</td>
                            <td>{{ $data->getName() }}</td>
                            <td>{{ $data->getActionName() }}</td>
                        </tr>
                    @endif
                @endforeach
            @else
                @foreach ($routeCollection as $data)
                    @if (strpos($data->uri, 'web') !== false)
                        <tr>
                            <td>{{ $data->methods()[0] }}</td>
                            <td>{{ $data->uri() }}</td>
                            <td>{{ $data->getName() }}</td>
                            <td>{{ $data->getActionName() }}</td>
                        </tr>
                    @endif
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
@section('script-footer')
    <script>
        $(document).ready(function() {
            $('#routetable').DataTable({
                "order": [
                    [3, "desc"]
                ]
            });
        });
    </script>
@endsection
