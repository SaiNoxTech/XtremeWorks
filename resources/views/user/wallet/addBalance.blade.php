@extends('user.layouts.dashboardlayout')
@section('content')

<div class="row">
    <div class="col-md-7">
        <div class="card-deck">
            <div class="card bg-gradient-default">
              <div class="card-body">
                <div class="mb-2">
                  <sup class="text-white">Current Balance: $</sup> <span class="h2 text-white">{{$wallet[0]->balance}}</span>
                     @if (session('status'))
                      <div class="alert alert-danger" role="alert">
                          {{ session('status') }}
                      </div>
                    @endif
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">{{ $error }}</div>
                    @endforeach
                  <div class="text-light mt-2 text-sm"><span class="text-success font-weight-600">Invite </span>and earn 5% of their Deposit, You can make minimum profit of 0.331$/Deposit.</div><br>
                  <div>
                    <span class="text-danger font-weight-600">Note:</span> <span class="text-light">your deposit amount must be greater than or equal to 7$.</span>
                  </div>
                </div>
                <form action="{{route('user.depositBalance')}}" method="POST">
                    @csrf
                <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                            <div class="input-group input-group-merge">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-credit-card"></i></span>
                            </div>
                            <input class="form-control" placeholder="Payment amount" name="AmountInUsd" type="number" required>
                            <div class="input-group-append">
                                <span class="input-group-text"><small class="font-weight-bold">USD</small></span>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-sm btn-block btn-neutral">Add credit</button>
                </form>
              </div>
              <!--div class="card-body">
                <div class="row">
                  <div class="col">
                    <small class="text-light">Orders: 60%</small>
                    <div class="progress progress-xs my-2">
                      <div class="progress-bar bg-success" style="width: 60%"></div>
                    </div>
                  </div>
                  <div class="col"><small class="text-light">Sales: 40%</small>
                    <div class="progress progress-xs my-2">
                      <div class="progress-bar bg-warning" style="width: 40%"></div>
                    </div>
                  </div>
                </div>
              </div-->
            </div>
            <!-- Username card -->
            <div class="card bg-gradient-danger">
              <!-- Card body -->
              <div class="card-body">
                <div class="row justify-content-between align-items-center">
                  <div class="col">
                    <img src="../../assets/dashboard/img/icons/cards/bitcoin.png" alt="Image placeholder" />
                  </div>
                  <div class="col-auto">
                    <span class="badge badge-lg badge-success">Comming Soon!</span>
                  </div>
                </div>
                <div class="my-4">
                  <span class="h6 surtitle text-light">
                    Username
                  </span>
                  <div class="h1 text-white">@ {{Auth::user()->username}}</div>
                </div>
                <div class="row">
                  <div class="col">
                    <span class="h6 surtitle text-light">Name</span>
                    <span class="d-block h3 text-white">{{Auth::user()->fullname}}</span>
                  </div>
                </div>
                <div>
                    <span class="text-success font-weight-600">Cryptocurrency</span> <span class="text-light">deposits are comming soon.</span>
                  </div>
              </div>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Recent Transcations</h3>
                </div>
                <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See all</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush" style="color:#fff !important;">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Trans Id</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Status</th>
                    <th scope="col">Done On</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($trans as $t)
                  @if($t->txStatus == "SUCCESS")
                  <tr class="bg-gradient-primary">
                  @else 
                  <tr class="bg-gradient-danger">
                  @endif
                    <th scope="row">
                      {{$t->orderId}}
                    </th>
                    <td>
                      $ {{$t->orderAmount}}
                    </td>
                    <td>
                      {{$t->txStatus}}
                    </td>
                    <td>
                      {{$t->updated_at}}
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
    </div>
</div>

<div class="row">
  <div class="col-lg-3"></div>
  <div class="col-lg-6" text-center>
    <div class="text-center">
      <h4 class="display-4 mb-5 mt-5">Available Payment Methods</h4>
      <div class="row justify-content-center">
        <div class="col-lg-2 col-4">
          <a href="" target="_blank" data-toggle="tooltip" data-original-title="UPI Payment Accepted">
            <img src="https://logodix.com/logo/1763566.png" class="img-fluid" >
          </a>
        </div>
        <div class="col-lg-2 col-4">
          <a href="" target="_blank" data-toggle="tooltip" data-original-title="Visa Accepted">
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Visa_Inc._logo.svg" class="img-fluid" >
          </a>
        </div>
        <div class="col-lg-2 col-4">
          <a href="" target="_blank" data-toggle="tooltip" data-original-title="Master Card Accepted">
            <img src="https://seeklogo.com/images/M/mastercard-logo-473B8726A9-seeklogo.com.png" class="img-fluid" >
          </a>
        </div>
        <div class="col-lg-2 col-4">
          <a href="" target="_blank" data-toggle="tooltip" data-original-title="AMEX Accepted">
            <img src="https://www.underconsideration.com/brandnew/archives/american_express_logo_wordmark_detail.png" class="img-fluid" >
          </a>
        </div>
        <div class="col-lg-2 col-4">
          <a href="" target="_blank" data-toggle="tooltip" data-original-title="Paytm Accepted">
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/5/5f/Paytm_logo.svg/1280px-Paytm_logo.svg.png" class="img-fluid" >
          </a>
        </div>

        <div class="col-lg-2 col-4">
          <a href="" target="_blank" data-toggle="tooltip" data-original-title="Paypal Accepted">
            <img src="https://seeklogo.net/wp-content/uploads/2015/11/PayPal-logo.png" class="img-fluid" >
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
</div> 

@stop