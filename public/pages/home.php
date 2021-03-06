<!DOCTYPE html>
<html>
    <head>
        <title>Šlechtická Soukroma Škola</title>
        <link rel="stylesheet" href="main.css">
        <link rel="icon" href="icon/logo.png">
    </head>
    <body>
        <?php include("./parts/header.php") ?>
        <main>
            <section class="offer">
                <a>
                    <img src="podnikani.svg">
                </a>
                <a>
                    <img class="main" src="oa.svg">
                    <img class="sec" src="oa-bg.svg">
                </a>
                <a>
                    <img class="main" src="predmimo.svg">
                    <img class="sec" src="predmimo-bg.svg">
                </a>
                <a>
                    <img src="komenik.svg">
                </a>
                <a>
                    <img class="main" src="gympl.svg">
                    <img class="sec" src="gympl-bg.svg">
                </a>
            </section>
            <section class="wellcome">
                <h1>Výtejte u nás</h1>
                <p>
                    Výtejte na strankách Šlechtické Soukromé školy, která má skvělíma spolužaky a <a class="normal" href="/teachers">dobré učitele</a>, kteří se rádi věnují svým žákům.
                </p>
                <p>Pojďte se s námi rozvíjet nejen v učení ale i ve skušenostech.</p>
                <p>Naše škola nabízí nejen denní ale také dálkové studium.</p>
                <p>S námi vás škola bude bavit</p>
            </section>
            <section class="shower">
                <article class="buttons">
                    <button value=0 id="btn0" onclick="show(this)">O nás</button>
                    <button value=1 id="btn1" onclick="show(this)">Příjmací řízení</button>
                    <button value=2 id="btn2" onclick="show(this)">Školné</button>
                    <button value=3 id="btn3" onclick="show(this)">Přihlaška</button>
                </article>
                <article class="text">
                    <div id="showerIt"></div>
                </article>
            </section>
        </main>
        <footer>
            <p>© Stránka je licencovaná společnosti Šlechta a.s. pod licencí <strong class="black">GPL</strong></p>
        </footer>
        <script>
            let content = [
                '<h1>O škole</h1> <p> něco o škole </p>',
                '<h1>Příjmací řízení</h1> <p class="subtitle">Minimální hranice 50 bodů</p> <ul> <li><span class="subtitle">[50 bodů]</span> Vysvědčení 8-9 ročník ZŠ </li> <li><span class="subtitle">[30 bodů]</span> Zájem o <a href="/obory" class="normal">obor</a> dle výběru </li> <li><span class="subtitle">[20 bodů]</span> Účast v soutěžích </li> </ul> <a href="/prijmacky">Přečíst si více</a>',
                '<h1>Školné</h1> <p>Školné lze platit</p> <ul> <li>měsične [2 000 kč]</li> <li>půlročně [12 000 kč]</li> <li>ročně [20 000]</li> </ul> <a class="subtitle">Lze získat<a class="normal" href="/stipendium">prospěchové stipendium</a>',
                '<h1>Přihlašky</h1><ul> <li><a href="/prihlaska/denni.xlxs">Denní studium</a></li> <li><a href="/prihlaska/dalkove.xlxs">Dálkové studium</a></li> <li><a href="/prihlaska/nastavba.xlxs">Nástavba</a></li> <li><a href="/prihlaska/vzor.pdf">Vzor pro střední školu</a></li> <li><a href="/prihlaska/lic.odt">Studium na Lic.</a></li> <li><a href="/prihlaska/mgr.odt">Studium na Mgr.</a></li> </ul>'
            ];
            let last;
            change(0);
            function show(e) {
                document.getElementById("btn"+last).classList.remove("clicked");
                change(e.value);
            }
            function change(id) {
                document.getElementById("showerIt").innerHTML = content[id];
                document.getElementById("btn"+id).classList.add("clicked");
                last = id;
            }
        </script>
    </body>
</html>
