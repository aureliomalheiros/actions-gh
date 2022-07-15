//modal-imprensa
const modalImprensa = document.getElementById('js-modal-imprensa')
const btnImprensa = document.querySelectorAll('.item.institucional ul li').item(1)
const closeImprensa = document.querySelector('.close.js-close')

btnImprensa.addEventListener('click', () => {
  modalImprensa.classList.add('active')
})

closeImprensa.addEventListener('click', () => {
  modalImprensa.classList.remove('active')
})

modalImprensa && document.addEventListener("keydown", function(e) {
  27 == e.which && modalImprensa.classList.remove("active")})


var swiper_slide = new Swiper(".slide-banners", {
  slidesPerView: 1,
  spaceBetween: 7,
  speed: 800,
  effect: "fade",
  fadeEffect: {
    crossFade: true,
  },
  autoplay: {
    delay: 6000,
  },
  navigation: {
    prevEl: ".s-principal .btn-prev",
    nextEl: ".s-principal .btn-next",
  },
});

var swiper_logos = new Swiper(".slide-logos", {
  slidesPerView: 7,
  spaceBetween: 40,
  speed: 800,
  pagination: {
    el: ".s-falando-sobre-nos .swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".s-falando-sobre-nos .btn-next",
    prevEl: ".s-falando-sobre-nos .btn-prev",
  },
  breakpoints: {
    300: {
      slidesPerView: 1,
      loop: true,
    },
    500: {
      slidesPerView: 2.5,
    },
    900: {
      slidesPerView: 3.5,
    },
    1160: {
      slidesPerView: 4,
    },
  },
});

var galleryThumbs = new Swiper(".gallery-thumbs", {
  slidesPerView: 5,
  freeMode: true,
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
  breakpoints: {
    300: {
      loop: true,
    },
    760: {
      loop: false,
    },
    1052: {
      slidesPerView: 4,
    },
    1116: {
      slidesPerView: 5,
    },
  },
});

var swiper_valores = new Swiper(".slide-valores", {
  speed: 800,
  //autoHeight: true,
  navigation: {
    prevEl: ".s-nossos-valores .btn-prev",
    nextEl: ".s-nossos-valores .btn-next",
  },
  thumbs: {
    swiper: galleryThumbs,
  },
  breakpoints: {
    300: {
      loop: true,
    },
    760: {
      loop: false,
    },
  },
});

var swiper_time = new Swiper(".slide-time", {
  slidesPerView: 3,
  spaceBetween: 32,
  speed: 800,
  autoHeight: true,
  navigation: {
    prevEl: ".s-time .btn-prev",
    nextEl: ".s-time .btn-next",
  },
  breakpoints: {
    300: {
      slidesPerView: 1,
      spaceBetween: 8,
    },
    700: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    1100: {
      slidesPerView: 3,
      spaceBetween: 32,
    },
  },
});

var swiper_slide_galeria01 = new Swiper(".slide-galeria01", {
  slidesPerView: 1,
  spaceBetween: 7,
  speed: 800,
  pagination: {
    el: ".slide-galeria01 .swiper-pagination",
    clickable: true,
  },
  navigation: {
    prevEl: ".slide-galeria01 .btn-prev",
    nextEl: ".slide-galeria01 .btn-next",
  },
});

var swiper_slide_galeria02 = new Swiper(".slide-galeria02", {
  slidesPerView: 1,
  spaceBetween: 7,
  speed: 800,
  pagination: {
    el: ".slide-galeria02 .swiper-pagination",
    clickable: true,
  },
  navigation: {
    prevEl: ".slide-galeria02 .btn-prev",
    nextEl: ".slide-galeria02 .btn-next",
  },
});

var swiper_slide_galeria03 = new Swiper(".slide-galeria03", {
  slidesPerView: 1,
  spaceBetween: 7,
  speed: 800,
  pagination: {
    el: ".slide-galeria03 .swiper-pagination",
    clickable: true,
  },
  navigation: {
    prevEl: ".slide-galeria03 .btn-prev",
    nextEl: ".slide-galeria03 .btn-next",
  },
});

//animações
AOS.init({
  duration: 1000,
  once: true,
  disable: "mobile",
});

//scroll header
$(function () {
  $(window).on("scroll", function () {
    if ($(window).scrollTop() > 25) {
      $("header").addClass("fixed-bar");
    } else {
      $("header").removeClass("fixed-bar");
    }
  });
});

//select
$(".js-select").on("click", function () {
  $(this).parents(".select-custom").toggleClass("active");
});

$(".select-custom .drop-select li a").on("click", function () {
  let txtEscolhido = $(this).text();

  $(this)
    .parents(".select-custom")
    .find(".item-selected span")
    .text(txtEscolhido);

  $(this).parents(".select-custom").removeClass("active");
  return false;
});

//tab
const navTabs = document.querySelectorAll(".s-escritorio .navegacao-tabs li a");
const tabContent = document.querySelectorAll(
  ".s-escritorio .tab-content .tab-pane"
);

navTabs.forEach((nav, index) => {
  nav.addEventListener("click", (event) => {
    event.preventDefault();

    navTabs.forEach((link) => {
      link.classList.remove("active");
    });
    tabContent.forEach((tab) => {
      tab.classList.remove("active");
    });
    tabContent[index].classList.add("active");
    nav.classList.add("active");
  });
});

//modal contato
const btnOpenModal = document.querySelectorAll(".cta-contato");
btnOpenModal.forEach((btn) => {
  btn.addEventListener("click", (event) => {
    event.preventDefault();
    document.documentElement.classList.add("open-modal");
  });
});

$(".close").on("click", function () {
  $("html").removeClass("open-modal");
});

//dropdown
const btnDropdown = document.querySelectorAll(".btn-fonte");
btnDropdown.forEach((btn) => {
  btn.addEventListener("click", (event) => {
    event.preventDefault();
    btn.nextElementSibling.classList.toggle("active");
  });
});

const dropdown = document.querySelectorAll("header .dropdown");
dropdown.forEach((drop) => {
  drop.addEventListener("mouseleave", () => {
    drop.classList.remove("active");
  });
});

//active scroll nav
var menuItem = $("header nav ul li");
var sections = $(".section").toArray();
var activeSection = "";

// checking section on scroll
function checkSection() {
  for (var i = 0; i < sections.length; i++) {
    if ($(sections[i]).offset().top - 74 - $(window).scrollTop() < 20) {
      var id = $(sections[i]).attr("id");
      activeSection = id;
    }
  }

  if (activeSection == "") {
    $(menuItem[0]).addClass("active");
  } else if (
    $(window).scrollTop() + $(window).height() ==
    $(document).height()
  ) {
    $(menuItem).removeClass("active");
    $(menuItem[sections.length - 1]).addClass("active");
  } else {
    $(menuItem).removeClass("active");
    $("header nav ul li")
      .find('a[href="#' + activeSection + '"]')
      .parent()
      .addClass("active");
  }
}

// checking section on click
menuItem.click(function () {
  var id = $(this).find("a").attr("href");

  $("html, body").animate({ scrollTop: $(id).offset().top - 74 }, 500);

  return false;
});

checkSection();

$(window).scroll(function () {
  checkSection();
});

//beneficios mobile
$(".js-box").on("click", function () {
  $(this).toggleClass("active");
});

//menu mobile
const btnMenu = document.getElementById("js-open-menu");
function activeMenu() {
  document.documentElement.classList.toggle("menu-opened");
}
btnMenu.addEventListener("click", () => activeMenu());

//menu lang
$("header .mobile-menu .lang .item-change").click(function () {
  $(this).parents(".lang").find("ul").toggleClass("open");
  return false;
});

//tema
const btnDark = document.getElementById("theme-dark");
const btnLight = document.getElementById("theme-light");

btnDark.addEventListener("click", () => {
  document.documentElement.classList.add("theme-dark");
});

btnLight.addEventListener("click", () => {
  document.documentElement.classList.remove("theme-dark");
});

//font size
var $btnAumentar = $("#btnAumentar");
var $btnDiminuir = $("#btnDiminuir");
var $elemento = $("#content").find("*"); //encontra todos os elementos dentro do #content
var fonts = [];

function obterTamanhoFonte() {
  for (var i = 0; i < $elemento.length; i++) {
    fonts.push(parseFloat($elemento.eq(i).css("font-size")));
  }
}
obterTamanhoFonte();
$btnAumentar.on("click", function () {
  for (var i = 0; i < $elemento.length; i++) {
    ++fonts[i];
    $elemento.eq(i).css("font-size", fonts[i]);
  }
});

