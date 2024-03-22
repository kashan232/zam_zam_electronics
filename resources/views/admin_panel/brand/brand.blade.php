<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brands</title>
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    <link rel="shortcut icon" type="image/png" href="assets/images/logoIcon/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/global/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/admin/css/vendor/bootstrap-toggle.min.css">
    <link rel="stylesheet" href="assets/global/css/all.min.css">
    <link rel="stylesheet" href="assets/global/css/line-awesome.min.css">
    <link rel="stylesheet" href="assets/admin/css/vendor/select2.min.css">
    <link rel="stylesheet" href="assets/admin/css/vendor/datepicker.min.css">
    <link rel="stylesheet" href="assets/admin/css/app.css?v=1">
    <link rel="stylesheet" href="assets/admin/css/custom.css">
</head>

<body>
    <!-- page-wrapper start -->
    <div class="page-wrapper default-version">
        @include('admin_panel.include.sidebar_include')

        <!-- sidebar end -->

        <!-- navbar-wrapper start -->
        <nav class="navbar-wrapper bg--dark">
            <div class="navbar__left">
                <button type="button" class="res-sidebar-open-btn me-3"><i class="las la-bars"></i></button>
                <form class="navbar-search">
                    <input type="search" name="#0" class="navbar-search-field" id="searchInput" autocomplete="off"
                        placeholder="Search here...">
                    <i class="las la-search"></i>
                    <ul class="search-list"></ul>
                </form>
            </div>
            <div class="navbar__right">
                <ul class="navbar__action-list">

                    <li class="dropdown">
                        <button type="button" class="" data-bs-toggle="dropdown" data-display="static"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="navbar-user">
                                <span class="navbar-user__thumb"><img
                                        src="https://script.viserlab.com/torylab/assets/admin/images/profile/6353ef7e9631b1666445182.jpg"
                                        alt="image"></span>
                                <span class="navbar-user__info">
                                    <span class="navbar-user__name">Super Admin</span>
                                </span>
                                <span class="icon"><i class="las la-chevron-circle-down"></i></span>
                            </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu--sm p-0 border-0 box--shadow1 dropdown-menu-right">
                            <a href="https://script.viserlab.com/torylab/admin/profile"
                                class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                                <i class="dropdown-menu__icon las la-user-circle"></i>
                                <span class="dropdown-menu__caption">Profile</span>
                            </a>
                            <a href="https://script.viserlab.com/torylab/admin/password"
                                class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                                <i class="dropdown-menu__icon las la-key"></i>
                                <span class="dropdown-menu__caption">Password</span>
                            </a>
                            <a href="https://script.viserlab.com/torylab/admin/logout"
                                class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                                <i class="dropdown-menu__icon las la-sign-out-alt"></i>
                                <span class="dropdown-menu__caption">Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- navbar-wrapper end -->

        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                    <h6 class="page-title">Brands</h6>
                    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                        <form action="" method="GET" class="d-flex gap-2">
                            <div class="input-group w-auto">
                                <input type="search" name="search" class="form-control bg--white"
                                    placeholder="Search..." value="">
                                <button class="btn btn--primary" type="submit"><i class="la la-search"></i></button>
                            </div>

                        </form>
                        <button type="button" class="btn btn-sm btn-outline--primary cuModalBtn"
                            data-modal_title="Add New Brand">
                            <i class="las la-plus"></i>Add New </button>
                        <button type="button" class="btn btn-sm btn-outline--info importBtn">
                            <i class="las la-cloud-upload-alt"></i>Import CSV </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card b-radius--10 ">
                            <div class="card-body p-0">
                                <div class="table-responsive--sm table-responsive">
                                    <table class="table table--light ">
                                        <thead>
                                            <tr>
                                                <th>S.N.</th>
                                                <th>Name</th>
                                                <th>Products</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Canon</td>
                                                <td>3</td>
                                                <td>
                                                    <div class="button--group">
                                                        <button type="button"
                                                            class="btn btn-sm btn-outline--primary cuModalBtn"
                                                            data-resource="{&quot;id&quot;:8,&quot;name&quot;:&quot;Canon&quot;,&quot;status&quot;:1,&quot;type&quot;:1,&quot;task_by&quot;:null,&quot;created_at&quot;:&quot;2022-10-20T18:03:34.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-10-20T18:03:34.000000Z&quot;,&quot;products_count&quot;:3}"
                                                            data-modal_title="Edit Brand" data-has_status="1">
                                                            <i class="la la-pencil"></i>Edit </button>
                                                        <button type="button"
                                                            class="btn btn-sm btn-outline-danger  disabled  confirmationBtn"
                                                            data-question="Are you sure to delete this brand?"
                                                            data-action="https://script.viserlab.com/torylab/admin/brand/delete/8">
                                                            <i class="la la-trash"></i>Delete </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Xyz</td>
                                                <td>6</td>
                                                <td>
                                                    <div class="button--group">
                                                        <button type="button"
                                                            class="btn btn-sm btn-outline--primary cuModalBtn"
                                                            data-resource="{&quot;id&quot;:7,&quot;name&quot;:&quot;Xyz&quot;,&quot;status&quot;:1,&quot;type&quot;:1,&quot;task_by&quot;:null,&quot;created_at&quot;:&quot;2022-10-20T17:55:32.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-10-20T17:55:32.000000Z&quot;,&quot;products_count&quot;:6}"
                                                            data-modal_title="Edit Brand" data-has_status="1">
                                                            <i class="la la-pencil"></i>Edit </button>
                                                        <button type="button"
                                                            class="btn btn-sm btn-outline-danger  disabled  confirmationBtn"
                                                            data-question="Are you sure to delete this brand?"
                                                            data-action="https://script.viserlab.com/torylab/admin/brand/delete/7">
                                                            <i class="la la-trash"></i>Delete </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Viservent</td>
                                                <td>0</td>
                                                <td>
                                                    <div class="button--group">
                                                        <button type="button"
                                                            class="btn btn-sm btn-outline--primary cuModalBtn"
                                                            data-resource="{&quot;id&quot;:6,&quot;name&quot;:&quot;Viservent&quot;,&quot;status&quot;:1,&quot;type&quot;:1,&quot;task_by&quot;:null,&quot;created_at&quot;:&quot;2022-10-20T17:50:07.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-10-20T17:50:07.000000Z&quot;,&quot;products_count&quot;:0}"
                                                            data-modal_title="Edit Brand" data-has_status="1">
                                                            <i class="la la-pencil"></i>Edit </button>
                                                        <button type="button"
                                                            class="btn btn-sm btn-outline-danger  confirmationBtn"
                                                            data-question="Are you sure to delete this brand?"
                                                            data-action="https://script.viserlab.com/torylab/admin/brand/delete/6">
                                                            <i class="la la-trash"></i>Delete </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Panasonic</td>
                                                <td>1</td>
                                                <td>
                                                    <div class="button--group">
                                                        <button type="button"
                                                            class="btn btn-sm btn-outline--primary cuModalBtn"
                                                            data-resource="{&quot;id&quot;:5,&quot;name&quot;:&quot;Panasonic&quot;,&quot;status&quot;:1,&quot;type&quot;:1,&quot;task_by&quot;:null,&quot;created_at&quot;:&quot;2022-10-20T17:49:50.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-10-20T17:49:50.000000Z&quot;,&quot;products_count&quot;:1}"
                                                            data-modal_title="Edit Brand" data-has_status="1">
                                                            <i class="la la-pencil"></i>Edit </button>
                                                        <button type="button"
                                                            class="btn btn-sm btn-outline-danger  disabled  confirmationBtn"
                                                            data-question="Are you sure to delete this brand?"
                                                            data-action="https://script.viserlab.com/torylab/admin/brand/delete/5">
                                                            <i class="la la-trash"></i>Delete </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Huawei</td>
                                                <td>1</td>
                                                <td>
                                                    <div class="button--group">
                                                        <button type="button"
                                                            class="btn btn-sm btn-outline--primary cuModalBtn"
                                                            data-resource="{&quot;id&quot;:4,&quot;name&quot;:&quot;Huawei&quot;,&quot;status&quot;:1,&quot;type&quot;:1,&quot;task_by&quot;:null,&quot;created_at&quot;:&quot;2022-10-20T17:49:43.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-10-20T17:49:43.000000Z&quot;,&quot;products_count&quot;:1}"
                                                            data-modal_title="Edit Brand" data-has_status="1">
                                                            <i class="la la-pencil"></i>Edit </button>
                                                        <button type="button"
                                                            class="btn btn-sm btn-outline-danger  disabled  confirmationBtn"
                                                            data-question="Are you sure to delete this brand?"
                                                            data-action="https://script.viserlab.com/torylab/admin/brand/delete/4">
                                                            <i class="la la-trash"></i>Delete </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Samsung</td>
                                                <td>0</td>
                                                <td>
                                                    <div class="button--group">
                                                        <button type="button"
                                                            class="btn btn-sm btn-outline--primary cuModalBtn"
                                                            data-resource="{&quot;id&quot;:3,&quot;name&quot;:&quot;Samsung&quot;,&quot;status&quot;:1,&quot;type&quot;:1,&quot;task_by&quot;:null,&quot;created_at&quot;:&quot;2022-10-20T17:49:26.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-10-20T17:49:26.000000Z&quot;,&quot;products_count&quot;:0}"
                                                            data-modal_title="Edit Brand" data-has_status="1">
                                                            <i class="la la-pencil"></i>Edit </button>
                                                        <button type="button"
                                                            class="btn btn-sm btn-outline-danger  confirmationBtn"
                                                            data-question="Are you sure to delete this brand?"
                                                            data-action="https://script.viserlab.com/torylab/admin/brand/delete/3">
                                                            <i class="la la-trash"></i>Delete </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Walton</td>
                                                <td>2</td>
                                                <td>
                                                    <div class="button--group">
                                                        <button type="button"
                                                            class="btn btn-sm btn-outline--primary cuModalBtn"
                                                            data-resource="{&quot;id&quot;:2,&quot;name&quot;:&quot;Walton&quot;,&quot;status&quot;:1,&quot;type&quot;:1,&quot;task_by&quot;:null,&quot;created_at&quot;:&quot;2022-10-20T17:49:19.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-10-20T17:49:19.000000Z&quot;,&quot;products_count&quot;:2}"
                                                            data-modal_title="Edit Brand" data-has_status="1">
                                                            <i class="la la-pencil"></i>Edit </button>
                                                        <button type="button"
                                                            class="btn btn-sm btn-outline-danger  disabled  confirmationBtn"
                                                            data-question="Are you sure to delete this brand?"
                                                            data-action="https://script.viserlab.com/torylab/admin/brand/delete/2">
                                                            <i class="la la-trash"></i>Delete </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Miyako</td>
                                                <td>1</td>
                                                <td>
                                                    <div class="button--group">
                                                        <button type="button"
                                                            class="btn btn-sm btn-outline--primary cuModalBtn"
                                                            data-resource="{&quot;id&quot;:1,&quot;name&quot;:&quot;Miyako&quot;,&quot;status&quot;:1,&quot;type&quot;:1,&quot;task_by&quot;:null,&quot;created_at&quot;:&quot;2022-10-20T17:49:14.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-10-20T17:49:14.000000Z&quot;,&quot;products_count&quot;:1}"
                                                            data-modal_title="Edit Brand" data-has_status="1">
                                                            <i class="la la-pencil"></i>Edit </button>
                                                        <button type="button"
                                                            class="btn btn-sm btn-outline-danger  disabled  confirmationBtn"
                                                            data-question="Are you sure to delete this brand?"
                                                            data-action="https://script.viserlab.com/torylab/admin/brand/delete/1">
                                                            <i class="la la-trash"></i>Delete </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>XYA</td>
                                                <td>0</td>
                                                <td>
                                                    <div class="button--group">
                                                        <button type="button"
                                                            class="btn btn-sm btn-outline--primary cuModalBtn"
                                                            data-resource="{&quot;id&quot;:9,&quot;name&quot;:&quot;XYA&quot;,&quot;status&quot;:1,&quot;type&quot;:1,&quot;task_by&quot;:null,&quot;created_at&quot;:null,&quot;updated_at&quot;:null,&quot;products_count&quot;:0}"
                                                            data-modal_title="Edit Brand" data-has_status="1">
                                                            <i class="la la-pencil"></i>Edit </button>
                                                        <button type="button"
                                                            class="btn btn-sm btn-outline-danger  confirmationBtn"
                                                            data-question="Are you sure to delete this brand?"
                                                            data-action="https://script.viserlab.com/torylab/admin/brand/delete/9">
                                                            <i class="la la-trash"></i>Delete </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>zxs</td>
                                                <td>0</td>
                                                <td>
                                                    <div class="button--group">
                                                        <button type="button"
                                                            class="btn btn-sm btn-outline--primary cuModalBtn"
                                                            data-resource="{&quot;id&quot;:10,&quot;name&quot;:&quot;zxs&quot;,&quot;status&quot;:1,&quot;type&quot;:1,&quot;task_by&quot;:null,&quot;created_at&quot;:null,&quot;updated_at&quot;:null,&quot;products_count&quot;:0}"
                                                            data-modal_title="Edit Brand" data-has_status="1">
                                                            <i class="la la-pencil"></i>Edit </button>
                                                        <button type="button"
                                                            class="btn btn-sm btn-outline-danger  confirmationBtn"
                                                            data-question="Are you sure to delete this brand?"
                                                            data-action="https://script.viserlab.com/torylab/admin/brand/delete/10">
                                                            <i class="la la-trash"></i>Delete </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>XYD</td>
                                                <td>0</td>
                                                <td>
                                                    <div class="button--group">
                                                        <button type="button"
                                                            class="btn btn-sm btn-outline--primary cuModalBtn"
                                                            data-resource="{&quot;id&quot;:11,&quot;name&quot;:&quot;XYD&quot;,&quot;status&quot;:1,&quot;type&quot;:1,&quot;task_by&quot;:null,&quot;created_at&quot;:null,&quot;updated_at&quot;:null,&quot;products_count&quot;:0}"
                                                            data-modal_title="Edit Brand" data-has_status="1">
                                                            <i class="la la-pencil"></i>Edit </button>
                                                        <button type="button"
                                                            class="btn btn-sm btn-outline-danger  confirmationBtn"
                                                            data-question="Are you sure to delete this brand?"
                                                            data-action="https://script.viserlab.com/torylab/admin/brand/delete/11">
                                                            <i class="la la-trash"></i>Delete </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table><!-- table end -->
                                </div>
                            </div>

                        </div><!-- card end -->
                    </div>
                </div>

                <!--Create Update Modal -->
                <div id="cuModal" class="modal fade" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"><span class="type"></span> <span>Add Brand</span></h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="las la-times"></i>
                                </button>
                            </div>
                            <form action="https://script.viserlab.com/torylab/admin/brand/store" method="POST">
                                <input type="hidden" name="_token" value="zv105s8kd1s2nyZ6nvoqU6pROYAnsCPYkYXTDlWn">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn--primary h-45 w-100">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="importModal" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Import Brand</h4>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="la la-times" aria-hidden="true"></i>
                                </button>
                            </div>
                            <form method="post" action="https://script.viserlab.com/torylab/admin/brand/import"
                                id="importForm" enctype="multipart/form-data">
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
                                                Download sample template file from here <a
                                                    href="https://script.viserlab.com/torylab/assets/files/sample/brand.csv"
                                                    title="Download csv file" class="text--primary" download>
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

    <script src="assets/global/js/jquery-3.6.0.min.js"></script>
    <script src="assets/global/js/bootstrap.bundle.min.js"></script>
    <script src="assets/admin/js/vendor/bootstrap-toggle.min.js"></script>
    <script src="assets/admin/js/vendor/jquery.slimscroll.min.js"></script>

    <link rel="stylesheet" href="assets/global/css/iziToast.min.css">
    <script src="assets/global/js/iziToast.min.js"></script>

    <script>
        "use strict";
        function notify(status, message) {
            if (typeof message == 'string') {
                iziToast[status]({
                    message: message,
                    position: "topRight"
                });
            } else {
                $.each(message, function (i, val) {
                    iziToast[status]({
                        message: val,
                        position: "topRight"
                    });
                });
            }
        }
    </script>


    <script src="assets/admin/js/nicEdit.js"></script>
    <script src="assets/admin/js/vendor/select2.min.js"></script>
    <script src="assets/admin/js/app.js?v=1"></script>
    <script src="assets/admin/js/cu-modal.js"></script>

    <script>
        "use strict";
        bkLib.onDomLoaded(function () {
            $(".nicEdit").each(function (index) {
                $(this).attr("id", "nicEditor" + index);
                new nicEditor({
                    fullPanel: true
                }).panelInstance('nicEditor' + index, {
                    hasPanel: true
                });
            });
        });

        (function ($) {

            $(document).on('mouseover ', '.nicEdit-main,.nicEdit-panelContain', function () {
                $('.nicEdit-main').focus();
            });

            $("form").on('submit', function (e) {
                let form = $(this)[0];
                if ($(form).find('.nicEdit').length == 0) {
                    e.preventDefault();
                    $(this).find('[type="submit"]').attr("disabled", "disabled");
                    form.submit();
                }
            });

        })(jQuery);
    </script>

    <script>
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5fe0b9b2a8a254155ab5421d/1eq2tap1m';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>

    <script>
        if (window.top != window.self) {
            document.body.innerHTML += '<div style="position:fixed;top:0;width:100%;z-index:9999999;background:#f8d7da;color:#721c24;text-align:center; padding: 20px;"><p style="font-size:20px; font-weight: bold;">You are using this website under an external iframe!!</p><p style="font-size:16px; margin-top: 20px;">for a better experience, please browse directly instead of an external iframe.</p><a href="' + window.self.location + '" target="_blank" style=" margin-top:20px; color: #fff;background-color: #dc3545; padding: 5px 10px; border-radius: 5px; text-decoration: none;">Browse Directly</a></div>';
        }
    </script>


    <script>
        adroll_adv_id = "YXRNNTO7ZBAMFBH67UUE5M";
        adroll_pix_id = "MMQQDWGN25EXPHGRPA3NLR";
        adroll_version = "2.0";
        (function (w, d, e, o, a) {
            w.__adroll_loaded = true;
            w.adroll = w.adroll || [];
            w.adroll.f = ['setProperties', 'identify', 'track'];
            var roundtripUrl = "https://s.adroll.com/j/" + adroll_adv_id
                + "/roundtrip.js";
            for (a = 0; a < w.adroll.f.length; a++) {
                w.adroll[w.adroll.f[a]] = w.adroll[w.adroll.f[a]] || (function (n) {
                    return function () {
                        w.adroll.push([n, arguments])
                    }
                })(w.adroll.f[a])
            }
            e = d.createElement('script');
            o = d.getElementsByTagName('script')[0];
            e.async = 1;
            e.src = roundtripUrl;
            o.parentNode.insertBefore(e, o);
        })(window, document);
        adroll.track("pageView");
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1ME4K0RD7K"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-1ME4K0RD7K');
    </script>
    <script>
        (function ($) {
            "use strict";
            $(document).on('click', '.confirmationBtn', function () {
                var modal = $('#confirmationModal');
                let data = $(this).data();
                modal.find('.question').text(`${data.question}`);
                modal.find('form').attr('action', `${data.action}`);
                modal.modal('show');
            });
        })(jQuery);
    </script>
    <script>
        (function ($) {
            "use strict"
            $(".importBtn").on('click', function (e) {
                let importModal = $("#importModal");
                importModal.modal('show');
            });
        })(jQuery);
    </script>
    <script>
        if ($('li').hasClass('active')) {
            $('#sidebar__menuWrapper').animate({
                scrollTop: eval($(".active").offset().top - 320)
            }, 500);
        }
    </script>

</body>

</html>