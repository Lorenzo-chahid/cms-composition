<?php get_header();
$blog = get_field('blog_single');
$dateBlog = the_date('d.F.Y', '<h2>', '</h2>', false);
$media = get_field('media');
if( $blog ): ?>
<div class="container-fluid blog">
    <div class="row justify-content-center text-white" id="blackBg">
        <div class="col-lg-5 col-s12">
        <span>
            <a class="text-white" href="<?php echo esc_url( $blog['lien_retour']['url'] ); ?>">  
        </span>
        <img class="img-fluid color icon"  src="<?php echo esc_url( $blog['icon']['url'] ); ?>" alt="">
        <?php echo esc_html( $blog['lien_retour']['title'] ); ?></a>
        <span><?php echo $dateBlog; ?></span>
        <h3><?php echo esc_html( $blog['title_blog']); ?></h3>
        <img class="img-fluid img" src="<?php echo esc_url( $blog['img_top']['url'] ); ?>" alt="">
        </div>
    </div>
    <div class="row hidden"></div>
    <div class="row justify-content-center">
        <div class="col-lg-5 col-s10">
        <h3><?php echo esc_html( $blog['title_article']); ?></h3>
        <p><?php echo esc_html( $blog['article_first_paragraphe']); ?></p>
        <img class="img-fluid img" src="<?php echo esc_url( $blog['img_middle']['url'] ); ?>" alt="">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-5 col-s10">
        <h4><?php echo esc_html( $blog['subtitle']); ?></h4>
        <p><?php echo esc_html( $blog['article_second_paragraphe']); ?></p>
        </div>
    </div>
    <div class="row justify-content-center col-s12">
        <div class="col-lg-5">
        <a href="<?php echo esc_url( $blog['link_autresarticles_']['url'] ); ?>">
        <img class="icon" src="<?php echo esc_url( $blog['icon']['url'] ); ?>" alt="">
        <?php echo esc_html( $blog['link_autresarticles_']['title'] ); ?></a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-1" id="media">
            <p>
                <img class="rounded-circle img-thumbnail" src="<?php echo esc_url( $media['facebook']['url'] ); ?>" alt="">
            </p>
            <p>
                <img class="rounded-circle img-thumbnail" src="<?php echo esc_url( $media['linkedin']['url'] ); ?>" alt="">
            </p>
            <p>
                <img class="rounded-circle img-thumbnail" src="<?php echo esc_url( $media['e-mail']['url'] ); ?>" alt="">
            </p>
        </div>
    </div>
</div>

<?php endif; ?>
