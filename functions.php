<?php 

function debagovanje($parametar) {
    echo "<pre>";
    print_r($parametar);
    echo "</pre>";
}

function ispisi_ime_sajta() {
    global $ime_sajta;
    echo $ime_sajta;
}

function ucitaj_usluge_text_file() {
    return file_get_contents('baza/usluge.txt');
}

function normalizacija_podataka($podaci) {
    $prelomi_usluge = explode('////////////', $podaci);
    //debagovanje($prelomi_usluge);
    unset($prelomi_usluge[0]);
    //debagovanje($prelomi_usluge);

    $novi_red_formatiran = [];
    foreach($prelomi_usluge as $novi_red) {
        //debagovanje($novi_red);
        $novi_red_razbijen = explode(PHP_EOL, $novi_red);
        //debagovanje($novi_red_razbijen);
        $novi_red_razbijen = array_filter($novi_red_razbijen);
        //debagovanje($novi_red_razbijen);
        // debagovanje(normalizacija_redova($novi_red_razbijen[1]));
        // debagovanje(normalizacija_redova($novi_red_razbijen[2]));
        // debagovanje(normalizacija_redova($novi_red_razbijen[3]));
        // debagovanje(normalizacija_redova($novi_red_razbijen[4]));
        // debagovanje($novi_red_razbijen);
        $usluge_id = normalizacija_redova($novi_red_razbijen[1]);
        $usluge_slika = normalizacija_redova($novi_red_razbijen[2]);
        $usluge_naslov = normalizacija_redova($novi_red_razbijen[3]);
        $usluge_tekst = normalizacija_redova($novi_red_razbijen[4]);
        // debagovanje($usluge_id);
        // debagovanje($usluge_slika);
        // debagovanje($usluge_naslov);
        // debagovanje($usluge_tekst);
        $red_podaci = [
            'id' => $usluge_id,
            'slika' => $usluge_slika,
            'naslov' => $usluge_naslov,
            'text' => $usluge_tekst
        ];
        //debagovanje($red_podaci);
        $novi_red_formatiran[] = $red_podaci;
    }
    //debagovanje($novi_red_formatiran);
    return $novi_red_formatiran;
}

function normalizacija_redova($podaci_red) {
    $normalizuj_podatke = ['ID:', 'Slika:', 'Naslov:', 'Tekst:'];
    $red = str_replace($normalizuj_podatke, "", $podaci_red);
    $red = trim($red);
    return $red;
}

function izlistaj_sve_usluge() {
    $usluge_podaci = ucitaj_usluge_text_file();
    $usluge_podaci = normalizacija_podataka($usluge_podaci);
    //debagovanje($usluge_podaci);
    return $usluge_podaci;
}