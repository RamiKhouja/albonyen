@extends('layouts.app')
@section('content')
<div class="container">
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/img/slider/graduation.png" class="bd-placeholder-img" width="100%"/>
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Example headline.</h1>
              <p>Some representative placeholder content for the first slide of the carousel.</p>
              <p><a class="btn-slider btn btn-lg btn-secondary" href="#">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/img/slider/help.png" class="bd-placeholder-img" width="100%"/>
          <div class="container">
            <div class="carousel-caption">
              <h1>كالبنيان يشد بعضه بعضًا</h1>
              <p>Like a structure.. Supporting each other</p>
              <p><a class="btn-slider btn btn-lg btn-secondary" href="#">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/img/slider/students.png" class="bd-placeholder-img" width="100%"/>
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>One more for good measure.</h1>
              <p>Some representative placeholder content for the third slide of this carousel.</p>
              <p><a class="btn-slider btn btn-lg btn-secondary" href="#">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
  </div>
  <div class="features">
    <div class="section-title"><h1>What we do</h1></div>
    <div class="row featurette shadow-sm mb-5 bg-white">
      <div class="col-md-7 featurette-text">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
      </div>
      <div class="col-md-5 featurette-img">
        <img src="/img/featurette/startup.jpeg" class="img-fluid" alt="">
      </div>
    </div>


    <div class="row featurette shadow-sm mb-5 bg-white">
      <div class="col-md-7 order-md-2 featurette-text">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-md-5 order-md-1 featurette-img">
        <img src="/img/featurette/study.png" class="img-fluid" alt="">
      </div>
    </div>
    <div class="row featurette shadow-sm mb-5 bg-white">
      <div class="col-md-7 featurette-text">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-md-5 featurette-img">
        <img src="/img/featurette/startup.jpeg" class="img-fluid" alt="">
      </div>
    </div>
  </div>
</div>
<div class="act-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 act left">
        <h1 class="act-title">Discover our Activities</h1>
        <p class="act-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat laudantium, sapiente aliquid in voluptas eveniet aliquam quos odio mollitia id modi quam perferendis dolorum veniam facilis repudiandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat laudantium, sapiente aliquid in voluptas eveniet aliquam quos odio mollitia id modi quam perferendis dolorum veniam facilis repudiandae.</p>
        <a href="#" class="act-btn btn btn-secondary rounded-pill">Visit Our Activities</a>
      </div>
      <div class="col-md-6 act">
        <h1 class="act-title">Make a Donation</h1>
        <p class="act-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat laudantium, sapiente aliquid in voluptas eveniet aliquam quos odio mollitia id modi quam perferendis dolorum veniam facilis repudiandae.</p>
        <a href="#" class="act-btn btn btn-secondary rounded-pill">Donate</a>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="team">
    <div class="section-title"><h1>Our Founding Members</h1></div>
    <div class="team-members row">
      <div class="member col-md-3">
        <img src="img/team/fidaa.jpeg" class="img rounded-circle shadow" width="150px" height="150px" alt="Fidaa">
        <h3>Fidaa</h3>
        <h5 class="primary-text">President</h5>
      </div>
      <div class="member col-md-3">
        <img src="img/team/rami.jpeg" class="img rounded-circle shadow" width="150px" height="150px" alt="Rami">
        <h3>Rami</h3>
        <h5 class="primary-text">General Secretary</h5>
      </div>
      <div class="member col-md-3">
        <img src="img/team/hajri.jpg" class="img rounded-circle shadow" width="150px" height="150px" alt="fidaa">
        <h3>Mohamed Amine</h3>
        <h5 class="primary-text">Treasurer</h5>
      </div>
      <div class="member col-md-3">
        <img src="img/team/av-scarf.jpg" class="img rounded-circle shadow" width="150px" height="150px" alt="fidaa">
        <h3>Rahma</h3>
        <h5 class="primary-text">Assistant Secretary</h5>
      </div>
      <div class="member col-md-3">
        <img src="img/team/moez.jpg" class="img rounded-circle shadow" width="150px" height="150px" alt="fidaa">
        <h3>Moez</h3>
        <h5 class="primary-text">Assistant Treasurer</h5>
      </div>
      <div class="member col-md-3">
        <img src="img/team/av-scarf-2.jpg" class="img rounded-circle shadow" width="150px" height="150px" alt="fidaa">
        <h3>Hiba</h3>
        <h5 class="primary-text">Member</h5>
      </div>
      <div class="member col-md-3">
        <img src="img/team/av-girl.jpg" class="img rounded-circle shadow" width="150px" height="150px" alt="fidaa">
        <h3>Nour</h3>
        <h5 class="primary-text">Member</h5>
      </div>
    </div>
  </div>
</div>
<style>
      .features {
        margin-top: 80px;
      }
      .featurette {
        margin-right: 0;
        margin-left: 0;
      }
      .featurette:hover {
          box-shadow: 0 .5rem 1.5rem rgba(0,0,0,.15)!important;
      }
      .featurette-text {
        padding: 50px;
      }
      .featurette-img {
        padding: 0 !important;
      }
      .team {
        margin: 100px 0;
      }
      .team-members {
        justify-content: center;
      }
      .section-title {
        text-align: center;
        margin-bottom: 50px;
      }
      .team .member {
        text-align: center;
      }
      .member .img {
        margin-bottom: 30px;
      }
      @media (max-width: 767px) {
        .bd-placeholder-img {
            height: 350px;
        }
        .act {
          padding-left: 20px;
          padding-right: 20px;
        }
      }
      @media (min-width: 768px) {
        .bd-placeholder-img {
            height: 500px;
        }
        .act {
          padding-left: 50px;
          padding-right: 50px;
        }
        .act.left {
          border-right: 1px solid white;
        }
      }
      .act-section {
        padding: 100px;
        background-color: var(--bs-purple);
        text-align: center;
        color: white;
        margin-top: 100px;
      }
      .act-btn {
        border: 2px solid white !important;
        font-weight: bold;
        padding-right: 30px;
        padding-left: 30px;
      }
</style>


<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            loop:true,
            items:1
        });
    });
</script>
@stop