<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/images/icon.png" type="image/png">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/media-query.css">
    <link rel="stylesheet" href="../styles/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b6c7ae2a7c.js" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
<body>
    <img src="../assets/images/exit.png" alt="letter X" class="exit">
    <input type="checkbox" class="exit-button">
    <div class="content-menu disappear">
        <div class="border-menu">
            <nav class="menu">
                <ul>
                    <img src="../assets/images/icon.png" alt="Chicken" class="icon">
                    <li><a href="../pages/account.php">Account</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#creator">Creator</a></li>
                    <li><a href="#characters">Characters</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container-image">
        <div class="img-front"></div>
        <img src="../assets/images/download.jpg" class="img-back" alt="background image">
        <img src="../assets/images/bird.gif" alt="flying bird" class="bird-front">
        <div class="text">
            <!-- <h1>Little Farm</h1> -->
             <img src="../assets/images/logo.png" alt="">
            <p> A site made for <a href="">Stardew Valley</a> fans.</p>
        </div>
    </div>
    <div class="about" id="about">
        <div class="left">
            <img src="../assets/images/farm.png" alt="">
        </div>
        <div class="right">
            <h1>About</h1>
            <p>Stardew Valley is a farming simulation game developed by ConcernedApe, where players can cultivate their own farm, raise animals, mine resources, fish, and interact with the local community.</p>
            <p>The game is set in a charming pixel art world and offers a relaxing and immersive experience. Players can customize their farms, grow crops, and build relationships with the villagers.</p>
            <p>Stardew Valley has received critical acclaim for its gameplay, depth, and nostalgic charm, making it a beloved title among fans of the genre.</p>
            </div>  
    </div>
    <div class="creator" id="creator">
        <div class="left">
            <h1>Creator</h1>
            <p>The creator of Stardew Valley is <a href="https://pt.wikipedia.org/wiki/Eric_Barone"><b>Eric Barone</b></a>, also known by the pseudonym ConcernedApe.</p>
            <p>He developed the game almost entirely by himself: he programmed, wrote the story, composed the soundtrack, and created the graphics. The game was released in 2016 and became a huge success with both critics and the public, being inspired by games like Harvest Moon.</p>
            <p>Since then, Barone has continued to work on updates for Stardew Valley and is also developing a new game called Haunted Chocolatier.</p>
        </div>
        <div class="right">
            <a href="https://pt.wikipedia.org/wiki/Eric_Barone">
                <img src="../assets/images/creator.png" class="creator-img" alt="Eric Barone">
            </a>
        </div>
    </div>
    <div class="characters" id="characters">
      <div class="characteres-content">
      <h1>Characters</h1>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">

            <!-- Slide 1 -->
            <div class="carousel-item active">
              <div class="d-flex justify-content-center gap-3">
                 <div class="card-border">
                    <div class="card" style="width: 18rem;">
                      <img src="../assets/images/robin.png" class="card-img-top" alt="Robin">
                      <div class="card-body">
                        <p class="card-text">The energetic carpenter who's always working on something new.</p>
                        <a href="https://stardewvalleywiki.com/Robin" class="btn btn-primary">See more</a>
                      </div>
                    </div>
                </div>
                <div class="card-border">
                  <div class="card" style="width: 18rem;">
                    <img src="../assets/images/lewis.png" class="card-img-top" alt="Lewis">
                    <div class="card-body">
                      <p class="card-text">The quiet mayor who keeps the town running and its secrets safe.</p>
                      <a href="https://stardewvalleywiki.com/Lewis" class="btn btn-primary">See more</a>
                    </div>
                  </div>
                </div>
                <div class="card-border">
                  <div class="card" style="width: 18rem;">
                    <img src="../assets/images/gunther.png" class="card-img-top" alt="Gunther">
                    <div class="card-body">
                      <p class="card-text">The museum curator with a passion for unearthing Pelican Town’s past.</p>
                      <a href="https://stardewvalleywiki.com/Gunther" class="btn btn-primary">See more</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
              <div class="d-flex justify-content-center gap-3">

              <div class="card-border">
                <div class="card" style="width: 18rem;">
                  <img src="../assets/images/penny.png" class="card-img-top" alt="Penny">
                  <div class="card-body">
                    <p class="card-text">A gentle soul who finds peace in books and teaching children.</p>
                    <a href="https://stardewvalleywiki.com/Penny" class="btn btn-primary">See more</a>
                  </div>
                </div>
                </div>  
                <div class="card-border">
                <div class="card" style="width: 18rem;">
                  <img src="../assets/images/emily.png" class="card-img-top" alt="Emily">
                  <div class="card-body">
                    <p class="card-text">Vibrant and free-spirited, she sees beauty and magic in the everyday.</p>
                    <a href="https://stardewvalleywiki.com/Emily" class="btn btn-primary">See more</a>
                  </div>
                </div>
                </div>
                <div class="card-border">
                <div class="card" style="width: 18rem;">
                  <img src="../assets/images/sebastian.png" class="card-img-top" alt="Sebatian">
                  <div class="card-body">
                    <p class="card-text">A brooding loner who finds comfort in code, rain, and solitude.</p>
                    <a href="https://stardewvalleywiki.com/Sebastian" class="btn btn-primary">See more</a>
                  </div>
                </div>
                </div>
              </div>
            </div>

        <!-- Slide 3 -->
              <div class="carousel-item">
              <div class="d-flex justify-content-center gap-3">
                <div class="card-border">
                <div class="card" style="width: 18rem;">
                  <img src="../assets/images/abigail.png" class="card-img-top" alt="Abigail">
                  <div class="card-body">
                    <p class="card-text">Quirky, she loves adventure, games, and the supernatural</p>
                    <a href="https://stardewvalleywiki.com/Abigail  " class="btn btn-primary">See more</a>
                  </div>
                </div>
                </div>
                <div class="card-border">
                <div class="card" style="width: 18rem;">
                  <img src="../assets/images/elliott.png" class="card-img-top" alt="Elliott">
                  <div class="card-body">
                    <p class="card-text">A poetic dreamer living by the sea, forever chasing inspiration.</p>
                    <a href="https://stardewvalleywiki.com/Elliott" class="btn btn-primary">See more</a>
                  </div>
                </div>
                </div>
                <div class="card-border">
                <div class="card" style="width: 18rem;">
                  <img src="../assets/images/wizard.png" class="card-img-top" alt="Wizard">
                  <div class="card-body">
                    <p class="card-text">A mysterious man who delves into the arcane to protect the valley.</p>
                    <a href="https://stardewvalleywiki.com/Wizard" class="btn btn-primary">See more</a>
                  </div>
                </div>
                </div>
              </div>
            </div>

          </div>

          <!-- Controles -->
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <i class="fa-solid fa-arrow-left"></i>
              </svg>
            <span class="visually-hidden">Anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <i class="fa-solid fa-arrow-right"></i>
          </svg>
            <span class="visually-hidden">Próximo</span>
          </button>
        </div>
  </div>
