<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create report</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body class="mb-5">
    <div class="mt-5">
        <div class="centralised-section">
            <div class="font-weight-bolder"><?= $company_name ?></div>
            <div class="text-left custom-h2 mb-1">Report</div>
            <div>
                Supply the fields to generate a report for customers with their information
            </div>
            <hr>
            <?php if (isset($validation)) : ?>
                <div class="alert alert-warning">
                    <?= $validation->listErrors() ?>
                </div>
                <hr />
            <?php endif; ?>
            <form action="<?php echo '/consultation-request' . '/' . $consultation_request_id . '/review' ?>" method="post">
                <div class="form-group">
                    <label class="custom-label">Name</label>
                    <input value="<?= $consultation_request_name ?>" readonly class="form-control" />
                </div>
                <div class="form-group">
                    <label class="custom-label">About</label>
                    <textarea required name="overview" readonly class="form-control" rows=4><?= $consultation_request_overview ?></textarea>
                </div>

                <div class="row">
                    <div class="col-8">
                        <label class="custom-label">Location</label>
                    </div>
                    <div class="col-4">
                        <label class="custom-label">Success (%)</label>
                    </div>
                    <div class="col-8">
                        <div class="form-group">
                            <input required class="form-control" value="Lagos, Nigeria" readonly />
                        </div>
                    </div>
                    <div class="col-4">
                        <input required type="number" name="success_probability" class="form-control" placeholder="0%" />
                    </div>

                </div>

                <div class="row">
                    <div class="col-12">
                        <label class="custom-label">Recommended Duration (days)</label>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input required name="duration" type="number" class="form-control" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 form-group">
                        <label class="custom-label">Min users</label>
                        <input name="min_users" required class="form-control" placeholder="0" />
                    </div>
                    <div class="col-6">
                        <label class="custom-label">Max users</label>
                        <input name="max_users" required class="form-control" placeholder="100" />
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                        </div>
                    </div>
                    <div class="col-6">
                    </div>
                </div>
                <div class="form-group my-3">
                    <label class="custom-label">Project feasibility *</label>
                    <select name="feasibility" class="form-control">
                        <option selected>High</option>
                        <option>Moderate</option>
                        <option>Low</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="custom-label">Summary *</label>
                    <textarea name="summary" class="form-control" rows="5"></textarea>
                </div>

                <button class="btn custom-primary-btn">Preview</button>
            </form>
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