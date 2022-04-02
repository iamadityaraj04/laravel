@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- {{ __('You are logged in!') }} -->
                    <form action=""  id="dashboard-form">
                        <center>
                            <legend> <b> Upload Certificate</b></legend>
                            <label for="">Firstname</label> <input type="text"><br><br>
                            <label for="">Lastname</label>  <input type="text"><br><br>
                            <label for="">Course Name</label>    <input type="text"><br><br>
                            <label for="">Course Duration(in weeks)</label>    <input type="number"><br><br>
                            <label for="">Certificate Number</label>    <input type="number"><br><br>
                            <label for="">Date</label>    <input type="date"><br><br>
                                <button class="dashboard-btn" name="submit">
                                    <img src="" alt="" class="certifi">
                                    Add Certificate
                                </button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
