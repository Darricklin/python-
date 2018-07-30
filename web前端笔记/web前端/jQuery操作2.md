# jQuery 遍历

## 一 jQuery 遍历 - 祖先

通过 jQuery，您能够向上遍历 DOM 树，以查找元素的祖先。

## 向上遍历 DOM 树

这些 jQuery 方法很有用，它们用于向上遍历 DOM 树：

- *parent()
- parents()
- parentsUntil()

## jQuery parent() 方法

parent() 方法返回被选元素的直接父元素。

该方法只会向上一级对 DOM 树进行遍历。

下面的例子返回每个 <span> 元素的的直接父元素：

#### 实例

```javascript
$(document).ready(function(){
  $("span").parent();
});
```

## jQuery parents() 方法

parents() 方法返回被选元素的所有祖先元素，它一路向上直到文档的根元素 (\<html>)。

下面的例子返回所有 \<span> 元素的所有祖先：

### 实例

```javascript
$(document).ready(function(){
  $("span").parents();
});
------------------------------------------------------------------
<script>
$(document).ready(function(){
  $("span").parents().css({"color":"red","border":"2px solid red"});
});
</script>
</head>
<body class="ancestors">body (曾曾祖父)
  <div style="width:500px;">div (曾祖父)
    <ul>ul (祖父)  
      <li>li (直接父)
        <span>span</span>
      </li>
    </ul>   
  </div>
</body>
```



您也可以使用可选参数来过滤对祖先元素的搜索。

下面的例子返回所有 <span> 元素的所有祖先，并且它是 <ul> 元素：

#### 实例

```javascript
$(document).ready(function(){
  $("span").parents("ul");
});
```



## jQuery parentsUntil() 方法

parentsUntil() 方法返回介于两个给定元素之间的所有祖先元素。

下面的例子返回介于 \<span> 与 \<div> 元素之间的所有祖先元素：

### 实例

```javascript
$(document).ready(function(){
  $("span").parentsUntil("div");
});
```



# 二 后代是子、孙、曾孙等等。

通过 jQuery，您能够向下遍历 DOM 树，以查找元素的后代。

#### 向下遍历 DOM 树

下面是两个用于向下遍历 DOM 树的 jQuery 方法：

- children()
- find()

## jQuery children() 方法

children() 方法返回被选元素的所有直接子元素。

该方法只会向下一级对 DOM 树进行遍历。

下面的例子返回每个 \<div> 元素的所有直接子元素：

#### 实例

```javascript
$(document).ready(function(){
  $("div").children();
});
```

您也可以使用可选参数来过滤对子元素的搜索。

下面的例子返回类名为 "1" 的所有 <p> 元素，并且它们是 <div> 的直接子元素：

#### 实例

```javascript
$(document).ready(function(){
  $("div").children("p.1");
});
```



## jQuery find() 方法

find() 方法返回被选元素的后代元素，一路向下直到最后一个后代。

下面的例子返回属于\<div> 后代的所有 \<span> 元素：

#### 实例

```javascript
$(document).ready(function(){
  $("div").find("span");
});
```

下面的例子返回 \<div> 的所有后代：

### 实例

```javascript
$(document).ready(function(){
  $("div").find("*");
});
```

#### 验证表单jq写法

```Javascript
$('input:eq(0)').focus(function () {
     console.log($(this).parent().find('span').remove())
})

if(!$('input:eq(0)').val()){
     $('input:eq(0)').after('<span>请输入正确的值</span>')
}
```

## 三 jQuery 遍历 - 同胞

## 在 DOM 树中水平遍历

有许多有用的方法让我们在 DOM 树进行水平遍历：

- siblings()
- next()
- nextAll()
- nextUntil()
- prev()
- prevAll()
- prevUntil()

## (1) jQuery siblings() 方法

siblings() 方法返回被选元素的所有同胞元素。

下面的例子返回 \<h2> 的所有同胞元素：

### 实例

```javascript
$(document).ready(function(){
  $("h2").siblings();
});
```

您也可以使用可选参数来过滤对同胞元素的搜索。

下面的例子返回属于 \<h2> 的同胞元素的所有 \<p> 元素：

### 实例

```javascript
$(document).ready(function(){
  $("h2").siblings("p");
});
```



## (2) jQuery next() 方法

next() 方法返回被选元素的下一个同胞元素。

