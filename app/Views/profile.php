<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile | <?= $company_name ?> </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body class="mb-5">
    <div class="mt-5">
        <div class="container">
            <div class="notification-tab">
                <div class="row">
                    <div class="col-md-10">
                        <i class="far fa-bell mr-2"></i>
                        You have <?= $completed_count ?> consultation(s) which have been completed. View below
                    </div>
                    <div class="col-md-2 text-right">
                        <a href="#" class="a-link a-link-nodecoration"><i class="far fa-window-close"></i> close</a>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-9">
                    <div style="width: 100%; display: table;">
                        <div style="display: table-row">
                            <div class="profile-image" style="display: table-cell;">
                                <img class="img-fluid" src="<?php echo 'https://robohash.org/' . $email . ".png" ?>">
                            </div>
                            <div class="profile-info">
                                <div class="profile-info-name"> Welcome, <?= $email ?></div>
                                <div class="profile-info-company-name"> <?= $company_name ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-md-right mt-2">
                        <a href="/signin"><button class="btn custom-secondary-btn">Log out</button></a>
                    </div>
                </div>
            </div>
            <hr style="margin:50px 5px">
            <div class="row">
                <div class="col-md-6">
                    <span class="text-left custom-h1 mb-4">Consultations</span>
                    <br />
                    <span class="request-info-text text-muted">You have requested <?= $consultation_requests_count ?> consultation(s) </span>
                </div>
                <div class="col-md-6 text-md-right" style="padding-top: 15px;">
                    <a href="/consultation-request"><button type="button" class="btn custom-primary-btn d-inline-block mr-3" style="width:60px">New</button></a>
                </div>
            </div>

            <table class="table table-responsive-sm my-3">
                <thead>
                    <tr>
                        <th>Proposal</th>
                        <th>Category</th>
                        <th>About</th>
                        <th>Website</th>
                        <th>Created on</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($consultation_requests as $consultation_request) : ?>
                        <tr>
                            <td>
                                <a href="<?php echo '/consultation-request' . '/' . $consultation_request["id"] ?>"> <?php echo $consultation_request["name"]; ?> </a>
                            </td>
                            <td style="color: #646464;"><?php echo $consultation_request["category"]; ?></td>
                            <td style="color: #646464;"><?php echo $consultation_request["about"]; ?></td>
                            <td style="color: #646464;"><?php echo $consultation_request["website"]; ?></td>
                            <td style="color: #646464;"><?php echo $consultation_request["createdAt"]; ?></td>
                            <td>
                                <div class="consultation-status"><?php echo $consultation_request["status"]; ?></div>
                            </td>
                            <td class="text-center" style="color: #646464;">
                                <a href="<?php echo '/consultation-request' . '/' . $consultation_request["id"] . '/edit' ?>" class="a-link">
                                    Edit <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>


            <div class="row">
                <div class="col-md-6">
                    <div style="color: #a2a0a1;font-weight: bold;">Showing <span style="color: black;">1</span> to <span style="color: black;"> <?= $consultation_requests_count ?> </span> of <?= $consultation_requests_count ?> results</div>
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


<style>
    .profile-image {
        width: 100px;
        height: 100px;
        background-color: #dfdfdf;
        margin-right: 10px;
        vertical-align: bottom;
        display: table-cell;
        border-radius: 15px;
    }

    .profile-info {
        padding-bottom: 16px;
        padding-left: 10px;
    }

    .profile-info-company-name {
        font-size: 20px;
        font-weight: 500;
        margin-bottom: 10px;
        line-height: 22px;
    }

    .profile-info-name {
        font-size: 25px;
        font-weight: 600;
        line-height: 27px;
        margin-bottom: 10px;
    }
</style>