</div>

<div class="footer">
  <img src="../assets/images/Oak_tree_portrait.png" alt="tree" class="tree disappear">
  <div class="content-footer">
    <div class="icons-game"> 
      <a href="https://store.steampowered.com/app/413150/Stardew_Valley/" target="_blank">
        <i class="fa-brands fa-steam"></i>
      </a>
      <a href="https://play.google.com/store/apps/details?id=com.chucklefish.stardewvalley&hl=en" target="_blank">
        <i class="fa-brands fa-google-play"></i>
      </a>
      <a href="https://www.xbox.com/en-us/games/store/stardew-valley/c3d891z6tnqm" target="_blank">
        <i class="fa-brands fa-xbox"></i>
      </a>
    </div>


    <!-- Copyright notice and disclaimer -->
    <p>
      Stardew Valley &copy; ConcernedApe. <b>All rights reserved.</b><br>
      This is a fan-made website and is not affiliated with or endorsed by ConcernedApe.
    </p>

    <!-- Creator credits -->
    <p>
      Created by Beatriz |
      <a href="https://github.com/beaxx" target="_blank">
        <i class="fa-brands fa-github"></i>
      </a>
      <a href="https://www.linkedin.com/in/beatriz-oliveira2007" target="_blank">
        <i class="fa-brands fa-linkedin"></i>
      </a>
    </p>
    2025
  </div>
   <img src="../assets/images/Oak_tree_portrait.png" alt="tree" class="tree">
</div>


    <script>
        const front = document.querySelector('.img-front');

        window.addEventListener('scroll', () => {
            if(window.scrollY > 0) {
                front.style.backgroundRepeat = 'repeat-x';
                const scrollX = window.scrollY * 0.8;
                front.style.backgroundPositionX = `-${scrollX}px`;
            } else {
                front.style.backgroundRepeat = 'no-repeat';
                front.style.backgroundPositionX = '0px';
            }
        });

    </script>

</body>
</html>