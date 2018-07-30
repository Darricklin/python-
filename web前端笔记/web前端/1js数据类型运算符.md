## 组成部分

ECMAScript，描述了该语言的语法

文档对象模型（DOM），描述处理网页内容的方法和接口

浏览器对象模型（BOM），描述与浏览器进行交互的方法和接口

## 一 使用JavaScript的三种方式: 

##### 1.在header头部内嵌

#####  \<script type=“text/javascript”>\</script>

##### 2.在header头部导入

#####  \<script type=“text/javascript”  src="**.js">\</script>

##### 3.给HTML代码绑定js事件

##### \<button onclick="js代码">点击\</button>

**注意：**

##### 在导入js代码的标签内 不可以书写js代码 否则不会被执行

## 二 js代码输出的3种方式 

```javascript
第一句javascript代码：alert(“hello world!”) ; 
第二句javascript代码：document.write(“亲，我在页面上，跟alert不一样噢！”);
第三句javascript代码：console.log(“我是在控制台打印的, 以后常用我！”);
```

## 三 script标签可以出现多次

且可以出现在html文件的任何地方,建议写在\<head>\</head>之间;另外,同一个文件中Javascript和HTML代码,它们的执行顺序都是自上而下，谁在前就谁先执行,谁在后就后执行.

## 四  JavaScript的注释

​     单行注释://,    多行注释 /**/

### 五,  外部javaScript文件引入方式

\<script type="text/javascript" src="demo1.js" >\</script>

##### 注意：

#####  	1、不可以使用单标,以下是不正确的写法

​    	 	<script type="text/javascript" src="demo1.js“/>

##### 	2、在引入了外部文件的标签中写代码会无效,下面的alert()不会执行

​    		 \<script src=“demo1.js”>alert(‘xxxx’)\</script>

##### 	3、script标签的属性: 

​    		src表示要引入的外部文件

​    		type 表示脚本语言的类型uy

## 六 变量和常量定义(使用var关键字)：

##### 	（1）var age;       //var 是关键字，age是变量名 

##### （2）赋值：	age= 20;

##### 	（3） 定义的同时赋值：

​       		var age=20；

##### 	 （4）可以一次定义多个变量：

​       		var name=“zhangsan", age=18，weight=108;

##### 	（5）JS是弱数据类型的语言，容错性较高,在赋值的时候才确定数据类型

​      		var b；           //temp时啥数据类型？不确定 

​      		b =12;            //temp变量是数字类型

​      		b =“hello”;      //temp变量变成了字符串类型

​      		console.log(typeof b);

#####    (6) 常量定义

​	const 变量名 = 值

​	**注意:** 其值之后不可以修改

#### 	JS代码规范:

​     		1,保持代码缩进

​     		2,变量名遵守命名规范,尽量见名思意

​    		3,JS语句的末尾尽量写上分号;

​     		4,运算符两边都留一个空格,如 varn=1+2;

## 七、JS变量的命名规范

​	1, 变量名可以是数字,字母,下划线_和美元符$组成;

​	2, 第一个字符不能为数字

​	3, 不能使用关键字或保留字

​	4,标识符区分大小写，如：age和Age是不同的变量。但强烈不建议用同一个单词的大小写区分两个变量。

​	5, 变量命名尽量遵守驼峰原则:myStudentScore

​	6, 变量命名尽量见名思意,可参考下图

|  类型  |  前缀  |    类型    |
| :--: | :--: | :------: |
|  数组  |  a   |  Array   |
| 布尔值  |  b   | Boolean  |
| 浮点数  |  f   |  Float   |
|  函数  |  Fn  | Function |
|  整数  |  i   |   Int    |
|  对象  |  o   |  Object  |
| 字符串  |  s   |  String  |

### 八，JS数据类型

#### 	(1)  JS数据类型一般可以分为: 

​      		Boolean:布尔类型

​      		Number：数字（整数int，浮点数float）

​     		String：字符串

​      		Array：数组 

​      		Object：对象

​		特殊数据类型Null、Undefined

​		undefined是派生自 null

##### 		注意:变量的类型在赋值时才能确定

#### 	(2) typeof操作符: 

​       		用来检测变量的数据类型,对于值或变量使用 typeof操作符会返回如下字符串: 

​		Undefined数据类型的值为:  undefined  未定义

