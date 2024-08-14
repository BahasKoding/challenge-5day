@extends('layout.main')
@section('title', 'Customer Management')
@section('page_title', 'Customer Management')
@section('content')

    {{-- Page Heading --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800">@yield('page_title')</h1>
    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="h5 mb-0 text-primary-400">Maintenance - Finance</h3>
    </div>

    {{-- ! Card Content Row --}}
        <div class="row">

            {{-- Total Customer Card --}}
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <strong class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total Customer
                                </strong>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">50</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i> <!-- Icon untuk total customer -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Active Location Card --}}
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <strong class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Active Location
                                </strong>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-map-marker-alt fa-2x text-gray-300"></i> <!-- Icon untuk lokasi -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Cash Type Card --}}
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <strong class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Cash Type
                                </strong>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-money-bill-alt fa-2x text-gray-300"></i> <!-- Icon untuk jenis uang -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Non Active Card --}}
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <strong class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Non Active
                                </strong>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user-times fa-2x text-gray-300"></i> <!-- Icon untuk non aktif -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    {{-- ! End Card Content Row --}}



    {{-- ! Tables --}}
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="customer-list-tab" data-bs-toggle="tab" href="#customer-list" role="tab" aria-controls="customer-list" aria-selected="true">Customer List</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="activities-tab" data-bs-toggle="tab" href="#activities" role="tab" aria-controls="activities" aria-selected="false">Activities</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="statistic-tab" data-bs-toggle="tab" href="#statistic" role="tab" aria-controls="statistic" aria-selected="false">Statistic</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="summary-tab" data-bs-toggle="tab" href="#summary" role="tab" aria-controls="summary" aria-selected="false">Summary</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    {{-- ! Customer List Tab --}}
                    <div class="tab-pane fade show active" id="customer-list" role="tabpanel" aria-labelledby="customer-list-tab">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Tambah Data
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>

                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('customers.store') }}" method="POST">
                                            @csrf
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="branch" class="form-label">Branch</label>
                                                    <input type="text" class="form-control" id="branch" name="branch" value="Main Branch" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="code" class="form-label">Code</label>
                                                    <input type="text" class="form-control" id="code" name="code" value="BR001" required>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="curr" class="form-label">Currency</label>
                                                    <input type="text" class="form-control" id="curr" name="curr" value="USD" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="initial" class="form-label">Initial</label>
                                                    <input type="text" class="form-control" id="initial" name="initial" value="M" required>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="address_primary" class="form-label">Address Primary</label>
                                                    <input type="text" class="form-control" id="address_primary" name="address_primary" value="123 Main St, Jakarta" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="address_secondary" class="form-label">Address Secondary</label>
                                                    <input type="text" class="form-control" id="address_secondary" name="address_secondary" value="456 Side St, Jakarta">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="customer" class="form-label">Customer</label>
                                                    <input type="text" class="form-control" id="customer" name="customer" value="John Doe" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="phone" class="form-label">Phone</label>
                                                    <input type="tel" class="form-control" id="phone" name="phone" value="+62 812 3456 7890">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email" value="johndoe@example.com">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="category" class="form-label">Category</label>
                                                    <input type="text" class="form-control" id="category" name="category" value="Retail">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="regions" class="form-label">Regions</label>
                                                    <input type="text" class="form-control" id="regions" name="regions" value="Jakarta, Surabaya">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="npwp" class="form-label">NPWP</label>
                                                    <input type="text" class="form-control" id="npwp" name="npwp" value="123456789012345">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="bank_description" class="form-label">Bank Description</label>
                                                    <input type="text" class="form-control" id="bank_description" name="bank_description" value="Bank ABC">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="receivable" class="form-label">Receivable</label>
                                                    <input type="number" class="form-control" id="receivable" name="receivable" value="500000">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="discount" class="form-label">Discount</label>
                                                    <input type="number" class="form-control" id="discount" name="discount" value="10">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="vat" class="form-label">VAT / PPN</label>
                                                    <input type="number" class="form-control" id="vat" name="vat" value="5">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="sales" class="form-label">Sales</label>
                                                    <input type="number" class="form-control" id="sales" name="sales" value="1000000">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="return" class="form-label">Return</label>
                                                    <input type="number" class="form-control" id="return" name="return" value="10000">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="prepaid" class="form-label">Prepaid</label>
                                                    <input type="number" class="form-control" id="prepaid" name="prepaid" value="20000">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="cost_center_dept" class="form-label">Cost Center - Dept</label>
                                                    <input type="text" class="form-control" id="cost_center_dept" name="cost_center_dept" value="Dept 01">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="cost_center_cost" class="form-label">Cost Center - Cost</label>
                                                    <input type="text" class="form-control" id="cost_center_cost" name="cost_center_cost" value="Cost 01">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="account_balance_currency" class="form-label">Account Balance - Currency</label>
                                                    <input type="number" class="form-control" id="account_balance_currency" name="account_balance_currency" value="300000">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="account_balance_rupiah" class="form-label">Account Balance - Rupiah</label>
                                                    <input type="number" class="form-control" id="account_balance_rupiah" name="account_balance_rupiah" value="5000000">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="account_balance_dn_payment" class="form-label">Account Balance - Dn. Payment</label>
                                                    <input type="number" class="form-control" id="account_balance_dn_payment" name="account_balance_dn_payment" value="150000">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="since" class="form-label">Since</label>
                                                    <input type="date" class="form-control" id="since" name="since" value="2024-01-01">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="type" class="form-label">Type</label>
                                                    <input type="text" class="form-control" id="type" name="type" value="Type A">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="audit" class="form-label">Audit</label>
                                                    <input type="text" class="form-control" id="audit" name="audit" value="Audit 001">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </form>

                                        {{-- <form>
                                            @csrf
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="branch" class="form-label">Branch</label>
                                                    <input type="text" class="form-control" id="branch" name="branch" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="code" class="form-label">Code</label>
                                                    <input type="text" class="form-control" id="code" name="code" required>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="curr" class="form-label">Currency</label>
                                                    <input type="text" class="form-control" id="curr" name="curr" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="initial" class="form-label">Initial</label>
                                                    <input type="text" class="form-control" id="initial" name="initial" required>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="address_primary" class="form-label">Address Primary</label>
                                                    <input type="text" class="form-control" id="address_primary" name="address_primary" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="address_secondary" class="form-label">Address Secondary</label>
                                                    <input type="text" class="form-control" id="address_secondary" name="address_secondary">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="customer" class="form-label">Customer</label>
                                                    <input type="text" class="form-control" id="customer" name="customer" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="phone" class="form-label">Phone</label>
                                                    <input type="tel" class="form-control" id="phone" name="phone">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="category" class="form-label">Category</label>
                                                    <input type="text" class="form-control" id="category" name="category">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="regions" class="form-label">Regions</label>
                                                    <input type="text" class="form-control" id="regions" name="regions">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="npwp" class="form-label">NPWP</label>
                                                    <input type="text" class="form-control" id="npwp" name="npwp">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="bank_description" class="form-label">Bank Description</label>
                                                    <input type="text" class="form-control" id="bank_description" name="bank_description">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="receivable" class="form-label">Receivable</label>
                                                    <input type="number" class="form-control" id="receivable" name="receivable">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="discount" class="form-label">Discount</label>
                                                    <input type="number" class="form-control" id="discount" name="discount">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="vat" class="form-label">VAT / PPN</label>
                                                    <input type="number" class="form-control" id="vat" name="vat">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="sales" class="form-label">Sales</label>
                                                    <input type="number" class="form-control" id="sales" name="sales">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="return" class="form-label">Return</label>
                                                    <input type="number" class="form-control" id="return" name="return">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="prepaid" class="form-label">Prepaid</label>
                                                    <input type="number" class="form-control" id="prepaid" name="prepaid">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="cost_center_dept" class="form-label">Cost Center - Dept</label>
                                                    <input type="text" class="form-control" id="cost_center_dept" name="cost_center_dept">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="cost_center_cost" class="form-label">Cost Center - Cost</label>
                                                    <input type="text" class="form-control" id="cost_center_cost" name="cost_center_cost">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="account_balance_currency" class="form-label">Account Balance - Currency</label>
                                                    <input type="number" class="form-control" id="account_balance_currency" name="account_balance_currency">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="account_balance_rupiah" class="form-label">Account Balance - Rupiah</label>
                                                    <input type="number" class="form-control" id="account_balance_rupiah" name="account_balance_rupiah">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="account_balance_dn_payment" class="form-label">Account Balance - Dn. Payment</label>
                                                    <input type="number" class="form-control" id="account_balance_dn_payment" name="account_balance_dn_payment">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="since" class="form-label">Since</label>
                                                    <input type="date" class="form-control" id="since" name="since">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="type" class="form-label">Type</label>
                                                    <input type="text" class="form-control" id="type" name="type">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="audit" class="form-label">Audit</label>
                                                    <input type="text" class="form-control" id="audit" name="audit">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </form> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Branch</th>
                                        <th>Code</th>
                                        <th>Curr</th>
                                        <th>Initial</th>
                                        <th>Address Primary</th>
                                        <th>Address Secondary</th>
                                        <th>Customer</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Category</th>
                                        <th>Regions</th>
                                        <th>NPWP</th>
                                        <th>Bank Description</th>
                                        <th>Receivable</th>
                                        <th>Discount</th>
                                        <th>VAT / PPN</th>
                                        <th>Sales</th>
                                        <th>Return</th>
                                        <th>Prepaid</th>
                                        <th>Cost Center - Dept</th>
                                        <th>Cost Center - Cost</th>
                                        <th>Account Balance - Currency</th>
                                        <th>Account Balance - Rupiah</th>
                                        <th>Account Balance - Dn. Payment</th>
                                        <th>Since</th>
                                        <th>Type</th>
                                        <th>Audit</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $customer)
                                        <tr>
                                            <td>{{ $customer->branch }}</td>
                                            <td>{{ $customer->code }}</td>
                                            <td>{{ $customer->curr }}</td>
                                            <td>{{ $customer->initial }}</td>
                                            <td>{{ $customer->address_primary }}</td>
                                            <td>{{ $customer->address_secondary }}</td>
                                            <td>{{ $customer->customer }}</td>
                                            <td>{{ $customer->phone }}</td>
                                            <td>{{ $customer->email }}</td>
                                            <td>{{ $customer->category }}</td>
                                            <td>{{ $customer->regions }}</td>
                                            <td>{{ $customer->npwp }}</td>
                                            <td>{{ $customer->bank_description }}</td>
                                            <td>{{ $customer->receivable }}</td>
                                            <td>{{ $customer->discount }}</td>
                                            <td>{{ $customer->vat_ppn }}</td>
                                            <td>{{ $customer->sales }}</td>
                                            <td>{{ $customer->return_amount }}</td>
                                            <td>{{ $customer->prepaid }}</td>
                                            <td>{{ $customer->cost_center_dept }}</td>
                                            <td>{{ $customer->cost_center_cost }}</td>
                                            <td>{{ $customer->account_balance_currency }}</td>
                                            <td>{{ $customer->account_balance_rupiah }}</td>
                                            <td>{{ $customer->account_balance_dn_payment }}</td>
                                            <td>{{ $customer->since }}</td>
                                            <td>{{ $customer->type }}</td>
                                            <td>{{ $customer->audit }}</td>
                                            <td>
                                                {{-- ! Button trigger modal --}}
                                                <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#customerModal{{ $customer->id }}">
                                                    View
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="customerModal{{ $customer->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="customerModalLabel{{ $customer->id }}" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="customerModalLabel{{ $customer->id }}">Customer Details</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form>
                                                                    @csrf
                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6">
                                                                            <label for="branch" class="form-label">Branch</label>
                                                                            <input type="text" class="form-control" id="branch" name="branch" value="{{ $customer->branch }}" readonly>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label for="code" class="form-label">Code</label>
                                                                            <input type="text" class="form-control" id="code" name="code" value="{{ $customer->code }}" readonly>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6">
                                                                            <label for="curr" class="form-label">Currency</label>
                                                                            <input type="text" class="form-control" id="curr" name="curr" value="{{ $customer->curr }}" readonly>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label for="initial" class="form-label">Initial</label>
                                                                            <input type="text" class="form-control" id="initial" name="initial" value="{{ $customer->initial }}" readonly>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6">
                                                                            <label for="address_primary" class="form-label">Address Primary</label>
                                                                            <input type="text" class="form-control" id="address_primary" name="address_primary" value="{{ $customer->address_primary }}" readonly>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label for="address_secondary" class="form-label">Address Secondary</label>
                                                                            <input type="text" class="form-control" id="address_secondary" name="address_secondary" value="{{ $customer->address_secondary }}" readonly>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6">
                                                                            <label for="customer" class="form-label">Customer</label>
                                                                            <input type="text" class="form-control" id="customer" name="customer" value="{{ $customer->customer }}" readonly>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label for="phone" class="form-label">Phone</label>
                                                                            <input type="tel" class="form-control" id="phone" name="phone" value="{{ $customer->phone }}" readonly>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6">
                                                                            <label for="email" class="form-label">Email</label>
                                                                            <input type="email" class="form-control" id="email" name="email" value="{{ $customer->email }}" readonly>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label for="category" class="form-label">Category</label>
                                                                            <input type="text" class="form-control" id="category" name="category" value="{{ $customer->category }}" readonly>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6">
                                                                            <label for="regions" class="form-label">Regions</label>
                                                                            <input type="text" class="form-control" id="regions" name="regions" value="{{ $customer->regions }}" readonly>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label for="npwp" class="form-label">NPWP</label>
                                                                            <input type="text" class="form-control" id="npwp" name="npwp" value="{{ $customer->npwp }}" readonly>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6">
                                                                            <label for="bank_description" class="form-label">Bank Description</label>
                                                                            <input type="text" class="form-control" id="bank_description" name="bank_description" value="{{ $customer->bank_description }}" readonly>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label for="receivable" class="form-label">Receivable</label>
                                                                            <input type="number" class="form-control" id="receivable" name="receivable" value="{{ $customer->receivable }}" readonly>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6">
                                                                            <label for="discount" class="form-label">Discount</label>
                                                                            <input type="number" class="form-control" id="discount" name="discount" value="{{ $customer->discount }}" readonly>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label for="vat" class="form-label">VAT / PPN</label>
                                                                            <input type="number" class="form-control" id="vat" name="vat" value="{{ $customer->vat_ppn }}" readonly>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6">
                                                                            <label for="sales" class="form-label">Sales</label>
                                                                            <input type="number" class="form-control" id="sales" name="sales" value="{{ $customer->sales }}" readonly>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label for="return" class="form-label">Return</label>
                                                                            <input type="number" class="form-control" id="return" name="return" value="{{ $customer->return_amount }}" readonly>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6">
                                                                            <label for="prepaid" class="form-label">Prepaid</label>
                                                                            <input type="number" class="form-control" id="prepaid" name="prepaid" value="{{ $customer->prepaid }}" readonly>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label for="cost_center_dept" class="form-label">Cost Center - Dept</label>
                                                                            <input type="text" class="form-control" id="cost_center_dept" name="cost_center_dept" value="{{ $customer->cost_center_dept }}" readonly>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6">
                                                                            <label for="cost_center_cost" class="form-label">Cost Center - Cost</label>
                                                                            <input type="text" class="form-control" id="cost_center_cost" name="cost_center_cost" value="{{ $customer->cost_center_cost }}" readonly>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label for="account_balance_currency" class="form-label">Account Balance - Currency</label>
                                                                            <input type="number" class="form-control" id="account_balance_currency" name="account_balance_currency" value="{{ $customer->account_balance_currency }}" readonly>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6">
                                                                            <label for="account_balance_rupiah" class="form-label">Account Balance - Rupiah</label>
                                                                            <input type="number" class="form-control" id="account_balance_rupiah" name="account_balance_rupiah" value="{{ $customer->account_balance_rupiah }}" readonly>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label for="account_balance_dn_payment" class="form-label">Account Balance - Dn. Payment</label>
                                                                            <input type="number" class="form-control" id="account_balance_dn_payment" name="account_balance_dn_payment" value="{{ $customer->account_balance_dn_payment }}" readonly>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6">
                                                                            <label for="since" class="form-label">Since</label>
                                                                            <input type="date" class="form-control" id="since" name="since" value="{{ $customer->since }}" readonly>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label for="type" class="form-label">Type</label>
                                                                            <input type="text" class="form-control" id="type" name="type" value="{{ $customer->type }}" readonly>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6">
                                                                            <label for="audit" class="form-label">Audit</label>
                                                                            <input type="text" class="form-control" id="audit" name="audit" value="{{ $customer->audit }}" readonly>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                    Edit
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>

                                                            </div>
                                                            <div class="modal-body">
                                                                <form>
                                                                    @csrf
                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6">
                                                                            <label for="branch" class="form-label">Branch</label>
                                                                            <input type="text" class="form-control" id="branch" name="branch" required>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label for="code" class="form-label">Code</label>
                                                                            <input type="text" class="form-control" id="code" name="code" required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6">
                                                                            <label for="curr" class="form-label">Currency</label>
                                                                            <input type="text" class="form-control" id="curr" name="curr" required>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label for="initial" class="form-label">Initial</label>
                                                                            <input type="text" class="form-control" id="initial" name="initial" required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6">
                                                                            <label for="address_primary" class="form-label">Address Primary</label>
                                                                            <input type="text" class="form-control" id="address_primary" name="address_primary" required>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label for="address_secondary" class="form-label">Address Secondary</label>
                                                                            <input type="text" class="form-control" id="address_secondary" name="address_secondary">
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6">
                                                                            <label for="customer" class="form-label">Customer</label>
                                                                            <input type="text" class="form-control" id="customer" name="customer" required>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label for="phone" class="form-label">Phone</label>
                                                                            <input type="tel" class="form-control" id="phone" name="phone">
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6">
                                                                            <label for="email" class="form-label">Email</label>
                                                                            <input type="email" class="form-control" id="email" name="email">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label for="category" class="form-label">Category</label>
                                                                            <input type="text" class="form-control" id="category" name="category">
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6">
                                                                            <label for="regions" class="form-label">Regions</label>
                                                                            <input type="text" class="form-control" id="regions" name="regions">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label for="npwp" class="form-label">NPWP</label>
                                                                            <input type="text" class="form-control" id="npwp" name="npwp">
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6">
                                                                            <label for="bank_description" class="form-label">Bank Description</label>
                                                                            <input type="text" class="form-control" id="bank_description" name="bank_description">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label for="receivable" class="form-label">Receivable</label>
                                                                            <input type="number" class="form-control" id="receivable" name="receivable">
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6">
                                                                            <label for="discount" class="form-label">Discount</label>
                                                                            <input type="number" class="form-control" id="discount" name="discount">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label for="vat" class="form-label">VAT / PPN</label>
                                                                            <input type="number" class="form-control" id="vat" name="vat">
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6">
                                                                            <label for="sales" class="form-label">Sales</label>
                                                                            <input type="number" class="form-control" id="sales" name="sales">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label for="return" class="form-label">Return</label>
                                                                            <input type="number" class="form-control" id="return" name="return">
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6">
                                                                            <label for="prepaid" class="form-label">Prepaid</label>
                                                                            <input type="number" class="form-control" id="prepaid" name="prepaid">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label for="cost_center_dept" class="form-label">Cost Center - Dept</label>
                                                                            <input type="text" class="form-control" id="cost_center_dept" name="cost_center_dept">
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6">
                                                                            <label for="cost_center_cost" class="form-label">Cost Center - Cost</label>
                                                                            <input type="text" class="form-control" id="cost_center_cost" name="cost_center_cost">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label for="account_balance_currency" class="form-label">Account Balance - Currency</label>
                                                                            <input type="number" class="form-control" id="account_balance_currency" name="account_balance_currency">
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6">
                                                                            <label for="account_balance_rupiah" class="form-label">Account Balance - Rupiah</label>
                                                                            <input type="number" class="form-control" id="account_balance_rupiah" name="account_balance_rupiah">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label for="account_balance_dn_payment" class="form-label">Account Balance - Dn. Payment</label>
                                                                            <input type="number" class="form-control" id="account_balance_dn_payment" name="account_balance_dn_payment">
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6">
                                                                            <label for="since" class="form-label">Since</label>
                                                                            <input type="date" class="form-control" id="since" name="since">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label for="type" class="form-label">Type</label>
                                                                            <input type="text" class="form-control" id="type" name="type">
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6">
                                                                            <label for="audit" class="form-label">Audit</label>
                                                                            <input type="text" class="form-control" id="audit" name="audit">
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6">
                                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form action="{{ route('customer.destroy', $customer->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this customer?') ? true : false;">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Branch</th>
                                        <th>Code</th>
                                        <th>Curr</th>
                                        <th>Initial</th>
                                        <th>Address Primary</th>
                                        <th>Address Secondary</th>
                                        <th>Customer</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Category</th>
                                        <th>Regions</th>
                                        <th>NPWP</th>
                                        <th>Bank Description</th>
                                        <th>Receivable</th>
                                        <th>Discount</th>
                                        <th>VAT / PPN</th>
                                        <th>Sales</th>
                                        <th>Return</th>
                                        <th>Prepaid</th>
                                        <th>Cost Center - Dept</th>
                                        <th>Cost Center - Cost</th>
                                        <th>Account Balance - Currency</th>
                                        <th>Account Balance - Rupiah</th>
                                        <th>Account Balance - Dn. Payment</th>
                                        <th>Since</th>
                                        <th>Type</th>
                                        <th>Audit</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                    {{-- ! Activities Tab --}}
                    <div class="tab-pane fade" id="activities" role="tabpanel" aria-labelledby="activities-tab">
                        <p>Content for Activities tab.</p>
                    </div>

                    {{-- ! Statistic Tab --}}
                    <div class="tab-pane fade" id="statistic" role="tabpanel" aria-labelledby="statistic-tab">
                        <p>Content for Statistic tab.</p>
                    </div>

                    {{-- ! Summary Tab --}}
                    <div class="tab-pane fade" id="summary" role="tabpanel" aria-labelledby="summary-tab">
                        <p>Content for Summary tab.</p>
                    </div>
                </div>
            </div>
        </div>

    {{-- ! End Tables --}}
    {{-- Include SweetAlert Component --}}
    @include('components.sweet-alert')

@endsection
