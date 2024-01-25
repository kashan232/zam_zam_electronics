@include('admin_panel.include.header')
<div class="main-wrapper">
    @include('admin_panel.include.navbar')
    @include('admin_panel.include.sidebar')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Product Category list</h4>
                    <h6>View/Search product Category</h6>
                </div>
                <div class="page-btn">
                    <a href="addcategory.html" class="btn btn-added">
                        <img src="assets/img/icons/plus.svg" class="me-1" alt="img">Add Category
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">
                            {{-- <div class="search-path">
                                <a class="btn btn-filter" id="filter_search">
                                    <img src="assets/img/icons/filter.svg" alt="img">
                                    <span><img src="assets/img/icons/closes.svg" alt="img"></span>
                                </a>
                            </div> --}}
                            <div class="search-input">
                                <a class="btn btn-searchset"><img src="assets/img/icons/search-white.svg"
                                        alt="img"></a>
                            </div>
                        </div>
                        <div class="wordset">
                            <ul>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
                                            src="assets/img/icons/pdf.svg" alt="img"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                            src="assets/img/icons/excel.svg" alt="img"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
                                            src="assets/img/icons/printer.svg" alt="img"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table  datanew">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category name</th>
                                    <th>Category Code</th>
                                    <th>Description</th>
                                    <th>Created By</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_categories as $all_category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $all_category->category_name }}</td>
                                    <td>{{ $all_category->category_code }}</td>
                                    <td>{{ $all_category->description }}</td>
                                    <td>{{ $all_category->category_name }}</td>
                                    <td>
                                        <a href="{{ route('edit-category') }}">
                                            <img src="assets/img/icons/edit.svg" alt="img">
                                        </a>
                                        <a class="me-3 confirm-text" href="">
                                            <img src="assets/img/icons/delete.svg" alt="img">
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@include('admin_panel.include.footer')
