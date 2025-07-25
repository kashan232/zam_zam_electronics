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
                    <h6 class="page-title">Categories</h6>
                    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                                               <button type="button" class="btn btn-sm btn-outline--primary cuModalBtn" data-modal_title="Add New Category">
                            <i class="las la-plus"></i>Add New </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card b-radius--10">
                            <div class="card-body p-0">
                                @if (session()->has('success'))
                                        <div class="alert alert-success">
                                            <strong>Success!</strong> {{ session('success') }}.
                                </div>
                                @endif
                                <div class="table-responsive--sm table-responsive">
                                <table id="example" class="display  table table--light" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>S.N.</th>
                                                <th>Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($all_categories as $categories)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $categories->category }}</td>
                                                <td>
                                                    <div class="button--group">
                                                        <button type="button" class="btn btn-sm btn-outline-primary editCategoryBtn"  data-toggle="modal" 
                                                        data-target="#editcategory" data-category-id="{{ $categories->id }}" data-category-name="{{ $categories->category }}">
                                                            <i class="la la-pencil"></i>Edit
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table><!-- table end -->
                                </div>
                            </div>
                        </div><!-- card end -->
                    </div>
                </div>

                <!--Add Modal -->
                <div id="cuModal" class="modal fade" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"><span class="type"></span> <span>Add Category</span></h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="las la-times"></i>
                                </button>
                            </div>
                            <form action="{{ route('store-category') }}" method="POST">
                                @csrf

                                <div class="modal-body">
                                    
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="category" class="form-control" required>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn--primary h-45 w-100">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Edit Category -->
            <div class="modal fade" id="editcategory" tabindex="-1" aria-labelledby="editcategoryLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editcategoryLabel">Edit Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('update-category') }}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" id="editCategoryId" name="category_id" class="form-control" required>
                                    <input type="text" id="editCategoryName" name="category_name" class="form-control">
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn--primary h-45 w-100">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



            <div class="modal fade" id="importModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Import Category</h4>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i class="la la-times" aria-hidden="true"></i>
                            </button>
                        </div>
                        <form method="post" action="https://script.viserlab.com/torylab/admin/category/import" id="importForm" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="zv105s8kd1s2nyZ6nvoqU6pROYAnsCPYkYXTDlWn">
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="alert alert-warning p-3" role="alert">
                                        <p>
                                            - Format your CSV the same way as the sample file below. <br>
                                            - Valid fields Tip: make sure name of fields must be following: name<br>
                                            - Required And Unique field's (name)<br>
                                            - When an error occurs download the error file and correct the incorrect
                                            cells and import that file again through format.<br>
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="fw-bold">Select File</label>
                                    <input type="file" class="form-control" name="file" accept=".csv" required>
                                    <div class="mt-1">
                                        <small class="d-block">
                                            Supported files: <b class="fw-bold">csv</b>
                                        </small>
                                        <small>
                                            Download sample template file from here <a href="https://script.viserlab.com/torylab/assets/files/sample/category.csv" title="Download csv file" class="text--primary" download>
                                                <b>csv</b>
                                            </a>
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="Submit" class="btn btn--primary w-100 h-45">Import</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div id="confirmationModal" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Confirmation Alert!</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i class="las la-times"></i>
                            </button>
                        </div>
                        <form action="" method="POST">
                            <input type="hidden" name="_token" value="zv105s8kd1s2nyZ6nvoqU6pROYAnsCPYkYXTDlWn">
                            <div class="modal-body">
                                <p class="question"></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn--dark" data-bs-dismiss="modal">No</button>
                                <button type="submit" class="btn btn--primary">Yes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div><!-- bodywrapper__inner end -->
    </div><!-- body-wrapper end -->
    </div>
    @include('admin_panel.include.footer_include')

    <script>
        $(document).ready(function() {
            // Edit category button click event
            $('.editCategoryBtn').click(function() {
                // Extract category ID and name from data attributes
                var categoryId = $(this).data('category-id');
                var categoryName = $(this).data('category-name');

                // Set the extracted values in the modal fields
                $('#editCategoryId').val(categoryId);
                $('#editCategoryName').val(categoryName);
            });
        });
    </script>