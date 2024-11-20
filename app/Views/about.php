<?php

use CodeIgniter\Database\BaseUtils;
?>
<?= $this->extend('layout/main_layout') ?>
<?= $this->section('title') ?>
<title>About us!</title>
<?= $this->endSection('title') ?>
<?= $this->section('content') ?>




      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="<?php echo IMG.'Timo.jpg';?>" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">Front End of the group. Very Handsome</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="<?php echo IMG.'Julius2.jpg';?>" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">I dont know what picture is this? Very Demure</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="<?php echo IMG.'Judiel.jpg';?>" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">Project Manager. VERY STRICT, VERY DEMANDING WE DONT KNOW WHY</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="<?php echo IMG.'Jeth.jpg';?>" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">Back End, I hate this guy my enemy P.S. This was type by Front End</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="<?php echo IMG.'Tobi.jpg';?>" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">Slow Designer making Front End Angry all the time</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="<?php echo IMG.'James.jpg';?>" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">We dont even know who this guy is he just existed in our group</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

                   
<?= $this->endSection('content') ?>