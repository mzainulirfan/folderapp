<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?= $this->include('utils/css'); ?>
  <title><?= $title; ?> - myFolder</title>
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