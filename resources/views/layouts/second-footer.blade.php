<!-- Example row of columns -->
<div class="row wow animated">
      <div class="col-md-4 second-footer" style="margin-top:50px;">
        <h2>ABOUT US</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. <a href="/about" class="text-center btn btn-sm btn-info">Read more</a> </p>
      </div>
      <div class="col-md-4 second-footer" style="margin-top:50px;">
        <h2>CONTACT US</h2>

        @include('layouts.contact')
     
    </div>
        <div class="col-md-4 second-footer" style="margin-top:50px;">
        <address>   
         <h2>MEETING DETAILS</h2>
                  
      <!--Accordion wrapper-->
<div class="accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

<!-- Accordion card -->
<div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingOne">
        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <h5 class="mb-0">
            Ashanti Region <i class="fa fa-angle-down rotate-icon"></i>
            </h5>
        </a>
    </div>

    <!-- Card body -->
    <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionEx" >
        <div class="card-body">
            <ul style="margin-left: 30px;" class="fa-ul">
                     
                    <li>
                    <i class="fas fa-calendar"></i> <b> When:</b><span style="font-size: 14px;"> Every 1st Friday of the Month</span>
                    </li>

                    <li>
                        <i class="fas fa-clock"></i> <b> Time:</b> 6PM – 8PM
                    </li>

                    <li>
                    <i class="fas fa-venus"></i> <b> Venue:</b> GCB Club House
                    </li>
            
            </ul>

        </div>
    </div>
</div>
<!-- Accordion card -->

<!-- Accordion card -->
<div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo">
        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <h5 class="mb-0">
            Brong Ahafo Region  <i class="fa fa-angle-down rotate-icon"></i>
            </h5>
        </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordionEx" >
        <div class="card-body">
        <ul style="margin-left: 30px;" class="fa-ul">
                    <li>
                        <i class="fas fa-calendar"></i> Monday - Friday
                    </li>
                    <li>
                        <i class="fas fa-clock"></i> 8:30 AM – 9:30 PM
                    </li>
            
            </ul>

               <br>
            
            <ul style="margin-left: 30px;" class="fa-ul">
                 <li>
                     <i class="fas fa-calendar"></i> Saturday – Sunday
                 </li>
                 <li>
                     <i class="fas fa-clock"></i> 10 AM – 7:30 PM
                 </li>
             </ul>
        </div>
    </div>
</div>
<!-- Accordion card -->

<!-- Accordion card -->
<div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingThree">
        <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <h5 class="mb-0">
            Central Region  <i class="fa fa-angle-down rotate-icon"></i>
            </h5>
        </a>
    </div>

    <!-- Card body -->
    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordionEx">
        <div class="card-body">
        <ul style="margin-left: 30px;" class="fa-ul">
                    <li>
                        <i class="fas fa-calendar"></i> Monday - Friday
                    </li>
                    <li>
                        <i class="fas fa-clock"></i> 8:30 AM – 9:30 PM
                    </li>
            
            </ul>

               <br>
            
            <ul style="margin-left: 30px;" class="fa-ul">
                 <li>
                     <i class="fas fa-calendar"></i> Saturday – Sunday
                 </li>
                 <li>
                     <i class="fas fa-clock"></i> 10 AM – 7:30 PM
                 </li>
             </ul>
        </div>
    </div>
</div>
<!-- Accordion card -->

<!-- Accordion card -->
<div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingFour">
        <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            <h5 class="mb-0">
            Eastern Region <i class="fa fa-angle-down rotate-icon"></i>
            </h5>
        </a>
    </div>

    <!-- Card body -->
    <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordionEx">
        <div class="card-body">
        <ul style="margin-left: 30px;" class="fa-ul">
                    <li>
                        <i class="fas fa-calendar"></i> Monday - Friday
                    </li>
                    <li>
                        <i class="fas fa-clock"></i> 8:30 AM – 9:30 PM
                    </li>
            
            </ul>

               <br>
            
            <ul style="margin-left: 30px;" class="fa-ul">
                 <li>
                     <i class="fas fa-calendar"></i> Saturday – Sunday
                 </li>
                 <li>
                     <i class="fas fa-clock"></i> 10 AM – 7:30 PM
                 </li>
             </ul>
        </div>
    </div>
