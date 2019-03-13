<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700" rel="stylesheet" />
    <link rel="stylesheet" href="assets/stylefonts.css" />
    <link rel="stylesheet" href="assets/style.css" />
    <title>Wild Bazar</title>
</head>

<body>
    <div class="container-fluid p-0">
        <?php
            include 'header.php';
            ?>
    </div>

    <div class="container-fluid px-0 py-5">
        <!-- catégories -->
        <!-- catégories -->
        <section id="categories" class="dr_section py-3">
            <!-- Titre -->
            <h2 class="background-color text-center"><span>Categories</span></h2>
            <div class="row p-2 my-5 justify-content-center">
                <div class="col-md-6 col-lg-4 justify-content-center p-3">
                    <div class="card cat-card mx-auto">
                        <div class="categories">
                            <img src="assets/img/home/clothes.jpg" class="img-fluid" alt="CLOTHES" />
                        </div>
                        <a class="card-img-overlay cat-overlay title-content text-center " href="clothes.html">
                            <!-- <div class="title-content  spring-fever"> -->
                            <div class="cat-title">
                                <h3>CLOTHES</h3>
                            </div>
                            <hr class="cat-hr" />
                            <div class="cat-intro p-2 rounded">
                                T-Shirts, Sweetshirts, Pulls ...
                            </div>
                        </a>
                        <!-- /.blog-card -->
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 justify-content-center p-3">
                    <div class="card cat-card mx-auto">
                        <div class="categories">
                            <img src="assets/img/home/goodies.jpg" class=" img-fluid" alt="GOODIES" />
                        </div>
                        <a class="card-img-overlay cat-overlay title-content text-center" href="goodies.html">
                            <!-- <div class="title-content  spring-fever"> -->
                            <div class="cat-title">
                                <h3>GOODIES</h3>
                            </div>
                            <hr class="cat-hr" />
                            <div class="cat-intro p-2 rounded">Pins, Stickers, Posters ...</div>
                        </a>
                        <!-- /.blog-card -->
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 justify-content-center p-3">
                    <div class="card cat-card mx-auto">
                        <div class="categories">
                            <img src="assets/img/home/glasses.jpg" class=" img-fluid" alt="glasses" />
                        </div>
                        <a class="card-img-overlay cat-overlay title-content text-center" href="kitchen.html">
                            <!-- <div class="title-content  spring-fever"> -->
                            <div class="cat-title">
                                <h3>kITCHEN</h3>
                            </div>
                            <hr class="cat-hr" />
                            <div class="cat-intro p-2 rounded">Mugs, Glass ...</div>
                        </a>
                        <!-- /.blog-card -->
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 justify-content-center p-3">
                    <div class="card cat-card mx-auto">
                        <div class="categories">
                            <img src="assets/img/home/slippers.jpg" class="img-fluid" alt="slippers" />
                        </div>
                        <a class="card-img-overlay cat-overlay title-content text-center " href="slippers.html">
                            <!-- <div class="title-content  spring-fever"> -->
                            <div class="cat-title">
                                <h3>SLIPPERS</h3>
                            </div>
                            <hr class="cat-hr" />
                            <div class="cat-intro p-2 rounded">
                                Wide selection of slippers ...
                            </div>
                        </a>
                        <!-- /.blog-card -->
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 justify-content-center p-3">
                    <div class="card cat-card mx-auto">
                        <div class="categories">
                            <img src="assets/img/home/figurines.jpg" class="img-fluid" alt="Figurines" />
                        </div>
                        <a class="card-img-overlay cat-overlay title-content text-center " href="figurines.html">
                            <!-- <div class="title-content  spring-fever"> -->
                            <div class="cat-title">
                                <h3>FIGURINES</h3>
                            </div>
                            <hr class="cat-hr" />
                            <div class="cat-intro p-2 rounded">
                                Plushtoy, Figurines ...
                            </div>
                        </a>
                        <!-- /.blog-card -->
                    </div>
                </div>

            </div>
        </section>
        <section class="col-2 ss-style-triangles_white mx-auto my-5"></section>
        <!-- About us -->
        <section id="aboutus" class="section_color py-5">
            <div class="aboutus py-5">
                <h2 class="background-white text-center"><span>About us</span></h2>
                <div class="row justify-content-center mx-0">
                    <div class="col-md-4 col-lg-2 text-center">
                        <img class="img-fluid logodeer align-self-center mr-3" src="https://image.noelshack.com/fichiers/2019/10/1/1551715431-cerfsansfond.png" alt="logo wild" />
                    </div>
                    <div class="col-md-8 col-lg-6 text-left mx-3">
                        <h5 class="mt-0">Our story...</h5>
                        <p class="text">
                            The Wild Baazar is a project made by our students from the Wild Code School in order to fund non-profit
                            associations. Indeed, the Wild Code School think that Education success can be eased when we have good
                            stuff like computers. Therefore, for each sold object by the Wild Baazar, a part of the revenues will be
                            donated to associations in order to fund computers for children who have not easily access to education or
                            who live in the poorest countries.
                        </p>
                    </div>
                </div>
            </div>

        </section>
        <section class="col-2 ss-style-triangles mx-auto py-5"></section>

        <!-- Section Top Selling -->
        <section id="topselling" class="section_color2 p-3">
            <!-- Titre -->
            <h2 class="background-color text-center"><span>Top selling</span></h2>
            <div class="row p-2">
                <!-- Produit 1 -->
                <div class="col-md-6 col-lg-4 justify-content-center">
                    <div class="card border-dark my-2 dr_card card-content ">
                        <!-- Container pout l'image top -->
                        <div class="dr_wrapper text-center ">
                            <img src="assets/img/clothes/b-wild.png" class="card-img-top img-fluid" alt="Wild bag" />
                        </div>
                        <!-- Mise en place du badge pour le prix  -->
                        <a class="card-img-overlay" href="clothes.html">
                            <div class="card-body text-right p-1">
                                <h3>
                                    <span class="card-text badge badge-info dr_badge">39.99$</span>
                                </h3>
                            </div>
                        </a>
                        <!-- ZOne de texte -->
                        <div class="card-body">
                            <h4 class="card-title text-center">WCS Bag</h4>
                        </div>
                    </div>
                </div>
                <!-- Produit 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card border-dark my-2 dr_card">
                        <div class="dr_wrapper text-center ">
                            <img src="assets/img/kitchen/mugprog.jpg" class="card-img-top img-fluid" alt="Mug prog" />
                        </div>
                        <a class="card-img-overlay" href="kitchen.html">
                            <div class="card-body text-right p-1">
                                <h3>
                                    <span class="card-text badge badge-info dr_badge">19.99$</span>
                                </h3>
                            </div>
                        </a>
                        <div class="card-body">
                            <h4 class="card-title text-center">Mug Algorithm</h4>
                        </div>
                    </div>
                </div>
                <!-- Produit 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card border-dark my-2 dr_card ">
                        <div class="dr_wrapper text-center ">
                            <img src="assets/img/slippers/deer.jpg" class="card-img-top img-fluid" alt="Deer Slippers" />
                        </div>
                        <a class="card-img-overlay" href="slippers.html">
                            <div class="card-body text-right p-1">
                                <h3>
                                    <span class="card-text badge badge-info dr_badge">29.99$</span>
                                </h3>
                            </div>
                        </a>
                        <div class="card-body">
                            <h4 class="card-title text-center">Deer Slippers</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            <!-- DEFINITION DE FENETRE MODALE LEGAL MENTIONS-->
    <div class="modal fade" id="modalLegalMention" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Legal Mentions</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row no-gutters">
            <div class="col-xs-6 col-md-4 art-img-content">
              <img class="card-img" src="assets/img/logo/yoshi.png" alt="Card image" />
            </div>
            <div class=" col-xs-6 col-md-8">
              <div class="card-body wildbazar-titlemodal">
                <h2>WILD BAZAR</h2>
                <p class="card-text art-descr">Images and data on this site are subject to copyright.</p>
                <p class="card-text art-descr">Some images used come from proprietary website and must be used after
                  acceptance of the owner.</p>
                <h3>© Yoshi Corporate - Wild Code Scool 2019</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer row  justify-content-end p-2 m-1 text-center">
          <div class="col-sm-6 col-md-4 col-lg-3 p-2">
            <button type="button" class="btn btn-danger  w-100" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>

    </div>

    <!-- Footer -->
    <div class="container-fluid p-0 mt-5">
        <section class="col-2 ss-style-triangles_white mx-auto my-5"></section>
        <!-- Footer -->
        <footer>

            <div class="container mt-5 pt-5">
                <div class="row text-white p-3 mt-3 ">
                    <div class="col-md-6 col-lg-6">
                        <div class="row">
                            <ul>
                                <li><a href="#nawalNavbar">Home</a></li>
                                <li><a href="#categories">Categories</a></li>
                                <li><a href="#aboutus">About us</a></li>
                                <li><a href="#topselling">Top Selling</a></li>
                                <li><a href="Legalmentions" data-toggle="modal" data-target="#modalLegalMention">Legal mentions</a></li>
                            </ul>
                            <ul class="ml-5 pl-5">
                                <li class="ml-3"><a href="clothes.html">Clothes</a></li>
                                <li class="ml-3"><a href="goodies.html">Goodies</a></li>
                                <li class="ml-3"><a href="kitchen.html">Kitchen</a></li>
                                <li class="ml-3"><a href="slippers.html">Slippers</a></li>
                                <li class="ml-3"><a href="figurines.html">Figurines</a></li>
                            </ul>
                        </div>

                        <div class="col-md-12 col-lg-12 ">
                            <img src="https://avatars3.githubusercontent.com/u/8874047?s=200&v=4" alt="logo wild" class="logodpwild float-left mr-3 mt-n2" />
                            <p class="mb-n2">Wild Bazar</p>
                            <ul class="marginadresse">
                                <li>1, rue de la paix</li>
                                <li>75000 Paris</li>
                                <li>01-23-45-67-89</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6">
                        <form>
                            <fieldset class="d-flex justify-content-center offset-md-2">
                                <h2>Contact us</h2>
                            </fieldset>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="staticEmail" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Message</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center offset-md-2">
                                <button type="button" class="btn btn-dark">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="assets/js/modal.js"></script>
    <!-- Script d'effet de texte de titre majeur -->
      <script src="assets/js/scroll.js"></script>
</body>

</html>
