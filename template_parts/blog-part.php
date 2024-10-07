<?php 
//debagovanje(ocitaj_blog_text_fajl());
//normalizacija_blog_podataka(ocitaj_blog_text_fajl());
$blog_postovi = izlistaj_sve_blogove();
//debagovanje($blog_postovi);
?>

<!-- blog -->
<main class="container">
    <div class="row">
        <section class="col-md-8">

        <?php foreach($blog_postovi as $post) : ?>
            <article>
                <div class="featured-image">
                    <img class="w-100" src="<?php echo $post['slika']; ?>" alt="<?php echo $post['naslov']; ?>">
                </div>
                <div class="text position-relative p-5 text-white">
                    <h3><?php echo $post['naslov']; ?></h3>
                    <span class="bg-dark text-white d-inline-block py-1 px-3 mb-3"><?php echo $post['datum']; ?> | <?php echo $post['admin']; ?></span>
                    <p><?php echo $post['tekst']; ?></p>
                    <a href="" class="btn btn-light">Ceo tekst</a>
                </div>
            </article>
        <?php endforeach; ?>
            
        </section>
        <aside class="col-md-4">
            <?php include 'template_parts/sidebar.php'; ?>
        </aside>
    </div>
</main>