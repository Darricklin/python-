## Jquery

### 1.jquery的特点***

~~~
1.快速获取文档元素
jQuery的选择机制构建于Css的选择器，它提供了快速查询DOM文档中元素的能力，而且大大强化了JavaScript中获取页面元素的方式。

2.提供漂亮的页面动态效果
jQuery中内置了一系列的动画效果，可以开发出非常漂亮的网页，许多网站都使用jQuery的内置的效果，比如淡入淡出、元素移除等动态特效。

3.创建AJAX无刷新网页
AJAX是异步的JavaScript和ML的简称，可以开发出非常灵敏无刷新的网页，特别是开发服务器端网页时，比如PHP网站，需要往返地与服务器通信，如果不使用AJAX，每次数据更新不得不重新刷新网页，而使用AJAX特效后，可以对页面进行局部刷新，提供动态的效果。

4.提供对JavaScript语言的增强
jQuery提供了对基本JavaScript结构的增强，比如元素迭代和数组处理等操作。

5.增强的事件处理
jQuery提供了各种页面事件，它可以避免程序员在HTML中添加太多事件处理代码，最重要的是，它的事件处理器消除了各种浏览器兼容性问题。

6.更改网页内容
jQuery可以修改网页中的内容，比如更改网页的文本、插入或者翻转网页图像，jQuery简化了原本使用JavaScript代码需要处理的方式
~~~

### 2.使用方法***

~~~
官网：http://jquery.com/download/
1.首先是下载相关的资源
2.加入到项目中
3.在页面上引入jqeury.js文件：
4.在页面的相应位置上开始使用
~~~

### 3.基础语法

#### 3.1jquery选择器******

~~~
元素选择器**********************************
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Jquery之元素选择器</title>
		<script src="../js/jquery.js"></script>
		<script type="text/javascript">
			function elementSelector(){
               alert("这是元素选择器")
				$('p').hide()
			}
			
		</script>
			
	</head>
	<body>
		<p>Hello World:Jquery</p>
		<input type="button" value="元素选择器" onclick="elementSelector()" />
	</body>
</html>


小结：1）jquery是以$开头的
         2）hide():隐藏HTML中的元素
         3）jquery代码可以和js代码混合使用
id 选择器**********************************
 <!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Jquery之元素选择器</title>
		<script src="../js/jquery.js"></script>
		<script type="text/javascript">
			function elementSelector(){
               alert("这是id选择器")
				$('#p1').hide()
			}
			
		</script>
			
	</head>
	<body>
		<p id="p1">Hello World:Jquery</p>
		<input type="button" value="id选择器" onclick="elementSelector()" />
	</body>
</html>
class 选择器**********************************
 <!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Jquery之元素选择器</title>
		<script src="../js/jquery.js"></script>
		<script type="text/javascript">
			function elementSelector(){
               alert("class选择器")
				$('.pp').hide()
			}
			
		</script>
			
	</head>
	<body>
		<p class="pp">Hello World:Jquery</p>
		<input type="button" value="class选择器" onclick="elementSelector()" />
	</body>
</html>
~~~

#### 3.2jQuery 事件方法***

	dblclick()********************************
	dblclick()
	当双击元素时，会发生 dblclick 事件。
	dblclick() 方法触发 dblclick 事件，或规定当发生 dblclick 事件时运行的函数：
	实例
	mouseenter()  mousedown()  mouseup()********************************
	mouseleave()：当鼠标指针离开元素时，会发生 mouseleave 事件
	例如：
	$("#p1").mouseleave(function(){
	    alert("再见，您的鼠标离开了该段落。");
	});


	mousedown()：当鼠标指针移动到元素上方，并按下鼠标按键时，会发生 mousedown 事件
	例如：
	$("#p1").mousedown(function(){
	    alert("鼠标在该段落上按下！");
	});


	mouseup()：当在元素上松开鼠标按钮时，会发生 mouseup 事件
	例如：
	$("#p1").mouseup(function(){
	    alert("鼠标在段落上松开。");
	});
	hover()********************************
	hover()方法用于模拟光标悬停事件。
	当鼠标移动到元素上时，会触发指定的第一个函数(mouseenter);当鼠标移出这个元素时，会触发指定的第二个函数(mouseleave)。
	实例
	$("#p1").hover(
	    function(){
	        alert("你进入了 p1!");
	    },
	    function(){
	        alert("拜拜! 现在你离开了 p1!");
	    }
	);
