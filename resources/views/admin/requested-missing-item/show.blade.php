@extends('layouts.app')
@section('title','Requested Missing Item')
@section('content')
    <div class="container">
        <div class="row">
            
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">requestedMissingItem {{ $requestedmissingitem->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/requested-missing-item') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/requested-missing-item/' . $requestedmissingitem->id . '/edit') }}" title="Edit requestedMissingItem"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/requestedmissingitem' . '/' . $requestedmissingitem->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete requestedMissingItem" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $requestedmissingitem->id }}</td>
                                    </tr>
                                    <tr><th> Missing Item Id </th><td> {{ $requestedmissingitem->missing_item_id }} </td></tr><tr><th> User Id </th><td> {{ $requestedmissingitem->user_id }} </td></tr><tr><th> Missing Item Status Id </th><td> {{ $requestedmissingitem->missing_item_status_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
