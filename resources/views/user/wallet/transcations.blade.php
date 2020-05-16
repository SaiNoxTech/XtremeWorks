@extends('user.layouts.dashboardlayout')
@section('content')

 
    <div class="row">
      <div class="col">
        <div class="card">
          <!-- Card header -->
          <div class="card-header">
            <h3 class="mb-0">All Transaction done on XtremeWorkers</h3>
            <p class="text-sm mb-0">
              This is an exmaple of datatable using the well known datatables.net plugin. This is a minimal setup in order to get started fast.
            </p>
          </div>
          <div class="table-responsive py-4">
            <table class="table table-flush" id="datatable-buttons" style="color:#fff !important;">
              <thead class="thead-light">
                <tr>
                  <th>ID</th>
                  <th>Order Id</th>
                  <th>Reference Id</th>
                  <th>Amount</th>
                  <th>Payment Mode</th>
                  <th>Transaction Message</th>
                  <th>Transaction Status</th>
                  <th>Done on</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Order Id</th>
                    <th>Reference Id</th>
                    <th>Amount</th>
                    <th>Payment Mode</th>
                    <th>Transaction Message</th>
                    <th>Transaction Status</th>
                    <th>Done on</th>
                </tr>
              </tfoot>
              <tbody>
                @foreach($trans as $t)
                @if($t->txStatus == "SUCCESS")
                  <tr class="bg-gradient-primary">
                  @else 
                  <tr class="bg-gradient-danger">
                @endif
                  <td>{{$t->id}}</td>
                  <td>{{$t->orderId}}</td>
                  <td>{{$t->referenceId}}</td>
                  <td>$ {{$t->orderAmount}}</td>
                  <td>{{$t->paymentMode}}</td>
                  <td>{{$t->txMsg}}</td>
                  <td>{{$t->txStatus}}</td>
                  <td>{{$t->updated_at}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>




</div> 
@stop