</div>
<!-- Accordion card -->

<!-- Accordion card -->
<div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingFive">
        <a class="collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            <h5 class="mb-0">
            Greater Accra Region <i class="fa fa-angle-down rotate-icon"></i>
            </h5>
        </a>
    </div>

    <!-- Card body -->
    <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordionEx">
        <div class="card-body">
        <ul style="margin-left: 30px;" class="fa-ul">
                    <li>
                        <i class="fas fa-calendar"></i> Monday - Friday
                    </li>
                    <li>
                        <i class="fas fa-clock"></i> 8:30 AM – 9:30 PM
                    </li>
            
            </ul>

               <br>
            
            <ul style="margin-left: 30px;" class="fa-ul">
                 <li>
                     <i class="fas fa-calendar"></i> Saturday – Sunday
                 </li>
                 <li>
                     <i class="fas fa-clock"></i> 10 AM – 7:30 PM
                 </li>
             </ul>
        </div>
    </div>
</div>
<!-- Accordion card -->

<!-- Accordion card -->
<div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingSix">
        <a class="collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
            <h5 class="mb-0">
            Northern Region  <i class="fa fa-angle-down rotate-icon"></i>
            </h5>
        </a>
    </div>

    <!-- Card body -->
    <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#accordionEx">
        <div class="card-body">
        <ul style="margin-left: 30px;" class="fa-ul">
                    <li>
                        <i class="fas fa-calendar"></i> Monday - Friday
                    </li>
                    <li>
                        <i class="fas fa-clock"></i> 8:30 AM – 9:30 PM
                    </li>
            
            </ul>

               <br>
            
            <ul style="margin-left: 30px;" class="fa-ul">
                 <li>
                     <i class="fas fa-calendar"></i> Saturday – Sunday
                 </li>
                 <li>
                     <i class="fas fa-clock"></i> 10 AM – 7:30 PM
                 </li>
             </ul>
        </div>
    </div>
</div>
<!-- Accordion card -->

<!-- Accordion card -->
<div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingSeven">
        <a class="collapsed" data-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
            <h5 class="mb-0">
            Upper West Region  <i class="fa fa-angle-down rotate-icon"></i>
            </h5>
        </a>
    </div>

    <!-- Card body -->
    <div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven" data-parent="#accordionEx">
        <div class="card-body">
        <ul style="margin-left: 30px;" class="fa-ul">
                    <li>
                        <i class="fas fa-calendar"></i> Monday - Friday
                    </li>
                    <li>
                        <i class="fas fa-clock"></i> 8:30 AM – 9:30 PM
                    </li>
            
            </ul>

               <br>
            
            <ul style="margin-left: 30px;" class="fa-ul">
                 <li>
                     <i class="fas fa-calendar"></i> Saturday – Sunday
                 </li>
                 <li>
                     <i class="fas fa-clock"></i> 10 AM – 7:30 PM
                 </li>
             </ul>
        </div>
    </div>
</div>
<!-- Accordion card -->

<!-- Accordion card -->
<div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingEight">
        <a class="collapsed" data-toggle="collapse" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
            <h5 class="mb-0">
            Upper East Region <i class="fa fa-angle-down rotate-icon"></i>
            </h5>
        </a>
    </div>

    <!-- Card body -->
    <div id="collapseEight" class="collapse" role="tabpanel" aria-labelledby="headingEight" data-parent="#accordionEx">
        <div class="card-body">
        <ul style="margin-left: 30px;" class="fa-ul">
                    <li>
                        <i class="fas fa-calendar"></i> Monday - Friday
                    </li>
                    <li>
                        <i class="fas fa-clock"></i> 8:30 AM – 9:30 PM
                    </li>
            
            </ul>

               <br>
            
            <ul style="margin-left: 30px;" class="fa-ul">
                 <li>
                     <i class="fas fa-calendar"></i> Saturday – Sunday
                 </li>
                 <li>
                     <i class="fas fa-clock"></i> 10 AM – 7:30 PM
                 </li>
             </ul>
        </div>
    </div>