该方法只返回一个元素。

下面的例子返回 \<h2> 的下一个同胞元素：

### 实例

```javascript
$(document).ready(function(){
  $("h2").next();
});
```



## (3) jQuery nextAll() 方法

nextAll() 方法返回被选元素的所有跟随的同胞元素。

下面的例子返回 <h2> 的所有跟随的同胞元素：

### 实例

```javascript
$(document).ready(function(){
  $("h2").nextAll();
});
```



## (4) jQuery nextUntil() 方法

nextUntil() 方法返回介于两个给定参数之间的所有跟随的同胞元素。

下面的例子返回介于 \<h2> 与 \<h6> 元素之间的所有同胞元素：

### 实例

```javascript
$(document).ready(function(){
  $("h2").nextUntil("h6");
});
```



# 四  jQuery 遍历 - 过滤

三个最基本的过滤方法是：first(), last() 和 eq()，它们允许您基于其在一组元素中的位置来选择一个特定的元素。

## (1) jQuery first() 方法

first() 方法返回被选元素的首个元素。

下面的例子选取首个 \<div> 元素内部的第一个 <p> 元素：

### 实例

```javascript
$(document).ready(function(){
  $("div p").first();
});
```

## (2) jQuery last() 方法

last() 方法返回被选元素的最后一个元素。

下面的例子选择最后一个 <div> 元素中的最后一个 <p> 元素：

### 实例

```javascript
$(document).ready(function(){
  $("div p").last();
});
```

## (3) jQuery eq() 方法

eq() 方法返回被选元素中带有指定索引号的元素。

索引号从 0 开始，因此首个元素的索引号是 0 而不是 1。下面的例子选取第二个 <p> 元素（索引号 1）：

### 实例

```javascript
$(document).ready(function(){
  $("p").eq(1);
});
```

## (4) jQuery filter() 方法

filter() 方法允许您规定一个标准。不匹配这个标准的元素会被从集合中删除，匹配的元素会被返回。

下面的例子返回带有类名 "intro" 的所有 <p> 元素：

### 实例

```javascript
$(document).ready(function(){
  $("p").filter(".intro");
});
```

## (5) jQuery not() 方法

not() 方法返回不匹配标准的所有元素。

##### 提示：not() 方法与 filter() 相反。

下面的例子返回不带有类名 "intro" 的所有 \<p> 元素：

### 实例

```javascript
$(document).ready(function(){
  $("p").not(".intro");
});
```



## (7) each() 方法

#### 定义和用法

each() 方法规定为每个匹配元素规定运行的函数。

提示：返回 false 可用于及早停止循环。

#### 实例

输出每个 li 元素的文本：

```Javascript
$("button").click(function(){
  $("li").each(function(){
    alert($(this).text())
  });
});
```

#### 

# 选择器

