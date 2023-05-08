<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <title>Dischi</title>
</head>

<body>
  <div id="app">
    <header>
      <h1>Dischi</h1>
    </header>
    <main>
      <div class="container d-flex flex-column justify-content-center align-items-center">
        <div class="d-flex justify-content-center align-items-center">
          <div class="row row-cols-3">
            <div v-for="(disk, index) in disks" :key="index">
              <div class="ms_card">
                <div class="img">
                  <img :src="disk.poster" class="card-img-top" alt="">
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center">
                  <h3 class="mt-3">{{disk.title}}</h3>
                  <h6>{{disk.author}}</h6>
                  <h5>{{disk.year}}</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
    </main>
  </div>

  <script src="js/script.js"></script>
</body>

</html>