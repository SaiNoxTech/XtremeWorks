@extends('user.layouts.dashboardlayout')
@section('content')
  <div class="card-deck flex-column flex-xl-row">
    <div class="card">
      <div class="card-header bg-transparent">
        <h6 class="text-muted text-uppercase ls-1 mb-1">Overview</h6>
        <h2 class="h3 mb-0">Sales value</h2>
      </div>
      <div class="card-body">
        <!-- Chart -->
        <div class="chart">
          <!-- Chart wrapper -->
          <canvas id="chart-sales" class="chart-canvas"></canvas>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header bg-transparent">
        <div class="row align-items-center">
          <div class="col">
            <h6 class="text-uppercase text-muted ls-1 mb-1">Performance</h6>
            <h2 class="h3 mb-0">Total orders</h2>
          </div>
        </div>
      </div>
      <div class="card-body">
        <!-- Chart -->
        <div class="chart">
          <canvas id="chart-bars" class="chart-canvas"></canvas>
        </div>
      </div>
    </div>
    <!-- Progress track -->
    <div class="card">
      <!-- Card header -->
      <div class="card-header">
        <div class="row align-items-center">
          <div class="col-8">
            <!-- Surtitle -->
            <h6 class="surtitle">5/23 projects</h6>
            <!-- Title -->
            <h5 class="h3 mb-0">Progress track</h5>
          </div>
          <div class="col-4 text-right">
            <a href="alternative.html#!" class="btn btn-sm btn-neutral">Action</a>
          </div>
        </div>
      </div>
      <!-- Card body -->
      <div class="card-body">
        <!-- List group -->
        <ul class="list-group list-group-flush list my--3">
          <li class="list-group-item px-0">
            <div class="row align-items-center">
              <div class="col-auto">
                <!-- Avatar -->
                <a href="alternative.html#" class="avatar rounded-circle">
                  <img alt="Image placeholder" src="../../assets/dashboard/img/theme/bootstrap.jpg">
                </a>
              </div>
              <div class="col">
                <h5>Argon Design System</h5>
                <div class="progress progress-xs mb-0">
                  <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item px-0">
            <div class="row align-items-center">
              <div class="col-auto">
                <!-- Avatar -->
                <a href="alternative.html#" class="avatar rounded-circle">
                  <img alt="Image placeholder" src="../../assets/dashboard/img/theme/angular.jpg">
                </a>
              </div>
              <div class="col">
                <h5>Angular Now UI Kit PRO</h5>
                <div class="progress progress-xs mb-0">
                  <div class="progress-bar bg-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item px-0">
            <div class="row align-items-center">
              <div class="col-auto">
                <!-- Avatar -->
                <a href="alternative.html#" class="avatar rounded-circle">
                  <img alt="Image placeholder" src="../../assets/dashboard/img/theme/sketch.jpg">
                </a>
              </div>
              <div class="col">
                <h5>Black Dashboard</h5>
                <div class="progress progress-xs mb-0">
                  <div class="progress-bar bg-red" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item px-0">
            <div class="row align-items-center">
              <div class="col-auto">
                <!-- Avatar -->
                <a href="alternative.html#" class="avatar rounded-circle">
                  <img alt="Image placeholder" src="../../assets/dashboard/img/theme/react.jpg">
                </a>
              </div>
              <div class="col">
                <h5>React Material Dashboard</h5>
                <div class="progress progress-xs mb-0">
                  <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item px-0">
            <div class="row align-items-center">
              <div class="col-auto">
                <!-- Avatar -->
                <a href="alternative.html#" class="avatar rounded-circle">
                  <img alt="Image placeholder" src="../../assets/dashboard/img/theme/vue.jpg">
                </a>
              </div>
              <div class="col">
                <h5>Vue Paper UI Kit PRO</h5>
                <div class="progress progress-xs mb-0">
                  <div class="progress-bar bg-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xl-8">
      <div class="card">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Page visits</h3>
            </div>
            <div class="col text-right">
              <a href="alternative.html#!" class="btn btn-sm btn-primary">See all</a>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <!-- Projects table -->
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="sort" data-sort="name">Project</th>
                  <th scope="col" class="sort" data-sort="budget">Budget</th>
                  <th scope="col" class="sort" data-sort="status">Status</th>
                  <th scope="col">Users</th>
                  <th scope="col" class="sort" data-sort="completion">Completion</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody class="list">
                <tr>
                  <th scope="row">
                    <div class="media align-items-center">
                      <a href="alternative.html#" class="avatar rounded-circle mr-3">
                        <img alt="Image placeholder" src="../../assets/dashboard/img/theme/bootstrap.jpg">
                      </a>
                      <div class="media-body">
                        <span class="name mb-0 text-sm">Argon Design System</span>
                      </div>
                    </div>
                  </th>
                  <td class="budget">
                    $2500 USD
                  </td>
                  <td>
                    <span class="badge badge-dot mr-4">
                      <i class="bg-warning"></i>
                      <span class="status">pending</span>
                    </span>
                  </td>
                  <td>
                    <div class="avatar-group">
                      <a href="alternative.html#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                        <img alt="Image placeholder" src="../../assets/dashboard/img/theme/team-1.jpg">
                      </a>
                      <a href="alternative.html#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                        <img alt="Image placeholder" src="../../assets/dashboard/img/theme/team-2.jpg">
                      </a>
                      <a href="alternative.html#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                        <img alt="Image placeholder" src="../../assets/dashboard/img/theme/team-3.jpg">
                      </a>
                      <a href="alternative.html#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                        <img alt="Image placeholder" src="../../assets/dashboard/img/theme/team-4.jpg">
                      </a>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="completion mr-2">60%</span>
                      <div>
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="text-right">
                    <div class="dropdown">
                      <a class="btn btn-sm btn-icon-only text-light" href="alternative.html#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="alternative.html#">Action</a>
                        <a class="dropdown-item" href="alternative.html#">Another action</a>
                        <a class="dropdown-item" href="alternative.html#">Something else here</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <div class="media align-items-center">
                      <a href="alternative.html#" class="avatar rounded-circle mr-3">
                        <img alt="Image placeholder" src="../../assets/dashboard/img/theme/angular.jpg">
                      </a>
                      <div class="media-body">
                        <span class="name mb-0 text-sm">Angular Now UI Kit PRO</span>
                      </div>
                    </div>
                  </th>
                  <td class="budget">
                    $1800 USD
                  </td>
                  <td>
                    <span class="badge badge-dot mr-4">
                      <i class="bg-success"></i>
                      <span class="status">completed</span>
                    </span>
                  </td>
                  <td>
                    <div class="avatar-group">
                      <a href="alternative.html#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                        <img alt="Image placeholder" src="../../assets/dashboard/img/theme/team-1.jpg">
                      </a>
                      <a href="alternative.html#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                        <img alt="Image placeholder" src="../../assets/dashboard/img/theme/team-2.jpg">
                      </a>
                      <a href="alternative.html#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                        <img alt="Image placeholder" src="../../assets/dashboard/img/theme/team-3.jpg">
                      </a>
                      <a href="alternative.html#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                        <img alt="Image placeholder" src="../../assets/dashboard/img/theme/team-4.jpg">
                      </a>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="completion mr-2">100%</span>
                      <div>
                        <div class="progress">
                          <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="text-right">
                    <div class="dropdown">
                      <a class="btn btn-sm btn-icon-only text-light" href="alternative.html#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="alternative.html#">Action</a>
                        <a class="dropdown-item" href="alternative.html#">Another action</a>
                        <a class="dropdown-item" href="alternative.html#">Something else here</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <div class="media align-items-center">
                      <a href="alternative.html#" class="avatar rounded-circle mr-3">
                        <img alt="Image placeholder" src="../../assets/dashboard/img/theme/sketch.jpg">
                      </a>
                      <div class="media-body">
                        <span class="name mb-0 text-sm">Black Dashboard</span>
                      </div>
                    </div>
                  </th>
                  <td class="budget">
                    $3150 USD
                  </td>
                  <td>
                    <span class="badge badge-dot mr-4">
                      <i class="bg-danger"></i>
                      <span class="status">delayed</span>
                    </span>
                  </td>
                  <td>
                    <div class="avatar-group">
                      <a href="alternative.html#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                        <img alt="Image placeholder" src="../../assets/dashboard/img/theme/team-1.jpg">
                      </a>
                      <a href="alternative.html#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                        <img alt="Image placeholder" src="../../assets/dashboard/img/theme/team-2.jpg">
                      </a>
                      <a href="alternative.html#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                        <img alt="Image placeholder" src="../../assets/dashboard/img/theme/team-3.jpg">
                      </a>
                      <a href="alternative.html#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                        <img alt="Image placeholder" src="../../assets/dashboard/img/theme/team-4.jpg">
                      </a>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="completion mr-2">72%</span>
                      <div>
                        <div class="progress">
                          <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="text-right">
                    <div class="dropdown">
                      <a class="btn btn-sm btn-icon-only text-light" href="alternative.html#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="alternative.html#">Action</a>
                        <a class="dropdown-item" href="alternative.html#">Another action</a>
                        <a class="dropdown-item" href="alternative.html#">Something else here</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <div class="media align-items-center">
                      <a href="alternative.html#" class="avatar rounded-circle mr-3">
                        <img alt="Image placeholder" src="../../assets/dashboard/img/theme/react.jpg">
                      </a>
                      <div class="media-body">
                        <span class="name mb-0 text-sm">React Material Dashboard</span>
                      </div>
                    </div>
                  </th>
                  <td class="budget">
                    $4400 USD
                  </td>
                  <td>
                    <span class="badge badge-dot mr-4">
                      <i class="bg-info"></i>
                      <span class="status">on schedule</span>
                    </span>
                  </td>
                  <td>
                    <div class="avatar-group">
                      <a href="alternative.html#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                        <img alt="Image placeholder" src="../../assets/dashboard/img/theme/team-1.jpg">
                      </a>
                      <a href="alternative.html#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                        <img alt="Image placeholder" src="../../assets/dashboard/img/theme/team-2.jpg">
                      </a>
                      <a href="alternative.html#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                        <img alt="Image placeholder" src="../../assets/dashboard/img/theme/team-3.jpg">
                      </a>
                      <a href="alternative.html#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                        <img alt="Image placeholder" src="../../assets/dashboard/img/theme/team-4.jpg">
                      </a>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="completion mr-2">90%</span>
                      <div>
                        <div class="progress">
                          <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="text-right">
                    <div class="dropdown">
                      <a class="btn btn-sm btn-icon-only text-light" href="alternative.html#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="alternative.html#">Action</a>
                        <a class="dropdown-item" href="alternative.html#">Another action</a>
                        <a class="dropdown-item" href="alternative.html#">Something else here</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <div class="media align-items-center">
                      <a href="alternative.html#" class="avatar rounded-circle mr-3">
                        <img alt="Image placeholder" src="../../assets/dashboard/img/theme/vue.jpg">
                      </a>
                      <div class="media-body">
                        <span class="name mb-0 text-sm">Vue Paper UI Kit PRO</span>
                      </div>
                    </div>
                  </th>
                  <td class="budget">
                    $2200 USD
                  </td>
                  <td>
                    <span class="badge badge-dot mr-4">
                      <i class="bg-success"></i>
                      <span class="status">completed</span>
                    </span>
                  </td>
                  <td>
                    <div class="avatar-group">
                      <a href="alternative.html#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                        <img alt="Image placeholder" src="../../assets/dashboard/img/theme/team-1.jpg">
                      </a>
                      <a href="alternative.html#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                        <img alt="Image placeholder" src="../../assets/dashboard/img/theme/team-2.jpg">
                      </a>
                      <a href="alternative.html#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                        <img alt="Image placeholder" src="../../assets/dashboard/img/theme/team-3.jpg">
                      </a>
                      <a href="alternative.html#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                        <img alt="Image placeholder" src="../../assets/dashboard/img/theme/team-4.jpg">
                      </a>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="completion mr-2">100%</span>
                      <div>
                        <div class="progress">
                          <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="text-right">
                    <div class="dropdown">
                      <a class="btn btn-sm btn-icon-only text-light" href="alternative.html#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="alternative.html#">Action</a>
                        <a class="dropdown-item" href="alternative.html#">Another action</a>
                        <a class="dropdown-item" href="alternative.html#">Something else here</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <div class="media align-items-center">
                      <a href="alternative.html#" class="avatar rounded-circle mr-3">
                        <img alt="Image placeholder" src="../../assets/dashboard/img/theme/bootstrap.jpg">
                      </a>
                      <div class="media-body">
                        <span class="name mb-0 text-sm">Argon Design System</span>
                      </div>
                    </div>
                  </th>
                  <td class="budget">
                    $2500 USD
                  </td>
                  <td>
                    <span class="badge badge-dot mr-4">
                      <i class="bg-warning"></i>
                      <span class="status">pending</span>
                    </span>
                  </td>
                  <td>
                    <div class="avatar-group">
                      <a href="alternative.html#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                        <img alt="Image placeholder" src="../../assets/dashboard/img/theme/team-1.jpg">
                      </a>
                      <a href="alternative.html#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                        <img alt="Image placeholder" src="../../assets/dashboard/img/theme/team-2.jpg">
                      </a>
                      <a href="alternative.html#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                        <img alt="Image placeholder" src="../../assets/dashboard/img/theme/team-3.jpg">
                      </a>
                      <a href="alternative.html#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                        <img alt="Image placeholder" src="../../assets/dashboard/img/theme/team-4.jpg">
                      </a>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="completion mr-2">60%</span>
                      <div>
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="text-right">
                    <div class="dropdown">
                      <a class="btn btn-sm btn-icon-only text-light" href="alternative.html#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="alternative.html#">Action</a>
                        <a class="dropdown-item" href="alternative.html#">Another action</a>
                        <a class="dropdown-item" href="alternative.html#">Something else here</a>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4">
      <!-- Vector map -->
      <!--* Card header *-->
      <!--* Card body *-->
      <!--* Card init *-->
      <div class="card widget-calendar">
        <!-- Card header -->
        <div class="card-header">
          <div class="row align-items-center">
            <div class="col-8">
              <!-- Title -->
              <h5 class="h3 mb-0">Real time</h5>
            </div>
            <div class="col-4 text-right">
              <a href="alternative.html#!" class="btn btn-sm btn-neutral">Action</a>
            </div>
          </div>
        </div>
        <!-- Card body -->
        <div class="card-body">
          <!-- Vector map -->
          <div class="vector-map vector-map-sm" data-toggle="vectormap" data-map="world_mill"></div>
          <!-- List group -->
          <ul class="list-group list-group-flush list my--3">
            <li class="list-group-item px-0">
              <div class="row align-items-center">
                <div class="col-auto">
                  <!-- Country flag -->
                  <img src="../../assets/dashboard/img/icons/flags/US.png" alt="Country flag" />
                </div>
                <div class="col">
                  <small>Country:</small>
                  <h5 class="mb-0">United States</h5>
                </div>
                <div class="col">
                  <small>Visits:</small>
                  <h5 class="mb-0">2500</h5>
                </div>
                <div class="col">
                  <small>Bounce:</small>
                  <h5 class="mb-0">30%</h5>
                </div>
              </div>
            </li>
            <li class="list-group-item px-0">
              <div class="row align-items-center">
                <div class="col-auto">
                  <!-- Country flag -->
                  <img src="../../assets/dashboard/img/icons/flags/DE.png" alt="Country flag" />
                </div>
                <div class="col">
                  <small>Country:</small>
                  <h5 class="mb-0">Germany</h5>
                </div>
                <div class="col">
                  <small>Visits:</small>
                  <h5 class="mb-0">2500</h5>
                </div>
                <div class="col">
                  <small>Bounce:</small>
                  <h5 class="mb-0">30%</h5>
                </div>
              </div>
            </li>
            <li class="list-group-item px-0">
              <div class="row align-items-center">
                <div class="col-auto">
                  <!-- Country flag -->
                  <img src="../../assets/dashboard/img/icons/flags/GB.png" alt="Country flag" />
                </div>
                <div class="col">
                  <small>Country:</small>
                  <h5 class="mb-0">Great Britain</h5>
                </div>
                <div class="col">
                  <small>Visits:</small>
                  <h5 class="mb-0">2500</h5>
                </div>
                <div class="col">
                  <small>Bounce:</small>
                  <h5 class="mb-0">30%</h5>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="card-deck flex-column flex-xl-row">
    <!-- Members list group card -->
    <div class="card">
      <!-- Card header -->
      <div class="card-header">
        <!-- Title -->
        <h5 class="h3 mb-0">Team members</h5>
      </div>
      <!-- Card body -->
      <div class="card-body">
        <!-- List group -->
        <ul class="list-group list-group-flush list my--3">
          <li class="list-group-item px-0">
            <div class="row align-items-center">
              <div class="col-auto">
                <!-- Avatar -->
                <a href="alternative.html#" class="avatar rounded-circle">
                  <img alt="Image placeholder" src="../../assets/dashboard/img/theme/team-1.jpg">
                </a>
              </div>
              <div class="col ml--2">
                <h4 class="mb-0">
                  <a href="alternative.html#!">John Michael</a>
                </h4>
                <span class="text-success">●</span>
                <small>Online</small>
              </div>
              <div class="col-auto">
                <button type="button" class="btn btn-sm btn-primary">Add</button>
              </div>
            </div>
          </li>
          <li class="list-group-item px-0">
            <div class="row align-items-center">
              <div class="col-auto">
                <!-- Avatar -->
                <a href="alternative.html#" class="avatar rounded-circle">
                  <img alt="Image placeholder" src="../../assets/dashboard/img/theme/team-2.jpg">
                </a>
              </div>
              <div class="col ml--2">
                <h4 class="mb-0">
                  <a href="alternative.html#!">Alex Smith</a>
                </h4>
                <span class="text-warning">●</span>
                <small>In a meeting</small>
              </div>
              <div class="col-auto">
                <button type="button" class="btn btn-sm btn-primary">Add</button>
              </div>
            </div>
          </li>
          <li class="list-group-item px-0">
            <div class="row align-items-center">
              <div class="col-auto">
                <!-- Avatar -->
                <a href="alternative.html#" class="avatar rounded-circle">
                  <img alt="Image placeholder" src="../../assets/dashboard/img/theme/team-3.jpg">
                </a>
              </div>
              <div class="col ml--2">
                <h4 class="mb-0">
                  <a href="alternative.html#!">Samantha Ivy</a>
                </h4>
                <span class="text-danger">●</span>
                <small>Offline</small>
              </div>
              <div class="col-auto">
                <button type="button" class="btn btn-sm btn-primary">Add</button>
              </div>
            </div>
          </li>
          <li class="list-group-item px-0">
            <div class="row align-items-center">
              <div class="col-auto">
                <!-- Avatar -->
                <a href="alternative.html#" class="avatar rounded-circle">
                  <img alt="Image placeholder" src="../../assets/dashboard/img/theme/team-4.jpg">
                </a>
              </div>
              <div class="col ml--2">
                <h4 class="mb-0">
                  <a href="alternative.html#!">John Michael</a>
                </h4>
                <span class="text-success">●</span>
                <small>Online</small>
              </div>
              <div class="col-auto">
                <button type="button" class="btn btn-sm btn-primary">Add</button>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <!-- Checklist -->
    <div class="card">
      <!-- Card header -->
      <div class="card-header">
        <!-- Title -->
        <h5 class="h3 mb-0">To do list</h5>
      </div>
      <!-- Card body -->
      <div class="card-body p-0">
        <!-- List group -->
        <ul class="list-group list-group-flush" data-toggle="checklist">
          <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
            <div class="checklist-item checklist-item-success">
              <div class="checklist-info">
                <h5 class="checklist-title mb-0">Call with Dave</h5>
                <small>10:30 AM</small>
              </div>
              <div>
                <div class="custom-control custom-checkbox custom-checkbox-success">
                  <input class="custom-control-input" id="chk-todo-task-1" type="checkbox" checked>
                  <label class="custom-control-label" for="chk-todo-task-1"></label>
                </div>
              </div>
            </div>
          </li>
          <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
            <div class="checklist-item checklist-item-warning">
              <div class="checklist-info">
                <h5 class="checklist-title mb-0">Lunch meeting</h5>
                <small>10:30 AM</small>
              </div>
              <div>
                <div class="custom-control custom-checkbox custom-checkbox-warning">
                  <input class="custom-control-input" id="chk-todo-task-2" type="checkbox">
                  <label class="custom-control-label" for="chk-todo-task-2"></label>
                </div>
              </div>
            </div>
          </li>
          <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
            <div class="checklist-item checklist-item-info">
              <div class="checklist-info">
                <h5 class="checklist-title mb-0">Argon Dashboard Launch</h5>
                <small>10:30 AM</small>
              </div>
              <div>
                <div class="custom-control custom-checkbox custom-checkbox-info">
                  <input class="custom-control-input" id="chk-todo-task-3" type="checkbox">
                  <label class="custom-control-label" for="chk-todo-task-3"></label>
                </div>
              </div>
            </div>
          </li>
          <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
            <div class="checklist-item checklist-item-danger">
              <div class="checklist-info">
                <h5 class="checklist-title mb-0">Winter Hackaton</h5>
                <small>10:30 AM</small>
              </div>
              <div>
                <div class="custom-control custom-checkbox custom-checkbox-danger">
                  <input class="custom-control-input" id="chk-todo-task-4" type="checkbox" checked>
                  <label class="custom-control-label" for="chk-todo-task-4"></label>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <!-- Progress track -->
    <div class="card">
      <!-- Card header -->
      <div class="card-header">
        <!-- Title -->
        <h5 class="h3 mb-0">Progress track</h5>
      </div>
      <!-- Card body -->
      <div class="card-body">
        <!-- List group -->
        <ul class="list-group list-group-flush list my--3">
          <li class="list-group-item px-0">
            <div class="row align-items-center">
              <div class="col-auto">
                <!-- Avatar -->
                <a href="alternative.html#" class="avatar rounded-circle">
                  <img alt="Image placeholder" src="../../assets/dashboard/img/theme/bootstrap.jpg">
                </a>
              </div>
              <div class="col">
                <h5>Argon Design System</h5>
                <div class="progress progress-xs mb-0">
                  <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item px-0">
            <div class="row align-items-center">
              <div class="col-auto">
                <!-- Avatar -->
                <a href="alternative.html#" class="avatar rounded-circle">
                  <img alt="Image placeholder" src="../../assets/dashboard/img/theme/angular.jpg">
                </a>
              </div>
              <div class="col">
                <h5>Angular Now UI Kit PRO</h5>
                <div class="progress progress-xs mb-0">
                  <div class="progress-bar bg-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item px-0">
            <div class="row align-items-center">
              <div class="col-auto">
                <!-- Avatar -->
                <a href="alternative.html#" class="avatar rounded-circle">
                  <img alt="Image placeholder" src="../../assets/dashboard/img/theme/sketch.jpg">
                </a>
              </div>
              <div class="col">
                <h5>Black Dashboard</h5>
                <div class="progress progress-xs mb-0">
                  <div class="progress-bar bg-red" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item px-0">
            <div class="row align-items-center">
              <div class="col-auto">
                <!-- Avatar -->
                <a href="alternative.html#" class="avatar rounded-circle">
                  <img alt="Image placeholder" src="../../assets/dashboard/img/theme/react.jpg">
                </a>
              </div>
              <div class="col">
                <h5>React Material Dashboard</h5>
                <div class="progress progress-xs mb-0">
                  <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Footer -->
  @stop