| 选择器                     | 实例                                   | 选取                                       | 实例                                       |
| ----------------------- | ------------------------------------ | ---------------------------------------- | ---------------------------------------- |
| *                       | $("*")                               | 所有元素                                     | 选择 \<body> 内的所有元素  $(body *)             |
| \#id                    | $("#lastname")                       | id="lastname" 的元素                        |                                          |
| .class                  | $(".intro")                          | 所有 class="intro" 的元素                     |                                          |
| element                 | $("p")                               | 所有 \<p> 元素                               |                                          |
| .\*class*.*class*       | $(".intro.demo")                     | 所有 class="intro" 且 class="demo" 的元素      |                                          |
| :first                  | $("p:first")                         | 第一个 <p> 元素                               |                                          |
| :last                   | $("p:last")                          | 最后一个 <p> 元素                              |                                          |
| :even                   | $("tr:even")                         | 所有偶数 <tr> 元素                             |                                          |
| :odd                    | $("tr:odd")                          | 所有奇数 <tr> 元素                             |                                          |
| :eq(*index*)            | $("ul li:eq(3)")                     | 列表中的第四个元素（index 从 0 开始）                  |                                          |
| :gt(*no*)               | $("ul li:gt(3)")                     | 列出 index 大于 3 的元素                        |                                          |
| :lt(*no*)               | $("ul li:lt(3)")                     | 列出 index 小于 3 的元素                        | 值不给默认为0                                  |
| :not(\*selector*)       | $("input:not(:empty)")               | 所有不为空的 input 元素                          | $('li:not(:nth-child(2))')$(':input:not([type="submit"],[type="reset"])') |
| :header                 | $(":header")                         | 所有标题元素 \<h1> - \<h6>                     |                                          |
| :animated               | $(':animated')                       | 所有动画元素                                   | $(':animated').css()                     |
| :empty                  | $(":empty")                          | 无子（元素）节点的所有元素                            |                                          |
| :hidden                 | $("p:hidden")                        | 所有隐藏的 <p> 元素                             |                                          |
| s1,s2,s3                | $("th,td,.intro")                    | 所有带有匹配选择的元素                              |                                          |
| [*attribute*\]          | $("[href]")                          | 所有带有 href 属性的元素                          |                                          |
| [*attribute*=*value*\]  | $("[href='#']")                      | 所有 href 属性的值等于 "#" 的元素                   |                                          |
| [*attribute*!=*value*\] | $("[href!='#']")                     | 所有 href 属性的值不等于 "#" 的元素                  |                                          |
| [*attribute*$=*value*\] | $("[href$='.jpg']")                  | 所有 href 属性的值包含以 ".jpg" 结尾的元素             |                                          |
| :input                  | $(":input")                          | 所有 input 元素                              |                                          |
| :text                   | $(":text")等同于$("input[type='text']") | 所有 type="text" 的 \<input> 元素             |                                          |
| :password               | $(":password")                       | 所有 type="password" 的 \<input> 元素         |                                          |
| :radio                  | $(":radio")                          | 所有 type="radio" 的 <input> 元素             | $(':radio').hide() $('radio').val()      |
| :checkbox               | $(":checkbox")                       | 所有 type="checkbox" 的 <input> 元素          |                                          |
| :submit                 | $(":submit")                         | 所有 type="submit" 的 <input> 元素(包括button)  |                                          |
| :reset                  | $(":reset")                          | 所有 type="reset" 的 <input> 元素             |                                          |
| :button                 | $(":button")                         | 所有 type="button" 的 <input> 元素(包括button标签) |                                          |
| :image                  | $(":image")                          | 所有 type="image" 的 <input> 元素             |                                          |
| :file                   | $(":file")                           | 所有 type="file" 的 <input> 元素              |                                          |
| :enabled                | $(":enabled")                        | 所有激活的 input 元素                           |                                          |
| :disabled               | $(":disabled")                       | 所有禁用的 input 元素                           |                                          |
| :checked                | $(":checked")                        | 所有被选中的 input 元素（ 单选按钮或复选框                |                                          |

##### 扩展:

获取选择框是否被选择的方法  选中返回true

1. ```javascript
   $('input[type="checkbox"]').is(':checked')
   ```

2. ```javascript
   $('input[type="checkbox"]').get(0).checked
   ```

##### 选择器组合使用:

```javascript
//获取input标签属性type为radio的并选中的节点的值 并遍历
$('input[type="radio"]:checked').each(function(){
     console.log($(this).val())
})
```



# jQuery    事件

### jQuery 事件方法

事件方法会触发匹配元素的事件，或将函数绑定到所有匹配元素的某个事件。

触发实例：

```javascript
$("button#demo").click()
```

上面的例子将触发 id="demo" 的 button 元素的 click 事件。

绑定实例：

```Javascript
$("button#demo").click(function(){$("img").hide()})
```

上面的例子会在点击 id="demo" 的按钮时隐藏所有图像。

### (1) bind()   向匹配元素附加一个或更多事件处理器

#### 实例

当点击鼠标时，隐藏或显示 p 元素：

```javascript
$("button").bind("click",function(){
  $("p").slideToggle();//滑动效果
});
//绑定点击事件
$('button').click(function() {
  $('input[type="file"]').click();
});
```

### 替代语法

```javascript
$(selector).bind({event:function, event:function, ...})
```

#### 实例

```javascript
//每个时间对应一个方法
<script type="text/javascript">
$(document).ready(function(){
  $("button").bind({
    click:function(){$("p").slideToggle();},
    mouseover:function(){$("body").css("background-color","red");},  
    mouseout:function(){$("body").css("background-color","#FFFFFF");}  
  });
});
</script>
</head>
<body>
<p>This is a paragraph.</p>
<button>请点击这里</button>
</body>
```

#### 多个事件对应一个方法

