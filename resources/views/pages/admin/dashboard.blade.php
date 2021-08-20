@extends('layouts.admin')
@section('title', 'NOMADS | Dashboard')
@section('header', 'Dasboard')
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">

    </div>
</div>
@endsection
@push('stats')
    {{-- Card stats  --}}
    <div class="row">
        {{-- Stats Travel Packages  --}}
       <div class="col-xl-3 col-md-6">
         <div class="card card-stats">
           <div class="card-body">
             <div class="row">
               <div class="col">
                 <h5 class="card-title text-uppercase text-muted mb-0">Travel Package</h5>
                 <span class="h2 font-weight-bold mb-0">20</span>
               </div>
               <div class="col-auto">
                 <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                   <i class="ni ni-pin-3"></i>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>

        {{-- Stats Transactions  --}}
       <div class="col-xl-3 col-md-6">
         <div class="card card-stats">
           <div class="card-body">
             <div class="row">
               <div class="col">
                 <h5 class="card-title text-uppercase text-muted mb-0">Transactions</h5>
                 <span class="h2 font-weight-bold mb-0">14</span>
               </div>
               <div class="col-auto">
                 <div class="icon icon-shape bg-gradient-yellow text-white rounded-circle shadow">
                   <i class="ni ni-money-coins"></i>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>

        {{-- Stats Transaction Pending  --}}
       <div class="col-xl-3 col-md-6">
         <div class="card card-stats">
           <div class="card-body">
             <div class="row">
               <div class="col">
                 <h5 class="card-title text-uppercase text-muted mb-0" style="font-size: 8px">Transaction Pending</h5>
                 <span class="h2 font-weight-bold mb-0">2</span>
               </div>
               <div class="col-auto">
                 <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                   <i class="ni ni-send"></i>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>

        {{-- Stats Transaction Success  --}}
       <div class="col-xl-3 col-md-6">
         <div class="card card-stats">
           <div class="card-body">
             <div class="row">
               <div class="col">
                 <h5 class="card-title text-uppercase text-muted mb-0" style="font-size: 8px">Transaction Success</h5>
                 <span class="h2 font-weight-bold mb-0">12</span>
               </div>
               <div class="col-auto">
                 <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                   <i class="ni ni-check-bold"></i>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
@endpush