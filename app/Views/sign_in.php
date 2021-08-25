<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body class="">
    <div class="mt-5">
        <div class="centralised-section">
            <?php if (isset($from_registration)) : ?>
                <div class="alert alert-success">
                    <h6>Created account successfully </h6>
                </div>
            <?php endif; ?>
            <div class="text-center custom-h1 mb-4">Sign In</div>
            <?php if (isset($validation)) : ?>
                <div class="alert alert-warning">
                    <?= $validation->listErrors() ?>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>
            <form action="<?php echo base_url(); ?>/signin" method="post">
                <div class="form-group my-3">
                    <label class="custom-label">Email</label>
                    <input name="email" type="email" class="custom-textbox-input form-control" placeholder="Please enter your email address">
                </div>
                <div class="form-group my-3">
                    <label class="custom-label">Password</label>
                    <span class="float-right mt-2 grey-color">
                        <a href="forgotpassword.html" class="custom-link-grey">Forgot password?</a>
                    </span>
                    <input name="password" type="password" class="custom-textbox-input form-control" placeholder="Please enter your password">
                </div>
                <div class="my-4">
                    <input type="submit" value="Sign In" class="custom-primary-btn btn">
                </div>

                <!-- <div class="form-group my-3">
                        <input type="checkbox" class="" style="width:20px">
                        Creating an account means you are okay with our Terms of Service and Privacy policy
                    </div> -->
                <div class=" text-center">
                    <a href="/register" class="font-weight-bolder custom-link-black">Don't you have an account? Register</a>
                </div>
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