### 4.jquery特效****

	隐藏和显示*******************************************
	通过 jQuery，您可以使用 hide() 和 show() 方法来隐藏和显示 HTML 元素：


	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>dblclick</title>
			<script src="../js/jquery.js"></script>
			<script type="text/javascript">
			function hiddenEle(){
					
					var box=$("#box");
						box.hide();
				}
			function  showEle(){
				
				var box=$("#box");
						box.show();
			}
			</script>
				
		</head>
		<body >
			<div id="box" >
				<p>上海滩</p>
				<p>大上海。。。。百乐门。。。。</p>
			</div>
			<input type="button" id="btn" value="隐藏" onclick="hiddenEle()" />
			<input type="button" id="btn" value="显示" onclick="showEle()" />
	
		</body>
	</html>
	淡入淡出*******************************************
	 1）淡入：fadeIn()


	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<script   src="../js/jquery.js">
	</script>
	<script>
	$(document).ready(function(){
	  $("button").click(function(){
	    $("#div1").fadeIn();
	    $("#div2").fadeIn("slow");
	    $("#div3").fadeIn(3000);
	  });
	});
	</script>
	</head>
	
	<body>
	<p>以下实例演示了 fadeIn() 使用了不同参数的效果。</p>
	<button>点击淡入 div 元素。</button>
	<br><br>
	<div id="div1" style="width:80px;height:80px;display:none;background-color:red;"></div><br>
	<div id="div2" style="width:80px;height:80px;display:none;background-color:green;"></div><br>
	<div id="div3" style="width:80px;height:80px;display:none;background-color:blue;"></div>
	
	</body>
	</html>


	2）淡出：fadeOut() 
	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<script  src="../js/jquery.js">
	</script>
	<script>
	$(document).ready(function(){
	  $("button").click(function(){
	    $("#div1").fadeOut();
	    $("#div2").fadeOut("slow");
	    $("#div3").fadeOut(3000);
	  });
	});
	</script>
	</head>
	
	<body>
	<p>以下实例演示了 fadeOut() 使用了不同参数的效果。</p>
	<button>点击淡出 div 元素。</button>
	<br><br>
	<div id="div1" style="width:80px;height:80px;background-color:red;"></div><br>
	<div id="div2" style="width:80px;height:80px;background-color:green;"></div><br>
	<div id="div3" style="width:80px;height:80px;background-color:blue;"></div>
	
	</body>
	</html>


	 3）fadeToggle() 方法可以在 fadeIn() 与 fadeOut() 方法之间进行切换。
	如果元素已淡出，则 fadeToggle() 会向元素添加淡入效果。
	如果元素已淡入，则 fadeToggle() 会向元素添加淡出效果。
	
	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<title>点击淡入/淡出</title>
	<script src="../js/jquery.js">
	</script>
	<script>
	$(document).ready(function(){
		$("button").click(function(){
			$("#div1").fadeToggle();
			$("#div2").fadeToggle("slow");
			$("#div3").fadeToggle(3000);
		});
	});
	</script>
	</head>
	<body>
	
	<p>实例演示了 fadeToggle() 使用了不同的 speed(速度) 参数。</p>
	<button>点击淡入/淡出</button>
	<br><br>
	<div id="div1" style="width:80px;height:80px;background-color:red;"></div>
	<br>
	<div id="div2" style="width:80px;height:80px;background-color:green;"></div>
	<br>
	<div id="div3" style="width:80px;height:80px;background-color:blue;"></div>
	
	</body>
	</html>
	
	4）fadeTo() 方法允许渐变为给定的不透明度（值介于 0 与 1 之间）
	语法:
	$(selector).fadeTo(speed,opacity,callback);
	必需的 speed 参数规定效果的时长。它可以取以下值："slow"、"fast" 或毫秒。
	fadeTo() 方法中必需的 opacity 参数将淡入淡出效果设置为给定的不透明度（值介于 0 与 1 之间）。
	可选的 callback 参数是该函数完成后所执行的函数名称
	
	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<script  src="../js/jquery.js">
	</script>
	<script>
	$(document).ready(function(){
	  $("button").click(function(){
	    $("#div1").fadeTo("slow",0.15,function(){
	    	alert("这个是第三个参数的效果")
	    });
	    $("#div2").fadeTo("slow",0.4);
	    $("#div3").fadeTo("slow",0.7);
	  });
	});
	</script>
	</head>
	
	<body>
	<p>演示 fadeTo() 使用不同参数</p>
	<button>点我让颜色变淡</button>
	<br><br>
	<div id="div1" style="width:80px;height:80px;background-color:red;"></div><br>
	<div id="div2" style="width:80px;height:80px;background-color:green;"></div><br>
	<div id="div3" style="width:80px;height:80px;background-color:blue;"></div>
	
	</body>
	</html>
	
	滑动*******************************************
	1）slideDown() 方法用于向下滑动元素
	$(selector).slideDown(speed,callback);
	可选的 speed 参数规定效果的时长。它可以取以下值："slow"、"fast" 或毫秒。
	可选的 callback 参数是滑动完成后所执行的函数名称
	
	例如：
	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<script  src="../js/jquery.js">
	</script>
	<script> 
	$(document).ready(function(){
	  $("#flip").click(function(){
	    $("#panel").slideDown("slow",function(){
	         alert("滑动展开了div,要执行的第二个参数")  
	         $("#flip").css("color","red")
	    });
	  });
	});
	</script>
	 
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
	 
	<div id="flip">点我滑下面板</div>
	<div id="panel">Hello world!</div>
	
	</body>
	</html>
	
	2）slideUp() 方法用于向上滑动元素。
	语法:
	$(selector).slideUp(speed,callback);
	可选的 speed 参数规定效果的时长。它可以取以下值："slow"、"fast" 或毫秒。
	可选的 callback 参数是滑动完成后所执行的函数名称。
	例如：
	
	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<script  src="../js/jquery.js">
	</script>
	<script> 
	$(document).ready(function(){
	  $("#flip").click(function(){
	    $("#panel").slideUp("slow",function(){
	    	 $("#flip").css("color","blue")
	    });
	  });
	});
	</script>
	 
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
	}
	</style>
	</head>
	<body>
	 
	<div id="flip">点我拉起面板</div>
	<div id="panel">Hello world!</div>
	
	</body>
	</html>
	
	3）slideToggle() 方法可以在 slideDown() 与 slideUp() 方法之间进行切换。
	如果元素向下滑动，则 slideToggle() 可向上滑动它们。
	如果元素向上滑动，则 slideToggle() 可向下滑动它们。
	$(selector).slideToggle(speed,callback);
	可选的 speed 参数规定效果的时长。它可以取以下值："slow"、"fast" 或毫秒。
	可选的 callback 参数是滑动完成后所执行的函数名称。
	
	例如：
	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<script  src="../js/jquery.js">
	</script>
	<script type="text/javascript"> 
	$(document).ready(function(){
	  $("#flip").click(function(){
	    $("#panel").slideToggle("slow",function(){
	    	  alert("执行了")
	    	 var flipValue=$("#flip").text()
	    	 alert("flipValue:"+flipValue)
	    	 if(flipValue=="点我隐藏面板")
	    	 {
	    	 	$("#flip").css("color","red")
	    	 	$("#flip").text("点我显示面板")
	    	 }
	    	 else
	    	 {
	    	 	$("#flip").css("color","blue")
	    	 	$("#flip").text("点我隐藏面板")
	    	 	
	    	 }
	    	
	    });
	  });
	});
	</script>
	 
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
	 
	<div id="flip">点我隐藏面板</div>
	<div id="panel">Hello world!</div>
	
	</body>
	</html>
	动画*******************************************
	1） animate() 方法允许您创建自定义的动画
	语法：animate({params},speed,callback);
	参数简介：{params}：是一个必选参数，定义了形成动画的CSS属性，类型为字典类型
	               speed：可选的参数其规定效果的时长也就是滑动的速度。它可以取值为："slow"、"fast" 或毫秒
	               callback： 可选的参数是动画完成后所执行的匿名函数
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title></title>
			<script src="../js/jquery.js"></script>
			<script type="text/javascript">
				function doanimate(){
					
					$("div").animate({left:'250px'},"slow",function(){
						alert("滑动这个动画效果执行之后可以加载一个匿名函数")
						$("p").css("color","red")
					})
				}
			</script>
		</head>
		<body>
			<input type="button" value="开始动画" onclick="doanimate()" />
			<p>默认情况下，所有的 HTML 元素有一个静态的位置，且是不可移动的。 
	如果需要改变为，我们需要将元素的 position 属性设置为 relative, fixed, 或 absolute!</p>
	<div style="background:#98bf21;height:100px;width:100px;position:absolute;">
	</div>
		</body>
	</html>


	2）animate() - 操作多个属性
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title></title>
			<script src="../js/jquery.js"></script>
			<script type="text/javascript">
				function doanimateForManyCss(){
					
					$("div").animate({left:'250px',top:'300px',width:'300px'},"slow",function(){
						alert("滑动这个动画效果执行之后可以加载一个匿名函数")
						$("p").css("color","red")
					})
				}
			</script>
		</head>
		<body>
			<input type="button" value="开始动画" onclick="doanimateForManyCss()" />
			<p>默认情况下，所有的 HTML 元素有一个静态的位置，且是不可移动的。 
	如果需要改变为，我们需要将元素的 position 属性设置为 relative, fixed, 或 absolute!</p>
	<div style="background:#98bf21;height:100px;width:100px;position:absolute;">
	</div>
		</body>
	</html>


