## JavaScript

### 1.js语法基础

#### 1.1第一个JS例子

~~~
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body >
		<script type="text/javascript">
			alert("Hello World")
		</script>
	</body>
	
</html>

小结：1.js在页面内使用的时候必须要写在<script>标签内
         2.js代码书写的时候不用分号标识一行编程语句的结束
         3.在js代码中xxx():此时表明这是一个函数
         4.alert():题弹窗的形式将括号内的内容展示出来

~~~

#### 1.2 JavaScript 语法：数据类型与运算

~~~
JavaScript： 是一个脚本语言。它是一个轻量级，但功能强大的编程语言
1.数据类型：虽然JavaScript在书写校验上不去区分数据的类型，但是并不意味着是不区分数据类型，而是通过在浏览器中内置的JS解析器/引擎自动的去判断的

---------------------------------------------------------------------------------------------------------
1.1数字：
         var a=12 //整数
         var b=2.3 //浮点数或者说是小数型
         var c=-0.5

友情提示：1）在js中变量名必须以字母或下划线（"_"）开头
			   2）变量可以包含数字、从 A 至 Z 的大小写字母
			   3）JavaScript 区分大小写，即变量 myVar、 myVAR 和 myvar 是不同的变量
---------------------------------------------------------------------------------------------------------
1.2逻辑型或布尔型：
          var a= true
          var b=false
          alert(a)
          alert(b)
---------------------------------------------------------------------------------------------------------
1.3Undefined 和 null
Undefined： 用于存放 JavaScript 的 undefined 值，表示一个未声明的变量，或已声明但没有赋值的变量，或一个并不存在的对象属性
null:可以通过将变量的值设置为 null 来清空变量，其意思为空值
      var a="" var a=null var a
      alert(typeof(a))
         

---------------------------------------------------------------------------------------------------------

1.4字符串： 可以使用单引号或双引号
        var firstName="biil"
        var familyName='Gates'
        alert(firstName+familyName)

---------------------------------------------------------------------------------------------------------
1.5日期：
        var myDate=new Date() 
        alert(myDate)/*默认是格里尼形式的日期格式*/
提示：Date是js中的一个内置的类
         new：为类Date在内存中创建一个内存空间，进而实现实例化
补充：关键字：就是具有特殊含义的词
---------------------------------------------------------------------------------------------------------
1.6数组：是一种存放数据的格式，其一般可以存放多个，且需要知道其长度
       var array=[40, 100, 1, 5, 25, 10]

       alert(array[0])
---------------------------------------------------------------------------------------------------------
注释：
      单行注释：//
      多行注释：/**/

扩展：注释的作用：
                         1）统一规范
                         2）注解，帮助理解/阅读代码
                         3）扯淡

---------------------------------------------------------------------------------------------------------

连接字符和转义字符：
             连接字符：在js中场用+表示为连接字符
                            例如： var a=123
                                      alert('变量a的值为：'+a)
            转义字符：具有特殊含义的字符                         
				\n	换行符	alert(“这是第一局 \n 这是第二句”)
				\t	制表符 	alert(“这是第一局 \t 这是第二句”)

---------------------------------------------------------------------------------------------------------
2.运算符：
2.1算术运算符： +， -， *，  /， %，++，--
++：自动加1 例如 var a=12
                           alert(a++)
++在前：先计算再输出；  ++在后：先输出再计算
--：自动减1，例如 var h=6
                           alert(a--)
---------------------------------------------------------------------------------------------------------
2.2关系运算符： > ，>=， <，<=, !=, ==,===（先不讲）


---------------------------------------------------------------------------------------------------------
2.3逻辑运算符：
与 ：&&   ：全真为真，只要有一个假则为假
或 ：||       ：全假为假，只要有一个为真则为真
非 ：！      ：取相反的
~~~

#### 1.3 JavaScript 输出

~~~
 JavaScript 可以通过不同的方式来输出数据：
1）使用 window.alert() 弹出警告框。
<!DOCTYPE html>
<html>
<body>
<h1>使用 window.alert() 弹出警告框</h1>
<script>
window.alert(5 + 6);
</script>
</body>
</html>


2）使用 document.write() 方法将内容写到 HTML 文档中。
<!DOCTYPE html>
<html>
<body>
<h1>我的第一个 Web 页面</h1>
<script>
document.write(123);
</script>

</body>
</html>


3）使用 innerHTML 写入到 HTML 元素。
<!DOCTYPE html>
<html>
<body>

<h1>使用 innerHTML 写入到 HTML 元素</h1>
<script>
document.getElementById("demo").innerHTML = "段落已修改。";
</script>
<p id="demo">我的第一个段落</p>
</body>
</html>



4）使用 console.log() 写入到浏览器的控制台。

<!DOCTYPE html>
<html>
<body>
<h1>使用 console.log() 写入到浏览器的控制台</h1>
<script>
a = 5;
b = 6;
c = a + b;
console.log(c);
</script>
</body>
</html>
~~~

#### 1.4基本语句

~~~
1）顺序语句：js默认是从上向下自动执行的
---------------------------------------------------------------------------------------------------------
2）选择语句：
                  2.1）二路分支：
	if(条件)
	{
   			//JavaScript代码;
	}
	else
	{
  			//JavaScript代码;
	}
---------------------------------------------------------------------------------------------------------
                 多路决策：
switch (表达式)
{
 	case 常量1 : 
 	   JavaScript语句;
	   break;
 	case 常量2 : 
 	   JavaScript语句;
 	   break;
 	...
 	default : 
        JavaScript语句;
}
小结：switch...case...default不仅有多路决策的特性，还有穿透性
---------------------------------------------------------------------------------------------------------
或者：
if (time<10)
{
    alert("<b>早上好</b>");
}
else if (time>=10 && time<16)
{
    alert("<b>今天好</b>");
}
else
{
    alert("<b>晚上好!</b>");
}

