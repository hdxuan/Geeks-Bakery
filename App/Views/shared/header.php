<div class="wrapper">
    <div class="container">
        <header class="header">
            <a href="<?= DOCUMENT_ROOT ?>" class="header__logo">
                <img src="<?= IMAGES_URL ?>/logo.png" alt="logo">
            </a>

            <nav class="header__menu noselect">
                <a href="<?= DOCUMENT_ROOT ?>" class="header__menu__item">Home</a>
                <a href="<?= DOCUMENT_ROOT ?>/Cakes" class="header__menu__item">Cakes</a>
                <a href="https://github.com/hdxuan" target="_blank" class="header__menu__item">About</a>
            </nav>

            <div class="header__search">
                <button class="header__search__button noselect">
                    <img src="<?= ICONS_URL ?>/search.png" alt="icon search">
                </button>

                <form action="<?= DOCUMENT_ROOT ?>/Cakes/searchKey" method="GET">
                    <input type="text" name="keyword" placeholder="Search.....">
                </form>
            </div>

            <div class="header__info">
                <div class="header__cart noselect">
                    <a href="<?= DOCUMENT_ROOT . "/Cart" ?>"><img src="<?= ICONS_URL ?>/cart.svg" alt="icon cart"></a>
                    <span id="numInCartID" class="header__cart__amount">0</span>
                </div>

                <?php if (isset($_SESSION['user'])) : ?>
                    <div class="header__user noselect">
                        <div class="header__user__avatar ">
                            <img src="<?= PUBLIC_URL .  "/uploads/avatar/" . (empty($_SESSION['user']['avatar']) ? "default_avatar.png" : $_SESSION['user']['avatar'])  ?>" alt="user avatar">
                            <div class="header__user__dropdown ">
                                <ul>
                                    <li><a href="<?= DOCUMENT_ROOT . "/Profile" ?>">Profile</a></li>
                                    <li><a href="<?= DOCUMENT_ROOT . "/Cart" ?>">Cart</a></li>
                                    <li><a href="<?= DOCUMENT_ROOT . "/Account/logOut" ?>">Sign out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <a href="<?= DOCUMENT_ROOT ?>/account"><button class="btn btn--primary">Login</button></a>

                <?php endif; ?>


                <label for="nav-mobile__button">
                    <img class="nav-mobile__icon" src="<?= ICONS_URL ?>/menu-mobile.svg" alt="menu bar" />
                </label>

            </div>
        </header>

        <input hidden type="checkbox" name="nav" class="nav-mobile__button" id="nav-mobile__button" />

        <label for="nav-mobile__button" class="overlay"> </label>
        <nav class="nav-mobile noselect">
            <label for="nav-mobile__button" class="nav-mobile__close">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="92.132px" height="92.132px" viewBox="0 0 92.132 92.132" style="enable-background: new 0 0 92.132 92.132" xml:space="preserve">
                    <g>
                        <g>
                            <path fill="#f3455a" d="M2.141,89.13c1.425,1.429,3.299,2.142,5.167,2.142c1.869,0,3.742-0.713,5.167-2.142l33.591-33.592L79.657,89.13
    c1.426,1.429,3.299,2.142,5.167,2.142c1.867,0,3.74-0.713,5.167-2.142c2.854-2.854,2.854-7.48,0-10.334L56.398,45.205
    l31.869-31.869c2.855-2.853,2.855-7.481,0-10.334c-2.853-2.855-7.479-2.855-10.334,0L46.065,34.87L14.198,3.001
    c-2.854-2.855-7.481-2.855-10.333,0c-2.855,2.853-2.855,7.481,0,10.334l31.868,31.869L2.143,78.795
    C-0.714,81.648-0.714,86.274,2.141,89.13z" />
                        </g>
                    </g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                </svg>
            </label>

            <nav class="nav-mobile__items">
                <ul>
                    <li class="nav-mobile__link"><a href="<?= DOCUMENT_ROOT ?>">Home</a></li>
                    <li class="nav-mobile__link"><a href="<?= DOCUMENT_ROOT . DS ?>Cakes">Cakes</a></li>
                    <li class=" nav-mobile__link"><a href="https://github.com/hdxuan" target="_blank">About</a></li>
                    <li class="nav-mobile__link"><a href="#\">Profile</a></li>
                    <li class="nav-mobile__link"><a href="#\">Cart</a></li>
                    <li class="nav-mobile__link"><a href="#\">Sign out</a></li>
                </ul>
            </nav>
        </nav>
    </div>
</div>