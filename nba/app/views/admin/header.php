<html>
<head>
 <link href="/public/css/metro.css" rel="stylesheet">
    <link href="/public/css/metro-icons.css" rel="stylesheet">
    <link href="/public/css/metro-responsive.css" rel="stylesheet">
	<link href="/public/css/metro-schemes.css" rel="stylesheet">
    <link href="/public/css/metro-colors.css" rel="stylesheet">
	<script src="/public/js/jquery-3.2.1.min.js"></script>

    <script src="/public/js/metro.js"></script> 
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
<a class="app-bar-element" href="/admin">.<img src="/public/images/logoman.svg"></a>
    <span class="app-bar-divider"></span>
    <ul class="app-bar-menu">
        <li><a href="/admin/">Teams</a></li>
        <li><a href="/admin/players">Players</a></li>
    </ul>
    <span class="app-bar-pullbutton"></span>
    <div class="app-bar-element place-right">
        <a class="dropdown-toggle fg-white"><img src="/public/images/profile.svg"></a>
        <div class="app-bar-drop-container bg-white fg-dark place-right"
                data-role="dropdown" data-no-close="true">
            <div class="padding20">
                <form method="POST" action ="/admin/logout">
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
    <form method="POST" action="/admin/team" enctype="multipart/form-data">
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
            <label>Cover Color</label>
            <div class="input-control select">
                <select id="select" name='cover' required>
                    <option></option>
                    <option value='ribbed-black' class="ribbed-black fg-white text-shadow">black</option>
                    <option value='ribbed-lime' class="ribbed-lime fg-white text-shadow">lime</option>
                    <option value='ribbed-green' class="ribbed-green fg-white text-shadow">green</option>
                    <option value='ribbed-emerald' class='ribbed-emerald fg-white text-shadow'>emerald</option>
                    <option value='ribbed-teal' class='ribbed-teal fg-white text-shadow'>teal</option>
                    <option value='ribbed-blue' class='ribbed-blue fg-white text-shadow'>blue</option>
                    <option value='ribbed-cyan' class='ribbed-cyan fg-white text-shadow'>cyan</option>
                    <option value='ribbed-cobalt' class='ribbed-cobalt fg-white text-shadow'>cobalt</option>
                    <option value='ribbed-indigo' class='ribbed-indigo fg-white text-shadow'>indigo</option>
                    <option value='ribbed-violet' class='ribbed-violet fg-white text-shadow'>violet</option>
                    <option value='ribbed-pink' class='ribbed-pink fg-white text-shadow'>pink</option>
                    <option value='ribbed-magenta' class='ribbed-magenta fg-white text-shadow'>magenta</option>
                    <option value='ribbed-crimson' class='ribbed-crimson fg-white text-shadow'>crimson</option>
                    <option value='ribbed-red' class='ribbed-red fg-white text-shadow'>red</option>
                    <option value='ribbed-orange' class='ribbed-orange fg-white text-shadow'>orange</option>
                    <option value='ribbed-amber' class='ribbed-amber fg-white text-shadow'>amber</option>
                    <option value='ribbed-yellow' class="ribbed-yellow fg-white text-yellow">yellow</option>
                    <option value='ribbed-brown' class="ribbed-brown fg-white text-shadow">brown</option>
                    <option value='ribbed-olive' class="ribbed-olive fg-white text-shadow">olive</option>
                    <option value='ribbed-steel' class='ribbed-steel fg-white text-shadow'>steel</option>
                    <option value='ribbed-mauve' class='ribbed-mauve fg-white text-shadow'>mauve</option>
                    <option value='ribbed-taupe' class='ribbed-taupe fg-white text-shadow'>taupe</option>
                    <option value='ribbed-gray' class='ribbed-gray fg-white text-shadow'>gray</option>
                    <option value='ribbed-dark' class='ribbed-dark fg-white text-shadow'>dark</option>
                    <option value='ribbed-darker' class='ribbed-darker fg-white text-shadow'>darker</option>
                    <option value='ribbed-darkBrown' class='ribbed-darkBrown fg-white text-shadow'>darkBrown</option>
                    <option value='ribbed-darkCrimson' class='ribbed-darkCrimson fg-white text-shadow'>darkCrimson</option>
                    <option value='ribbed-darkMagenta' class='ribbed-darkMagenta fg-white text-shadow'>darkMagenta</option>
                    <option value='ribbed-darkIndigo' class='ribbed-darkIndigo fg-white text-shadow'>darkIndigo</option>
                    <option value='ribbed-darkCyan' class='ribbed-darkCyan fg-white text-shadow'>darkCyan</option>
                    <option value='ribbed-darkCobalt' class='ribbed-darkCobalt fg-white text-shadow'>darkCobalt</option>
                    <option value='ribbed-darkTeal' class='ribbed-darkTeal fg-white text-shadow'>darkTeal</option>
                    <option value='ribbed-darkEmerald' class='ribbed-darkEmerald fg-white text-shadow'>darkEmerald</option>
                    <option value='ribbed-darkGreen' class='ribbed-darkGreen fg-white text-shadow'>darkGreen</option>
                    <option value='ribbed-darkOrange' class='ribbed-darkOrange fg-white text-shadow'>darkOrange</option>
                    <option value='ribbed-darkRed' class='ribbed-darkRed fg-white text-shadow'>darkRed</option>
                    <option value='ribbed-darkPink' class='ribbed-darkPink fg-white text-shadow'>darkPink</option>
                    <option value='ribbed-darkViolet' class='ribbed-darkViolet fg-white text-shadow'>darkViolet</option>
                    <option value='ribbed-darkBlue' class='ribbed-darkBlue fg-white text-shadow'>darkBlue</option>
                    <option value='ribbed-lightBlue' class='ribbed-lightBlue fg-white text-shadow'>lightBlue</option>
                    <option value='ribbed-lightRed' class='ribbed-lightRed fg-white text-shadow'>lightRed</option>
                    <option value='ribbed-lightGreen' class='ribbed-lightGreen fg-white text-shadow'>lightGreen</option>
                    <option value='ribbed-lighterBlue' class='ribbed-lighterBlue fg-white text-shadow'>lighterBlue</option>
                    <option value='ribbed-lightTeal' class='ribbed-lightTeal fg-white text-shadow'>lightTeal</option>
                    <option value='ribbed-lightOlive' class='ribbed-lightOlive fg-white text-shadow'>lightOlive</option>
                    <option value='ribbed-lightOrange' class='ribbed-lightOrange fg-white text-shadow'>lightOrange</option>
                    <option value='ribbed-lightPink' class='ribbed-lightPink fg-white text-shadow'>lightPink</option>
                    <option value='ribbed-grayDark' class='ribbed-grayDark fg-white text-shadow'>grayDark</option>
                    <option value='ribbed-grayLight' class='ribbed-grayLight fg-white text-shadow'>grayLight</option>
                </select>
            </div>
        </div>
        <div class="cell">
            <button class="button success">Insert</button>
        </div>

    </form>
</div>
<div data-role="dialog" id="dialog-ajax" class="padding20"
    data-close-button="true"
    data-href="/admin/add-player"
    data-width="1000"   data-overlay="true" data-overlay-color="op-dark" data-overlay-click-close="true" ></div>
<script type="text/javascript">
    
    $('#select').on('change', function() {
        $( "#select" ).removeAttr( "class" )
        $( "#select" ).addClass( this.value )

})
</script>