---------------------------------------------------------------------------------------------------------
3）循环语句：
for循环语句：
for (var i=0;i<10;i++)
{ 
    alert("当前i的值为:"+i)
}
---------------------------------------------------------------------------------------------------------
while循环语句：
var i =1
while (i<5)
{
   alert("当前i的值为："+i)
    i++;
}
---------------------------------------------------------------------------------------------------------
do...while循环：
var i=5
do
{
   alert("执行了")
    i++;
}
while (i<5);


备注：for：知道次数的循环
         while：>=0次的循环
         do...while：>=1次的循环
~~~

#### 1.5 Break 和 Continue 语句

~~~
 break 语句用于跳出循环。
continue 用于跳过循环中的一个迭代。

for (i=0;i<10;i++)
{
    if (i==3)
    {
        break;//结束本重循环
    }
    alert("当前i的值为："+i)
}


for (i=0;i<=10;i++)
{
    if (i==3){
    	continue//结束本次循环
    }
    alert("当前i的值为："+i)
    
}
~~~

#### 1.6 JavaScript 数据类型

~~~
 1.typeof 操作符：可以使用 typeof 操作符来查看 JavaScript 变量的数据类型。
 
2.将数字转换为字符串
             var a=123
            //var castResult=String(a)
            var castResult2=a.toString()
            alert(typeof(castResult2))


3.将字符串转换为数字

            var a="123"
		    var  b=Number(a)
		    var  b=parseInt(a)
            alert(typeof(b))
            alert(b+998)

~~~

#### 1.7 JavaScript正则表达式

~~~
1.match():匹配字符串
            var  a="jack"
		    var  b="[a-z]+"
           
        alert((a.match(b))!=null? true:false)

2.search() 方法 用于检索字符串中指定的子字符串，或检索与正则表达式相匹配的子字符串，并返回子串的起始位置
           var str = "Super Start"; 
           alert(str.search("pe"))//返回查找到的下标位置
           alert(str.search("wyh"))//查查找不到的时候返回-1

3.replace() 方法 用于在字符串中用一些字符替换另一些字符，或替换一个与正则表达式匹配的子串。
           var str = "Super Start"; 
           alert(str.replace("Start","wyh"))
~~~

#### 1.8 JavaScript函数

~~~
1.js中的函数定义
      语法： function 函数名( ){

                 }
     示例一：
        <script type="text/javascript">
			
		   function sum(a,b){
		   	alert(a+b)
		   }        
	</script>
	<input type="button" value="函数--求和" onclick="sum(2,3)"/> 

    示例二：
var fun=function(){  
        alert("匿名函数");  
    }  
     fun(); //执行匿名函数

 
示例三：
 var aa = function(x,y){  
    alert(x+y);  
    }(1,2);

小结：1）js中的函数可以没有返回值，就是不必须要有return 
         2 )常用事件来触发函数，也可以匿名自执行函数（见示例三）
         3）函数可以没有名字
~~~

### 2.js对象

#### 2.1JavaScript Array（数组） 对象

~~~
 1.数组对象：是使用单独的变量名来存储一系列的值

  1）创建一个数组：有3种方式
                      1: 常规方式:
							var myCars=new Array(); 
							myCars[0]="Saab";       
							myCars[1]="Volvo";
							myCars[2]="BMW";

                      2.简洁方式:
							var myCars=new Array("Saab","Volvo","BMW");

					3.字面方式:
						   var myCars=["Saab","Volvo","BMW"];
    2）访问数组：通过指定数组名以及索引号码，你可以访问某个特定的元素
                   例如：var name=myCars[0];
   3）数组方法和属性：
                     var x=myCars.length             // myCars 中元素的数量
					 var y=myCars.indexOf("Volvo")   // "Volvo" 值的索引值
   4）数组排序：
                  sort():按照字符进行升序
<body>

<p id="demo">单击按钮升序排列数组。</p>
<button onclick="myFunction()">点我</button>
<script>
function myFunction(){
	var fruits = ["Banana", "Orange", "Apple", "Mango"];
	fruits.sort();
	var x=document.getElementById("demo");
	x.innerHTML=fruits;
}
</script>

</body>


			reverse（）：将一个数组中的元素的顺序反转排序
            提示：fruits.reverse() 其他的都不变
~~~

#### 2.2JavaScript 字符串（String） 对象

~~~
 1.字符串中常用的属性和方法
            str.length:获取字符串的长度
            str.match(""):内容匹配
            str.replace():替换内容
                                           例如：str="Welcome to beiJing"
													var n=str.replace("beiJing","shangHai");

           str.toUpperCase()，str.toLowerCase()：字符串大小写转换

          str.split(","):字符串的截取


作业：将字符串“01#大宝#1#瓶,02#汉方#2#盒,03#兰蔻#3#瓶”按照规律进行截取，最终将截取到结果输出出来
~~~

#### 2.3JavaScript Date（日期） 对象

~~~
1.日期的常用方法
 getDate()：如何使用 getDate() 来取得当前月份的日期。


myDate.getFullYear()+"****"+myDate.getMonth()+"****"+myDate.getDay()+"****"+myDate.getHours()+"****"+myDate.getMinutes()+"****"+myDate.getSeconds()




