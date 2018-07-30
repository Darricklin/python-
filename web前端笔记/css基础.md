## css基础

### 1.为文档添加样式的3种方法

~~~
1.行内样式，直接写在特定标签的style属性中；
2.嵌入样式，在head元素中嵌入<style type="text/css"></style>，将css规则放入<style>和</style>中；
<style type="text/css">
    选择器（即修饰对象）{
    对象的属性1: 属性值1;
    对象的属性2: 属性值2;}
3.链接样式，在<head>元素中使用外部的样式表，如：
<link href="1.css" rel="stylesheet" type="text/css" />引用的时候需要保持对应的id或者class与href文件中的设置的名称一致


友情提示：3种css样式的优先级：  行内样式 > 嵌入样式 > 链接样式
~~~

### 2.选择器(七种)

#### 2.1选择器


		元素/标签选择器
		 li{
				 	 color: red;
				 	 font-size: 28px;
				 	 font-family: "微软雅黑";
				 }
		id选择器 用#表示
		#menu{
					 width: 200px;
					 background: #ccc;
					 font-size: 14px;
					 font-family: "微软雅黑";
					 font: bold;
					
				}
		class选择器 用英文.表示
		.title{
					 letter-spacing: 5px;
					 white-space: nowrap;
					 text-decoration: underline;
					
				     }
		群组选择器
		h1,p,h2{
					color: red;
					font-family: "楷体";
					}


	     备注：群组选择器，其目的是为了能实现统一设定一些相同的属性，但是      每一个之间必须以英文的逗号隔开，
		包含选择器（父子选择器）
		<style type="text/css">
				div p{
					color:red;
					font-weight: bold;
				}
			</style>
	
	      提示：前一个标签与被包含标签 之间是有空格间隔的
		通配 选择器  
		*{
					color: red;
					font-size: 28px;
				}


​	
	       提示：以*开始起意思代表为所有，但是在开发过程中基本上不使用
		伪类选择器
		CSS的伪类选择器：用于向某些选择器添加特殊的效果 
	
	    <style type="text/css">
				a:link{
					color: red;
				}
				a:visited{
					color: green;
				}
				a:hover{
					color: blue;
				}
				a:active{
					color: gold;
				}
			</style>
	
	        提示：1）4种状态的意思
				未访问状态（a:link ）
				已访问状态（a:visited ）
				鼠标移上状态（a:hover ）
				激活选定状态（a:active ）
	
	        2）且一般是应用在a标签上的
		伪对象选择器
	         CSS伪对象选择器：用于向被选中元素的内容前面或者后面插入内容
	
	       :before     选择器在被选元素的内容前面插入内容。
	
	       :after        选择器在被选元素的内容后面插入内容。
	
	       注意：before 和after必须和content结合使用，即使没有内容插入也        要写content=' '


	            <style type="text/css">
	                .box{
	                    border: 1px solid #FF00FF;
	                }
	                .box:after{
	                    content: "没抓到一个人";
	                }
	                .box:before{
	                    content: "还好我已经让你们收起了手机";
	                }
	            </style>


​	
​	
#### 2.2选择器的权重

~~~

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<style type="text/css">
			/*#dv{
				color: red;
			}
			
			.box{
				color:blue;
			}
			
			div{
				color: gold;
			}*/
			
			/*为了减少在开发的过程中出现使用选择器权重的混乱，请尽量 使用包含选择器，然后在具体的选择器上进行设置*/
		  div .box{
		  	
		  	color:green;
		  }
		
		</style>
	</head>
	<body>
		<div>
			少侠
			<div id="dv" class="box">
                                          请收下你的香皂				
			</div>
			
		</div>
	</body>
</html>

权重：权重是指某一因素或指标相对于某一事物的重要程度，其不同于一般的比重，体现的不仅仅是某一因素或指标所占的百分比，强调的是因素或指标的相对重要程度，倾向于贡献度或重要性。通常，权重可通过划分多个层次指标进行判断和计算，常用的方法包括层次分析法、模糊法、模糊层次分析法和专家评价法等
简而言之：可以理解为是分量
权重记忆口诀。从0开始，一个行内样式+1000，一个id+100，一个属性选择器/class或者伪类+10，一个元素名，或者伪元素+1
例如：body #content .data img:hover
最终的权重值是0122；#content是一个id选择器加了100，.data是一个class类选择器加了10，：hover伪类选择器加了10， body和img是元素加了1 著作权归作者所有。
~~~



### 3.css属性

#### 3.1文本属性


	文字大小
		font-size
		单位
			px
			em   1em=16px
	文字颜色
		color
	文字字体
		font-family
	文字样式(粗细)
		font-weight
	文字倾斜
		font-style
	文字修饰
		text-decoration
	文字转换
		text-transform
	字间距
		letter-spacing
	单词间距
		word-spacing
	文字对齐
		text-align
			水平
		vertical-align
			不常用
		纵向居中
			通常使用line-height
