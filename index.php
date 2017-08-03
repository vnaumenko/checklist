<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/material-design-iconic-font.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <title>Title</title>
</head>
<body>
<header>
  <h1 class="display-1">Перед релизом 1 проверь!</h1>
</header>
<main>
  <div class="container">
    <div class="row">
      <div class="checklist col-lg-4 col-md-6" id="Performance">
        <h2 class="header-block"><span>Производительность</span></h2>
        <div class="checkblock">
          <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input">
            <span class="custom-control-indicator"></span>
          </label>
          <div class="card">
            <div class="card-header" role="tab" id="heading1">
              <h3>
                <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse1">
                  Оптимизация графики
                </a>
              </h3>
            </div>
            <div id="collapse1" class="collapse" role="tabpanel">
              <div class="card-block">
                <ul>
                  <li>Сожмите все изображения с помощью веб-сервисов, таких как <a href="http://optimizilla.com/" target="_blank" rel="noopener">Optimizilla.com</a> и <a href="https://compressor.io/compress" target="_blank" rel="noopener">Compressor.io</a>, или с помощью декстопных приложений: <a target="_blank" rel="noopener" href="http://nikkhokkho.sourceforge.net/static.php?page=FileOptimizer">FileOptimizer</a>
                    и <a target="_blank" rel="noopener" href="https://imageoptim.com/mac">ImageOptim</a>.
                  </li>
                  <li>Создайте точный размер изображения для каждого элемента, а не изменяйте его с помощью CSS / HTML, так как это тяжело для браузера.</li>
                  <li>Используйте спрайты для уменьшения HTTP-запросов.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="checkblock">
          <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input">
            <span class="custom-control-indicator"></span>
          </label>
          <div class="card">
            <div class="card-header" role="tab" id="heading2">
              <h3>
                <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse2">
                  Уменьшите вес страницы и количество запросов
                </a>
              </h3>
            </div>
            <div id="collapse2" class="collapse" role="tabpanel">
              <div class="card-block">
                <p>Размер страницы желательно держать около 2 мегабайт, а количество запросов около 50.</p>
                <ul>
                  <li>Ограничьте сторонние библиотеки и скрипты.</li>
                  <li>Загружайте ресурсы и запросы асинхронно.</li>
                  <li>Используйте <a target="_blank" rel="noopener" href="https://ru.wikipedia.org/wiki/Content_Delivery_Network">CDN</a> для статичных ресурсов.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="checkblock">
          <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input">
            <span class="custom-control-indicator"></span>
          </label>
          <div class="card">
            <div class="card-header" role="tab" id="heading3">
              <h3>
                <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse3">
                  Ограничьте использование веб-шрифтов
                </a>
              </h3>
            </div>
            <div id="collapse3" class="collapse" role="tabpanel">
              <div class="card-block">
                <p>Многие сайты загружают полный набор символов в шрифтах, многие из которых даже не нужны. Постарайтесь отключить неспользованные наборы символов. Также рекомендуем использовать не более 2-3 веб-шрифтов на сайте.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="checkblock">
          <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input">
            <span class="custom-control-indicator"></span>
          </label>
          <div class="card">
            <div class="card-header" role="tab" id="heading3">
              <h3>
                <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse4">
                  Сжать с помощью GZIP и минифицировать JS/CSS файлы
                </a>
              </h3>
            </div>
            <div id="collapse4" class="collapse" role="tabpane4">
              <div class="card-block">
                <p>GZIP - мощный компрессор для текстовых файлов, который можно настроить на сервере. Все файлы JS и CSS можно объединить в один файл, чтобы уменьшить количество запросов и размер. Предлагаем следующие инструменты <a target="_blank" rel="noopener" href="http://lisperator.net/uglifyjs/">UgilfyJS</a> для JS и <a target="_blank" rel="noopener" href="https://github.com/css/csso">CSSO</a> для CSS.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="checkblock">
          <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input">
            <span class="custom-control-indicator"></span>
          </label>
          <div class="card">
            <div class="card-header" role="tab" id="heading3">
              <h3>
                <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse5">
                  Сжать с помощью GZIP и минифицировать JS/CSS файлы
                </a>
              </h3>
            </div>
            <div id="collapse5" class="collapse" role="tabpane5">
              <div class="card-block">
                <p>GZIP - мощный компрессор для текстовых файлов, который можно настроить на сервере. Все файлы JS и CSS можно объединить в один файл, чтобы уменьшить количество запросов и размер. Предлагаем следующие инструменты <a target="_blank" rel="noopener" href="http://lisperator.net/uglifyjs/">UgilfyJS</a> для JS и <a target="_blank" rel="noopener" href="https://github.com/css/csso">CSSO</a> для CSS.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="checklist col-lg-4 col-md-6" id="SEO">
        <h2 class="header-block"><span>SEO</span></h2>
        <div class="checkblock">
          <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input">
            <span class="custom-control-indicator"></span>
          </label>
          <div class="card">
            <div class="card-header" role="tab" id="heading2">
              <h3>
                <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse2">
                  Ключевые слова для страницы
                </a>
              </h3>
            </div>
            <div id="collapse2" class="collapse" role="tabpanel">
              <div class="card-block">
                <p>Ключевые слова необходимы для улучшение SEO рейтинга.</p>
                <ul>
                  <li>URL - убедитесь, что он короткий и семантически понятный.</li>
                  <li>В заголовке укажите ключевое слово или фразу, не более 70 символов.</li>
                  <li>Добавьте описание в meta-тег, оно должно быть уникально на каждой странице, не более 155 символов.</li>
                  <li>H1 - по одному на страницу!</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<footer>
</footer>
<div class="progress fixed-bottom">
  <div class="progress-bar progress-bar-striped bg-primary" id="progress-Performance" role="progressbar" style="width: 0%"></div>
  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 0%"></div>
  <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 0%"></div>
  <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 0%"></div>
  <div class="progress-bar progress-bar-striped bg-inverse" role="progressbar" style="width: 0%"></div>
  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 0%"></div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>



</body>
</html>