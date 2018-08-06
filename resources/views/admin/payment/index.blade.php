@extends('main')

@section('title', 'Payment Update - ')

@section('content')

<div class="container members standing admin">

<h1 style="color:#000;">Payment Update page</h1>
<div class="row">
        <div class="col-lg-4">
            <ul class="list-group">
                <li class="list-group-item">
                <a href="{{ route('admin.home') }}">Home</a>
                </li>

                <li class="list-group-item">
                <a href="{{ route('admin.members.index') }}">Registered Members</a>
                </li>

                <li class="list-group-item">
                <a href="{{ route('payment.index') }}">Payment Update</a>
                </li>

                <li class="list-group-item">
                    <a href="{{ route('admin.members.create') }}">Add new member</a>
                </li>

                 <li class="list-group-item">
                    <a href="{{ route('admin.members.approval') }}">Approval queue</a>
                </li>

                <li class="list-group-item">
                <a href="{{ route('discussions.create') }}">Post News</a>
                </li>
            </ul>
        </div>

        <div class="col-md-8">

             <table border = "1" width = "100%">
  
  <tr>
  
      <td>
          <table border = "1" width = "100%">
          <tr>
              <th><strong>Name</strong></th>
              <th><strong>Amount Paid</strong></th>
          </tr>
          @foreach ($users as $user)
            @if($user->payment > 0)
           
          <tr>
          <td><a href="{{url('/dashboard/'.$user->username)}}">{{ $user->fullname}}</a></td>
              
              <td>GH₵ {{ $user->payment }}</td>
          </tr>
          @endif
          @endforeach
          
          </table>

          
      </td>
      
</tr>

</table>

<center style="margin-top: 10px;">{{ $users->links() }}</center>

<div class="panel panel-default">

  <h1 class="panel-heading text-center" style="margin-top:10px;" >Update Payment</h1>
  
  <div class="panel-body">
      
      <form action="{{ route('payment.update') }}" method="post">
      
          {{ csrf_field() }}
          
          <div class="form-group row">
                      <label for="user" class="col-md-4 col-form-label text-md-right">{{ __('Select User') }}</label>

                      <div class="col-md-6">

                          <select id="user" class="form-control" name="user" >
                          
                          @foreach ($users as $user)
                            
                            <option>
                                  
                            
                                  {{ $user->username }}            
                            

                            </option>
                            
                          @endforeach

                          </select>
                          
                      </div>

                  </div>

          <div class="form-group">
          
              <label for="title"> Payment Amount </label>
              <input type="text" name="payment" id="payment" class="form-control">
          
          </div>
          
          <div class="form-group">
              <div class="text-center">
                   <button class="btn btn-success" type="submit">Update Payment</button>
              </div>
          </div>
      
        </form>
      
        </div>
  
  

    </div>

           
        </div>

    </div>

</div>

</div>


@endsection
