<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$select = array('nama_menu','icon_menu','link_menu','sub_menu','id_menu');
$where = array(
	'sub_menu' => 0,
	'is_active' => 1
	);
$menu0=$this->M__db->cek_order('menus__',$select,$where,'posisi_menu','asc');
?>
<div id="main-menu" role="navigation">
		<div id="main-menu-inner">
			<div class="menu-content top text-center" style="white-space: nowrap;">
				<div class="text-bg form-group-margin" id="mm-howdy"><font color="#fff"><?=$info['user_fullname']?></font></div>

				<div class="form-group-margin">
				<img src="<?php if($info['user_photo']!=null){
					echo base_url().'assets/avatars/'.$info['user_photo'];
				}else{
					echo base_url().'assets/avatars/user_default.png';
				}?>
				" alt="" class="rounded" width="30%">
				</div>
				<a href="<?=base_url()?>Destroy.cs" onclick="return confirm('Anda yakin ingin Keluar!'); " class="btn btn-xs btn-danger btn-outline dark"><i class="fa fa-power-off"></i> Log Out</a>
			
			</div>
			<ul class="navigation">
				<?php foreach($menu0->result() as $mn0){ 
						$select1 = array('nama_menu','icon_menu','link_menu','sub_menu');
						$where1 = array(
							'sub_menu' => $mn0->id_menu,
							'is_active' => 1
							);
						$menu1=$this->M__db->cek_order('menus__',$select1,$where1,'posisi_menu','asc');
						if($menu1->num_rows()>0){ ?>
							<li class="mm-dropdown">
								<a href="#" class="faa-parent animated-hover"><i class="<?=$mn0->icon_menu?>"></i><span class="mm-text"><?=$mn0->nama_menu?></span></a>
								<ul>
								<?php foreach($menu1->result() as $mn1){ ?>
									<li>
										<a tabindex="-1" href="<?=base_url().$mn1->link_menu?>"><i class="<?=$mn1->icon_menu?>"></i><span class="mm-text"><?=$mn1->nama_menu?></span></a>
									</li>
								<?php }?>
								</ul>
							</li>
					<?php }else{ ?>
							<li>
								<a href="<?=base_url().$mn0->link_menu?>" class="faa-parent animated-hover"><i class="<?=$mn0->icon_menu?>"></i><span class="mm-text"><?=$mn0->nama_menu?></span></a>
							</li>
					<?php }?>
				<?php }?>
			</ul> <!-- / .navigation -->
			<div class="menu-content">
				<a href="Log-user.cs" class="btn btn-primary btn-block btn-outline dark">Log Aktifitas</a>
			</div>
		</div> <!-- / #main-menu-inner -->
	</div> <!-- / #main-menu -->