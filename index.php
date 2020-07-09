<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>icon</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      padding: 40px;
    }

    ul {
      display: flex;
      flex-wrap: wrap;
    }

    ul li {
      display: flex;
      align-items: center;
      list-style: none;
      margin: .3em;
      padding: .5em;
      border-radius: 10px;
      border: solid 1px #888;
      font-size: 12px;
    }

    ul li img {
      width: 2em;
      margin-right: .5em;
    }

    hr {
      margin: 20px 0;
    }

    h2 {
      padding: 20px 0 10px;
    }
  </style>
</head>

<body>
  <p>アイコンをsvgでまとめました。<br>githubに置いてます。<a href="https://github.com/hiroyuki-n/svg_icon">github.com/hiroyuki-n/svg_icon</a></p>
  <hr>
  <h2>SNS・サービス系</h2>
  <ul>
    <?php
    foreach (glob('{icon/service/*.svg}', GLOB_BRACE) as $icon) {
      if (is_file($icon)) {
        echo "<li>";
        echo "<img src={$icon}>";
        echo "<p>$icon</p>";
        echo "</li>";
      }
    }
    ?>
  </ul>
  <h2>プログラミング系</h2>
  <ul>
    <?php
    foreach (glob('{icon/programming/*.svg}', GLOB_BRACE) as $icon) {
      if (is_file($icon)) {
        echo "<li>";
        echo "<img src={$icon}>";
        echo "<p>$icon</p>";
        echo "</li>";
      }
    }
    ?>
  </ul>
  <h2>Adobe系</h2>
  <ul>
    <?php
    foreach (glob('{icon/adobe/*.svg}', GLOB_BRACE) as $icon) {
      if (is_file($icon)) {
        echo "<li>";
        echo "<img src={$icon}>";
        echo "<p>$icon</p>";
        echo "</li>";
      }
    }
    ?>
  </ul>
</body>

</html>