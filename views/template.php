<!DOCTYPE html>
<html class="<?= $params['html_class'] ?>" lang="<?= $intl->getLocaleTag() ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= $view->render('head') ?>
        <?php $view->style('theme', $params['style'] ? 'theme:css/styles/'.$params['style'].'/theme.css' : 'theme:css/theme.css') ?>
        <?php $view->script('theme', 'theme:js/theme.js', ['uikit-sticky',  'uikit-lightbox',  'uikit-parallax']) ?>
        <?php $view->script('particles', 'theme:js/particles.min.js') ?>
        <?php $view->script('particles-jquery', 'theme:js/particles.jquery.js') ?>
    </head>
    <body>

    <?php if (($params['header_layout'] == 'alt') && ($params['logo'] || $view->menu()->exists('main') || $view->position()->exists('navbar'))) : ?>
        <?= $view->position('navbar', 'header-alt.php') ?>
    <?php endif ?>

    <div class="uk-container uk-container-center">

        <?php if (($params['header_layout'] == 'default') && ($params['logo'] || $view->menu()->exists('main') || $view->position()->exists('navbar'))) : ?>
            <?= $view->position('navbar', 'header-default.php') ?>
        <?php endif ?>

        <?php if ($view->position()->exists('top')) : ?>
        <div id="tm-top" class="tm-top">

            <section class="uk-grid uk-grid-match<?= $params['top_gutter'] ? ' uk-grid-collapse' : '' ; ?>" data-uk-grid-margin>
                <?= $view->position('top', 'position-grid.php') ?>
            </section>

        </div>
        <?php endif; ?>

        <?php if ($view->position()->exists('top_b')) : ?>
        <div id="tm-top-b" class="tm-top-b">

            <section class="uk-grid uk-grid-match<?= $params['top_b_gutter'] ? ' uk-grid-collapse' : '' ; ?>" data-uk-grid-margin>
                <?= $view->position('top_b', 'position-grid.php') ?>
            </section>

        </div>
        <?php endif; ?>

        <?php if ($view->position()->exists('top_c')) : ?>
        <div id="tm-top-c" class="tm-top-c">

            <section class="uk-grid uk-grid-match<?= $params['top_c_gutter'] ? ' uk-grid-collapse' : '' ; ?>" data-uk-grid-margin>
                <?= $view->position('top_c', 'position-grid.php') ?>
            </section>

        </div>
        <?php endif; ?>

        <?php if ($view->position()->exists('top_d')) : ?>
        <div id="tm-top-d" class="tm-top-d">

            <section class="uk-grid uk-grid-match<?= $params['top_d_gutter'] ? ' uk-grid-collapse' : '' ; ?>" data-uk-grid-margin>
                <?= $view->position('top_d', 'position-grid.php') ?>
            </section>

        </div>
        <?php endif; ?>

        <div id="tm-main" class="tm-main uk-grid data-uk-grid-match data-uk-grid-margin">

<!--             <div class="uk-grid" data-uk-grid-match data-uk-grid-margin> -->

                <main class="<?= $view->position()->exists('sidebar') ? 'uk-width-medium-3-4' : 'uk-width-1-1'; ?>">
                    <?= $view->render('content') ?>
                </main>

                <?php if ($view->position()->exists('sidebar')) : ?>
                <aside class="uk-width-medium-1-4 <?= $params['sidebar_first'] ? 'uk-flex-order-first-medium' : ''; ?>">
                    <?= $view->position('sidebar', 'position-panel.php') ?>
                </aside>
                <?php endif ?>

            <!-- </div> -->

        </div>

        <?php if ($view->position()->exists('bottom')) : ?>
        <div id="tm-bottom" class="tm-bottom">

            <section class="uk-grid uk-grid-match<?= $params['bottom_gutter'] ? ' uk-grid-collapse' : '' ; ?>" data-uk-grid-margin>
                <?= $view->position('bottom', 'position-grid.php') ?>
            </section>

        </div>
        <?php endif; ?>

        <?php if ($view->position()->exists('bottom_b')) : ?>
        <div id="tm-bottom-b" class="tm-bottom-b">

            <section class="uk-grid uk-grid-match<?= $params['bottom_b_gutter'] ? ' uk-grid-collapse' : '' ; ?>" data-uk-grid-margin>
                <?= $view->position('bottom_b', 'position-grid.php') ?>
            </section>

        </div>
        <?php endif; ?>

        <?php if ($view->position()->exists('bottom_c')) : ?>
        <div id="tm-bottom-c" class="tm-bottom-c">

            <section class="uk-grid uk-grid-match<?= $params['bottom_c_gutter'] ? ' uk-grid-collapse' : '' ; ?>" data-uk-grid-margin>
                <?= $view->position('bottom_c', 'position-grid.php') ?>
            </section>

        </div>
        <?php endif; ?>

        <?php if ($view->position()->exists('bottom_d')) : ?>
        <div id="tm-bottom-d" class="tm-bottom-d">

            <section class="uk-grid uk-grid-match<?= $params['bottom_d_gutter'] ? ' uk-grid-collapse' : '' ; ?>" data-uk-grid-margin>
                <?= $view->position('bottom_d', 'position-grid.php') ?>
            </section>

        </div>
        <?php endif; ?>

        <?php if ($view->position()->exists('footer')) : ?>
        <div id="tm-footer" class="tm-footer<?= $params['footer_margin'] ? ' tm-footer-margin-top' : '' ; ?>">

            <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                <?= $view->position('footer', 'position-grid.php') ?>
            </section>

        </div>
        <?php endif; ?>

    </div>

        <?php if ($view->position()->exists('offcanvas') || $view->menu()->exists('offcanvas')) : ?>
        <div id="offcanvas" class="uk-offcanvas">
            <div class="uk-offcanvas-bar uk-offcanvas-bar-flip">

                <?php if ($params['logo_offcanvas']) : ?>
                <div class="uk-panel uk-text-center">
                    <a href="<?= $view->url()->get() ?>">
                        <img src="<?= $this->escape($params['logo_offcanvas']) ?>" alt="">
                    </a>
                </div>
                <?php endif ?>

                <?php if ($view->menu()->exists('offcanvas')) : ?>
                    <?= $view->menu('offcanvas', ['class' => 'uk-nav-offcanvas']) ?>
                <?php endif ?>

                <?php if ($view->position()->exists('offcanvas')) : ?>
                    <?= $view->position('offcanvas', 'position-panel.php') ?>
                <?php endif ?>

            </div>
        </div>
        <?php endif ?>

        <?= $view->render('footer') ?>

    </body>
</html>
