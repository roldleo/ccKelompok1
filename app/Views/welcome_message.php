<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
  background: #fff;
  font-family: 'Lily Script One';
}

.card {
  width: 200px;
  height: 300px;
  float: left;
  perspective: 500px;
}

.image {
    width: 100%;
    height: 100%;
}

.content {
  position: absolute;
  width: 100%;
  height: 100%;
  box-shadow: 0 0 15px rgba(0,0,0,0.1);

  transition: transform 1s;
  transform-style: preserve-3d;
}

.card:hover .content {
  transform: rotateY( 180deg ) ;
  transition: transform 0.5s;
}

.front,
.back {
  position: absolute;
  height: 100%;
  width: 100%;
  /* line-height: 300px; */
  color: #03446A;
  text-align: center;
  font-size: 30px;
  /* border-radius: 5px; */
  backface-visibility: hidden;
}

.back {
  padding-top: 100px;
  background: white;
  color: black;
  transform: rotateY( 180deg );
}
  </style>
</head>

<body>

  <div class="container mt-5">
    <div class="row">
        <h2>Kelompok 1</h2>
    </div>
    <div class="row mt-5">

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="content">
                    <div class="front">
                        <img class="image" src="data:image/jpeg;base64,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" alt="">
                    </div>
                    <div class="back">
                    RivaldiAnus Tagang
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="content">
                    <div class="front">
                        <img class="image" src="https://images.pexels.com/photos/45201/kitty-cat-kitten-pet-45201.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                    </div>
                    <div class="back">
                    Isnaini Syarifatun Nisa
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="content">
                    <div class="front">
                        <img class="image" src="https://images.pexels.com/photos/3715587/pexels-photo-3715587.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                    </div>
                    <div class="back">
                    Rahmat Miyarno Saputro
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="content">
                    <div class="front">
                        <img class="image" src="https://images.pexels.com/photos/62289/yemen-chameleon-chamaeleo-calyptratus-chameleon-reptile-62289.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                    </div>
                    <div class="back">
                    Rindiani Aprilliyanti
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="content">
                    <div class="front">
                        <img class="image" src="https://images.pexels.com/photos/326012/pexels-photo-326012.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                    </div>
                    <div class="back">
                    Anggita Naura Zakhruf
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="content">
                    <div class="front">
                        <img class="image" src="https://images.pexels.com/photos/572861/pexels-photo-572861.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                    </div>
                    <div class="back">
                    Harold Leonardo
                    </div>
                </div>
            </div>
        </div>


    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