​	
	小结：如果需要生成颜色动画，您需要从http://jquery.com/download/ 下载 颜色动画 插件

	3）jQuery animate() - 使用预定义的值(就是已经是写好的)
	把属性的动画值设置为 "show"、"hide" 或 "toggle"
	示例代码：
	$("div").animate({
	            width:"hide",//左右隐藏
	            height:"hide"//上下隐藏，二者作用下就是缩小隐藏
	            height:"toggle"//上下隐藏或者展开
	},
	
	"slow",function(){
						alert("滑动这个动画效果执行之后可以加载一个匿名函数")
						$("p").css("color","red")
					})


​	
	4）jQuery 提供针对动画的队列功能（按照顺序进行加载）。
	这意味着如果您在彼此之后编写多个 animate() 调用，jQuery 会创建包含这些方法调用的"内部"队列。然后逐一运行这些 animate 调用。
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title></title>
			<script src="../js/jquery.js"></script>
			<script type="text/javascript">
				function doanimateForManyCssByQueene(){


					$("div").animate({left:"300px"},"slow")
					$("div").animate({top:"300px"},"slow")
					$("div").animate({width:'300px'},"slow")


				}
			</script>
		</head>
		<body>
			<input type="button" value="开始动画" onclick="doanimateForManyCssByQueene()" />
			<p>默认情况下，所有的 HTML 元素有一个静态的位置，且是不可移动的。 
	如果需要改变为，我们需要将元素的 position 属性设置为 relative, fixed, 或 absolute!</p>
	<div style="background:#98bf21;height:100px;width:100px;position:absolute;">
	</div>
		</body>
	</html>


	5）stop() 方法用于停止动画或效果，在它们完成之前。
	语法：stop(stopAll,goToEnd);
	参数简介：
	可选的 stopAll 参数规定是否应该清除动画队列。默认是 false，即仅停止活动的动画，允许任何排入队列的动画向后执行。
	可选的 goToEnd 参数规定是否立即完成当前动画。默认是 false。
	示例代码：
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title></title>
			<style type="text/css"> 
				#pane,#flip
				{
					padding:5px;
					text-align:center;
					background-color:#e5eecc;
					border:solid 1px #c3c3c3;
				}
				#pane
				{
					padding:50px;
					display:none;
				}
	</style>
			<script src="../js/jquery.js"></script>
	        <script type="text/javascript">


	        	$(document).ready(function(){

	        		$("#flip").click(function (){

	        			 $("#pane").slideDown(5000);//5000毫秒就是5秒
	        		})
	        	})
	        	
	        	function stopPush(){
	        		
	        		$("#pane").stop()
	        	}
	        	
	        </script>
		</head>
		<body >
			<input type="button" value="停止滑动"  onclick="stopPush()"/>
			<div id="flip">点我向下滑动面板</div>
	        <div id="pane">Hello world!</div>
		</body>
	</html>
### 5.Jquery的HTML(DOM)操作*****

	5.1获取内容和属性***************************************
	 jQuery 中非常重要的部分，就是操作 DOM 的能力
	1）获得内容 - text()、html() 以及 val()
	text() - 设置或返回所选元素的文本内容
	html() - 设置或返回所选元素的内容（包括 HTML 标记）
	val() - 设置或返回表单字段的值


	例如：通过 jQuery text() 和 html() 方法来获得内容
	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<title>通过 jQuery text() 和 html() 方法来获得内容</title>
	<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js">
	</script>
	<script type="text/javascript">
	$(document).ready(function(){
		
	$("#btn1").click(function (){
		
		alert($("#test").text())
		
	})
	$("#btn2").click(function (){
		
		alert($("#test").html())
		
	})


	})
	</script>
	</head>
	<body>
		
	<p id="test">这是段落中的 <b>粗体</b> 文本。</p>
	<input id="btn1" type="button" value="点击--显示文本内容"  />
	<input id="btn2" type="button" value="点击--显示 HTML"  />
	
	</body>
	</html>