```javascript
$(document).ready(function(){
  $("p").bind('click dblclick mouseover mouseout',function(event){
    $("div").html("事件：" + event.type);
});
  
<p>该段落定义了 click、double-click、mouseover 以及 mouseout 事件。如果您触发了其中的一个事件，下面的 div 中会显示出事件的类型。</p>
<div></div>
```



### (2) blur()  触发、或将函数绑定到指定元素的 blur 事件

#### 实例

当输入域失去焦点 (blur) 时改变其颜色：

```javascript
$("input").blur(function(){
  $("input").css("background-color","#D6D6FF");
});
```



### (3)  change()		触发、或将函数绑定到指定元素的 change 事件

## 实例

当输入域发生变化时改变其颜色：

```javascript
<script type="text/javascript">
$(document).ready(function(){
  $(".field").change(function(){
    $(this).css("background-color","#FFFFCC");
  });
});
</script>
</head>
<body>
<p>在某个域被使用或改变时，它会改变颜色。</p>
Enter your name: <input class="field" type="text" />
<p>Car:
<select class="field" name="cars">
<option value="volvo">Volvo</option>
<option value="saab">Saab</option>
<option value="fiat">Fiat</option>
<option value="audi">Audi</option>
</select>
</p>
```



### (4) click()	触发、或将函数绑定到指定元素的 click 事件

当点击按钮时，隐藏或显示元素：

```Javascript
$("button").click(function(){
  $("p").slideToggle();
});
```



### (5) dblclick() 方法  双击元素

## 实例

当双击按钮时，隐藏或显示元素：

```javascript
$("button").dblclick(function(){
  $("p").slideToggle();
});
```



### (6) pageX 相对于文档的左边缘

#### 定义和用法s

pageX() 属性是鼠标指针的位置，相对于文档的左边缘。

#### 实例

显示鼠标指针的位置：

```javascript
$(document).mousemove(function(e){
  $("span").text("X: " + e.pageX + ", Y: " + e.pageY);
});
```



### (7) pageY	相对于文档上边缘的鼠标位置

#### 实例

显示鼠标指针的位置：

```javascript
$(document).mousemove(function(e){
  $("span").text("X: " + e.pageX + ", Y: " + e.pageY);
});
```



### (8) keydown()/keyup()  鼠标按下/抬起

#### 实例

当按下按键时，改变文本域的颜色：

```javascript
//鼠标按下
$("input").keydown(function(){
$("input").css("background-color","#FFFFCC");
});
//鼠标抬起
$("input").keyup(function(){
$("input").css("background-color","#D6D6FF");
});
```



### (9) focus()

#### 定义和用法

当元素获得焦点时，发生 focus 事件。

当通过鼠标点击选中元素或通过 tab 键定位到元素时，该元素就会获得焦点。

focus() 方法触发 focus 事件，或规定当发生 focus 事件时运行的函数。

#### 实例

当输入框获得焦点时，改变它的背景色：

```javascript
$("input").focus(function(){
  $("input").css("background-color","#FFFFCC");
});
```



### (10)  鼠标事件

| mousedown()  | 触发、或将函数绑定到指定元素的 mouse down 事件  |
| ------------ | ------------------------------ |
| mouseenter() | 触发、或将函数绑定到指定元素的 mouse enter 事件 |
| mouseleave() | 触发、或将函数绑定到指定元素的 mouse leave 事件 |
| mousemove()  | 触发、或将函数绑定到指定元素的 mouse move 事件  |
| mouseout()   | 触发、或将函数绑定到指定元素的 mouse out 事件   |
| mouseover()  | 触发、或将函数绑定到指定元素的 mouse over 事件  |
| mouseup()    | 触发、或将函数绑定到指定元素的 mouse up 事件    |

**注释**：与 mouseover 事件不同，只有在鼠标指针穿过被选元素时，才会触发 mouseenter 事件。如果鼠标指针穿过任何子元素，同样会触发 mouseover 事件。请看下面例子的演示。

#### 实例

