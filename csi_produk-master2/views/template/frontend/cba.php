<!-- Top Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <!-- <a href="javascript:void(0);" class="bars"></a> -->
            <a class="navbar-brand" href="<?=site_url()?>">CSI PRODUK</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav mr-auto navbar-right">
                <!-- Call Search -->
                <li class="nav-item <?=($this->uri->segment(1)===null)?'active':'' ?>">
                  <a class="nav-link"href="<?php echo site_url()?>">
                    Home
                  </a>
                </li>
                <li class="nav-item <?=($this->uri->segment(1)==='questionnaire')?'active':'' ?>">
                  <a class="nav-link"href="<?php echo site_url('questionnaire/'.$this->session->userdata('url')); ?>">
                    Questionnaire
                  </a>
                </li>
                <li class="nav-item <?=($this->uri->segment(1)==='result')?'active':'' ?>">
                  <a class="nav-link"href="<?php echo site_url('result'); ?>">
                    Result
                  </a>
                </li>
                <!-- #END# Tasks -->
                <li class="nav-item">
                    <a class="nav-link btn-inverse" href="<?=site_url('login')?>">
                        <span>Login Admin</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
