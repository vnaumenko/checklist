<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/material-design-iconic-font.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <title>Title</title>
  <?php
    $i = 0;
  ?>
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
        <?php
          $dataPerformance = array(
            '1' => array('Оптимизация графики','
              <ul>
                <li>Сожмите все изображения с помощью веб-сервисов, таких как <a href="http://optimizilla.com/" target="_blank" rel="noopener">Optimizilla.com</a> и <a href="https://compressor.io/compress" target="_blank" rel="noopener">Compressor.io</a>, или с помощью декстопных приложений: <a target="_blank" rel="noopener" href="http://nikkhokkho.sourceforge.net/static.php?page=FileOptimizer">FileOptimizer</a> и <a target="_blank" rel="noopener" href="https://imageoptim.com/mac">ImageOptim</a>.</li>
                <li>Создайте точный размер изображения для каждого элемента, а не изменяйте его с помощью CSS / HTML, так как это тяжело для браузера.</li>
                <li>Используйте спрайты для уменьшения HTTP-запросов.</li>
              </ul>
            '),
            '2' => array('Уменьшите вес страницы и количество запросов','
              <p>Размер страницы желательно держать около 2 мегабайт, а количество запросов около 50.</p>
              <ul>
                <li>Ограничьте сторонние библиотеки и скрипты.</li>
                <li>Загружайте ресурсы и запросы асинхронно.</li>
                <li>Используйте <a target="_blank" rel="noopener" href="https://ru.wikipedia.org/wiki/Content_Delivery_Network">CDN</a> для статичных ресурсов.</li>
              </ul>
            '),
            '3' => array('Ограничьте использование веб-шрифтов','
              <p>Многие сайты загружают полный набор символов в шрифтах, многие из которых даже не нужны. Постарайтесь отключить неспользованные наборы символов. Также рекомендуем использовать не более 2-3 веб-шрифтов на сайте.</p>
            '),
            '4' => array('Сжать с помощью GZIP и минифицировать JS/CSS файлы','
              <p>GZIP - мощный компрессор для текстовых файлов, который можно настроить на сервере. Все файлы JS и CSS можно объединить в один файл, чтобы уменьшить количество запросов и размер. Предлагаем следующие инструменты <a target="_blank" rel="noopener" href="http://lisperator.net/uglifyjs/">UgilfyJS</a> для JS и <a target="_blank" rel="noopener" href="https://github.com/css/csso">CSSO</a> для CSS.</p>
            '),
            '5' => array('Используйте HTTP/2','
              <p>HTTP/2 новейший HTTP протокол, имеет отличную поддержку среди браузеров и высокую скорость работы. <a target="_blank" rel="noopener" href="https://www.redpill-linpro.com/sysadvent/2016/12/20/http2.html">Тут</a> гайд как включить HTTP/2 в Nginx.</p>
            '),
            '6' => array('Добавьте атрибуты Asyns или Defer','
              <p>Сообщите браузеру, когда загружать и выполнять JS файлы, чтобы он не блокировал другие ресурсы. Для более полного представления об атрибутах, рекомендую прочитать <a target="_blank" rel="noopener" href="http://www.growingwiththeweb.com/2014/02/async-vs-defer-attributes.html">эту</a> инструкцию.</p>
            '),
            '7' => array('Набор кеш-заголовков','
              <p>Укажите заголовок [cache-control] с директивой [max-age] на сервере. Это обеспечит огромную экономию ресурсов для пользователей, которые несколько раз видят одни и те же ресурсы. Статические ресурсы должны быть в кэше как можно дольше.</p>
            '),
            '8' => array('Тест запуска','
              <p>Перед запуском советуем протестировать сайт с помощью таких сервисов, как: <a target="_blank" rel="noopener" href="http://yellowlab.tools/">YellowLab.tools</a>, <a target="_blank" rel="noopener" href="http://www.webpagetest.org/">webpagetest.org</a> и <a target="_blank" rel="noopener" href="https://developers.google.com/web/tools/lighthouse/">Lighthouse</a>.</p>
            '),
          );
          foreach ($dataPerformance as $data):
            $i++;
        ?>
          <div class="checkblock">
            <label class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="Performance<?=$i?>">
              <span class="custom-control-indicator"></span>
            </label>
            <div class="card">
              <div class="card-header" role="tab" id="heading<?=$i?>">
                <h3>
                  <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse<?=$i?>">
                    <?=$data[0]?>
                  </a>
                </h3>
              </div>
              <div id="collapse<?=$i?>" class="collapse" role="tabpanel">
                <div class="card-block">
                  <?=$data[1]?>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
      <div class="checklist col-lg-4 col-md-6" id="SEO">
        <h2 class="header-block"><span>SEO</span></h2>
        <?php
        $dataSEO = array(
          '1' => array('Ключевые слова для страницы','
              <p>Ключевые слова необходимы для улучшение SEO рейтинга.</p>
              <ul>
                <li>URL - убедитесь, что он короткий и семантически понятный.</li>
                <li>В заголовке укажите ключевое слово или фразу, не более 70 символов.</li>
                <li>Добавьте описание в meta-тег, оно должно быть уникально на каждой странице, не более 155 символов.</li>
                <li>H1 - по одному на страницу!</li>
              </ul>
            '),
          '2' => array('Настройка Google Analytics и Google Search Console','
              <p>Google Analytics поможет вам таргетировать пользователей и изолировать проблемные области на вашем сайта. Филип Уолтон объясняет <a target="_blank" rel="noopener" href="https://philipwalton.com/articles/the-google-analytics-setup-i-use-on-every-site-i-build/">как настроить GA</a>. Не забудьте подключить Search Console и Analytics! Обратите внимание, что Bing Webmaster Tools более важен для сайтов нацеленные на США.</p>
            '),
          '3' => array('Создайте XML Sitemap','
              <p>В этом вам поможет такой инструмент, как <a target="_blank" rel="noopener" href="https://www.xml-sitemaps.com/">XML-Sitemaps.com</a>. Отправьте карту сайта всем поисковым системам, чтобы они могли более грамотно сканировать ваш сайт.</p>
            '),
          '4' => array('Создайте Robots.txt','
              <p>Файл robots.txt указывает роботам, на какие страницы им можно заходить.</p>
            '),
          '5' => array('Набор канонических ссылок','
              <p>Если можете, установите каноническую ссылку на каждую страницу, используя абсолютный URL без строк запроса. Вы должны перенаправить трафик с www на не-www или наоборот, в нижнем регистре и удалить конечную косую черту.</p>
            '),
          '6' => array('Установить структуру данных','
              <p>Структурированные данные позволяют поисковым системам лучше понимать вашу разметку HTML и создавать расширенные фрагменты для страницы результатов, это сделает вашу страницу результатов намного более привлекательной и многофункциональной для возможных посетителей. Полезные ссылки: <a target="_blank" rel="noopener" href="https://raventools.com/site-auditor/seo-guide/schema-structured-data/">Structured
                        data</a> и <a target="_blank" rel="noopener" href="https://moz.com/learn/seo/schema-structured-data">Rich
                            Snippets</a></p>
            '),
          '7' => array('Facebook & Twitter мета-теги для соц. сетей','
              <p>Facebook\'s <a target="_blank" rel="noopener" href="https://developers.facebook.com/docs/sharing/opengraph">Open
                        Graph</a> и Twitter\'s <a target="_blank" rel="noopener" href="https://dev.twitter.com/cards/overview">Cards</a> позволяют сделать сайт более привлекательным для потенциальных посетителей в социальных сетях. На сайте <a target="_blank" rel="noopener" href="https://developers.facebook.com/tools/debug/">Facebook for developers</a> и <a target="_blank" rel="noopener" href="https://cards-dev.twitter.com/validator">Twitter Developer</a> вы можете отладить работу ваших мета-данных.</p>
            '),
        );
        foreach ($dataSEO as $data):
          $i++;
          ?>
          <div class="checkblock">
            <label class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="SEO<?=$i?>">
              <span class="custom-control-indicator"></span>
            </label>
            <div class="card">
              <div class="card-header" role="tab" id="heading<?=$i?>">
                <h3>
                  <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse<?=$i?>">
                    <?=$data[0]?>
                  </a>
                </h3>
              </div>
              <div id="collapse<?=$i?>" class="collapse" role="tabpanel">
                <div class="card-block">
                  <?=$data[1]?>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
      <div class="checklist col-lg-4 col-md-6" id="Security">
        <h2 class="header-block"><span>Безопасность</span></h2>
        <?php
        $dataSecurity = array(
          '1' => array('Используй везде HTTPS','
              <p>HTTPS должен быть включен не только на странице входа, но и на всех других. <a target="_blank" rel="noopener" href="https://letsencrypt.org/">Let\'s Encrypt</a> позволяет вам легко и быстро управлять своихи SSL сертификатами. Проверить свой сайт вы можете на сайте <a target="_blank" rel="noopener" href="https://www.ssllabs.com/ssltest/">SSL Labs</a>.</p>
            '),
          '2' => array('Установите заголовски безопасности','
              <p>Уделите время установке простых заголовков на вашем сервере, чтобы не было проблем в будущем. Потестировать можете на этом сайте: <a target="_blank" rel="noopener" href="https://securityheaders.io/">securityheaders.io</a></p>
              <ul>
                <li><a target="_blank" rel="noopener" href="https://developer.mozilla.org/en-US/docs/Web/HTTP/CSP">CSP</a> уменьшит количество XSS атак и инъекций.</li>
                <li><a target="_blank" rel="noopener" href="https://en.wikipedia.org/wiki/Cross-site_request_forgery">CSRF</a> предотвратит межсайтовую подделку запросов.</li>
                <li><a target="_blank" rel="noopener" href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-Frame-Options">X-Frame-Options</a>
                    защитит от кликджекинга.</li>
                <li><a target="_blank" rel="noopener" href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-XSS-Protection">X-XSS-Protection</a>
                    уменьшит количество XSS аттак.
                </li>
                <li>Используй <a target="_blank" rel="noopener" href="https://blog.stackpath.com/glossary/hsts/">HSTS</a> ответы строго через TLS. Все запросы HTTP перенаправляй на HTTPS.</li>
                <li>Куки должны содержать домен и путь, а также использовать атрибуты <a target="_blank" rel="noopener" href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Cookies#Secure_and_HttpOnly_cookies">HttpOnly,
                    SameSite, и Secure</a>.
                </li>
              </ul>
            '),
          '3' => array('Очистите пользовательские данные','
              <p>При обработке входных данных удаляйте весь JS, SQL и CRLF.</p>
            '),
          '4' => array('Шифруйте все пароли','
              <p>Используйте соль и сложные алгоритмы шифрования.</p>
            '),
          '5' => array('Ограничьте количество запросов по API','
              <p>Установите ограничение, чтобы не получить "Отказ в обслуживании".</p>
            '),
        );
        foreach ($dataSecurity as $data):
          $i++;
          ?>
          <div class="checkblock">
            <label class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="Security<?=$i?>">
              <span class="custom-control-indicator"></span>
            </label>
            <div class="card">
              <div class="card-header" role="tab" id="heading<?=$i?>">
                <h3>
                  <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse<?=$i?>">
                    <?=$data[0]?>
                  </a>
                </h3>
              </div>
              <div id="collapse<?=$i?>" class="collapse" role="tabpanel">
                <div class="card-block">
                  <?=$data[1]?>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>
</main>
<footer>
</footer>
<div class="progress fixed-bottom">
  <div class="progress-bar progress-bar-striped bg-primary" id="progress-Performance" role="progressbar" style="width: 0%"></div>
  <div class="progress-bar progress-bar-striped bg-success" id="progress-SEO" role="progressbar" style="width: 0%"></div>
  <div class="progress-bar progress-bar-striped bg-danger" id="progress-Security 111" role="progressbar" style="width: 0%"></div>
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