备注：因为设置方式的不同/风俗的不同，导致月和日与中国的不对/不匹配，
解决办法：
/**       
 * 对Date的扩展，将 Date 转化为指定格式的String       
 * 月(M)、日(d)、12小时(h)、24小时(H)、分(m)、秒(s)、周(E)、季度(q) 可以用 1-2 个占位符       
 * 年(y)可以用 1-4 个占位符，毫秒(S)只能用 1 个占位符(是 1-3 位的数字)       
 * eg:       
 * (new Date()).pattern("yyyy-MM-dd hh:mm:ss.S") ==> 2006-07-02 08:09:04.423       
 * (new Date()).pattern("yyyy-MM-dd E HH:mm:ss") ==> 2009-03-10 二 20:09:04       
 * (new Date()).pattern("yyyy-MM-dd EE hh:mm:ss") ==> 2009-03-10 周二 08:09:04       
 * (new Date()).pattern("yyyy-MM-dd EEE hh:mm:ss") ==> 2009-03-10 星期二 08:09:04       
 * (new Date()).pattern("yyyy-M-d h:m:s.S") ==> 2006-7-2 8:9:4.18       
 */          
Date.prototype.pattern=function(fmt) {           
    var o = {           
    "M+" : this.getMonth()+1, //月份           
    "d+" : this.getDate(), //日           
    "h+" : this.getHours()%12 == 0 ? 12 : this.getHours()%12, //小时           
    "H+" : this.getHours(), //小时           
    "m+" : this.getMinutes(), //分           
    "s+" : this.getSeconds(), //秒           
    "q+" : Math.floor((this.getMonth()+3)/3), //季度           
    "S" : this.getMilliseconds() //毫秒           
    };           
    var week = {           
    "0" : "/u65e5",           
    "1" : "/u4e00",           
    "2" : "/u4e8c",           
    "3" : "/u4e09",           
    "4" : "/u56db",           
    "5" : "/u4e94",           
    "6" : "/u516d"          
    };           
    if(/(y+)/.test(fmt)){           
        fmt=fmt.replace(RegExp.$1, (this.getFullYear()+"").substr(4 - RegExp.$1.length));           
    }           
    if(/(E+)/.test(fmt)){           
        fmt=fmt.replace(RegExp.$1, ((RegExp.$1.length>1) ? (RegExp.$1.length>2 ? "/u661f/u671f" : "/u5468") : "")+week[this.getDay()+""]);           
    }           
    for(var k in o){           
        if(new RegExp("("+ k +")").test(fmt)){           
            fmt = fmt.replace(RegExp.$1, (RegExp.$1.length==1) ? (o[k]) : (("00"+ o[k]).substr((""+ o[k]).length)));           
        }           
    }           
    return fmt;           
}  
//在其他函数调用即可
function doDate(){
			var date = new Date();        
window.alert(date.pattern("yyyy-MM-dd hh:mm:ss"));
}
2.设置日期
   var myDate=new Date();
  myDate.setFullYear(2011,11,11)//为日期类型的变量myDate赋值为2011年11月11日
3.两个日期比较
<body>
<p id="demo">单击按钮升序排列数组。</p>
<button onclick="myFunction()">点我</button>
<script>
function myFunction(){
var x=new Date();
x.setFullYear(2011,11,11);
var today = new Date();
if (x>today)
{
    alert("今天是2011年11月11日之前");
}
else
{
    alert("今天是2011年11月11日之后");
}	 
}
</script>

</body>

4.页面定时器
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>利用定时器实现页面时钟</title>
    
    
<style type="text/css">
 #myclock{
	font-size: 50px;
	color: #CC0000;
	border-style:none 
}
</style>

<script type="text/javascript">
	var myTime 
function disptime( )
{
 var time = new Date( ); //获得当前时间
 var hour = time.getHours( );  //获得小时、分钟、秒
 var minute = time.getMinutes( );
 var second = time.getSeconds( );
 
 if (hour>12) //按12小时制显示
 {
    hour=hour-12;
 }
 if (minute < 10) //如果分钟只有1位，补0显示
   {
   	minute="0"+minute
   }
 if (second < 10) //如果秒数只有1位，补0显示
   {
   	second="0"+second
   }
 /*设置文本框的内容为当前时间*/
 document.getElementById("myclock").value =hour+":"+minute+":"+second
 /*设置定时器每隔1秒（1000毫秒），调用函数disptime()执行，刷新时钟显示*/
  myTime=setTimeout("disptime()",1000);
}

/*当输入框获取焦点的时候结束定时器*/
function stopTime(){
	clearTimeout(myTime)
}
</script>

</head>
<body onLoad="disptime()">
  当前时间为：<input id="myclock" onblur="disptime()" onfocus="stopTime()" type="text"   value="" size="15" >
</body>
</html>
拓展：用定时器实现页面进度条
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<style type="text/css">
			.progress_border{
				width: 300px;
				height: 50px;
				border: 1px dotted black;
			}
			.progress{
				width: 0px;
				height: 50px;
				background: red;
			}
		</style>
		<script type="text/javascript">
			onload = function () {
				
				var progress = document.getElementsByClassName('progress')[0];
				var p = 0;
				var percent =  document.getElementsByTagName('p')[0];
				var timerId = setInterval(function () {
					if(p == 300){
						clearInterval(timerId);
					}
					p++;
					progress.style.width = p +"px";
					var result = parseInt(p / 3);
					percent.innerHTML = result + "%";
				},500);
				
			}
		</script>
	</head>
	<body>
		
		<div id="container">
			
			<h2>进度条</h2>
			
			<div class="progress_border">
				<div class="progress"></div>
			</div>
			<p>XX%</p>
			
		</div>
		
	</body>
</html>
~~~

#### 2.4JavaScript Number 对象

~~~
 1.Number:  数字对象，经过封装的能让你处理数字值的对象


2.常量，属性

MAX_VALUE 可表示的最大的数。 // 1.7976931348623157e+308 
MIN_VALUE 可表示的最小的数。 // 5e-324 
NaN 非数字值。 // NaN 
NEGATIVE_INFINITY 负无穷大，溢出时返回该值。//-Infinity 
POSITIVE_INFINITY 正无穷大，溢出时返回该值。//Infinity 

