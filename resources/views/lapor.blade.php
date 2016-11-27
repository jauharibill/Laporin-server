@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Form Laporan</div>
                <div class="panel-body">
                    <form action="/laporan" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        @if(session('success'))
                        <div class="alert alert-success">{{session('success')}}</div>
                        @elseif(session('failed'))
                        <div class="alert alert-danger">{{session('failed')}}</div>
                        @endif
                    </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" placeholder="Title" class="form-control" required="true">
                        </div>
                        <div class="form-group">
                            <label for="photos">Photos</label>
                            <input type="file" name="photos" id="photos" placeholder="Photos" class="form-control" multiple="true" required="true">
                        </div>
                        <div class="form-group">
                            <label for="laporan">Report</label>
                            <textarea placeholder="Report" name="laporan" id="report" class="form-control" required="true"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea placeholder="Address" name="address" class="form-control" required="true"></textarea>
                        </div>

                        {{-- longitude latitude --}}
                        <input type="hidden" name="longitude" value="1889900">
                        <input type="hidden" name="latitude" value="-7894756">

                        <div class="form-group">
                            <label for="address">Status</label>
                            <select name="status">
                                <option value="0">Normal</option>
                                <option value="1">Siaga</option>
                                <option value="2">Awas</option>
                                <option value="3">Bahaya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Lapor !</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
