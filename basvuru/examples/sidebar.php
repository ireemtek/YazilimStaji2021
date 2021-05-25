       <div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
           
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
          <?php 

if (isset($_SESSION['kullaniciadi'])) 
{
    echo $kullanicicek['isimsoyisim'];
}

           ?>



            
          </a>
        </div>
        <ul class="nav">
          <li>
            <a href="user.php">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Profil Bilgileri</p>
            </a>
          </li>
          <li>
            <a href="basvurularim.php">
              <i class="tim-icons icon-atom"></i>
              <p>Başvurularım</p>
            </a>
          </li>
          <li>
            <a href="ilanlar.php">
              <i class="tim-icons icon-pin"></i>
              <p>İş İlanları</p>
            </a>
          </li>


   
         
        </ul>
      </div>
    </div>
  </div>