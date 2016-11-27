/**
 * 公共函数
 *
 */
/*小于10添加0*/
function addZero(_data){
    if(_data<10){
        _data="0"+_data;
    }
    return _data;
}
/*根据id获取元素*/
function getId(_id){
    return document.getElementById(_id);
}
/*获取窗口的尺寸*/
function getWindowSize(){
    return{
        width:document.documentElement.clientWidth||window.innerWidth,
        height:document.documentElement.clientHeight||window.innerHeight
    }
}
/*判断滚动条的尺寸*/
function getScrollSize(){
    return{
        left:document.documentElement.scrollLeft||document.body.scrollLeft,
        top:document.documentElement.scrollTop||document.body.scrollTop
    }
}
/*元素居中
* 水平居中：窗口的宽度的一半减去元素宽度的一半，再加上水平滚动条
* */
function center(element){
    element.style.left=(getWindowSize().width-element.offsetWidth)/2+getScrollSize().left+"px";
    element.style.top=(getWindowSize().height-element.offsetHeight)/2+getScrollSize().top+"px";
}
/*设置cookie*/
function setCookie(_name,_value,expires,path,domain,secure){
    //"key=value;expires=时间;path=路径;domain=主机名;secure"
    var cookieText=encodeURI(_name)+"="+encodeURI(_value);
    /*如果expires是时间对象的实例的话*/
    if(expires instanceof Date){
        cookieText+=";expires="+expires;
    }
    if(path){
        cookieText+=";path="+path;
    }
    if(domain){
        cookieText+=";domain="+domain
    }
    if(secure){
        cookieText+=";secure";
    }
    document.cookie=cookieText;
    //alert(cookieText);
}
/*读取cookie*/
function getCookie(_name){
    var name=encodeURI(_name)+"=";
    var str=document.cookie;
    var strStart=str.indexOf(name);
    //alert(strStart);
    var strEnd=str.indexOf(";",strStart);
    //alert(strEnd);
    //如果字符串末尾没有分号，截止的位置就是整个字符串的长度;
    if(strEnd==-1){
        strEnd=str.length;
    }
    return decodeURI(str.substring(strStart+name.length,strEnd));
    //console.log(strStart+name.length);
    //var bj="beijing=";
    //document.write(str.substring(strStart+name.length,strEnd));
}
/*让cookie失效*/
function removeCookie(_name){
    document.cookie=_name+"=;expires="+new Date(0);
}
