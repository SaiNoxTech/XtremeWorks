<!DOCTYPE html>
<html>

<head>
  @include("user.includes.head")
</head>

<body>
    @include("user.includes.header")
    <div class="header pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 d-inline-block mb-0">XtremeWorkers</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links">
                  <li class="breadcrumb-item"><a href="alternative.html#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="alternative.html#">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Users</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="alternative.html#" class="btn btn-sm btn-neutral">New</a>
              <a href="alternative.html#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-3 col-md-6">
          <div class="card bg-gradient-primary border-0">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0 text-white">Wallet Balance</h5>
                  <span class="h2 font-weight-bold mb-0 text-white"><sup class="text-white">$</sup> {{$wallet[0]->balance}}</span>
                  <div class="progress progress-xs mt-3 mb-0">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
                  </div>
                </div>
                <div class="col-auto">
                  <button type="button" class="btn btn-sm btn-neutral mr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-h"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="alternative.html#">Request Withdrawl</a>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-sm">
                <a href="alternative.html#!" class="text-nowrap text-white font-weight-600">Under Review Balance: $0</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card bg-gradient-info border-0">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0 text-white">Contacts</h5>
                  <span class="h2 font-weight-bold mb-0 text-white">123/267</span>
                  <div class="progress progress-xs mt-3 mb-0">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                  </div>
                </div>
                <div class="col-auto">
                  <button type="button" class="btn btn-sm btn-neutral mr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-h"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="alternative.html#">Action</a>
                    <a class="dropdown-item" href="alternative.html#">Another action</a>
                    <a class="dropdown-item" href="alternative.html#">Something else here</a>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-sm">
                <a href="alternative.html#!" class="text-nowrap text-white font-weight-600">See details</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card bg-gradient-danger border-0">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0 text-white">Items sold</h5>
                  <span class="h2 font-weight-bold mb-0 text-white">200/300</span>
                  <div class="progress progress-xs mt-3 mb-0">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                  </div>
                </div>
                <div class="col-auto">
                  <button type="button" class="btn btn-sm btn-neutral mr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-h"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="alternative.html#">Action</a>
                    <a class="dropdown-item" href="alternative.html#">Another action</a>
                    <a class="dropdown-item" href="alternative.html#">Something else here</a>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-sm">
                <a href="alternative.html#!" class="text-nowrap text-white font-weight-600">See details</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card bg-gradient-default border-0">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0 text-white">Notifications</h5>
                  <span class="h2 font-weight-bold mb-0 text-white">50/62</span>
                  <div class="progress progress-xs mt-3 mb-0">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                  </div>
                </div>
                <div class="col-auto">
                  <button type="button" class="btn btn-sm btn-neutral mr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-h"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="alternative.html#">Action</a>
                    <a class="dropdown-item" href="alternative.html#">Another action</a>
                    <a class="dropdown-item" href="alternative.html#">Something else here</a>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-sm">
                <a href="alternative.html#!" class="text-nowrap text-white font-weight-600">See details</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    @yield('content')


    @include("user.includes.footer")
</div>
</div>

<script src="../../assets/dashboard/vendor/jquery/dist/jquery.min.js"></script>
<script src="../../assets/dashboard/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/dashboard/vendor/js-cookie/js.cookie.js"></script>
<script src="../../assets/dashboard/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="../../assets/dashboard/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<script src="../../assets/dashboard/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="../../assets/dashboard/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../../assets/dashboard/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../../assets/dashboard/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
  <script src="../../assets/dashboard/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="../../assets/dashboard/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="../../assets/dashboard/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="../../assets/dashboard/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
<script src="../../assets/dashboard/vendor/chart.js/dist/Chart.min.js"></script>
<script src="../../assets/dashboard/vendor/chart.js/dist/Chart.extension.js"></script>
<script src="../../assets/dashboard/vendor/jvectormap-next/jquery-jvectormap.min.js"></script>
<script src="../../assets/dashboard/js/vendor/jvectormap/jquery-jvectormap-world-mill.js"></script>
<script src="../../assets/dashboard/js/argon.min.js%3Fv=1.1.0"></script>
<script src="../../assets/dashboard/js/demo.min.js"></script>

<script>

</body>

</html>