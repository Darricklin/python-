## html基础

### 1.命名和书写规范

~~~
编程中命名规范：
                     1）不要使用关键字，保留字：因为会产生二义性
                     2）不要随便的写：例如：a   aa   aaa
                     3 ) 尽量避免中文：转码容易出错
                     4）尽可能的以字母，下划线，$开头
                     5）尽可能的安照驼峰规范
原则：见名知意，尽可能的规范  假正经
                               

编程书写规范：
                  因为html的兼容性比较强，但是这并不是意味着我们可以随便写，反之我们更要严格规范要求自己
                 例如:1).html与.htm虽说效果一样，但是在引擎渲染的时候还是默认先找.html
                       2）<H1>虽然效果能出来，但是在不同浏览器的时候也是会有差异的</h1>
~~~

### 2.网页的结构

~~~
2.网页的基本结构：
                      <!DOCTYPE html>：标识出当前文件是html5,其作用是告诉浏览器不要解释错误，要严格按照W3C标准模式进行解析
                       备注：W3C是一个国际标准组织
                       网页的基本结构：
                                             头： <head>
                                             主体：<body>
~~~

### 3.网页运行的原理

~~~
3.  网页运行的原理：
                     html文件--->浏览器解析（Webkit渲染引擎）--->在页面上呈现效果   
~~~

### 4.标签分类

~~~
直接打开标签就闭合了
	<xxx />
标签是成对的
	开标签 <xxx>
	闭标签</xxx>
单标签
	直接打开标签就闭合了
		<xxx />
双标签
	标签是成对的
		开标签 <xxx>
		闭标签</xxx>
~~~

### 5.常用的标签*****

~~~
<H1>...</H1>:标题标签
<p></p>:段落标签
<hr/>:水平线标签
<ol><li></li></ol>：有序列表标签
<ul><li></li></ul>:无序列表标签
<dl><dt></dt><dd></dd></dl>:描述标签
<div></div>:分区标签
<img/>：图片标签
<span>:范围标签
<br/>:换行标签
<table><tr><td></td></tr></table>:表格   tr表示行td表示列                 colspan:属性表示跨多少列
          rowspan:属性表示跨多少行
          table的高级用法（基本没什么用）
		       thead：页眉
		       tbody:主体
		       tfoot：页脚 
单行文本框：<input   type="text" />
密码框:<input   type="password"/>
文本域/多行文本框: <textarea name="" rows="" cols="">
单选按钮:<input  type="radio"/>
复选框:<input type="checkbox" />
下拉列表: <select name="">
    	<option value=""></option>
    </select>
提交按钮:<input    type="submit"/>
重置标签：<input type=reset""/>
普通按钮：<input   type="button"/>
隐藏域：<input    type="hidden"/>
emial:<input type="email" />
日期:<input type="date"/>
周：<input type="week" />
月份:<input type="month" />
时间：<input type="time" />
日期+时间:<input type="datetime" />
本地日期时间:<input type="datetime-local" />
<form action="表单提交地址" method="提交方法">
   … 文本框、按钮等表单元素… 
    </form>
    表单提交地址：指定提交后，由服务器上哪个处理程序处理
    提交方法：指定向服务器提交的方法，一般为post或get方法, post方法     比较安全，但是get可以携带参数进行传递且参数大小不能超过2K
    扩展知识点：post和get的区别
    1. get是从服务器上获取数据，post是向服务器传送数据。
    2. get是把参数数据队列加到提交表单的action属性所指的URL中，在       URL中可以看到。post是通过HTTP post机制，用户看不到这个过程 。
    3. get传送的数据量较小，不能大于2KB。post传送的数据量较大，一般     被默认为不受限制。
    4. get安全性非常低，post安全性较高。但是执行效率却比Post方法       好。
    例如：                   http://www.baidu.com/image/name=wyh&pass=123321&keywords=hhd
<a>:超级链接
	页面之间的链接 ：<a href="other.html">另外一个页面</a>
    锚链接：<a href="#star">[明星专区]</a>
          <a name="star"><img src="images/adv_2.jpg" alt="明星专区"                    title="明星专区" /></a>
           不同页面之间的锚链接：明星体验：<a href="anchor.html#star">明星专区             </a>  

	功能性链接：<a href="mailto:guimeiWebMater@gmgw.com">站长信箱</a>
	target属性：target:是<a>标签中的一个属性，其作用是标识出打开的目标文档/网页              的方式
             在新窗口中显示：_blank
             在自身窗口中显示：_self
             在上级窗口显示：_top
             在父窗口显示：_parent 
             framename：	在指定的框架中打开被链接文档。
	         超级链接标签的应用功能      
~~~

