# 字符串

## 一 字符串的属性

##### 字符串的属性

##### length:  表示字符串的长度

   例如 :  var str = “howareyou”;

 ​              console.log(str.length);

​              console.log(str[0]);  //获取字符串中对应下标的字符

##### 注意: ECMAScript 中的字符串是不可变的; 也就是说，字符串一旦创建，它们的值就不能改变.

   例如:  var str = “亲,包邮哦”;

​             str[0] = “唉”; //不会改变

##### 如果要改变某个变量保存的字符串，首先要销毁原来的字符串，然后再用另一个包含新值的字符串填充该变量.

var str = “Hello”;

str = str+” world!”;

## 二 字符串的方法

##### 字符串的方法(函数)

##### （1）str.charAt(3);   获取下标为3的字符

##### （2）str.charCodeAt(3);  获取下标为3的字符的编码(ASCII码)

##### （3）String.fromCharCode(94);   ASCII编码转换成字符

该方法是String的静态方法，所以用String调用，       

如：var str = String.fromCharCode(98,99); //可传入多个参数

ASCII（AmericanStandard Code for Information Interchange，美国标准信息交换代码）

##### （4）str.concat(); 连接字符串

​    例如:var str1 = “hello”;

​             var str2 = str1.concat(“ world”);

##### （5）字符串的查找方法

##### str.indexOf(“abc”); 查找字符串第一次出现的位置,如果没找到则返回-1

​    例如:  var str = “abcdabcd”;

​              var subStr = “bcd”;

​              var index = str.indexOf(subStr); 

##### （6）str.lastIndexOf(“abc”); 查找字符串最后一次出现的位置,如果没找到则返回-1

​    例如: var index = str.lastIndexOf(“abc”);

##### （7）str.search(); 正则匹配(返回第一次出现的位置)

​    例如:var str = “Abcdabcd”;

​             varindex = str.search(/abc/i);

#####              注: g表示进行全局匹配，i表示匹配的时候忽略大小写

##### （8）str.replace(); 替换字符串

​    例如:var str = “how are Are are you!”;

​             varnewStr = str.replace(“are”, “old are”);

##### 这里的替换只能执行一次，不能够进行全局匹配，如果需要全局匹配，则应使用正则表达式：str.replace(/are/gi, "old are")

##### （9）str.substring(start,end); 截取字符串范围是[start,end)

​      例如:varstr=  “Hello world!”;

​               console.log(str.substring(2,5));

​              注:如果只有一个参数, 则表示到字符串最后

##### （10）str.split(separator, howmany); 根据分隔符、拆分成数组

​      separator(字符串或正则表达式)

​      howmany(可以指定返回的数组的最大长度,可以省略)

​      注:如果空字符串(“”)用作separator,那么stringObject中的每个字符之间都会被分割。

##### （11）str.toLowerCase();把字符串转换成小写

##### 	    	    str.toUpperCase();把字符串转换成大写

## 三 Math对象

##### Math对象

​      Math对象可以用于执行数学任务

##### Math对象的常用函数: 

```javascript
Math.round(3.6)    //四舍五入
Math.random()       //返回0-1之间的随机数
Math.max(num1, num2)  //返回较大的数
Math.min(num1, num2)   //返回较小的数
Math.abs(num)     //绝对值
Math.ceil(19.3)     //向上取整
Math.floor(11.8)    //向下取整
Math.pow(x,y)       //x的y次方
Math.sqrt(num)     //开平方
Math.sin(x)//返回数的正弦
```

## 四 正则表达式的概念

#### **match 方法** 

使用正则表达式模式对字符串执行查找，并将包含查找的结果作为数组返回。 
stringObj.match(rgExp) 
参数 
stringObj 
必选项。对其进行查找的 String 对象或字符串文字。 
rgExp 
必选项。为包含正则表达式模式和可用标志的正则表达式对象。也可以是包含正则表达式模式和可用标志的变量名或字符串文字。 
其余说明与exec一样，不同的是如果match的表达式匹配了全局标记g将出现所有匹配项，而不用循环，但所有匹配中不会包含子匹配项。

#### exec 方法 

用正则表达式模式在字符串中查找，并返回该查找结果的第一个值（数组），如果匹配失败，返回null。 
rgExp.exec(str) 

#### test 方法 

返回一个 Boolean 值，它指出在被查找的字符串中是否匹配给出的正则表达式。 
rgexp.test(str) 

#### search 方法 

返回与正则表达式查找内容匹配的第一个子字符串的位置（偏移位）。 
stringObj.search(rgExp) 

#### replace 方法 

返回根据正则表达式进行文字替换后的字符串的复制。 
stringObj.replace(rgExp, replaceText) 

#### split 方法 

将一个字符串分割为子字符串，然后将结果作为字符串数组返回。 
stringObj.split([separator[, limit]]) 

说明 
split 方法的结果是一个字符串数组，在 stingObj 中每个出现 separator 的位置都要进行分解。separator 不作为任何数组元素的部分返回。

```javascript
//.号元字符, 代表除了换行之外的所有单个字符
var pattern = /g..gle/;   //一个点.匹配一个任意的字符
var str = "goagle";
console.log(pattern.test(str));

//*号元字符, 配合其他字符使用, 允许其他字符出现任意多次
// 重复多次匹配, 可以出现任意次, 
var  pattern = /g.*gle/; //.* 匹配0到多个字符
var  str = "google" 
console.log(pattern.test(str)); 

// [ ] : 表示字符可以出现的范围
//[a-z]*表示任意0到多个a-z的字母
var pattern = /g[a-z]*gle/;
var str = "google";
console.log(pattern.test(str));

//非字符:  ^
var pattern = /g[^0-9]*gle/; //可以有任意多个非0-9的字符
var str = "google";
console.log(pattern.test(str)); 
			
//+ 表示至少出现1次
//[A-Z]+: 至少出现一个A-Z的字符
var pattern = /[a-z][A-Z]+/;
var str = "gooGle";
console.log(pattern.test(str)); 
			
//使用元符号匹配
//\w* :匹配任意多个数字字母下划线 , \w : 等价于[a-zA-Z0-9_] 
var pattern = /g\w*gle/;
var str = "gooA3gle";
console.log(pattern.test(str));

//\d 代表数字, 等价于 [0-9]
//\d* 表示任意多个数字
var pattern = /g\d*gle/;
var str = "g3243gle";
console.log(pattern.test(str)); 
			
//\D: 匹配非数字, 相当于[^0-9]
var pattern = /g\Dgle/;
var str = "ga3gle";
console.log(pattern.test(str)); 
			
//\D{7,}: 匹配至少7个非数字, 相当于[^0-9]{7,}
var pattern = /\D{7,}/;
var str = "g3243gle";
console.log(pattern.test(str)); 

/使用锚元字符
// /^ 匹配开始,从头开始匹配
// $/ 匹配结尾,从结尾开始匹配
var pattern = /^google$/;
var str = "google";
console.log(pattern.test(str));
			
// \s 匹配空格
var pattern = /goo\sgle/;
var str = "goo gle";
console.log(pattern.test(str));

//m 多行匹配
var str = "first second\nthird fourth\nfifth sixth";
var patt = /\w+ $/gm
console.log(str.match(patt));
```



​      