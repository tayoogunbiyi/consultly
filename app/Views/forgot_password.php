<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Sign Up</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="site.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    </head>
    <body class="">
        <div class="mt-5">
            <div class="centralised-section">
                <div class="text-center custom-h1 mb-4">Forgot Password</div>
                <form>
                <div class="form-group my-3">
                    Enter the email associated with your account and we will send an email with instructions to reset your password.
                </div>
                <div class="form-group my-3">
                    <label class="custom-label">Email</label>
                    <input type="email" class="custom-textbox-input form-control" placeholder="Please enter your email address">
                </div>
                <div class="my-4">
                    <input type="submit" value="Send Instructions" class="custom-primary-btn btn">
                </div>
                <div class=" text-center">
                    <a href="signin.html" class="font-weight-bolder custom-link-black">Remember password? Sign In</a>
                </div>
                </form>
            </div>
        </div>

        <environment exclude="Development">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"
                    asp-fallback-src="~/lib/jquery/dist/jquery.min.js"
                    asp-fallback-test="window.jQuery"
                    crossorigin="anonymous"
                    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=">
            </script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
                    asp-fallback-src="~/lib/bootstrap/dist/js/bootstrap.bundle.min.js"
                    asp-fallback-test="window.jQuery && window.jQuery.fn && window.jQuery.fn.modal"
                    crossorigin="anonymous"
                    integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o">
            </script>
        </environment>
    </body>
 </html>           