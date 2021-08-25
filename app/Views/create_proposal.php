<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Consultation</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body class="">
    <div class="centralised-section">

        <div class="text-center mb-3">
            <div class="consultation-form-section-inactive">
                1
            </div>
            <div class="consultation-form-section-active">
                2
            </div>
            <div class="consultation-form-section-inactive">
                3
            </div>
            <div class="consultation-form-section-inactive">
                4
            </div>
        </div>

        <form>
            <div class="mb-4">
                <div class="custom-h3">General</div>
                <div class="custom-h6">
                    Enter the fields below to get a customised report on the product and/or service that would best suit you
                </div>
            </div>
            <hr class="hr-form">
            <div class="form-group my-3">
                <label class="custom-label">Name *</label>
                <input type="text" class="custom-textbox-input form-control" placeholder="Enter Name">
                <span class="custom-form-input-info">Give your product a short and clear name</span>
            </div>
            <div class="form-group my-3">
                <label class="custom-label">About</label>
                <textarea class="form-control custom-textarea-input" rows="4"></textarea>
                <span class="custom-form-input-info">Give your product a short and clear description</span>
            </div>
            <div class="form-group my-3">
                <label class="custom-label">Website</label>
                <input type="text" class="custom-textbox-input form-control" value="https://">
            </div>
            <div class="form-group my-3">
                <label class="custom-label">Location</label>
                <select class="form-control custom-select-input">
                    <option value="">Select location</option>
                    <option value="lagos">Lagos</option>
                    <option value="abuja">Abuja</option>
                    <option value="Ogun">Ogun</option>
                    <option value="Kwara">Kwara</option>
                    <option value="sokoto">Sokoto</option>
                </select>
            </div>
            <div class="form-group my-3">
                <label class="custom-label">Full address</label>
                <textarea class="form-control custom-textarea-input" rows="2"></textarea>
            </div>
            <div class="form-group my-3">
                <label class="custom-label">Additional information</label>
                <textarea class="form-control custom-textarea-input" rows="4"></textarea>
            </div>
            <div class="my-4">
                <div class="custom-h3 mt-5">Market</div>
                <div class="custom-h6">
                    Enter the fields to get a customised report on the product and/or service that would best suit you
                </div>
            </div>
            <hr class="hr-form">
            <div class="form-group my-3">
                <label class="custom-label">Inudstry *</label>
                <select class="form-control custom-select-input">
                    <option value="">Select Category</option>
                    <option value="lagos">Fashion</option>
                    <option value="abuja">Entertainment</option>
                    <option value="Ogun">School</option>
                    <option value="Kwara">Construction</option>
                    <option value="sokoto">Trade</option>
                </select>
            </div>
            <div class="form-group my-3">
                <label class="custom-label">Niche *</label>
                <input type="text" class="custom-textbox-input form-control">
            </div>
            <div class="form-group my-3">
                <label class="custom-label">Additional information</label>
                <textarea class="form-control custom-textarea-input" rows="4"></textarea>
            </div>


            <div class="mb-4">
                <div class="custom-h3 mt-5">Metrics</div>
                <div class="custom-h6">
                    Enter the fields to get a customised report on the product and/or service that would best suit you
                </div>
            </div>
            <hr class="hr-form">
            <div class="form-group my-3">
                <label class="custom-label">Duration *</label>
                <div class="row">
                    <div class="col-md-4 col-4 pr-0">
                        <input type="number" class="custom-textbox-input form-control">
                    </div>
                    <div class="col-md-6 col-6">
                        <select class="form-control custom-select-input">
                            <option value="">Days</option>
                            <option value="lagos">Weeks</option>
                            <option value="abuja">Months</option>
                            <option value="Ogun">Years</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group my-3">
                <label class="custom-label">Minimum budget (₦) *</label>
                <input type="number" class="custom-textbox-input form-control">
            </div>
            <div class="form-group my-3">
                <label class="custom-label">Recommended budget (₦) *</label>
                <input type="number" class="custom-textbox-input form-control">
            </div>
            <div class="form-group my-3">
                <label class="custom-label">Number of users *</label>
                <input type="number" class="custom-textbox-input form-control">
            </div>
            <div class="form-group my-3">
                <label class="custom-label">Additional information</label>
                <textarea class="form-control custom-textarea-input" rows="4"></textarea>
            </div>

            <div class="my-4">
                <input type="submit" value="Continue" class="custom-primary-btn btn">
            </div>
        </form>

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