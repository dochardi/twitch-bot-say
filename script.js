const searchParams = new URLSearchParams(window.location.search);
    var type = searchParams.get('type');
    var lang = searchParams.get('lang');
    var username = searchParams.get('user');
    var url = searchParams.get('url');
    var userfrom = searchParams.get('to');
    var channel = searchParams.get('channel');
    
function loadJSON(callback,url) {   
  var xobj = new XMLHttpRequest();
  xobj.overrideMimeType("application/json");
  xobj.open('GET', url, true); 
  xobj.onreadystatechange = function () {
        if (xobj.readyState == 4 && xobj.status == "200") {
          callback(xobj.responseText);
        }
  };
  xobj.send(null);
}


function callback1(response){
        var botNames = JSON.parse(response)
        var keys = Object.keys(botNames);
        var randomProperty = keys[Math.floor(keys.length*Math.random())]
        var botName = botNames[randomProperty]['quote_text'];
        var result = botName.replace("[username]", username);
        var result = result.replace("[url]", url);
        var result = result.replace("[userto]", userfrom);
        var result = result.replace("[channel]", channel);
        document.write(result);
    }
    
    function show()
    {
    loadJSON(callback1,'//git.pruskil-it-service.de/twitch-bot-say/lang/' + lang +'/' + type +'.json')
    }