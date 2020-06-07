<? foreach ($countCities as $city) { ?>
  <ul>
    <li><?= $city['city_name'] ?>
      <br>
      <span style="color: #3e8f3e"><?= $city['country'] ?></span>
    </li>
  </ul>
<? } ?>