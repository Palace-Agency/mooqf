@extends('frontend.layouts.app')

@section('content')
    <section class="search-bars">
      <div class="search-bars-content">
        <h1>Trouvez un maalam pour réaliser vos travaux</h1>
        <form action="" method="">
          <select name="travaux" id="travaux">
            <option value="" disabled selected hidden>
              Quels travaux souhaitez-vous réaliser
            </option>
          </select>
          <select name="ville" id="ville">
            <option value="" disabled selected hidden>
              Choisissez une ville
            </option>
          </select>
          <button type="submit">Trouver</button>
        </form>
      </div>
    </section>
    <section class="jobs">
      <h1>Recherche par métier</h1>
      <div class="container">
        <div class="job-row">
          <div class="job">
            <img src="frontend/images/aluminum.jpg" alt="img" />
            <span>ALUMINUM</span>
          </div>
          <div class="job">
            <img src="frontend/images/parab.jpg" alt="img" />
            <span>PARABOLE</span>
          </div>
          <div class="job">
            <img src="frontend/images/maconne.jpg" alt="img" />
            <span>MACONNERIE</span>
          </div>
          <div class="job">
            <img src="frontend/images/clima.jpg" alt="img" />
            <span>CLIMATISATION</span>
          </div>
        </div>
        <div class="job-row">
          <div class="job">
            <img src="frontend/images/jardinage.png" alt="img" />
            <span>JARDINAGE</span>
          </div>
          <div class="job">
            <img src="frontend/images/parab.jpg" alt="img" />
            <span>PARABOLE</span>
          </div>
          <div class="job">
            <img src="frontend/images/maconne.jpg" alt="img" />
            <span>MACONNERIE</span>
          </div>
          <div class="job">
            <img src="frontend/images/clima.jpg" alt="img" />
            <span>CLIMATISATION</span>
          </div>
        </div>
      </div>
      <a href="">Voir Plus</a>
    </section>
    <section class="villes">
      <div class="container">
        <div class="bigcity">
          <a href="#"><img src="frontend/images/agadir.jpg" alt="" /></a>
          <span>AGADIR</span>
        </div>
        <div class="cites">
          <div class="cites-group">
            <div class="city">
              <a href="#"><img src="frontend/images/tanger.jpg" alt="" /></a>
              <span>TANGER</span>
            </div>
            <div class="city">
              <a href="#"><img src="frontend/images/tanger.jpg" alt="" /></a>
              <span>TANGER</span>
            </div>
          </div>
          <div class="cites-group">
            <div class="city">
              <a href="#"><img src="frontend/images/tanger.jpg" alt="" /></a>
              <span>TANGER</span>
            </div>
            <div class="city">
              <a href="#"><img src="frontend/images/tanger.jpg" alt="" /></a>
              <span>TANGER</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="testimontals">
      <div class="inner">
        <div class="Title">
          <h1>Vos avis sur nos maallems</h1>
          <span></span>
        </div>
        <div class="row">
          <div class="child">
            <div class="testimontal">
              <a href="#"><img src="frontend/images/testimontal.png" alt="" /></a>
              <div class="name">Ali Yons</div>
              <div class="bar"></div>
              <div class="stars">
                <i class="uil uil-star"></i>
                <i class="uil uil-star"></i>
                <i class="uil uil-star"></i>
                <i class="uil uil-star"></i>
              </div>
              <p>
                "Lorem ipsum iusto placeat hic maiores?Lorem ipsum iusto placeat
                hic maiores?Lorem ipsum iusto placeat hic maiores?
              </p>
            </div>
          </div>
          <div class="child">
            <div class="testimontal">
              <img src="frontend/images/testimontal1.png" alt="" />
              <div class="name">Ali Yons</div>
              <div class="bar"></div>
              <div class="stars">
                <i class="uil uil-star"></i>
                <i class="uil uil-star"></i>
                <i class="uil uil-star"></i>
                <i class="uil uil-star"></i>
              </div>
              <p>
                "Lorem ipsum iusto placeat hic maiores?Lorem ipsum iusto placeat
                hic maiores?Lorem ipsum iusto placeat hic maiores?"
              </p>
            </div>
          </div>
          <div class="child third">
            <div class="testimontal">
              <img src="frontend/images/testimontal2.png" alt="" />
              <div class="name">Ali Yons</div>
              <div class="bar"></div>
              <div class="stars">
                <i class="uil uil-star"></i>
                <i class="uil uil-star"></i>
                <i class="uil uil-star"></i>
                <i class="uil uil-star"></i>
              </div>
              <p>
                "Lorem ipsum iusto placeat hic maiores?Lorem ipsum iusto placeat
                hic maiores?Lorem ipsum iusto placeat hic maiores?"
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="hero">
      <div class="banner">
        <div class="hero-content-left">
          <h2>Rejoignez notre communauté</h2>
          <p>
            Lorem cetur adipisicing elit.Loremt.Lorem ipsu elit.Lorem ipsum
            dolt.Lorem ipsu elit.Lorem ipsum dolt.Lorem ipsu elit.Lorem ipsum
            dolt.Lorem ipsu elit.Lorem ipsum dol ipsu elit.Lorem ipsum dolor sit
            amet consectetur adipisicing elit.Quisquam,
            voluptate.gctdytdytdytdytdydyydtk
          </p>
        </div>
        <div class="hero-content">
          <div>
            <h2>Comment ça Marche ?</h2>
          </div>
          <div class="content-group">
            <div class="content">
              <div>
                <h4>Recommandé par la communauté</h4>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Quisquam, voluptate.gctdytdytdytdytdydyydtk
                </p>
              </div>
            </div>
            <div class="content">
              <div>
                <h4>Recommandé par la communauté</h4>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Quisquam, voluptate.gctdytdytdytdytdydyydtk
                </p>
              </div>
            </div>
            <div class="content">
              <div class="icon"></div>
              <div class="text">
                <h4>Recommandé par la communauté</h4>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Quisquam, voluptate.gctdytdytdytdytdydyydtk
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection