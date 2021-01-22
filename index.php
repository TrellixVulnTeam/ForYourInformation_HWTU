<?php
  include_once('conn.php');
  include_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lang['title'] ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header class="header">
      <div id="slider" class="carousel slide" data-ride="carousel"> 
        <div class="carousel-indicators">
          <div data-target="#slider" data-slide-to="0" class="active"><?php echo $lang['work'] ?></div>
          <div data-target="#slider" data-slide-to="1"><?php echo $lang['school'] ?></div>
          <div data-target="#slider" data-slide-to="2"><?php echo $lang['house'] ?></div>
          <div data-target="#slider" data-slide-to="3"><?php echo $lang['travel'] ?></div>
          <div data-target="#slider" data-slide-to="4"><?php echo $lang['study'] ?></div>
        </div>
        <div class="carousel-inner" role="listbox">
          <div class="nav navigation p-3">
            <div class="logo">
              <a href="#" >
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100.368" viewBox="0 0 100 100.368">
                  <image id="logo" width="100" height="100.368" xlink:href="data:image/png;base64,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"/>
                </svg>
              </a>
            </div>
            <div class="form-inline my-2 my-lg-0 formSearch" style="width: 100%; max-width:600px;">
                <input class="form-control mr-sm-2" type="text" placeholder="<?php echo $lang['search'] ?>" aria-label="Search" name="search" style="width:80%" id="search">
                <button class="btn btn-outline-success my-2 my-sm-0" id="searchButton" style="border: none;"><?php echo $lang['search'] ?></button>
            </div>
            <div>
              <ul class="nav justify-content-end">
                <li class="nav-item">
                  <a class="nav-link active" href="#"><?php echo $lang['home'] ?></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html"><?php echo $lang['contact'] ?></a>
                </li>
                <li class="nav-item" style="display: flex;">
                  <a class="nav-link" href="login.html" tabindex="-1" aria-disabled="true"><?php echo $lang['register'] ?></a>
                  <a class="nav-link" href="login.html" tabindex="-1" aria-disabled="true"><?php echo $lang['login'] ?></a>
                </li>
              </ul>
            </div>
            <div class="language" style="font-size:12px;">
              <a href="?lang=en"><?php echo $lang['en'] ?></a>|<a href="?lang=ja"><?php echo $lang['ja'] ?></a>
            </div>
          </div>
          <!-- Slide One -->
          <div class="carousel-item active" id="i" data-name="work.php" style="background-image: url('image/img-work.png')">
              <div class="carousel-caption d-none d-md-block">
                <h2 class="display-1 font-weight-bold getDataWork"><?php echo $lang['work'] ?></h2>
              </div>
          </div>
          <!-- Slide Two -->
          <div class="carousel-item" data-name="school.php" style="background-image: url('image/img-school.png')">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="display-1 font-weight-bold getDataSchool"><?php echo $lang['school'] ?></h2>     
            </div>
          </div>
          <!-- Slide Three -->
          <div class="carousel-item" data-name="house.php" style="background-image: url('image/img-house.png')">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="display-1 font-weight-bold getDataHouse"><?php echo $lang['house'] ?></h2>
            </div>
          </div>
          <!-- Slide Four -->
          <div class="carousel-item" data-name="travel.php" style="background-image: url('image/img-travel.png')">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="display-1 font-weight-bold getDataTravel"><?php echo $lang['travel'] ?></h2>
            </div>
          </div>
            <!-- Slide Five -->
          <div class="carousel-item" data-name="study.php" style="background-image: url('image/img-study.png')">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="display-1 font-weight-bold getDataStudy"><?php echo $lang['study'] ?></h2>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
        <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
      </div>
  </header>

  <main class="container-fluid"> 
    <div class="card text-center row data-html">
    </div>
    <div class="formDK">
      <form action="setup.php" method="POST" class="box">
        <div class="delete" id="del">
          <svg
              xmlns="http://www.w3.org/2000/svg"
              width="36"
              height="27"
              viewBox="0 0 36 27"
            >
              <g
                id="Icon_feather-delete"
                data-name="Icon feather-delete"
                transform="translate(0 -4.5)"
              >
                <path
                  id="パス_140"
                  data-name="パス 140"
                  d="M31.5,6H12L1.5,18,12,30H31.5a3,3,0,0,0,3-3V9A3,3,0,0,0,31.5,6Z"
                  fill="none"
                  stroke="#fff"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="3"
                />
                <path
                  id="パス_141"
                  data-name="パス 141"
                  d="M27,13.5l-9,9"
                  fill="none"
                  stroke="#fff"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="3"
                />
                <path
                  id="パス_142"
                  data-name="パス 142"
                  d="M18,13.5l9,9"
                  fill="none"
                  stroke="#fff"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="3"
                />
              </g>
            </svg>
        </div>
        <input placeholder="名前:" type="text" name="full_name" class="box-item" required />
        <input placeholder="ふりがな:" type="text" name="katakana" class="box-item" required />
        <select name="sex" class="box-item sex">
          <option value="male" selected><?php echo $lang['male'] ?></option>
          <option value="female"><?php echo $lang['female'] ?></option>
        </select>
        <input placeholder="生年月日:" type="date" name="birthday" class="box-item" required />
        <input placeholder="電話番号:" type="tel" name="tel" class="box-item" required />
        <input placeholder="メールアドレス:" type="email" name="email" class="box-item" required />

        <input type="hidden" name="selected_id" class="id">
        <input type="hidden" name="selected_tablename" class="tablename">

        <button name="submit" type="submit" class="box-itemBtn" >同意して応募する</button>
      </form>
    </div>
  </main>

  <footer class="footer bg-dark text-white" style="display:none; position:fixed; bottom:0; width:100%;">
    <?php include_once('footer.php') ?>
  </footer>

<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

<script>
window.onscroll = function() {myFunction()};

function myFunction() {
  if (document.body.scrollTop > 900 || document.documentElement.scrollTop > 900) {
    $('.footer').css("display", "block");
  } else {
    $('.footer').css("display", "none");
  }
}

$('.carousel').carousel({
  interval: 5000
});

$('.carousel').on('slide.bs.carousel', function(e){
  var active = $(e.target).find('.carousel-item.active');
  var a = $(e.relatedTarget).data('name');
  var from = active.index();
  console.log(a);
});

$('#searchButton').click(function(){
  var value = $('#search').val();
  $.ajax({
        url: 'xuli.php',
        method: 'GET',
        data: {search:value},
        success: function(data){
            $('.data-html').html(data);
        }
    }).done(function(){
      window.scroll({
      top: 950,
      behavior: 'smooth'
    });
    });
});

function getData(index, value){
  $.ajax({
        url: index,
        method: 'GET',
        data: {value},
        success: function(data){
            $('.data-html').html(data);
        }
    }).done(function(){
      window.scroll({
      top: 950,
      behavior: 'smooth'
    });
    })
};

$('.getDataWork').click(function(){
  getData('work.php');
});

$('.getDataSchool').click(function(){
  getData('school.php');
});

$('.getDataHouse').click(function(){
  getData('house.php');
});

$('.getDataTravel').click(function(){
  getData('travel.php');
});

$('.getDataStudy').click(function(){
  getData('study.php');
});

function layid(key, value){
  $('.id').attr('value', key);
  $('.tablename').attr('value', value);
  $('.formDK').css('display', 'block');
};

$('#del').click(function(){
  $('.formDK').css('display', 'none');
})

$('.carousel-indicators div').click(function(){
  window.scroll({
    top: 0,
    behavior: 'smooth'
  });
});

</script>
</body>
</html>