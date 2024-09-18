<?php include 'template_parts/header.php'; ?>

    <!-- heades -->
    <header class="blogHeader position-relative">
        <img class="w-100" src="img/header-kontakt.jpg" alt="">
        <h1 class="position-absolute top-50 start-50 display-1 text-white py-3 px-5 translate-middle">Kontakt</h1>
    </header>

    <!-- forma -->
    <form class="mt-5 p-5 container position-relative">
        <div class="mb-3">
            <label class="text-white mb-2">Ime i prezime</label>
            <input class="form-control rounded-0" type="text">
        </div>
        <div class="mb-3">
            <label class="text-white mb-2">Email adresa</label>
            <input class="form-control rounded-0" type="email">
        </div>
        <div class="mb-3"></div>
            <label class="text-white mb-2">Poruka</label>
            <textarea class="form-control rounded-0"></textarea>
        </div>
        <button class="btn btn-dark mt-4">Posaljite poruku</button>
    </form>

<?php include 'template_parts/footer.php'; ?>