例如：alert(Number.MAX_VALUE)


3.方法
toString():将类型转换成字符串
~~~

#### 2.5JavaScript Math（算数） 对象

~~~
 1.Math 对象：用于执行数学任务

语法
var x = Math.PI; // 返回PI
var y = Math.sqrt(16); // 返回16的平方根

2.Math 对象方法

abs(x)	返回 x 的绝对值。
ceil(x)	对数进行上舍入。
floor(x)	对 x 进行下舍入。
max(x,y,z,...,n)	返回 x,y,z,...,n 中的最高值。
min(x,y,z,...,n)	返回 x,y,z,...,n中的最低值。
pow(x,y)	返回 x 的 y 次幂。
random()	返回 0 ~ 1 之间的随机数。
round(x)	把数四舍五入为最接近的整数。
sqrt(x)	返回数的平方根。

随机产生颜色：
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>随机产生颜色</title>
</head>
<body>
     
     <input type="button" value="随机产生颜色" onclick="colorS()" />
     <script type="text/javascript">
        
         function colorS(){
             document.body.style.background=bg3();
         }
         
         function bg3(){
             var r=Math.floor(Math.random()*256);
             var g=Math.floor(Math.random()*256);
             var b=Math.floor(Math.random()*256);
             return "rgb("+r+','+g+','+b+")";
         }
     </script>
</body>
</html>
~~~

#### 2.6JavaScript面向对象编程（了解）

~~~
 1.对象：是属性和/方法的组合
  属性：是对象所拥有的一组外观特征，一般为名词 
  方法：是对象可以执行的功能，一般为动词 
    例如：对象：汽车
     		属性：型号：法拉利     颜色：绿色
           方法：前进、刹车、倒车

三类对象：
            浏览器对象：BOM 
            js脚本对象:数组，字符串，日期，Math等
            HTML文档对象：DOM

2.js面向对象编程实例
<body>
     <script type="text/javascript">
        　function Cat(name,color){
　　　　this.name = name;
　　　　this.color = color;
　　　　this.type = "猫科动物";
　　　　this.eat = function(){alert("吃老鼠");};
　　}
   var cat1 = new Cat("大毛","黄色");
　　var cat2 = new Cat ("二毛","黑色");
　　alert(cat1.type); // 猫科动物
　　cat1.eat(); // 吃老鼠
     </script>
</body>
~~~

### 3.JavaScript解析HTML：DOM

#### 3.1 JavaScript中常用的选择器

~~~
1.id选择器：通过 id 查找 HTML 元素，如果找到该元素，则该方法将以对象的形式返回该元素。
        <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>JS的第一个例子</title>
		<script type="text/javascript">
			function quickStart(){
			var	x=document.getElementById("te").value
			alert(x)
			alert("获取到的数据的类型为："+typeof(x))
			var afterX=parseInt(x)
			alert("获取到的数据的类型为："+typeof(afterX))
			}
			
		</script>
	</head>
	<body>
		<input type="text" id="te" value="" />
		<input type="button" value="点击" onclick="quickStart()" />
	</body>
</html>
2.name选择器：通过name查找到HTML的元素，如果找到元素了，则会返回一个数组
    <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>JS的第一个例子</title>
		<script type="text/javascript">
			function quickStart(){
			//1.通过name选择器获取到一组元素
			  var habbies=document.getElementsByName("like")


			  
			  //2.对数组进行循环
			  for(var i =0;i<habbies.length;i++){
			  	alert(habbies[i].value)
			    }
			}
		</script>
	</head>
	<body>
     <input type="button" value="点击" onclick="quickStart()" />
	    唱歌 <input type="checkbox" name="like" value="唱歌"/>
	   打球<input type="checkbox" name="like" value="打球"/>
	    跳舞<input type="checkbox" name="like" value="跳舞"/>
	</body>
</html>
3.通过标签名找到 HTML 元素：getElementsByTagName("p");
			var habbies=document.getElementsByTagName("input")//其他的都与步骤2一样
~~~

#### 3.2事件

~~~
1.事件：一个动作，可以是用户触发的，也可以是浏览器触发的，当事件发生时，你可以做些事情
          例如：我给你一个眼神，你就笑了

2.常见的HTML事件
onchange	HTML 元素改变
onclick	用户点击 HTML 元素
onmouseover	用户在一个HTML元素上移动鼠标
onmouseout	用户从一个HTML元素上移开鼠标
onkeydown	用户按下键盘按键
onload	浏览器已完成页面的加载

3.对于HTML的事件触发了，那么JavaScript 可以做什么？
 答案肯定是响应：
                         怎样响应：执行函数
   <body >
	<script type="text/javascript">
			
	 function quickEyes()
	 {
      alert("确认过眼神，我就是你最爱的人");  
    }
             
	</script>
	<input type="button" value="函数--求和" onclick="quickEyes()"/> 
	</body>
                                     
~~~

#### 3.3JavaScript 能够改变页面中的所有 HTML 元素

~~~
 1）改变 HTML 内容：document.getElementById("p1").innerHTML="新文本!";
~~~

#### 3.4JavaScript 能够改变页面中的所有 HTML 属性

~~~
改变 HTML 属性：
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>JS解析DOM之更改HTML中元素的属性</title>
		<script type="text/javascript">
			
			function res(){
            var btn1=document.getElementById("btn1")
            btn1.disabled=false  //恢复按钮的点击
            btn1.value="可以点击了" //更新按钮显示的内容
			}
			
		</script>
	</head>
	<body>
		<input type="button" value="禁用" id="btn1" disabled="disabled" />
		<input type="button" value="恢复" onclick="res()" />
	</body>
