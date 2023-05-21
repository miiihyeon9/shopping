<!-- database 비밀번호 암호화때문에 512  -->


<!DOCTYPE html>
<head lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="/application/view/css/index.css">
</head>
<body>
    <!-- <div class="wrap container"> -->
        <?php require_once("application/view/header.php"); ?>
        <div class="center">
            <div class="carouselGroup">
                <h3>< BEST ></h3>
                <!-- 캐러셀 -->
                <div id="carouselExampleInterval carouselGroup" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner ">
                        <div class="carousel-item active carouselGrid" data-bs-interval="3000">
                            <img src="/application/view/img/knit.jpg" class="card-img-top caroImg" alt="...">
                            <img src="/application/view/img/greenTShirts.jpg" class="card-img-top caroImg" alt="...">
                            <img src="/application/view/img/pic3.jpg" class="card-img-top caroImg" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="/application/view/img/greenTShirts.jpg" class="card-img-top caroImg" alt="...">
                            <img src="/application/view/img/pic2.jpg" class="card-img-top caroImg" alt="...">
                            <img src="/application/view/img/pic3.jpg" class="card-img-top caroImg" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="/application/view/img/knit.jpg" class="card-img-top caroImg" alt="...">
                            <img src="/application/view/img/greenTShirts.jpg" class="card-img-top caroImg" alt="...">
                            <img src="/application/view/img/pic2.jpg" class="card-img-top caroImg" alt="...">

                        </div>
                    </div>


                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        
            <h3>New Arrivals</h3>
            <div class="card">
                    <!-- !카드 (grid)-->

                <div class="container cardList">
                    <div class="row row-xxl-4 cardGroup">
                        <div class="col d-flex justify-content-center cardItems" >
                            <div class="card" style="width: 18rem;">
                                <a href=""><img src="/application/view/img/pic2.jpg" class="card-img-top" alt="고라파덕"></a>
                                <div class="card-body">
                                    <h5 class="card-title">고라파덕</h5>
                                    <p class="card-text">파덕?</p>
                                </div>
                            </div>
                        </div>

                        <div class="col d-flex justify-content-center cardItems">
                            <div class="card" style="width: 18rem;">
                                <a href=""><img src="/application/view/img/greenTShirts.jpg" class="card-img-top" alt="고라파덕"></a>
                                    <div class="card-body">
                                        <h5 class="card-title">고라파덕</h5>
                                        <p class="card-text">파아덕?</p>
                                    </div>
                            </div>
                        </div>  
                    
                        <div class="col d-flex justify-content-center cardItems">
                            <div class="card" style="width: 18rem;">
                                <a href=""><img src="/application/view/img/knit.jpg" class="card-img-top" alt="고라파덕"></a>
                                <div class="card-body">
                                    <h5 class="card-title">고라파덕</h5>
                                    <p class="card-text">파덕파아덕?</p>
                                </div>
                            </div>
                        </div>

                        <div class="col d-flex justify-content-center cardItems">
                            <div class="card" style="width: 18rem;">
                                <a href=""><img src="/application/view/img/pic3.jpg" class="card-img-top" alt="고라파덕"></a>
                                <div class="card-body">
                                    <h5 class="card-title">고라파덕</h5>
                                    <p class="card-text">파덕파덕~</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col d-flex justify-content-center cardItems">
                            <div class="card" style="width: 18rem;">
                                <a href=""><img src="/application/view/img/pic2.jpg" class="card-img-top" alt="고라파덕"></a>
                                <div class="card-body">
                                    <h5 class="card-title">고라파덕</h5>
                                    <p class="card-text">파더어억!!!</p>

                                </div>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center cardItems">
                            <div class="card" style="width: 18rem;">
                                <a href=""><img src="/application/view/img/greenTShirts.jpg" class="card-img-top" alt="고라파덕"></a>
                                <div class="card-body">
                                    <h5 class="card-title">고라파덕</h5>
                                    <p class="card-text">파더어억!!!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- </div> -->
    
        <?php require_once("application/view/footer.php") ?>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="/application/view/JavaScript/index.js"></script>
</body>
</html>