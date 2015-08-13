      <ul class="nav navbar-nav topmenu">
<?php foreach ($menu as $row) { ?>
	<?php if ($row['name']=='dropdown') { ?>
		<li class="dropdown topmenu-item skew-right">
			<a class="dropdown-toggle" data-toggle="dropdown" href="javascript: void(0);"><span><?php echo $row["n"]; ?></span><span class="dropdown-caret"></span></a>   
			<ul class="dropdown-menu">
		<?php foreach ($row['li'] as $li) { 
			if ($li["name"] == 'gr') { echo '<li class="divider"></li>';} else { ?>
			<li <?php if ('/'.HTTP_ID == $li["url"]) {echo 'class="active"';}?>><a href="<?php echo $li["url"]; ?>"><span><?php echo $li["name"]; ?></span></a></li>
		<?php }} ?>
			</ul>
		</li>
	<?php } else {?>
        <li class="topmenu-item skew-right"><a href="<?php echo $row["url"]; ?>"><span><?php echo $row["name"]; ?></span></a></li>
	<?php } ?>
<?php } ?>
      </ul>