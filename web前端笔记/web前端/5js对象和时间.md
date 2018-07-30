# 对象Object

## 一  对 象

什么是对象，其实就是一种类型，即引用类型。而对象的值就是引用类型的实例。在
ECMAScript 中引用类型是一种数据结构，用于将数据和功能组织在一起。

## 二 对象的创建

Object类型 

 创建 Object 类型有两种。

​      一种是使用 new 运算符，另一种是字面量表示法

1. 使用new 运算符创建 Object 

   ```javascript
   varbox = new Object();        //new方式  
   box.name=‘张三’;     //创建属性字段    
   box.age= 18;  //创建属性字段
   new关键字可以省略
   var box= Object();       //省略了new关键字,不建议
   ```

2. 使用字面量方式创建Object

   ```javascript
   varbox = {               //字面量方式
         name :'张三',   //创建属性字段,最后加逗号
         age : 18,
     	  x:function(){
         	alert('x')
         }
   };
   ```

3. 属性字段也可以使用字符串形式

   ```javascript
    var box={ 
     'name': '张三',  //也可以用字符串形式
     'age': 28
      };
   ```

   ​

4. 使用字面量及传统赋值方式

   ```javascript
   varbox={};  //字面量方式声明空的对象
   box.name='张三';   //点符号给属性赋值
   box.age=18;  g
   ```

   ​

5. 两种属性输出方式

   ```javascript
   alert(box.age);    //点表示法输出 
   alert(box['age']);    //中括号表示法输出，注意引号
   ```

   ​

6. 给对象创建方法

   ```javascript
    varbox={ 
     //对象中添加方法(函数)run
     run: function() {        
             retrun “正在跑步..”;
     		}
    }
    alert(box.run()); //调用对象中的方法
   ```

   ​

7. 使用delete 删除对象属性 

   deletebox.name;     //删除属性

8. instanceof

   ```
   function a(){
   }
   x = new a()
   console.log(x instanceof a)
   ```

## 二 日期对象Date

#### (1)  Date对象代表日期

   Date

类型使用自UTC（CoordinatedUniversal Time，国际协调时间）1970年1月1日午夜（零时）开始经过的毫秒数来保存日期。Date类型保存的日期能够精确到1970年1月1日之前或之后的285616年。

##### 创建一个日期对象，使用 new运算符和Date构造方法(构造函数)即可。

#####   var d = new Date();

在调用Date构造方法而不传递参数的情况下，新建的对象自动获取当前的时间和日期。

##### 创建日期对象并指定时间

#####   var d = new Date("2015/08/22");

#####   var d = new Date(2016,04,13,14,34);

##### 【注】日期的格式可以是“2015/08/22”，“2015-08-22”，或1970年当前日期的毫秒数1443453475234


| alert(box.toDateString());       | 以特定的格式显示星期几、月、日和年                |
| -------------------------------- | -------------------------------- |
| alert(box.toTimeString());       | 以特定的格式显示时、分、秒和时区                 |
| alert(box.toLocaleDateString()); | 以特定地区格式显示年、月、日                   |
| alert(box.toLocaleTimeString()); | 以特定地区格式显示时、分、秒                   |
| alert(box.toUTCString());        | 以特定的格式显示完整的 UTC 日期: 年,月,日,时,分,秒。 |
| alert(box.toDateString());       | 以特定的格式显示星期几、月、日和年                |



#### (2) 日期对象Date

setDate() / getDate()      从Date对象中返回一个月中的某一天(1~31)

getDay()      从Date对象返回一周中的某一天(0~6)

set/ getMonth()      从Date对象中返回月份(0~11)

set/ getFullYear()  从Date对象以四位数返回年份

set/ getHours()               返回Date对象的小时(0~23)

set/ getMinutes()  返回Date对象的分钟(0~59)

set/ getSeconds()  返回Date对象的秒数(0~59)

set/ getMilliseconds()    返回Date对象的毫秒

set/ getTime()               返回1970年1月1日至今的毫秒数

getTimezoneOffset()      返回本地时间与格林尼治标准时间(GMT)的分钟差

#### 注意：

Ø月份是从0-11，所以取得的值要加1才是当前月份

Ø星期天是从0-6, 0代表星期天



## 三  定时器: setInterval（）函数

##### setInterval()方法可按照指定的周期（以毫秒计）来调用函数或计算表达式

##### setInterval()方法会不停地调用函数，直到clearInterval()被调用或窗口被关闭。由setInterval()返回的ID值可用作clearInterval()方法的参数。

##### 创建定时器

##### setInterval(code,millisec)

#####   code 是要调用的代码块或者函数

#####   millisec 是周期性执行代码块或函数的间隔，以毫秒计

//创建定时器timer,每隔1秒调用一次函数function

vartimer = setInterval( function(){},1000);

##### 关闭定时器

##### clearInterval(timer);



## 四 定时执行一次 setTimeout

##### setTimeout()方法可按照指定的毫秒来定时执行 来调用函数或计算表达式

##### 创建定时器

##### setTimeout(code,millisec)

##### code 是要调用的代码块或者函数

##### millisec 毫秒

//创建定时执行器timer,每隔1秒调用一次函数function

vartimer = setTimeout( function(){},1000);

##### 关闭定时器

##### clearTimeout(timer);



##### 



