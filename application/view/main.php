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
    <!-- ! 네비게이션 바 -->
<!-- <div class="container"> -->
    <?php require_once("application/view/header.php"); 
    ?>

    <div class="contentBox">
        
        <!-- 사이드바 -->
        <div class="sideBar">
        <nav class="offCanGroup">
            <br>
            <p class="sideTitle">New</p>
            <p class="sideTitle">Best</p>
            <p class="sideTitle">Outer</p>
                <li><a class="sideList" href="#">Coat</a></li>
                <li><a class="sideList" href="#">Jacket</a></li>
                <li><a class="sideList" href="#">Tweed</a></li>
                <li><a class="sideList" href="#">Others</a></li>
            <p class="sideTitle">Top</p>
                <li><a class="sideList" href="#">Shirts</a></li>
                <li><a class="sideList" href="#">Sleeve</a></li>
                <li><a class="sideList" href="#">knit</a></li>
                <li><a class="sideList" href="#">Tee</a></li>
                <li><a class="sideList" href="#">Others</a></li>
            <p class="sideTitle">Bottom</p>
                <li ><a class="sideList" href="#">Pants</a></li>
                <li ><a class="sideList" href="#">Denim</a></li>
                <li ><a class="sideList" href="#">Slacks</a></li>
                <li ><a class="sideList" href="#">Others</a></li>
            <p class="sideTitle">ACC</p>
                <li ><a class="sideList" href="#">Bag</a></li>
                <li ><a class="sideList" href="#">Belt</a></li>
                <li ><a class="sideList" href="#">Shoes</a></li>
                <li ><a class="sideList" href="#">Others</a></li>
            </nav>
        </div>

        <div class="ListGroup">
            <h3>BEST 상품</h3>
            <!-- 캐러셀 -->
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner ">
                    <div class="carousel-item active " data-bs-interval="3000">
                        <div class="carouselImgBox">
                            <img src="/application/view/img/pic1.jpg" class="card-img-top carouselImg" alt="...">
                            <img src="/application/view/img/pic2.jpg" class="card-img-top carouselImg" alt="...">  
                            <img src="/application/view/img/pic3.jpg" class="card-img-top carouselImg" alt="...">
                        </div>
                    </div>
                    <div class="carousel-item carouselSize" data-bs-interval="3000">
                        <div class="carouselImgBox">
                            <img src="/application/view/img/pic1.jpg" class="card-img-top carouselImg" alt="...">
                            <img src="/application/view/img/고라파덕.jpg" class="card-img-top carouselImg" alt="...">  
                            <img src="/application/view/img/pic3.jpg" class="card-img-top carouselImg" alt="...">
                        </div>          
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <div class="carouselImgBox">
                            <img src="/application/view/img/pic1.jpg" class="card-img-top carouselImg" alt="...">
                            <img src="/application/view/img/pic2.jpg" class="card-img-top carouselImg" alt="...">  
                            <img src="/application/view/img/고라파덕.jpg" class="card-img-top carouselImg" alt="...">
                        </div>        
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




                <!-- !카드 (grid)-->
            <div class="container ">
                <div class="row row-xxl-4">
                    <div class="col d-flex justify-content-center cardItems" >
                        <div class="card" style="width: 18rem;">
                            <a href=""><img src="/application/view/img/고라파덕.jpg" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title">고라파덕</h5>
                                <p class="card-text">파덕?</p>
                            </div>
                        </div>
                    </div>

                    <div class="col d-flex justify-content-center cardItems">
                        <div class="card" style="width: 18rem;">
                            <a href=""><img src="/application/view/img/고라파덕.jpg" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h5 class="card-title">고라파덕</h5>
                                    <p class="card-text">파아덕?</p>
                                </div>
                        </div>
                    </div>  
                
                    <div class="col d-flex justify-content-center cardItems">
                        <div class="card" style="width: 18rem;">
                            <a href=""><img src="/application/view/img/고라파덕.jpg" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title">고라파덕</h5>
                                <p class="card-text">파덕파아덕?</p>
                            </div>
                        </div>
                    </div>

                    <div class="col d-flex justify-content-center cardItems">
                        <div class="card" style="width: 18rem;">
                            <a href=""><img src="/application/view/img/고라파덕.jpg" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title">고라파덕</h5>
                                <p class="card-text">파덕파덕~</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col d-flex justify-content-center cardItems">
                        <div class="card" style="width: 18rem;">
                            <a href=""><img src="/application/view/img/고라파덕.jpg" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title">고라파덕</h5>
                                <p class="card-text">파더어억!!!</p>

                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center cardItems">
                        <div class="card" style="width: 18rem;">
                            <a href=""><a href=""><img src="/application/view/img/고라파덕.jpg" class="card-img-top" alt="..."></a></a>
                            <div class="card-body">
                                <h5 class="card-title">고라파덕</h5>
                                <p class="card-text">파더어억!!!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center cardItems">
                        <div class="card" style="width: 18rem;">
                            <a href=""><a href=""><img src="/application/view/img/고라파덕.jpg" class="card-img-top" alt="..."></a></a>
                            <div class="card-body">
                                <h5 class="card-title">고라파덕</h5>
                                <p class="card-text">파더어억!!!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center cardItems">
                        <div class="card" style="width: 18rem;">
                            <a href=""><a href=""><img src="/application/view/img/고라파덕.jpg" class="card-img-top" alt="..."></a></a>
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
    
        <!--! 모달 -->
        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
        데려가기
        </button> -->
    
        <!--! Modal -->
        <!-- <div class="modal fade modalWrapper" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modalCenter">
            <div class="modal-content modalBox">
                <div class="modalHeaderGroup">
                    <h5 class="modal-title" id="exampleModalLabel">검색창</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="">
                    <input class="form-control me-2 searchBox" type="search" placeholder="Search" aria-label="Search">
                    <button type="submit" class="btn btn-outline-dark">검색</button> -->
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">취소</button> -->
                <!-- </form> -->
                <!-- <div class="modalBtnGroup"> -->
                <!-- </div> -->
                <!-- </div> -->
        <!-- </div>
        </div> -->
<!-- </div> -->

        <script src="/application/view/JavaScript/index2.js"></script>
        <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>