<<!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./Content/css/admin.css">
    <script type="text/javascript" src="./Content/js/admin.js"></script>
    <title></title>
  </head>

  <body>

    <svg style="display:none;">

      <symbol id="down" viewBox="0 0 16 16">
        <polygon points="3.81 4.38 8 8.57 12.19 4.38 13.71 5.91 8 11.62 2.29 5.91 3.81 4.38" />
      </symbol>
      <symbol id="users" viewBox="0 0 16 16">
        <path d="M8,0a8,8,0,1,0,8,8A8,8,0,0,0,8,0ZM8,15a7,7,0,0,1-5.19-2.32,2.71,2.71,0,0,1,1.7-1,13.11,13.11,0,0,0,1.29-.28,2.32,2.32,0,0,0,.94-.34,1.17,1.17,0,0,0-.27-.7h0A3.61,3.61,0,0,1,5.15,7.49,3.18,3.18,0,0,1,8,4.07a3.18,3.18,0,0,1,2.86,3.42,3.6,3.6,0,0,1-1.32,2.88h0a1.13,1.13,0,0,0-.27.69,2.68,2.68,0,0,0,.93.31,10.81,10.81,0,0,0,1.28.23,2.63,2.63,0,0,1,1.78,1A7,7,0,0,1,8,15Z" />
      </symbol>
      <symbol id="collection" viewBox="0 0 16 16">
        <rect width="7" height="7" />
        <rect y="9" width="7" height="7" />
        <rect x="9" width="7" height="7" />
        <rect x="9" y="9" width="7" height="7" />
      </symbol>
      <symbol id="charts" viewBox="0 0 16 16">
        <polygon points="0.64 7.38 -0.02 6.63 2.55 4.38 4.57 5.93 9.25 0.78 12.97 4.37 15.37 2.31 16.02 3.07 12.94 5.72 9.29 2.21 4.69 7.29 2.59 5.67 0.64 7.38" />
        <rect y="9" width="2" height="7" />
        <rect x="12" y="8" width="2" height="8" />
        <rect x="8" y="6" width="2" height="10" />
        <rect x="4" y="11" width="2" height="5" />
      </symbol>
      <symbol id="comments" viewBox="0 0 16 16">
        <path d="M0,16.13V2H15V13H5.24ZM1,3V14.37L5,12h9V3Z" />
        <rect x="3" y="5" width="9" height="1" />
        <rect x="3" y="7" width="7" height="1" />
        <rect x="3" y="9" width="5" height="1" />
      </symbol>
      <symbol id="pages" viewBox="0 0 16 16">
        <rect x="4" width="12" height="12" transform="translate(20 12) rotate(-180)" />
        <polygon points="2 14 2 2 0 2 0 14 0 16 2 16 14 16 14 14 2 14" />
      </symbol>
      <symbol id="appearance" viewBox="0 0 16 16">
        <path d="M3,0V7A2,2,0,0,0,5,9H6v5a2,2,0,0,0,4,0V9h1a2,2,0,0,0,2-2V0Zm9,7a1,1,0,0,1-1,1H9v6a1,1,0,0,1-2,0V8H5A1,1,0,0,1,4,7V6h8ZM4,5V1H6V4H7V1H9V4h1V1h2V5Z" />
      </symbol>
      <symbol id="trends" viewBox="0 0 16 16">
        <polygon points="0.64 11.85 -0.02 11.1 2.55 8.85 4.57 10.4 9.25 5.25 12.97 8.84 15.37 6.79 16.02 7.54 12.94 10.2 9.29 6.68 4.69 11.76 2.59 10.14 0.64 11.85" />
      </symbol>



      <symbol id="search" viewBox="0 0 16 16">
        <path d="M6.57,1A5.57,5.57,0,1,1,1,6.57,5.57,5.57,0,0,1,6.57,1m0-1a6.57,6.57,0,1,0,6.57,6.57A6.57,6.57,0,0,0,6.57,0Z" />
        <rect x="11.84" y="9.87" width="2" height="5.93" transform="translate(-5.32 12.84) rotate(-45)" />
      </symbol>
    </svg>
    <header class="page-header">
      <nav>
        <center>
          <a href="?controller=home"><img src="./Content/img/logocore.png" width="100" height="100%" style="background-color: white;"></a>
        </center>

        <button class="toggle-mob-menu" aria-expanded="false" aria-label="open menu">
          <svg width="20" height="20" aria-hidden="true">
            <use xlink:href="#down"></use>
          </svg>
        </button>
        <ul class="admin-menu">
          <li class="menu-heading">
            <h3>Menu</h3>
          </li>
          <li>
            <a href="?controller=informations">
              <svg>
                <use xlink:href="#pages"></use>
              </svg>
              <span>Informations</span>
            </a>
          </li>
          <li>
            <a href="?controller=commandes">
              <svg>
                <use xlink:href="#trends"></use>
              </svg>
              <span>Commandes</span>
            </a>
          </li>
          <li>
            <a href="?controller=aide">
              <svg>
                <use xlink:href="#collection"></use>
              </svg>
              <span>Aide & contact</span>
            </a>
          </li>
          <li>
            <a href="#0">
              <svg>

              </svg>
              <span><a href="?controller=deconnexion&action=deconnecter">Deconnexion</a></span>
            </a>
          </li>

        </ul>
      </nav>
    </header>
    <section class="page-content">
      <section class="search-and-user">
        <form>
          <input type="search" placeholder="Search Pages...">
          <button type="submit" aria-label="submit form">
            <svg aria-hidden="true">
              <use xlink:href="#search"></use>
            </svg>
          </button>
        </form>
        <div class="admin-profile">
          <span class="greeting">Hello <?= $_SESSION['user']['Prenom'] ?></span>
          <div class="notifications">
            <span class="badge">1</span>
            <svg>
              <use xlink:href="#users"></use>
            </svg>
          </div>
        </div>
      </section>
      <section class="grid">



        <article>

        </article>

        <article>

        </article>
        <article>

        </article>
      </section>
      <?php require "view_end.php" ?>