</div>
<!-- Accordion card -->

<!-- Accordion card -->
<div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingNine">
        <a class="collapsed" data-toggle="collapse" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
            <h5 class="mb-0">
            Volta Region  <i class="fa fa-angle-down rotate-icon"></i>
            </h5>
        </a>
    </div>

    <!-- Card body -->
    <div id="collapseNine" class="collapse" role="tabpanel" aria-labelledby="headingNine" data-parent="#accordionEx">
        <div class="card-body">
        <ul style="margin-left: 30px;" class="fa-ul">
                    <li>
                        <i class="fas fa-calendar"></i> Monday - Friday
                    </li>
                    <li>
                        <i class="fas fa-clock"></i> 8:30 AM – 9:30 PM
                    </li>
            
            </ul>

               <br>
            
            <ul style="margin-left: 30px;" class="fa-ul">
                 <li>
                     <i class="fas fa-calendar"></i> Saturday – Sunday
                 </li>
                 <li>
                     <i class="fas fa-clock"></i> 10 AM – 7:30 PM
                 </li>
             </ul>
        </div>
    </div>
</div>
<!-- Accordion card -->

<!-- Accordion card -->
<div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTen">
        <a class="collapsed" data-toggle="collapse" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
            <h5 class="mb-0">
            Western Region   <i class="fa fa-angle-down rotate-icon"></i>
            </h5>
        </a>
    </div>

    <!-- Card body -->
    <div id="collapseTen" class="collapse" role="tabpanel" aria-labelledby="headingTen" data-parent="#accordionEx">
        <div class="card-body">
        <ul style="margin-left: 30px;" class="fa-ul">
                    <li>
                        <i class="fas fa-calendar"></i> Monday - Friday
                    </li>
                    <li>
                        <i class="fas fa-clock"></i> 8:30 AM – 9:30 PM
                    </li>
            
            </ul>

               <br>
            
            <ul style="margin-left: 30px;" class="fa-ul">
                 <li>
                     <i class="fas fa-calendar"></i> Saturday – Sunday
                 </li>
                 <li>
                     <i class="fas fa-clock"></i> 10 AM – 7:30 PM
                 </li>
             </ul>
        </div>
    </div>
</div>
<!-- Accordion card -->

<!-- Accordion card -->
<div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwentyOne">
        <a class="collapsed" data-toggle="collapse" href="#collapseTwentyOne" aria-expanded="false" aria-controls="collapseTwentyOne">
            <h5 class="mb-0">
            Diaspora  <i class="fa fa-angle-down rotate-icon"></i>
            </h5>
        </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwentyOne" class="collapse" role="tabpanel" aria-labelledby="headingTwentyOne" data-parent="#accordionEx">
        <div class="card-body">
        <ul style="margin-left: 30px;" class="fa-ul">
                    <li>
                        <i class="fas fa-calendar"></i> Monday - Friday
                    </li>
                    <li>
                        <i class="fas fa-clock"></i> 8:30 AM – 9:30 PM
                    </li>
            
            </ul>

               <br>
            
            <ul style="margin-left: 30px;" class="fa-ul">
                 <li>
                     <i class="fas fa-calendar"></i> Saturday – Sunday
                 </li>
                 <li>
                     <i class="fas fa-clock"></i> 10 AM – 7:30 PM
                 </li>
             </ul>
        </div>
    </div>
</div>
<!-- Accordion card -->

</div>
<!--/.Accordion wrapper-->
        </address>
      </div>
    </div>

  