<?php
?>
<!doctype html>
<html lang='en'>

<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Document</title>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'
    integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
  <link href='./assets/css/style.css' rel='stylesheet'>
</head>

<body>

  <div id="app" class="bg-dark">

    <div class="container p-4">
      <div class="row">
        <div class="col-4 g-4" v-for="dis in dischi">
          <div class="card h-100"  >
            <img class="card-img-top" :src="dis.poster" alt="Title" />
            <div class="card-body">
              <h3 class="card-title fw-bold">{{dis.title}}</h3>
              <h5 class="card-text">{{dis.author}}</h5>
              <div class="card-text">{{dis.year}}</div>
              <div class="card-text text-secondary">{{dis.genre}}</div>
            </div>
          </div>
        </div>
      </div>
    </div>








  </div>

  <!-- CDN -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js'
    integrity='sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg=='
    crossorigin='anonymous' referrerpolicy='no-referrer'></script>
  <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
  <script src='./assets/js/app.js'></script>
</body>

</html>