## JavaScript 表单验证

JavaScript 可用来在数据被送往服务器前对 HTML 表单中的这些输入数据进行验证。

## 必填（或必选）项目

下面的函数用来检查用户是否已填写表单中的必填（或必选）项目。假如必填或必选项为空，那么警告框会弹出，并且函数的返回值为 false，否则函数的返回值则为 true（意味着数据没有问题）：

```javascript
function validateForm()
{
  var x=document.forms["myForm"]["fname"].value;
  或者  
  document['myForm'].fname.value
  if (x==null || x=="")
  {
    alert("姓必须填写");
    return false;
  }
}
```

以上函数在 form 表单提交时被调用:

#### 实例

```html
<form name="myForm" action="demo-form.php" onsubmit="return validateForm()" method="post">姓: <input type="text" name="fname"><input type="submit" value="提交"></form>
或者
<input type="submit" value="提交" onclick="return 函数名();">
function 函数名(){
  return false;
}
```

## E-mail 验证

下面的函数检查输入的数据是否符合电子邮件地址的基本语法。

意思就是说，输入的数据必须包含 @ 符号和点号(.)。同时，@ 不可以是邮件地址的首字符，并且 @ 之后需有至少一个点号：

```javascript
function validateForm(){
  var x=document.forms["myForm"]["email"].value;
  var atpos=x.indexOf("@");
  var dotpos=x.lastIndexOf(".");
  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){
    alert("不是一个有效的 e-mail 地址");
    return false;
  }
}
```

下面是连同 HTML 表单的完整代码：

#### 实例

```html
<form name="myForm" action="demo-form.php" onsubmit="return validateForm();" method="post">
    Email: <input type="text" name="email">
    <input type="submit" value="提交">
</form>
```

### 表单常用属性

1. required="required"     规定输入元素字段是必需的

2. autofocus                       自动获取焦点

3. \<input> pattern 属性

   pattern 属性描述了一个正则表达式用于验证 <input> 元素的值。

   **注意:**pattern 属性适用于以下类型的 <input> 标签: text, search, url, tel, email, 和 password.

   **提示：** 是用来全局 [title](http://www.runoob.com/tags/tag-title.html) 属性描述了模式.

   ```html
   <input type="text" name="country_code" pattern="[A-Za-z]{3}" title="Three letter country code">
   ```

### 验证表单实例

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script>
        //return false 可以阻止表单的提交
        function myCheck() {
            //验证用户名
            var myform = document.forms['myform']['username'].value;
            var userNameBool = Boolean(myform.match(/^1[3-8][0-9]{9}$/))
            if(!userNameBool){
                var span = document.createElement('span');
                var text = document.createTextNode('请输入正确的用户名')
                span.style.color = "red";
                span.appendChild(text)
                userNameP = document.forms['myform']['username'].parentNode;//获取当前用户名的父节点p标签
                if(userNameP.lastChild.tagName!='SPAN'){
                    userNameP.appendChild(span);
                }
                return false;
            }

        }
        //当鼠标获取到username文本框的时候 调用的方法 如果存在最后一个提示信息的span则进行移除
        function myUserNameFocuc(obj){
            if(obj.parentNode.lastChild.tagName=='SPAN'){
                obj.parentNode.removeChild(obj.parentNode.lastChild);
            }
        }
    </script>
</head>
<body>
<form action="" name="myform" method="post" onsubmit="return myCheck();">
    <p><input type="text" name="username" onfocus="myUserNameFocuc(this)" autofocus>用户名</p>
    <p><input type="password" name="userpassword">密码</p>
    <p><input type="text"  pattern="[A-Za-z]{3}"></p>
    <p><input type="submit" value="提交"></p>
</form>
</body>
</html>
```

### 超链接提交表单

```javascript
<form name='form1' action='1111.html' method='get'>
    <input type='hidden' name='page' value='1'/>
    <input type='hidden' name='hiddenA' value='A'/>
    <a href='javascript:document["form1"].submit();'><font color='#000000'>首页</font></a>
</form>
```

