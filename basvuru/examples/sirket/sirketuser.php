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


include '../baglan.php'; 
ob_start();
session_start();


$kullanicisor=$db->prepare("SELECT * FROM sirketkayitlari where sirketkullaniciadi=:sirketkullaniciadi");
$kullanicisor->execute(array(
'sirketkullaniciadi'=>$_SESSION['sirketkullaniciadi']
));
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
$say=$kullanicisor->RowCount();
if ($say==0) 
{
  header("Location:index.php?izinsiz");
}
 ?>
<?php include 'header.php'; ?>
    <div class="main-panel" >
      <div class="modal fade"  id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="margin-right:650px; margin-top: -150px;"  role="document">
    <div class="modal-content" style="width:800px;
   
    ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kişisel Bilgileri Güncelle</h5>
        <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form  action="sirketkontrol.php" method="POST" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">

                       <div class="row">
                    
                  
                    <div class="col-md-6 px-md-1">
                      <div class="form-group" >
                        <label>Şirket İsmi</label>
                        <input type="text" class="form-control" placeholder="Username" name="sirketadi" value="<?php echo $kullanicicek['sirketadi']; ?>" style="color:black" >
                      </div>
                    </div>
                    <div class="col-md-6 pl-md-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input style="color:black" type="text" class="form-control" name="email" value="<?php echo $kullanicicek['email']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    
                    <div class="col-md-6 px-md-1">
                      <div class="form-group">
                        <label>Çalışan Sayısı</label>
                        <input style="color:black" type="text" class="form-control" name="calisansayi" placeholder="Username" value="<?php echo $kullanicicek['calisansayi']; ?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-md-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Şehir</label>
                        <input style="color:black" type="text" class="form-control" name="ssehir" value="<?php echo $kullanicicek['ssehir']; ?>">
                      </div>
                    </div>
                  </div>
                 <div class="row">
                    
                    <div class="col-md-6 px-md-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">İlçe</label>
                        <input style="color:black" type="text" class="form-control" name="ilce" value="<?php echo $kullanicicek['ilce']; ?>">                   
                      </div>
                    </div>
                    <div class="col-md-6 pl-md-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Kuruluş Yılı</label>
                        <input style="color:black" type="text" class="form-control" name="kurulusyili" value="<?php echo $kullanicicek['kurulusyili']; ?>"> 
                      </div>
                    </div>
                  </div><br><br><br>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        
<label>Şirket Açıklaması</label>
                                <textarea style="color:black" rows="4" cols="80" name="sirketaciklama" class="form-control" placeholder="Şirket Açıklaması"><?php echo $kullanicicek['sirketaciklama']; ?></textarea>
                      </div>
                    </div>
             
                    <div class="col-md-6">
                      <div class="form-group">
                        

                      </div> 
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        

                      </div>
                    </div>
                  
                  
                    <div class="col-md-6">
                      <div class="form-group">
                        

                      </div>
                    </div>
                  </div>


                       <div class="form-group">
                       
                        
                        <input type="hidden" name="sirketkullaniciadi" value="<?php echo $kullanicicek['sirketkullaniciadi'];  ?>">
                     
                      </div>
                     
                    <div class="card-footer">
                <button name="guncelle" type="submit" class="btn btn-fill btn-primary">Güncelle</button>
              </div>
                     
                     
                    </form>
      </div>
      
    </div>
  </div>
</div>        
      <!-- Navbar -->
     
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
           <div class="col-md-1">
         
          </div>
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title"></h5>
              </div>
               <button  type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Şirket Bilgilerini Güncelle</button>
              <div class="card-body">

                <form>
                  <div class="row">
                    <div class="col-md-5 pr-md-1">
                      <div class="form-group">
                        <label>Kullanıcı Adı</label>
                        <input type="text" class="form-control" disabled="" placeholder="Company" value="<?php echo $kullanicicek['sirketkullaniciadi']; ?>">
                      </div>
                    </div>
                    <div class="col-md-3 px-md-1">
                      <div class="form-group">
                        <label>Şirket İsmi</label>
                        <input type="text" class="form-control" disabled=""  placeholder="Username" value="<?php echo $kullanicicek['sirketadi']; ?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" disabled=""  value="<?php echo $kullanicicek['email']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label>Çalışan Sayısı</label>
                        <input type="text" class="form-control" disabled=""  value="<?php echo $kullanicicek['calisansayi']; ?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-md-1">
                      <div class="form-group">
                        <label>Şirketin Bulunduğu Şehir</label>
                        <input type="text" class="form-control" disabled=""  value="<?php echo $kullanicicek['ssehir']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label>İlçe</label>
                        <input type="text" class="form-control" disabled=""  value="<?php echo $kullanicicek['ilce']; ?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-md-1">
                      <div class="form-group">
                        <label>Kuruluş Yılı</label>
                        <input type="text" class="form-control" disabled=""  value="<?php echo $kullanicicek['kurulusyili']; ?>">
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Şirket Açıklaması</label>
                        <textarea rows="4" cols="80" disabled=""  class="form-control" placeholder="Yetkinlikleriniz"><?php echo $kullanicicek['sirketaciklama']; ?></textarea>
                      </div>
                    </div>
                    
                  </div>
                  
       
                </form>
              </div>

</script><br /><br />
            </div>
          </div>
          <div class="col-md-2">
         
          </div>
        </div>
      </div>
     <?php include 'footer.php'; ?>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Background</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger background-color">
            <div class="badge-colors text-center">
              <span class="badge filter badge-primary active" data-color="primary"></span>
              <span class="badge filter badge-info" data-color="blue"></span>
              <span class="badge filter badge-success" data-color="green"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="adjustments-line text-center color-change">
          <span class="color-label">LIGHT MODE</span>
          <span class="badge light-badge mr-2"></span>
          <span class="badge dark-badge ml-2"></span>
          <span class="color-label">DARK MODE</span>
        </li>
        <li class="button-container">
          <a href="https://www.creative-tim.com/product/black-dashboard" target="_blank" class="btn btn-primary btn-block btn-round">Download Now</a>
          <a href="https://demos.creative-tim.com/black-dashboard/docs/1.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block btn-round">
            Documentation
          </a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
          <a class="github-button" href="https://github.com/creativetimofficial/black-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../../assets/js/core/jquery.min.js"></script>
  <script src="../../assets/js/core/popper.min.js"></script>
  <script src="../../assets/js/core/bootstrap.min.js"></script>
  <script src="../../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../../assets/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="../../assets/demo/demo.js"></script>
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