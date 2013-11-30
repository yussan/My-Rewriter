<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>MyRewriter|change the words</title>
        <link rel="icon" href="style/img/favicon.png" />
        <link rel="stylesheet" type="text/css" href="style/style.css" />
       
       	<script type="text/javascript" src="jquery-1.4.3.min.js"></script> 
		<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
		<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />
		<script type="text/javascript">
		
					$("#various1").fancybox({
						'scrolling' : 'no',
                        'titleShow' : false,
                        'overlayOpacity' : 0.9,
                        'overlayColor' : '#fff',
					});

		</script>

    </head>


    <body>

        <!--FB script-->
        <div id="fb-root"></div>


        <!--header-->
        <div id="header">
          <div id="navbar"> 
                <ul>
                    <li><a href="http://localhost/MyRewriter.com">Home</a></li>
                    <li><a id="various1" href="#inline1" title="About MyRewriter">About</a></li>
                    <li><a id="various1" href="#howtouse">HowToUse</a></li>
                </ul>
            </div>
            <?php include "style/header.html"; ?>           
        </div>
    
        <!--pop up display-->
        <div style="display:none">
            <div id="howtouse">
                how to use, is secret
            </div>
        </div>

        <!--language bar-->
        <div style="width:100%; height: 50px;background-color: #5484fd;">
            <!--kiri1-->
            <div style="float: left;width:50%;height:100%;">
                <p style="color: #FFFFFF" class="header-text">Choose language : </p>
            </div>
            <!--kanan1--->
            <div style="float: right;width:50%;height:100%;" class="mini_flag">
                <!--
                <ul>
                <li>
                <a onclick = "changeIdLanguage()" href = "#BahasaIndonesia"><img src = "style/img/flag/masterindo.png" alt = ""/></a>
                </li>
                <li>
                <a onclick = "changeJpLanguage()" href = "#JapanLanguage"><img src = "style/img/flag/masterjapan.png" alt = ""/></a>
                </li>
                <li>
                <a onclick = "changeEnLanguage()" href = "#EnglishLanguage"><img src = "style/img/flag/masterenglish.png" alt = ""/></a>
                </li>
                </ul>
                -->
                  <form id="optionsLanguage" name="form" class="selectChangeLanguage" >
                    <input type="submit" value="GO" onClick="language()" />
                    <select name="menuLanguage">
                        <option value="#">Language</option>
                        <option value="id" >Indonesia</option>
                        <option value="jp">Japanese</option>
                        <option value="en">English</option>
                    </select>
                        
                </form>
            </div>

        </div>

        <br/>
        <!--content-->
        <div id ="content">
            <script type="text/javascript" src="js/changeLanguage.js"></script>
            <?php include "language/home_flag.html" ?>
        </div>
        <!--footer-->
        <div id="footer">
            <div class="footernavbar">
                <table align="center" width="24%" style="margin-bottom: 10px">
                    <tr>
                        <td width="6%">
                            <a href="#">Contact Us</a>
                        </td>
                        <td width="8%">
                            <a href="#">Report Problem</a>
                        </td>
                        <td width="8%">
                            <a href="#">Become Developer</a>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="copyright">
                <p><a class="blue-link" href="http://myrewriter.com">www.MyRewriter.com</a></p>
                <p>My Rewriter, Change the Words, help publisher make others article</p>
                <p>Copyright c 2013 MyRewriter, Mr.Yussan</p>
            </div>
        </div>

    </body>

<!--javascript-->
 <script type="text/javascript" src="js/changeLanguage.js"></script>

<script type="text/javascript">
    function language() {
        var language = (document.form.menuLanguage.value);

        if(language == "id") {
            changeIdLanguage();
        } else if (language == "en") {
           changeEnLanguage();
        } else if(language == "jp") {
            changeJpLanguage();
        } else (none);
    };
</script>

<!--FB api-->
<script>
/*
    (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/id_ID/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));*/
</script>

</html>
