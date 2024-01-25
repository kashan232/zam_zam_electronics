@include('admin_panel.include.header')
<div class="main-wrapper">
    @include('admin_panel.include.navbar')
    @include('admin_panel.include.sidebar')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Product Add Category</h4>
                    <h6>Create new product Category</h6>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    @if (session('category-added'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Congratulations!</strong> {{ session('category-added') }}.
                        </div>
                    @endif
                    <form action="{{ route('store-category') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Category Name</label>
                                    <input type="text" name="category_name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Category Code</label>
                                    <input type="text" name="category_code">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label> Product Image</label>
                                    <div class="image-upload">
                                        <input type="file" name="category_image">
                                        <div class="image-uploads">
                                            <img src="assets/img/icons/upload.svg" alt="img">
                                            <h4>Drag and drop a file to upload</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-submit me-2">
                                    Submit
                                </button>
                                {{-- <a href="javascript:void(0);" type="submit"  class="btn btn-submit me-2">Submit</a>
                                    <a href="userlist.html" class="btn btn-cancel">Cancel</a> --}}
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@include('admin_panel.include.footer')
