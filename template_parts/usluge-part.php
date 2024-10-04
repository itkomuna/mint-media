<?php 
// echo ucitaj_usluge_text_file();
//normalizacija_podataka(ucitaj_usluge_text_file());
//izlistaj_sve_usluge();
$sve_usluge = izlistaj_sve_usluge();
?>

<!-- usluge -->
<section class="usluge container py-5">
    <h2 class="text-center display-3">Usluge</h2>
    <div class="row">

    <?php foreach($sve_usluge as $usluga) : ?>
        <article class="col-md-4">
            <div class="card">
                <img src="<?php echo $usluga['slika']; ?>" class="card-img-top" alt="<?php echo $usluga['naslov']; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $usluga['naslov']; ?></h5>
                    <p class="card-text"><?php echo $usluga['text']; ?></p>
                    <a href="#" class="btn btn-primary">Procit vise</a>
                </div>
            </div>
        </article>
    <?php endforeach; ?>    
        
    </div>
</section>