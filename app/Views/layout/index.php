<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?= base_url(); ?>template/dist/img/logo.png" type="image/x-icon">
  <title><?= $title; ?> - myFolder</title>
  <link rel="stylesheet" href="<?= base_url(); ?>template/dist/css/app.css">
</head>

<body class="font-inter selection:bg-green-400 selection:text-green-900">
  <?= $this->include('component/header'); ?>
  <div class="container w-11/12 md:w-9/12 mx-auto mt-20 mb-6">
    <?= $this->renderSection('content'); ?>
  </div>
  <?= $this->include('component/footer'); ?>
  <?= $this->include('component/backtotop'); ?>
  <?= $this->include('utils/script'); ?>
</body>

</html>