</html>


~~~

#### 3.5JavaScript 能够改变页面中的所有 CSS 样式

~~~
 1.改变HTML元素的CSS样式
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
<script type="text/javascript">
function updateHtmlCss(){
	alert("进入")
    var	p1=document.getElementById("p1")
        p1.style.color="red"
        p1.style.fontSize="28px"
        p1.style.fontFamily="微软雅黑"
}
</script>
	</head>
	<body>
		<p id="p1">Hello World!</p>
		<input type="button" value="改变 HTML 样式"  onclick="updateHtmlCss()" />

	</body>
</html>

2.使用js实现HTML中元素的隐藏或显示
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
<script type="text/javascript">
function hiddenElement(){
	alert("隐藏")
    var	box=document.getElementById("box")
        box.style.display="none"
        //box.style.visibility="hidden"
}

function showElement(){
	alert("显示")
	    var	box=document.getElementById("box")
	    box.style.display="block"
        //box.style.visibility="visible"
	
}
</script>
	</head>
	<body>
		<div id="box" style="display: block;">
			<p>上海滩</p>
			<p>大上海。。。百乐门。。。。</p>
		</div>
		<input type="button" value="隐藏"  onclick="hiddenElement()" />
		<input type="button" value="显示"  onclick="showElement()" />
	</body>
</html>


升级版本：

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
<script type="text/javascript">

function hiddenAndShow(){
	    var btn1=document.getElementById('btn');
	    var	box=document.getElementById("box")
	    alert(btn1.value)
	    if(btn1.value=="隐藏"){
	    	box.style.display="none"
	    	btn1.value="显示"
	    }
	    else{
	    	box.style.display="block"
	    	btn1.value="隐藏"
	    }
	
}
</script>
	</head>
	<body>
		<div id="box" >
			<p>上海滩</p>
			<p>大上海。。。百乐门。。。。</p>
		</div>
		<input type="button" id="btn" value="隐藏"  onclick="hiddenAndShow()" />
		
	</body>
</html>

~~~

#### 3.6JavaScript对HTML元素的增删

~~~
 1）创建新的 HTML 元素
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
<script type="text/javascript">

function addElement(){
	    var div1=document.getElementById('div1');
	    var para=document.createElement("p");
		var node=document.createTextNode("这是一个新段落的内容：666");
		para.appendChild(node);
		div1.appendChild(para)
}
</script>
	</head>
	<body>
		<div id="div1">
		<p id="p1">这是一个段落。</p>
		<p id="p2">这是另一个段落。</p>
		</div>
		<input type="button" id="btn" value="增加"  onclick="addElement()" />
	</body>
</html>


2）删除HTML元素
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
<script type="text/javascript">

function removeElement(){
	    var parent=document.getElementById('div1');
	    var child=document.getElementById('p1');
        parent.removeChild(child)
}
</script>
	</head>
	<body>
		<div id="div1">
		<p id="p1">这是一个段落。</p>
		<p id="p2">这是另一个段落。</p>
		</div>
		<input type="button" id="btn" value="删除"  onclick="removeElement()" />
	</body>
</html>
3.扩展--“盖大楼”

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
<script type="text/javascript">
function addRows() {
    var table = document.getElementById("tad");    
    var oneRow = table.insertRow();//插入一行  
        oneRow.id=getRowId()
        alert(oneRow.id)
    var cell1= oneRow.insertCell();//单单插入一行是不管用的，需要插入单元格  
    var cell2=oneRow.insertCell();  
     cell1.innerHTML = "第一列的内容";   
     cell2.innerHTML="第二列的内容：<a  href=\"javascript:delRows('"+oneRow.id+"')\"  >[删除]<\a>";  
        }



function delRows(a){
	   alert("删除该行"+a)
	   var newTr=document.getElementById(a)
	   alert(newTr.id)
	   newTr.parentNode.removeChild(newTr);
	
}

function getRowId(){
	
	return Math.floor(Math.random()*256)
}
</script>
	</head>
	<body>
		<table width="100%" height="300px" border="1px"  id="tad">  
      <tr>
      	<td>商品单价</td>
      	<td>商品数量</td>
      </tr> 
      
      
</table>
<input type="button" value="添加一行" onclick="addRows()" />
	</body>
</html>


~~~

### 4.js表单处理

#### 4.1表单处理之简单的表单验证

~~~
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>JS之简单的表单验证</title>
           <script type="text/javascript">
            function  check(){
            	var uname=document.getElementById("uname")
            	var pass1=document.getElementById("pass1").value
            	var pass2=document.getElementById("pass2").value
            	
                if(pass1==pass2)
                {
                	if(pass1.length!=0)
                	{
                     alert("注册成功")                		
                	}
                	else{
                     alert("密码不能为空")
                     return false
                	}
                }
                else
                {
                alert("请确保秘密和再次输入的密码一样")
                return  false//结束程序的执行
                }
            }
           	
           </script>		
	</head>
	<body>
		<form action="" onsubmit=" return check()">	
		<table border="2px" bordercolor="green">
		    <tr>
		    	<td>用户名：</td>
		    	<td><input type="text" id="uname" value=""/></td>
		    </tr>	
		     <tr>
		    	<td>密码：</td>
		    	<td><input type="text" id="pass1" value=""/></td>
		    </tr>
		     <tr>
		    	<td>再次确认密码：</td>
		    	<td><input type="text" id="pass2" value=""/></td>
		    </tr>
		     <tr>
		    	<td><input type="reset" value="重置" /></td>
		    	<td><input type="submit" value="注册"/></td>
		    </tr>
		</table>
		</form>
	</body>
</html>

~~~

#### 4.2表单处理之稍微复杂的注册验证

