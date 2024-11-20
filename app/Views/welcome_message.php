<?php

use CodeIgniter\Database\BaseUtils;
?>
<?= $this->extend('layout/main_layout') ?>
<?= $this->section('title') ?>
<title>Imperial Treasures</title>
<?= $this->endSection('title') ?>
<?= $this->section('content') ?>
        <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2">Welcome To our Summative Page!</h1>
                            <p class="lead text-white-50 mb-4">We are the Worlds most trusted creator of any website</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="py-5 border-bottom" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                        <h2 class="h4 fw-bolder">Family Friendly</h2>
                        <p>We are Family Friendly Company but most of the times we are just Friendly but all the time we are not angry</p>
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                        <h2 class="h4 fw-bolder">Great Company</h2>
                        <p>Yes, We are a Great Company and we are proud of it, but sometimes..... Oops Project Manager is Here.</p>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                        <h2 class="h4 fw-bolder">Nothing</h2>
                        <p>As a Front End i dont know what to put here, so i will just put this here just for the sake of it because i am a good boy</p>
                    </div>
                </div>
            </div>
        </section>
<?= $this->endSection('content') ?>
