<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <style>
    

/* Style the hero section */
.hero {
  background-image: url("hero.jpg"); /* change the image source as needed */
  background-size: cover;
  background-position: center;
  height: 80vh;
  display: flex;
  align-items: center;
}

.team {
  padding: 4rem 0;
}

.card {
  transform: scale(0.9);
  transition: all 0.3s ease-in-out;
}

.card:hover {
  transform:scale3d(1);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}
  </style>
</head>
<body>

  <section class="hero bg-dark">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="display-1 text-white">About Us</h1>
          <p class="lead text-white">We are a team of passionate and creative professionals who love what we do.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Create a section with cards for each person -->
  <section class="team">
    <div class="container">
      <div class="row gy-4">
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card">
            <img src="Abdelrhamn Tharwat.jpg" class="card-img-top" alt="Abdelrhamn Tharwat">
            <div class="card-body">
              <h5 class="card-title">Abdelrhamn Tharwat</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, mollitia?</p>
              <a href="#" class="btn btn-primary">View Profile</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card">
            <img src="Abdelaliem.jpg" class="card-img-top" alt="Abdelaliem">
            <div class="card-body">
              <h5 class="card-title">Abdelaliem</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, mollitia?</p>
              <a href="#" class="btn btn-primary">View Profile</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card">
            <img src="mai gamel.jpg" class="card-img-top" alt="mai gamel">
            <div class="card-body">
              <h5 class="card-title">mai gamel</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, mollitia?</p>
              <a href="#" class="btn btn-primary">View Profile</a>
            </div>
          </div>
        </div>
        
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card">
            <img src="mariem .jpg" class="card-img-top" alt="mariem ">
            <div class="card-body">
              <h5 class="card-title">mariem </h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, mollitia?</p>
              <a href="#" class="btn btn-primary">View Profile</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card">
            <img src="kero.jpg" class="card-img-top" alt="kero">
            <div class="card-body">
              <h5 class="card-title">kero</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, mollitia?</p>
              <a href="#" class="btn btn-primary">View Profile</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.js"></script>
  <script src="script.js"></script>
</body>
</html>