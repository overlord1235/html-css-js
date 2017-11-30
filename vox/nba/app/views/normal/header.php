<html>
<head>
 <link href="/vox/nba/public/css/metro.css" rel="stylesheet">
    <link href="/vox/nba/public/css/metro-icons.css" rel="stylesheet">
    <link href="/vox/nba/public/css/metro-responsive.css" rel="stylesheet">
	<link href="/vox/nba/public/css/metro-schemes.css" rel="stylesheet">
    <link href="/vox/nba/public/css/metro-colors.css" rel="stylesheet">
	<script src="/vox/nba/public/js/jquery-3.2.1.min.js"></script>

    <script src="/vox/nba/public/js/metro.js"></script> 
    <style>
    
    </style>
</head>

<body class='bg-grayLighter'>
   
<div class="app-bar" data-role="appbar">
        
<a class="app-bar-element" href="">.<img src="/vox/nba/public/images/logoman.svg"></a>
    <span class="app-bar-divider"></span>
    <ul class="app-bar-menu">
        <li><a href="/vox/nba/">Teams</a></li>
        <li><a href="/vox/nba/players">Players</a></li>
    </ul>
    <span class="app-bar-pullbutton"></span>
    <div class="app-bar-element place-right">
        <a class="dropdown-toggle fg-white"><img src="/vox/nba/public/images/profile.svg"></a>
        <div class="app-bar-drop-container bg-white fg-dark place-right"
                data-role="dropdown" data-no-close="true">
            <div class="padding20">
                <form method="POST" action ="/vox/nba/admin/login">
                    <h4 class="text-light">Login to NBA</h4>
                    <div class="input-control text">
                        <span class="mif-user prepend-icon"></span>
                        <input type="text" name="username">
                    </div>
                    <div class="input-control text">
                        <span class="mif-lock prepend-icon"></span>
                        <input type="password " name="password">
                    </div>
                    <div class="form-actions">
                        <button class="button">Login</button>
                        <button class="button link">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
	<div class="app-bar-pullbutton automatic" style="display: none;"></div>

</div>

