<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@600;700&display=swap" rel="stylesheet">
    <title>Patrick's Personal website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
      html{
        scroll-padding: 56px;
      }
    /* modals */
    
    /* modals */

    /* header */
    .navbar-brand{
      font-family: 'Lexend Deca';
      font-weight: 600;
    }
    .jumbotron{
      height: 100vh;
    }
    .jumbotron::before{
      content: "";
      background-image: url('jumbotron_pld.webp')!important;
      background-size: cover;
      background-position-x: right;
      background-position-y: bottom;
      position: absolute;
      top: 0px;
      right: 0px;
      bottom: 0px;
      left: 0px;
      opacity: .5;
    }
    h1{
      position: relative;
      font-size: 11vw;
    }

    /* header */

    /* about section */
    .about-section .row{
      min-height: 75vh;
    }
    .image-col{
      height: 300px;
    }
    .padded{
      padding: 50px;
    }
    .image-1, .image-2{
      background-color: #212529;
      position: relative;
    }
    .image-1::before{
      content: "";
      background-image: url('about_1.webp');
      background-size: cover;
      background-position: center;
      position: absolute;
      top: 0px;
      right: 0px;
      bottom: 0px;
      left: 0px;
      opacity: .5;
    }
    .image-2::before{
      content: "";
      background-image: url('about_2.webp');
      background-size: cover;
      background-position: center;
      position: absolute;
      top: 0px;
      right: 0px;
      bottom: 0px;
      left: 0px;
      opacity: .5;
    }
    /* about section */

    /* quotes */
    .quotes p{
      letter-spacing: 2px;
    }
    /* quotes */

    /* exp section */
    .exp-section{
      padding-top: 70px;
    }
    .exp-section hr{
      width: 50%;
      height: 4px;
      border-width:0;
      color:black;
      background-color:black;
      margin: auto;
    }
    .exp-section h2{
      font-size: 9vw;
    }
    .exp-section .d-flex .btn-danger, .exp-section .d-flex .btn-warning{
      height: 31px;
    }
    .rounded-circle{
      background-color: grey;
      width: 72px;
      font-size: 24px;
      padding: 18px;
    }
    .btn.rounded-circle:hover{
      background-color: #212529;
    }
    /* exp section */


    /* working with */
    .working-with hr{
      height: 1px;
      border-width:0;
      color:white;
      background-color:white;
      opacity: 1;
    }
    .work-list .d-flex{
      height: 30px;
    }
    /* working with */

    /* footer */
    footer a{
      color: #212529;
      text-decoration: none;
    }
    footer a:hover{
      text-decoration: underline;
    }
    /* footer */
    @media (min-width: 768px) {
      h1{
      font-size: 7vw;
    }
    .padded{
      padding: 72px;
    }
    .image-col{
      height: auto;
    }
    .exp-section hr{
      width: 30%;
      margin: 0;
    }
    .exp-section h2{
      font-size: 6vw;
      width: 50%;
    }
    .exp-section{
      padding-top: 100px;
    }
    .exp-section p, .exp-section h3{
      margin-left: 28px!important;
    }
    .exp-section .d-flex{
      justify-content: flex-start!important;
    }
    .work-list{
      padding-left: 150px;
      padding-right: 150px;
      height: 160px;
      overflow: scroll;
    }
    .work-list::-webkit-scrollbar {
      display: none;
    }
    }
    </style>
