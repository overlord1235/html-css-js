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
    <div data-role="charm" data-position="left" id="left-charm"><h1 class="text-light">
        <div class='cell'>
         <button class="button" onclick="metroDialog.toggle('#dialogaddteam')"> <span class="mif-plus prepend-icon"></span> Add Team</button>
        </div>       
              
              
        <div class='cell'>        
        <button class="button" onclick="metroDialog.toggle('#dialog-ajax')"> <span class="mif-plus prepend-icon"></span> Add Player</button>
        </div> 
    </h1></div>
<div class="app-bar" data-role="appbar">
        <a class="app-bar-element" >.
        <span onclick="toggleMetroCharm('#left-charm')" class="mif-apps mif-2x "></span>
        
    </a>
<a class="app-bar-element" href="/vox/nba/admin">.<img src="/vox/nba/public/images/logoman.svg"></a>
    <span class="app-bar-divider"></span>
    <ul class="app-bar-menu">
        <li><a href="/vox/nba/admin/">Teams</a></li>
        <li><a href="/vox/nba/admin/players">Players</a></li>
    </ul>
    <span class="app-bar-pullbutton"></span>
    <div class="app-bar-element place-right">
        <a class="dropdown-toggle fg-white"><img src="/vox/nba/public/images/profile.svg"></a>
        <div class="app-bar-drop-container bg-white fg-dark place-right"
                data-role="dropdown" data-no-close="true">
            <div class="padding20">
                <form method="POST" action ="/vox/nba/admin/logout">
                    <div class="form-actions">
                        <button class="button">Logout</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
	<div class="app-bar-pullbutton automatic" style="display: none;"></div>

</div>
<div data-role="dialog" id="dialogaddteam" class="padding20" data-close-button="true" data-overlay="true" data-overlay-color="op-dark" data-overlay-click-close="true">
    <h1>New Team</h1>
    <form method="POST" action="/vox/nba/admin/team" enctype="multipart/form-data">
        <div class="cell">
            <label>Team name</label>
            <div class="input-control text full-size">
                <input type="text" name='name'>
            </div>
        </div>
        <div class="cell">
            <label>Name Shortcut</label>
            <div class="input-control text full-size">
                <input type="text" name='shortcut' maxlength="3">
            </div>
        </div>
        <div class="cell">
            <label>Team Website</label>
            <div class="input-control text full-size">
                <input type="text" name='website'>
            </div>
        </div>
        <div class="cell">
            <label>Logo</label>
            <div class="input-control file" data-role="input">
                <input type="file" name='logo'>
                <button class="button"><span class="mif-folder"></span></button>
            </div>

        </div>

        <div class="cell">
            <button class="button success">Insert</button>
        </div>

    </form>
</div>
<div data-role="dialog" id="dialog-ajax" class="padding20"
    data-close-button="true"
    data-href="/vox/nba/admin/add-player"
    data-width="1000"   data-overlay="true" data-overlay-color="op-dark" data-overlay-click-close="true" ></div>