~~~
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>表单处理之简单的表单验证</title>
		<script type="text/javascript">
			function check(){
				alert("提交之前的校验")
				f=document.reg_form;

				if(f.uname.value==""){
				alert("请输入姓名");
				f.uname.focus();//获取当前鼠标进入该输入框，或者可以理解为获取焦点
				return false;
				}  
				
				if (f.gender[0].checked==false && f.gender[1].checked==false){
				alert("请指定性别");
				f.gender[0].focus();
				return false;
				}
				
				if ((f.password.value.length < 6) || (f.password.value == "")){
				alert("请输入至少 6 个字符的密码！");
				f.password.focus();
				return false;
				}
				
				q=f.email.value.indexOf("@");
				if (q==-1){
				alert("请输入有效的电子邮件地址");
				f.email.focus();
				return false;
				}
					
				if (f.age.value<1 || f.age.value> 99 || isNaN(f.age.value)){
				alert("请输入有效的年龄！");
				f.age.focus();	
				return false;
				}
			}
		</script>
	</head>
	<body>
<form action="" method="post" name="reg_form" onSubmit="return check( )"  >
  <table border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td>会员名：<span class="style2">*</span></td>
      <td><input  type="text" name="uname" id="uname" maxlength=32 size=20 ></td>
    </tr>

    <tr>
    <td><div align="center">性别：</div></td>
    <td><input type="radio" name="gender" value="男">
男
  <input type="radio" name="gender" value="女">
女</td>
  </tr>

    
    <tr>
      <td>密　码：<span class="style2">*</span></td>
      <td><input   type="text" name="password" id="password"  maxlength=32 size=20></td>
    </tr>

    <tr>
    <td><div align="center">电子邮件地址：</div></td>
    <td><input type="text" name="email" id="email"><td>
  </tr>

   <tr>
    <td><div align="center">年龄：</div></td>
    <td><input type="text" name="age"></td>
  </tr>

    <tr>
      <td><div align="center">
        <input name="register" type="submit" id="register" value="   注  册   " >
      </div></td>
    </tr>

  </table>
</form>
	</body>
</html>
~~~

#### 4.3复选框之全反选

~~~
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>表单处理之简单的表单验证</title>
		<script type="text/javascript">
			
			function checkAll() {  
        var all=document.getElementById('all');//获取到点击全选的那个复选框的id  
        var one=document.getElementsByName('checkname[]');//获取到复选框的名称  
        if(all.checked==true){//因为获得的是数组，所以要循环 为每一个checked赋值  
            for(var i=0;i<one.length;i++){  
                one[i].checked=true;  
            }  
  
        }else{  
            for(var j=0;j<one.length;j++){  
                one[j].checked=false;  
            }  
        }  
    }  
		</script>
	</head>
	<body>
   <table border="2px" bordercolor="green" align="center">
   	<tr>
   	<td>序号</td>
   	<td>姓名</td>
   	<td>年龄</td>
   	<td>性别</td>
   	</tr>
   	
    <tr>
    <td>1<input type="checkbox" name="checkname[]"value="1"/></td>
    <td>张三</td>
    <td>23</td>
    <td>男</td>
    </tr>
    
      <tr>
    <td>2<input type="checkbox" name="checkname[]"value="1"/></td>
    <td>李四</td>
    <td>24</td>
    <td>男</td>
    </tr>
    
      <tr>
    <td>3<input type="checkbox" name="checkname[]"value="1"/></td>
    <td>王五</td>
    <td>25</td>
    <td>男</td>
    </tr>
      <tr>
    <td>4<input type="checkbox" name="checkname[]"value="1"/></td>
    <td>小六</td>
    <td>26</td>
    <td>女</td>
    </tr>
     
     <tr>
        <td colspan="4">全选/反选<input type="checkbox" name="all" id="all" onclick="checkAll()" /></td>
    </tr>
   </table>  
	
	
	</body>
</html>

~~~

#### 4.4页面中元素的值的计算

~~~
<!doctype html>
<html lang="en">
 <head>
  <script type="text/javascript">
  function getSum(){
  	var one=document.getElementById("one").value
  	var two=document.getElementById("two").value
    document.getElementById("result").value = parseInt(one)*parseInt(two);
  }
  </script>
 </head>
 <body>
 	<table border="2px" bordercolor="green">
 		<tr>
 			<td>商品单价</td>
 			<td>商品数量</td>
 			<td>商品总价</td>
 		</tr>
 		<tr>
 			<td><input type="text" id="one" value="1" onkeyup="getSum()"></td>
 			<td><input type="text" id="two"  value="1" onkeyup="getSum()"></td>
 			<td><input type="text" id="result" value="0" readOnly="true"></td>
 		</tr>
 	</table>
 </body>
</html>
~~~

#### 4.5js控制下拉列表

~~~
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>注册</title>
<script language="JavaScript" >

//1.动态创建select 
function createSelect(){ 
var newSelect = document.createElement("select"); 
newSelect.id = "newSelect"; 
document.body.appendChild(newSelect); 
} 


//2.添加选项option 
function addOption(){ 
//根据id查找对象， 
var obj=document.getElementById('newSelect'); 
//添加一个选项 
obj.add(new Option("文本1","值1")); 
obj.add(new Option("文本2","值2"));
obj.add(new Option("文本3","值3"));
} 


//3.删除所有选项option 
function removeAll(){ 
var obj=document.getElementById('newSelect'); 
obj.options.length=0; 
} 


//4.删除一个选项option
function removeOne(){ 
var obj=document.getElementById('newSelect'); 
//index,要删除选项的序号，这里取当前选中选项的序号 
var index=obj.selectedIndex; 
obj.options.remove(index); 
} 


