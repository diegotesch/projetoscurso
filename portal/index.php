<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
  <script src="./assets/js/script.js"></script>
  <title>Document</title>
</head>
<body>
  <div class="topo">
    <div class="topoint">
      <div class="topoleft">
        <ul>
          <li><a href="./" class="ativo">Home</a></li>
          <li><a href="quem-somos">Quem Somos</a></li>
          <li><a href="anuncie-aqui">Anuncie Aqui</a></li>
          <li><a href="contato">Contato</a></li>
        </ul>
      </div>
      <div class="toporight">
        <input type="image" src="./assets/images/lupa.png" alt="" width="26" height="26" border="0">
        <input type="text" name="busca" placeholder="busca..." class="topobusca" />
        <a href=""><img src="./assets/images/facebook.png" alt="" border="0" width="26" height="26" /></a>
        <a href=""><img src="./assets/images/google-plus.png" alt="" border="0" width="26" height="26" /></a>
        <a href=""><img src="./assets/images/instagram.png" alt="" border="0" width="26" height="26" /></a>
        <a href=""><img src="./assets/images/linkedin.png" alt="" border="0" width="26" height="26" /></a>
      </div>
    </div>
  </div>
  <div class="topo2">
    <div class="topo2int">
      <div class="logo">
        <img src="./assets/images/logo.png" border="0" width="230" />
      </div>
      <div class="banner"></div>
    </div>
  </div>
  <div class="menu">
    <div class="menuint">
      <ul>
        <li><a href="./" class="ativo">Home</a></li>
        <li><a href="./" class="">Economia</a></li>
        <li>
          <a href="./" class="">Entretenimento</a>
          <img src="./assets/images/drop-down-arrow.png" border="0" width="10" />
          <div class="submenu">
            <a href=""><div class="submenuitem">Sub menu 1</div></a>
            <a href=""><div class="submenuitem">Sub menu 2</div></a>
            <a href=""><div class="submenuitem">Sub menu 3</div></a>
            <a href=""><div class="submenuitem">Sub menu 4</div></a>
            <a href=""><div class="submenuitem">Sub menu 5</div></a>
          </div>
        </li>
        <li>
          <a href="./" class="">Esportes</a>
          <img src="./assets/images/drop-down-arrow.png" border="0" width="10" />
          <div class="submenu">
            <a href=""><div class="submenuitem">Sub menu 1</div></a>
            <a href=""><div class="submenuitem">Sub menu 2</div></a>
            <a href=""><div class="submenuitem">Sub menu 3</div></a>
          </div>
        </li>
        <li><a href="./" class="">Geral</a></li>
        <li>
          <a href="./" class="">Noticias</a>
          <img src="./assets/images/drop-down-arrow.png" border="0" width="10" />
          <div class="submenu">
            <a href=""><div class="submenuitem">Sub menu 1</div></a>
            <a href=""><div class="submenuitem">Sub menu 2</div></a>
            <a href=""><div class="submenuitem">Sub menu 3</div></a>
            <a href=""><div class="submenuitem">Sub menu 4</div></a>
            <a href=""><div class="submenuitem">Sub menu 5</div></a>
            <a href=""><div class="submenuitem">Sub menu 6</div></a>
            <a href=""><div class="submenuitem">Sub menu 7</div></a>
          </div>
        </li>
        <li><a href="./" class="">Política</a></li>
        <li><a href="./" class="">Vídeos</a></li>
      </ul>
    </div>
  </div>
  <div class="ultimasnoticias">
    <div class="ultimasnoticiasint">
      <div class="ultnoticiasarea">
        <div class="ultnoticiastitulo">
          ÚLTIMAS NOTÍCIAS
        </div>
        <div class="ultnoticiasnoticia">
          Alguma notícia de algum texto que será exibido
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="containerint">
      <div class="leftside">
        <div class="slideshow" id="slideshow">
          <div class="slidebolinhas">
            <div class="bolinha" onclick="mudarSlide(0)"></div>
            <div class="bolinha" onclick="mudarSlide(1)"></div>
            <div class="bolinha" onclick="mudarSlide(2)"></div>
            <div class="bolinha" onclick="mudarSlide(3)"></div>
          </div>
          <div class="slideshowarea">
            <a href="http://google.com.br">
              <div class="slide" style="background-image: url('http://www.google.com.br/google.jpg');">
                <div class="slideinfo">
                  <div class="slideinfo_titulo">
                    Titulo de Teste
                  </div>
                  <div class="slideinfo_subtitulo">
                    Subtitulo de teste
                  </div>
                </div>
              </div>
            </a>
            <a href="http://google.com.br">
              <div class="slide" style="background-image: url('http://www.google.com.br/google.jpg');">
                <div class="slideinfo">
                  <div class="slideinfo_titulo">
                    Titulo de Teste
                  </div>
                  <div class="slideinfo_subtitulo">
                    Subtitulo de teste
                  </div>
                </div>
              </div>
            </a>
            <a href="http://google.com.br">
              <div class="slide" style="background-image: url('http://www.google.com.br/google.jpg');">
                <div class="slideinfo">
                  <div class="slideinfo_titulo">
                    Titulo de Teste
                  </div>
                  <div class="slideinfo_subtitulo">
                    Subtitulo de teste
                  </div>
                </div>
              </div>
            </a>
            <a href="http://google.com.br">
              <div class="slide" style="background-image: url('http://www.google.com.br/google.jpg');">
                <div class="slideinfo">
                  <div class="slideinfo_titulo">
                    Titulo de Teste
                  </div>
                  <div class="slideinfo_subtitulo">
                    Subtitulo de teste
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="widget">
          <div class="widget_titulo">
            NOTICIAS
          </div>
          <div class="widget_conteudo">
            <div class="noticiaarea1">
              <div class="noticiaitem noticiabig">
                <div class="noticiaimg">
                  <img src="" border="0" width="80" height="80" />
                </div>
                <div class="noticiatitulo">
                  Algum titulo Algum titulo Algum titulo Algum titulo
                </div>
                <div class="noticiainfo">
                  500 comentários
                </div>
              </div>
            </div>

            <div class="noticiaarea2">
              <div class="noticiaitem">
                <div class="noticiaimg">
                  <img src="" border="0" width="80" height="80" />
                </div>
                <div class="noticiatitulo">
                  Algum titulo
                </div>
                <div class="noticiainfo">
                  500 comentários
                </div>
              </div>

              <div class="noticiaitem">
                <div class="noticiaimg">
                  <img src="" border="0" width="80" height="80" />
                </div>
                <div class="noticiatitulo">
                  Algum titulo
                </div>
                <div class="noticiainfo">
                  500 comentários
                </div>
              </div>

              <div class="noticiaitem">
                <div class="noticiaimg">
                  <img src="" border="0" width="80" height="80" />
                </div>
                <div class="noticiatitulo">
                  Algum titulo
                </div>
                <div class="noticiainfo">
                  500 comentários
                </div>
              </div>

              <div class="noticiaitem">
                <div class="noticiaimg">
                  <img src="" border="0" width="80" height="80" />
                </div>
                <div class="noticiatitulo">
                  Algum titulo
                </div>
                <div class="noticiainfo">
                  500 comentários
                </div>
              </div>
            </div>
            <div style="clear:both"></div>
          </div>
        </div>

        <div class="widget">
          <div class="widget_titulo">
            ESPORTES
          </div>
          <div class="widget_conteudo">
            <div class="noticiaarea1">
              <div class="noticiaitem noticiabig">
                <div class="noticiaimg">
                  <img src="" border="0" width="80" height="80" />
                </div>
                <div class="noticiatitulo">
                  Algum titulo
                </div>
                <div class="noticiainfo">
                  500 comentários
                </div>
              </div>
            </div>

            <div class="noticiaarea2">
              <div class="noticiaitem">
                <div class="noticiaimg">
                  <img src="" border="0" width="80" height="80" />
                </div>
                <div class="noticiatitulo">
                  Algum titulo
                </div>
                <div class="noticiainfo">
                  500 comentários
                </div>
              </div>

              <div class="noticiaitem">
                <div class="noticiaimg">
                  <img src="" border="0" width="80" height="80" />
                </div>
                <div class="noticiatitulo">
                  Algum titulo
                </div>
                <div class="noticiainfo">
                  500 comentários
                </div>
              </div>

              <div class="noticiaitem">
                <div class="noticiaimg">
                  <img src="" border="0" width="80" height="80" />
                </div>
                <div class="noticiatitulo">
                  Algum titulo
                </div>
                <div class="noticiainfo">
                  500 comentários
                </div>
              </div>
            </div>
            <div style="clear:both"></div>
          </div>
        </div>

      </div>
      <div class="rigthside">
        <div class="widget">
          <div class="widget_titulo">
            SOCIAL
          </div>
          <div class="widget_conteudo">
            <a href=""><img src="./assets/images/linkedin.png" alt="" border="0" width="26" height="26" /></a>
            <a href=""><img src="./assets/images/instagram.png" alt="" border="0" width="26" height="26" /></a>
            <a href=""><img src="./assets/images/google-plus.png" alt="" border="0" width="26" height="26" /></a>
            <a href=""><img src="./assets/images/facebook.png" alt="" border="0" width="26" height="26" /></a>
          </div>
        </div>

        <div class="widget">
          <div class="widget_titulo">
            ULTIMAS NOTÍCIAS
          </div>
          <div class="widget_conteudo">
            <div class="noticia_item">
              <a href="./">
                Título da notícia para que fique com pelo menos duas linhas. 
              </a>
            </div>
            <div class="noticia_item">
              <a href="./">
                Título da notícia para que fique com pelo menos duas linhas. 
              </a>
            </div>
            <div class="noticia_item">
              <a href="./">
                Título da notícia para que fique com pelo menos duas linhas. 
              </a>
            </div>
            <div class="noticia_item">
              <a href="./">
                Título da notícia para que fique com pelo menos duas linhas. 
              </a>
            </div>
            <div class="noticia_item">
              <a href="./">
                Título da notícia para que fique com pelo menos duas linhas. 
              </a>
            </div>
          </div>
        </div>

        <div class="widget">
          <div class="widget_titulo">
            PUBLICIDADE
          </div>
          <div class="widget_conteudo">
            <a href=""><img src="./assets/images/banner.jpg" border="0" width="273" /></a>
          </div>
        </div>

        <div class="widget">
          <div class="widget_titulo">
            ENCONTRE-NOS NO FACEBOOK
          </div>
          <div class="widget_conteudo">
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FPetMatilha-372302439773968%2F&tabs&width=273&height=154&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=179819809226284" width="340" height="154" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>