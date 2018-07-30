# Window - 浏览器对象模型

浏览器对象模型 (BOM) 使 JavaScript 有能力与浏览器"对话"。

浏览器对象模型（**B**rowser **O**bject **M**odel (BOM)）

## 一 Window 对象

所有浏览器都支持 window 对象。它表示浏览器窗口。

HTML DOM 的 document 也是 window 对象的属性之一：

`window.document.getElementById("header");`

与此相同：

`document.getElementById("header");`

## 二 Window 尺寸

有三种方法能够确定浏览器窗口的尺寸。

对于Internet Explorer、Chrome、Firefox、Opera 以及 Safari：

- window.innerHeight - 浏览器窗口的内部高度(包括滚动条)  可见区域

- window.innerWidth - 浏览器窗口的内部宽度(包括滚动条)    可见区域

- ```javascript
  window.document.body.offsetHeight
  window.document.body.offsetWidth
  //获取的是 整个body体的宽度和高度 需要注意去掉HTML5的头
  ```

对于 Internet Explorer 8、7、6、5：

- document.documentElement.clientHeight
- document.documentElement.clientWidth

或者

- document.body.clientHeight == innerHeight   网页可见区域高
- document.body.clientWidth == innerWidth      网页可见区域宽

```javascript
document.write(window.innerWidth+'<br>');
document.write(window.innerHeight+'<br>');
document.write(window.document.body.offsetWidth+'<br>');
document.write(window.document.body.offsetHeight+'<br>');
document.write(window.document.body.clientWidth+'<br>');
document.write(window.document.body.clientHeight+'<br>');
```



## 三 其他 Window 方法

一些其他方法：

- window.open() - 打开新窗口
- window.close() - 关闭当前窗口
- window.moveTo() - 移动当前窗口（不用）
- window.resizeTo() - 调整当前窗口的尺寸



## 四 Window Screen 可用宽度

screen.availWidth 属性返回访问者屏幕的宽度，以像素计，减去界面特性，比如窗口任务栏。

实例:

返回您的屏幕的可用宽度：

```javascript
<script>
	document.write("可用宽度: " + screen.availWidth);
</script>
```



## 五 Window Screen 可用高度

screen.availHeight 属性返回访问者屏幕的高度，以像素计，减去界面特性，比如窗口任务栏

返回您的屏幕的可用高度：

```javascript
<script>
	document.write("可用高度: " + screen.availHeight);
</script>
```



## 六 Window Location 跳转

window.location 对象用于获得当前页面的地址 (URL)，并把浏览器重定向到新的页面。

**window.location** 对象在编写时可不使用 window 这个前缀。 一些例子：

一些实例:

- location.hostname 返回 web 主机的域名

- Location.href          属性返回当前的URL地址

- Location.href=url   跳转新的地址

- location.pathname 返回当前页面的路径和文件名

- location.port 返回 web 主机的端口 （80 或 443）

- location.protocol 返回所使用的 web 协议（http:// 或 https://）

- location.assign(url) 方法加载新的文档。

- window.location.replace(url) ： 通过加载 URL 指定的文档来替换当前文档 ，这个方法是替换当前窗口页面，前后两个页面共用一个窗口，所以是没有后退返回上一页的

- window.location.reload()  方法用于刷新当前文档。

- ```javascript
  说明
  如果该方法没有规定参数，或者参数是 false，它就会用 HTTP 头 If-Modified-Since 来检测服务器上的文档是否已改变。如果文档已改变，reload() 会再次下载该文档。如果文档未改变，则该方法将从缓存中装载文档。这与用户单击浏览器的刷新按钮的效果是完全一样的。
  如果把该方法的参数设置为 true，那么无论文档的最后修改日期是什么，它都会绕过缓存，从服务器上重新下载该文档。这与用户在单击浏览器的刷新按钮时按住 Shift 健的效果是完全一样。
  ```

- window.location.search  属性用于获取url的参数部分



## 七 Window History  历史

- history.back() - 与在浏览器点击后退按钮相同  加载历史列表中的前一个 URL
- history.forward() - 与在浏览器中点击向前按钮相同  加载历史列表中的下一个 URL。
- history.go(+1) 前进 
- history.go(-1)  后退+刷新  不同的浏览器有区别

#### 实例

```Javascript
<html>
<head>
<script>
function goBack()
  {
  window.history.back()
  }
function goforward()
  {
  window.history.forward()
  }
</script>
</head>
<body>
  <input type="button" value="Back" onclick="goBack()">
  <input type="button" value="Back" onclick="goforward()">
  <input type="button" value="go+1" onclick="javascript:history.go(+1)">
  <input type="button" value="go-1" onclick="javascript:history.go(-1)">
</body>
</html>
```



## 八 Window Navigator  对象包含有关访问者浏览器的信息。

浏览器代号: " + navigator.appCodeName
浏览器名称: " + navigator.appName
浏览器版本: " + navigator.appVersion
启用Cookies: " + navigator.cookieEnabled
硬件平台: " + navigator.platform
用户代理: " + navigator.userAgent
用户代理语言: " + navigator.systemLanguage


## 九 JavaScript 弹窗

可以在 JavaScript 中创建三种消息框：警告框、确认框、提示框。

##### windows可以不加

#### (1) 警告框

警告框经常用于确保用户可以得到某些信息。

当警告框出现后，用户需要点击确定按钮才能继续进行操作。

##### **语法**

window.alert("*sometext*");

#### (2) 确认框

确认框通常用于验证是否接受用户操作。

当确认卡弹出时，用户可以点击 "确认" 或者 "取消" 来确定用户操作。 

当你点击 "确认", 确认框返回 true， 如果点击 "取消", 确认框返回 false。

##### **语法**

window.confirm("*sometext*"); [kənˈfɜ:rm]

##### 实例

```javascript
var r=confirm("按下按钮");
if (r==true)
{
    x="你按下了\"确定\"按钮!";
}
else
{
    x="你按下了\"取消\"按钮!";
}
```

#### (3) 提示框

提示框经常用于提示用户在进入页面前输入某个值。

当提示框出现后，用户需要输入某个值，然后点击确认或取消按钮才能继续操纵。

如果用户点击确认，那么返回值为输入的值。如果用户点击取消，那么返回值为 null。

### **语法**

window.prompt("*sometext*","*defaultvalue*"); [prɑ:mpt] 

#### 实例

```javascript
var person=prompt("请输入你的名字","Harry Potter");
if (person!=null && person!="")
{
    x="你好 " + person + "! 今天感觉如何?";
    document.getElementById("demo").innerHTML=x;
}
```



### (4) 换行

弹窗使用 反斜杠 + "n"(\n) 来设置换行。

##### 实例

alert("Hello\nHow are you?");



## 十 JavaScript 计时事件

##### 定时执行

- setInterval() - 间隔指定的毫秒数不停地执行指定的代码。 
- setTimeout() - 暂停指定的毫秒数后执行指定的代码

只执行一次

+ setTimeout() 方法
+ clearTimeout() 方法用于停止执行setTimeout()方法的函数代码。

**Note:** setInterval() 和 setTimeout() 是 HTML DOM Window对象的两个方法。

单位是毫秒  1000毫秒=1秒



#### 

















