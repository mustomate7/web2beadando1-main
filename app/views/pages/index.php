<?php require APPROOT . '/views/inc/header.php'; ?>
<main role="main" class="container">
    <div class="row">
        <aside class="col-md-4 blog-sidebar rounded">
            <div class="p-3 mb-3 rounded d-flex justify-content-center align-items-center">
                <img width="80%" src="<?php echo URLROOT; ?>img/image-sidebar.jpg" alt="">
            </div>

            <div class="p-3">
                <h4 class="font-italic mb-4">BestSite</h4>
                <h5>Miért válasszon minket?</h5>
                <ol class="list-unstyled">
                    <li>Legjobb ár/érték arány</li>
                    <li>Leggyorsabb munkavégzés</li>
                    <li>Olcsó</li>
                </ol>
            </div>
        </aside>

        <div class="pages-main col-md-8">
            <h1 class="text-center">A cégről</h1>
            <p class="text-justify">A BestSite egy komplex szolgáltatásokat nyújtó informatikai cég.<br>
            Működésünk motorja, hogy minden esetben az ügyfél egyedi igényeire szabott rendszer felvázolásával, kiépítésével, illetve működtetésével érjük el célunkat.<br>Legyen szó vállalati rendszerekről, kis- és középvállalkozásoknak szóló IT környezet kialakításáról.
            </p>
            <p class="text-justify">
            A működésünk egyik letéteményese, hogy megfelelő vírusvédelemmel is szolgáljunk, a hasznos céges adatokra és az azokat kezelő rendszerekre. A nagysikerű Norton biztonsági szoftvercsaládot használjuk, melynek szállítójával 2010 óra vagyunk szerződéses viszonyban.
            </p>
            <img class="d-block mx-auto mt-5 mb-5" width="50%" src="<?php echo URLROOT; ?>img/software_developer_working.jpg" alt="">
        </div>
    </div>


</main>


<?php require APPROOT . '/views/inc/footer.php'; ?>
