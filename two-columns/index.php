<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>

<style>
.btn-type-11 {
    font-size: 18px !important;
    font-weight: 400 !important;
    line-height: 50px !important;
    -webkit-border-radius: 5px !important;
    -moz-border-radius: 5px !important;
    border-radius: 5px !important;
    color: #fff !important;
    padding: 0 20px !important;
    background-color: #e31d1a !important;
}
.b-columns {
  display: flex;
  justify-content: space-between;
}
.b-column {
  width: calc( 50% - 21px );
  background-color: #fff;
  padding: 40px;
}
h2:first-child {
  margin-top: 0;
}
@media( max-width: 600px ) {
  .b-columns {
    display: block;
  }
  .b-column {
    width: auto;
    margin-bottom: 30px;
    padding: 30px;
  }
  .b-column .btn {
    display: block;
    padding: 0 !important;
  }
}
</style>

<div class="production-gray">
  <div class="container">
    <div class="b-columns">
      <div class="b-column">
        <h2>Преимущества гибридной тары:</h2>
        <ul class="marker-red-square marker-red-square_big">
          <li>Адаптируем базовые конструкции под ваш продукт</li>
          <li>Создаем уникальные продуманные конструкции</li>
          <li>Разрабатыв аем и&nbsp;изготавливаем упаковку из&nbsp;гофрокартона с&nbsp;интеграцией других материалов, таких как дерево, фанера, металл, пластик, текстиль, кожзам и&nbsp;тд.</li>
          <li>Изготавливаем прототип для испытания его в&nbsp;реальных условиях</li>
          <li>Создаем экономически и&nbsp;эксплуатационно обоснованные упаковочные конструкции</li>
        </ul>
      </div>
      <div class="b-column">
        <h2>Почему гибридную тару заказывают у нас?</h2>
        <ul class="marker-red-square marker-red-square_big">
          <li>Адаптируем базовые конструкции под ваш продукт</li>
          <li>Создаем уникальные продуманные конструкции</li>
          <li>Разрабатыв аем и&nbsp;изготавливаем упаковку из&nbsp;гофрокартона с&nbsp;интеграцией других материалов, таких как дерево, фанера, металл, пластик, текстиль, кожзам и&nbsp;тд.</li>
          <li>Изготавливаем прототип для испытания его в&nbsp;реальных условиях</li>
          <li>Создаем экономически и&nbsp;эксплуатационно обоснованные упаковочные конструкции</li>
        </ul>
        <hr>
        <div><a class="btn btn-type-11 callback-show" data-teasername="PRODUCTION-DEVELOPMENT-SARTSCREEN" href="#">Заказать бесплатный расчет</a></div>
      </div>
    </div>
  </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>