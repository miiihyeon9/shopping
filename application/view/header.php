
<header>
    <div class="container ">
        <div class="d-flex justify-content-end py-3 infoList" id ="div2">
            <ul class="nav nav-pills" id="nav_log">
                <?php if( isset($_SESSION[_STR_LOGIN_ID] )){ ?>
                    <li class="nav-item">
                        <a href="/user/logout" class="nav-link navColor" >로그아웃</a>
                    </li>
                    <li class="nav-item">
                        <a href="/user/info" class="nav-link navColor" >내정보</a>
                    </li>
                    <?php } else { ?>
                    <li class="nav-item">
                        <a href="/user/login" class="nav-link navColor" >로그인</a>
                    </li>
                    <li class="nav-item">
                        <a href="/user/regist" class="nav-link navColor" >회원가입</a>
                    </li>
                <?php }?>
                    <li class="nav-item" >
                        <a href="#" class="nav-link navColor">장바구니</a>
                    </li>
            </ul>
        </div>
    </div>
    <!-- 패딩값 주고 뒷배경 검정 -->
    <div class="container ">
        <div class="row">
            <div class="col mainHeader">
                <nav class="navbar navbar-expand-lg navbar-dark navbarBackGround">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <!-- <li class="nav-item">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    OUTER
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Coat</a></li>
                                        <li><a class="dropdown-item" href="#">Jacket</a></li>
                                        <li><a class="dropdown-item" href="#">Tweed</a></li>
                                        <li><a class="dropdown-item" href="#">Others</a></li>
                                    </ul>
                                </div>
                            </li> -->
                            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                    </li>
                                </ul>
                                </div>
                            <li class="nav-item">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    TOP
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Coat</a></li>
                                        <li><a class="dropdown-item" href="#">Jacket</a></li>
                                        <li><a class="dropdown-item" href="#">Tweed</a></li>
                                        <li><a class="dropdown-item" href="#">Others</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    BOTTOM
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Coat</a></li>
                                        <li><a class="dropdown-item" href="#">Jacket</a></li>
                                        <li><a class="dropdown-item" href="#">Tweed</a></li>
                                        <li><a class="dropdown-item" href="#">Others</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    ACC
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Coat</a></li>
                                        <li><a class="dropdown-item" href="#">Jacket</a></li>
                                        <li><a class="dropdown-item" href="#">Tweed</a></li>
                                        <li><a class="dropdown-item" href="#">Others</a></li>
                                    </ul>
                                </div>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link active navLink" aria-current="page" href="#">TOP</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active navLink" aria-current="page" href="#">BOTTOM</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active navLink" aria-current="page" href="#">ACC</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </nav>
            </div>
        <div class="col mainHeader">
            <a href="https://www.fontspace.com/category/bold"><img src="https://see.fontimg.com/api/renderfont4/W9lv/eyJyIjoiZnMiLCJoIjo0NiwidyI6MTAwMCwiZnMiOjQ2LCJmZ2MiOiIjRkZGQ0ZDIiwiYmdjIjoiIzBCMDEwMSIsInQiOjF9/U0hPUA/quartzo-bold.png" class="logoImg" alt="Bold fonts"></a>
        </div>
        <div class="col mainHeader">
            <form class="d-flex"> 
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-search navList" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
            </form>
        </div>
    </div>
        <!-- 사이드 바  -->
                <!-- <ul class="listGroup outerClothes">
                <li><a class="sideList" href="#">Coat</a></li>
                    <li><a class="sideList" href="#">Jacket</a></li>
                    <li><a class="sideList" href="#">Tweed</a></li>
                    <li><a class="sideList" href="#">Others</a></li>
                </ul> -->
                <!-- <ul class="listGroup topClothes">
                    <li><a class="sideList" href="#">Shirts</a></li>
                    <li><a class="sideList" href="#">Sleeve</a></li>
                    <li><a class="sideList" href="#">knit</a></li>
                    <li><a class="sideList" href="#">Tee</a></li>
                    <li><a class="sideList" href="#">Others</a></li>
                </ul>
                <ul class="listGroup bottomClothes">
                    <li ><a class="sideList" href="#">Pants</a></li>
                    <li ><a class="sideList" href="#">Denim</a></li>
                    <li ><a class="sideList" href="#">Slacks</a></li>
                    <li ><a class="sideList" href="#">Others</a></li>
                </ul>
                <ul class="listGroup accClothes">
                    <li ><a class="sideList" href="#">Bag</a></li>
                    <li ><a class="sideList" href="#">Belt</a></li>
                    <li ><a class="sideList" href="#">Shoes</a></li>
                    <li ><a class="sideList" href="#">Others</a></li>
                </ul> -->
                <!-- <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown button
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </div> -->
            </header>
                <div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Action
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div>

    



    