#### 3.2列表属性

~~~

list-style-type：列表的样式

        <!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>CSS之列表属性</title>
            <style type="text/css">
                li{
                    width: 150px;
                    color: red;
                    font: "微软雅黑" 28px;	
                    list-style-type: square;
                    float: left;			
                }
            </style>
        </head>
        <body>
            <ul class="usty">
                <li>购物车</li>
                <li>帮助中心</li>
                <li>收藏</li>
                <li>登录</li>
                <li>注册</li>
            </ul>

        </body>
    </html>

list-style-image：列表导航点图片
	
        /*
                     * 使用这个属性的时候 要注意 
                     *  	图片尺寸是切好的
                     * 
                     *  图片格式
                     * 		png    常用的网络传输格式，开发中用的最多的格式 HTML常用，
                     * 				移动开发（Android，IOS，WP）,这个格式文件失真率低
                     * 				支持透明像素，相对来说占用空间比较多
                     * 		jpg    比较常用的图片格式，压缩性能比较高，不支持透明像素
                     * 				失真率比较高
                     * 		gif    动态图片，不透明的，占用空间比较高
                     * 		psd    Photoshop的原图，PS超级大，但是可以保留图片原始所有资料
                     * 		webp   Google定义的，它集合了png和jpg的优点
                     * 					支持透明像素，空间占用低
                     *  
                     * 
                     * 
                     */


    list-style-image: url(../img/dot_big.png);

list-style-postion：导航点的位置

        <!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title></title>
            <style type="text/css">
                li{
                    color: red;
                    border: 1px solid green;
                }

                .usty{

                    list-style-position: inside;
                    /*list-style-position: outside;*/
                    /**
                     * inside:导航点显示在li的里面
                     * outside:导航点显示在li的外面
                     */
                }
            </style>
        </head>
        <body>

            <h3>你都学过什么编程语言？</h3>
            <ul class="usty">
                <li>C</li>
                <li>C++</li>
                <li>C#</li>
                <li>java</li>
                <li>python</li>
            </ul>

        </body>
    </html>

~~~

#### 3.3背景

~~~
背景
	backgroud-color：背景颜色
	background：url(../img/bg.jpg):背景图
	background-repeat:平铺
	background-position：背景的位置
	 
	 
	 <!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<style type="text/css">
		
		 .box{
		 	 width: 400px;
		 	 height: 300px;
		 	 background-color: deepskyblue;
		 	 border: 2px solid red;
		 }
		
		
		#container{
			width: 700px;
			height: 200px;
			border: 3px dashed red;
			background-image: url(../img/star.jpg);
			background-repeat:repeat-x ;
		}
   /*计算机的坐标分部情况：从左向右，从上向下*/
	
	    #dv2{
	    	width: 700px;
	    	height: 200px;
	    	border: 3px dashed red;
	    	background-image: url(../img/star.jpg);
	    	background-repeat: no-repeat;
	    	background-position:center;
	    }
	
		
		</style>
	</head>
	<body>
		
		<div class="box"></div>
		<div id="container"></div>
		<br/>
		<br/>
		<div id="dv2"></div>
		
	</body>
</html>

~~~

#### 3.4浮动

	float
	float: left/right
	clear:left/right
	浮动元素的位置
	 <!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>浮动元素的位置</title>
			<style type="text/css">
				
				div{
					width: 200px;
					float: left;
				}
				.one{
					background: red;
					height: 200px;
				}
				.two{
					background: green;
					height: 100px;
				}
				.three{
					background: blue;
					height: 180px;
				}
				.four{
					background: gold;
					height: 300px;
				}
				
			</style>
		</head>
		<body>
			<div class="one"></div>
			<div class="two"></div>
			<div class="three"></div>
			<div class="four"></div>
		</body>
	</html>


	/*
				 * 		1.浮动元素位置：
				 * 			1）当元素都是浮动元素的时候，会按照浮动规则进行排序
				 * 			2）当屏幕宽度小于浮动元素的总宽度的时候，浮动的元素会进行重新排版
				 * 		2.排版规则
				 * 			还是按照浮动顺序进行排序，当宽度不能满足某一元素的时候，元素会进行换行
				 * 			换行的会按照宽度和高度进行择位排列（先去查找高度，找高度最低的那一个，会继续计算宽度
				 * 			是否能够容下）
				 * 		美中不足:
				 * 			会受上一个元素所影响，上一个元素的高度直接影响我们元素的y轴位置
				 * 
				 * */
	高度塌陷
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title></title>
			<style type="text/css">
				.one{
					width: 200px;
					height: 150px;
					background: gold;
					float: left;
				}
				
				.two{
					width: 300px;
					height: 300px;
					background: deeppink;
					float: left;
				}
				
				.three{
					width: 400px;
					height: 250px;
					background: deepskyblue;
					float: left;
				}
				
				#container{
					border: 2px solid red;
					
					/*overflow: hidden;*/
				}
				
				.four{
					width: 100px;
					height: 0px;
					background: black;
					clear: left;
				}


