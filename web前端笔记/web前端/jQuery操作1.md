## jQuery 介绍

##### jQuery 是一个 JavaScript 库。

##### jQuery 极大地简化了 JavaScript 编程。

## 下载 jQuery

共有两个版本的 jQuery 可供下载：一份是精简过的，另一份是未压缩的（供调试或阅读）。

这两个版本都可从 [jQuery.com](http://docs.jquery.com/Downloading_jQuery#Download_jQuery) 下载



# jQuery 语法

##### jQuery 语法实例

- $(this).hide()

  演示 jQuery hide() 函数，隐藏当前的 HTML 元素。

- $("#test").hide()

  演示 jQuery hide() 函数，隐藏 id="test" 的元素。

- $("p").hide()

  演示 jQuery hide() 函数，隐藏所有 <p> 元素。

- $(".test").hide()

  演示 jQuery hide() 函数，隐藏所有 class="test" 的元素。


#### 入口操作:

$(function(){

})

$(document).ready(function(){

})

相当于js的onlaod = functino(){}

在线js

```javascript
<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
```


## jQuery 选择器

### (1) jQuery 元素选择器

jQuery 使用 CSS 选择器来选取 HTML 元素。

$("p") 选取 <p> 元素。

$("p.intro") 选取所有 class="intro" 的 <p> 元素。

$("p#demo") 选取所有 id="demo" 的 <p> 元素。

$('ul>li:nth-child(2)')

$('li~p')

$('li+p')

$('ul li')

### (2) jQuery 属性选择器

jQuery 使用 XPath 表达式来选择带有给定属性的元素。

$("[href]") 选取所有带有 href 属性的元素。

$("[href='#']") 选取所有带有 href 值等于 "#" 的元素。

$("[href!='#']") 选取所有带有 href 值不等于 "#" 的元素。

$("[href$='.jpg']") 选取所有 href 值以 ".jpg" 结尾的元素。



### (3) jQuery CSS 选择器

jQuery CSS 选择器可用于改变 HTML 元素的 CSS 属性。

下面的例子把所有 p 元素的背景颜色更改为红色：

```javascript
$("p").css("background-color","red");
```



# jQuery 效果

## 一  jQuery hide() 和 show()  显示隐藏

### 语法：

```javascript
$(selector).hide(speed,callback);

$(selector).show(speed,callback);
```

+ 可选的 speed 参数规定隐藏/显示的速度，可以取以下值："slow"、"fast" 或毫秒。
+ 可选的 callback 参数是隐藏或显示完成后所执行的函数名称。
+ 下面的例子演示了带有 speed 参数的 hide() 方法：

##### 通过 jQuery，您可以使用 hide() 和 show() 方法来隐藏和显示 HTML 元素

```javascript
$("#hide").click(function(){
  $("p").hide();
});

$("#show").click(function(){
  $("p").show();
});
```

#### 实例

```javascript
$("button").click(function(){
  $("p").hide(1000);
});
```



####  jQuery toggle()

通过 jQuery，您可以使用 toggle() 方法来切换 hide() 和 show() 方法。

显示被隐藏的元素，并隐藏已显示的元素：

### 实例

```javascript
$("button").click(function(){
  $("p").toggle();
});
```

### 语法：

```javascript
$(selector).toggle(speed,callback);
```

+ 可选的 speed 参数规定隐藏/显示的速度，可以取以下值："slow"、"fast" 或毫秒。
+ 可选的 callback 参数是 toggle() 方法完成后所执行的函数名称。

## 二 jQuery 效果 - 淡入淡出

### 一 jQuery Fading 方法

通过 jQuery，您可以实现元素的淡入淡出效果。

jQuery 拥有下面四种 fade 方法：

- fadeIn()
- fadeOut()
- fadeToggle()
- fadeTo()

### fadeIn() 方法

jQuery fadeIn() 用于淡入已隐藏的元素。

### 语法：

```javascript
$(selector).fadeIn(speed,callback);
```

+ 可选的 speed 参数规定效果的时长。它可以取以下值："slow"、"fast" 或毫秒。

+ 可选的 callback 参数是 fading 完成后所执行的函数名称

  ​

下面的例子演示了带有不同参数的 fadeIn() 方法：

```javascript
$("button").click(function(){
  $("#div1").fadeIn();
  $("#div2").fadeIn("slow");
  $("#div3").fadeIn(3000);
});
```

### jQuery fadeOut() 方法

jQuery fadeOut() 方法用于淡出可见元素。

### 语法：

```javascript
$(selector).fadeOut(speed,callback);
```

+ 可选的 speed 参数规定效果的时长。它可以取以下值："slow"、"fast" 或毫秒。
+ 可选的 callback 参数是 fading 完成后所执行的函数名称。

下面的例子演示了带有不同参数的 fadeOut() 方法：

### 实例

```javascript
$("button").click(function(){
  $("#div1").fadeOut();
  $("#div2").fadeOut("slow");
  $("#div3").fadeOut(3000);
});
```

### 

### jQuery fadeToggle() 方法

jQuery fadeToggle() 方法可以在 fadeIn() 与 fadeOut() 方法之间进行切换。

如果元素已淡出，则 fadeToggle() 会向元素添加淡入效果。

如果元素已淡入，则 fadeToggle() 会向元素添加淡出效果。

### 语法：

```javascript
$(selector).fadeToggle(speed,callback);
```

可选的 speed 参数规定效果的时长。它可以取以下值："slow"、"fast" 或毫秒。

可选的 callback 参数是 fading 完成后所执行的函数名称。

下面的例子演示了带有不同参数的 fadeToggle() 方法：

### 实例

```javascript
$("button").click(function(){
  $("#div1").fadeToggle();
  $("#div2").fadeToggle("slow");
  $("#div3").fadeToggle(3000);
});
```

### jQuery fadeTo() 方法

jQuery fadeTo() 方法允许渐变为给定的不透明度（值介于 0 与 1 之间）。

### 语法：

```javascript
$(selector).fadeTo(speed,opacity,callback);
```

**必需的 speed 参数**规定效果的时长。它可以取以下值："slow"、"fast" 或毫秒。

fadeTo() 方法中必需的 opacity 参数将淡入淡出效果设置为给定的不透明度（值介于 0 与 1 之间）。

可选的 callback 参数是该函数完成后所执行的函数名称。

下面的例子演示了带有不同参数的 fadeTo() 方法：

### 实例

```javascript
$("button").click(function(){
  $("#div1").fadeTo("slow",0.15);
  $("#div2").fadeTo("slow",0.4);
  $("#div3").fadeTo("slow",0.7);
});
```



## 三 jQuery 效果 - 滑动

**jQuery 滑动方法可使元素上下滑动。**

#### jQuery 滑动方法

通过 jQuery，您可以在元素上创建滑动效果。

jQuery 拥有以下滑动方法：

- slideDown()
- slideUp()
- slideToggle()

### jQuery slideDown() 方法

jQuery slideDown() 方法用于向下滑动元素。

### 语法：

```javascript
$(selector).slideDown(speed,callback);
```

可选的 speed 参数规定效果的时长。它可以取以下值："slow"、"fast" 或毫秒。

可选的 callback 参数是滑动完成后所执行的函数名称。

下面的例子演示了 slideDown() 方法：

### 实例

```javascript
$("#flip").click(function(){
  $("#panel").slideDown();
});
```

### jQuery slideUp() 方法

jQuery slideUp() 方法用于向上滑动元素。

### 语法：

```javascript
$(selector).slideUp(speed,callback);
```

可选的 speed 参数规定效果的时长。它可以取以下值："slow"、"fast" 或毫秒。

可选的 callback 参数是滑动完成后所执行的函数名称。

下面的例子演示了 slideUp() 方法：

### 实例

```javascript
$("#flip").click(function(){
  $("#panel").slideUp();
});
```



### jQuery slideToggle() 方法

jQuery slideToggle() 方法可以在 slideDown() 与 slideUp() 方法之间进行切换。

如果元素向下滑动，则 slideToggle() 可向上滑动它们。

如果元素向上滑动，则 slideToggle() 可向下滑动它们。

```javascript
$(selector).slideToggle(speed,callback);
```

可选的 speed 参数规定效果的时长。它可以取以下值："slow"、"fast" 或毫秒。

可选的 callback 参数是滑动完成后所执行的函数名称。

下面的例子演示了 slideToggle() 方法：

### 实例

```Javascript
$("#flip").click(function(){
  $("#panel").slideToggle();
});
```



## 四 jQuery 效果 - 动画

#### jQuery 动画 - animate() 方法

jQuery animate() 方法用于创建自定义动画。

### 语法：

```javascript
$(selector).animate({params},speed,callback);
```

必需的 params 参数定义形成动画的 CSS 属性。

可选的 speed 参数规定效果的时长。它可以取以下值："slow"、"fast" 或毫秒。

可选的 callback 参数是动画完成后所执行的函数名称。

下面的例子演示 animate() 方法的简单应用；它把 \<div> 元素移动到右边，直到 left 属性等于 250 像素为止：

### 实例

```javascript
$("button").click(function(){
  $("div").animate({left:'250px'});
}); 
```



### jQuery animate() [ˈænəˌmet] - 操作多个属性

请注意，生成动画的过程中可同时使用多个属性：

### 实例

```javascript
$("button").click(function(){
  $("div").animate({
    left:'250px',
    opacity:'0.5',
    height:'150px',
    width:'150px'
  });
}); 
```

**提示：**可以用 animate() 方法来操作所有 CSS 属性吗？

是的，几乎可以！不过，需要记住一件重要的事情：当使用 animate() 时，必须使用 Camel 标记法书写所有的属性名，比如，必须使用 paddingLeft 而不是 padding-left，使用 marginRight 而不是 margin-right

##### 默认情况下，所有 HTML 元素的位置都是静态的，并且无法移动。如需对位置进行操作，记得首先把元素的 CSS position 属性设置为 relative、fixed 或 absolute。

### jQuery animate() - 使用相对值

也可以定义相对值（该值相对于元素的当前值）。需要在值的前面加上 += 或 -=：

### 实例

```javascript
$("button").click(function(){
  $("div").animate({
    left:'250px',
    height:'+=150px',
    width:'+=150px'
  });
});
```

#### 属性值设置为'toggle'

```javascript
   <script>
        $(document).ready(function(){
            $("button").click(function(){
                $("div").animate({
                    width:'toggle',
                    height:'toggle'
                });
            });
        });
    </script>
</head>
<body>
<button>开始动画</button>
<p>默认情况下，所有 HTML 元素的位置都是静态的，并且无法移动。如需对位置进行操作，记得首先把元素的 CSS position 属性设置为 relative、fixed 或 absolute。</p>
<div style="background:#98bf21;height:100px;width:100px;position:absolute;">
</div>
```

## jQuery animate() - 使用队列功能

默认地，jQuery 提供针对动画的队列功能。

这意味着如果您在彼此之后编写多个 animate() 调用，jQuery 会创建包含这些方法调用的“内部”队列。然后逐一运行这些 animate 调用。

### 实例 1

隐藏，如果您希望在彼此之后执行不同的动画，那么我们要利用队列功能：

```javascript
$("button").click(function(){
  var div=$("div");
  div.animate({height:'300px',opacity:'0.4'},"slow");
  div.animate({width:'300px',opacity:'0.8'},"slow");
  div.animate({height:'100px',opacity:'0.4'},"slow");
  div.animate({width:'100px',opacity:'0.8'},"slow");
});
<button>开始动画</button>
<p>默认情况下，所有 HTML 元素的位置都是静态的，并且无法移动。如需对位置进行操作，记得首先把元素的 CSS position 属性设置为 relative、fixed 或 absolute。</p>
<div style="background:#98bf21;height:100px;width:100px;position:absolute;">
</div>
```

### 实例 2

下面的例子把 \<div> 元素移动到右边，然后增加文本的字号：

```javascript
$("button").click(function(){
  var div=$("div");
  div.animate({left:'100px'},"slow");
  div.animate({fontSize:'3em'},"slow");
});
<button>开始动画</button>
<p>默认情况下，所有 HTML 元素的位置都是静态的，并且无法移动。如需对位置进行操作，记得首先把元素的 CSS position 属性设置为 relative、fixed 或 absolute。</p>
<div style="background:#98bf21;height:100px;width:200px;position:absolute;">HELLO</div>
```

## jQuery stop() 方法

jQuery stop() 方法用于停止动画或效果，在它们完成之前。

stop() 方法适用于所有 jQuery 效果函数，包括滑动、淡入淡出和自定义动画。

### 语法

```
$(selector).stop(stopAll,goToEnd);
```

可选的 stopAll 参数规定是否应该清除动画队列。默认是 false，即仅停止活动的动画，允许任何排入队列的动画向后执行。

可选的 goToEnd 参数规定是否立即完成当前动画。默认是 false。

因此，默认地，stop() 会清除在被选元素上指定的当前动画。

下面的例子演示 stop() 方法，不带参数：

### 实例

```javascript
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideDown(5000);
  });
  $("#stop").click(function(){
    $("#panel").stop();
  });
});

<style type="text/css"> 
#panel,#flip
{
padding:5px;
text-align:center;
background-color:#e5eecc;
border:solid 1px #c3c3c3;
}
#panel
{
padding:50px;
display:none;
}
</style>
</head>
<body>
<button id="stop">停止滑动</button>
<div id="flip">点击这里，向下滑动面板</div>
<div id="panel">Hello world!</div>
```



# jQuery HTML

## 一 jQuery - 获得内容和属性

#### 获得内容 - text()、html() 以及 val()

三个简单实用的用于 DOM 操作的 jQuery 方法：

- text() - 设置或返回所选元素的文本内容
- html() - 设置或返回所选元素的内容（包括 HTML 标记 **当内容存在标签时才会进行返回**）
- val() - 设置或返回表单字段的值

下面的例子演示如何通过 jQuery text() 和 html() 方法来获得内容：

### 实例

```javascript
<script>
$(document).ready(function(){
  $("#btn1").click(function(){
    alert("Text: " + $("#test").text());
  });
  $("#btn2").click(function(){
    alert("HTML: " + $("#test").html());
  });
});
</script>
</head>
<body>
<p id="test">这是段落中的<b>粗体</b>文本。</p>
<button id="btn1">显示文本</button>
<button id="btn2">显示 HTML</button>
</body>
```

下面的例子演示如何通过 jQuery val() 方法获得输入字段的值：

### 实例

```javascript
<script>
$(document).ready(function(){
  $("button").click(function(){
    alert("Value: " + $("#test").val());
  });
});
</script>
</head>

<body>
<p>姓名：<input type="text" id="test" value="米老鼠"></p>
<button>显示值</button>
```

### 获取属性 - attr()

jQuery attr() 方法用于获取属性值。

下面的例子演示如何获得链接中 href 属性的值：

#### 实例

```javascript
<script>
$(document).ready(function(){
  $("button").click(function(){
    alert($("#w3s").attr("href"));
  });
});
</script>
</head>
<body>
<p><a href="http://www.w3school.com.cn" id="w3s">W3School.com.cn</a></p>
<button>显示 href 值</button>
```



# 二 jQuery - 设置内容和属性

## 设置内容 - text()、html() 以及 val()

我们将使用前一章中的三个相同的方法来设置内容：

- text() - 设置或返回所选元素的文本内容
- html() - 设置或返回所选元素的内容（包括 HTML 标记）
- val() - 设置或返回表单字段的值

下面的例子演示如何通过 text()、html() 以及 val() 方法来设置内容：

#### 实例

```javascript
<script>
$(document).ready(function(){
  $("#btn1").click(function(){
    $("#test1").text("Hello world!");
  });
  $("#btn2").click(function(){
    $("#test2").html("<b>Hello world!</b>");
  });
  $("#btn3").click(function(){
    $("#test3").val("Dolly Duck");
  });
});
</script>
</head>
<body>
<p id="test1">这是段落。</p>
<p id="test2">这是另一个段落。</p>
<p>Input field: <input type="text" id="test3" value="Mickey Mouse"></p>
<button id="btn1">设置文本</button>
<button id="btn2">设置 HTML</button>
<button id="btn3">设置值</button>
```



## 设置属性 - attr()

jQuery attr() 方法也用于设置/改变属性值。

下面的例子演示如何改变（设置）链接中 href 属性的值：

#### 实例

```javascript
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#w3s").attr("href","http://www.baidu.com");
  });
});
</script>
</head>

<body>
<p><a href="http://http://www.xialigang.com"" id="w3s">http://www.xialigang.com</a></p>
<button>改变 href 值</button>
<p>请把鼠标指针移动到链接上，或者点击该链接，来查看已经改变的 href 值。</p>
</body>
```

attr() 方法也允许您同时设置多个属性。

#### 下面的例子演示如何同时设置 href 和 title 属性：

### 实例

```javascript
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#w3s").attr({
      "href" : "http://www.baidu.com",
      "title" : "title"
    });
  });
});
</script>
</head>
<body>
<p><a href="http://www.xialigang.com" id="w3s">W3School.com.cn</a></p>
<button>改变 href 和 title 值</button>
<p>请把鼠标指针移动到链接上，或者点击该链接，来查看已经改变的 href 值和已经设置的 title 值。</p>
</body>
```



# 三 jQuery - 添加元素 以及获取动态添加元素的节点

## 添加新的 HTML 内容

我们将学习用于添加新内容的四个 jQuery 方法：

- append() - 在被选元素的结尾插入内容
- prepend() - 在被选元素的开头插入内容
- after() - 在被选元素之后插入内容
- before() - 在被选元素之前插入内容

## 一 jQuery append() 方法

jQuery append() 方法在被选元素的结尾插入内容。

#### 实例

```javascript
<script>
$(document).ready(function(){
  $("#btn1").click(function(){
    $("p").append(" <b>Appended text</b>.");
  });

  $("#btn2").click(function(){
    $("ol").append("<li>Appended item</li>");
  });
});
</script>
</head>
<body>
<p>This is a paragraph.</p>
<p>This is another paragraph.</p>
<ol>
<li>List item 1</li>
<li>List item 2</li>
<li>List item 3</li>
</ol>
<button id="btn1">追加文本</button>
<button id="btn2">追加列表项</button>
</body>
```

## jQuery prepend() 方法

jQuery prepend() 方法在被选元素的开头插入内容。

#### 实例

```javascript
<script>
$(document).ready(function(){
  $("#btn1").click(function(){
    $("p").prepend("<b>Prepended text</b>");
  });
  $("#btn2").click(function(){
    $("ol").prepend("<li>Prepended item</li>");
  });
});
</script>
</head>
<body>
<p>This is a paragraph.</p>
<p>This is another paragraph.</p>
<ol>
<li>List item 1</li>
<li>List item 2</li>
<li>List item 3</li>
</ol>
<button id="btn1">添加文本</button>
<button id="btn2">添加列表项</button>
</body>
```

## jQuery after() 和 before() 方法

jQuery after() 方法在被选元素之后插入内容。 最多只能添加3个参数值

jQuery before() 方法在被选元素之前插入内容。

#### 实例

```javascript
$("img").after("Some","text","after");
$("img").before("Some","text"," before");
```

##### 例子

```javascript
function afterText()
{
var txt1="<b>I </b>";                    // 以 HTML 创建元素
var txt2=$("<i></i>").text("love ");     // 通过 jQuery 创建元素
var txt3=document.createElement("big");  // 通过 DOM 创建元素
txt3.innerHTML="jQuery!";
$("img").after(txt1,txt2,txt3,text1);          // 在 img 之后插入新元素
}

<img src="/i/eg_w3school.gif" alt="W3School Logo" />
<br><br>
<button onclick="afterText()">在图片后面添加文本</button>
```

### jQuery如何获取动态添加的元素

**一、问题描述**

　　用jQuery的append()方法动态添加了一段html代码之后，发现在为新添加的元素绑定click事件时无法获取该新元素。

**二、解决方法**

　　live()的官方定义和用法:

　　live() 方法为被选元素附加一个或多个事件处理程序，并规定当这些事件发生时运行的函数。通过 live() 方法附加的事件处理程序适用于匹配选择器的当前及未来的元素（比如由脚本创建的新元素）。

![img](http://www.poluoluo.com/jzxy/UploadFiles_333/201607/2016070619070306.png)

　　live()的详细使用方法可以查看jQuery live()

　live()和bind()的区别就是live不仅可以给页面中现有的元素绑定事件，还可以给将来动态添加进来的元素绑定时间。

　　于是我用live()替换了bind(),但报出了新错误：TypeError: $(...).live is not a function

　　经过查询以后发现，原来是jQuery 1.9及其以上已经无法使用live（），可以用on()方法代替live().

　　on()的官方定义和用法:

　　on() 方法在被选元素及子元素上添加一个或多个事件处理程序。自 jQuery 版本 1.7 起，on() 方法是 bind()、live() 和 delegate() 方法的新的替代品。

　　注意：使用 on() 方法添加的事件处理程序适用于当前及未来的元素（比如由脚本创建的新元素）。

![img](http://www.poluoluo.com/jzxy/UploadFiles_333/201607/2016070619070332.png)

 　　on()的详细使用方法可以查看jQuery on()

# 四 jQuery - 删除元素

## 删除元素/内容

如需删除元素和内容，一般可使用以下两个 jQuery 方法：

- remove() - 删除被选元素（**及其子元素**）
- empty() - 从被选元素中删除子元素

### jQuery remove() 方法

jQuery remove() 方法删除被选元素及其子元素。

#### 实例

```javascript
$("#div1").remove()
```



### jQuery empty() 方法

jQuery empty() 方法删除被选元素的子元素（清空）。

#### 实例

```javascript
$("#div1").empty();
```

## 过滤被删除的元素

jQuery remove() 方法也可接受一个参数，允许您对被删元素进行过滤。

该参数可以是任何 jQuery 选择器的语法。

下面的例子删除 class="italic" 的所有 <p> 元素：

### 实例

```javascript
$("p").remove(".italic");
```



# 五 jQuery - 获取并设置 CSS 类

## jQuery 操作 CSS

jQuery 拥有若干进行 CSS 操作的方法。我们将学习下面这些：

- addClass() - 向被选元素添加一个或多个类
- removeClass() - 从被选元素删除一个或多个类
- toggleClass() - 对被选元素进行添加/删除类的切换操作
- css() - 设置或返回样式属性

## jQuery addClass() 方法

下面的例子展示如何向不同的元素添加 class 属性。当然，在添加类时，您也可以选取多个元素：

#### 实例

```javascript
$("button").click(function(){
  $("h1,h2,p").addClass("blue");
  $("div").addClass("important");
});
```



### 您也可以在 addClass() 方法中添加多个类：

#### 实例

```javascript
$("button").click(function(){
  $("#div1").addClass("important blue");
});
```



## jQuery removeClass() 方法

下面的例子演示如何不同的元素中删除指定的 class 属性：

### 实例

```javascript
$("button").click(function(){
  $("h1,h2,p").removeClass("blue");
});
```



## jQuery toggleClass() 方法

下面的例子将展示如何使用 jQuery toggleClass() 方法。该方法对被选元素进行添加/删除类的切换操作：

### 实例

```javascript
$("button").click(function(){
  $("h1,h2,p").toggleClass("blue");
});
```



# 六  jQuery - css() 方法

## jQuery css() 方法

css() 方法设置或返回被选元素的一个或多个样式属性。

### 返回 CSS 属性

如需返回指定的 CSS 属性的值，请使用如下语法：

```javascript
css("propertyname");
```

##### 下面的例子将返回首个匹配元素的 background-color 值：

### 实例

```javascript
$("p").css("background-color");
```

## 设置 CSS 属性

如需设置指定的 CSS 属性，请使用如下语法：

```javascript
css("propertyname","value");
```

下面的例子将为所有匹配元素设置 background-color 值：

### 实例

```javascript
$("p").css("background-color","yellow");
```

## 设置多个 CSS 属性

如需设置多个 CSS 属性，请使用如下语法：

```javascript
css({"propertyname":"value","propertyname":"value",...});
```

下面的例子将为所有匹配元素设置 background-color 和 font-size：

### 实例

```javascript
$("p").css({"background-color":"yellow","font-size":"200%"});
```



































