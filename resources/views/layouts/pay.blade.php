@extends('main')
@section('title', 'How To Pay - ')
@section('content')

<div class="container members pay animated fadeInDown">
    <h1>How to Pay Dues</h1>

<center><div class="col-md-5">



<p>Kindly ensure you have a working sim card and registered with Mobile Money Service. Regardless of the Service provider(Network):</p>

<ul >
    <li>Deal the short code *0000#</li>
    <li>Enter Dues Amount</li>
    <li>Enter Secret 4 digit Pin</li>
</ul>

<b>Note:</b> Amount entered will be debited from your wallet and credited into the Association's account. An update will be done and email forward to you to confirm your transaction.
<br>
<b> Thank you! </b>
<br>
<img src="{{asset('/images/MobileMoneyGhana.jpg')}}" alt="mobile-money" width="220px">



</div></center>

</div>

@endsection