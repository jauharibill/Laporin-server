@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>

                <div class="panel-body">
                    <form action="/profile" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="no_identitas">Identity Number eg : ktp, sim</label>
                            <input type="number" placeholder="Identity Number" name="no_identitas" id="no_identitas" class="form-control" required="true">
                        </div>
                        <div class="form-group">
                            <label for="postalcode">Postal Code</label>
                            <input type="number" name="postalcode" id="postalcode" placeholder="Postalcode" class="form-control" required="true" style="width:80px" >
                        </div>
                        <div class="form-group">
                            <label for="born">Born</label>
                            <input type="text" placeholder="Born" name="born" id="born" class="form-control" required="true" style="width:100px">
                        </div>
                        <div class="form-group">
                            <label for="rtrw">RT & RW</label><br>
                            <input type="number" placeholder="RT" name="rt" id="rt" class="form-control pull-left" style="width:100px;margin-right:20px;" required="true"> 
                            <input type="number" placeholder="RW" name="rw" id="rw" class="form-control" style="width:100px" required="true">

                        </div>
                        <div class="form-group">
                            <label for="address">Kecamatan</label>
                            <input type="text" placeholder="Kecamatan" name="kecamatan" class="form-control" required="true">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea placeholder="Address" name="address" class="form-control" required="true"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Save Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
