<?php
date_default_timezone_set('America/Denver');
require_once "app/database/connection.php";
require_once "path.php";
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

$files = glob("app/functions/*.php");
foreach ($files as $file) {
    require_once $file;
}

// loginUser($conn);
// if(isLoggedIn() == true) {
//     header('location:' . BASE_URL . '/');
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/css/styles.css?v=<?php echo time(); ?>">

    <title>Home | Asset360</title>
</head>
<body>
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    <?php include(ROOT_PATH . "/app/includes/sidebar.php"); ?>

    <!-- Main Content -->

        <div class="container" style="">

            <div class="mt-4"></div>

            <!-- Top Card Container -->
                <div class="card-container">
                    <div class="card" style="">
                        <div class="card-body text-center">
                            <p class="card-text">
                                <div class="card_text_left float-start" style="font-size: 45px;">
                                    <i class="bi bi-hdd-stack ps-4"></i>
                                </div>
                                <div class="card_text_right float-end pe-3">
                                    <p class="text-end">9</p>
                                    <p class="text-muted text-end">Servers</p>
                                </div>
                            </p>
                        </div>
                    </div>
                    <div class="card" style="">
                        <div class="card-body text-center">
                            <p class="card-text">
                                <div class="card_text_left float-start" style="font-size: 45px;">
                                    <i class="bi bi-pc-display-horizontal ps-4"></i>
                                </div>
                                <div class="card_text_right float-end pe-3">
                                    <p class="text-end">1</p>
                                    <p class="text-muted text-end">Computers</p>
                                </div>
                            </p>
                        </div>
                    </div>
                    <div class="card" style="">
                        <div class="card-body text-center">
                            <p class="card-text">
                                <div class="card_text_left float-start" style="font-size: 45px;">
                                    <i class="bi bi-diagram-2 ps-4"></i>
                                </div>
                                <div class="card_text_right float-end pe-3">
                                    <p class="text-end">6</p>
                                    <p class="text-muted text-end">Networking</p>
                                </div>
                            </p>
                        </div>
                    </div>
                    <div class="card" style="">
                        <div class="card-body text-center">
                            <p class="card-text">
                                <div class="card_text_left float-start" style="font-size: 45px;">
                                    <i class="bi bi-printer ps-4"></i>
                                </div>
                                <div class="card_text_right float-end pe-3">
                                    <p class="text-end">9</p>
                                    <p class="text-muted text-end">Devices</p>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
            <!-- end Top Card Container -->

            <!-- Bottom Card Container -->
                <div class="card-container">
                    <div class="card" style="">
                        <div class="card-body text-center">
                            <p class="card-text">
                                <div class="card_text_left float-start" style="font-size: 45px;">
                                    <i class="bi bi-keyboard ps-4"></i>
                                </div>
                                <div class="card_text_right float-end pe-3">
                                    <p class="text-end">2</p>
                                    <p class="text-muted text-end">Accessories</p>
                                </div>
                            </p>
                        </div>
                    </div>
                    <div class="card" style="">
                        <div class="card-body text-center">
                            <p class="card-text">
                                <div class="card_text_left float-start" style="font-size: 45px;">
                                    <i class="bi bi-geo-fill ps-4"></i>
                                </div>
                                <div class="card_text_right float-end pe-3">
                                    <p class="text-end">4</p>
                                    <p class="text-muted text-end">IP Addresses</p>
                                </div>
                            </p>
                        </div>
                    </div>
                    <div class="card" style="">
                        <div class="card-body text-center">
                            <p class="card-text">
                                <div class="card_text_left float-start" style="font-size: 45px;">
                                    <i class="bi bi-database-fill ps-4"></i>
                                </div>
                                <div class="card_text_right float-end pe-3">
                                    <p class="text-end">6</p>
                                    <p class="text-muted text-end">Databases</p>
                                </div>
                            </p>
                        </div>
                    </div>
                    <div class="card" style="">
                        <div class="card-body text-center">
                            <p class="card-text">
                                <div class="card_text_left float-start" style="font-size: 45px;">
                                    <i class="bi bi-search ps-4"></i>
                                </div>
                                <div class="card_text_right float-end pe-3">
                                    <p class="text-end">2</p>
                                    <p class="text-muted text-end">Audits Due</p>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
            <!-- end Bottom Card Container -->

        </div>

    <!-- end Main Content -->


    <!-- Bootstrap Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- end Bootstrap Scripts -->
</body>
</html>