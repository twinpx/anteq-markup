<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>

<style>
.production-process .col-item {
  padding-top: 15px;
  padding-bottom: 15px;
}
@media (min-width: 768px) {
  .production-process {
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: flex-start;
    -webkit-justify-content: flex-start;
    justify-content: flex-start;
    -webkit-box-align: stretch;
    -webkit-align-items: stretch;
    align-items: stretch;
    -webkit-flex-wrap: nowrap;
    -moz-flex-wrap: nowrap;
    -ms-flex-wrap: nowrap;
    -o-flex-wrap: nowrap;
    flex-wrap: nowrap;
  }
  .production-process .col-item {
    margin: 0 5px;
  }
  .production-process .col-item:first-of-type {
    margin-left: 15px;
  }
  .production-process .col-item:last-of-type {
    margin-right: 15px;
  }
}
.production-process-pict {
  position: relative;
  transform-origin: top;
  margin-right: -15px;
}
.production-process-pict img,
.production-process-pict video {
  -webkit-border-radius: 5px 5px 0 0;
  -moz-border-radius: 5px 5px 0 0;
  border-radius: 5px 5px 0 0;
}
.production-process-pict:after {
  content: '';
  position: absolute;
  width: 0;
  height: 0;
  background: none;
  border-style: solid;
  border-color: transparent transparent transparent #f6f6f6;
  border-width: 25px 0 25px 15px;
  top: 50%;
  margin-top: -25px;
  left: 0;
}
.production-process-pict:before {
  content: '';
  position: absolute;
  right: 12px;
  top: -3px;
  width: 20px;
  height: 20px;
  border: 3px solid #f6f6f6;
  -webkit-border-radius: 0 9px 0 0;
  -moz-border-radius: 0 9px 0 0;
  border-radius: 0 9px 0 0;
  border-color: #f6f6f6 #f6f6f6 transparent transparent;
}
.production-process-pict video {
  width: 100%;
}
.production-process-stage {
  position: absolute;
  bottom: 38px;
  left: 66px;
  text-transform: uppercase;
  font-size: 20pt;
  font-weight: bold;
  color: #fff;
}
.production-process-play {
  position: absolute;
  top: calc(50% - 31px);
  left: calc(50% - 31px);
  width: 61px;
  height: 61px;
  border-radius: 51%;
  border: 1px solid #fff;
  background-color: rgba( 255,255,255,.5 );
  cursor: pointer;  
}
.production-process-play div {
  width: 0;
  height: 0;
  border-top: 10px solid transparent;
  border-left: 15px solid red;
  border-bottom: 10px solid transparent;
  margin: 20px 0 0 25px;
}
.production-process-angle {
  position: absolute;
  width: 15px;
  height: 100%;
  right: 0;
  top: 0;
}
.production-process-angle:after {
  content: '';
  position: absolute;
  width: 0;
  height: 50%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  background: none;
  border-style: solid;
  border-color: transparent #f6f6f6 transparent transparent;
  border-width: 25px 15px 0px 0px;
  bottom: 0;
  right: 0;
}
.production-process-angle:before {
  content: '';
  position: absolute;
  width: 0;
  height: 50%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  background: none;
  border-style: solid;
  border-color: transparent #f6f6f6 transparent transparent;
  border-width: 0px 15px 25px 0px;
  top: 0;
  right: 0;
}
.production-process-angle img {
  max-width: 100%;
}
.production-process-content {
  visibility: visible;
  padding: 23px 25px 100px;
  overflow: hidden;
}
.production-process-content:before,
.production-process-content:after {
  content: "";
  display: table;
}
.production-process-content:after {
  clear: both;
}
@media screen and (max-width: 768px) {
  .production-process-content {
    max-width: 400px;
    margin-left: auto;
    margin-right: auto;
  }
}
.production-process-desc {
  margin-left: 25px;
  margin-top: 35px;
  display: block;
}
.production-process-ins {
  height: 100%;
  background: linear-gradient(transparent 140px, #fff 140px);
}
.production-process_light {
  margin-top: 40px;
  position: relative;
  margin-bottom: 15px;
}
.production-process_light h3 {
  margin-left: 25px;
}
.production-process_light .col-item {
  padding: 0;
  margin: 0 14px;
  max-width: 33.3%;
  min-height: 100%;
}
.production-process_light .col-item:first-child .production-process-pict:after {
  display: none;
}
.production-process_light .col-item:last-child .production-process-angle {
  background: #f6f6f6;
}
@media (max-width: 990px) {
  .production-process_light .col-item:first-child {
    margin-left: 0;
  }
  .production-process_light .col-item:last-child {
    margin-right: 0;
  }
}
.production-process_light ul.marker-red-square {
  margin-left: 0;
  padding-left: 36px;
  font-size: 14px;
  margin-top: 23px;
}
.production-process_light ul.marker-red-square li {
  position: relative;
  line-height: 1.2em;
}
.production-process_light ul.marker-red-square li:before {
  position: absolute;
  left: -35px;
  top: 8px;
  font-size: 25px;
  line-height: 0;
}
.production-process_light ul.marker-red-square > li.gift:before {
  content: "";
  width: 40px;
  height: 40px;
  background: url( gift.svg ) no-repeat center;
  background-size: cover;
  top: -7px;
  left: -50px;
}
.production-process_light ul.marker-red-square li + li {
  margin-top: 20px;
}
.production-process_light .btn {
  left: 50px;
  right: 50px;
  bottom: 35px;
  display: block;
  position: absolute;
}

.b-production-video-modal .modal-dialog {
  width: 60%;
  right: calc( 20% + 10px );
}

.b-production-video-modal .modal-content {
  overflow: visible;
}

.b-production-video-modal .modal-body {
  padding: 0;
  border-radius: 3px;
  overflow: hidden;
}

.b-production-video-modal .close {
  top: -34px;
  right: -34px;
}

.b-production-video-modal .close:focus {
  outline: none;
}

.b-production-video-modal iframe {
  width: 100%;
  height: 647px !important;
  display: block;
}

@media (max-width: 990px) {
  .production-process_light .btn {
    width: 250px;
    left: 50%;
    right: auto;
    margin-left: -125px;
  }
  #productionVideo1 .modal-dialog {
    width: 100vw;
    height: 100vh;
    right: 0;
    margin: 0;
  }
  #productionVideo1 .close {
    top: -34px;
    right: 0;
  }
}
@media (max-width: 990px) and (min-width: 768px) {
  .production-process_light .production-process-content {
    padding-left: 5%;
    padding-right: 5%;
  }
}
@media (max-width: 990px) {
  .production-process_light {
    display: block;
    margin-left: 0;
    margin-right: 0;
  }
  .production-process_light .col-item {
    width: 100%;
    max-width: 100%;
    margin-left: 0;
    margin-right: 0;
  }
  .production-process_light .col-item + .col-item {
    margin-top: 30px;
  }
  .production-process_light .production-process-ins {
    background: #fff;
  }
  .production-process_light .production-process-angle {
    display: none;
  }
  .production-process_light .production-process-pict {
    transform: none;
    -webkit-transform: none;
    -moz-transform: none;
    -ms-transform: none;
    max-height: 250px;
    margin-right: 0;
    -webkit-border-radius: 5px 5px 0 0;
    -moz-border-radius: 5px 5px 0 0;
    border-radius: 5px 5px 0 0;
    text-align: center;
    overflow: hidden;
  }
  .production-process_light .production-process-pict:after {
    display: none;
  }
  .production-process_light .production-process-pict:before {
    display: none;
  }
  .production-process_light .production-process-pict img {
    min-width: 100%;
    min-height: 100%;
    width: auto;
    margin-left: auto !important;
    margin-right: auto !important;
  }
}
</style>

