<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>

    <style type="text/css">

    ::selection { background-color: #E13300; color: white; }
    ::-moz-selection { background-color: #E13300; color: white; }

    body {
        background-color: #000;
        margin: 40px;
        font: 16px/20px normal Helvetica, Arial, sans-serif;
        color: #FFF;
        word-wrap: break-word;
    }

    a {
        color: #1E90FF;
        background-color: transparent;
        font-weight: normal;
    }

    h1 {
        color: #FFD700;
        background-color: transparent;
        border-bottom: 1px solid #444;
        font-size: 24px;
        font-weight: normal;
        margin: 0 0 14px 0;
        padding: 14px 15px 10px 15px;
    }

    code {
        font-family: Consolas, Monaco, Courier New, Courier, monospace;
        font-size: 16px;
        background-color: #333;
        border: 1px solid #555;
        color: #FFD700;
        display: block;
        margin: 14px 0 14px 0;
        padding: 12px 10px 12px 10px;
    }

    #body {
        margin: 0 15px 0 15px;
    }

    p.footer {
        text-align: right;
        font-size: 16px;
        border-top: 1px solid #444;
        line-height: 32px;
        padding: 0 10px 0 10px;
        margin: 20px 0 0 0;
        color: #888;
    }

    #container {
        margin: 10px;
        border: 1px solid #444;
        box-shadow: 0 0 8px #444;
        background: linear-gradient(145deg, #1c1c1c, #000000);
        border-radius: 10px;
        padding: 20px;
    }
    </style>
</head>
<body>

<div id="container">
    <h1>Welcome to CodeIgniter!</h1>

    <div id="body">

        <h2><a href="<?php echo site_url('restapi'); ?>">REST Server Tests</a></h2>

        <?php if (file_exists(FCPATH.'documentation/index.html')) : ?>
        <h2><a href="<?php echo base_url('documentation/index.html'); ?>" target="_blank">REST Server Documentation</a></h2>
        <?php endif ?>

        <p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

        <p>If you would like to edit this page you'll find it located at:</p>
        <code>application/views/welcome_message.php</code>

        <p>The corresponding controller for this page is found at:</p>
        <code>application/controllers/Welcome.php</code>

        <?php if (file_exists(FCPATH.'user_guide/index.html')) : ?>
        <p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="<?php echo base_url('user_guide/index.html'); ?>" target="_blank">User Guide</a>.</p>
        <?php endif ?>
    </div>

    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>'.CI_VERSION.'</strong>' : '' ?></p>
</div>

</body>
</html>