```javascript
<script type="text/javascript">
x=0;
y=0;
$(document).ready(function(){
  $("div.over").mouseover(function(){
    $(".over span").text(x+=1);
  });
  $("div.enter").mouseenter(function(){
    $(".enter span").text(y+=1);
  });
});
</script>
</head>
<body>
<p>不论鼠标指针穿过被选元素或其子元素，都会触发 mouseover 事件。</p>
<p>只有在鼠标指针穿过被选元素时，才会触发 mouseenter 事件。</p>
<div class="over" style="background-color:lightgray;padding:20px;width:40%;float:left">
<h2 style="background-color:white;">被触发的 Mouseover 事件：<span></span></h2>
</div>
<div class="enter" style="background-color:lightgray;padding:20px;width:40%;float:right">
<h2 style="background-color:white;">被触发的 Mouseenter 事件：<span></span></h2>
</div>
```

### hover() 方法

#### 定义和用法

hover() 方法规定当鼠标指针悬停在被选元素上时要运行的两个函数。

方法触发 mouseenter 和 mouseleave事件。

**注意:** 如果只指定一个函数，则 mouseenter 和 mouseleave 都执行它。

### 语法

$(*selector*).hover(*inFunction,outFunction*)

### (11)  scroll()  用户滚动指定的元素时，会发生 scroll 事件

#### 定义和用法

当用户滚动指定的元素时，会发生 scroll 事件。

scroll 事件适用于所有可滚动的元素和 window 对象（浏览器窗口）。

scroll() 方法触发 scroll 事件，或规定当发生 scroll 事件时运行的函数。

##### $(document).scroll()

#### 实例

```javascript
<script type="text/javascript">
x=0;
$(document).ready(function(){
  $("div").scroll(function() {
    $("span").text(x+=1);
  });
});
</script>
</head>
<body>
<p>请试着滚动 DIV 中的文本：</p>
<div style="width:200px;height:100px;overflow:scroll;">text. text. text. text. text. text. text. text. text. text. text. text. text. text. text. text. text. text. text. text. text. text. 
<br /><br />
text. text. text. text. text. text. text. text. text. text. text. text. text. text. text. text. text. text. text. text. text. text. text. text. text. text. text. text. text. text. text. text. text.</div>
<p>滚动了 <span>0</span> 次。</p>
</body>
```



### (12) height()/width()

##### $(document).height()  //是获取整个页面的高度

##### $(document).width()  //是获取整个页面的高度



### (13) select()  方法

#### 定义和用法

当 textarea 或文本类型的 input 元素中的文本被选择时，会发生 select 事件。

select() 方法触发 select 事件，或规定当发生 select 事件时运行的函数。

#### 实例

在文本域后添加文本，以显示出提示文本：

```javascript
$("input").select(function(){
  $("input").after(" Text marked!");
});
```



### (14)  submit() 方法

#### 定义和用法

当提交表单时，会发生 submit 事件。

该事件只适用于表单元素。

submit() 方法触发 submit 事件，或规定当发生 submit 事件时运行的函数。

#### 实例

当提交表单时，显示警告框：

```javascript
$("form").submit(function(e){
  alert("Submitted");
});

<form name="input" action="" method="get">
First name: 
<input type="text" name="FirstName" value="Mickey" size="20">
<br />Last name: 
<input type="text" name="LastName" value="Mouse" size="20">
<br />
<input type="submit" value="Submit">
</form> 
```



### (15) toggle() 方法

#### 定义和用法

toggle() 方法用于绑定两个或多个事件处理器函数，以响应被选元素的轮流的 click 事件。

