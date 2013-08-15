<div class="nav-collapse collapse">
<ul class="nav">
    <?php

    foreach($tabs as $tab)
    { ?>

    <li class="active"><a href="<?php echo base_url('admin/dashboard');?>"><?php echo $tab->Description; //$tab['Description'] ?></a></li>
    <?php }?>
<!--    <li><a href="--><?php //echo base_url('admin/dashboard');?><!--">Users</a></li>-->
<!--    <li><a href="file.html">File Manager</a></li>-->
    <li class="dropdown">
        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
            Form Elements <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
            <li><a href="form-general.html">General</a></li>
            <li><a href="form-validation.html">Validation</a></li>
            <li><a href="form-wysiwyg.html">WYSIWYG</a></li>
            <li><a href="form-wizard.html">Wizard &amp; File Upload</a></li>
        </ul>
    </li>
</ul>
</div>