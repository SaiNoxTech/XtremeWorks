@extends('user.layouts.dashboardlayout')
@section('content')

 

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Details & Steps for the Withdrawl</h3>
                </div>
                <div class="card-body" style="height:310px; overflow:auto;">
                  <h3 class="card-title mb-3">Details & Steps regarding the Withdrawl</h3>
                  <p class="card-text mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non dolore est fuga nobis ipsum illum eligendi nemo iure repellat, soluta, optio minus ut reiciendis voluptates enim impedit veritatis officiis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non dolore est fuga nobis ipsum illum eligendi nemo iure repellat, soluta, optio minus ut reiciendis voluptates enim impedit veritatis officiis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non dolore est fuga nobis ipsum illum eligendi nemo iure repellat, soluta, optio minus ut reiciendis voluptates enim impedit veritatis officiis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non dolore est fuga nobis ipsum illum eligendi nemo iure repellat, soluta, optio minus ut reiciendis voluptates enim impedit veritatis officiis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non dolore est fuga nobis ipsum illum eligendi nemo iure repellat, soluta, optio minus ut reiciendis voluptates enim impedit veritatis officiis.</p>
                  
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-wrapper">
            <!-- Input groups -->
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                <h3 class="mb-0">Submit a Withdrawl Request</h3>
                </div>
                <!-- Card body -->
                <div class="card-body">
                <form action="{{route('user.depositBalance')}}" method="POST">
                    @csrf
                        <div class="mb-2">
                          <sup class="text-dark">Current Balance: $</sup> <span class="h2 text-dark">{{$wallet[0]->balance}}</span>
                             @if (session('status'))
                              <div class="alert alert-danger" role="alert">
                                  {{ session('status') }}
                              </div>
                            @endif
                            @foreach ($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">{{ $error }}</div>
                            @endforeach
                          <div class="text-dark mt-2 text-sm"><span class="text-success font-weight-600">Invite </span>and earn 5% of their Deposit, You can make minimum profit of 0.331$/Deposit.</div><br>
                          <div>
                            <span class="text-danger font-weight-600">Note:</span> <span class="text-dark">In order to make a withdrawl your wallet balance must be greater then or equal to 3$.</span>
                          </div>
                        </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-credit-card"></i></span>
                                </div>
                                <input class="form-control" placeholder="Enter Amount" type="text">
                                <div class="input-group-append">
                                <span class="input-group-text"><small class="font-weight-bold">USD</small></span>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-sm btn-block btn-primary">Request Withdrawl</button>
                </form>
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-4">
             <!-- Paypal card -->
          <div class="card">
            <!-- Card body -->
            <div class="card-body">
              <div class="row justify-content-between align-items-center">
                <div class="col">
                  <img src="../../assets/dashboard/img/icons/cards/paypal.png" alt="Image placeholder" />
                </div>
                <div class="col-auto">
                  <span class="badge badge-lg badge-warning">Not Active</span>
                </div>
              </div>
              <div class="my-4">
                <span class="h6 surtitle text-muted">
                  PayPal E-mail
                </span>
                <div class="h1"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="553f3a3d3b7b263b3a22153238343c397b363a38">{{Auth::user()->email}}</a></div>
              </div>
              <div class="row">
                <div class="col">
                  <span class="h6 surtitle text-muted">Name</span>
                  <span class="d-block h3">{{Auth::user()->fullname}}</span>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>





</div> 
@stop