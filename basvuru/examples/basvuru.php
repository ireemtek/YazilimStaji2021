<!--
=========================================================
* * Black Dashboard - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/black-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)


* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php 


include 'baglan.php'; 
ob_start();
session_start();
$kullanicisor=$db->prepare("SELECT * FROM kullanicikayitlari where kullaniciadi=:kullaniciadi");
$kullanicisor->execute(array(
'kullaniciadi'=>$_SESSION['kullaniciadi']
));
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);


$profilbilgilerisor=$db->prepare("SELECT * FROM kullanicilar where kullaniciadi=:kullaniciadi");
$profilbilgilerisor->execute(array(
'kullaniciadi'=>$_SESSION['kullaniciadi']
));
$profilbilgilericek=$profilbilgilerisor->fetch(PDO::FETCH_ASSOC);


$ilansor=$db->prepare("SELECT * FROM ilanlar where ilanid=:ilanid");
$ilansor->execute(array(
'ilanid'=>$_GET['deneme']
));
$ilancek=$ilansor->fetch(PDO::FETCH_ASSOC);
 ?>
<?php include 'header.php'; ?>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Gönderilecek Bilgileriniz</h5>
              </div>
              <div class="card-body">

                <form action="kontrol.php" method="POST" enctype="multipart/form-data">
                  <div class="row">
                    
                    <div class="col-md-3 px-md-1">
                      <div class="form-group">
                        <label>İsim Soyisim</label>
                        <input type="text" class="form-control"  name="isimsoyisim" placeholder="Username" value="<?php echo $kullanicicek['isimsoyisim']; ?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control"  name="email" value="<?php echo $kullanicicek['email']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label>Yaş</label>
                        <input type="text" class="form-control"  name="yas" value="<?php echo $kullanicicek['yas']; ?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-md-1">
                      <div class="form-group">
                        <label>Şehir</label>
                        <input type="text" class="form-control"  name="ysehir" value="<?php echo $kullanicicek['ysehir']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Okul</label>
                        <input type="text" class="form-control"  name="okul" placeholder="Okulunuz" value="<?php echo $kullanicicek['okul']; ?>">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Bölüm</label>
                        <input type="text" class="form-control"  name="bolum" placeholder="Bölümünüz" value="<?php echo $kullanicicek['bolum']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Yetkinlikler</label>
                        <textarea rows="4" cols="80"  name="yetkinlikler" class="form-control" placeholder="Yetkinlikleriniz"><?php echo $kullanicicek['yetkinlikler']; ?></textarea>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Deneyim</label>
                        <textarea rows="4" cols="80"  name="deneyim" class="form-control" placeholder="Deneyimleriniz" ><?php echo $kullanicicek['deneyim']; ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Hobiler</label>
                        <textarea rows="4" cols="80"  name="hobi" class="form-control" placeholder="Hobileriniz" ><?php echo $kullanicicek['hobi']; ?></textarea>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Hakkımda</label>
                        <textarea rows="4" cols="80"  name="hakkimda" class="form-control" placeholder="Hakkınızda"><?php echo $kullanicicek['hakkimda']; ?></textarea>
                      </div>
                    </div>
                     <div class="col-md-6">
                     
                        <label>Cvnizi ekleyin</label><br>
                            
                <input  class="form-group" required="" type="file" required="required" name="file" size="50">

                        <input type="hidden" name="kullaniciadi" value="<?php echo $kullanicicek['kullaniciadi'];  ?>">
                        <input type="hidden" name="ilanid" value="<?php echo $ilancek['ilanid'];  ?>">
                        <input type="hidden" name="sirketadi" value="<?php echo $ilancek['sirketadi'];  ?>">
                        <input type="hidden" name="pozisyon" value="<?php echo $ilancek['pozisyon'];  ?>">
                        <input type="hidden" name="sirketkullaniciadi" value="<?php echo $ilancek['sirketkullaniciadi'];  ?>">
                    </div>

                  </div>
                  <br><button  type="submit"  name= "hemenbasvur" class="btn btn-primary">Hemen Basvur</button>
                </form>
              </div>

</script><br /><br />
            </div>
          </div>
       
        </div>
      </div>
     <?php include 'footer.php'; ?>
    </div>
  </div>
 
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "black-dashboard-free"
      });
  </script>
</body>

</html>