//5.获得选项option的序号，value，文本
  function myfun1( )
  {
     var d=document.getElementById("myselect")
     var index=d.selectedIndex//取当前选中选项的序号
     var optionValue=d.options[index].value
     var optionText = d.options[index].text;//获得选项option的文本
     alert("当前是："+index+"被选中了且其option的值为："+optionValue+"其option的文本为："+optionText)

  }
 
 
 //6.修改选项option 
 function  updateSelectedOption(){
 var obj=document.getElementById('newSelect'); 
var index=obj.selectedIndex; //序号，取当前选中选项的序号 
obj.options[index]=new Option("新文本","新值"); 
 }
 
 
 //7.删除select
 function deleteSelect(){
var newSelect = document.getElementById("newSelect"); 
newSelect.parentNode.removeChild(newSelect); 
 }
</script>

 </head>

<body>
    下拉列表：<select name="myselect" id="myselect" onChange="myfun1( )">
	      <option>--请选择开户帐号的城市--</option>
	      <option value="bj">北京市</option>
	      <option value="sh">上海市</option>
	      <option value="cq">重庆市</option>
	      <option value="tj">天津市</option>
	      <option value="sc">四川省</option>

<input type="button" value="动态创建select" onclick="createSelect()" />
<input type="button" value="添加选项option" onclick="addOption()" />
<input type="button" value="删除所有选项option" onclick="removeAll()" />
<input type="button" value="删除一个选项option" onclick="removeOne()" />
<input type="button" value="修改选项option" onclick="updateSelectedOption()" />
<input type="button" value="删除select " onclick="deleteSelect()" />


</form>
</body>
</HTML>

~~~

6.6常用的js组件

	**************************日期组件******************
	1）将资源文件加入到项目中
	
	2）在页面的相应的位置使用即可
	<!doctype html>
	<html lang="en">
	 <head>
	 	<script type="text/javascript"  src="../My97DatePicker/WdatePicker.js"></script>
	  <script type="text/javascript">
	  function getDateByWdatePicker(){
	  	var one=document.getElementById("bDate").value
	  	alert("获取的日期的类型为："+typeof(one))
	  	alert("获取到的日期的值为："+one)
	  }
	  </script>
	 </head>
	 <body>
	 	<table border="2px" bordercolor="green">
	<tr style="margin-top:10px">   
	<td align="right"> 放假开始时间: </td>   
	<td align="left" >   
	   <input class="WdateTime" style="width:191px" type="text" id="bDate" name="bDate" onClick="WdatePicker({el:'bDate',dateFmt:'yyyy-MM-dd',maxDate: '#F{$dp.$D(\'eDate\')}' })"/>   
	</td>    
	<td align="right"> 放假结束时间: </td>   
	<td align="left" >   
	   <input class="WdateTime" style="width:191px" type="text" id="eDate" name="eDate" onClick="WdatePicker({el:'eDate',dateFmt:'yyyy-MM-dd',minDate: '#F{$dp.$D(\'bDate\')}' })"/>     
	</td>    
	</tr>  
	<tr>
		<td colspan="2"><input type="button" value="点击" onclick="getDateByWdatePicker()"/></td>
		
	</tr>
	 	</table>


​	 
	 </body>
	</html>