​	
​	
	例如：通过 jQuery val() 方法获得输入字段的值
	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<title>通过 jQuery val() 方法获得输入字段的值</title>
	<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js">
	</script>
	<script type="text/javascript">
	$(document).ready(function(){
		
	$("#btn1").click(function (){
		
		alert("通过val()获取的数据："+$("#test").val())
		
	})


​		
	})
	</script>
	</head>
	<body>
		
	<p>名称: <input type="text" id="test" value="测试用的数据"></p>
	<input id="btn1" type="button" value="点击--val()"  />
	</body>
	</html>
	
	2）attr():获取属性的值
	例如:通过 jQuery attr() 方法获得属性的值
	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<title>通过 jQuery attr() 方法获得属性的值</title>
	<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js">
	</script>
	<script type="text/javascript">
	$(document).ready(function(){
		
	$("#btn1").click(function (){
		
		alert("显示 class 属性的值："+$("#p1").attr("class"))
		
	})


​		
	})
	</script>
	</head>
	<body>
		
	<p id="p1" class="sy">这个是段落的内容</p>
	<input id="btn1" type="button" value="点击--显示 class 属性的值"  />
	</body>
	</html>
	5.2设置内容和属性的值***************************************
	 设置内容 - text()、html() 以及 val()
	
	text() - 设置或返回所选元素的文本内容
	html() - 设置或返回所选元素的内容（包括 HTML 标记）
	val() - 设置或返回表单字段的值
	
	1)通过text()、html()、val() 设置元素的值
	例如:通过text()、html()、val() 设置元素的值
	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<title>通过text()、html()、val() 设置元素的值</title>
	<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js">
	</script>
	<script>
	$(document).ready(function(){
	  $("#btn1").click(function(){
	    $("#test1").text("Hello world!");
	  });
	  $("#btn2").click(function(){
	    $("#test2").html("<b>Hello world!</b>");
	  });
	  $("#btn3").click(function(){
	    $("#test3").val("新的值");
	  });
	});
	</script>
	</head>
	
	<body>
	<p id="test1">这是一个段落。</p>
	<p id="test2">这是另外一个段落。</p>
	<p>输入框: <input type="text" id="test3" value="原有的内容"></p>
	<input type="button" id="btn1" value="设置文本"/>
	<input type="button" id="btn2" value="设置 HTML" />
	<input type="button" id="btn3" value="设置值" />
	</body>
	</html>


	2)text()、html() 以及 val() 的回调函数

	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<title>text()、html() 以及 val() 的回调函数</title>
	<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js">
	</script>
	<script>
	$(document).ready(function(){
	  $("#btn1").click(function(){
	    $("#test1").text(function(){
	    	alert("执行了回调函数")
	    });
	  });
	  
	  $("#btn2").click(function(){
	    $("#test2").html(function (){
	    	$("#test2").css("color","red")
	    	
	    });
	    
	  });
	  $("#btn3").click(function(){
	    $("#test3").val(function (){
	    	var a=12
	    	var b=23
	    	alert(a+b)
	    	
	    });
	  });
	});
	</script>
	</head>
	
	<body>
	<p id="test1">这是一个段落。</p>
	<p id="test2">这是另外一个段落。</p>
	<p>输入框: <input type="text" id="test3" value="原有的内容"></p>
	<input type="button" id="btn1" value="设置文本">
	<input type="button" id="btn2" value="设置 HTML" />
	<input type="button" id="btn3" value="设置值" />
	</body>
	</html>
	
	3）设置属性 - attr()
	例如：通过 jQuery attr() 方法设置属性的值
	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<title>通过 jQuery attr() 方法设置属性的值</title>
	<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js">
	</script>
	<script type="text/javascript">
	$(document).ready(function(){
		
	$("#btn1").click(function (){
		$("#demo").attr("href","http://www.youku.com")
		
	})


​		
	})
	</script>
	</head>
	<body>
		
	<p  ><a href="//www.baidu.com" id="demo">百度</a></p>
	<input id="btn1" type="button" value="点击修改 href 值"  />
	</body>
	</html>
	5.3jQuery - 添加元素***************************************
	1）追加元素 
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>jQuery - 添加元素</title>
			<script src="../js/jquery.js"></script>
			<script type="text/javascript">
				$(document).ready(function (){
	
	               $("#btn1").click(function (){
						$("p").append("追加文本")
					})
	               
	               $("#btn2").click(function (){
	               	       
	               	$("p").append("<li>追加列表项</li>")
	               })


				})

​				
​				
			</script>
		</head>
		<body>
			<p>原有段落的内容</p>
			
			<input id="btn1" type="button" value="追加文本" />
			<input id="btn2" type="button" value="追加列表项" />
		</body>
	</html>


​	
	2）jQuery prepend() 方法在被选元素的开头插入内容：文本内容，元素
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>jQuery - 添加元素</title>
			<script src="../js/jquery.js"></script>
			<script type="text/javascript">
				$(document).ready(function (){
	
	               $("#btn1").click(function (){
	               	
						$("p").prepend("在文本的开头添加了内容: ")
					})
	               
	               $("#btn2").click(function (){
	               	       
	               	$("ol").prepend("<li>在开头添加列表项</li>")
	               })


				})

			</script>
		</head>
		<body>
			<p>原有段落的内容</p>
			<ol>
				<li>第一个的内容</li>
				<li>第一个的内容</li>
				<li>第一个的内容</li>
			</ol>
			<input id="btn1" type="button" value="追加文本" />
			<input id="btn2" type="button" value="追加列表项" />
		</body>
	</html>


​	
	3）通过 append() 和 prepend() 方法添加若干(>=0个)新元素
	    例如：
	            var txt1=“<p>添加的内容：</p>”
	            $("p").prepend(txt1,txt1,txt1)
	
	小结：append()和prepend():可以传入无数的参数


​	
​	
	4）jQuery after() 方法在被选元素之后插入内容。
	     jQuery before() 方法在被选元素之前插入内容。
	
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>jQuery - 添加元素</title>
			<script src="../js/jquery.js"></script>
			<script type="text/javascript">
				$(document).ready(function (){
	
	               $("#btn1").click(function (){
	               	   var txt1="<p>之前的内容：   </p>"
						$("img").before(txt1)
					})
	               
	                $("#btn2").click(function (){
	               	   var txt2="<p>之前的内容：   </p>"
						$("img").after(txt2)
					})
					
				})


