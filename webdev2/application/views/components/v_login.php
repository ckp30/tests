<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="/css/form.css" type="text/css">
	<link rel="stylesheet" href="/css/marquee.css" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <style>
        body {
            margin-top: 100px;
            height: 100%;
            align-items: center;
            background-color: #7D63F7;
            display: flex;
            justify-content: center;

        }
    </style>
</head>
<body>
    <div class="form">
        <?php echo form_open('login')?>
            <div class="title">LOGIN</div>
            <div class="subtitle"> System ini hanya dapat di akses oleh pihak administrasi. </div>

            <div class="input-container ic1">
                <input id="name" class="input" name="username" type="text" value="<?= set_value('username')?>" placeholder="<?php echo set_value('username') == '' ? ' ' : set_value('username');?>"/>
                <div class="saparator"></div>
                <label for="name" class="placeholder">Username <?php if(form_error('username') != TRUE and validation_errors() != NULL): ?> 
                    <i class="fa fa-check-circle" style="font-size:18px; color: #3C9CF8;"></i> <?php endif;?></label>
                
            </div>
            <div class="<?php echo form_error('username') == TRUE ? "status" : ''; ?>">
                <p><?php echo form_error('username'); ?></p>
            </div>

            <div class="input-container ic2">
                <input id="password" class="input" name="password" type="password" placeholder=" "/>
                <div class="saparator cut-short"></div>
                <label for="password" class="placeholder">Password</label>
            </div>

            <div class="<?php echo form_error('password') == TRUE ? "status" : ''; ?>">
                <p><?php echo form_error('password'); ?></p>
            </div>
        
            <button type="text" class="submit">submit</button>
            <script type="text/javascript" src="/js/layerup.js"></script>
        </div>
<body>
</html>