</head>
  <body>
    <header>
      <!-- navbar -->
      <nav class="navbar navbar-expand-lg bg-light fixed-top">
        <div class="container d-flex">
          <a class="navbar-brand" href="#">Patrick Leredawa</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link" href="#about">About</a>
              <a class="nav-link" href="#exp">Portfolio</a>
              <a class="nav-link" href="#footer">Contact</a>
              <a class="nav-link"></a>
            </div>
          </div>
        </div>
      </nav>
      <!-- navbar -->

      <!-- Background image -->
      <div class="container-fluid bg-dark p-0">
        <div class="container-fluid jumbotron">
          <div class="container h-100 d-flex align-items-center">
            <h1 class="border border-3 border-white p-4 text-white mt-5 mx-auto mx-md-0">
                PATRICK<br>
                JEREMIAH<br>
                LERE DAWA
            </h1>
          </div>
        </div>
      </div>
      <!-- Background image -->
    </header>
    <main>
      <!-- about section -->
      <div class="container-fluid p-0 about-section h-100" id="about">
        <div class="row m-0">
          <div class="col-md-6 padded">
            <h2>Hi!</h2>
            <p class="text-muted">My name is Patrick. I am just an ordinary kid from Malang. I may not be anyone special right now, but my potential and passion for life are boundless.</p>
          </div>
          <div class="col-md-6 p-0 image-col image-1">

          </div>
          <div class="col-md-6 p-0 d-none d-md-block image-col image-2">

          </div>
          <div class="col-md-6 padded">
            <h2>My Hobbies</h2>
            <p class="text-muted">I like to play guitar, do sports, and video games. Music is emotional, sports keep me active, and games develop my thinking.</p>
          </div>
          <div class="col-md-6 p-0 d-md-block image-col image-2">

          </div>
        </div>
      </div>
      <!-- about section -->

      <!-- quotes -->
      <div class="container-fluid bg-light bg-gradient p-5 text-center quotes">
        <p class="text-primary">
          <b>FAV QUOTES</b>
        </p>
        <h2>"Just do the right things, don't mind other people saying"</h2>
      </div>
      <!-- quotes -->

      <!-- experience section -->
      <div class="container exp-section text-center text-md-start" id="exp">
        <hr>
        <h2 class="mt-4 mb-5">My Experiences and Achievements</h2>
        <div class="row">
          <?php $__currentLoopData = $exps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$exp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="exp-col col-md-6 mb-5 d-flex flex-column">
            <div class="rounded-circle text-white text-center mb-4 mx-auto mx-md-0"><b><?php echo e(++$key); ?></b></div>
            <div class="d-flex justify-content-center">
              <h3 class="mb-3"><?php echo e($exp->name); ?></h3>
              <?php if(Session::get('Username') != NULL): ?>
              <button class="btn btn-sm btn-warning mx-3 mb-3" data-bs-toggle="modal" data-bs-target="#editExp<?php echo e($exp->ID); ?>"">
                <i class="fa-regular fa-pen-to-square"></i>
              </button>
              <button class="btn btn-sm btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#delExp<?php echo e($exp->ID); ?>">
                <i class="fa-regular fa-trash-can"></i>
              </button>
              <?php endif; ?>
            </div>
            <p class="text-muted mx-5 mx-md-0">
              <?php echo e($exp->detail); ?>

            </p>
          </div>
          <div class="modal fade" id="delExp<?php echo e($exp->ID); ?>"aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-dark">Delete experience or achievement</h1>
                        </div>
                    <div class="modal-body text-center">
                        <p class="text-muted">Are you sure want to delete this experience?</p>
                        <form method="POST" action="<?php echo e(url('/exp/'.$exp->ID)); ?>">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="button submit"class="btn btn-danger rounded-0">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="editExp<?php echo e($exp->ID); ?>"aria-hidden="true" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content rounded-0">
              <div class="modal-header">
                <h1 class="modal-title fs-5">Edit experience or achievement</h1>
              </div>
              <div class="modal-body">
                <form method="POST" action="<?php echo e(url('/exp/'.$exp->ID)); ?>">
                  <?php echo method_field('PATCH'); ?>
                  <?php echo csrf_field(); ?>
                  <div class="mb-3">
                    <label for="name" class="col-form-label">Experience Name</label>
                    <input type="text" class="form-control rounded-0" name="name" value="<?php echo e($exp->name); ?>" required>
                  </div>
                
                  <div class="mb-3">
                      <label for="detail" class="col-form-label">Experience Detail</label>
                      <input type="text" class="form-control rounded-0" name="detail" value="<?php echo e($exp->detail); ?>" required>
                  </div>
          
                  <button type="submit" class="btn btn-warning float-end rounded-0">Edit</button>
                </form>
  
              </div>
              
            </div>
          </div>
        </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php if(Session::get('Username') != NULL): ?>
          <div class="exp-col col-md-6 mb-5 d-flex flex-column">
            <button class="btn rounded-circle text-white text-center mb-4 mx-auto mx-md-0"  data-bs-toggle="modal" data-bs-target="#addExp"><b>+</b></button>
            <h3 class="mb-3">Add new experience or achievement</h3>
            <p class="text-muted mx-5 mx-md-0">
              click the '+' button above
            </p>
          </div>
          <div class="modal fade" id="addExp"aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
              <div class="modal-content rounded-0">
                <div class="modal-header">
                  <h1 class="modal-title fs-5">Add new experience</h1>
                </div>
                <div class="modal-body">
                  <form method="POST" action="<?php echo e(url('/exp')); ?>">
                    <?php echo method_field('POST'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                      <label for="nm" class="col-form-label">Experience Name</label>
                      <input type="text" class="form-control rounded-0" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="dt" class="col-form-label">Experience Detail</label>
                        <input type="text" class="form-control rounded-0" name="detail">
                    </div>
                    <button type="submit" class="btn btn-primary float-end rounded-0">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <!-- experience section -->
      <!-- working with -->
      <div class="container-fluid bg-dark bg-gradient pt-4 pb-5 px-5 text-center text-white ">
        <div class="container working-with">
          <h3 class="mb-3">I am working with:</h3>
          <div class="work-list">
            <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="d-flex justify-content-center">
              <p class="mb-0 mt-1"><?php echo e($skill->name); ?></p>
            <?php if(Session::get('Username') != NULL): ?>
              <button class="btn btn-sm btn-outline-light ms-2" data-bs-toggle="modal" data-bs-target="#delSkill<?php echo e($skill->ID); ?>">
                <i class="fa-regular fa-trash-can"></i>
              </button>
              <div class="modal fade" id="delSkill<?php echo e($skill->ID); ?>"aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content rounded-0">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 text-dark">Delete skill</h1>
                            </div>
                        <div class="modal-body">
                            <p class="text-muted">Are you sure want to delete this skill?</p>
                            <form method="POST" action="<?php echo e(url('/skill/'.$skill->ID)); ?>">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="button submit"class="btn btn-danger rounded-0">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
              <?php endif; ?>
            </div>
            <hr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php if(Session::get('Username') != NULL): ?>
            <button class="btn add-btn bg-none text-light" data-bs-toggle="modal" data-bs-target="#addSkill">
              <i class="fa-solid fa-plus me-2"></i>add new</button>
              <div class="modal fade" id="addSkill"aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                  <div class="modal-content rounded-0">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5 text-dark">Add new skill</h1>
                    </div>
                    <div class="modal-body">
                      <form method="POST" action="<?php echo e(url('/skill')); ?>">
                        <?php echo method_field('POST'); ?>
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                          <label for="nm" class="col-form-label text-dark float-start">Skill Name</label>
                          <input type="text" class="form-control rounded-0" name="name">
                        </div>
                        <button type="submit" class="btn btn-primary float-end rounded-0">Submit</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <!-- working with -->
    </main>
    <footer id="footer">
      <div class="container-fluid bg-light">
        <div class="container">
          <div class="row m-0 py-5">
            <div class="col-md-4">
              <h2 class="mb-3">Contact Me!</h2>
              <p class="text-muted">Hello! If you'd like to get in touch, I'd be happy to connect with you via email, Instagram, or LinkedIn. Feel free to send me a message on any of these platforms and I'll get back to you as soon as possible. Looking forward to hearing from you!</p>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-6 d-flex flex-column">
              <a href="mailto:patrickethan1902@gmail.com" class="mt-auto"><i class="fa-regular fa-envelope me-3"></i>patrickethan1902@gmail.com</a>
              <a href="https://www.instagram.com/_patrickkkkks/" class="my-2"><i class="fa-brands fa-instagram me-3"></i>_patrickkkkks</a>
              <a href="https://www.linkedin.com/in/patrick-jeremiah-lere-dawa-106b32273/" class="mb-auto"><i class="fa-brands fa-linkedin me-3"></i>Patrick Jeremiah Lere Dawa</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://kit.fontawesome.com/5c65d8dae4.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH /Users/vinchenamigo/Documents/personal_web_pld/resources/views/landing.blade.php ENDPATH**/ ?>