$btnDiminuir.on("click", function () {
  for (var i = 0; i < $elemento.length; i++) {
    --fonts[i];
    $elemento.eq(i).css("font-size", fonts[i]);
  }
});

// Integracao de vagas

const url =
  "https://carreiras.unico.io/wp-content/themes/theme-carreira/img";

(function () {
  const element = document.querySelector('#vagas')
  const topPos = element.getBoundingClientRect().top - 74 + window.pageYOffset;

  let url_vaga = window.location.pathname;

  let url_convertida = url_vaga.replace('/', '');

  if(url_convertida === 'vagas/') {
    window.scrollTo({
        top: topPos, // scroll so that the element is at the top of the view
        behavior: 'smooth' // smooth scroll
    })
  }


  

  const proxyurl = "https://cors-anywhere.herokuapp.com/";
  const token = "d2051b38-96a6-48dd-8b05-85c61e94ea22";
  fetch(
    `https://carreiras.unico.io/controller/service-gupy.php`,
    {
      headers: new Headers({
        Authorization: `Bearer ${token}`,
      }),
    }
  )
    .then((response) => response.json())
    .then((json) => {
      sessionStorage.setItem("vaga", JSON.stringify(json.results));
      sessionStorage.setItem("filtrar", JSON.stringify(json.results));

      let categorias = [];


      jQuery.each(json.results, (key, item) => {
        let itemArray = json.results[key];
        $(".s-oportunidades .content-vagas").append(
          `<a href="https://unico.gupy.io/jobs/${itemArray.id}" target="_blank" class="card-vaga">` +
            `<h3>${itemArray.name}</h3>` +
            `<ul>` +
            `<li>` +
            `<img src="${url}/pin-pink.svg" alt="icone localização" />` +
            `<span>${itemArray.addressCity}</span>` +
            `</li>` +
            `<li>` +
            `<img src="${url}/icon-perfil-pink.svg" alt="icone vagas" />` +
            `<span>${itemArray.numVacancies} ${(itemArray.numVacancies > 1) ? 'vagas' : 'vaga'}</span>` +
            `</li>` +
            `</ul>` +
            `</a>`
        );

        categorias.push(itemArray.departmentName);
      });

      
      sessionStorage.setItem('vagas-categorias', JSON.stringify(categorias))

      const uniqueSet = new Set(categorias);

      const selectCategorias = [...uniqueSet];

      fillSelectCategoria(selectCategorias);

    });
})();

$("#select-cidade ul li a").on("click", function () {
  let txt = $(this).text();
  let arrayLocal = sessionStorage.getItem("vaga");

  $(".s-oportunidades .content-vagas").empty();
  $("#select-area .drop-select").empty();
  $("#select-area .item-selected span").text("Selecione a área");

  const getCidade = (vagas) =>
    vagas.filter((obj) => obj.addressCity === `${txt}`).map((obj) => obj);

  if (txt !== "Todas as cidades") {
    sessionStorage.setItem(
      "filtrar", JSON.stringify(getCidade(JSON.parse(arrayLocal)))
    );
    getDados(getCidade(JSON.parse(arrayLocal)));
  } else {
    sessionStorage.setItem("filtrar", JSON.stringify(JSON.parse(arrayLocal)));
    getDados(JSON.parse(arrayLocal));

  }

  return false;
});

$(document).on("click", ".js-opcao", function () {
  let txt = $(this).attr("categoria");
  let opcaoEscolhida = $(this).text();
  let arrayLocal = sessionStorage.getItem("filtrar");

  $(this).parents(".select-custom").removeClass("active");
  $(this)
    .parents(".select-custom")
    .find(".item-selected span")
    .text(opcaoEscolhida);

  $(".s-oportunidades .content-vagas").empty();

  const getCategoria = (vagas) =>
    vagas.filter((obj) => obj.departmentName === `${txt}`).map((obj) => obj);

  let arrayFIltrado = getCategoria(JSON.parse(arrayLocal));

  jQuery.each(arrayFIltrado, (key, item) => {
    let itemArray = arrayFIltrado[key];
    $(".s-oportunidades .content-vagas").append(
      `<a href="https://unico.gupy.io/jobs/${itemArray.id}" target="_blank" class="card-vaga">` +
        `<h3>${itemArray.name}</h3>` +
        `<ul>` +
        `<li>` +
        `<img src="${url}/pin-pink.svg" alt="icone localização" />` +
        `<span>${itemArray.addressCity}</span>` +
        `</li>` +
        `<li>` +
        `<img src="${url}/icon-perfil-pink.svg" alt="icone vagas" />` +
        `<span>${itemArray.numVacancies} ${(itemArray.numVacancies > 1) ? 'vagas' : 'vaga'}</span>` +
        `</li>` +
        `</ul>` +
        `</a>`
    );
  });

  return false;
});

