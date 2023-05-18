
<header>
    <div class="headerZip">
        <div class="container info">
            <div class="d-flex justify-content-end py-3 infoList" id ="div2">
                <ul class="nav nav-pills" id="nav_log">
                    <?php if( isset($_SESSION[_STR_LOGIN_ID] )){ ?>
                        <li class="nav-item">
                            <a href="/user/logout" class="nav-link navColor logoutBtn">로그아웃</a>
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

        <div class="container list">
            <div class="row headerBar">
                <div class="col mainHeader">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-list menuBtn" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </div>
                <!-- 로고 -->
            <div class="col mainHeader">
                <a href="/shop/main"><img src="https://see.fontimg.com/api/renderfont4/W9lv/eyJyIjoiZnMiLCJoIjo0NiwidyI6MTAwMCwiZnMiOjQ2LCJmZ2MiOiIjRkZGQ0ZDIiwiYmdjIjoiIzBCMDEwMSIsInQiOjF9/U0hPUA/quartzo-bold.png" class="logoImg" alt="Bold fonts"></a>
            </div>
            <!-- 검색 -->
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
        <div class="listGroup">
            <ul class="listCollection">
                <p class="title">OUTER</p>
                <li><a class="sideList" href="#">Coat</a></li>
                <li><a class="sideList" href="#">Jacket</a></li>
                <li><a class="sideList" href="#">Tweed</a></li>
                <li><a class="sideList" href="#">Others</a></li>
            </ul>
            <ul class="listCollection" >
                <p class="title">TOP</p>
                <li><a class="sideList" href="#">Shirts</a></li>
                <li><a class="sideList" href="#">knit</a></li>
                <li><a class="sideList" href="#">Tee</a></li>
                <li><a class="sideList" href="#">Others</a></li>
            </ul>
        
            <ul class="listCollection">
                <p class="title">BOTTOM</p>
                <li ><a class="sideList" href="#">Pants</a></li>
                <li ><a class="sideList" href="#">Denim</a></li>
                <li ><a class="sideList" href="#">Slacks</a></li>
                <li ><a class="sideList" href="#">Others</a></li>
            </ul>
            <ul class="listCollection">
                <p class="title">ACC</p>
                <li ><a class="sideList" href="#">Bag</a></li>
                <li ><a class="sideList" href="#">Belt</a></li>
                <li ><a class="sideList" href="#">Shoes</a></li>
                <li ><a class="sideList" href="#">Others</a></li>
            </ul>
        </div> 
    </div>
    </header>


    



    