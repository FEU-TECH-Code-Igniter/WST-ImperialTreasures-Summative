<?php

use CodeIgniter\Database\BaseUtils;
?>
<?= $this->extend('layout/main_layout') ?>
<?= $this->section('title') ?>
<title>Dashboard</title>
<?= $this->endSection('title') ?>
<?= $this->section('content') ?>

<table>
    <thead>
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

<?= $this->endSection('content') ?>