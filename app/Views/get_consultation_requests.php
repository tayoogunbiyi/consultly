<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin | Review Consultation Requests </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body class="">
    <div class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <span class="text-left custom-h1 mb-4">Consultations</span>
                    <span class="item-count">100</span>
                </div>
                <div class="col-md-6 text-md-right" style="padding-top: 15px;">
                    <input class="form-control d-inline-block mr-3" name="query" placeholder="Search" style="width:150px;padding-top: 1px;">
                    <button class="btn custom-secondary-btn d-inline-block" style="width: 150px;">Filter</button>
                </div>
            </div>

            <table class="table table-responsive-sm my-3">
                <thead>
                    <tr>
                        <th>Company</th>
                        <th>Category</th>
                        <th>Delivery date</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>OAP Industries </td>
                        <td style="color: #646464;">Products</td>
                        <td style="color: #646464;">12 September 2021</td>
                        <td>
                            <div class="consultation-status">cancelled</div>
                        </td>
                        <td class="text-center" style="color: #646464;">
                            <a href="#" class="a-link">
                                Edit <i class="fas fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>REelnd Stop</td>
                        <td style="color: #646464;">Transport</td>
                        <td style="color: #646464;">O9 March 2021</td>
                        <td>
                            <div class="consultation-status">active</div>
                        </td>
                        <td class="text-center" style="color: #646464;">
                            <a href="#" class="a-link">
                                Edit <i class="fas fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>NZXT corportions</td>
                        <td style="color: #646464;">Proudcts</td>
                        <td style="color: #646464;">08 March 2021</td>
                        <td>
                            <div class="consultation-status">cancelled</div>
                        </td>
                        <td class="text-center" style="color: #646464;">
                            <a href="#" class="a-link">
                                Edit <i class="fas fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Leeway</td>
                        <td style="color: #646464;">Service</td>
                        <td style="color: #646464;">12 February 2021</td>
                        <td>
                            <div class="consultation-status">closed</div>
                        </td>
                        <td class="text-center">
                            <a href="#" class="a-link">
                                Edit <i class="fas fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>OAP Industries </td>
                        <td style="color: #646464;">Products</td>
                        <td style="color: #646464;">12 September 2021</td>
                        <td>
                            <div class="consultation-status">pending</div>
                        </td>
                        <td class="text-center" style="color: #646464;">
                            <a href="#" class="a-link">
                                Edit <i class="fas fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>REelnd Stop</td>
                        <td style="color: #646464;">Transport</td>
                        <td style="color: #646464;">O9 March 2021</td>
                        <td>
                            <div class="consultation-status">active</div>
                        </td>
                        <td class="text-center" style="color: #646464;">
                            <a href="#" class="a-link">
                                Edit <i class="fas fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>NZXT corportions</td>
                        <td style="color: #646464;">Proudcts</td>
                        <td style="color: #646464;">08 March 2021</td>
                        <td>
                            <div class="consultation-status">pending</div>
                        </td>
                        <td class="text-center" style="color: #646464;">
                            <a href="#" class="a-link">
                                Edit <i class="fas fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Leeway</td>
                        <td style="color: #646464;">Service</td>
                        <td style="color: #646464;">12 February 2021</td>
                        <td>
                            <div class="consultation-status">closed</div>
                        </td>
                        <td class="text-center">
                            <a href="#" class="a-link">
                                Edit <i class="fas fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>


            <div class="row">
                <div class="col-md-6">
                    <div style="color: #a2a0a1;font-weight: bold;">Showing <span style="color: black;">1</span> to <span style="color: black;">8</span> of 100 results</div>
                </div>
                <div class="col-md-6 text-right mt-3 mt-md-0">
                    <button type="button" class="btn custom-secondary-btn d-inline-block">Previous</button>
                    <button type="button" class="btn custom-secondary-btn d-inline-block">Next</button>
                </div>
            </div>
        </div>

    </div>


    <!-- <footer class="border-top footer text-muted">
            <div class="container">
                &copy; 2021 - <a asp-area="" asp-controller="Home" asp-action="Privacy">Privacy</a>
            </div>
        </footer> -->

    <environment exclude="Development">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" asp-fallback-src="~/lib/jquery/dist/jquery.min.js" asp-fallback-test="window.jQuery" crossorigin="anonymous" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" asp-fallback-src="~/lib/bootstrap/dist/js/bootstrap.bundle.min.js" asp-fallback-test="window.jQuery && window.jQuery.fn && window.jQuery.fn.modal" crossorigin="anonymous" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o">
        </script>
    </environment>
</body>

</html>