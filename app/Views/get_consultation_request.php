<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Consultation | <?= $name ?> </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body class="">

    <body class="">
        <div class="mt-5 container">
            <div class="row">
                <div class="col-md-7">
                    <div class="custom-h1 d-inline-block">
                        Consultation Request For <?= $company_name ?>
                    </div>
                    <br />
                    <span class="consultation-status text-lowercase ml-2"><?= $status ?></span>
                </div>
                <div class="col-md-5 text-md-right" style="margin-top: 18px;">
                    <?php
                    if ($is_admin) {
                    ?>
                        <a href="<?php echo '/consultation-request' . '/' . $id . '/review' ?>"><button class="btn custom-secondary-btn" style="display: inline-block;">Submit Review</button></a>
                    <?php
                    } else {
                    ?>
                        <a href="<?php echo '/consultation-request' . '/' . $id . '/edit' ?>"><button class="btn custom-secondary-btn" style="display: inline-block;">Edit</button></a>

                    <?php
                    }
                    ?>
                </div>

            </div>

            <div class="card report-card">
                <div class="card-body">
                    <div class="report-header">General</div>
                    <div class="report-title">Name</div>
                    <div class="report-details"><?= $name ?></div>
                    <div class="report-title">About</div>
                    <div class="report-details">
                        <?= $about ?>
                    </div>
                    <div class="report-title">
                        Website
                    </div>
                    <div class="report-details"><a href="<?= $website ?>"> <?= $website ?> </a> </div>
                    <div class="report-title">Location</div>
                    <div class="report-details"><?= $location ?></div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="report-title">City</div>
                            <div class="report-details"><?= $location ?></div>
                        </div>
                        <div class="col-md-8">
                            <div class="report-title">Street</div>
                            <div class="report-details"><?= $address ?></div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card report-card">
                <div class="card-body">
                    <div class="report-header">Market</div>
                    <div class="report-title">Industry</div>
                    <div class="report-details"><?= $category ?></div>
                    <div class="report-title">Niche</div>
                    <div class="report-details">
                        <?= $niche ?>
                    </div>
                    <div class="report-title">
                        Additional information
                    </div>
                    <div class="report-details">
                        <?= $additional ?>
                    </div>

                </div>
            </div>

            <div class="card report-card">
                <div class="card-body">
                    <div class="report-header">Metrics</div>
                    <div class="report-title">Duration</div>
                    <div class="report-details"><?= $duration_days ?> days</div>
                    <div class="report-title">Minimum budget</div>
                    <div class="report-details">
                        <?= $minimum_budget ?>
                    </div>
                    <div class="report-title">
                        Recommended budget
                    </div>
                    <div class="report-details">
                        <?= $recommended_budget ?>
                    </div>
                    <div class="report-title">Number of users</div>
                    <div class="report-details">
                        <?= $number_of_users ?>
                    </div>
                    <div class="report-title">
                        Additional information
                    </div>
                    <div class="report-details">
                        <?= $additional ?>
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

    <environment exclude="Development">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" asp-fallback-src="~/lib/jquery/dist/jquery.min.js" asp-fallback-test="window.jQuery" crossorigin="anonymous" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" asp-fallback-src="~/lib/bootstrap/dist/js/bootstrap.bundle.min.js" asp-fallback-test="window.jQuery && window.jQuery.fn && window.jQuery.fn.modal" crossorigin="anonymous" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o">
        </script>
    </environment>
</body>

</html>