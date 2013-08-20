<?php
echo"<pre>";
print_r($allowed_menus);
echo"<pre>";
$count  = 0;

foreach($allowed_menus as $key=>$value){
    $user_tabs[$value->TabOrder]['TabName'] = $value->TabName;
    $user_tabs[$value->TabOrder]['TabDesc'] = $value->TabName;
}
?>
<div class="nav-collapse collapse">
    <ul class="nav">
    <?php
    $i=0;
    $tab_arr = json_encode($user_tabs);
    foreach($user_tabs as $tab)
    { ?>
    <li class="active"><a href="<?php echo base_url("admin/dashboard?tab='$i'"); ?>" onclick="javascript:view(<?php echo $tab_arr; ?>,this.id,'<?php echo $user_tabs[$value->TabOrder]['TabName']; ?>')"><?php echo $tab; ?></a></li>
    <?php }
    ?>
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
<script type='text/javascript' language='javascript'>
    //--  function for loading dashboard , menu when clicked on tab  --//
    function view(tab_arr,str,value)
    {
        $.each(tab_arr,function(key,value){
            if(value == str)
            { document.getElementById(str).className = "active";}
            else
            { document.getElementById(value).className = "";}
        });

        $.ajax({
            type: 'post',
            url: '<?php  echo base_url()?>index.php/main/'+str+'/',
            success: function(response){
                $('#current_page_title').html("<?php echo $this->lang->line('zk_Welcometo'); ?> " + value.toUpperCase());
                $('.content_container').html(response);
            }
        });
    }
    //---  End of view function   ---//
</script>