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
    <div class="header">    
        <nav class="navbar navbar-expand-lg navbar-light bg-light header fixed-top">
            <div class="container-fluid ">
                <!-- 로고 -->
                <a class="navbar-brand mx-auto shop_name" href="#"><img src="https://see.fontimg.com/api/renderfont4/W9lv/eyJyIjoiZnMiLCJoIjo2NSwidyI6MTAwMCwiZnMiOjY1LCJmZ2MiOiIjMDAwMDAwIiwiYmdjIjoiI0ZGRkZGRiIsInQiOjF9/U0hPUA/quartzo-bold.png" alt="Bold fonts"></a>
                <!-- <a href="https://www.fontspace.com/category/bold"><img src="https://see.fontimg.com/api/renderfont4/W9lv/eyJyIjoiZnMiLCJoIjo2NSwidyI6MTAwMCwiZnMiOjY1LCJmZ2MiOiIjMDAwMDAwIiwiYmdjIjoiI0ZGRkZGRiIsInQiOjF9/U0hPUA/quartzo-bold.png" alt="Bold fonts"></a> -->
                <!-- 화면 줄였을 때 나타나는 메뉴 버튼  -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon navbar-light bg-light "></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- !리스트  -->

                    </ul> 


                    <!-- !검색 -->
                    <form class="d-flex"> 
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">

                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-search navList" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </button>
                    </form>
                    <div class="navListGroup">
                        <!-- !My -->
                        <?php if(isset($_SESSION[_STR_LOGIN_ID])){?>
                        <a href="/user/logout" class="navLinkBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-person-fill navList" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                            </svg>
                        </a> 
                        <?php }else{ ?>
                        <a href="/user/login "class="navLinkBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                            </svg>
                        </a> 
                        <?php } ?>



                        <!-- !장바구니 -->
                        <a href="" class="navLinkBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-cart navList" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                        </a>
                        <!-- <li class="navBtn"> -->
                            <!-- <a class="nav-link " role="button"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list navBtn navList" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                            <!-- </a> -->
                        <!-- </li> -->
                    </div>
                </div>
            </div>
        </nav>
    </div> 

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