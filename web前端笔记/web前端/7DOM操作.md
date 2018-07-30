# DOM操作

当网页被加载时，浏览器会创建页面的文档对象模型（Document Object Model）。 

**HTML DOM** 模型被构造为**对象**的树

### DOM树

![](http://www.runoob.com/images/pic_htmltree.gif)



通过可编程的对象模型，JavaScript 获得了足够的能力来创建动态的 HTML。 

- JavaScript 能够改变页面中的所有 HTML 元素
- JavaScript 能够改变页面中的所有 HTML 属性
- JavaScript 能够改变页面中的所有 CSS 样式
- JavaScript 能够对页面中的所有事件做出反应





## 一 查找 HTML 元素

通常，通过 JavaScript，您需要操作 HTML 元素。

为了做到这件事情，您必须首先找到该元素。有三种方法来做这件事：

- 通过 id 找到 HTML 元素
- 通过标签名找到 HTML 元素
- 通过类名找到 HTML 元素



### (1) 通过 id 查找 HTML 元素

在 DOM 中查找 HTML 元素的最简单的方法，是通过使用元素的 id。

本例查找 id="intro" 元素：

### 实例

```javascript
var x=document.getElementById("intro");
```

如果找到该元素，则该方法将以对象（在 x 中）的形式返回该元素。

如果未找到该元素，则 x 将包含 null



### (2) 通过标签名查找 HTML 元素

本例查找 id="main" 的元素，然后查找 id="main" 元素中的所有 <p> 元素：

### 实例

```javascript
var x=document.getElementById("main");

var y=x.getElementsByTagName("p");
```



### (3) 通过类名找到 HTML 元素

本例通过 **getElementsByClassName** 函数来查找 **class="intro"** 的元素：

### 实例

```javascript
var x=document.getElementsByClassName("intro");
```

---



## 二 HTML DOM - 改变 HTML

### (1) 改变 HTML 内容（innerHTML/innerText）

修改 HTML 内容的最简单的方法是使用 innerHTML 属性。

如需改变 HTML 元素的内容，请使用这个语法：

##### document.getElementById(id).innerHTML=*新的 HTML*

本例改变了 \<p>元素的内容：

#### 实例

```javascript
<html>
<body>
	<p id="p1">Hello World!</p>
<script>
	document.getElementById("p1").innerHTML="新文本!";
</script>
</body>
</html>
```

实例讲解：

- 上面的 HTML 文档含有 id="header" 的 \<h1> 元素
- 我们使用 HTML DOM 来获得 id="header" 的元素
- JavaScript 更改此元素的内容 (innerHTML)


#### document.getElementById(*id*).innerText=新的文本内容

**注意:**

1. innerHTML是可以获取节点内 标签和内容
2. innerText 只能获取节点内的文本内容
3. innerHTML可以设置html和文本一起的内容 HTML标签会被浏览器所解析
4. innerText不可以设置html和文本一起的内容 HTML标签不会被浏览器所解析


### (2) 改变 HTML 属性  (attribute)

如需改变 HTML 元素的属性，请使用这个语法： 

##### document.getElementById(*id*).*attribute=新属性值*

本例改变了 \<img> 元素的 src 属性：

```javascript
<!DOCTYPE html>
<html>
<body>
	<img id="image" src="smiley.gif">
<script>
document.getElementById("image").src="landscape.jpg";
</script>
</body>
</html>
```

---

注意：在jQuery里不能改变input的type类型 出于安全性，只能是只读  如更改input的type

##### js设置密码的显示隐藏

```javascript
<input type="text" value="" name="xxx">
<button onclick="pas();">更改为密码</button>
<button onclick="text();">更改为文本显示</button>

function pas(){
  var i = document.getElementsByTagName('input')[0];
  i.type = 'password'
}
function text(){
  var i = document.getElementsByTagName('input')[0];
  i.type = 'text'
}
```



## 三 HTML DOM - 改变CSS

HTML DOM 允许 JavaScript 改变 HTML 元素的样式。

### (1) 改变 HTML 样式 （style.property）

如需改变 HTML 元素的样式，请使用这个语法：

##### document.getElementById(*id*).style.*property*=*新样式*

#### 实例

```javascript
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
  <p id="p1">Hello World!</p>
  <p id="p2">Hello World!</p>
<script>
  document.getElementById("p2").style.color="blue";
  document.getElementById("p2").style.fontFamily="Arial";
  document.getElementById("p2").style.fontSize="larger";
  document.getElementById("p2").style.backgroundImage="url(2.jpg)";
</script>
	<p>以上段落通过脚本修改。</p>
</body>
</html>
```



##### 获取生效style样式

##### window.getComputedStyle("元素", "伪类");

style = window.getComputedStyle(box, null);    //支持IE9+及非IE浏览器

`style = window.getComputedStyle(box, null).width;  `获取box的width属性值

##### 和style区别

  box.style.xxx 只能获取内联样式

 getComputedStyle 获取的生效样式可以获取全局的样式

### 设置多个css样式

1. **设置cssText**

```javascript
element.style.cssText = "样式1,样式2..."
```

2. **设置style的属性**

```
element.setAttribute('style', 'height: 100px !important');
```

##### 设置id或者class名称

```javascript
//设置id
element.setAttribute('id, 'id名称');
element.id = id名称；
//设置class
element.setAttribute('class, 'class名称');
element.className = class名称；
设置多个class
element.className = '样式1 样式2';
element.setAttribute('class','样式1 样式2')
```

##### 3.通过add方法添加多个类名

```javascript
document.getElementById("myDIV").classList.add("mystyle", "anotherClass", "thirdClass");
```

##### classList

classList 属性返回元素的类名，作为 DOMTokenList 对象。

该属性用于在元素中添加，移除及切换 CSS 类。 

classList 属性是只读的，但你可以使用 add() 和 remove() 方法修改它。

### (2) 使用事件

HTML DOM 允许我们通过触发事件来执行代码。

比如以下事件：

- 元素被点击。
- 页面加载完成。
- 输入框被修改。
- 输入框被修改。

在接下来的章节，你会学到更多关于事件的知识。

本例改变了 id="id1" 的 HTML 元素的样式，当用户点击按钮时：

### 实例

```javascript
<!DOCTYPE html>
<html>
<body>
	<h1 id="id1">我的标题 1</h1>
  <button type="button" 
  onclick="document.getElementById('id1').style.color='red'">
  点我!</button>
</body>
</html>
```



## 四  HTML DOM 事件

### 对事件做出反应

我们可以在事件发生时执行 JavaScript，比如当用户在 HTML 元素上点击时。

如需在用户点击某个元素时执行代码，请向一个 HTML 事件属性添加 JavaScript 代码：

##### onclick=*JavaScript*

HTML 事件的例子：

- 当用户点击鼠标时
- 当网页已加载时
- 当图像已加载时
- 当鼠标移动到元素上时
- 当输入字段被改变时
- 当提交 HTML 表单时
- 当用户触发按键时

### (1) onclick 点击事件

##### onclick = javascript

#### 实例

```javascript
<!DOCTYPE html>
<html>
<body>
	<h1 onclick="this.innerHTML='Ooops!'">点击文本!</h1>
</body>
</html>
```

本例从事件处理器调用一个函数：

##### onclick="changetext(this)"

#### 实例

```javascript
<script>
  function changetext(id)
  {
      id.innerHTML="Ooops!";
  }
</script>
</head>
<body>
	<h1 onclick="changetext(this)">点击文本!</h1>
</body>
</html>
```



### 使用 HTML DOM 来分配事件

HTML DOM 允许您使用 JavaScript 来向 HTML 元素分配事件：

#### 实例

向 button 元素分配 onclick 事件：

```javascript
<p>点击按钮执行 <em>displayDate()</em> 函数.</p>
<button id="myBtn">点这里</button>
<script>
document.getElementById("myBtn").onclick=function(){displayDate()};
function displayDate(){
	document.getElementById("demo").innerHTML=Date();
}
</script>
<p id="demo"></p>
```

#### 阻止右键菜单默认行为：

在之前使用event对象的button属性时, 点击鼠标右键会弹出系统菜单, 如果我们想要创建自己的右键菜单, 则需要先阻止默认的右键菜单

```javascript
document.oncontextmenu = function(){
      console.log("右键被按下");
      return false;
}
```



##### 不使用监听事件的停止传播(不再派发事件)

当标签进行嵌套时

##### event.stopPropagation();[prɑpəˈɡeʃən]

```javascript
<script>
        onload = function(){
            var divOne = document.getElementById('divOne');
            var divTwo = document.getElementById('divTwo');
            divOne.onclick = function(){
                alert('点击了one');
            }

            divTwo.onclick = function(e){
                alert('点击了two');
                e.stopPropagation();//停止时间的传播(不在派发事件)
            }

        }
    </script>
</head>
<body>
<div id="divOne">one
    <div id="divTwo">two</div>
</div>
```

### (2) onload 和 onunload 事件

onload 和 onunload 事件会在用户进入或离开页面时被触发。

onload 事件可用于检测访问者的浏览器类型和浏览器版本，并基于这些信息来加载网页的正确版本。

onload 和 onunload(了解) 事件可用于处理 cookie。

onunload 关闭当前页面的操作时候的操作(了解)

##### 实例:

```javascript
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body onload="checkCookies()">
<script>
function checkCookies(){
	if (navigator.cookieEnabled==true){
		alert("Cookies 可用")
	}
	else{
		alert("Cookies 不可用")
	}
}
</script>
	<p>弹窗-提示浏览器 cookie 是否可用。</p>
</body>
</html>
```



### (3) onchange 当文本框(input 或 textarea)内容改变且失去焦点后触发。 

onchange 事件常结合对输入字段的验证来使用。

下面是一个如何使用 onchange 的例子。当用户改变输入字段的内容时，会调用 upperCase() 函数。

#### 实例

```html
<script>
  function upperCase(){
    var x=document.getElementById("fname");
    x.value=x.value.toUpperCase();
  }
</script>
<body>
	<input type="text" id="fname" onchange="upperCase()">
	<select onchange="alert(this.value);">
      <option value="1">北京</option>
</body>    

<script>
  function upperCase(this){
    this.value=this.value.toUpperCase();
  }
</script>
<body>
<input type="text" id="fname" onchange="upperCase(this)">
</body>    
<input type="text" id="fname" onchange="this.value = this.value.toUpperCase();">
```

#### onselect：当用户选择文本框(input 或 textarea)中的内容触发

### (4) onfocus/onblur  获取焦点/失去焦点

输入框获取焦点 的事件

#### 实例:

```javascript
<script>
function myFunction(x){
	x.style.background="yellow";
}
</script>
</head>
<body>

输入你的名字: <input type="text" onfocus="myFunction(this)" onblur="this.style.backgroundColor='red'">
<p>当输入框获取焦点时，修改背景色（background-color属性） 将被触发。</p>
```

### (5) onmouseover 和 onmouseout 事件

onmouseover 和 onmouseout 事件可用于在用户的鼠标移至 HTML 元素上方或移出元素时触发函数。

#### 实例:

```javascript
<div onmouseover="mOver(this)" onmouseout="mOut(this)" style="background-color:#D94A38;width:120px;height:20px;padding:40px;">Mouse Over Me</div>
<script>
function mOver(obj){
	obj.innerHTML="Thank You"
}
function mOut(obj){
	obj.innerHTML="Mouse Over Me"
}
</script>
```

### onmouseenter 和 onmouseleave 事件

事件可用于在用户的鼠标移至 HTML 元素上方或移出元素时触发函数。

over 和  enter的区别

1. 如果元素没有子元素的时候，效果完全一样

2. 如果元素包含子元素

   当由父元素进入子元素的时候，over会继续触发

   over实际上只要在跨越边界的时候，就会进行触发



### (6) onmousedown、onmouseup 以及 onclick 事件

onmousedown, onmouseup 以及 onclick 构成了鼠标点击事件的所有部分。首先当点击鼠标按钮时，会触发 onmousedown 事件，当释放鼠标按钮时，会触发 onmouseup 事件，最后，当完成鼠标点击时，会触发 onclick 事件。

#### 实例:

```javascript
<p onmousedown="this.innerHTML='mousedown'" onmouseup="this.innerHTML='out了'">点击</p>
```

```javascript
<h1 onclick="console.log(this)" onmousedown="console.log('over')" onmouseup="console.log('up')">点击文本!</h1>
```

### onmousemove

鼠标移动

### (7) 事件对象 event(隐藏参数)

### 鼠标事件

clientX: 浏览器可视区域的x坐标

clientY: 浏览器可视区域的y坐标

##### clientX:跟screenX相比就是将参照点改成了浏览器内容区域的左上角，该参照点会随之滚动条的移动而移动。

pageX: 浏览器内容区域的x坐标

pageY: 浏览器内容区域的y坐标

##### pageX：参照点也是浏览器内容区域的左上角，但它不会随着滚动条而变动

screenX: 显示器屏幕的x坐标

screenY: 显示器屏幕的y坐标

##### screenX:鼠标位置相对于用户屏幕水平偏移量，而screenY也就是垂直方向的，此时的参照点也就是原点是屏幕的左上角。

offsetX: 鼠标点击的元素位置距离元素左边界的x坐标

offsetY: 鼠标点击的元素位置距离元素上边界的y坐标

例如: 

```javascript
document.onmousedown= function(evt) {
       var e = evt ; 
       console.log(e.clientX + ',' + e.clientY); 
       console.log(e.screenX + ',' + e.screenY);
       console.log(e.pageX + “,” + e.pageY);
};
```



### 键盘事件

+ onkeydown  键盘按住不放会一直触发  任意键
+ onkeypress  键盘按住不放会一直触发   字符键
+ onkeyup：当用户释放键盘上的某个键触发。

#### 键码 : keyCode属性

​      所有按键(包括功能键control, alt,shift, tab, 方向键等, 不包括亮度,音量..的按键)在发生 keydown和keyup 事件时，event对象的 keyCode属性中会包含一个代码，与键盘上一个特定的键对应。对数字字母字符集，keyCode属性的值与 ASCII 码中对应.

document.onkeydown = function(evt) { 

​      	var e = evt ;

​      	console.log(e.keyCode);  //按任意键，得到相应的 keyCode 

​	String.fromCharCode(e.keyCode) //获对应字符

};

注意: 大写字母或小写的编码相同, 都为大写字母。

#### 字符编码: charCode属性

​      Firefox,Chrome和Safari的event对象支持charCode属性,只有按下字符键并且使用keypress事件时才会得到charCode,这个charCode的值和UniCode码对应,和keyCode也类似,但是charCode的字母区分大小写.(字符键:数字,字母(区分大小写),字符,空格,回车)

document.onkeypress =function(evt) { 

​      var e= evt ;

​      console.log(e.charCode);

}

注：可以使用String.fromCharCode()将 Unicode编码转换成实际的字符

### (8) HTML DOM EventListener  事件监听

可以对一个element绑定多个同样的事件  且不会被覆盖

#### addEventListener() 方法

#### 语法

##### *element*.addEventListener(*event, function, useCapture*);

第一个参数是事件的类型 (如 "click" 或 "mousedown"). 

第二个参数是事件触发后调用的函数。 

第三个参数是个布尔值用于描述事件是冒泡还是捕获。该参数是可选的。

#### 实例:

在用户点击按钮时触发监听事件：

```javascript
//使用函数名，来引用外部函数:
<p>该实例使用 addEventListener() 方法在按钮中添加点击事件。 </p>
<button id="myBtn">点我</button>
<p id="demo"></p>
<script>
  document.getElementById("myBtn").addEventListener("click", displayDate);
  function displayDate() {
      document.getElementById("demo").innerHTML = Date();
  }
</script>
//直接添加函数体
element.addEventListener("click", function(){ alert("Hello World!"); });

//不使用事件监听的情况
window.onload = function(){ 
 var btn = document.getElementById("yuanEvent"); 
 btn.onclick = function(){ 
  alert("第一个事件"); 
 } 
 btn.onclick = function(){ 
  alert("第二个事件"); 
 } 
 btn.onclick = function(){ 
  alert("第三个事件"); 
 } 
}
最后只输出：第三个事件，因为后一个方法都把前一个方法覆盖掉了
```

| ![Note](http://www.runoob.com/images/lamp.jpg) | 注意:不要使用 "on" 前缀。 例如，使用 "click" ,而不是使用 "onclick"。 |
| :--------------------------------------: | ---------------------------------------- |
|                                          |                                          |

### 1 向同一个元素中添加多个事件句柄

addEventListener() 方法允许向同一个元素添加多个事件，且不会覆盖已存在的事件：

#### 实例

```javascript
element.addEventListener("click", myFunction);
element.addEventListener("click", mySecondFunction);
```

你可以向同个元素添加不同类型的事件：

#### 实例

```javascript
element.addEventListener("mouseover", myFunction);

element.addEventListener("click", mySecondFunction);

element.addEventListener("mouseout", myThirdFunction);
```



### 2 向 Window 对象添加事件句柄

addEventListener() 方法允许你在 HTML DOM 对象添加事件监听， HTML DOM 对象如： HTML 元素, HTML 文档, window 对象。或者其他支出的事件对象如: xmlHttpRequest 对象。

#### 实例

##### 当用户重置窗口大小时添加事件监听：

```javascript
window.addEventListener("resize", function(){
    document.getElementById("demo").innerHTML = document.body.scrollWidth+''+document.body.scrollHeight;
});
```

#### 传递参数

当传递参数值时，使用"匿名函数"调用带参数的函数：

```javascript
<button id="myBtn">点我</button>
<p id="demo"></p>
<script>
var p1 = 5;
var p2 = 7;
document.getElementById("myBtn").addEventListener("click", function() {
    myFunction(p1, p2);
});
function myFunction(a, b) {
    var result = a * b;
    document.getElementById("demo").innerHTML = result;
}
</script>
```



### 3 事件冒泡或事件捕获？

事件传递有两种方式：冒泡与捕获。

事件传递定义了元素事件触发的顺序。 如果你将\<p> 元素插入到 \<div> 元素中，用户点击 \<p> 元素, 哪个元素的 "click" 事件先被触发呢？

在 *冒泡*  中，内部元素的事件会先被触发，然后再触发外部元素，即：\<p> 元素的点击事件先触发，然后会触发 \<div> 元素的点击事件。

在  *捕获* 中，外部元素的事件会先被触发，然后才会触发内部元素的事件，即： \<div> 元素的点击事件先触发 ，然后再触发 \<p> 元素的点击事件。

addEventListener() 方法可以指定 "useCapture" 参数来设置传递类型：

addEventListener(*event*, *function*, *useCapture*);

默认值为 false, 即冒泡传递，当值为 true 时, 事件使用捕获传递。

##### 实例:

```javascript
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
div {
    background-color: coral;
    border: 1px solid;
    padding: 50px;
}
</style>
</head>
<body>
<p>实例演示了在添加不同事件监听时，冒泡与捕获的不同。</p>
<div id="myDiv">
	<p id="myP">点击段落，我是冒泡。</p>
</div><br>
<div id="myDiv2">
	<p id="myP2">点击段落，我是捕获。 </p>
</div>
<script>
  document.getElementById("myP").addEventListener("click", function() {
      alert("你点击了 P 元素!");
  }, false);
  document.getElementById("myDiv").addEventListener("click", function() {
      alert(" 你点击了 DIV 元素 !");
  }, false);
  document.getElementById("myP2").addEventListener("click", function() {
      alert("你点击了 P2 元素!");
  }, true);
  document.getElementById("myDiv2").addEventListener("click", function() {
      alert("你点击了 DIV2 元素 !");
  }, true);
</script>
</body>
</html>
```

### 组织当标签嵌套时候的冒泡扩散

```javascript
   <script>
        onload = function () {
            var divOne = document.getElementById('div_one');
            var divTwo = document.getElementById('div_two');
            divOne.style.cssText = 'width:100%;height:400px;background-color:red;';
            divTwo.style.cssText = 'width:100%;height:200px;background-color:green;';
            divOne.addEventListener('click',function (evt) {
                console.log('红')
            })
            divTwo.addEventListener('click',function (evt) {
                console.log('绿')
                evt.stopPropagation();//阻止扩散  但是对冒泡捕获不起作用
            })
        };
    </script>
</head>
<body>
<div id="div_one">
    <div id="div_two"></div>
</div>
</body>
</html>
```



### 4 removeEventListener() 方法

removeEventListener() 方法移除由 addEventListener() 方法添加的事件句柄:

*element*.removeEventListener("mousemove", myFunction);

#### 实例

```javascript
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<head>
<style>
#myDIV {
    background-color: coral;
    border: 1px solid;
    padding: 50px;
    color: white;
}
</style>
</head>
<body>

<div id="myDIV"> div 元素添加了 onmousemove 事件句柄，鼠标在桔红色的框内移动时会显示随机数。
  <p>点击按钮移除 DIV 的事件句柄。</p>
  <button onclick="removeHandler()" id="myBtn">点我</button>
</div>
<p id="demo"></p>
<script>
document.getElementById("myDIV").addEventListener("mousemove", myFunction);
function myFunction() {
    document.getElementById("demo").innerHTML = Math.random();
  	document.getElementById("demo").style.backgroundColor = 'rgb('+Math.floor(255*Math.random())+','+Math.floor(255*Math.random())+','+Math.floor(255*Math.random());
}
function removeHandler() {
    document.getElementById("myDIV").removeEventListener("mousemove", myFunction);
}
</script>
</body>
</html>
```



### (9) HTML DOM 元素(节点)

#### 创建新的 HTML 元素

如需向 HTML DOM 添加新元素，您必须首先创建该元素（元素节点），然后向一个已存在的元素追加该元素。 

1. 创建节点

   document.createElement('标签名')

2. 创建文本节点

   document.createTextNode("文本内容")

3. 添加节点

   节点名.appendChild("node")

   **或者**

   节点名.innerText = '文本的内容';

4. 从父元素中删除子元素

   parent.removeChild(child);

   例如:

   var child=document.getElementById("p1");
   child.parentNode.removeChild(child);

   ul.removeChild(ul.lastElementChild);//删除节点

5. cloneNode() 方法

   定义和用法

   cloneNode() 方法创建节点的拷贝，并返回该副本。

   cloneNode(true) 方法克隆所有属性以及它们的值。

   如果您需要克隆所有后代，请把 deep 参数设置 true，否则设置为 false。

   **实例**

   ```javascript
   var node = document.getElementsByTagName('ul')[0];
               var newLi = document.createElement('li')
               newLi.innerText = '新的'
               l = node.children.length;
               for(var i=0;i<l;i++){
                   var x = node.children[i].cloneNode(true);
                   node.appendChild(x)
               }
   ```

   ​

6. element.replaceChild() 替换元素中的子节点

   ```javascript
   document.getElementById("myList").replaceChild(newnode,oldnode);
   ```

7. 获取父节点

   node.parentNode

8. 获取父类的第一个节点/最后一个

   node.parentNode.firstChild      如果父类换行才是第一个子标签 那么会是空白

   node.parentNode.lastChild      获取最后一个节点

   ```javascript
   firstChild
   firstElementChild  //第一个HTML存在换行则会获取空白节点
   lastChild
   lastElementChild  //最后一个HTML存在换行则会获取空白节点
   ```

   注意:因为第一个是空白节点 原因是 代码换行 如果不换行第一个就是正常的标签

9. 前一个同胞节点

   previousSibling   如果前一个HTML存在换行则会获取空白节点

   previousElementSibling  前一个兄弟节点是否换行不会造成影响

   注释：如果没有 previousSibling 节点，则返回值是 null。

10. 后一个同胞节点

 nextElementSibling   后一个兄弟节点是否换行不会造成影响

11. 获取所有子节点

    node.children

12. 返回元素的标签名。

    element.tagName

13. 从元素中移除指定属性

    removeAttribute

14. 在指定的已有的子节点之前插入新节点。

    element.insertBefore(新的节点,插入节点的位置)

    ```javascript
    <ul id="myList"><li>Coffee</li><li>Tea</li></ul>
    <p id="demo">请点击按钮向列表插入一个项目。</p>
    <button onclick="myFunction()">试一下</button>
    <script>
      function myFunction()
      {
      var newItem=document.createElement("LI")
      var textnode=document.createTextNode("Water")
      newItem.appendChild(textnode)

      var list=document.getElementById("myList")
      list.insertBefore(newItem,list.childNodes[0]);
      }
    </script>
    ```




#### 节点添加


实例

```javascript
<div id="div1">
  <p id="p1">这是一个段落。</p>
  <p id="p2">这是另一个段落。</p>
</div>
<script>
  var para=document.createElement("p");
  var node=document.createTextNode("这是一个新段落。");
  para.appendChild(node);
  var element=document.getElementById("div1");
  element.appendChild(para);
</script>
```

