​	
​	
	备注：在python中字符串与日期之间的类型互换
	1）字符串 -> 日期
	例如：
				import datetime
	
				detester = ‘2017-01-01'
				date = datetime.datetime.strptime(detester,’%Y-%m-%d')
	
	2）日期 -> 字符串
			import datetime
	
			date = datetime.now()
			detester = date.strftime(‘%Y-%m-%d')
	**********************js实现省市区联动的组件**********************
	 <!doctype html>
	<html>
	<head>
	<meta charset="utf-8">
	<title>省市区联动</title>
	
	<style type="text/css">
	body{
		background-color:#00CC99;
		padding-left:400px;
		padding-top:300px;
		}
	select{
		background-color:#99FF33;
		width:100px;
		height:30px;
		cursor:pointer;
		}
	</style>
	</head>
	
	<body>
	<select id="province" onchange="chooseProvince(this)">
		<option value="1">请选择省</option>
	</select>
	
	<select id="city" onChange="chooseCity(this)">
		<option value="1">请选择市</option>
	</select>
	
	<select id="area">
		<option value="1">请选择区</option>
	</select>
	<script type="text/javascript"  src="../js/省市区联动.js"></script>
	</body>
	</html>
	**********************校验组件**********************
	 <!doctype html>
	<html lang="en">
	 <head>
	 	<script type="text/javascript"  src="../js/xjValidate.js"></script>
	  </script>
	 </head>
	 <body>
	 <div>
	请输入姓名：
	<input class="ipt" type="text" name="yourname" id="yourname">
	请输入身份证号码：
	<input name='card_no' type='text' id='card_no' value='' />
	<input type='button' name='submit' value='click me' onclick='javascript:checkCard();' />  
	</div>
	 </body>
	</html>
	********************Jquery框架/组件****************
#### 3.7js实现图片轮播/幻灯显示

~~~
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<style type="text/css">
			*{
				margin: 0;
				padding: 0;
			}
			
			ul,ol{
				list-style: none;
			}
			
			/*消除图片底部3像素距离*/
			img{
				vertical-align: top;
			}
			
			.scroll{
				width: 500px;
				height: 200px;
				margin: 100px auto;
				border: 1px solid #ccc;
				padding: 7px;				
				position: relative;
			}
			
			.box{
				width: 500px;
				height: 200px;
				overflow: hidden;
				position: relative;
			}
			
			.box ul{
				width: 1000%;
				position: absolute;
				left: 0;
				top: 0;
				
			}
			.box ul li{
				float: left;
			}
			
			.scroll ol{
				/*编号整体显示的位置*/
				position: absolute;
				right: 10px;
				bottom: 10px;
				
			}
			
			.scroll ol li{
				/*编号中每一项显示的样式*/
				float: left;
				width: 20px;
				height: 20px;
				text-align: center;
				line-height: 20px;
				border-radius: 50%;
				background-color: pink;				
				margin-left:10px ;
				cursor: pointer;
			}
			.scroll ol li.current{
				/*编号中每选中一项给其设定颜色为紫色*/
				background-color: purple;
			}
		</style>
		<script type="text/javascript">
			window.onload = function(){
    	
    	// 动画函数 第一个参数，代表谁动  第二个参数 动多少
    	// 让图片做匀速运动，匀速动画的原理是 当前的位置 + 速度  即 offsetLeft + speed
    	
    	function animate(obj,target){
    		// 首先清除掉定时器
    		clearInterval(obj.timer);
    		// 用来判断 是+ 还是 -  即说明向左走还是向右走
    		var speed = obj.offsetLeft < target ? 15 : -15;
    		obj.timer = setInterval(function(){
    			var result = target - obj.offsetLeft;//它们的差值不会超过speed
    			obj.style.left = obj.offsetLeft + speed + "px";
    			// 有可能有小数的存在，所以在这里要做个判断 			
    	        if (Math.abs(result) <= Math.abs(speed)) {
    	        	clearInterval(obj.timer);
    	        	obj.style.left = target + "px";
    	        }
    		},10);
    	}
    	
    	
    	//获得元素
    	var scroll = document.getElementById("scroll"); // 获得大盒子
    	var ul = document.getElementById("ul"); // 获得ul
    	var ulLis = ul.children;// 获得ul的盒子 以此来生成ol中li的个数
    	var liWidth = ul.children[0].offsetWidth;// 获得每个li的宽度
    	
    	// 操作元素
    	// 因为要做无缝滚动，所以要克隆第一张，放到最后一张后面
    	// 1. 克隆元素
    	ul.appendChild(ul.children[0].cloneNode(true));
    	
    	// 2.创建ol 和li
    	var ol = document.createElement("ol");//创建ol元素
    	scroll.appendChild(ol);// 把ol放到scroll盒子里面去
    	for (var i=0;i<ulLis.length-1;i++) {
    		var li = document.createElement("li");// 创建li元素
    		li.innerHTML = i + 1;// 给li里面添加文字  1 2 3 4 5
    		ol.appendChild(li);// 将li元素添加到ol里面
    	}
    	ol.children[0].className = "current";// ol中的第一个li背景色为purple
    	
    	
    	// 3. 动画开始  (鼠标经过第几个小圆点，就要展示第几张图片，并且小圆点的颜色也发生变化)
    	var olLis = ol.children;
    	for (var i = 0; i < olLis.length;i++) {
    		// 给ol中的每个li添加一个属性 index  用来获得当前第几个li的索引号
    		olLis[i].index = i;
    		olLis[i].onmouseover = function(){
    			for (var j = 0;j<olLis.length;j++) {
    				// 清空所有的 类名
    				olLis[j].className = "";
    			}
    			// 给当前的li添加一个类名
    			this.className = "current";
    			
    			// 接着调用动画函数 ，根据第几个li 展示第几张图片 第一个参数谁做动画  第二个参数 走多少
    			animate(ul,-this.index * liWidth);
    			// 接着让小圆点和 key 等于当前的索引号
    			circle = key = this.index;
    		}
    	}
    	
    	// 4. 添加定时器  让图片自动轮播
    	var timer = null; // 轮播图的定时器
    	var key = 0;// 控制播放的张数
    	var circle = 0;// 控制小圆点
    	
    	timer = setInterval(autoplay,1000);// 自动轮播
    	function autoplay(){
    		/*自动轮播时,要对播放的张数key进行一个判断,如果播放的张数超过ulLis.length-1,
    		就要重头开始播放.  因为我们克隆了第一张并将其放在最后面,所以我们要从第二张图片开始播放*/
    		key++; // 先++
    		if(key > ulLis.length-1){// 后判断
    			
    			ul.style.left = 0; // 迅速调回
    			key = 1; // 因为第6张是第一张，所以播放的时候是从第2张开始播放
    		}
    		// 动画部分
    		animate(ul,-key*liWidth);
    		// 小圆点circle   当显示第几张图片是，对应的小圆点的颜色也发生变化 
    		
    		/*同理,对小圆点也要有一个判断*/
    		circle++;
    		if (circle > olLis.length-1) {
    			circle = 0;
    		}
    		// 小圆点颜色发生变化
    		for (var i = 0 ; i < olLis.length;i++) {
    			// 先清除掉所用的小圆点类名
    			olLis[i].className = ""; 
    		}
    		// 给当前的小圆点 添加一个类名
    		olLis[circle].className = "current";
    		
    	}
    	
    	// 最后，鼠标经过大盒子停止定时器
    	scroll.onmouseover = function(){
    		clearInterval(timer);
    	}
    	// 鼠标离开大盒子时 开启定时器
    	scroll.onmouseout = function(){
    		timer = setInterval(autoplay,1000);  	
    	}   	  	
    	
    }
		</script>
	</head>
	<body>
		<div id="scroll" class="scroll">
			<div id="box" class="box">
				<ul id="ul">
					<li><img src="../images/1.jpg" width="500" height="200"></li>
					<li><img src="../images/2.jpg" width="500" height="200"></li>
					<li><img src="../images/3.jpg" width="500" height="200"></li>
					<li><img src="../images/4.jpg" width="500" height="200"></li>
					<li><img src="../images/5.jpg" width="500" height="200"></li>
				</ul>				
			</div>
		</div>
	</body>
</html>

~~~



​	
​	
​	
​	
​	
​	


