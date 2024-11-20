<?php

use CodeIgniter\Database\BaseUtils;
?>
<?= $this->extend('layout/main_layout') ?>
<?= $this->section('title') ?>
<title>Dashboard</title>
<?= $this->endSection('title') ?>
<?= $this->section('content') ?>

<div class="d-flex justify-content-center">
    <table class="table table-striped table-bordered w-75">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
            </tr>
        </thead>
        <tbody>
            <?php if($tb_promotional): ?>
                <?php foreach ($tb_promotional as $row) : ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['title'] ?></td>
                        <td><?php echo $row['content'] ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection('content') ?>