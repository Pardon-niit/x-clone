<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | X</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/components.css">
</head>

<body>
    <div class="main-container">
        <?php
        session_start();
        include "./components/header.php";
        ?>
        <main class="main">
            <aside class="left-side">
                <?php include "./components/sidenav.php"?>
            </aside>
            <div class="content-container">
                <section class="posts">
                    <section class="new-post"></section>
                    <div class="post">
                        <a href="">
                            <figure class="dp"><img src="./assets/image/user-icon-placeholder-1.png" alt=""></figure>
                        </a>
                        <div class="p-body">
                            <div class="post-top">
                                <div class="l-top">
                                    <a href="">
                                        <h3>John</h3>
                                    </a>
                                    <a href="">
                                        <p>@johndoe</p>
                                    </a>
                                    <span> &bull; 10h</span>
                                </div>
                                <div class="r-top">
                                    <i class="fa-solid fa-ellipsis"></i>
                                </div>
                            </div>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non, ipsam tempora, excepturi illo beatae quae sapiente voluptas aspernatur in ex dolor qui minima quam dignissimos esse. Eveniet magni eligendi impedit.</p>
                            </div>
                            <div class="reaction">
                                <div>
                                    <i class="bi bi-chat"></i>
                                    <span>13</span>
                                </div>
                                <div>
                                    <i class="fa-solid fa-retweet"></i>
                                    <span>5</span>
                                </div>
                                <div>
                                    <i class="fa-regular fa-heart"></i>
                                    <span>27</span>
                                </div>
                                <div>
                                    <i class="fa-solid fa-chart-simple"></i>
                                    <span>2.5k</span>
                                </div>
                                <div>
                                    <i class="fa-regular fa-bookmark"></i>
                                    <i class="fa-solid fa-arrow-up-from-bracket"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post">
                        <a href="">
                            <figure class="dp"><img src="./assets/image/user-icon-placeholder-1.png" alt=""></figure>
                        </a>
                        <div class="p-body">
                            <div class="post-top">
                                <div class="l-top">
                                    <a href="">
                                        <h3>John</h3>
                                    </a>
                                    <a href="">
                                        <p>@johndoe</p>
                                    </a>
                                    <span>&bull; 10h</span>
                                </div>
                                <div class="r-top">
                                    <i class="fa-solid fa-ellipsis"></i>
                                </div>
                            </div>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non, ipsam tempora, excepturi illo beatae quae sapiente voluptas aspernatur in ex dolor qui minima quam dignissimos esse. Eveniet magni eligendi impedit.</p>
                            </div>

                            <div class="reaction">
                                <div>
                                    <i class="bi bi-chat"></i>
                                    <span>13</span>
                                </div>
                                <div>
                                    <i class="fa-solid fa-retweet"></i>
                                    <span>5</span>
                                </div>
                                <div>
                                    <i class="fa-regular fa-heart"></i>
                                    <span>27</span>
                                </div>
                                <div>
                                    <i class="fa-solid fa-chart-simple"></i>
                                    <span>2.5k</span>
                                </div>
                                <div>
                                    <i class="fa-regular fa-bookmark"></i>
                                    <i class="fa-solid fa-arrow-up-from-bracket"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <aside class="right-side">
                    <section class="rs search">
                        <fieldset>
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <input type="search" placeholder="Search">
                        </fieldset>
                    </section>
                    <section class="rs subscribe">
                        <h2>Subscribe to Premium</h2>
                        <p>Subscribe to unlock new features and if eligible, receive a share of ads revenue.</p>
                        <button>Subscribe</button>
                    </section>
                    <section class="rs trends">
                        <h3 class="trm">Trends for you</h3>
                        <!-- trm - trend margin -->
                        <!-- tr - trend -->
                        <div class="trm tr">
                            <div>
                                <p>Sports <span>&bull; Trending</span></p>
                                <h3>Arsenal</h3>
                                <p>23.5m</p>
                            </div>
                            <div>
                                <i class="fa-solid fa-ellipsis  tr-more"></i>
                            </div>
                        </div>
                        <div class="trm tr">
                            <div>
                                <p>Trending in Nigeria</p>
                                <h3>Bobrisky</h3>
                                <p>23.5k</p>
                            </div>
                            <div>
                                <i class="fa-solid fa-ellipsis tr-more"></i>
                            </div>
                        </div>
                    </section>
                    <section class="rs ss-follow">
                        <h3>Who to follow</h3>
                        <div></div>
                    </section>
                    <footer class="footer">
                        <p>
                            <a href="">Terms of Service</a>
                            <a href=""> Privacy Policy</a>
                            <a href="">Cookie Policy</a>
                            <a href="">Accessibility</a>
                            <a href="">Ads info</a>
                            <a href="">More</a>

                            <span>&copy; 2024 X Corp.</span>
                        </p>
                    </footer>
                </aside>
            </div>
        </main>
        <!-- <?php
                include "./components/footer.php";
                ?> -->
    </div>
</body>

</html>