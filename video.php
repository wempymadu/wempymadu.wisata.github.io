<script type="text/javascript">
function MM_CheckFlashVersion(reqVerStr,msg){
  with(navigator){
    var isIE  = (appVersion.indexOf("MSIE") != -1 && userAgent.indexOf("Opera") == -1);
    var isWin = (appVersion.toLowerCase().indexOf("win") != -1);
    if (!isIE || !isWin){  
      var flashVer = -1;
      if (plugins && plugins.length > 0){
        var desc = plugins["Shockwave Flash"] ? plugins["Shockwave Flash"].description : "";
        desc = plugins["Shockwave Flash 2.0"] ? plugins["Shockwave Flash 2.0"].description : desc;
        if (desc == "") flashVer = -1;
        else{
          var descArr = desc.split(" ");
          var tempArrMajor = descArr[2].split(".");
          var verMajor = tempArrMajor[0];
          var tempArrMinor = (descArr[3] != "") ? descArr[3].split("r") : descArr[4].split("r");
          var verMinor = (tempArrMinor[1] > 0) ? tempArrMinor[1] : 0;
          flashVer =  parseFloat(verMajor + "." + verMinor);
        }
      }
      // WebTV has Flash Player 4 or lower -- too low for video
      else if (userAgent.toLowerCase().indexOf("webtv") != -1) flashVer = 4.0;

      var verArr = reqVerStr.split(",");
      var reqVer = parseFloat(verArr[0] + "." + verArr[2]);
  
      if (flashVer < reqVer){
        if (confirm(msg))
          window.location = "http://www.macromedia.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash";
      }
    }
  } 
}
</script>
<body onLoad="MM_CheckFlashVersion('7,0,0,0','Content on this page requires a newer version of Macromedia Flash Player. Do you want to download it now?');"><table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
		<td valign="top" width="715"><h1>Video Komodo</h1>
		  <table width="100%" border="1">
            <tr>
              <td><iframe width="350" height="200" src="https://www.youtube.com/embed/SlokSiuY_2g" frameborder="0" allowfullscreen></iframe>
</td>
              <td><iframe width="350" height="200" src="https://www.youtube.com/embed/zlvy4ePLPsg" frameborder="0" allowfullscreen></iframe>
</td>
            </tr>
            <tr>
              <td><iframe width="350" height="200" src="https://www.youtube.com/embed/XEmiN7XKHbw" frameborder="0" allowfullscreen></iframe>
</td>
              <td><iframe width="350" height="200" src="https://www.youtube.com/embed/OsaJwCo6Fao" frameborder="0" allowfullscreen></iframe></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>		  <p>&nbsp;</p></td>
</tr>
</table>
