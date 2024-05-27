< <!--Pjesa e Header-->
    <header class="header_area">
        <div class="header-top">
            <div class="container">
                <div class="d-flex align-items-center">
                    <div id="logo">
                        <a href="index.php"><img src="../../img/logo1.png" style="height: 50px;" alt="Logo" /></a>
                    </div>
                    <div class="ml-auto d-none d-md-block d-md-flex">
                        <!--Language-->
                        <div class="language-selection">
                            <form action="../..//save_language.php" method="POST">
                                <label for="language">Zgjedh gjuhën:</label>
                                <select name="language" id="language">
                                    <option value="al" <?php echo $language == 'al' ? 'selected' : ''; ?>>Shqip</option>
                                    <option value="en" <?php echo $language == 'en' ? 'selected' : ''; ?>>English</option>
                                    <option value="fr" <?php echo $language == 'fr' ? 'selected' : ''; ?>>Français</option>
                                </select>
                                <button type="submit">Ruaj</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav">
                            <?php if ($language === "fr") : ?>
                                <li class="nav-item <?php if ($currentPage === 'index.php') echo 'active'; ?>"><a class="nav-link" href="index.php">Accueil</a></li>
                                <li class="nav-item <?php if ($currentPage === 'blog.php') echo 'active'; ?>"><a class="nav-link" href="blog.php">Blogue</a></li>
                                <li class="nav-item <?php if ($currentPage === 'rreth-nesh.php') echo 'active'; ?>"><a class="nav-link" href="rreth-nesh.php">À propos de nous</a></li>
                                <li class="nav-item <?php if ($currentPage === 'kontakt.php') echo 'active'; ?>"><a class="nav-link" href="kontakt.php">Contact</a></li>
                                <li class="nav-item <?php if ($currentPage === 'tregimet.php') echo 'active'; ?>"><a class="nav-link" href="tregimet.php">Histoires</a></li>
                            <?php elseif ($language === "al") : ?>
                                <li class="nav-item <?php if ($currentPage === 'index.php') echo 'active'; ?>"><a class="nav-link" href="index.php">Ballina</a></li>
                                <li class="nav-item <?php if ($currentPage === 'blog.php') echo 'active'; ?>"><a class="nav-link" href="blog.php">Blogu</a></li>
                                <li class="nav-item <?php if ($currentPage === 'rreth-nesh.php') echo 'active'; ?>"><a class="nav-link" href="rreth-nesh.php">Rreth nesh</a></li>
                                <li class="nav-item <?php if ($currentPage === 'kontakt.php') echo 'active'; ?>"><a class="nav-link" href="kontakt.php">Kontakti</a></li>
                                <li class="nav-item <?php if ($currentPage === 'tregimet.php') echo 'active'; ?>"><a class="nav-link" href="tregimet.php">Tregime</a></li>
                            <?php else : ?>
                                <li class="nav-item <?php if ($currentPage === 'index.php') echo 'active'; ?>"><a class="nav-link" href="index.php">Home</a></li>
                                <li class="nav-item <?php if ($currentPage === 'blog.php') echo 'active'; ?>"><a class="nav-link" href="blog.php">Blog</a></li>
                                <li class="nav-item <?php if ($currentPage === 'rreth-nesh.php') echo 'active'; ?>"><a class="nav-link" href="rreth-nesh.php">About Us</a></li>
                                <li class="nav-item <?php if ($currentPage === 'kontakt.php') echo 'active'; ?>"><a class="nav-link" href="kontakt.php">Contact</a></li>
                                <li class="nav-item <?php if ($currentPage === 'tregimet.php') echo 'active'; ?>"><a class="nav-link" href="tregimet.php">Stories</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>

                    <ul class="social-icons ml-auto">
                        <li><a href="https://www.facebook.com/diellza.raqi.5"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.instagram.com/festina.mjeku/"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://twitter.com/AnesMalit"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>