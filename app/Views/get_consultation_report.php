<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin-Consultation request</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body class="mb-5">
    <div class="mt-5 container">
        <div class="row">
            <div class="col-md-7">
                <div class="font-weight-bolder d-inline-block">
                    Report
                </div>
                <div class="custom-h3">
                    <?= $company_name ?>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card report-card">
                    <div class="card-body">
                        <div class="consultation-report-title">
                            Success Rate
                        </div>
                        <div class="my-1">
                            <div style="width: 100%; display: table;">
                                <div style="display: table-row">
                                    <div class="consultation-report-title-value" style="display: table-cell;">
                                        <p><?= $success_probability ?>%</p>
                                    </div>
                                    <div class="conusltation-report-brief-description" style="display: table-cell;">
                                        relatively low barriers to entry</div>
                                </div>
                            </div>
                        </div>

                        <div class="consultation-report-description">
                            Enter the fields below to get a custom report on the product and/or service that would best
                            suit you
                        </div>
                        <div class="mt-4">
                            <a class="a-link">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card report-card">
                    <div class="card-body">
                        <div class="consultation-report-title">
                            Minimum Number Of Users
                        </div>
                        <div class="my-1">
                            <div style="width: 100%; display: table;">
                                <div style="display: table-row">
                                    <div class="consultation-report-title-value" style="display: table-cell;">
                                        <p><?= $min_users ?></p>
                                    </div>
                                    <div class="conusltation-report-brief-description" style="display: table-cell;">
                                        relatively low barriers to entry</div>
                                </div>
                            </div>
                        </div>

                        <div class="consultation-report-description">
                            Enter the fields below to get a custom report on the product and/or service that would best
                            suit you
                        </div>
                        <div class="mt-4">
                            <a class="a-link">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card report-card">
                    <div class="card-body">
                        <div class="consultation-report-title">
                            Max Users
                        </div>
                        <div class="my-1">
                            <div style="width: 100%; display: table;">
                                <div style="display: table-row">
                                    <div class="consultation-report-title-value" style="display: table-cell;">
                                        <p><?= $max_users ?></p>
                                    </div>
                                    <div class="conusltation-report-brief-description" style="display: table-cell;">
                                        personnel recommended with a minimum of 25
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="consultation-report-description">
                            Enter the fields below to get a custom report on the product and/or service that would best
                            suit you
                        </div>
                        <div class="mt-4">
                            <a class="a-link">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card report-card">
                    <div class="card-body">
                        <div class="consultation-report-title">
                            Expected Duration (Days)
                        </div>
                        <div class="my-1">
                            <div style="width: 100%; display: table;">
                                <div style="display: table-row">
                                    <div class="consultation-report-title-value" style="display: table-cell;">
                                        <p><?= $duration ?></p>
                                    </div>
                                    <div class="conusltation-report-brief-description" style="display: table-cell;">
                                        personnel recommended with a minimum of 25
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="consultation-report-description">
                            Enter the fields below to get a custom report on the product and/or service that would best
                            suit you
                        </div>
                        <div class="mt-4">
                            <a class="a-link">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card report-card">
                    <div class="card-body">
                        <div class="consultation-report-title">
                            Optimal Location
                        </div>
                        <div class="my-1">
                            <div style="width: 100%; display: table;">
                                <div style="display: table-row">
                                    <div class="consultation-report-title-value" style="display: table-cell;">
                                        Lagos
                                    </div>
                                    <div class="conusltation-report-brief-description" style="display: table-cell;">
                                        Nigeria
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="consultation-report-description">
                            Enter the fields below to get a custom report on the product and/or service that would best
                            suit you
                        </div>
                        <div class="mt-4">
                            <a class="a-link">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card report-card">
                    <div class="card-body">
                        <div class="consultation-report-title">
                            Summary
                        </div>
                        <div class="my-1">
                            <div style="width: 100%; display: table;">
                                <div style="display: table-row">
                                    <div class="conusltation-report-brief-description" style="display: table-cell;">
                                        <p>

                                            <?= $summary ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="consultation-report-description">
                            <p>
                                Enter the fields below to get a custom report on the product and/or service that would best
                                suit you
                            </p>
                        </div>
                        <div class="mt-4">
                            <a class="a-link">Learn more</a>
                        </div>
                    </div>
                </div>
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
    .consultation-report-title {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .consultation-report-title-value {
        font-size: 50px;
        font-weight: 700;
        margin-right: 10px;
        vertical-align: bottom;
        display: table-cell;
    }

    .conusltation-report-brief-description {
        font-size: 16px;
        font-weight: 600;
        vertical-align: bottom;
        display: table-cell;
        line-height: 17px;

        padding-bottom: 16px;
        padding-left: 10px;
    }

    .consultation-report-description {
        font-size: 16px;
        font-weight: 600;
        color: #636363;
    }
</style>