function getDados(array) {
  let categorias = [];

  jQuery.each(array, (key, item) => {
    let itemArray = array[key];
    categorias.push(`${itemArray.departmentName}`);

    $(".s-oportunidades .content-vagas").append(
      `<a href="https://unico.gupy.io/jobs/${itemArray.id}" target="_blank" class="card-vaga">` +
        `<h3>${itemArray.name}</h3>` +
        `<ul>` +
        `<li>` +
        `<img src="${url}/pin-pink.svg" alt="icone localização" />` +
        `<span>${itemArray.addressCity}</span>` +
        `</li>` +
        `<li>` +
        `<img src="${url}/icon-perfil-pink.svg" alt="icone vagas" />` +
        `<span>${itemArray.numVacancies} ${(itemArray.numVacancies > 1) ? 'vagas' : 'vaga'}</span>` +
        `</li>` +
        `</ul>` +
        `</a>`
    );

  });

  sessionStorage.setItem('vagas-categorias', JSON.stringify(categorias));

  const uniqueSet = new Set(categorias);

  const selectCategorias = [...uniqueSet];

  fillSelectCategoria(selectCategorias);
}

function fillSelectCategoria(opcoes) {
  jQuery.each(opcoes, (key, item) => {
    $("#select-area .drop-select").append(
      `<li><a href="#" class="js-opcao" categoria="${item}">${item} -  ${getNumPosicoes(item)} ${(getNumPosicoes(item) > 1) ? 'Posições' : 'Posição'}</a></li>`
    );
  });

}

function getNumPosicoes(posicao) {
  let posicoes_categoria = [];

  let arrayFiltro = JSON.parse(sessionStorage.getItem('filtrar'));

  jQuery.each(arrayFiltro, (key, item) => {
    posicoes_categoria.push([arrayFiltro[key].departmentName, arrayFiltro[key].numVacancies])
  });

  const getPosicoes = (vagas) =>
  vagas.filter((obj) => obj[0] === posicao).map((obj) => obj);

  let posicoesFiltradas = getPosicoes(posicoes_categoria);

  let posicoes = [];

  jQuery.each(posicoesFiltradas, (key, item) => {
    posicoes.push(item[1]);
  });

  return posicoes.reduce(function(acc, val) { return acc + val; }, 0);

}

$('.header ul li a')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
        // On-page links
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
            location.hostname == this.hostname
        ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top - 74
                }, 1000);
            }
        }
    });

    $('header .menu-mobile ul li a')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
      $("html").removeClass('menu-opened');
        // On-page links
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
            location.hostname == this.hostname
        ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top - 74
                }, 1000);
            }
        }
    });

    $('.btn-vaga')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
        // On-page links
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
            location.hostname == this.hostname
        ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top - 74
                }, 1000);
            }
        }
    });

//galerias
const btnGaleria = document.querySelectorAll(".s-escritorio .tab-content .tab-pane a");
const galeriaModal = document.querySelectorAll(".galerias .modal-galeria");
const btnCloseModal = document.querySelectorAll(".galerias .modal-galeria .close");

btnGaleria.forEach((galeria, index) => {
  galeria.addEventListener("click", (event) => {
    event.preventDefault();

    btnGaleria.forEach((link) => {
      link.classList.remove("active");
    });
    galeriaModal.forEach((tab) => {
      tab.classList.remove("active");
    });
    galeriaModal[index].classList.add("active");
    galeria.classList.add("active");
  });
});

$(".close-galeria").on("click", function () {
  $(".modal-galeria").removeClass("active");
});


