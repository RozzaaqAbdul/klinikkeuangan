<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">
		    <li <?php if($page == "Dashboard") echo "class='menu-open'";?>>
          <a href="<?=site_url("dashboard")?>">
            <i class="mdi mdi-view-dashboard"></i>
            Dashboard
          </a>
        </li>
        <li class="treeview <?php if($page == "User" || $page == "Add User") echo "menu-open";?>">
          <a href="#">
            <i class="mdi mdi-account"></i>
            <span>User List</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" <?php if($page == "User" || $page == "Add User") echo "style='display:block;'";?>>
            <li>
            <?php if ($page == "User") {?>
              <a href="<?=site_url("user")?>" <?php if($page == "User") echo "style='opacity:1;'";?> href="<?=site_url("user")?>"><i class="mdi mdi-toggle-switch"></i>List</a>
            <?php }else{?>
              <a href="<?=site_url("user")?>"><i class="mdi mdi-toggle-switch-off"></i>List</a>
            <?php }?>
            </li>
            <li>
            <?php if ($page == "Add User") {?>
              <a href="<?=site_url("user/adddata")?>" <?php if($page == "Add User") echo "style='opacity:1;'";?> href="<?=site_url("user/adddata")?>"><i class="mdi mdi-toggle-switch"></i>Add</a>
            <?php }else{?>
              <a href="<?=site_url("user/adddata")?>"><i class="mdi mdi-toggle-switch-off"></i>Add</a>
            <?php }?>
            </li>
          </ul>
        </li>

        <li class="header nav-small-cap"><i class="mdi mdi-drag-horizontal mr-5"></i>TABEL SIMULASI dan ARTIKEL</li> 
		
		
        <li class="treeview <?php if($page == "Asuransi" || $page == "Add Asuransi") echo "menu-open";?>">
          <a href="#">
            <i class="mdi mdi-receipt"></i>
            <span>Kecukupan Asuransi Jiwa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" <?php if($page == "Asuransi" || $page == "Add Asuransi") echo "style='display:block;'";?>>
            <li>
            <?php if ($page == "Asuransi") {?>
              <a href="<?=site_url("asuransi")?>" <?php if($page == "Asuransi") echo "style='opacity:1;'";?> href="<?=site_url("asuransi")?>"><i class="mdi mdi-toggle-switch"></i>List</a>
            <?php }else{?>
              <a href="<?=site_url("asuransi")?>"><i class="mdi mdi-toggle-switch-off"></i>List</a>
            <?php }?>
            </li>
            <li>
            <?php if ($page == "Add Asuransi") {?>
              <a href="<?=site_url("asuransi/adddata")?>" <?php if($page == "Add Asuransi") echo "style='opacity:1;'";?> href="<?=site_url("asuransi/adddata")?>"><i class="mdi mdi-toggle-switch"></i>Add</a>
            <?php }else{?>
              <a href="<?=site_url("asuransi/adddata")?>"><i class="mdi mdi-toggle-switch-off"></i>Add</a>
            <?php }?>
            </li>
          </ul>
        </li>
        <li class="treeview <?php if($page == "Financial" || $page == "Add Financial") echo "menu-open";?>">
            <a href="#">
              <i class="mdi mdi-receipt"></i>
              <span>Quick Financial Health Check</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" <?php if($page == "Financial" || $page == "Add Financial") echo "style='display:block;'";?>>
                <li>
                <?php if ($page == "Financial") {?>
                  <a href="<?=site_url("financial")?>" <?php if($page == "Financial") echo "style='opacity:1;'";?> href="<?=site_url("financial")?>"><i class="mdi mdi-toggle-switch"></i>List</a>
                <?php }else{?>
                  <a href="<?=site_url("financial")?>"><i class="mdi mdi-toggle-switch-off"></i>List</a>
                <?php }?>
                </li>
                <li>
                <?php if ($page == "Add Financial") {?>
                  <a href="<?=site_url("financial/adddata")?>" <?php if($page == "Add Financial") echo "style='opacity:1;'";?> href="<?=site_url("financial/adddata")?>"><i class="mdi mdi-toggle-switch"></i>Add</a>
                <?php }else{?>
                  <a href="<?=site_url("financial/adddata")?>"><i class="mdi mdi-toggle-switch-off"></i>Add</a>
                <?php }?>
                </li>
            </ul>
          </li>
          <!-- <li class="treeview">
            <a href="#">
              <i class="mdi mdi-receipt"></i>
              <span>Kebutuhan Dana Pendidikan</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/asuransijiwa.html"><i class="mdi mdi-toggle-switch-off"></i>List</a></li>
                <li><a href="pages/forms_validation.html"><i class="mdi mdi-toggle-switch-off"></i>Edit</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="mdi mdi-receipt"></i>
              <span>Kebutuhan Dana Pensiun</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/asuransijiwa.html"><i class="mdi mdi-toggle-switch-off"></i>List</a></li>
                <li><a href="pages/forms_validation.html"><i class="mdi mdi-toggle-switch-off"></i>Edit</a></li>
            </ul>
          </li> -->
          
          <!-- TABEL ARTIKEL -->
		  
        <li class="treeview">
          <a href="#">
            <i class="mdi mdi-table"></i>
			<span>ARTIKEL</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!-- <li><a href="pages/tables_simple.html"><i class="mdi mdi-toggle-switch-off"></i>Simple tables</a></li>
            <li><a href="pages/tables_color.html"><i class="mdi mdi-toggle-switch-off"></i>Table Color</a></li> -->
            <li><a href="pages/inputartikel.html"><i class="mdi mdi-toggle-switch-off"></i>Input Artikel</a></li>
            <li><a href="pages/listartikel.html"><i class="mdi mdi-toggle-switch-off"></i>List Artikel</a></li>
            <li><a href="pages/editartikel.html"><i class="mdi mdi-toggle-switch-off"></i>Edit Artikel</a></li> 

          </ul>
        </li>
		<li>
          <a href="<?php echo site_url('dashboard/logout'); ?>">
            <i class="mdi mdi-directions"></i>
			<span>Log Out</span>
          </a>
        </li> 
        
      </ul>
    </section>
  </aside>