<script>
$( function() {
  
  /*$( '.production-process-play' ).click( function() {
    $( this ).parent().find( 'video' ).get(0).play();
    $( this ).fadeOut();
  });*/
  
});
</script>

<div class="production-gray">
   <div class="container">
      <div class="text-center">
         <h1>Производство тары и упаковки из гофрокартона</h1>
      </div>
      <div class="row production-process production-process_light">
         <div class="col-md-4 col-item" id="bx_3218110189_61922">
            <div class="production-process-ins">
               <div class="production-process-pict">
                  
                  <video loop="loop" preload="none" poster="/upload/iblock/1c8/3_S.jpg" muted="muted">
                     <source src="/upload/banner/ploter_antech2.mp4" type="video/mp4"/>
                  </video>
                  
                  <div id="productionVideo1" tabindex="-1" role="dialog" aria-labelledby="aboutVideoLabel" class="modal autoPlayModal b-production-video-modal">
                    <div role="document" class="modal-dialog modal-lg">
                      <div class="modal-content text-middle">
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"></button>
                        <div class="modal-body center">
                          <div id="productionVideo1Container"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="production-process-stage">1 этап</div>
                  
                  <div class="production-process-play b-video-modal-button" data-toggle="modal" data-target="#productionVideo1" data-modal-id="productionVideo1" data-video-id="7DBxtut7Mpw"><div></div></div>
                  
                  <div class="production-process-angle"></div>
               </div>
               <div class="production-process-content">
                  <h2 class="h3">Разработка упаковки</h2>
                  <p></p>
                  <ul class="marker-red-square">
                     <li>Разрабатываем конструкцию и дизайн упаковки по вашим размерам с учетом параметров продукта, логистических процессов и маркетинговых задач.</li>
                     <li>Адаптируем стандартные конструкции из каталогов FEFCO и GALIA под ваш продукт или процесс.</li>
                     <li>Совершенствуем уже имеющуюся упаковку.</li>
                     <li>Добавляем конструктивные опции к упаковке: окошки, замки, ручки, клапаны, ложементы и тд.</li>
                     <li class="gift">Изготавливаем пробный образец в день обращения.<span data-container="body" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Приезжайте к нам в офис и мы бесплатно изготовим прототип для Вас!" class="present_btn" data-original-title="" title="">Прототип в подарок</span></li>
                  </ul>
                  <p></p>
                  <a class="btn btn-type-8" href="/production/razrabotka-upakovki/">Подробнее</a>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-item" id="bx_3218110189_61925">
            <div class="production-process-ins">
               <div class="production-process-pict">
                  <video loop="loop" preload="none" poster="/upload/iblock/1c8/3_S.jpg" muted="muted">
                     <source src="/upload/banner/ploter_antech2.mp4" type="video/mp4"/>
                  </video>
                  
                  <div id="productionVideo2" tabindex="-1" role="dialog" aria-labelledby="aboutVideoLabel" class="modal autoPlayModal b-production-video-modal">
                    <div role="document" class="modal-dialog modal-lg">
                      <div class="modal-content text-middle">
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"></button>
                        <div class="modal-body center">
                          <div id="productionVideo2Container"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="production-process-stage">2 этап</div>
                  
                  <div class="production-process-play b-video-modal-button" data-toggle="modal" data-target="#productionVideo2" data-modal-id="productionVideo2" data-video-id="CVLy3Q0KBIw"><div></div></div>
                  
                  <div class="production-process-angle"></div>
               </div>
               <div class="production-process-content">
                  <h2 class="h3">Изготовление</h2>
                  <p></p>
                  <ul class="marker-red-square">
                     <li>Мы изготавливаем картонные коробки на заказ из 3-х/5-ти/7-ми-слойного белого и бурого гофрокартона по индивидуальным размерам простых и сложных форм.</li>
                     <li>Изготавливаем тиражи от 1 шт до оптовых промышленных партий</li>
                     <li>Срок изготовления от 1 дня</li>
                     <li>Изготавливаем упаковку от 50 мм до 6 метров и более</li>
                     <li>Изготавливаем упаковку с цветной печатью</li>
                     <li>Интегрируем в упаковку пластиковые окошки, вставки из металла, дерева и др материалов</li>
                  </ul>
                  <p></p>
                  <a href="#" class="btn btn-type-8  btn-type-8_red  callback-show" data-teasername="&quot;PRODUCTION-PROCESS&quot;">Заказать изготовление</a>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-item" id="bx_3218110189_61926">
            <div class="production-process-ins">
               <div class="production-process-pict">
                  <img class="img-responsive lazyload" src="/upload/iblock/db6/2_S.jpg" data-original="/upload/iblock/db6/2_S.jpg" style="display: block;">
                  
                  <div class="production-process-stage">3 этап</div>
                  <div class="production-process-angle"></div>
               </div>
               <div class="production-process-content">
                  <h2 class="h3">Организация поставок</h2>
                  <p>                </p>
                  <ul class="marker-red-square">
                     <li><strong>Доставка</strong> по Москве и МО собственным транспортом. В регионы доставляем транспортными компаниями.</li>
                     <li><strong>Самовывоз со склада</strong><br>Пн - Пт: 9.00 - 18.00, Сб: 10.00 - 17.00.<br>Производство и склад находятся на одной локации в 5 км от МКАД. На складе всегда есть грузчики, которые погрузят заказ в ваш транспорт.</li>
                     <li><strong>Отгрузка по графику</strong><br>Отгружаем заказы нужными вам объемами точно в срок.</li>
                  </ul>
                  <small class="production-process-desc"><span style="color:#c61719">*</span> мы можем отгружать упаковку в плоском или собранном виде.</small> 
                  <p></p>
                  <a class="btn btn-type-8" href="/help/delivery/">Подробнее о доставке</a>
               </div>
            </div>
         </div>
      </div>
   <div class="scroll2top">Наверх</div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>