​				
			</script>
		</head>
		<body>
	             <img src="../img/1.jpg" />		
			<input id="btn1" type="button" value="之前插入" />
			<input id="btn2" type="button" value="之后插入" />
		</body>
	</html>
	5.4jQuery - 删除元素***************************************
	 1）：remove() 方法删除被选元素及其子元素
	
	示例代码：
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>Jquery操作DOM之删除元素</title>
			<script src="../js/jquery.js"></script>
			<script type="text/javascript">
				function deleteElement(){
					
					$("#dv").remove()
					
				}
			</script>
		</head>
		<body>
			<div id="dv">
				<p>第一个段落的内容</p>
				<p>第二个段落的内容</p>
			</div>
			<input type="button" value="Jquery删除元素"  onclick="deleteElement()"/>
		</body>
	</html>
	
	2） empty() 方法删除被选元素的子元素。
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title></title>
			<script src="../js/jquery.js"></script>
			<script type="text/javascript">
				function deleteElement(){
					
				  $("#dv").empty()
					
				}
			</script>
		</head>
		<body>
			<div id="dv" style="width: 500px;height: 300px; background-color: burlywood;">
				<p>第一个段落的内容</p>
				<p>第二个段落的内容</p>
			</div>
			<input type="button" value="Jquery删除元素"  onclick="deleteElement()"/>
		</body>
	</html>


	3）过滤被删除的元素
	 remove() 方法也可接受一个参数，允许您对被删元素进行过滤。
	该参数可以是任何 jQuery 选择器的语法
	示例代码：
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title></title>
			<script src="../js/jquery.js"></script>
			<script type="text/javascript">
				function deleteElement(){
				  $("p").remove(".sta")
				}
			</script>
		</head>
		<body>
			<div id="dv" style="width: 500px;height: 300px; background-color: burlywood;">
				<p >第一个段落的内容</p>
				<p class="sta">第二个段落的内容</p>
			</div>
			<input type="button" value="移除所有元素class=sta的元素"  onclick="deleteElement()"/>
		</body>
	</html>
	
	5.5jQuery - 获取并设置 CSS 类***************************************
	
	1）addClass() - 向被选元素添加一个或多个样式/class
	
	示例代码：
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title></title>
			<style type="text/css">
				.blue{color: #0000FF;}
				.green{color: green;}
				.import{
					 color: red;
					 font-size: 28px;
					 font-family: "微软雅黑";
				}
			</style>
			<script src="../js/jquery.js"></script>
			<script type="text/javascript">
				function addCssForEnement(){
				  $("h1").addClass("blue")
				  $("h2").addClass("blue")
				  $("div").addClass("green")
				  $("p").addClass("import")
				}
			</script>
		</head>
		<body>
			<h1>标题 1</h1>
			<h2>标题 2</h2>
			<p>这是一个段落。</p>
			<div>这是一些重要的文本!</div>
			<input type="button" value="为元素添加 class"  onclick="addCssForEnement()"/>
		</body>
	</html>


​	
​	
​	
	2）removeClass() - 从被选元素删除一个或多个类
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title></title>
			<style type="text/css">
				.blue{color: #0000FF;}
				.green{color: green;}
				.import{
					 color: red;
					 font-size: 28px;
					 font-family: "微软雅黑";
				}
			</style>
			<script src="../js/jquery.js"></script>
			<script type="text/javascript">
				function removeCssForEnement(){
				  /*$("h1").removeClass("blue")
				  $("h2").removeClass("blue")
				  $("div").removeClass("green")
				  $("p").removeClass("import")*/
				 
				 $("h1,h2").removeClass("blue")
				 
				}
			</script>
		</head>
		<body>
			<h1 class="blue">标题 1</h1>
			<h2 class="blue">标题 2</h2>
			<p class="import">这是一个段落。</p>
			<div class="green">这是一些重要的文本!</div>
			<input type="button" value="删除元素的 class"  onclick="removeCssForEnement()"/>
		</body>
	</html>


​	
	3）toggleClass() - 对被选元素进行添加/删除类的切换操作
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title></title>
			<style type="text/css">
				.blue{color: #0000FF;}
				.green{color: green;}
				.import{
					 color: red;
					 font-size: 28px;
					 font-family: "微软雅黑";
				}
			</style>
			<script src="../js/jquery.js"></script>
			<script type="text/javascript">
				function siwtchCssForEnement(){
				 $("h1,h2").toggleClass("blue")
				}
			</script>
		</head>
		<body>
			<h1 class="blue">标题 1</h1>
			<h2 class="blue">标题 2</h2>
			<p class="import">这是一个段落。</p>
			<div class="green">这是一些重要的文本!</div>
			<input type="button" value="为元素添加/删除class"  onclick="siwtchCssForEnement()"/>
		</body>
	</html>
	5.6jQuery css() 方法***************************************
	 css() 方法设置或返回被选元素的一个或多个样式属性
	1）获取被选元素的样式的属性值
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title></title>
			<style type="text/css">
				.blue{color: #0000FF;}
				.green{color: green;}
				.import{
					 color: red;
					 font-size: 28px;
					 font-family: "微软雅黑";
				}
			</style>
			<script src="../js/jquery.js"></script>
			<script type="text/javascript">
				function getCssValue(){
				 alert($("p").css("width"))//返回首个匹配元素
				 alert($("#p2").css("width"))
				}
			</script>
		</head>
		<body>
			<p style="background-color: blue;width: 500px;">这是一个段落。</p>
			<p id="p2" style="background-color: blue;width: 400px;">这是一个段落。</p>
			<input type="button" value="返回 CSS 属性"  onclick="getCssValue()"/>
		</body>
	</html>
	
	2）设置 CSS 属性
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title></title>
			<style type="text/css">
				.blue{color: #0000FF;}
				.green{color: green;}
				.import{
					 color: red;
					 font-size: 28px;
					 font-family: "微软雅黑";
				}
			</style>
			<script src="../js/jquery.js"></script>
			<script type="text/javascript">
				function setCssValue(){
				 $("p").css("background-color","red")
				}
			</script>
		</head>
		<body>
			<p style="background-color: blue;width: 500px;">这是一个段落。</p>
			<p id="p2" style="background-color: blue;width: 400px;">这是一个段落。</p>
			<input type="button" value="返回 CSS 属性"  onclick="setCssValue()"/>
		</body>
	</html>
	3）设置多个 CSS 属性的值
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title></title>
			<style type="text/css">
				.blue{color: #0000FF;}
				.green{color: green;}
				.import{
					 color: red;
					 font-size: 28px;
					 font-family: "微软雅黑";
				}
			</style>
			<script src="../js/jquery.js"></script>
			<script type="text/javascript">
				function setManyCssValue(){
	
				 $("p").css({"background-color":"yellow","font-size":"200%"});
				}
			</script>
		</head>
		<body>
			<h2>这是一个标题</h2>
	<p style="background-color:#ff0000">这是一个段落。</p>
	<p style="background-color:#00ff00">这是一个段落。</p>
	<p style="background-color:#0000ff">这是一个段落。</p>
			<input type="button" value="设置多个 CSS 属性"  onclick="setManyCssValue()"/>
		</body>
	</html>
	5.7jQuery 尺寸方法***************************************
	width() 方法设置或返回元素的宽度（不包括内边距、边框或外边距）。
	height() 方法设置或返回元素的高度（不包括内边距、边框或外边距）。
	示例代码：
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title></title>
			<script src="../js/jquery.js"></script>
			<script type="application/javascript">
	$(document).ready(function(){
	  $("button").click(function(){
	    var txt="";
	    txt+="div 的宽度是: " + $("#div1").width() + "</br>";
	    txt+="div 的高度是: " + $("#div1").height();
	    $("#div1").html(txt);
	  });
	});
	</script>
	</head>
	<body>
	
	<div id="div1" style="height:100px;width:300px;padding:10px;margin:3px;border:1px solid blue;background-color:lightblue;"></div>
	<br>
	<button>显示 div 元素的尺寸</button>
	<p>width() - 返回元素的宽度</p>
	<p>height() - 返回元素的高度</p>
	
	</body>
	</html>
	
	innerWidth() 方法返回元素的宽度（包括内边距）。
	innerHeight() 方法返回元素的高度（包括内边距）。
	
	示例代码：
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title></title>
			<script src="../js/jquery.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
	  $("button").click(function(){
	    var txt="";
	    txt+="div 宽度: " + $("#div1").width() + "</br>";
	    txt+="div 高度: " + $("#div1").height() + "</br>";
	    txt+="div 宽度，包含内边距: " + $("#div1").innerWidth() + "</br>";
	    txt+="div 高度，包含内边距: " + $("#div1").innerHeight();
	    $("#div1").html(txt);
	  });
	});
	</script>
	</head>
	
	<body>
	<div id="div1" style="height:100px;width:300px;padding:10px;margin:3px;border:1px solid blue;background-color:lightblue;"></div>
	<br>
	
	<button>显示 div 元素的尺寸</button>
	<p>innerWidth() - 返回元素的宽度 (包含内边距)。</p>
	<p>innerHeight() - 返回元素的高度 (包含内边距)。</p>
	
	</body>
	</html>
### 6.利用Jquery实现Ajax***

	1.Ajax是什么？******************************
	什么是Ajax?
	是指一种创建交互式网页应用的网页开发技术
	是一种在无需重新加载整个网页的情况下，能够更新部分网页的技术
	
	简而言之：就是异步无刷新的获取数据的一种技术
	
	2.Ajax实现的方法******************************
	
	1.load() 方法从服务器加载数据，并把返回的数据放入被选元素中
	语法:$(selector).load(URL,data,callback);
	参数：
	必需的 URL 参数规定您希望加载的 URL：统一资源定位符，可以简单的理解为是网址。
	可选的 data 参数规定与请求一同发送的查询字符串键/值对集合：请求时传递的一个参数
	可选的 callback 参数是 load() 方法完成后所执行的函数名称
	  可选的 callback 参数规定当 load() 方法完成后所要允许的回调函数。回调函数可以设置不同的参数：
		responseTxt - 包含调用成功时的结果内容
		statusTXT - 包含调用的状态
		xhr - 包含 XMLHttpRequest 对象


​	
	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<title>AJAX获取外部数据信息</title>
	<script src="../js/jquery.js"></script>
	<script>
	$(document).ready(function(){
	  $("button").click(function(){
	    $("#div1").load("123.txt",function(responseTxt,statusTxt,xhr){
	      if(statusTxt=="success")
	        alert("外部内容加载成功!");
	      if(statusTxt=="error")
	        alert("Error: "+xhr.status+": "+xhr.statusText);
	    });
	  });
	});
	</script>
	</head>
	<body>
	
	<div id="div1"><h2>使用 jQuery AJAX 修改文本内容</h2></div>
	<button>获取外部内容</button>
	
	</body>
	</html>
	
	备注：你需要先创建一个123.txt,并在里面写一些内容


	2.jQuery get() 和 post() 方法用于通过 HTTP GET 或 POST 请求从服务器请求数据

	两种在客户端和服务器端进行请求-响应的常用方法是：GET 和 POST。
	GET - 从指定的资源请求数据
	POST - 向指定的资源提交要处理的数据
	
	GET 基本上用于从服务器获得（取回）数据。注释：GET 方法可能返回缓存数据。
	
	POST 也可用于从服务器获取数据。不过，POST 方法不会缓存数据，并且常用于连同请求一起发送数据
	
	备注：这个可以给学生展示一下java代码的例子效果
	
		2.1通过XHR对象创建（已经过时，不推荐使用）**********************************************
		2.2通过Jquery实现Ajax**********************************************
		
		基本原理：.通过jquery实现Ajax
	     1)在页面引入jquery.js文件
	     2）在相应的位置使用即可


	需求:
					按钮点击使用 ajax进行异步请求
					请求回来的数据进行解析
					将数据渲染成列表显示到页面中
	http请求：
	               get():获取数据
	               post()提交数据
	
	               状态码：
						4xx  请求出了问题，提供参数，路径有问题， 假如我将文件修改为movie_list.json123，那么此时就会出现错误的状态码404
						5xx  服务器内部逻辑，需要开发人员自行修复bug
						3xx  请求转发
	                    200：正常
	
	步骤：1）因为没有后台程序，所以此时我们用一个.json文件来充当数据来源（即是movie_list.json），并且将该文件引入到项目中
	         2）在页面中通过$.getJson来获取数据（因为我是要从.json文件中获取数据的） 
	             $.getJson():通过 HTTP GET 请求载入 JSON 数据。    
	             语法：jQuery.getJSON(url, [data], [callback])    
	             参数：   url:发送请求地址。
							 data:待发送 Key/value 参数。
							 callback:载入成功时回调函数
	
	        3）在<body>中创建元素，且进行显示
	
	             <input type="text" value="" name="" />
			<input type="button" id="get_movies" value="获取电影列表"" />
		  <div id="container">
		  	<!--用来展示图片的-->
		  	<div class="item">
		  		<img src=""  width="200px" height="200px"/>
		  		<p>人行天地间，忽如远行客</p>
		  	</div>
		  </div>
	      
	         4）对创建好的元素进行样式的设定
	                  img{
					width: 200px;
					height: 200px;
					border: 1px solid red;
					float: left;
				}
				p{
					height: 200px;
					line-height: 200px;
					float: left;
					text-align: center;
					margin: 0px;
					padding: 0px;
				}
				.item{
					border: 1px solid blue;
					height: 204px;
					padding: 1px;
				}
	
	       5）在页面上引人jquery开始写ajax
	     
	  $(document).ready(function(){
					
					$("#get_movies").click(function (){
						
						$.getJSON("movie_list.json",function(data){
							   //data:是获取到的数据传递的时候用的一个形参
							   var movie_data=data["data"]//“data”是json中数据的key值
							   console.log(movie_data)//将数据打印输出在控制台上
							
							//将获取到的数据循环展示在div中
							for(var i =0;i<movie_data.length;i++)
							{
								var $item=$("<div class='item'></div>")
								var $img=$("<img src='../img/02.jpg' />")
								var $p=$("<p></p>")
								$p.html(movie_data[i].title)
								$item.append($img).append($p)
								$("#dv").append($item)
							}
						})	
					})
					})
	0.在页面中创建元素并设置样式*************************
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>Jquery创建元素</title>
			<style type="text/css">
				.item{
					border: 1px solid red;
					height: 204px;
					padding: 1px;
				}
				img{
					width: 200px;
					height: 200px;
					float: left;
					border: 1px solid red;
				}
				p{
					height: 200px;
					line-height: 200px;
					float: left;
					text-align: center;
					margin: 0px;
					padding: 0px;
				}
				
			</style>
			<script src="../js/jquery.js"></script>
	        <script type="text/javascript">
	            function doCreateElement(){
	            	
	            	/* var $p= $("<p></p>")
	            	 $p.text("该段落的文本内容")
	            	 $("#dv").append($p)*/
	            	
	            var	$img=$("<img src='../img/02.jpg' />")
	            var $p= $("<p></p>")
	            $p.text("该段落的文本内容")
	            var	$item=$("<div class='item'></div>")
	            $item.append($img).append($p)
	            $("#dv").append($item)
	            	 
	            }
	        </script>
		</head>
		<body>
			<input type="button" value="点击" onclick="doCreateElement()" />
			<div id="dv">
			</div>
		</body>
	</html>

### 7.Jquery遍历****

	jQuery 遍历，意为"移动"，用于根据其相对于其他元素的关系来"查找"（或选取）HTML 元素
	 看示意图：Jquer遍历-树形元素示例


	提示：祖先是父、祖父或曾祖父等等。
	通过 jQuery，您能够向上遍历 DOM 树，以查找元素的祖先


	7.1遍历 - 祖先*********************
	 1）parent() 方法返回被选元素的直接父元素。该方法只会向上一级对 DOM 树进行遍历。
	示例代码：
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<style type="text/css">
				.dv *{ 
		display: block;
		border: 2px solid lightgrey;
		color: lightgrey;
		padding: 5px;
		margin: 15px;
	}
			</style>
			<title></title>
			<script src="../js/jquery.js"></script>
	        <script type="text/javascript">
	        	
	        	$(document).ready(function (){
	        		
	        	$("span").parent().css({"color":"red","border":"2px solid red"})
	        	
	        	})
	        	
	        </script>
		</head>
		<body>
			<div class="dv">
				<div style="width:500px;">div(曾祖父元素)
					<ul>ul(祖父元素)
	                   <li>li(父元素)
	                   	<span>span中的内容</span>
	                   </li>					
					</ul>
				</div>
			</div>
		</body>
	</html>


​	
	2）parents() 方法返回被选元素的所有祖先元素，它一路向上直到文档的根元素 (<html>)

	示例代码：

	        	$(document).ready(function (){

	        	$("span").parents().css({"color":"red","border":"2px solid red"})

	        	})

	3）parentsUntil() 方法返回介于两个给定元素之间的所有祖先元素。
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<style type="text/css">
				.dv *{ 
		display: block;
		border: 2px solid lightgrey;
		color: lightgrey;
		padding: 5px;
		margin: 15px;
	}
			</style>
			<title></title>
			<script src="../js/jquery.js"></script>
	        <script type="text/javascript">
	        	
	        	$(document).ready(function (){
	        		
	        	$("span").parentsUntil("div").css({"color":"red","border":"2px solid red"})
	        	
	        	})
	        	
	        </script>
		</head>
		<body>
			<div class="dv">
				<div style="width:500px;">div(曾祖父元素)
					<ul>ul(祖父元素)
	                   <li>li(父元素)
	                   	<span>span中的内容</span>
	                   </li>					
					</ul>
				</div>
			</div>
		</body>
	</html>
	7.2遍历 - 后代*********************
	 后代是子、孙、曾孙等等。
	通过 jQuery，您能够向下遍历 DOM 树，以查找元素的后代。


	1）children() 方法返回被选元素的所有直接子元素。
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>Jquery变量之获取子元素</title>
			<style type="text/css">
				.dv *{
					display: block;
					border: 2px solid #ccc;
					margin: 15px;
					padding: 15px;
					
				}
				
			</style>
			<script src="../js/jquery.js"></script>
			<script type="text/javascript">
				$(document).ready(function(){
					$(".dv").children().css({"color":"red","border":"2px solid red"})
				})
			</script>
		</head>
		<body>
	
	<div class="dv" style="width:500px;">div (当前元素) 
	  <p>p (儿子元素)
	    <span>span (孙子元素)</span>     
	  </p>
	  <p>p (儿子元素)
	    <span>span (孙子元素)</span>
	  </p> 
	</div>


		</body>
	</html>


​	
	2）find() 方法返回被选元素的后代元素，一路向下直到最后一个后代。
	$(document).ready(function(){
					//$(".dv").find("span").css({"color":"red","border":"2px solid red"})
	               $(".dv").find("*").css({"color":"red","border":"2px solid red"})
				})


	3）
	7.3遍历 - 同胞(siblings)*********************
	 同胞拥有相同的父元素。
	通过 jQuery，您能够在 DOM 树中遍历元素的同胞元素。
	
	1）siblings() 方法返回被选元素的所有同胞元素。
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<style type="text/css">
				   .sgs *
						{ 
							display: block;
							border: 2px solid lightgrey;
							color: lightgrey;
							padding: 5px;
							margin: 15px;
						}
			</style>
			<title></title>
			<script src="js/jquery.js"></script>
			<script type="text/javascript">
				
				$(document).ready(function (){
					
					$("h2").siblings().css({"color":"red","border":"2px solid red"})
								
				})		
			</script>
		</head>
		<body class="sgs">
			 <div>div (父元素)
			  <p>p</p>
			  <span>span</span>
			  <h2>h2</h2>
			  <h3>h3</h3>
			  <p>p</p>
			</div>
	</body>
	</html>
	
	2）next() 方法返回被选元素的下一个同胞元素
		
				$(document).ready(function (){
					$("h2").next().css({"color":"red","border":"2px solid red"})
				})


	3）nextAll() 方法返回被选元素的所有跟随的同胞元素。
				$(document).ready(function (){
					$("h2").nextAll().css({"color":"red","border":"2px solid red"})
				})


	4）nextUntil() 方法返回介于两个给定参数之间的所有跟随的同胞元素：可以简单的理解为h2和h6之间夹的元素
	$(document).ready(function (){
					$("h2").nextUntil("h6").css({"color":"red","border":"2px solid red"})
				})
	7.4遍历- 过滤*********************
	  遍历过滤：缩小搜索元素的范围


	1）first() 方法返回被选元素的首个元素
	示例代码：
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<style type="text/css">
				   .sgs *
						{ 
							display: block;
							border: 2px solid lightgrey;
							color: lightgrey;
							padding: 5px;
							margin: 15px;
						}
			</style>
			<title></title>
			<script src="js/jquery.js"></script>
			<script type="text/javascript">
				
				$(document).ready(function (){
					$("body div").first().css("background-color","yellow")
				})


​				
​				
			</script>
		</head>
		<body id="by">
			
	<h1>欢迎访问我的主页</h1>
	<div>
		<p>这是 div 中的一个段落。</p>
	</div>
	
	<div>
		<p>这是另外一个 div 中的一个段落。</p>
	</div>
	
	<p>这是一个段落。</p>
	
	</body>
	</html>


	2）last() 方法返回被选元素的最后一个元素。
	$(document).ready(function (){
					$("body div").last().css("background-color","yellow")
				})


	3）eq() 方法返回被选元素中带有指定索引号的元素。：从匹配的一组中选中某一个进行显示
	索引号从 0 开始，因此首个元素的索引号是 0 而不是 1
	
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<style type="text/css">
				   .sgs *
						{ 
							display: block;
							border: 2px solid lightgrey;
							color: lightgrey;
							padding: 5px;
							margin: 15px;
						}
			</style>
			<title></title>
			<script src="js/jquery.js"></script>
			<script type="text/javascript">
				
				$(document).ready(function (){
					$("p").eq(1).css("background-color","yellow")
				})


​				
​				
			</script>
		</head>
		<body id="by">


	<h1>欢迎访问我的主页</h1>
	<p>我的前半生</p>
	<p>我的后半生</p>
	<p>我的下一辈子</p>
	<p>我的上辈子</p>
	
	</body>
	</html>
	
	4）filter() 方法允许您规定一个标准。不匹配这个标准的元素会被从集合中删除，匹配的元素会被返回：匹配的 选择显示，不匹配的不显示
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<style type="text/css">
				   .sgs *
						{ 
							display: block;
							border: 2px solid lightgrey;
							color: lightgrey;
							padding: 5px;
							margin: 15px;
						}
			</style>
			<title></title>
			<script src="js/jquery.js"></script>
			<script type="text/javascript">
				
				$(document).ready(function (){
					$("p").filter(".qs").css("background-color","yellow")
				})


​				
​				
			</script>
		</head>
		<body id="by">


	<h1>欢迎访问我的主页</h1>
	<p>我的前半生</p>
	<p>我的后半生</p>
	<p class="qs">我的下一辈子</p>
	<p class="qs">我的上辈子</p>
	
	</body>
	</html>
	
	5）not() 方法返回不匹配标准的所有元素。
		$(document).ready(function (){
					$("p").not(".qs").css("background-color","yellow")
				})


​	
### 8杂项与其他

	杂项******************************************
	 1.之前在课堂上有学生提过，不用$可以吗 ，我给的答案是可以的，但是不建议使用
	示例代码：


​	
​	
​	
	当你的页面中不仅有jquery框架 还有其他框架时，
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title></title>
			<script src="../js/jquery.js"></script>
			
			<script type="text/javascript">
				function doJQ(){
					  alert("执行函数")
	                  var aobam=jQuery.noConflict()
	                  aobam("#mg").hide()   //此时aobam就相当于$
	                  aobam("#p1").hide()
	             //换成其他的不见得能全部好使，所以不建议使用
				}
				
			</script>
		</head>
		<body>
			<img id="mg" src="../img/02.jpg" />
			<p id="p1">段落中的内容</p>
			<input type="button" value="点击" onclick="doJQ()" />
		</body>
	</html>
	
	2.当同一个页面有多个jquery时候回产生冲突，
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title></title>
			<script src="../js/jquery-1.4.2.min.js"></script>
			 <script type="text/javascript">
	          var $142 = $
	          function doJquery142(){
	          	
	          	alert("142")
	          	alert("此处是通过Jquery-1.4.2获取的数据"+$142("p").html())
	          }
	         </script>


	         <script src="../js/jquery.js"></script>
	         <script type="text/javascript">
	          var $183 = $
	          function doJquery183(){
	          alert("183")
	          alert("此处是通过Jquery-1.8.3获取的数据"+$183("p").html())
	          	
	          }
	         
	         </script>
	         
		</head>
		<body>
			<p>段落的内容</p>
			<input type="button" value="Jquery1.4.2" onclick="doJquery142()" />
			<input type="button" value="Jquery1.8.3" onclick="doJquery183()" />
	
		</body>
	</html>


​	
	备注：如果还是希望多汲取一些知识的话：https://www.cnblogs.com/laoyu/p/5189750.html

​	
​	
	3.js数组对象中sort（）排列数字和英文
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>JS中数组对象的sort()方法</title>
			<script type="text/javascript">
				//排英文
				function doSortByAbc(){
					
					var array_abc=['apple','orangle','pera','banana']
					document.write(array_abc.sort())
				}
				//排数字
				function doSortByNumber(){
					var arr = [22,12,3,43,56,47,4]
					document.write("没经过加工处理的情况："+arr)
					
	                        arr.sort(function (m,n){
	                        	if(m<n){return -1}
	                        	else if(m>n){return 1}
	                        	else{return 0}
	                        });
	                        
	            document.write("<br/>经过加工处理后的情况："+arr)
				}
			</script>
		</head>
		<body>
			<p id="p1"></p>
			<input type="button" value="排序字母"   onclick="doSortByAbc()"/>
		    <input type="button" value="排序数字"   onclick="doSortByNumber()"/>


​		
		</body>
	</html>
	
	JSON********************************************
	JSON：是一种轻量级的数据交换格式。它基于 ECMAScript (欧洲计算机协会制定的js规范)的一个子集，采用完全独立于编程语言的文本格式来存储和表示数据。简洁和清晰的层次结构使得 JSON 成为理想的数据交换语言。 易于人阅读和编写，同时也易于机器解析和生成，并有效地提升网络传输效率
	
	简而言之：是存储数据的一种方式
	
	与之类似的技术有：xml
	
	JSON 语法规则：
	   				1.对象表示为键值对
					2.数据由逗号分隔
					3.花括号保存对象
					4.方括号保存数组


	例如：
	{
	    "name": "中国",
	    "province": [{
	        "name": "黑龙江",
	        "cities": {
	            "city": ["哈尔滨", "大庆"]
	        }
	    }, {
	        "name": "广东",
	        "cities": {
	            "city": ["广州", "深圳", "珠海"]
	        }
	    }, {
	        "name": "台湾",
	        "cities": {
	            "city": ["台北", "高雄"]
	        }
	    }, {
	        "name": "新疆",
	        "cities": {
	            "city": ["乌鲁木齐"]
	        }
	    }]
	}
	那么这段json表示的意思为：中国：黑龙江 ，广东，台湾，新疆，以及他们的主要城市
	
	怎样解析json：直接使用js/jquery解析即可
	示例代码：
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8" />
			<title></title>
			<script src="js/jquery.js"></script>
			<script type="text/javascript">
		function doJson(){
				packJson = [
				{"name":"张无忌", "password":"123456"},
				
				{"name":"张君宝", "password":"654321"}
				
				];
				
				for(var p in packJson){//遍历json数组时，这么写p为索引，0,1
				
				   alert(packJson[p].name + " ： " + packJson[p].password);
				
				}
			}
			</script>
		</head>
		<body>
			<input type="button" value="解析json" onclick="doJson()" />
		</body>
	</html>