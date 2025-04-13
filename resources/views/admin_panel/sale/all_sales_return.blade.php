@include('admin_panel.include.header_include')

<body>
    <!-- page-wrapper start -->
    <div class="page-wrapper default-version">

        <!-- sidebar start -->

        @include('admin_panel.include.sidebar_include')
        <!-- sidebar end -->

        <!-- navbar-wrapper start -->
        @include('admin_panel.include.navbar_include')
        <!-- navbar-wrapper end -->
        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                    <h6 class="page-title"> Sales Returns</h6>
                    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                        <a href="{{ route('add-Sale') }}"
                            class="btn btn-outline--primary h-45">
                            <i class="la la-plus"></i>Add New </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card b-radius--10 bg--transparent">
                            <div class="card-body p-0 ">
                                <div class="table-responsive--md table-responsive">
                                    <table id="example" class="display table table--light style--two bg--white" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Customer | Date</th>
                                                <th>Item Category</th>
                                                <th>Item Name</th>
                                                <th>Quantity</th>
                                                <th>Return Quantity</th>
                                                <th>Price</th>
                                                <th>Total</th>
                                                <th>Deducted Amount</th>
                                                <th>Exchange Value</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($SaleReturns as $return)
                                            <tr>
                                                <td>{{ $return->customer }} <br><small>{{ $return->sale_date }}</small></td>

                                                <td>
                                                    @php $categories = json_decode($return->item_category); @endphp
                                                    @foreach($categories as $cat)
                                                    <span class="badge bg--info">{{ $cat }}</span>
                                                    @endforeach
                                                </td>

                                                <td>
                                                    @php $items = json_decode($return->item_name); @endphp
                                                    @foreach($items as $item)
                                                    <span class="badge bg--dark">{{ $item }}</span>
                                                    @endforeach
                                                </td>

                                                <td>
                                                    @php $qty = json_decode($return->quantity); @endphp
                                                    @foreach($qty as $q)
                                                    <span>{{ $q }}</span><br>
                                                    @endforeach
                                                </td>

                                                <td>
                                                    @php $rqty = json_decode($return->return_quantity); @endphp
                                                    @foreach($rqty as $rq)
                                                    <span>{{ $rq }}</span><br>
                                                    @endforeach
                                                </td>

                                                <td>
                                                    @php $prices = json_decode($return->price); @endphp
                                                    @foreach($prices as $p)
                                                    <span>{{ number_format($p, 2) }}</span><br>
                                                    @endforeach
                                                </td>

                                                <td>
                                                    @php $totals = json_decode($return->total); @endphp
                                                    @foreach($totals as $t)
                                                    <span>{{ $t }}</span><br>
                                                    @endforeach
                                                </td>

                                                <td>{{ $return->deduct_amount }}</td>
                                                <td>{{ $return->exchange_value }}</td>

                                                <td>
                                                    @if($return->action == 'return')
                                                    <span class="badge bg--danger">Return</span>
                                                    @elseif($return->action == 'exchange')
                                                    <span class="badge bg--success">Exchange</span>
                                                    @else
                                                    <span class="badge bg--dark">{{ ucfirst($return->action) }}</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>


                                </div>
                            </div>
                        </div><!-- card end -->
                    </div>
                </div>

            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->

    </div>
    @include('admin_panel.include.footer_include')