该方法也可用于切换被选元素的 [hide()](http://www.w3school.com.cn/jquery/effect_hide.asp) 与 [show()](http://www.w3school.com.cn/jquery/effect_show.asp) 方法。

### 语法

```javascript
$(selector).toggle(function1(),function2(),functionN(),...)
```

#### 实例

切换不同的背景色：

```javascript
$("button").toggle(function(){
    $("body").css("background-color","green");},
    function(){
    $("body").css("background-color","red");},
    function(){
    $("body").css("background-color","yellow");}
  );
```

### (16) trigger() 方法

#### 定义和用法

trigger() 方法触发被选元素的指定事件类型

#### 触发事件

规定被选元素要触发的事件。

#### 语法

```javascript
$(selector).trigger(event,[param1,param2,...])
```

#### 实例

触发 input 元素的 select 事件：

```javascript
$(document).ready(function(){
  $("input").select(function(){
    $("input").after("文本被选中！");
  });
  $("button").click(function(){
    $("input").trigger("select");
  });
});
</script>
</head>
<body>
<input type="text" name="FirstName" value="Hello World" />
<br />
<button>激活 input 域的 select 事件</button>
```

#### 联系

将文件上传的显示美化

### (17) unbind() 方法

##### 取消绑定元素的事件处理程序和函数

规定从指定元素上删除的一个或多个事件处理程序。

如果没有规定参数，unbind() 方法会删除指定元素的所有事件处理程序。

### 语法

```
$(selector).unbind(event)
```

| 参数      | 描述                                       |
| ------- | ---------------------------------------- |
| *event* | 可选。规定删除元素的一个或多个事件由***空格分隔多个事件***值。如果只规定了该参数，则会删除绑定到指定事件的所有函数。 |

#### 实例

移除所有 p 元素的事件处理器：

```javascript
$("button").click(function(){
  $("p").unbind();
});
```



# DOM 元素方法

### (1)  get() 方法

#### 定义和用法

get() 方法获得由选择器指定的 DOM 元素。

#### 实例

获得第一个 p 元素的名称和值：

```Javascript
$("button").click(function(){
  x=$("p").get(0);
  $("div").text(x.nodeName + ": " + x.innerHTML);
});
```



### (2) index() 方法

#### 定义和用法

index() 方法返回指定元素相对于其他指定元素的 index 位置。

这些元素可通过 jQuery 选择器或 DOM 元素来指定。

#### 实例

获得第一个 p 元素的名称和值：

```javascript
$("li").click(function(){
  alert($(this).index());
});
```



### (3) size() 方法

#### 定义和用法

size() 方法返回被 jQuery 选择器匹配的元素的数量。

#### 实例

输出被 jQuery 选择器匹配的元素的数量：

```javascript
$("button").click(function(){
  alert($("li").size());
});
```



# AJAX 简介

**AJAX 是与服务器交换数据的艺术，它在不重载全部页面的情况下，实现了对部分网页的更新。**

#### AJAX get() 和 post() 方法

#### HTTP 请求：GET vs. POST

两种在客户端和服务器端进行请求-响应的常用方法是：GET 和 POST。

- *GET* - 从指定的资源请求数据
- *POST* - 向指定的资源提交要处理的数据

GET 基本上用于从服务器获得（取回）数据。注释：GET 方法可能返回缓存数据。

POST 也可用于从服务器获取数据。不过，POST 方法不会缓存数据，并且常用于连同请求一起发送数据



## jQuery $.get() 方法

$.get() 方法通过 HTTP GET 请求从服务器上请求数据。

##### 语法：

```javascript
$.get(URL,callback);
```

必需的 *URL* 参数规定您希望请求的 URL。

可选的 *callback* 参数是请求成功后所执行的函数名。

下面的例子使用 $.get() 方法从服务器上的一个文件中取回数据：

##### 实例

```javascript
$("button").click(function(){
  $.get("demo_test.asp",function(data,status){
    alert("Data: " + data + "\nStatus: " + status);
  });
});
```



$.get() 的第一个参数是我们希望请求的 URL（"demo_test.asp"）。

第二个参数是回调函数。第一个回调参数存有被请求页面的内容，第二个回调参数存有请求的状态。

#### 注意:

JSON.parse(json)  解析json字符串

## jQuery $.post() 方法

$.post() 方法通过 HTTP POST 请求从服务器上请求数据。

### 语法：

```javascript
$.post(URL,data,callback);
```

+ 必需的 *URL* 参数规定您希望请求的 URL。
+ 可选的 *data* 参数规定连同请求发送的数据。
+ 可选的 *callback* 参数是请求成功后所执行的函数名。

下面的例子使用 $.post() 连同请求一起发送数据：

##### 实例

```javascript
$("button").click(function(){
  $.post("demo_test_post.asp",
  {
    name:"Donald Duck",
    city:"Duckburg"
  },
  function(data,status){
    alert("Data: " + data + "\nStatus: " + status);
  });
});
```

$.post() 的第一个参数是我们希望请求的 URL ("demo_test_post.asp")。

然后我们连同请求（name 和 city）一起发送数据。

"demo_test_post.asp" 中的 ASP 脚本读取这些参数，对它们进行处理，然后返回结果。

第三个参数是回调函数。第一个回调参数存有被请求页面的内容，而第二个参数存有请求的状态。

### $.ajax

```javascript
$("button").click(function(){
    $.ajax({url:"demo_test.txt",success:function(result){
        $("#div1").html(result);
    }});
});
```

