<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body class="">
    <div class="mt-5" style="margin-bottom: 100px;">
        <div class="centralised-section">
            <div class="text-center custom-h1 mb-4">Sign Up</div>
            <?php if (isset($validation)) : ?>
                <div class="alert alert-warning">
                    <?= $validation->listErrors() ?>
                </div>
            <?php endif; ?>
            <form action="<?php echo base_url(); ?>/signup" method="post">
                <form>
                    <div class="form-group my-3">
                        <label class="custom-label">Company name</label>
                        <input name="company-name" type="text" class="custom-textbox-input form-control" placeholder="Please enter your company name">
                    </div>
                    <div class="form-group my-3">
                        <label class="custom-label">Company email</label>
                        <input name="company-email" type="email" class="custom-textbox-input form-control" placeholder="Please enter your email">
                    </div>
                    <div class="form-group my-3">
                        <label class="custom-label">Company number</label>
                        <input name="company-number" type="number" class="custom-textbox-input form-control" placeholder="Please enter your number">
                    </div>
                    <div class="form-group my-3">
                        <label class="custom-label">Password</label>
                        <input name="company-password" type="password" class="custom-textbox-input form-control" placeholder="Please enter your password">
                    </div>
                    <div class="form-group my-3">
                        <label class="custom-label">Confirm password</label>
                        <input name="company-confirm-password" type="password" class="custom-textbox-input form-control" placeholder="Please confirm your password">
                    </div>
                    <div class="form-group my-3">
                        <input type="checkbox" class="" style="width:20px">
                        Creating an account means you agree to our Terms of Service and Privacy policy
                    </div>
                    <div class="my-4">
                        <input type="submit" value="Sign Up" class="custom-primary-btn btn">
                    </div>

                    <div class=" text-center">
                        <a href="/signin" class="font-weight-bolder custom-link-black">Already have an account? Sign In</a>
                    </div>
                </form>
        </div>

    </div>


    <environment exclude="Development">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" asp-fallback-src="~/lib/jquery/dist/jquery.min.js" asp-fallback-test="window.jQuery" crossorigin="anonymous" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" asp-fallback-src="~/lib/bootstrap/dist/js/bootstrap.bundle.min.js" asp-fallback-test="window.jQuery && window.jQuery.fn && window.jQuery.fn.modal" crossorigin="anonymous" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o">
        </script>
    </environment>
</body>

</html>