
@extends('main')
@section('title', 'Profile Password Change - ')

@push('css')
<link href="/css/style.css" rel="stylesheet">
<link href="/css/profile.css" rel="stylesheet">
@endpush

@section('content')



<div class="container">
<h2 style="color: #ccc;" class="text-center">Change Password</h2>
            <div class="panel panel-info">
           
            <div class="panel-body profile-update">

<form action="{{ route('profile.password.update') }}" method="post">

{{ csrf_field() }}
<!--    <div class="col-md-6 col-sm-6 col-xs-12 text-right"><label for="old_password">Old Password</label></div>
    <div class="col-md-6 col-sm-6 col-xs-12"><input type="password" name="old_password" value="" id="old_password" size="30"  /></div>
</div>
<div class="row" style="padding: 5px; background-color: #f5f5f5; border-right: #cccccc 1px solid; border-left: #cccccc 1px solid;">
    <div class="col-md-6 col-sm-6 col-xs-12 text-right"><label for="new_password">New Password</label></div>
    <div class="col-md-6 col-sm-6 col-xs-12"><input type="password" name="new_password" value="" id="new_password" size="30"  /></div>
</div>
<div class="row" style="padding: 5px; background-color: #f5f5f5; border-right: #cccccc 1px solid; border-left: #cccccc 1px solid;">
    <div class="col-md-6 col-sm-6 col-xs-12 text-right"><label for="confirm_new_password">Confirm New Password</label></div>
    <div class="col-md-6 col-sm-6 col-xs-12"><input type="password" name="confirm_new_password" value="" id="confirm_new_password" size="30"  /></div>
</div>-->

                    <div class="form-group">
                        <label for="name">Current Password </label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="name">New Password </label>
                        <input type="password" name="new_password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="name">Confirm New Password </label>
                        <input type="password" name="new_password_confirmation" class="form-control">
                    </div>

                    <div class="form-group">
                       <div class="text-center">
                           <button class="btn btn-success" type="submit">Update password</button>
                       </div>
                    </div>

</form>   

</div>
</div>

 </div><!-- /.container -->
 

@endsection