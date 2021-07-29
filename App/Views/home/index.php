<!-- wrapper banner -->
<div class="container-fluid banner">
    <img src="<?= IMAGES_URL ?>/banner.png" alt="Banner">
</div>
<!-- end wrapper banner -->

<!-- wrapper category -->
<div class="wrapper">
    <section class="container category">
        <h3 class="title">Experience Flavours</h3>
        <ul class="category__items noselect">
            <?php foreach ($data['categories'] as $index => $category) : ?>
                <a href="#\">
                    <li class="category__item">
                        <!-- strtolower: in thuong cac chu|| str_replace: thay the, tu search  -->
                        <img class="category__item-image" src="<?= IMAGES_CATEGORY_URL ?>/<?= strtolower(str_replace(' ', '', $category['name'])) ?>.jfif" alt="category image">
                        <div class="category__item-name"><?= $category['name'] ?></div>
                        <div class="category__item-description"><?= $category['description'] ?></div>
                    </li>
                </a>
            <?php endforeach; ?>
        </ul>
    </section>
</div>
<!-- end wrapper category -->

<!--  wrapper best seller -->
<section class="container-fluid best-seller-background">
    <div class="wrapper">

        <section class="container best-seller noselect">
            <!-- left arrow svg -->
            <svg class="best-seller__previous-arrow paging-arrow" width="34" height="35" viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="17" cy="17.9402" r="16.5" transform="rotate(-180 17 17.9402)" stroke="#848484" />
                <path d="M12.2387 16.935L18.8388 11.1495C19.1571 10.8704 19.6732 10.8704 19.9915 11.1495L20.7613 11.8242C21.079 12.1028 21.0797 12.5543 20.7626 12.8335L15.5319 17.4402L20.7626 22.0469C21.0797 22.3261 21.079 22.7776 20.7613 23.0561L19.9915 23.7309C19.6732 24.0099 19.1571 24.0099 18.8388 23.7309L12.2387 17.9454C11.9204 17.6664 11.9204 17.214 12.2387 16.935Z" fill="#848484" />
            </svg>
            <!-- end left arrow svg -->
            <!-- right arrow svg -->
            <svg class="best-seller__next-arrow paging-arrow" width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="17" cy="17" r="16.5" stroke="#848484" />
                <path d="M21.7613 18.0052L15.1612 23.7907C14.8429 24.0698 14.3268 24.0698 14.0085 23.7907L13.2387 23.1159C12.921 22.8374 12.9203 22.3859 13.2374 22.1067L18.4681 17.5L13.2374 12.8933C12.9203 12.6141 12.921 12.1626 13.2387 11.8841L14.0085 11.2093C14.3268 10.9302 14.8429 10.9302 15.1612 11.2093L21.7613 16.9948C22.0796 17.2738 22.0796 17.7262 21.7613 18.0052Z" fill="#848484" />
            </svg>
            <!-- end right arrow svg -->

            <h3 class="title">Best Seller</h3>
            <div class="slider">
                <?php foreach ($data['bestSellers'] as $index => $cake) : ?>
                    <div class="best-seller__item slider__item">
                        <img class="best-seller__item-image" src="<?= IMAGES_CAKES_URL ?>/<?= $cake['image'] ?>" alt="cake image">
                        <div class="best-seller__item-info">
                            <div>
                                <h6 class="best-seller__item-info__name"><?= $cake['name'] ?></h6>
                                <p class="best-seller__item-info__description line-clamp-5">
                                    <?= $cake['description'] ?>
                                </p>
                            </div>
                            <div>
                                <div class="best-seller__item-info__price"><?= number_format($cake['price'], 0, '', '.') ?>đ</div>
                                <div class="best-seller__item-info__original-price">
                                    <?= number_format($cake['price'], 0, '', '.') ?>đ
                                </div>
                            </div>
                            <button class="btn btn--primary">Add to cart +</button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <ul class="paging"></ul>
        </section>
    </div>
</section>
<!-- end wrapper best seller -->

<!-- wrapper sweeties -->
<div class="wrapper noselect">
    <div class="container sweeties">
        <h3 class="title">Sweeties</h3>

        <div class="sweeties__items">
            <?php foreach ($data['paging'] as $index => $paging) : ?>
                <div class="sweeties__item">
                    <img src="<?= IMAGES_CAKES_URL ?>/<?= $paging['image'] ?>" alt="sweeties image" class="sweeties__item-image">
                    <div class="sweeties__item-name">
                        <a href="#\"><?= $paging['name'] ?></a>
                    </div>
                    <div class="sweeties__item-prices">
                        <div class="sweeties__item__price"><?= number_format($paging['price'], 0, '', '.') ?>đ</div>
                        <div class="sweeties__item__original-price"><?= number_format($paging['price'], 0, '', '.') ?>đ</div>
                    </div>
                    <button class="btn btn--secondary">Add to cart +</button>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="paging-numbers">
            <!-- left arrow svg -->
            <svg class="paging-number-left-arrow paging-arrow" width="34" height="35" viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="17" cy="17.9402" r="16.5" transform="rotate(-180 17 17.9402)" stroke="#848484" />
                <path d="M12.2387 16.935L18.8388 11.1495C19.1571 10.8704 19.6732 10.8704 19.9915 11.1495L20.7613 11.8242C21.079 12.1028 21.0797 12.5543 20.7626 12.8335L15.5319 17.4402L20.7626 22.0469C21.0797 22.3261 21.079 22.7776 20.7613 23.0561L19.9915 23.7309C19.6732 24.0099 19.1571 24.0099 18.8388 23.7309L12.2387 17.9454C11.9204 17.6664 11.9204 17.214 12.2387 16.935Z" fill="#848484" />
            </svg>
            <!-- end left arrow svg -->
            <?php for ($i = 1; $i <= $data['pages']; $i++) : ?>

                <a href="<?= DOCUMENT_ROOT . "/home/index" ?>?page=<?= $i ?>">
                    <div class="paging-number   "><?= $i ?></div>
                    <!-- paging-number--active để này dô khi check page -->
                </a>

            <?php endfor; ?>

            <!-- right arrow svg -->
            <svg class="paging-number-right-arrow paging-arrow" width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="17" cy="17" r="16.5" stroke="#848484" />
                <path d="M21.7613 18.0052L15.1612 23.7907C14.8429 24.0698 14.3268 24.0698 14.0085 23.7907L13.2387 23.1159C12.921 22.8374 12.9203 22.3859 13.2374 22.1067L18.4681 17.5L13.2374 12.8933C12.9203 12.6141 12.921 12.1626 13.2387 11.8841L14.0085 11.2093C14.3268 10.9302 14.8429 10.9302 15.1612 11.2093L21.7613 16.9948C22.0796 17.2738 22.0796 17.7262 21.7613 18.0052Z" fill="#848484" />
            </svg>
            <!-- end right arrow svg -->
        </div>
    </div>
</div>
<!-- end wrapper sweeties -->