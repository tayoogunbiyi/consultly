<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body class="">
    <div class="mt-5">
        <div class="centralised-section">
            <div class="text-center custom-h1 mb-4">Profile</div>
            <h5>Welcome , <?= $email ?> </h5>
            <h5> Company - <?= $company_name ?> </h5>
            <a href="/consultation-request">Request New Consultation</a>
        </div>

        <div>
            <h4>You've requested <?= $consultation_requests_count ?> consultation(s) </h4>
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