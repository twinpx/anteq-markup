<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
<link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">

<script>
  $( '.fotorama-catalog-multicard' ).fotorama();
</script>

<style>
  .order-production {
    background-color: #1e1e1e;
    color: #fff;
  }
  
  .order-production__title,
  .order-production__description {
    color: #fff;
  }
  
  .order-production_print .order-production__footer .btn {
    min-width: auto;
    margin: 0;
    height: 50px;
    line-height: 50px;
    padding: 0 20px;
  }
  .order-production_print .order-production__footer {
    text-align: left !important;
  }
  .order-production_print .order-production__footer .btn-type-11:hover {
    color: #fff;
  }
  
  .order-production__footer .btn:first-of-type {
    margin-right: 10px !important;
  }
  
  .btn-type-video {
    background: url( video-btn.png ) no-repeat 15px center #fff;
    padding-left: 68px !important;
    color: #000;
  }
  .btn-type-video:hover {
    color: #000;
  }
  .btn.btn-type-video:active {
    background: url( video-btn.png ) no-repeat 15px center #fff;
  }
  
  @media( max-width: 600px) {
    .order-production__footer {
      display: block;
    }
    .order-production_print .order-production__footer .btn:first-of-type {
      margin-bottom: 10px;
    }
  }
</style>

<div class="production-gray">
  <div class="container">
     <div class="order-production order-production_print">
        <div class="order-production__img" >
           <div class="order-production__more">
              <a href="/production/portfolio/complex-designs/">Посмотреть все наши работы</a>
           </div>
           <!-- Для отображения слайдера-->
           <link rel="stylesheet" href="/components/catalog.offers-list/style.css">
           <div class="fotorama-catalog-multicard " data-nav="dots" data-allowfullscreen="native" data-ratio="1" data-width="100%" data-loop="true">
              <img src="/upload/iblock/1bb/Negabaritnyy-samosbornyy-korob-tipa-_samolet_-s-lozhementom.jpg" border="0" alt="Негабаритный самосборный короб типа &amp;quot;самолет&amp;quot; с ложементом" width="1000" height="667" /><img src="/upload/iblock/5ed/Kombinirovannyy-korob-s-lozhementom.jpg" border="0" alt="Комбинированный короб с ложементом" width="1000" height="667" /><img src="/upload/iblock/bb6/Gofrokonteyner-s-razdelitelyami-dlya-stekol.jpg" border="0" alt="Гофроконтейнер с разделителями для стекол" width="1000" height="667" /><img src="/upload/iblock/8db/Gofrokonteyner-s-paketom-dlya-zhidkikh-gruzov.jpg" border="0" alt="Гофроконтейнер с пакетом для жидких грузов" width="1000" height="667" /><img src="/upload/iblock/a9a/Treugolnaya-korobka-krupnogabaritnaya.jpg" border="0" alt="Треугольная коробка крупногабаритная" width="1000" height="667" /><img src="/upload/iblock/297/Korobka_penal-dlya-nashikh-novogodnikh-podarkov-s-lyuversom-i-lentoy.jpg" border="0" alt="Коробка-пенал для наших новогодних подарков с люверсом и лентой" width="1000" height="667" /><img src="/upload/iblock/6ac/Korobki-dlya-futbolok-IGK.jpg" border="0" alt="Коробки для футболок IGK" width="1000" height="667" /><img src="/upload/iblock/b60/Korobki-iz-dvukhsloynogo-kartona.jpg" border="0" alt="Коробки из двухслойного картона" width="1000" height="667" /><img src="/upload/iblock/07c/Podarochnaya-korobka-s-derevyannym-zamkom-dlya-korporativnykh-podarkov-Antek.jpg" border="0" alt="Подарочная коробка с деревянным замком для корпоративных подарков Антэк" width="1000" height="667" /><img src="/upload/iblock/6b4/TSvetochnye-playm_pakety.jpg" border="0" alt="Цветочные плайм-пакеты" width="1000" height="667" />            
           </div>
        </div>
        <div class="order-production__wrap">
           <h1 class="order-production__title">Разработка упаковки</h1>
           <div class="order-production__description">
              <p>Для нас разработка упаковки&nbsp;&mdash; это нечто большее, чем просто создать оболочку для продукта. Это создание совершенной упаковки, которая решает широкий спектр задач. Для нас важно чтобы каждый наш продукт приносил максимальную пользу, был удобным и&nbsp;эстетичным, чтобы в&nbsp;нем не&nbsp;было ни&nbsp;одной лишней детали и&nbsp;весь его конструктив был полностью обоснован.</p>
              <p><b>Что конкретно мы&nbsp;делаем?</b></p>
              <ul class="marker-red-square marker-red-square_big">
                 <li>Адаптируем базовые конструкции под ваш продукт</li>
                 <li>Создаем уникальные продуманные конструкции</li>
                 <li>Разрабатываем и&nbsp;изготавливаем упаковку из&nbsp;гофрокартона с&nbsp;интеграцией других материалов, таких как дерево, фанера, металл, пластик, текстиль, кожзам и&nbsp;тд.</li>
                 <li>Изготавливаем прототип для испытания его в&nbsp;реальных условиях</li>
                 <li>Создаем экономически и&nbsp;эксплуатационно обоснованные упаковочные конструкции</li>
              </ul>
           </div>
           <div class="order-production__footer">
            <a class="btn btn-type-11 callback-show" data-teasername="PRODUCTION-DEVELOPMENT-SARTSCREEN" href="#">Заказать бесплатный расчет</a>
            <a class="btn btn-type-video video-show" href="#">Посмотреть видеоролик</a>
           </div>
        </div>
     </div>
  </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>