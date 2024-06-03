<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />

    <title>Chat App Kelompok 3</title>
</head>
<!-- Header -->
<?php include '../header.html'; ?>

<body class="h-100 justify-content-center">
    <div class="section d-flex justify-content-center align-items-center">
        <img class="img-fluid w-100" src="../img/kontenheader.svg" alt="" />
    </div>

    <!-- Chat -->
    <div class="container mt-5 mb-5">
        <div class="row w-100 justify-content-center pt-5 pb-5">
            <div class="col-lg-5"></div>
            <div class="col-lg-5">
                <div id="roomchat1">

                    <!-- Profil -->
                    <div class="row py-3 mt-0 rounded-top" style="background-color: #A78295;">
                        <div class="d-flex align-items-center">
                            <img class="img-fluid" style="width:fit-content;" src="../img/profil2.svg" alt="">
                            <div class="ms-3">
                                <h6 class="mb-1 text-white" id="name" style="font-size: 16px; font-weight: 600;">Latisha</h6>
                                <p class="mb-0 text-white" style="font-size: 16px;">Online</p>
                            </div>
                        </div>
                    </div>

                    <!-- Background -->
                    <div class="row py-3 align-self-start" id="roomchat" style="background-color: #E2D2DA; height: 500px; overflow-y: auto;">
                    </div>

                    <!-- Text bar -->
                    <div class="row chat-input-container p-2 justify-content-between rounded-bottom" style="background-color: #A78295;">
                        <form class="d-flex align-content-center" id="sendChat">
                            <span>
                                <input type="file" class="form-control bg-transparent d-none" id="fileInput">
                                <label for="fileInput" class="input-group-text bg-transparent border-0">
                                    <img class="img-fluid" src="../img/add.svg">
                                </label>
                            </span>
                            <div class="d-flex align-items-center flex-grow-1 mx-2">
                                <input type="text" id="chatInput" class="bg-transparent border-0 w-100 text-white" placeholder="Ketikkan pesan...">
                            </div>
                            <span class>
                                <button class="btn" id="chat"><img class="img-fluid" src="../img/send.svg">
                                </button>
                            </span>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 d-flex justify-content-end align-self-start p-0">
                <button class="btn p-0" id="iconchat"><img class="img-fluid" src="../img/iconchat.svg"></button>
            </div>
            <script src="../chat.js"></script>

        </div>
    </div>
</body>

<!-- Footer -->
<?php include '../footer.html'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>