​		Boolean数据类型的值为:  boolean     布尔值

​		String数据类型的值为:  string         字符串

​		Number数据类型的值为:  number       数值

​		Object数据类型的值为:  object          对象或者null

​		Function数据类型的值为:  function      函数

​		例如:

​		var b= "张三";

​		console.log(typeof b);

​		console.log(typeof "张三"); 

#### 	(3) Undefined类型: 

​		Undefined类型只有一个值，即特殊的 undefined。在使用var声明变量，但没有对其初始化时，这							个变量的值就是 undefined

​	例如:

​	var b;

​	console.log(b); //undefined

​	注意:我们在定义变量的时候， 尽可能的不要只声明，不赋值, 而是声明的同时初始化一个值。

#### 	(4) Null类型:

​      		Null类型是一个只有一个值的数据类型，即特殊的值 null。它表示一个空对象引用(指针)，而typeof操作符检测 null 会返回 object。 

​	例如:

​	var b = null;

​	console.log(typeof b);

​	undefined是派生自 null 的，因此 ECMA-262 规定对它们的相等性测试返回 true, 表示值相等。

​	console.log(undefined == null);

​	但是两者的数据类型是不一样的

​	var b;

​	var car = null;

​	console.log(typeof b== typeof car)

#### 	(5) Boolean类型:

  	Boolean类型的转换规则:(牢记)

​	String:非空字符串为true,空字符串为false

​	Number:非0数值为true, 0或者NaN为false

​	Object:对象不为null则为true, null为false

​	Undefined: undefined为false

#### 	(6) Number类型:

​      	Number类型包含两种数值：整型和浮点型.

​	整型:

​	var b = 100; 

​	console.log(b);

​	浮点类型:

​	就是该数值中必须包含一个小数点，并且小数点后面必须至少有一位数字

​	var b= 3.8;

​	var b= 0.8;

​	var b= .8;  //有效，但不推荐此写法

#### 	Number类型:

​      由于保存浮点数值需要的内存空间比整型数值大两倍，因此ECMAScript会自动将可以转换为整型的浮点数值转成为整型。

​	var b= 8.;  //小数点后面没有值，转换为 8

​	var b= 12.0;  //小数点后面是 0，转成为12

​	对于那些过大或过小的数值，可以用科学技术法来表示(e表示法)。用 e 表示该数值的前面 10 的指数次幂。

​	var box = 4.12e9;  //即 4120000000

​	var box = 0.0000412;  //即 4.12e-5

​	浮点数值的范围在：Number.MIN_VALUE ~ Number.MAX_VALUE之间,如果超过了浮点数值范围的最大值或最小值，那么就先出现 Infinity(正无穷)或-Infinity(负无穷)。

#### 	NaN, 即非数值(Not a Number)是一个特殊的值

   	 这个数值用于表示一个本来要返回数值的操作数未返回数值的情况(这样就不会抛出错误了)。比如，在其他语言中,  任何数值除以 0都会导致错误而终止程序执行。但在ECMAScript中，会返回出特殊的值，因此不会影响程序执行。

​	var b =0/0;    //NaN

​	var b =12/0;  //Infinity

​	var b =12/0 * 0  //NaN

​	ECMAScript提供了 isNaN()函数，用来判断这个值到底是不是 NaN。isNaN()函数在接收到一个值之后，会尝试将这个值转换为数值。

​	console.log(isNaN(NaN));       //true

​	console.log(isNaN(25));           //false，25 是一个数值

​	console.log(isNaN('25'));  //false，'25'是一个字符串数值，可以转成数值

​	console.log(isNaN('zhangsan')); //true，'zhangsan'不能转换为数值

​	console.log(isNaN(true));         //false       true 可以转成成 1

#### 常用函数:

1. 向上取整,有小数就整数部分加1

   Math.ceil(5/2)

2. 四舍五入.

​      Math.round(5/2)

3. 向下取整

   Math.floor(5/2)

4. 保留小数

   var num =2.446242342;
   num = num.toFixed(2); // 输出结果为 2.45

## 九 JS类型转换

##### 	字符串转换数字类型：parseInt()、parseFloat() 、Number()

#####      	parseInt()      是把其它类型转换为整型

##### ​parseFloat()  是把其它类型转换为浮点型（小数）

##### 	Math.round四舍五入 (78.566) -> 79