​				
			</style>
		</head>
		<body>
			    <div id="container">
				
				<div class="one"></div>
				
				<div class="two"></div>
				
				<div class="three"></div>
				<!--<div class="four"></div>-->
				</div>
				
		</body>
	</html>
	
				 1.高度塌陷:当一个容器内所有元素都浮动的时候，容器元素的高度计算会出现异常，高度不能正确计算会出现高度为0的情况
				 
				  2.修复高度塌陷
				 		① 在父级元素中使用 overflow属性，指定越界内容隐藏
				  		② 在父级元素内部最后面，添加一个清除浮动的元素，它的高度是0


	清除浮动
	 1.没有清除浮动的情况
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
	<title>未清除</title>
	<style type="text/css">
	  div{
	  	color:#fff;
	  	font:bold 22px 黑体;
	  	}


	  #div1{
	  width:150px;
	  height:100px;
	  background:#ccc;
	  float:right;
	  }


	  #div2{
	  	width:150px;
	  	height:150px;
	  	background:#33FF33; 
	  	float:right;
	  	}  


	  #div3{
	  	width:400px;
	  	height:200px;
	  	background:#3cc;
	  	float:right;
	  	 } 
	
	</style>
	</head>
	<body>
	<div id="div1">第1块</div>
	  <div id="div2">第2块</div>
	  <div id="div3">第3块</div>
	</body>
	</html>


​	
​	
​	
	2.用clear清除浮动的情况
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
	<title>设置clear属性</title>
	<style type="text/css">
	  div{
	  	color:#fff;
	  	font:bold 22px 黑体;
	  	}
	  	
	  #div1{
	  	width:150px;
	  	height:100px;
	  	background:#ccc;
	  	float:right;
	  	}
	  	
	  #div2{
	  	width:150px;
	  	height:150px;
	  	background:#33FF33; 
	  	float:right;
	  	}  
	  	
	  #div3{
	  	width:400px;
	  	height:200px;
	  	background:#3cc;
	  	clear:right;
	  	}  
	</style>
	</head>
	<body>
	<div id="div1">第1块</div>
	<div id="div2">第2块</div>
	<div id="div3">第3块</div>
	</body>
	</html>


#### 3.5边框

~~~
边框
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<style type="text/css">
			.box{
				width: 200px;
				height: 200px;
				border-width: 2px 10px 5px 100px;
				border-color: red green blue yellow;
				border-style: solid;
			}
			
			.right_box{
				width: 300px;
				height: 300px;
				border-right-width: 2px;
				border-right-color: darkred;
				border-right-style: dotted;
			}
		</style>
	</head>
	<body>
		<div class="box"></div>
		<br />
		<br />
		<div class="right_box"></div>
	</body>
</html>
时钟原则
* 在CSS中作用在四个方向上的属性，指定值的时候是 1-4个
* 这个时候它们遵循时钟原则
border-width:2px 5px 10px 100px :一次设定四个方向的边框的宽度
border-right-width:单独的设定右边的边框的宽度
border-color:red green blue gold:一次设定四个方向的边框的颜色
border-right-width:单独的设定右边的边框的宽度
border-style:solid：设定边框的样式为实线
border-right-style:dotted：单独的设定右边框的样式为“点线”
~~~

#### 3.6盒子模型

~~~
 1.CSS盒子模型：网页设计中常听的属性名：内容(content)、内边距(padding)、边框(border)、外边距(margin)， CSS盒子模式都具备这些属性。
这些属性我们可以用日常生活中的常见事物——盒子作一个比喻来理解，所以叫它盒子模式。
可以简单的理解为：CSS盒子模型就是在网页设计中经常用到的CSS技术所使用的一种思维模型

2.为什么需要盒子属性
						1）盒子模型是网页布局的基础
						2）盒子属性是盒子模型的关键属性



3.盒子模型的属性：
                         外边距（margin）、
						 边框（border）、
						 内边距/填充（padding）、
						 内容（content）

4.各属性又分为四个方向
               margin属性的四个方向
						margin-top
						margin-right
						margin-bottom
						margin-left
 例如：
					margin：1px，2px，3px，4px;
					margin：1px，2px;
					margin：0px auto ;
					margin-left:1px;


4.元素的宽高及实际占位
盒子高度 = height属性 + 上下填充高度 + 上下边框高度
盒子宽度 = width属性 + 左右填充宽度 + 左右边框宽度


5.使用盒子属性实现页面布局
例如：实现贵美logo图片的布局：示例代码可以参考ppt


6.使用盒子属性实现DIV+CSS布局
例如：实现简单的贵美商城注册页面的布局：示例代码可以参考ppt



~~~

