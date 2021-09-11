<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body class="">
    <div class="mt-5">
        <div class="centralised-section">
            <div class="text-center custom-h1 mb-4">Contact</div>
            <div class="text-center custom-h2 mb-4">The help you need is just a click away...</div>
            <form method="post" action="<?php echo base_url(); ?>/about" method="post">
                <div class="form-group my-3">
                    <label class="custom-label">Name</label>
                    <input required type="text" class="custom-textbox-input form-control" placeholder="Please enter your full Name">
                </div>
                <div class="form-group my-3">
                    <label class="custom-label">Company</label>
                    <input required type="text" class="custom-textbox-input form-control" placeholder="Please enter your company name">
                </div>
                <div class="form-group my-3">
                    <label class="custom-label">Email</label>
                    <input required type="email" class="custom-textbox-input form-control" placeholder="Please enter your company email address">
                </div>
                <div class="form-group my-3">
                    <label class="custom-label">Phone</label>
                    <input required type="number" class="custom-textbox-input form-control" placeholder="Please enter your phone number">
                </div>
                <div class="form-group my-3">
                    <label class="custom-label">How can we help you?</label>
                    <textarea required rows="5" cols="30" class="custom-textbox-input form-control"></textarea>
                </div>
                <div class="my-4">
                    <input type="submit" value="Submit" class="custom-primary-btn btn">
                </div>
            </form>
        </div>
    </div>
</body>