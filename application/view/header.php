<header>
    <!-- !로고, 검색, 장바구니, 내 정보 -->
    <div class ="mainHeader">
        <!-- 로고 -->
        <div>
            <a href="/shop/main"><img src="/application/view/img/logoImg.png" alt="Serif fonts"></a>
        </div>        <!-- 검색 -->
        <form action="/shop/search" method="get" class="searchBox">
            <input type="search" placeholder="Search" class="searchInput">
            <button type="submit" class="searchButton">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-search navList" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </button>
        </form>
        <!-- 장바구니, 내정보 -->
        <div class="myInfo">
            <!-- 장바구니 -->
            <span class="infoList">
                <a href="">CART</a>
            </span>
            <!-- 로그인 -->
            <?php if( isset($_SESSION[_STR_LOGIN_ID] )){ ?>
            <span class="infoList login">
                <a href="/user/logout">LOGOUT</a>
            </span>
            <span class="infoList signUp">
                <a href="/user/info">INFO</a>
            </span> 
            <?php } else { ?> 
            <span class="infoList login">
                <a href="/user/login">LOGIN</a>
            </span>
            <span class="infoList signUp">
                <a href="/user/regist">SIGNUP</a>
            </span>
            <?php }?>


        </div>
            
        </div>
        <!--! END 로고, 검색, 장바구니, 내 정보  -->
        <!--! NavBar  -->
        <nav id="nav-1">
            <a class="link-1" href="#">홈</a>
            <a class="link-1 menuTop menuGroup" href="#">TOP</a>
            <a class="link-1 menuBottom menuGroup"  href="#">BOTTOM</a>
            <a class="link-1 menuGroup" href="#">ACC</a>
        </nav>
        <div class=" menuList">
            <a class="menuDetail" href="#">OUTER</a>
            <a class="menuDetail" href="#">SHIRTS</a>
            <a class="menuDetail" href="#">KNIT</a>
            <a class="menuDetail" href="#">OTHERS</a>
        </div>
        <div class=" menuList">
            <a class="menuDetail" href="#">PANTS</a>
            <a class="menuDetail" href="#">DENIM</a>
            <a class="menuDetail" href="#">SLACKS</a>
            <a class="menuDetail" href="#">OTHERS</a>
        </div>
        <div class=" menuList">
            <a class="menuDetail" href="#">BAG</a>
            <a class="menuDetail" href="#">SHOES</a>
            <a class="menuDetail" href="#">BELT</a>
            <a class="menuDetail" href="#">OTHERS</a>
        </div>
</header>


    



    