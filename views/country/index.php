<div class="container">
  <h1>Страны и города</h1>
  <hr>
  <div class="row">
    <div class="col-md-6">
      <h2>Страны</h2>
        <?= \app\widgets\CountryWidget::widget() ?>
    </div>
    <div class="col-md-6">
      <h2>Города</h2>
      <div id="info" class="hidden"></div>
    </div>
  </div>
</div>