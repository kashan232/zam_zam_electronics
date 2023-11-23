@include('admin_panel.include.header')
    <div class="main-wrapper">
        @include('admin_panel.include.navbar')
        @include('admin_panel.include.sidebar')
        <div class="page-wrapper">
            <div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h4>User Management</h4>
                        <h6>Add/Update User</h6>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        @if(session('user-added'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulations!</strong> {{ session('user-added') }}.
                        {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> --}}
                    </div>
                    @endif
                        <form action="{{ route('store-user') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="f_name">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="l_name">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>User Name</label>
                                        <input type="text" name="user_name">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <div class="pass-group">
                                            <input type="password" name="password" class=" pass-input">
                                            <span class="fas toggle-password fa-eye-slash"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select class="select" name="role">
                                            <option>Select</option>
                                            <option value="Owner">Owner</option>
                                            <option value="Manager">Manager</option>
                                            <option value="Employee">Employee</option>
                                            <option value="Supervisor">Supervisor</option>
                                            <!-- Add more role options as needed -->
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" name="city">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label> User Image</label>
                                        <div class="image-upload">
                                            <input type="file" name="user_image">
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
